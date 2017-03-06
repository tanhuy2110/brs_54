<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    protected $book;

    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    public function index()
    {
        $books = Book::all();
        return view('admin.book.list', compact('books'));
    }

    public function create()
    {
        $categories = Category::pluck('name', 'id');
        return view('admin.book.add', compact('categories'));
    }

    protected function uploadImage($request)
    {
        if (!($request->hasFile('image'))) {           
            return null;
        }

        $file = $request->file('image');
        $fileName = $file->getClientOriginalName();
        if (Storage::exists(config('book.bookImage') . $fileName)) {
            $fileName = md5(time()) . $fileName;
        }

        $imageBook = $file->storeAs(config('book.bookImage'), $fileName);
        return $imageBook;
        
    }

    public function store(BookRequest $request)
    {
        $imageBook = $this->uploadImage($request);
        $input = $request->all();
        if (!isset($imageBook)) {
            unset($input['image']);
        } else {
            $input['image'] = $imageBook;
        }
        $book = $this->book->create($input);    
        if ($book) {
            return redirect()->action('BookController@index')->with('notification', trans('admin.notification.addsuccess'));
        }

        return redirect()->action('BookController@index')->with('notification', trans('admin.notification.fail'));
    }

    public function edit($id)
    {
        try {
        $book = Book::findOrFail($id);
        $categories = Category::pluck('name', 'id');
        return view('admin.book.edit', compact('book','categories'));
        } catch(\Exception $e){
            return redirect()->action('BookController@index')->with('notification', trans('admin.notification.failchoose'));
        }

    }

    public function update(BookRequest $request, $id)
    {
        $book = $this->book->findOrFail($id);
        $imageBook = $this->uploadImage($request);
        $input = $request->all();
        if (!isset($imageBook)) {
            unset($input['image']);
        } else {
            $input['image'] = $imageBook;
        }

        $book = $this->book->create($input);    
        if ($book) {
            return redirect()->action('BookController@index')->with('notification', trans('admin.notification.editsuccess'));
        }

        return redirect()->action('BookController@index')->with('notification', trans('admin.notification.fail'));
    }

    public function destroy($id)
    {
        try {
            Book::findOrFail($id)->delete();
            return redirect()->action('BookController@index')->with('notification', trans('admin.notification.cateDelete'));
        } catch(\Exception $e){
            return redirect()->action('BookController@index')->with('notification', trans('admin.notification.fail'));
        }
    }
}
