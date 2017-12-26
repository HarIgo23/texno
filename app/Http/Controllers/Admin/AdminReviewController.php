<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Http\Requests\reviewRequest;

class AdminReviewController extends Controller
{
    public function listShow(){

        $reviews=Review::paginate(6);

        return view('Admin/Review/reviewList',['reviews'=>$reviews]);
    }

    public function show($review_id){

        $review=Review::find($review_id);

        return view('Admin/Review/reviewShow',['review'=>$review]);
    }

    public function create(){

        return view('Admin/Review/reviewCreate');

    }

    public function store(reviewRequest $request){

        $review=new Review ;
        $review->fill($request->all());
        $request->visible=='on'?$review->visible=1:$review->visible=0;
        $review->save();

        return redirect()->route('adminPage');
    }

    public function edit($review_id){

        $review=Review::find($review_id);

        return view('Admin/Review/reviewEdit',['review'=>$review]);
    }

    public function update(reviewRequest $request,$review_id){

        $review=Review::find($review_id);
        $review->update($request->all());
        $request->visible=='on'?$review->visible=1:$review->visible=0;
        $review->save();

        return redirect()->route('review.list');
    }

    public function delete($review_id){

        $review=Review::find($review_id);
        $review->delete();

        return redirect()->route('review.list');
    }
}
