<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class SiteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    // public function __invoke(Post $post, Request $request)
    // {
    //     $view = 'web.pages.'.$post->template;
    //     if (View::exists($view)) {
    //         return view($view, compact('post'));
    //     }  else {
    //         return view('web.pages.default', compact('post'));
    //     }
    // }

    public function __invoke($post)
    {
       
        return view('web.pages.'.$post);
        
    }
}
