<?php

namespace App\Http\Controllers\Web\Vacancy;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Web\Vacancy\Traits\VacancyDatatable;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    use VacancyDatatable;


    public function index(){
         return view('vacancy.index');
    }

    public function show($uuid){
        $response = Http::get('http://mdherp.test/api/advertisement/'.$uuid.'/show');
        $result = json_decode($response)->result->advertisement;
        //dd($result->hire_requisition_job_id);
        return view('vacancy.show')
            ->with('documents', code_value()->query()->where('code_id',10)->get())
            ->with('_advertisement', $result);
    }


}
