<?php

namespace App\Services\Listing;

use Illuminate\Support\Facades\Http;

trait ListingService
{
    public function getListings(){
         return Http::get(config('mdh.mimosa_url') . 'listings' );
    }

}
