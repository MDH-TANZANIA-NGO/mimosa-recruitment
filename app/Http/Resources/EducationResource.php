<?php

namespace App\Http\Resources;

use App\Models\System\CodeValue;
use Illuminate\Http\Resources\Json\JsonResource;

class EducationResource extends JsonResource
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
            'uuid' => $this->uuid,
            'level' => CodeValue::where('id',$this->education_level_cv_id)->first()->name,
            'institution_name' => $this->institution_name,
            'award_received' => $this->award_received,
            'start_year' => $this->start_year,
            'still_studying' => $this->still_studying,
            'end_year' => $this->end_year,
            'certificate' => config('mdh.mimosa_rec_url').$this->getFirstMediaUrl('certificates')
        ];
    }
}
