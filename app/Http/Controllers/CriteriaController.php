<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use App\Models\Question;
use Illuminate\Http\Request;

class CriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd($teacher_id);
        $criterias = Criteria::all();
        return 'test';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //['id'=>$criteria->id,'teacher_name'=>$teacher_name]
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request,int $criteria_id)
    {
        $criteria = Criteria::getAvgRatingForTeacherPerCriteria($criteria_id)->where('id',$criteria_id)->get();
        $teacher_name = $request->teacher_name;
        // $teacher_id = $request->teacher_id;
        $questions = Question::withAvgRatingForTeacherPerQuestion($request->teacher_id)->where('criteria_id',$criteria_id)->get();
        // dd($questions);
        return view('criteria.show',compact('criteria', 'teacher_name','questions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
