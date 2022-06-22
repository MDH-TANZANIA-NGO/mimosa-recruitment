<?php

namespace App\Http\Controllers\Web\Reference;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Web\Reference\Traits\ReferenceDatatable;
use App\Models\Reference\Reference;
use App\Models\System\Country;
use App\Models\System\Region;
use Illuminate\Http\Request;

class ReferenceController extends Controller
{
    use ReferenceDatatable;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return view('reference.index')
            ->with('regions', Region::all()->pluck('name','id'))
            ->with('references',code_value()->query()->where('code_id',7)->pluck('name','id'))
            ->with('gender', code_value()->query()->where('code_id',1)->pluck('name','id'))
            ->with('countries', Country::all()->pluck('name', 'id'));
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
        Reference::create([
            'user_id' => access()->id(),
            'organisation_name' => $request->get('organisation_name'),
            'name' => $request->get('name'),
            'position' => $request->get('position'),
            'gender_cv_id' => $request->get('gender_cv_id'),
            'reference_type_cv_id' => $request->get('reference_type_cv_id'),
            'phone' => $request->get('phone'),
            'address' => $request->get('address'),
            'email' => $request->get('email'),
            'region_id' => $request->get('region_id'),
            'country_id' => $request->get('country_id'),
        ]);

        alert()->success('Reference Details Added Successfully','success');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(Reference $reference)
    {
        return view('reference.show')
            ->with('reference', $reference)
            ->with('regions', Region::all()->pluck('name','id'))
            ->with('references',code_value()->query()->where('code_id',7)->pluck('name','id'))
            ->with('gender', code_value()->query()->where('code_id',1)->pluck('name','id'))
            ->with('countries', Country::all()->pluck('name', 'id'));
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
    public function update(Request $request, Reference $reference)
    {
        $reference->update($request->all());
        alert()->success('Reference Details Updated Successfully','success');
        return redirect()->route('reference.index');
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
