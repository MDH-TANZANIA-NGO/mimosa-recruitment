<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    public function index(){
        //return all courses available for shortlisting
        return view('admin.index');
    }

    public function save(){
        $response = Http::get(config('mdh.mimosa_url').'advertisement');
        $result = json_decode($response);
        dd($result->result->advertisements);
    }
}
