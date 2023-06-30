<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionaireRequest;
use App\Models\Questionaire;
use Illuminate\Http\Request;

class QuestionaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questionaire = Questionaire::all();
        return view('questionaire.index', compact('questionaire'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('questionaire.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuestionaireRequest $request)
    {
      Questionaire::create($request->validated());
      return redirect()->route('questionaire.index')->with('success','Questionaire Created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Questionaire $questionaire)
    {
        return view('questionaire.form', compact('questionaire'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(QuestionaireRequest $request, Questionaire $questionaire)
    {
        $questionaire->update($request->validated());
        return redirect()->route('questionaire.index')->with('success','Questionaire Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
