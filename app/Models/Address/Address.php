<?php

namespace App\Models\Address;


use App\Models\Address\Traits\AddressAttribute;
use App\Models\Address\Traits\AddressRelationship;
use App\Models\BaseModel;


class Address extends BaseModel
{
    use AddressAttribute, AddressRelationship;
}
