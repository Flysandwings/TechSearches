<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function all()
    {
        if(Role::find(Auth::user()->role_id)->name === "searcher"){
            return $this->index();
        }
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function index()
    {
        if(Role::find(Auth::user()->role_id)->name === "finder"){
            return $this->all();
        }
        $posts = Post::where('user_id', Auth::user()->id)->get();
        return view('posts.index', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $post = new Post();
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->closed = 0;
        $post->user_id = Auth::id();
        $post->save();

        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $closed = 0;
        if($request->input('closed') == 'on'){
            $closed = 1;
        }

        $role = session('role');
        if($role === "finder"){
            $post->finder_id = Auth::id();
        }

        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->closed = $closed;
        $post->response = $request->input('response');
        $post->save();

        return redirect()->route('posts.show', $post);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }
}

?>