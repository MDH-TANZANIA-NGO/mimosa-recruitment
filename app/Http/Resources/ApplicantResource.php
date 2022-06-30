<?php

namespace App\Http\Resources;

use App\Models\Education\Education;
use App\Models\System\CodeValue;
use App\Models\System\Country;
use Illuminate\Http\Resources\Json\JsonResource;

class ApplicantResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $highest =  Education::where('user_id', $this->user_id)->max('education_level_cv_id');
        return [

        ];
    }
}
