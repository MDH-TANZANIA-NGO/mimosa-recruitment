<?php

namespace App\Http\Controllers\Web\Personal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Personal\Personal;



class PersonalController extends Controller
{

    public function index()
    {
         $personal = Personal::all();
        return view('PersonalInfo.index', ["personal" => $personal]);
        
    }

    public function create()
    {
        $personal = Personal::all();
     
        return view('PersonalInfo.create');
       
    }

    public function store(Request $request)
    {
        $this->validate($request, [

            'title'=>'required',
            'first_name' => 'required',
            'sur_name' => 'required',
            'middle_name' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'mobile_number' => 'required',
            'alternative_number' => 'required',
            'nationality' =>  'required',
            
           

       ]);
 
                                   

        $personal = new Personal;
        $personal->title = $request->input('title');
        $personal->first_name = $request->input('first_name');
        $personal->sur_name = $request->input('sur_name ');
        $personal->middle_name = $request->input('middle_name');
        $personal->gender = $request->input('gender');
        $personal->dob= $request->input('dob');
        $personal->mobile_number = $request->input('mobile_number');
        $personal->alternative_number = $request->input('alternative_number');
        $personal->nationality = $request->input('nationality');
        $personal->save();
        return redirect()->route('personal.edit', $personal->id)
        
            ->with('success', 'Stuff Created Successfully');
    }




    public function edit(Personal $personal)
    {
       

        return view('PersonalInfo.edit')
        ->with([
           
            'personal'  => $personal
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'title' => 'required',
            'first_name' => 'required',
            'sur_name' => 'required',
            'middle_name' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'mobile_number' => 'required',
            'alternative_number' => 'required',
            'nationality' =>  'required',
            
           
        ]);


        $personal  = Personal::find($id);
        $personal->title = $request->input('title');
        $personal->first_name = $request->input('first_name');
        $personal->sur_name = $request->input('sur_name ');
        $personal->middle_name = $request->input('middle_name');
        $personal->gender = $request->input('gender');
        $personal->dob = $request->input('dob');
        $personal->mobile_number = $request->input('mobile_number');
        $personal->alternative_number = $request->input('alternative_number');
        $personal->nationality = $request->input('nationality');
        $personal->save();
     
        return redirect('personal')
            ->with('success', 'Stuff Updated Successfully');
            
    }



   

    public function delete($id)
    {
        $personal = Personal::find($id);
        $personal->delete();
        return redirect()->back();
    }

   




}
