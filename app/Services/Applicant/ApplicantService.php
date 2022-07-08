<?php
namespace App\Services\Applicant;

use App\Models\Address\Address;
use App\Models\Applicant\Applicant;
use App\Models\Education\Education;
use App\Models\Experience\Experience;
use App\Models\Other\Other;
use App\Models\Reference\Reference;
use App\Models\Skill\UserSkill;
use Carbon\Carbon;
use Carbon\CarbonInterval;

trait ApplicantService
{
    /**
     * used to calculate the percentage of profile completion of a particular candidate
     * @param $user_id
     * @return float|int
     */
    public function percentage($user_id){
        $applicant = !empty(Applicant::where('user_id', $user_id)->first()) ? 14.285 : 0;
        $reference = !empty(Reference::where('user_id', $user_id)->first()) ? 14.285 : 0;
        $address = !empty(Address::where('user_id', $user_id)->first()) ? 14.285 : 0;
        $education = !empty(Education::where('user_id', $user_id)->first()) ? 14.285 : 0;
        $skill = !empty(UserSkill::where('user_id', $user_id)->first()) ? 14.285 : 0;
        $other = !empty(Other::where('user_id', $user_id)->first()) ? 14.285 : 0;
        $experience = !empty(Experience::where('user_id', $user_id)->first()) ? 14.285 : 0;
        return ($applicant + $reference + $address + $education + $skill + $other + $experience);
    }

    /**
     * To compute the number of years of experience of a particular candidate
     * @param $user_id
     * @return array|float|int
     */
    public function experience($user_id){
        $experiences = Experience::where('user_id', $user_id)->get();
        $diff = [];
        foreach ($experiences as $experience){
            $start = Carbon::parse($experience->start_year);
            $end = !empty($experience->end_year) ? Carbon::parse($experience->end_year) : Carbon::parse(Carbon::now());
            array_push($diff, $end->diffInDays($start));
        }
        //return Carbon::now()->subDays(array_sum($diff))->diffForHumans();
        return CarbonInterval::days(array_sum($diff))->cascade()->forHumans();
    }
}
