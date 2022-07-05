<?php

namespace App\Http\View\Composers\Applicant;

use App\Models\Applicant\Applicant;
use Illuminate\View\View;

class ApplicantComposer
{
    protected $applicant;


    public function __construct()
    {
        $this->applicant = Applicant::where('user_id', access()->id())->first();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('applicant', $this->applicant);
    }
}
