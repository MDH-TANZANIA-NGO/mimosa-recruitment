<?php
namespace App\Models\Address\Traits;

use App\Models\System\CodeValue;

trait AddressAttribute
{
    public function getType(){
        return CodeValue::where('id', $this->address_type_cv_id)->first()->name;
    }

}
