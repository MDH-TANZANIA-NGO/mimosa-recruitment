<?php

namespace App\Models\Applicant;

use App\Models\Applicant\Traits\ApplicantAttribute;
use App\Models\Applicant\Traits\ApplicantRelationship;
use App\Models\BaseModel;

class Applicant extends BaseModel
{
    use ApplicantAttribute, ApplicantRelationship;
}
