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
            ->editColumn('education_level', function ($query){
                switch ($query->education_level) {
                    case 24:
                        return 'Ordinary Level';
                     break;
                    case 25:
                        return 'Advanced Level';
                        break;
                    case 26:
                        return 'Diploma';
                        break;
                    case 27:
                        return 'Bachelor Degree';
                        break;
                    case 28:
                        return 'Masters Degree';
                        break;
                    case 29:
                        return 'PhD';
                        break;
                }
            })
            ->addColumn('action', function($query) {
                return '<a href="'.route('education.show', $query->uuid).'">View Applicants</a>';
            })
            ->make(true);
    }
}
