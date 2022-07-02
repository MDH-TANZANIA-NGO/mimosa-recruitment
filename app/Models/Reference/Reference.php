<?php

namespace App\Models\Reference;

use App\Models\BaseModel;
use App\Models\System\CodeValue;
use App\Models\System\Country;
use App\Models\System\Region;
use Illuminate\Database\Eloquent\Model;

class Reference extends BaseModel
{
    //country
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    //region
    public function region()
    {
        return $this->belongsTo(Region::class);
    }
    //gender
    public function gender()
    {
        return $this->belongsTo(CodeValue::class,'gender_cv_id');
    }
    //type
    public function getType()
    {
        return CodeValue::where('id', $this->reference_type_cv_id)->first()->name;
    }
}
