<?php

namespace App\Http\Controllers\Api\Applicant;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplicantController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|\Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::with(
            'applicant.country',
            'applicant.gender',
            'addresses.region',
            'addresses.district',
            'addresses.type',
            'educations.level',
            'experiences',
            'referees.country',
            'referees.region',
            'referees.gender',
            'referees.type',
            'skills.skill.category'
            )->findOrFail($id);
    }

    public function resource($id){
        return new UserResource(User::find($id));
    }

}
