<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'lecturer_id',
        'title',
        'body',
        'course_code',
        'total_mark',
        'due_date',
        'status'
    ];

    public function getLecturer()
    {
        return $this->belongsTo(related: 'App\Models\User', foreignKey: 'user_id', ownerKey: 'id');
    }


    /**
     * Get submitted_assignment associated with assignment
     */
    public function getSubmittedAssignment()
    {
        return $this->hasMany(related: 'App\Models\Submitted_assignment', foreignKey: 'assignment_id');
    }
}
