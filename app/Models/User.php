<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'phone_number',
        'gender',
        'email',
        'password',
        'picture',
        'matric_no',
        'title',
        'course_code',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * Get assignment associated with users(lecturers)
     */
    public function getAssignments()
    {
        return $this->hasMany('App\Models\Assignment');
    }

    /**
     * Get submitted_assignment associated with users(lecturer)
     */
    // public function getSubmittedAssignment()
    // {
    //     return $this->hasMany('App\Models\Submitted_assignment');
    // }

    /**
     * Get submitted_assignment associated with users(students)
     */
    public function assignments()
    {
        return $this->hasMany(Submitted_assignment::class);
    }
    
}
