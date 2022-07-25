<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Services\Listing\ListingService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    use ListingService;

    public function index(){
        return view('admin.index');
    }


}
