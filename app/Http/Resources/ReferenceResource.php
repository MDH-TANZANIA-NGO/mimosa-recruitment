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
            'reference_type' => CodeValue::where('id',$this->reference_type_cv_id)->pluck('name'),
            'country' => Country::where('id',$this->country_id)->pluck('name'),
            'district' => District::where('id', $this->district_id)->pluck('name'),
            'region' => Region::where('id', $this->region_id)->pluck('name'),
            'organisation_name' => $this->organisation_name,
            'gender' => CodeValue::where('id',$this->gender_cv_id)->pluck('name'),
        ];
    }
}
