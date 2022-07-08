<?php

namespace App\Http\Resources;

use App\Models\Application\Application;
use Illuminate\Http\Resources\Json\JsonResource;

class UserDetailResource extends JsonResource
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
            'email' => $this->email,
            'email_verified_at' => $this->email_verified_at,
            'uuid' => $this->uuid,
            'applicant' => new ApplicantResource($this->applicant),
            'educations' => EducationResource::collection($this->educations),
            'addresses' => AddressResource::collection($this->addresses),
            'experiences' => ExperienceResource::collection($this->experiences),
            'referees' => ReferenceResource::collection($this->references),
            'other_information' => OtherDetailsResource::collection($this->resource->other),
            'skills' => UserSkillResource::collection($this->skills)
        ];
    }
}
