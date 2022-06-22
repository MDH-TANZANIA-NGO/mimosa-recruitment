<?php
namespace App\Http\Controllers\Web\Skill\Traits;
use App\Models\Skill\Skill;
use App\Models\Skill\SkillCategory;
use App\Models\Skill\UserSkill;
use App\Models\System\CodeValue;
use Carbon\Carbon;
use Yajra\DataTables\DataTables;

trait SKillsDatatable
{
    public function allDatatable(){
        $data = UserSkill::where('user_id', access()->id())->get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->editColumn('remarks', function ($query) {
                return substr($query->remarks, 0, 50)."...";
            })
            ->addColumn('category', function ($query) {
                $category = SkillCategory::where('id', $query->skill_category_id)->first();
                return [
                    $category->name
                ];
            })
            ->addColumn('skill_level', function ($query) {
                $code = CodeValue::where('id', $query->skill_level_cv_id)->first();
                return [
                    $code->name
                ];
            })
            ->addColumn('skill', function ($query) {
                $skill = Skill::where('id', $query->skill_id)->first();
                return [
                    $skill->name
                ];
            })
            ->addColumn('action', function($query) {
                return '<a href="'.route('skills.show', $query->uuid).'">View</a>';
            })
            ->rawColumns(['action','type'])
            ->make(true);
    }
}
