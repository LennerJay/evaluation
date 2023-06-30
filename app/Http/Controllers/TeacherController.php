<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;
use App\Models\Criteria;
use App\Models\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::withAvgRating()->get();
        // dd($teachers);
        return view('teacher.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teacher.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeacherRequest $request)
    {
        Teacher::create($request->validated());
        return redirect()->route('teachers.index')->with('success','Teacher Created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $criterias = Criteria::getAvgRatingForTeacherPerCriteria($id)->get();

        $teacher = Teacher::where('id',$id)->withAvgRating()->get();
        // dd($criterias);
        // dd($teacher);
        return view('teacher.show',compact('teacher','criterias'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('teacher.form');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeacherRequest $request, Teacher $teacher)
    {
        $teacher->update($request->validated());
        return view('teacher.index')->with('success','Teacher Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
