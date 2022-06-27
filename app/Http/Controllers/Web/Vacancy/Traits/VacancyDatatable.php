<?php
namespace App\Http\Controllers\Web\Vacancy\Traits;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Yajra\DataTables\DataTables;

trait VacancyDatatable
{
    public function getJobLists(){
        $response = Http::get('http://mdherp.test/api/advertisement');
        $result = json_decode($response);
        return DataTables::of($result->result->advertisements)
            ->addIndexColumn()
            ->editColumn('created_at', function ($query) {
                return Carbon::create($query->created_at)->format('Y-m-d');
            })
            ->addColumn('action', function($query) {
                return '<a href="'.route('vacancy.show', $query->uuid).'">View</a>';
            })
            ->rawColumns(['action','description'])
            ->make(true);
    }
}
