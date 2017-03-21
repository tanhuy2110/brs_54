<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Favorite;

class FavoriteController extends Controller
{
    public function store(Request $request)
    {
        if ($request->ajax()){
            $favorites = Favorite::where('user_id', $request->get('user_id'))->first();
            if ($favorites) {
                $favorites->delete();

                return response()->json(config('book.favoriteBook.unfavorite'));
            }

            Favorite::create($request->all());

            return response()->json(config('book.favoriteBook.favorite'));     
        }
    }
}
