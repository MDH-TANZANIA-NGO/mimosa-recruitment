<?php

namespace App\Http\Controllers\Web\Listing;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Web\Listing\Traits\ListingDatatable;
use App\Services\Listing\ListingService;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    use ListingService, ListingDatatable;

    public function index(){
        return view('listing.index');
    }
}
