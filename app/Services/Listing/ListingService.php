<?php

namespace App\Services\Listing;

use Illuminate\Support\Facades\Http;

trait ListingService
{
    public function getListings(){
        $response = Http::get(config('mdh.mimosa_url') . 'listings' );
        return json_decode($response);
    }

}
