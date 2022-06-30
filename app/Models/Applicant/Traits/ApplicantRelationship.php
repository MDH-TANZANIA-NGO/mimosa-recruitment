<?php

namespace App\Models\Applicant\Traits;

use App\Models\Auth\User;
use App\Models\System\CodeValue;
use App\Models\System\Country;

trait ApplicantRelationship
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function gender()
    {
        return $this->belongsTo(CodeValue::class,'gender_cv_id','id');
    }

}
