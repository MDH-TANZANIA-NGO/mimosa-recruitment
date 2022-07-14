<?php

namespace App\Http\Controllers\Web\Vacancy;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Web\Vacancy\Traits\VacancyDatatable;
use App\Models\Application\Application;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    use VacancyDatatable;


    public function index(){
         return view('vacancy.index');
    }

    public function show($uuid){
        $response = Http::get(config('mdh.mimosa_url').'advertisement/'.$uuid.'/show');
        $result = json_decode($response)->result->advertisement;
        $application_status = Application::where('user_id', access()->id())
                                            ->where('adv_uuid', $uuid)->first();
        return view('vacancy.show')
            ->with('application_status', $application_status)
            ->with('documents', code_value()->query()->where('code_id',10)->get())
            ->with('_advertisement', $result);
    }

    public function save(){
        $response = Http::get(config('mdh.mimosa_url').'advertisement');
        $result = json_decode($response);
        dd($result);
    }


}
