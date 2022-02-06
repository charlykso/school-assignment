<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Submitted_assignment;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssignmentController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //check if user trying to access the page is admin
        if (auth()->user()->type != 2 && auth()->user()->type != 1) {
            return redirect('/dashboard')->with('error', 'Unauthorized Page');
        }

        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        //getting all assignments
        $allAssignments = Assignment::orderBy('created_at', 'desc')->paginate(10);
        foreach($allAssignments as $allAssignment)
        {
            $lecturerName = $allAssignment->getLecturer;
            $allAssignment->full_name = $lecturerName->title.' '.$lecturerName->last_name;
            // echo $allAssignment->full_name;
        }
        // return
        // return $allAssignment->title;
        // dd($lecturerName);
        
        //getting assignments based on auth user
        $assignments = $user->getAssignments()->orderBy('created_at', 'desc')->paginate(10);
        
        foreach ($assignments as $assignment) {
            $assignmentUser = $assignment->getLecturer;
            $assignment->full_name = $assignmentUser->title.' '.$assignmentUser->last_name;
            
        }
        // return $assignments;


        
        $data = [
            'assignments' => $assignments,
            'allAssignments' => $allAssignments,
        ];

        //show different dashboard depending on the type of user
        if ($user->type == 2) {
            return view('admin.assignment')->with($data);
        } elseif($user->type == 1){
            return view('lecturer.assignment')->with($data);
        }
    }
    
    //for assignment that has been submitted
    public function doneAssignment()
    {
         //check if user trying to access the page is admin
         if (auth()->user()->type != 2 ) {
            return redirect('/dashboard')->with('error', 'Unauthorized Page');
        }

        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        // $full_name = "";

        //getting all assignments
        $allAssignments = Assignment::orderBy('created_at', 'desc')->paginate(10);
        //getting all the submitted assignments
        $allSubmittedAssignments = Submitted_assignment::orderBy('created_at', 'desc')->paginate(10);
        // dd($allSubmittedAssignments);
        foreach($allSubmittedAssignments as $allSubmittedAssignment)
        {
            $assignmentId = Assignment::find($allSubmittedAssignment->assignment_id);
            $userId = User::find($assignmentId->user_id);
            // $lecturerName = $assignmentId->user;
            $allSubmittedAssignment->full_name = $userId->title.' '.$userId->last_name;
            $allSubmittedAssignment->title = $assignmentId->title;
            $allSubmittedAssignment->course_code = $assignmentId->course_code;
            $allSubmittedAssignment->body = $assignmentId->body;
            $allSubmittedAssignment->due_date = $assignmentId->due_date;
            $allSubmittedAssignment->status = $assignmentId->status;
            
        }
        // return $allAssignment->title;
        // dd($lecturerName);
        
        // $assignments = $user->getAssignments()->orderBy('created_at', 'desc')->paginate(10);
        
        // foreach ($assignments as $assignment) {
        //     $assignmentUser = User::find($assignment->user_id);
        //     $assignment->$full_name = $assignmentUser->title.' '.$assignmentUser->last_name;
        // }
        
        $data = [
            // 'assignments' => $assignments,
            'allAssignments' => $allAssignments,
            'allSubmittedAssignments' => $allSubmittedAssignments,
        ];

        return view('admin.submitted_assignments')->with($data);
    }

    /**
     * Display students record
     *
     * @return \Illuminate\Http\Response
     */
    public function viewRecords()
    {

        //check if user trying to access the page is admin
        if (auth()->user()->type != 0 ) {
            return redirect('/dashboard')->with('error', 'Unauthorized Page');
        }

        $fuser_id = auth()->user()->id;
        $user = User::find($fuser_id);
        
        // dd($user);
        $submittedAssignments = $user->assignments()->orderBy('created_at', 'desc')->paginate(10);

        //looking for the lecturer
        foreach ($submittedAssignments as $assignment) {
            $assignmentId = Assignment::find($assignment->assignment_id);
            $assignment->lecturerName = $assignmentId->getLecturer->title. " ".$assignmentId->getLecturer->last_name;
            $assignment->course_code = $assignmentId->course_code;
            $assignment->title = $assignmentId->title;
            $assignment->body = $assignmentId->body;
            $assignment->due_date = $assignmentId->due_date;
            $assignment->total_mark = $assignmentId->total_mark;

            
            
        //     echo $lecturer_name.'<b>';
            
        }
       
        
        $data = [
            // 'fuser' => $fuser,
            'submittedAssignments' => $submittedAssignments,
            // 'full_name' => $full_name,
        ];

        
        return view('student.view_records')->with($data);
    }


    public function submitAssignment()
    {
        
        //check if user trying to access the page is admin
        if (auth()->user()->type != 0 ) {
            return redirect('/dashboard')->with('error', 'Unauthorized Page');
        }

        $user_id = auth()->user()->id;
        // dd($user_id);
        $assignments = Assignment::orderBy('created_at', 'desc')->paginate(10);
        // dd($assignments);
        $Assignmentstatus = " ";
        foreach ($assignments as $assignment) {
            $assignmentUser = User::find($assignment->user_id);
            $assignment->full_name = $assignmentUser->title.' '.$assignmentUser->last_name;

            
            $bringSubmitteds = Submitted_assignment::where('user_id', $user_id)->get();
            // dd(count($bringSubmitteds));
            foreach ($bringSubmitteds as $bringSubmitted) {
                $assignment->getMatricNo = $bringSubmitted->matric_no; 
                $assignment->submittedAssignmentId = $bringSubmitted->assignment_id; 
            }
            // dd($bringSubmitted);
        
            // $assignment->getMatricNo = $bringSubmitted->matric_no; 
            // $assignment->submittedAssignmentId = $bringSubmitted->assignment_id; 
            // dd($bringSubmitted->assignment_id);


            $today = Carbon::now()->format('Y-m-d');
            //TODO:: check if i can change the assignment status in the table here and check for it in the blade
            if ($today > $assignment->due_date) {
                $Assignmentstatus = "expired";
            }else{
                $Assignmentstatus = "not expired";
            }
            

        }
            // dd(Auth()->user()->matric_no);

            // $user_id = auth()->user()->id;
            // $user = User::find($user_id);
            // $submittedAssignments = $user->assignments;
            
            // foreach($submittedAssignments as $submittedAssignment)
            // {
            //     //TODO:disabling a submit button when the user submits an assignment
            //     $submittedAssignmentMatricNo = $submittedAssignment->matric_no;
            //     $submittedAssignmentId = $submittedAssignment->assignment_id;
         
            
            // }

        $data = [
            'assignments' => $assignments,
            'Assignmentstatus' => $Assignmentstatus,
            // 'submittedAssignments' => $submittedAssignments,
            // 'submittedAssignmentMatricNo' => $submittedAssignmentMatricNo,
            // 'submittedAssignmentId' => $submittedAssignmentId,
        ];
        
        return view('student.submit_assignment')->with($data);
    }


    /**
     * validating and storing the assignment.
     * 
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function submit(Request  $request, $id)
    {

        //check if user trying to access the page is admin
        if (auth()->user()->type != 0 ) {
            return redirect('/dashboard')->with('error', 'Unauthorized Page');
        }

        // validate request details
        $this->validate($request, [
            'course_code' => 'required',
            'submitted_file' => 'required|mimes:pdf|max:10000',
        ]);

        // //handle file upload
        if ($request->hasFile('submitted_file')) {
            //get fileName with the extension
            $filenamewithextension = $request->file('submitted_file')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('submitted_file')->getClientOriginalExtension();
            //filename to store
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('submitted_file')->storeAs('public/assignments', $filenameToStore);
        }else{
            $filenameToStore = 'noFile.pdf';
        }

        $course_code = $request->course_code;
        // return $request;
        $user_id = auth()->user()->id;
        $current_user = User::find($user_id);
        $assignment_id = $id;
        $current_assignment = Assignment::find($assignment_id);
        
        $submittedAssignment = new Submitted_assignment();
        $submittedAssignment->assignment_id = $current_assignment->id;
        // $submittedAssignment->user_id = $current_assignment->user_id;
        //TODO::i channged the user_id to auth user id
        $submittedAssignment->user_id = $user_id;
        $submittedAssignment->file = $filenameToStore;
        $submittedAssignment->matric_no = $current_user->matric_no;
        $submittedAssignment->save();


        $data = [
            'current_user' => $current_user,
            'current_assignment' => $current_assignment,
        ];

        return redirect('assignments/students/submit')->with('success', 'Assignment was submitted successfully');;

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //check if user trying to access the page is admin
        if (auth()->user()->type != 2 && auth()->user()->type != 1) {
            return redirect('/dashboard')->with('error', 'Unauthorized Page');
        }

        //validate request details
        $this->validate($request, [
            'course_code' => 'required',
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'due_date' => 'required|date',
            'total_mark' => 'required',
            'status' => 'required|string',
        ]);

        //getting the user_id
        $user_id = auth()->user()->id;

        $assignment = new Assignment();
        $assignment->course_code = $request->input('course_code');
        $assignment->title = $request->input('title');
        $assignment->body = $request->input('body');
        $assignment->due_date = $request->input('due_date');
        $assignment->total_mark = $request->input('total_mark');
        $assignment->status = $request->input('status');
        $assignment->user_id = $user_id;
        $assignment->save();

        return redirect('/assignment')->with('success', 'A new assignment was successfully created');
    }

    /**
     * Display the assignment to be deleted.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //
    }

    /**
     * Display all the assignments
     *
     * @return \Illuminate\Http\Response
     */
    public function mark($id)
    {
        $user_id = auth()->user()->id;
        $assignments = Submitted_assignment::where('assignment_id', $id)->paginate(10);
        
        return view('lecturer.mark_assignments')->with('assignments', $assignments);
    }

    /**
     * mark submitted assignment
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function markSubmited(Request $request, $id)
    {
        //check if user trying to access the page is admin
        if (auth()->user()->type != 1 ) {
            return redirect('/dashboard')->with('error', 'Unauthorized Page');
        }

        // validate request details
        $this->validate($request, [
            'score' => 'required',
            'feedback' => 'required',
            'status' => 'required',
        ]);

        $submittedAssignment = Submitted_assignment::find($id);
        $submittedAssignment->score = $request->input('score');
        $submittedAssignment->feedback = $request->input('feedback');
        $submittedAssignment->status = $request->input('status');
        
        $submittedAssignment->update();

        return redirect('/assignment')->with('success', 'Assignment successfully updated');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //check if user trying to access the page is admin
        if (auth()->user()->type != 2 && auth()->user()->type != 1) {
            return redirect('/dashboard')->with('error', 'Unauthorized Page');
        }

        //validate request details
        $data = $request->validate([
            'course_code' => 'required',
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'due_date' => 'required|date',
            'total_mark' => 'required',
            'status' => 'required|string',
        ]);

        //getting the user_id
        // $user_id = auth()->user()->id;

        $assignment = Assignment::find($id);
        $assignment->course_code = $data['course_code'];
        $assignment->title = $data['title'];
        $assignment->body = $data['body'];
        $assignment->due_date = $data['due_date'];
        $assignment->total_mark = $data['total_mark'];
        $assignment->status = $data['status'];
        // $assignment->user_id = $user_id;
        $assignment->update();

        return redirect('/assignment')->with('success', 'Assignment successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //check if user trying to access the page is admin
        if (auth()->user()->type != 2 && auth()->user()->type != 1) {
            return redirect('/dashboard')->with('error', 'Unauthorized Page');
        }

        $assignment = Assignment::find($id);
        $assignment->delete();

        return redirect('/assignment')->with('success', 'Assignment Removed!');
    }
}
