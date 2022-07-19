<?php

namespace App\Http\Controllers\Web\Listing\Traits;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Yajra\DataTables\DataTables;

trait ListingDatatable
{
    public function all(){
        $data = Http::get(config('mdh.mimosa_url') . 'listings' );
        $result = json_decode($data);
        return DataTables::of($result)
            ->addIndexColumn()
            ->editColumn('education_level')
            ->rawColumns(['action','type'])
            ->make(true);
    }
}
