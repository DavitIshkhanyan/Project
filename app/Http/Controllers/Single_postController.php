<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Single_postController extends Controller
{
    public function index(){
        return view('single-post');
    }
}
