<?php

namespace App\Models\Applicant\Traits;

use App\Models\Auth\User;

trait ApplicantRelationship
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
