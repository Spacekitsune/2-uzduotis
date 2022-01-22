<?php

namespace App\Http\Controllers;

use App\Models\AttendanceGroup;
use App\Http\Requests\StoreAttendanceGroupRequest;
use App\Http\Requests\UpdateAttendanceGroupRequest;
use Illuminate\Http\Request;

class AttendanceGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendancegroups = AttendanceGroup::all();
        return view('attendancegroup.index', ['attendancegroups' => $attendancegroups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('attendancegroup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAttendanceGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attendancegroup = new AttendanceGroup();
        $attendancegroup->name = $request->attendancegroup_name;
        $attendancegroup->description = $request->attendancegroup_description;
        $attendancegroup->difficulty = $request->attendancegroup_difficulty;
        $attendancegroup->school_id = $request->attendancegroup_school_id;


        $attendancegroup->save();

        return redirect()->route('attendancegroup.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AttendanceGroup  $attendanceGroup
     * @return \Illuminate\Http\Response
     */
    public function show(AttendanceGroup $attendanceGroup)
    {
        return view('attendancegroup.show', ['attendancegroup' => $attendanceGroup]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AttendanceGroup  $attendanceGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(AttendanceGroup $attendanceGroup)
    {
        return view('attendancegroup.edit', ['attendancegroup' => $attendanceGroup]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttendanceGroupRequest  $request
     * @param  \App\Models\AttendanceGroup  $attendanceGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AttendanceGroup $attendanceGroup)
    {
        $attendanceGroup->name = $request->attendancegroup_name;
        $attendanceGroup->description = $request->attendancegroup_description;
        $attendanceGroup->difficulty = $request->attendancegroup_difficulty;
        $attendanceGroup->school_id = $request->attendancegroup_school_id;


        $attendanceGroup->save();

        return redirect()->route('attendancegroup.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AttendanceGroup  $attendanceGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttendanceGroup $attendanceGroup)
    {
        // $companies = $type->typeCompanies;
        // if (count($companies) != 0) {
        //     return redirect()->route('types.index')->with('error_message', 'Delete is not possible while type has companies.');
        // } 
        $attendanceGroup->delete();
        return redirect()->route('attendancegroup.index')->with('success_message', 'Attendance group was deleted.');
    }
}
