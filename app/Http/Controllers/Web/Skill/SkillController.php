<?php

namespace App\Http\Controllers\Web\Skill;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Web\Skill\Traits\SKillsDatatable;
use App\Models\Skill\Skill;
use App\Models\Skill\SkillCategory;
use App\Models\Skill\UserSkill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    use SKillsDatatable;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return view('skills.index')
            ->with('categories', SkillCategory::all()->pluck('name','id'))
            ->with('skill_levels', code_value()->query()->where('code_id',9)->pluck('name','id'))
            ->with('skills', Skill::all()->pluck('name','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->merge(['user_id'=> access()->id()]);
        UserSkill::create($request->all());
        alert()->success('Skill have been added Successfully!', 'success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(UserSkill $userSkill)
    {
        return view('skills.show')
            ->with('userSkill',$userSkill)
            ->with('categories', SkillCategory::all()->pluck('name','id'))
            ->with('skill_levels', code_value()->query()->where('code_id',9)->pluck('name','id'))
            ->with('skills', Skill::all()->pluck('name','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, UserSkill $userSkill)
    {
        $userSkill->update($request->all());
        alert()->success('Skill has been updated Successfully!', 'success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function byCategory($id){
        $data = Skill::where('skill_category_id', $id)->get();
        return response()->json($data);
    }
}
