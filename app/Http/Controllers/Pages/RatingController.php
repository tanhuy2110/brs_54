<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Models\Rate;
use App\Models\Book;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class RatingController extends Controller
{
    protected $rating;

    function __construct(Rate $rating)
    {
        $this->rating = $rating;
    }

    public function store(Request $request)
    {
        if ($request->ajax()) {
            DB::beginTransaction();
            try {                
                $book = Book::findOrFail($request->get('book_id'));
                $rating = new Rate;
                $rating->point = $request->get('rating');
                $rating->book_id = $request->get('book_id');
                $rating->user_id = $request->get('user_id');
                $rating->save();      
                DB::commit();
                
                return response()->json();
            } catch(\Exception $e){
                DB::rollback();

                return response()->json([], 400);
            }
        }
    }
}
