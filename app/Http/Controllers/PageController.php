<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\CategoryPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {

        $this->middleware('airmin');
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $pages = Post::orderBy('id', 'DESC')->where('post_type', 'page')->get();
        return view('cms.pages.page.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.pages.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "thumbnail" => 'required',
            "title" => 'required|unique:posts',
            "details" => "required",
        ],
            [
                'thumbnail.required' => 'Enter thumbnail url',
                'title.required' => 'Enter title',
                'title.unique' => 'Title already exist',
                'details.required' => 'Enter details',
            ]
        );

        $page = new  Post();
        $page->admin_id = \auth('admin')->id();;
        $page->thumbnail = $request->thumbnail;
        $page->title = $request->title;
        $page->slug = str::slug($request->title);
        $page->sub_title = $request->sub_title;
        $page->details = $request->details;
        $page->is_published = $request->is_published;
        $page->post_type = 'page';
        $page->save();

        Session::flash('message', 'Page created successfully');
        return redirect()->route('admin.pages.page.index');
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Post::findOrFail($id);
        return view('cms.pages.page.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            "thumbnail" => 'required',
            'title' => 'required|unique:posts,title,'.$id.',id',
            'details' => 'required',
        ],
            [
                'thumbnail.required' => 'Enter thumbnail url',
                'title.required' => 'Enter title',
                'title.unique' => 'Title already exist',
                'details.required' => 'Enter details',
            ]
        );

        $page = Post::findOrFail($id);
        $page->admin_id = \auth('admin')->id();;
        $page->thumbnail = $request->thumbnail;
        $page->title = $request->title;
        $page->slug = str::slug($request->title);
        $page->sub_title = $request->sub_title;
        $page->details = $request->details;
        $page->is_published = $request->is_published;
        $page->save();

        Session::flash('message', 'Page updated successfully');
        return redirect()->route('admin.pages.page.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $page = Post::findOrFail($id);
        $page->delete();
        Session::flash('delete-message', 'Post page deleted successfully');
        return redirect()->route('admin.pages.page.index');
    }
}
