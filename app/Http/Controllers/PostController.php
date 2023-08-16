<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController
{
    public function create(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|unique:posts|max:255',
            'phone' => 'required|unique:posts|max:255',
            'direction' => 'required|unique:posts|max:255',
        ]);

        $post = Post::create([
            'full_name' => $request->full_name,
            'phone' => $request->phone,
            'direction' => $request->direction,
        ]);
        return view('info',['post' => $post]);
    }
    public function update(Request $request,Post $post)
    {
        $post = $post->update([
            'conclusion' => $request->conclusion,
            'operator_name' => $request->operator_name,
            'is_read' => true
        ]);
        return redirect()->back();
    }

    public function index()
    {
        return view('index',[
            'posts' => DB::table('posts')->paginate(10)
        ]);
    }
}
