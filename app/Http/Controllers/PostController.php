<?php

namespace App\Http\Controllers;

use Alright\Options\Options;
use App\Cms\Interfaces\CategoryRepositoryInterface;
use App\Models\Post;
use App\Models\Category;
use App\Models\CategoryPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Cms\Interfaces\PostRepositoryInterface;

class PostController extends Controller
{
    protected $post;
    protected $category;
    protected $templates;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(PostRepositoryInterface $post, CategoryRepositoryInterface $category)
    {
        $this->post = $post;
        $this->category = $category;
        $this->templates = Options::get_option('page_templates');
        $this->middleware('airmin');
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->where('post_type', 'post')->get();
        return view('cms.pages.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        $templates = $this->templates;
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

        // dd($request->all());
        $data = $request->only(['admin_id','title', 'slug', 'excerpt', 'content', 'post_type', 'is_published']);
        $post = $this->post->create($data);

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
    public function edit($id)
    {

        $categories= $this->category->getAll();
        $templates = $this->templates;
        $post=Post::findOrFail($id);
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

        $data = $request->only(['admin_id','title', 'slug', 'excerpt', 'content', 'post_type', 'is_published']);
        $postUpdate = $this->post->update($post->id, $data);
        $postUpdate->categories()->sync($request->input('category_id'));

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
