<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ExperienceResource extends JsonResource
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
            'organisation_name' => $this->organisation_name,
            'position' => $this->position,
            'responsibilities' => $this->responsibilities,
            'reason_for_leaving' => $this->reason_for_leaving,
            'supervisor_email' => $this->supervisor_email,
            'supervisor_phone' => $this->supervisor_phone,
            'supervisor_name' => $this->supervisor_name,
            'start_year' => $this->start_year,
            'is_current' => $this->is_current,
            'end_year' => $this->end_year
        ];
    }
}
