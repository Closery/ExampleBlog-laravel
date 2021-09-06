<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
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

    public function LikePost(Post $post, Request $request) {
        if(!$post->isLikedBy($request->user())) {
            $post->likes()->create([
                'user_id' => $request->user()->id
            ]);
        }

        return back();
    }

    public function UnlikePost(Post $post, Request $request) {
        $request->user()->likes()->where('post_id', $post->id)->delete();
        
        return back();
    }
}
