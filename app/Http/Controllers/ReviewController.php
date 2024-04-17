<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function show(Review $review){
        return view('reviews.show', compact('review'));
    }
    public function store(){
       $validated = request()->validate([
            'content'=>'required|min:3|max:240'
        ]);

        Review::create($validated);

        return redirect()->route('dashboard')->with('success', 'Review submited successfully');
    }
    public function destroy(Review $review){

        $review->delete();

        return redirect()->route('dashboard')->with('success', 'Review deleted successfully');
    }
    public function edit(Review $review){
        $editing=true;
        return view('reviews.show', compact('review','editing'));
    }

    public function update(Review $review){
       $validated = request()->validate([
            'content'=>'required|min:3|max:240'
        ]);

        $review->uodate($validated);

        return redirect()->route('reviews.show', $review->id)->with('success', "Review updated successfully");
    }
}
