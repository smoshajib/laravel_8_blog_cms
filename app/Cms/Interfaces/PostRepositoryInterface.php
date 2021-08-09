<?php

namespace App\Cms\Interfaces;

use App\Cms\BaseRepositoryInterface;
use Illuminate\Http\Request;


interface PostRepositoryInterface extends BaseRepositoryInterface
{
    public function singleWhere($where);
    public function datatable(Request $request, $postType);
    public function getPosts($order, $type = 'post');
}
