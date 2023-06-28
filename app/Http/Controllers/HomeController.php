<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        // $posts = DB::table('posts')->orderBy('id', 'desc')->get();
        $posts = Post::all()->sortByDesc('id');
        return view('home', [
            "posts" => $posts
        ]);
    }
    public function about()
    {
        return view("about");
    }
}
