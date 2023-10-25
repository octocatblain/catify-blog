<?php

namespace App\Http\Controllers;

use App\Models\Post; //imports posts model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

// use DB; use this when not using eloquent

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //mySQL code when not using eloquent
        // $posts = Post::all();
        // $posts = DB::select('SELECT * FROM posts');

        // pagination and ordering
        $posts = Post::orderBy('created_at', 'desc')->simplePaginate(10); //gets post by the most recent
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //load create template
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);


        // handle file upload
        $requestData = $request->all();
        $fileName = time() . $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $requestData["image"] = '/storage/' . $path;
        $post = Post::create($requestData);

        $post->save();

        return redirect('/posts/create')->with('success', 'Post published!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show blog posts on individual pages
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // handle file upload
        $requestData = $request->all();
        $fileName = time() . $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $requestData["image"] = '/storage/' . $path;

        // update post
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->image = $request->input('image');
        $post->save();

        return redirect('/posts')->with('success', 'Post updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // delete post
        $post = Post::find($id);

        // delete image
        if (
            $post->image
            != 'noimage.jpg'
        ) {
            Storage::delete(
                'app/public/image
            s/' . $post->image
            );
        }

        $post->delete();

        return redirect('/posts')->with('success', 'Post deleted!');
    }
}
