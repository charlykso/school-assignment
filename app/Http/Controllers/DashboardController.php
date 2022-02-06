<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Submitted_assignment;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard
     * 
     * @return \Illuminate\Contracts\Support\Renderable;
     */

    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $matric_no = $user->matric_no;
        $lecturers = User::where('type', '1')->get();
        $submittedAssignments = Submitted_assignment::where('matric_no', $matric_no)->get();
        $myMarkedsubmittedAssignments = Submitted_assignment::where('status', 'marked')
                                                            ->where('user_id', $user_id)->get();
        $markedAssignments = Submitted_assignment::where('status', 'marked')->get();
        // $lecturerMarkedAssignments = Submitted_assignment::where('status', 'marked')->get();
        $noOfStudents = User::where('type', '0');
        $noOfMyAssignments = Assignment::where('user_id', $user_id);
        $noOfAssignment = Assignment::all();
        $noOfSubmittedAssignment = Submitted_assignment::all();

        $assignments = Assignment::orderBy('created_at', 'desc')->paginate(10);
        foreach ($assignments as $assignment) {
            $assignmentUser = User::find($assignment->user_id);
            $assignment->full_name = $assignmentUser->title.' '.$assignmentUser->last_name;
        }

        // switch ($user->type) {
        //     case '0':
        //         $data = [
        //             'user' => $user,
        //         ];
        //         break;
        //     case '1': 
        //         $data = [
        //             'user' => $user,
        //         ];
        //         break;
        //     case '2': 
        //         $data = [
        //             'user' => $user,
        //         ];
        //         break;
        //     default:
        //         $data = [
        //             'user' => $user,
        //         ];
        //         break;
        // }


        $data = [
            'user' => $user,
            'assignments' => $assignments,
            'lecturers' => $lecturers,
            'myMarkedsubmittedAssignments' => $myMarkedsubmittedAssignments,
            'submittedAssignments' => $submittedAssignments,
            'markedAssignments' => $markedAssignments,
            'noOfStudents' => $noOfStudents,
            'noOfMyAssignments' => $noOfMyAssignments,
            'noOfAssignment' => $noOfAssignment,
            'noOfSubmittedAssignment' => $noOfSubmittedAssignment,
        ];

        //show different dashboard depending on the type of user
        if ($user->type == 2) {
            return view('admin_dashboard')->with($data);
        }elseif($user->type == 1){
            return view('lecturer_dashboard')->with($data);
        }elseif ($user->type == 0) {
            return view('student_dashboard')->with($data);
        }
    }
}
