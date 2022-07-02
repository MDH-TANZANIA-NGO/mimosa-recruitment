<?php
namespace App\Models\Address\Traits;

use App\Models\System\CodeValue;
use App\Models\System\District;
use App\Models\System\Region;

trait AddressRelationship
{
    public function region(){
        return $this->belongsTo(Region::class);
    }
    public function district(){
        return $this->belongsTo(District::class);
    }

    public function type()
    {
        return $this->belongsTo(CodeValue::class,'address_type_cv_id','id');
    }

    public function code(){
        return $this->belongsTo(CodeValue::class);
    }

}
