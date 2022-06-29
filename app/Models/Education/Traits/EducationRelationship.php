<?php

namespace App\Models\Education\Traits;

use App\Models\Auth\User;
use App\Models\System\CodeValue;

trait EducationRelationship
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function level()
    {
        return $this->belongsTo(CodeValue::class,'education_level_cv_id','id');
    }

}
