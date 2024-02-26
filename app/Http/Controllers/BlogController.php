<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class BlogController extends Controller
{
    function index() {
        $wpisy = blog::all();
        return view('blog.index', [
            'wpisy' => $wpisy
        ]);
    }
}
