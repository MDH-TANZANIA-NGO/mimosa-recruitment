<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ApplicationResource extends JsonResource
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
            'hire_requisition_job_id' => $this->hire_requisition_job_id,
            'status' => $this->status,
            'cv' => config('mdh.mimosa_rec_url').$this->getFirstMediaUrl('cv'),
            'cover_letters' => config('mdh.mimosa_rec_url').$this->getFirstMediaUrl('cover_letters')
        ];
    }
}
