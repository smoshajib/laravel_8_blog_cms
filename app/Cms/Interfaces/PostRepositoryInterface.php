<?php

namespace App\Cms\Interfaces;

use App\Cms\BaseRepositoryInterface;
use Illuminate\Http\Request;


interface PostRepositoryInterface extends BaseRepositoryInterface
{
    public function getPosts($order, $type = 'post');
    public function datatable(Request $request, $postType);
}
