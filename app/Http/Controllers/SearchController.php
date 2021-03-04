<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use function JmesPath\search;

class SearchController extends Controller
{
    public function index(Request $request){
        $request->validate([
           'search' =>  'required'
        ]);

        $s = $request->search;
        $posts = Post::where('title', 'LIKE', "%{$s}%")->with('category')->paginate(2);
        return view('posts.search', compact('posts', 's'));
    }
}
