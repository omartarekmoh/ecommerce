<?php

namespace App\Http\Controllers\board;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
      $reviews = Review::all();
      return view('board.review.index', compact('reviews'));
    }
}
