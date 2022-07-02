<?php

namespace App\Http\Controllers\Web\Workspace;

use App\Http\Controllers\Controller;
use App\Models\Applicant\Applicant;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Location;

class WorkspaceController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */


    public function __invoke(Request $request)
    {
        $applicant = Applicant::where('user_id', access()->id())->first();
        return view('workspace.index')
            ->with('applicant', $applicant);
    }
}
