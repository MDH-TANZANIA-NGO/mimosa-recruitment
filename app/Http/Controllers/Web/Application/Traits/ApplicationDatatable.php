<?php
namespace App\Http\Controllers\Web\Application\Traits;

use App\Models\Address\Address;
use App\Models\Application\Application;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Yajra\DataTables\Facades\DataTables;

trait ApplicationDatatable
{
    public function allDatatable(){
        $data = Application::where('user_id', access()->id())
            ->get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->editColumn('created_at', function($query){
                return Carbon::create($query->created_at)->format('Y-m-d');
            })
            ->editColumn('adv_uuid', function($query){
                $response = Http::get(config('mdh.mimosa_url').'advertisement'.$query->adv_uuid.'/show');
                //$response = Http::get(config('mdh.mimosa_url').'advertisement');
                return json_decode($response)->result->advertisement->title;
            })
            ->make(true);
    }

}
