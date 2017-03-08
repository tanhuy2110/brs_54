<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function index()
    {
        $users = User::all();
        return view('admin.user.list', compact('users'));
    }

    public function edit($id)
    {
        try {
            $user = User::findOrFail($id);
            return view('admin.user.edit', compact('user'));
        } catch(\Exception $e){
            return redirect()->action('UserController@index')->with('notification', trans('admin.notification.failchoose'));
        }
    }

    public function create()
    {
        return view('admin.user.add');
    }

    protected function uploadImage($request)
    {
        if (!($request->hasFile('avatar'))) {           
            return null;
        }

        $file = $request->file('avatar');
        $fileName = $file->getClientOriginalName();
        if (Storage::exists(config('book.userAvatar') . $fileName)) {
            $fileName = md5(time()) . $fileName;
        }

        $userAvatar = $file->storeAs(config('book.userAvatar'), $fileName);
        return $userAvatar;
        
    }

    public function store(UserRequest $request)
    {
        $userAvatar = $this->uploadImage($request);
        $input = $request->all();
        if (!isset($userAvatar)) {
            unset($input['avatar']);
        } else {
            $input['avatar'] = $userAvatar;
        }
        $user = $this->user->create($input);    
        if ($user) {
            return redirect()->action('UserController@index')->with('notification', trans('admin.notification.addsuccess'));
        }

        return redirect()->action('UserController@index')->with('notification', trans('admin.notification.fail'));
    }

    public function update(UserRequest $request, $id)
    {
        $user = $this->user->findOrFail($id);
        $input = $request->all();
        $user->update($input);
        if ($user) {
            return redirect()->action('UserController@index')->with('notification', trans('admin.notification.editsuccess'));
        }

        return redirect()->action('UserController@index')->with('notification', trans('admin.notification.fail'));
    }

    public function destroy($id)
    {
        try {
            User::findOrFail($id)->delete();  
            return redirect()->action('UserController@index')->with('notification', trans('admin.notification.userDelete'));
        } catch(\Exception $e){
            return redirect()->action('UserController@index')->with('notification', trans('admin.notification.fail'));
        }
    }
}
