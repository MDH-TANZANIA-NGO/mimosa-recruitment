<?php

namespace App\Http\Resources;

use App\Models\System\CodeValue;
use App\Models\System\Country;
use App\Models\System\District;
use App\Models\System\Region;
use Illuminate\Http\Resources\Json\JsonResource;

class ReferenceResource extends JsonResource
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
            'name' => $this->name,
            'position' => $this->position,
            'email' => $this->email,
            'address' => $this->address,
            'reference_type' => CodeValue::where('id',$this->reference_type_cv_id)->first()->name,
            'country' => Country::where('id',$this->country_id)->first()->name,
            //'district' => District::where('id', $this->district_id)->first()->name,  I wonder why this is not included here perhaps a check later
            'region' => Region::where('id', $this->region_id)->first()->name,
            'organisation_name' => $this->organisation_name,
            'gender' => CodeValue::where('id',$this->gender_cv_id)->first()->name,
        ];
    }
}
