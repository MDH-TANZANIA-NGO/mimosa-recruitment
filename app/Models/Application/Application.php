<?php

namespace App\Models\Application;

use App\Models\BaseModel;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Application extends BaseModel implements HasMedia
{
    use InteractsWithMedia;
    protected $table = "applications";
}
