<?php

namespace App\Http\Controllers;

use App\Models\Applicant\Applicant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $applicant = Applicant::where('user_id', access()->id())->first();
        return view('workspace.index')
            ->with('applicant', $applicant);
    }
}
