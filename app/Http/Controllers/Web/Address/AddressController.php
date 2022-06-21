<?php

namespace App\Http\Controllers\Web\Address;


use App\Http\Controllers\Controller;
use App\Http\Controllers\Web\Address\Datatables\AddressDatatable;
use App\Models\Address\Address;
use App\Models\Applicant\Applicant;
use App\Models\System\District;
use App\Models\System\Region;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    use AddressDatatable;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return view('address.index')
            ->with('regions', Region::all()->pluck('name','id'))
            ->with('districts', District::all()->pluck('name','id'))
            ->with('types', code_value()->query()->where('code_id', 3)->pluck('name','id'));
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
        $district = District::find($request['district_id']);
        $request->merge(["user_id"=>access()->id(), "region_id" => $district->region_id]);
        Address::create($request->all());
        alert()->success('Address has been added Successfully!', 'success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(Address $address)
    {
        return view('address.show')
            ->with('address', $address)
            ->with('regions', Region::all()->pluck('name','id'))
            ->with('districts', District::all()->pluck('name','id'))
            ->with('types', code_value()->query()->where('code_id', 3)->pluck('name','id'));
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
    public function update(Request $request, Address $address)
    {
        $district = District::find($request['district_id']);
        $request->merge(["user_id"=>access()->id(), "region_id" => $district->region_id]);
        $address->update($request->all());
        alert()->success('Address has been updated Successfully!', 'success');
        return redirect()->route('address.index');
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
