<?php

namespace App\Http\Resources;

use App\Models\System\CodeValue;
use App\Models\System\District;
use App\Models\System\Region;
use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
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
            'area_name' => $this->area_name,
            'house_number' => $this->house_number,
            'address_type' => CodeValue::where('id',$this->address_type_cv_id)->pluck('name'),
            'district' => District::where('id', $this->district_id)->pluck('name'),
            'region' => Region::where('id', $this->region_id)->pluck('name')
        ];
    }
}
