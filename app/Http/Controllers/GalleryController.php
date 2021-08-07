<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::orderBy('id', 'DESC')->get();
        return view('admin.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "image_url" => 'required',
        ],
            [
                'image_url.required' => 'Select image',
            ]
        );

        foreach ($request->image_url as $image_url) {
            // Get file name with extension
            $fileNameWithExt = $image_url->getClientOriginalName();

            // Get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // Get just file extension
            $fileExt = $image_url->getClientOriginalExtension();

            // Get file name to store
            $fileNameToStore = $fileName . '_' . time() . '.' . $fileExt;

            $gallery = new Gallery();
            $gallery->admin_id = \auth('admin')->id();;
            $gallery->image_url = $fileNameToStore;
            $save = $gallery->save();

            if ($save) {
                $image_url->storeAs('public/galleries', $fileNameToStore);
            }
        }

        Session::flash('message', 'Images uploaded successfully');
        return redirect()->route('galleries.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();
        Session::flash('delete-message', 'Gallery Image deleted successfully');
        return redirect()->route('galleries.index');
    }
}
