<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skills;
use App\Http\Requests\StoreSkillRequest;

class SkillController extends Controller
{


    public function show(string $category_id)
    {
        return Skills::where('category_id' , $category_id)->get();
    }

    public function showSkill(Skills $skill)
    {
        return $skill;
    }

    public function store(StoreSkillRequest $request)
    {
        Skills::create($request->validated());

        return response()->json([

            'status' => true ,
            'msg' => 'Successfully Created New Skill' ,
        ]);
    }

    public function update(StoreSkillRequest $request, Skills $skill)
    {
        $skill->update($request->validated());

        return response()->json([

            'status' => true ,
            'msg' => 'Successfully Updated Skill' ,
        ]);
    }

    public function destroy(Skills $skill)
    {
        $skill->delete();

        return response()->json([

            'status' => true ,
            'msg' => 'Successfully Deleted Skill' ,
        ]);
    }
}
