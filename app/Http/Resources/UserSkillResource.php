<?php

namespace App\Http\Resources;

use App\Models\Skill\Skill;
use App\Models\Skill\SkillCategory;
use App\Models\System\CodeValue;
use Illuminate\Http\Resources\Json\JsonResource;

class UserSkillResource extends JsonResource
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
            'skill' => Skill::where('id', $this->skill_id)->first()->name,
            'category' => SkillCategory::where('id', $this->skill_category_id)->first()->name,
            'level' => CodeValue::where('id',$this->skill_level_cv_id)->first()->name,
            'remarks' => $this->remarks
        ];
    }
}
