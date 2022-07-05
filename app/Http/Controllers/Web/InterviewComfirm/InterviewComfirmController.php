<?php

namespace App\Http\Controllers\Web\InterviewComfirm;

use App\Http\Controllers\Controller;
use App\Models\Applicant\Applicant;
use Illuminate\Http\Request;

class InterviewComfirmController extends Controller
{
    public function index()
    {

        return view('interviewcomfirm.comfirm');
    }
}
