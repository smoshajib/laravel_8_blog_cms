<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\CategoryPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->where('post_type', 'post')->get();
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->get();
//        dd($categories);
        return view('admin.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     "thumbnail" => 'required',
        //     "title" => 'required|unique:posts',
        //     "details" => "required",
        //     "category_id" => "required"
        // ],
        //     [
        //         'thumbnail.required' => 'Enter thumbnail url',
        //         'title.required' => 'Enter title',
        //         'title.unique' => 'Title already exist',
        //         'details.required' => 'Enter details',
        //         'category_id.required' => 'Select categories',
        //     ]
        // );

        $post = new  Post();
        $post->user_id = Auth::id();
        $post->thumbnail = $request->thumbnail;
        $post->title = $request->title;
        $post->slug = str::slug($request->title);
        $post->sub_title = $request->sub_title;
        $post->details = $request->details;
        $post->is_published = $request->is_published;
        $post->post_type = 'post';
        $post->save();

        $post->categories()->sync($request->category_id,$post->id);
        // dd($request->category_id);
        

        Session::flash('message', 'Post created successfully');
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $categories=Category::all();
        $post=Post::findOrFail($id);
        return view('admin.post.edit', compact('categories','post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            "thumbnail" => 'required',
            'title' => 'required|unique:posts,title,' . $post->id . ',id', // ignore this id
            'details' => 'required',
            "category_id" => "required"
        ],
            [
                'thumbnail.required' => 'Enter thumbnail url',
                'title.required' => 'Enter title',
                'title.unique' => 'Title already exist',
                'details.required' => 'Enter details',
                'category_id.required' => 'Select categories',
            ]
        );

        $post->user_id = Auth::id();
        $post->thumbnail = $request->thumbnail;
        $post->title = $request->title;
        $post->slug = str::slug($request->title);
        $post->sub_title = $request->sub_title;
        $post->details = $request->details;
        $post->is_published = $request->is_published;
        $post->save();

        $post->categories()->sync($request->category_id);

        Session::flash('message', 'Post updated successfully');
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        Session::flash('delete-message', 'Post deleted successfully');
        return redirect()->route('posts.index');
    }
}
