<?php

namespace App\Models\Skill;

use App\Models\Auth\User;
use App\Models\BaseModel;
use App\Models\Skill\Skill;
use App\Models\System\CodeValue;

class UserSkill extends BaseModel
{
    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }

    public function getCategory(){
        return  SkillCategory::where('id', $this->skill_category_id)->first()->name;
    }

    public function getLevel(){
        return CodeValue::where('id', $this->skill_level_cv_id)->first()->name;
    }

}
