<?php
namespace App\Repositories\Applicant;

use App\Models\Applicant\Applicant;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class ApplicantRepository extends BaseRepository
{
    const MODEL = Applicant::class;

    /**
     * select * attributes from applicants
     * @return mixed
     */
    public function getQuery(){
        return $this->query()->select([
            DB::raw('applicants.id AS id'),
            DB::raw('applicants.uuid AS uuid'),
            DB::raw('users.email AS email'),
            DB::raw('applicants.prefix_cv_id AS prefix'),
            DB::raw('applicants.first_name AS first_name'),
            DB::raw('applicants.middle_name AS middle_name'),
            DB::raw('applicants.last_name AS last_name'),
            DB::raw('applicants.dob AS dob'),
            DB::raw('applicants.phone AS phone'),
            DB::raw('countries.name AS nationality'),
            DB::raw('code_values.name AS gender'),
            DB::raw('applicants.national_id AS national_id')
        ])
            ->join('users','users.id', 'applicants.user_id')
            ->join('code_values', 'code_values.id', 'applicants.gender_cv_id');
    }

    /**
     * prepare inputs for creating or updating a resource
     * @param $inputs
     * @return array
     */
    public function inputsProcessor($inputs): array {
        return [
            'user_id' => access()->id(),
            'prefix_cv_id' => $inputs['prefix_cv_id'],
            'first_name' => $inputs['first_name'],
            'middle_name' => $inputs['middle_name'],
            'last_name' => $inputs['last_name'],
            'dob' => $inputs['dob'],
            'phone' => $inputs['phone'],
            'gender_cv_id' => $inputs['gender_cv_id'],
            'national_id' => $inputs['national_id'],
            'country_id' => $inputs['country_id']
        ];
    }

    /**
     * Store new Applicant
     * @param $inputs
     * @param Applicant $applicant
     * @return mixed
     */
    public function store($inputs){
        return DB::transaction(function () use ($inputs){
            return $this->query()->create($this->inputsProcessor($inputs));
        });
    }

    /**
     * Update Applicant
     * @param $inputs
     * @param Applicant $applicant
     * @return mixed
     */
    public function update($inputs, Applicant $applicant)
    {
        return DB::transaction(function () use($inputs, $applicant){
             $applicant->update($this->inputsProcessor($inputs));
             return $applicant;
        });
    }
}
