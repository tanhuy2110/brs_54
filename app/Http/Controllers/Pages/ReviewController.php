<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ReviewRequest;

class ReviewController extends Controller
{
    public function postReview($id, ReviewRequest $request)
    {
        try{
            $review = new Review;
            $review->book_id = $id;
            $review->user_id = Auth::user()->id;
            $review_text = $request->review;
            $review->review_text = $review_text;
            $summary = substr($review_text, 0, 15);
            $review->summary = $summary;
            $review->save();

            return redirect()
                ->action('Pages\PagesController@index')
                ->with('notification', trans('admin.notification.review_success'));
        } catch(\Exception $e) {
            return view('pages.viewBook')->with('notification', trans('admin.notification.fail'));
        }
        
    }
    public function deleteReview($id)
    {
        try {
            Review::findOrFail($id)->delete();

            return redirect()
                ->action('Pages\PagesController@index')
                ->with('notification', trans('admin.notification.reviewDelete'));
        } catch(\Exception $e){
            return redirect()
                ->action('Pages\PagesController@index')
                ->with('notification', trans('admin.notification.fail'));
        }
    }
}
