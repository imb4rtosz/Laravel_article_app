<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
    public function index()
    {
         return view ('index')
         ->with('post' , Post::latest()->first());
    }
    public function about () 
    {
         
    }
}
