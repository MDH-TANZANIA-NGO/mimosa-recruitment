<?php

namespace App\Http\Controllers\Web\Workspace;

use App\Http\Controllers\Controller;
use App\Http\Resources\ReferenceResource;
use App\Http\Resources\UserDetailResource;
use App\Models\Address\Address;
use App\Models\Applicant\Applicant;
use App\Models\Education\Education;
use App\Models\Experience\Experience;
use App\Models\Other\Other;
use App\Models\Reference\Reference;
use App\Models\Skill\UserSkill;
use App\Services\Applicant\ApplicantService;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Location;

class WorkspaceController extends Controller
{
    use ApplicantService;
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */


    public function __invoke(Request $request)
    {
        $percentage = $this->percentage(access()->id());
        $applicant = Applicant::where('user_id', access()->id())->first();
        return view('workspace.index')
            ->with('percentage', $percentage)
            ->with('applicant', $applicant);
    }
}
