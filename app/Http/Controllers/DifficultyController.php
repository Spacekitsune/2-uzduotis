<?php

namespace App\Http\Controllers;

use App\Models\difficulty;
use App\Http\Requests\StoredifficultyRequest;
use App\Http\Requests\UpdatedifficultyRequest;

class DifficultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoredifficultyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredifficultyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\difficulty  $difficulty
     * @return \Illuminate\Http\Response
     */
    public function show(difficulty $difficulty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\difficulty  $difficulty
     * @return \Illuminate\Http\Response
     */
    public function edit(difficulty $difficulty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedifficultyRequest  $request
     * @param  \App\Models\difficulty  $difficulty
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedifficultyRequest $request, difficulty $difficulty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\difficulty  $difficulty
     * @return \Illuminate\Http\Response
     */
    public function destroy(difficulty $difficulty)
    {
        //
    }
}
