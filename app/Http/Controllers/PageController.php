<?php

namespace App\Http\Controllers;

use App\Cms\Interfaces\CategoryRepositoryInterface;
use App\Cms\Interfaces\PostRepositoryInterface;
use App\Cms\Services\LeuraCms;
use App\Models\Post as Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
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
        $pages = $this->post->getPosts('DESC', 'page');
        return view('cms.pages.page.index', compact('pages'));
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
        return view('cms.pages.page.create', compact('categories', 'templates'));
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
            'post_type' => 'page'
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
        $page = $this->post->create($data);
        if($request->hasfile('featured_image')) {
            foreach($request->file('featured_image') as $file)
            {
                $page->addMedia($file)->toMediaCollection();
            }
        }
        Session::flash('message', 'Page created successfully');
        return redirect()->route('pages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        return $page->template;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        $templates = $this->lcms->templates();
//        $page = $this->post->find($p->id);
        return view('cms.pages.page.edit', compact('templates', 'page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Page $page)
    {
        $request->merge([
            'admin_id' => \auth('admin')->id(),
            'post_type' => 'page'
        ]);
        $this->validate($request, [
            'title' => 'required|unique:posts,title,' . $page->id . ',id', // ignore this id
        ],
            [
                'title.required' => 'Enter title',
                'title.unique' => 'Title already exist',
            ]
        );
        $data = $request->only(['admin_id','title', 'slug', 'excerpt', 'content', 'post_type', 'template', 'is_published']);
        $postUpdate = $this->post->update($page->id, $data);
        if($request->hasfile('featured_image')) {
            foreach($request->file('featured_image') as $file)
            {
                $postUpdate->addMedia($file)->toMediaCollection();
            }
        }
        Session::flash('message', 'Page updated successfully');
        return redirect()->route('pages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Page $page)
    {
        $page->delete();
        Session::flash('delete-message', 'Page deleted successfully');
        return redirect()->route('pages.index');
    }
}
