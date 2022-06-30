<?php

namespace App\Models\Skill;

use App\Models\BaseModel;
use App\Models\Skill\Skill;

class UserSkill extends BaseModel
{
    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}
