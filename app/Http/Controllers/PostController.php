<?php

namespace App\Http\Controllers;

use Alright\Options\Options;
use App\Cms\Interfaces\CategoryRepositoryInterface;
use App\Cms\Services\LeuraCms;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Cms\Interfaces\PostRepositoryInterface;

class PostController extends Controller
{
    protected $post;
    protected $category;
    protected $lcms;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(PostRepositoryInterface $post, CategoryRepositoryInterface $category, LeuraCms $lcms)
    {
        $this->post = $post;
        $this->category = $category;
        $this->lcms = $lcms;
        $this->middleware('airmin:admin');
    }
    public function index()
    {
        $posts = $this->post->getPosts('DESC', 'post');
        return view('cms.pages.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->category->getCategories('name', 'ASC');
        $templates = $this->lcms->templates();
        return view('cms.pages.post.create', compact('categories', 'templates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->merge([
            'admin_id' => \auth('admin')->id(),
            'post_type' => 'post'
        ]);
        $this->validate($request, [
                "title" => 'required|unique:posts',
            ],
            [
                'title.required' => 'Enter title',
                'title.unique' => 'Title already exist',
            ]
        );
        $data = $request->only(['admin_id','title', 'slug', 'excerpt', 'content', 'post_type', 'template', 'is_published']);
        $post = $this->post->create($data);

        $post->categories()->sync($request->category_id, $post->id);
        Session::flash('message', 'Post created successfully');
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return $post->template;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = $this->category->getCategories('name', 'ASC');
        $templates = $this->lcms->templates();
        $post= $this->post->find($post->id);
        return view('cms.pages.post.edit', compact('categories', 'templates', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Post $post)
    {
        $request->merge([
            'admin_id' => \auth('admin')->id(),
            'post_type' => 'post'
        ]);
        $this->validate($request, [
                'title' => 'required|unique:posts,title,' . $post->id . ',id', // ignore this id
            ],
            [
                'title.required' => 'Enter title',
                'title.unique' => 'Title already exist',
            ]
        );

        $data = $request->only(['admin_id','title', 'slug', 'excerpt', 'content', 'post_type', 'template', 'is_published']);
        $postUpdate = $this->post->update($post->id, $data);
        $postUpdate->categories()->sync($request->input('category_id'));

        Session::flash('message', 'Post updated successfully');
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Post $post)
    {
        $post->delete();
        Session::flash('delete-message', 'Post deleted successfully');
        return redirect()->route('posts.index');
    }
}
