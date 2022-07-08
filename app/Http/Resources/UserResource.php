<?php

namespace App\Http\Resources;

use App\Models\Application\Application;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{

    protected $hire_requisition_job_id;
    public $resource;
    public function __construct($resource, $hire_requisition_job_id)
    {
        $this->resource = $resource;
       $this->hire_requisition_job_id = $hire_requisition_job_id;
    }

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'email' => $this->resource->email,
            'email_verified_at' => $this->resource->email_verified_at,
            'uuid' => $this->resource->uuid,
            'applicant' => new ApplicantResource($this->resource->applicant),
            'educations' => EducationResource::collection($this->resource->educations),
            'addresses' => AddressResource::collection($this->resource->addresses),
            'experiences' => ExperienceResource::collection($this->resource->experiences),
            'referees' => ReferenceResource::collection($this->resource->references),
            'skills' => UserSkillResource::collection($this->resource->skills),
            'other_information' => OtherDetailsResource::collection($this->resource->other),
            'applications' => new ApplicationResource(
                Application::where('user_id', $this->resource->id)
                        ->where('hire_requisition_job_id', $this->hire_requisition_job_id)->first()
            )
        ];
    }
}
