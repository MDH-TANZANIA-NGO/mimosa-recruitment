<?php

namespace App\Http\Resources;

use App\Models\Education\Education;
use App\Models\System\CodeValue;
use App\Models\System\Country;
use Illuminate\Http\Resources\Json\JsonResource;

class ApplicantResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $highest =  Education::where('user_id', $this->user_id)->max('education_level_cv_id');
        return [
            'id' => $this->id,
            'uuid' => $this->uuid,
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'email' => $this->user->email,
            'dob' => $this->dob,
            'phone' => $this->phone,
            'country' => Country::where('id',$this->country_id)->first()->name,
            'gender' => CodeValue::where('id',$this->gender_cv_id)->first()->name,
            'national' => $this->national_id,
            'highest_education' => Education::where('education_level_cv_id',$highest)->first()->award_received,

        ];
    }
}
