<?php

namespace App\Http\Resources;

use App\Models\Applicant\Applicant;
use Illuminate\Http\Resources\Json\JsonResource;

class ApplicationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return ApplicantResource
     */
    public function toArray($request)
    {
//        return [
//             new ApplicantResource(Applicant::where('user_id', $this->user_id)->first()),
//        ];
        return new ApplicantResource(Applicant::where('user_id', $this->user_id)->first());
    }
}
