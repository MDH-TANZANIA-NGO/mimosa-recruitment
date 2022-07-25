<?php

namespace App\Http\Resources;

use App\Models\System\CodeValue;
use Illuminate\Http\Resources\Json\JsonResource;

class OtherDetailsResource extends JsonResource
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
            'language1' => CodeValue::where('id', $this->language1)->first()->name,
            'language2' => CodeValue::where('id', $this->language2)->first()->name,
            'current_salary' => $this->current_salary,
            'current_benefits' => $this->current_benefits,
            'availability_in_days' => $this->availability,
            'professional_membership' => $this->professional_membership,
            'willing_to_travel' => $this->travel,
            'willing_to_relocate' => $this->relocate
        ];
    }
}
