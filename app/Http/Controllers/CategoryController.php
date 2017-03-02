<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.category.list', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.add');
    }

    public function store(CategoryRequest $request)
    {
        try {
            $category = new Category;
            $category->name = $request->txtCateName;
            $category->save();

            return redirect()->action('CategoryController@index')->with('notification', trans('admin.notification.addsuccess'));
        } catch(\Exception $e){
            return redirect()->action('CategoryController@index')->with('notification', trans('admin.notification.fail'));
        }

    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('admin.category.edit', compact('category'));
    }

    public function update(CategoryRequest $request, $id)
    {
        try {
            $category = Category::findOrFail($id);
            $category->name = $request->txtCateName;
            $category->save();
            return redirect()->action('CategoryController@index')->with('notification', trans('admin.notification.editsuccess'));
        } catch (\Exception $e) {
            return redirect()->action('CategoryController@index')->with('notification', trans('admin.notification.fail'));
        }
    }

    public function destroy($id)
    {
        try {
            Category::findOrFail($id)->delete();  
            return redirect()->action('CategoryController@index')->with('notification', trans('admin.notification.cateDelete'));
        } catch(\Exception $e){
            return redirect()->action('CategoryController@index')->with('notification', trans('admin.notification.fail'));
        }
    }
}
