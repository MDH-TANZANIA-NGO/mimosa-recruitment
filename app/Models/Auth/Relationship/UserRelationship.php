<?php

namespace App\Models\Auth\Relationship;

use App\Models\Address\Address;
use App\Models\Applicant\Applicant;
use App\Models\Auth\Role;
use App\Models\Auth\Permission;
use App\Models\Auth\SupervisorUser;
use App\Models\Education\Education;
use App\Models\Experience\Experience;
use App\Models\Project\Project;
use App\Models\Project\SubProgram;
use App\Models\System\CodeValue;
use App\Models\System\Region;
use App\Models\Taf\Taf;
use App\Models\Timesheet\Timesheet;
use App\Models\Token\UserLoginToken;
use App\Models\Unit\Designation;
use App\Models\Workflow\WfDefinition;
use App\Models\Workflow\WfTrack;


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

}
