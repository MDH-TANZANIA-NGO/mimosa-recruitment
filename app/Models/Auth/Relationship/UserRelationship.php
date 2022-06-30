<?php

namespace App\Models\Auth\Relationship;

use App\Models\Address\Address;
use App\Models\Applicant\Applicant;
use App\Models\Auth\Role;
use App\Models\Auth\Permission;
use App\Models\Education\Education;
use App\Models\Experience\Experience;
use App\Models\Reference\Reference;
use App\Models\Skill\Skill;
use App\Models\Skill\SkillCategory;
use App\Models\Skill\UserSkill;
use App\Models\System\CodeValue;
use App\Models\System\Region;
use App\Models\Unit\Designation;


trait UserRelationship
{
    /**
     * Many-to-Many relations with Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * @return mixed
     */
    public function permissions()
    {
        return $this->belongsToMany(Permission::class)->withTimestamps();
    }

    public function userAccounts()
    {
        return $this->belongsToMany(CodeValue::class, "user_accounts", "user_id", "user_account_cv_id");
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function logs()
    {
        return $this->hasMany('user_logs','user_id','id');
    }

    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }

    public function applicant()
    {
        return $this->hasOne(Applicant::class);
    }

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    public function referees()
    {
        return $this->hasMany(Reference::class);
    }

    public function skills()
    {
        return $this->HasMany(UserSkill::class);
    }

}
