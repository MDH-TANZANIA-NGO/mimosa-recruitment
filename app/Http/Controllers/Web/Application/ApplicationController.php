<?php

namespace App\Http\Controllers\Web\Application;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Web\Application\Traits\ApplicationDatatable;
use App\Models\Application\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    use ApplicationDatatable;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return view('application.index');
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $application = Application::create([
            'user_id' => access()->id(),
            'adv_uuid' => $request->get('adv_uuid'),
            'hire_requisition_job_id' => $request->get('hire_requisition_job_id')
        ]);
        try {
            if($request->hasFile('cover_letter') && $request->file('cover_letter')->isValid()){
                $application->addMediaFromRequest('cover_letter')->toMediaCollection('cover_letters');
            }
            if($request->hasFile('cv') && $request->file('cv')->isValid()){
                $application->addMediaFromRequest('cv')->toMediaCollection('cv');
            }
        } catch (\Exception $e){
            alert()->error('Please Upload the necessary documents First','Failed');
            return redirect()->back();
        }
        $application->update([
            'status' => 'Submitted'
        ]);

        alert()->success('Your Application Has been submitted Successfully','success');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
