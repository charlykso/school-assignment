<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submitted_assignment extends Model
{
    use HasFactory;


    protected $fillable = [
        'assignment_id',
        'user_id',
        'status',
        'score',
        'feedback',
        'matric_no',
        'file',
    ];


    /**
     * Get assignment associated with submitted_assignment
     */
    public function bringAssignment()
    {
        return $this->belongsTo('App\Models\Assignment');
    }

    /**
     * Get user(lecturer) associated with submitted_assignment
     */
    // public function getUser()
    // {
    //     return $this->belongsTo('App\Models\User');
    // }

    /**
     * Get user(students) associated with submitted_assignment
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
