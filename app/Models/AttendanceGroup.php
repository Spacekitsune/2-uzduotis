<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceGroup extends Model
{
    use HasFactory;

    public function difficultyAttendancegroups() {
        return $this->belongsTo(Difficulty::class, 'difficulty', 'id');
    }

    public function attendancegroupStudent() {
        return $this->hasMany(Student::class, 'group_id', 'id');
    }

    public function schoolAttendancegroup() {
        return $this->belongsTo(School::class, 'school_id', 'id');
    }
}
