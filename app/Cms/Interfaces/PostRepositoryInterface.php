<?php

namespace App\Cms\Interfaces;

use App\Cms\BaseRepositoryInterface;
use Illuminate\Http\Request;


interface PostRepositoryInterface extends BaseRepositoryInterface
{
    public function datatable(Request $request, $postType);
}
