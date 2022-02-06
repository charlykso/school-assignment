<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
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
         if (auth()->user()->type != 2) {
            return redirect('/dashboard')->with('error', 'Unauthorized Page');
        }

        $user_id = auth()->user()->id;
        $fuser = User::find($user_id);

        // $users = User::orderBy('created_at', 'desc')->paginate(10)->where;
        $users = User::where('type', 0)->orderBy('created_at', 'desc')->paginate();
         
        $data = [
            'fuser' => $fuser,
            'users' => $users,
        ];
        return view('admin.student')->with($data);
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
        if (auth()->user()->type != 2) {
            return redirect('/dashboard')->with('error', 'Unauthorized Page');
        }

        //validat request details
        $this->validate($request, [
            'matric_no' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            // 'course_code' => 'required|string|max:255',
            'type' => 'required|max:4',
            'phone_number' => 'required|digits:11|numeric|unique:users',
            'email' => 'required|string|email|max:255',
            'password' => ['required', 'confirmed', Password::min(6)],
            'gender' => 'required|string|min:4|max:6|alpha',
            'picture' => 'required|image|max:1999',
            
        ]);

        //get fileName with the extension
        $filenamewithextension = $request->file('picture')->getClientOriginalName();
        //get just filename
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        //get just extension
        $extension = $request->file('picture')->getClientOriginalExtension();
        //filename to store
        $filenameToStore = $filename.'_'.time().'.'.$extension;
        //upload image
        $path = $request->file('picture')->storeAs('public/pictures', $filenameToStore);

        $user = new User();
        $user->matric_no = $request->input('matric_no');
        $user->first_name = $request->input('first_name');
        $user->middle_name = $request->input('middle_name');
        $user->last_name = $request->input('last_name');
        // $user->course_code = $request->input('course_code');
        $user->email = $request->input('email');
        $user->gender = $request->input('gender');
        $user->password = Hash::make($request->input('password'));
        $user->type = $request->input('type');
        $user->phone_number = $request->input('phone_number');
        $user->picture = $filenameToStore;
        $user->save();

        return redirect('/students')->with('success', 'Student successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
         if (auth()->user()->type != 2) {
            return redirect('/dashboard')->with('error', 'Unauthorized Page');
        }

        //validat request details
        $this->validate($request, [
            'matric_no' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            // 'course_code' => 'required|string|max:255',
            'type' => 'required|max:4',
            'phone_number' => 'required|digits:11|numeric|unique:users',
            'email' => 'required|string|email|max:255',
            // 'password' => ['required', 'confirmed', Password::min(6)],
            'gender' => 'required|string|min:4|max:6|alpha',
            'picture' => 'required|image|max:1999',
            
        ]);

        //get fileName with the extension
        $filenamewithextension = $request->file('picture')->getClientOriginalName();
        //get just filename
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        //get just extension
        $extension = $request->file('picture')->getClientOriginalExtension();
        //filename to store
        $filenameToStore = $filename.'_'.time().'.'.$extension;
        //upload image
        $path = $request->file('picture')->storeAs('public/pictures', $filenameToStore);

        $user = User::find($id);
        $user->matric_no = $request->input('matric_no');
        $user->first_name = $request->input('first_name');
        $user->middle_name = $request->input('middle_name');
        $user->last_name = $request->input('last_name');
        // $user->course_code = $request->input('course_code');
        $user->email = $request->input('email');
        $user->gender = $request->input('gender');
        // $user->password = Hash::make($request->input('password'));
        $user->type = $request->input('type');
        $user->phone_number = $request->input('phone_number');
        $user->picture = $filenameToStore;
        $user->update();

        return redirect('/students')->with('success', 'Student successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/students')->with('success', 'Student Removed!');
    }
}
