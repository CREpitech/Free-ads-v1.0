<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
        public function index(Request $request)
    {
        $categories = Category::all();
        return view('create')->with(compact(['categories']));
    }

}