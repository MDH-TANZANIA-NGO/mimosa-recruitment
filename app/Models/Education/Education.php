<?php

namespace App\Models\Education;

use App\Models\BaseModel;
use App\Models\Education\Traits\EducationAttribute;
use App\Models\Education\Traits\EducationRelationship;
use App\Models\System\CodeValue;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Education extends BaseModel implements HasMedia
{
    use InteractsWithMedia;
    use EducationRelationship, EducationAttribute;
    protected $table="educations";

    public function getLevel(){
        return CodeValue::where('id', $this->education_level_cv_id)->first()->name;
    }
}
