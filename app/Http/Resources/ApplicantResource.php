<?php

namespace App\Http\Resources;

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
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'dob' => $this->dob,
            'phone' => $this->phone,
            'country' => Country::where('id',$this->country_id)->pluck('name'),
            'gender' => CodeValue::where('id',$this->gender_cv_id)->pluck('name'),
            'national' => $this->national_id
        ];
    }
}
