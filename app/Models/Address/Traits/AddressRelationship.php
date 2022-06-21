<?php
namespace App\Models\Address\Traits;

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

}
