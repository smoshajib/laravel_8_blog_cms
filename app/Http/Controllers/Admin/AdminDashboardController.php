<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ApiResponseService;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('airmin');
        $this->middleware('auth:admin');
    }

    public function index()
    {
//        return auth('admin')->user();
        return view('cms.pages.dashboard.dashboard');
    }

//    public function getAllAdmin(ApiResponseService $apiResponseService): \Illuminate\Http\JsonResponse
//    {
//        $admins = DB::table('admins')->get();
//        return $apiResponseService->efflux($admins);
//    }


}
