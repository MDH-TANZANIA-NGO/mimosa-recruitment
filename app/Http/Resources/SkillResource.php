<?php

namespace App\Http\Resources;

use App\Models\Skill\SkillCategory;
use Illuminate\Http\Resources\Json\JsonResource;

class SkillResource extends JsonResource
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
            'skill_category' => SkillCategory::where('id', $this->skill_category_id)->pluck('name')
        ];
    }
}
