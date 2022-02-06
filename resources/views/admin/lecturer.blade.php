@extends('layouts.admin_layout')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h4 class="font-weight-bold mb-0">Admin dashboard</h4>
              @include('inc.messages')
            </div>
            <div>
                <button type="button" class="btn btn-primary btn-icon-text btn-rounded" data-toggle="modal" data-target="#createLecturerModal">
                  <i class="ti-clipboard btn-icon-prepend"></i>Create
                </button>
            </div>
          </div>
        </div>
      </div>
    
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card position-relative">
            <div class="card-body">
              <p class="card-title">Lecturers</p>
              <div class="row">
                @if (count($users) > 0)
                    
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-center text-secondary text-xxs">Title</th>
                        <th class="text-uppercase text-center text-secondary text-xxs">lastname</th>
                        <th class="text-uppercase text-center text-secondary text-xxs">middlename</th>
                        <th class="text-uppercase text-center text-secondary text-xxs">firstname</th>
                        <th class="text-uppercase text-center text-secondary text-xxs">email</th>
                        <th class="text-uppercase text-center text-secondary text-xxs">gender</th>
                        <th class="text-uppercase text-center text-secondary text-xxs">phone no</th>
                        <th class="text-uppercase text-center text-secondary text-xxs">date registered</th>
                        <th class="text-uppercase text-center text-secondary text-xxs">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                          
                      <tr>
                        
                        <td class="align-middle text-center"><span class="text-xs ">{{ $user->title}}</span></td>
                        <td class="align-middle text-center"><span class="text-xs ">{{$user->last_name}}</span></td>
                        <td class="align-middle text-center"><span class="text-xs ">{{$user->middle_name}}</span></td>
                        <td class="align-middle text-center"><span class="text-xs ">{{$user->first_name}}</span></td>
                        <td class="align-middle text-center"><span class="text-xs ">{{$user->email}}</span></td>
                        <td class="align-middle text-center"><span class="text-xs ">{{$user->gender}}</span></td>
                        <td class="align-middle text-center"><span class="text-xs " >{{$user->phone_number}}</span></td>
                        <td class="align-middle text-center"><span class="text-xs ">{{$user->created_at}}</span></td>
                        
                        <td class="align-middle text-center">
                          <a href="" class=" font-weight-bold editUserBtn" data-toggle="modal" data-target="#editLecturer{{$user->id}}" data-id="{{$user->id}}">
                              <i class="ti-pencil text-bold text-info"></i>
                          </a>
                          <a href="" class="text-danger font-weight-bold editUserBtn" data-toggle="modal" data-target="#deleteLecturer{{$user->id}}" data-id="{{$user->id}}">
                            <i class="ti-trash text-bold text-danger"></i>
                          </a>
                          
                          <!-- Edit Lecturer Model -->
                          <div class="modal fade" id="editLecturer{{$user->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title text-primary" >Edit Lecturer</h4>
                                  <a class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <i class="ti-close opacity-10 text-info"></i>
                                  </a>
                                </div>
                                <div class="modal-body" id="editLecturer">
                                  <form class="pt-3" role="form" method="POST" action="{{ url('/lecturers/'.$user->id)}}" id="editLecturer" >
                                    @csrf
                                    
                                    <div class="form-group">
                                        <select name="title" id="" class="form-control" required>
                                            @switch($user->title)
                                                @case('Prof.')
                                                    <option value="Prof." selected>Prof.</option>
                                                    <option value="Dr.">Dr.</option>
                                                    <option value="Mr.">Mr.</option>
                                                    <option value="Mrs.">Mrs.</option>
                                                    <option value="Miss.">Miss.</option>
                                                    @break
                                                @case('Dr.')
                                                    <option value="Prof." >Prof.</option>
                                                    <option value="Dr." selected>Dr.</option>
                                                    <option value="Mr.">Mr.</option>
                                                    <option value="Mrs.">Mrs.</option>
                                                    <option value="Miss.">Miss.</option>
                                                    @break
                                                @case('Mr.')
                                                    <option value="Prof." >Prof.</option>
                                                    <option value="Dr.">Dr.</option>
                                                    <option value="Mr." selected>Mr.</option>
                                                    <option value="Mrs.">Mrs.</option>
                                                    <option value="Miss.">Miss.</option>
                                                    @break
                                                @case('Mrs.')
                                                    <option value="Prof.">Prof.</option>
                                                    <option value="Dr.">Dr.</option>
                                                    <option value="Mr.">Mr.</option>
                                                    <option value="Mrs." selected>Mrs.</option>
                                                    <option value="Miss.">Miss.</option>
                                                    @break
                                                @case('Miss.')
                                                    <option value="Prof.">Prof.</option>
                                                    <option value="Dr.">Dr.</option>
                                                    <option value="Mr.">Mr.</option>
                                                    <option value="Mrs.">Mrs.</option>
                                                    <option value="Miss." selected>Miss.</option>
                                                    @break
                                                @default
                                                    <option value="" selected>Select Title</option>
                                                    <option value="Prof.">Prof.</option>
                                                    <option value="Dr.">Dr.</option>
                                                    <option value="Mr.">Mr.</option>
                                                    <option value="Mrs.">Mrs.</option>
                                                    <option value="Miss.">Miss.</option>
                                            @endswitch
                                        
                                    </select>
                                      
                                    </div>
                                    <div class="form-group">
                                      <input type="text" class="form-control" name="last_name" 
                                      placeholder="Last Name" required autocomplete="last_name" value="{{$user->last_name}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="middle_name" 
                                        placeholder="Middle Name" required autocomplete="middle_name" value="{{$user->middle_name}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="first_name" 
                                        placeholder="First Name" required autocomplete="first_name" value="{{$user->first_name}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" 
                                        placeholder="Email" required autocomplete="email" value="{{$user->email}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone_number" 
                                        placeholder="Phone No" required autocomplete="phone_no" value="{{$user->phone_number}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="course_code" 
                                        placeholder="Course Code" required autocomplete="course_code" value="{{$user->course_code}}">
                                    </div>
                                    <div class="form-group">
                                        <select name="gender" id="" class="form-control" required>
                                            @switch($user->gender)
                                                @case('Male')
                                                    <option value="Male" selected>Male</option>
                                                    <option value="Female">Female</option>
                                                    @break
                                                @case('Female')
                                                    <option value="Male">Male</option>
                                                    <option value="Female" selected>Female</option>
                                                    @break
                                                @default
                                                    <option value="" selected>Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                            @endswitch
                                            
                                        </select>
                                      </div>
                                    <div class="form-group">
                                      <select name="type" id="" class="form-control" required>
                                          <option value="0" >Student</option>
                                          <option value="1" selected>Lecturer</option>
                                          <option value="2">Admin</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="picture" onblur="(this.value='{{ $user->picture }}')" class="form-control" value="{{ $user->picture }}">
                                        <img src="/storage/pictures/{{ $user->picture }}" 
                                        alt="" class="img-thumbnail rounded float-right mt-15" style="margin-top: -10vh; width: 35em; height:15em">
                                    </div>
                                    
                                    <input type="hidden" name="_method" value="PUT">
                                <div class="modal-footer">
                                  <div class="row">
                                    <div class="col-md-12">
                                      <button type="submit" class="btn btn-primary btn-md font-weight-medium auth-form-btn">
                                        Save
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </form>
                              </div>
                            </div>
                          </div>
                          <!--//Edit Lecturer-->

                        </td>
                        <!--Delete Lecturer-->
                        <div class="modal fade" id="deleteLecturer{{$user->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title text-primary" >Delete User</h4>
                                <a class="close" type="button" data-dismiss="modal" aria-label="Close">
                                  <i class="ti-close opacity-10 text-info"></i>
                                </a>
                              </div>
                              <div class="modal-body" id="DeleteLecturerModalBody">
                                <p class="lead display-4 font-weight-bold">
                                  Are you sure you wish to delete this "{{$user->title}} {{$user->last_name}}" ?
                                </p>
                                <form method="POST" action="{{ url('/lecturers/'. $user->id)}}" id="deleteLecturer">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                
                              </div>
                              <div class="modal-footer">
                                <div class="row">
                                  <div class="col-md-12">
                                    <button type="submit" class="btn btn-danger btn-md font-weight-medium auth-form-btn">
                                      Yes
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </form>
                            </div>
                          </div>
                        </div>
                        <!--//Delete Lecturer-->
                      </tr>
                      
                      @endforeach
                      {{$users->links()}}
                    </tbody>
                  </table>
                </div>  
                @else
                    <div class="text-center">
                      No Lecturer Found!
                    </div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Create Lecturer modal  -->
    <div class="modal fade" id="createLecturerModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title text-primary" >Create Lecturer</h4>
            <a class="close" type="button" data-dismiss="modal" aria-label="Close">
              <i class="ti-close opacity-10 text-info"></i>
            </a>
          </div>
          <div class="modal-body" id="createLecturerModalBody">
            <form class="pt-3" role="form" method="POST" action="{{ url('lecturers')}}" id="editLecturer" enctype="multipart/form-data" >
                @csrf
                
                <div class="form-group">
                    <select name="title" id="" class="form-control" required>
                        <option value="" selected>Select Title</option>
                        <option value="Prof." >Prof.</option>
                        <option value="Dr.">Dr.</option>
                        <option value="Mr.">Mr.</option>
                        <option value="Mrs.">Mrs.</option>
                        <option value="Miss.">Miss.</option>
                    </select>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="last_name" 
                  placeholder="Last Name" required autocomplete="last_name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="middle_name" 
                    placeholder="Middle Name" required autocomplete="middle_name" >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="first_name" 
                    placeholder="First Name" required autocomplete="first_name" >
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" 
                    placeholder="Email" required autocomplete="email" >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="phone_number" 
                    placeholder="Phone Number" required autocomplete="phone_number" >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="course_code" 
                    placeholder="Course Code" required autocomplete="course_code" >
                </div>
                <div class="form-group">
                    <select name="gender" id="" class="form-control">
                        <option value="" selected> Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                  <select name="type" id="" class="form-control" required>
                      <option value="0" >Student</option>
                      <option value="1" selected>Lecturer</option>
                      <option value="2">Admin</option>
                  </select>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" required autocomplete="password"  placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password_confirmation" required autocomplete="password"  placeholder="Confirm Password">
                    <small class="form-text" style="color: #e91e63">
                        Your password must be 6 characters long.
                    </small>
                </div>
                <div class="form-group">
                    <input type="file" class="form-control" name="picture" required  placeholder="Profile Pic">
                    
                </div>
              
          <div class="modal-footer">
            <div class="row">
              <div class="col-md-12">
                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                  Create
                </button>
              </div>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    </div>
  
    
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    @include('inc.footer')
    <!-- partial -->
</div>
@endsection