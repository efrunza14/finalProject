<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Review;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Review $review){
        $comment = new Comment();
        $comment->review_id = $review->id;
        $comment->content=request()->get('content');
        $comment->save();

        return redirect()->route('reviews.show',$review->id)->with('success',"Comment posted successfully");
    }
}
