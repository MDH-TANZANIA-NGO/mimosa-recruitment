<?php

namespace App\Http\Controllers\Web\Reference\Traits;

use App\Models\Experience\Experience;
use App\Models\Reference\Reference;
use Illuminate\Support\Carbon;
use Yajra\DataTables\DataTables;

trait ReferenceDatatable
{
    public function allDatatable(){
        $data = Reference::where('user_id', access()->id())->get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->editColumn('created_at', function ($query) {
                return [
                    'display' => Carbon::parse($query->created_at)->format('Y-m-d H:i:s'),
                    'timestamp' => $query->created_at,
                ];
            })
            ->addColumn('action', function($query) {
                return '<a href="'.route('reference.show', $query->uuid).'">View</a>';
            })
            ->rawColumns(['action','type'])
            ->make(true);
    }
}
