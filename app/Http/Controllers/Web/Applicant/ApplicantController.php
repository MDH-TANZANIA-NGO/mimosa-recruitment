<?php

namespace App\Http\Controllers\Web\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Applicant\Applicant;
use App\Models\System\Country;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        //dd(auth()->user());
        $applicant = Applicant::where('user_id', access()->id())->first();
        return view('applicant.index')
            ->with('applicant', $applicant)
            ->with('prefix', code_value()->query()->where('code_id',2)->pluck('name','id'))
            ->with('gender', code_value()->query()->where('code_id',1)->pluck('name','id'))
            ->with('countries', Country::all()->pluck('name', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('applicant.form.create')
            ->with('prefix', code_value()->query()->where('code_id',2)->pluck('name','id'))
            ->with('gender', code_value()->query()->where('code_id',1)->pluck('name','id'))
            ->with('countries', Country::all()->pluck('name', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->merge(["user_id"=>access()->id()]);
        Applicant::create($request->all());
        alert()->success('Personal Information has been added Successfully!', 'success');
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Applicant $applicant)
    {
        $applicant->update($request->all());
        alert()->success('Personal Information has been updated Successfully!', 'success');
        return redirect()->back();
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
