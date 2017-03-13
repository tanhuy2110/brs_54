<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Book;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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
}
