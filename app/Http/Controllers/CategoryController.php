<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
            'thumbnail' => 'required',
            'name' => 'required|unique:categories'
        ],
        [
            'thumbnail.required' => 'Enter thumbnail url',
            'name.required' => 'Enter name',
            'name.unique' => 'Category already exist',
        ]);


        $category = new Category();
        $category->admin_id = \auth('admin')->id();;
        $category->name = $request->name;
        $category->is_published = $request->is_published;
        $category->save();

        Session::flash('message', 'Category created successfully');
        return redirect()->route('categories.index');

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
        $category=Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,Category $category)
    {
        $this->validate($request, [
            'name' => 'required|unique:categories,name,' . $category->id,
        ],
            [
                'thumbnail.required' => 'Enter thumbnail url',
                'name.required' => 'Enter name',
                'name.unique' => 'Category already exist',
            ]);

        $category->thumbnail = $request->thumbnail;
        $category->admin_id = \auth('admin')->id();;
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->is_published = $request->is_published;
        $category->save();

        Session::flash('message', 'Category updated successfully');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Category $category)
    {
        // $category=Category::findOrFail($id);
        $category->delete();
        Session::flash('delete-message', 'Category deleted successfully');
        return redirect()->route('categories.index');
    }
}
