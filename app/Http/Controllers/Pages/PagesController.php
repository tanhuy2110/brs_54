<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Requests\LoginPagesRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterPagesRequest;
use Mail;

class PagesController extends Controller
{
    public function __construct()
    {
        $categories = Category::all();
        view()->share(compact('categories'));
    }

    public function index()
    {
        return view('pages.index', compact('categories'));
    }
    
    public function viewBooks($id)
    {
        try{
            $viewBook = Book::findOrFail($id);
            $viewBookTop = Book::where('id')->take(3)->get();
            $viewBookSame = Book::where('category_id', $viewBook->category_id)->take(3)->get();

            return view('pages.viewBook', compact('viewBook', 'viewBookTop', 'viewBookSame', 'categories', 'id'));
        } catch(ModelNotFoundException $e) {

            return view('pages.viewBook')->with('notification', trans('admin.notification.fail'));
        }   
    }

    public function getLogin()
    {
        return view('pages.loginpage');
    }


    public function postLogin(LoginPagesRequest $request)
    {
        if (Auth::attempt([
                'email' => $request->email, 
                'password' => $request->password, 
                'status' => config('book.status.active'),
            ])) {

            return redirect()->action('Pages\PagesController@index');
        }

        return redirect()->back()->with('notification', trans('admin.notification.faillogin'));
    }

    public function getLogout()
    {
        Auth::logout();

        return redirect()->action('Pages\PagesController@index');
    }

    public function postRegister(RegisterPagesRequest $request)
    {
        try {
            $conf = strtolower(str_random(50));
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->role = config('book.isAdmin.user');
            $user->status = config('book.status.unactive');
            $user->confirmation_code = $conf;
            $user->save();
            $data = [
                'confirmationCode' => $conf,
            ];
            Mail::send('pages.verify_email', $data, function($message) use ($request){
            $message->to($request->email, $request->name)
                ->subject( trans('admin.notification.verify'));
            });

            return redirect()->action('Pages\PagesController@getLogin')
            ->with('notification', trans('admin.notification.cofirmmail'));
        } catch(\Exception $e) {

            return redirect()
            ->action('Pages\PagesController@index')
            ->with('notification', trans('admin.notification.registerfail'));
        }
    }

    public function confirm($confirmationCode)
    {
        if (!$confirmationCode) {
            return redirect()
            ->action('Pages\PagesController@index')
            ->with('notification', trans('authentication.incorrect_url'));

        }
        $user = User::where('confirmation_code', $confirmationCode)->first();

        if (!$user) {
            return redirect()
            ->action('Pages\PagesController@index')
            ->with('notification', trans('authentication.invalid_code'));

        }

        $user->status = config('book.status.active');
        $user->confirmation_code = null;
        $user->save();

        return redirect()
        ->action('Pages\PagesController@index')
        ->with('notification', trans('admin.notification.verify_success'));
    }
}
