<?php

namespace App\Models\Skill;

use Illuminate\Database\Eloquent\Model;
use App\Models\Skill\SkillCategory;

class Skill extends Model
{
    public function category()
    {
        return $this->belongsTo(SkillCategory::class);
    }
}
