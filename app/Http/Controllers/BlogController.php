<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function Index() {
        $posts = Post::paginate(5);
        
        return view('blog.index', [
            'posts' => $posts
        ]);
    }

    public function Create() {
        if (!auth()->user()) 
            return redirect('blog');
        
        return view('blog.create');
    }

    public function CreatePost(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $request->user()->posts()->create($request->only('title', 'body'));

        return back();
    }
}
