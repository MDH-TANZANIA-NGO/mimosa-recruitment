<?php

namespace App\Http\Controllers\Api\Applications;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApplicationResource;
use App\Models\Application\Application;
use App\Models\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index($hire_requisition_job_id)
    {
        // $applications = Application::where('hire_requisition_job_id', $hire_requisition_job_id)->get();
        // return  ApplicationResource::collection($applications);
        return User::query()->select([
            DB::raw('users.id AS id'),
            DB::raw('applicants.first_name AS first_name'),
            DB::raw('applicants.middle_name AS middle_name'),
            DB::raw('applicants.last_name AS last_name'),
            DB::raw('users.email AS email'),
            DB::raw('applicants.phone AS phone')
        ])
        ->join('applicants', 'applicants.user_id','users.id')
        ->join('applications','applications.user_id','users.id')
        ->where('applications.hire_requisition_job_id',$hire_requisition_job_id)
        ->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
