<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $reviews=Review::orderBy('created_at', 'DESC');

        if(request()->has('search')){
            $reviews=$reviews->where('content', 'like', '%' . request()->get('search', '') . '%');
        }

        return view(
            'dashboard',
            ['reviews' => $reviews->paginate(5)
        ]);
    }
}
