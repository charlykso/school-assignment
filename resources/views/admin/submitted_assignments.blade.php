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
                <button type="button" class="btn btn-primary btn-icon-text btn-rounded" data-toggle="modal" data-target="#createAssignmentModal">
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
              <p class="card-title">Submitted Assignments:</p>
              <div class="row">
                @if (count($allSubmittedAssignments) > 0)
                    
                
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-center text-secondary text-xxs">Lecturer</th>
                        <th class="text-uppercase text-center text-secondary text-xxs">Course Code</th>
                        <th class="text-uppercase text-center text-secondary text-xxs">Title</th>
                        <th class="text-uppercase text-center text-secondary text-xxs" style="width: 10rem; word-wrap:break-word">Body</th>
                        <th class="text-uppercase text-center text-secondary text-xxs">Due Date</th>
                        <th class="text-uppercase text-center text-secondary text-xxs">matric no</th>
                        <th class="text-uppercase text-center text-secondary text-xxs">Status</th>
                        <th class="text-uppercase text-center text-secondary text-xxs">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($allSubmittedAssignments as $allSubmittedAssignment)
                          
                      <tr>
                        {{-- {{ $user = App\Models\User::find($assignment->user_id)->last_name}} --}}
                        <td class="align-middle text-center"><span class="text-xs ">{{ $allSubmittedAssignment->full_name}}</span></td>
                        <td class="align-middle text-center"><span class="text-xs ">{{$allSubmittedAssignment->course_code}}</span></td>
                        <td class="align-middle text-center"><span class="text-xs ">{{$allSubmittedAssignment->title}}</span></td>
                        <td class="align-middle text-center"><span class="text-xs " style="width: 10rem; word-wrap:break-word">{{$allSubmittedAssignment->body}}</span></td>
                        <td class="align-middle text-center"><span class="text-xs ">{{$allSubmittedAssignment->due_date}}</span></td>
                        <td class="align-middle text-center"><span class="text-xs ">{{$allSubmittedAssignment->matric_no}}</span></td>
                        @if ($allSubmittedAssignment->status == 0)
                        <td class="align-middle text-center text-sm"> <span class="badge badge-sm bg-gradient-info">Pending</span></td>
                        @else
                            @if ($allSubmittedAssignment->status == 1)
                                <td class="align-middle text-center text-sm"><span class="badge badge-sm bg-gradient-secondary">In Progress</span></td>
                            @else
                                <td class="align-middle text-center text-sm"><span class="badge badge-sm bg-gradient-success">Completed</span></td>
                            @endif
                        @endif
                        <td class="align-middle text-center">
                          <a href="" class=" font-weight-bold editUserBtn" data-toggle="modal" data-target="#editAssignment{{$allSubmittedAssignment->id}}" data-id="{{$allSubmittedAssignment->id}}">
                              <i class="ti-pencil text-bold text-info"></i>
                          </a>
                          <a href="" class="text-danger font-weight-bold editUserBtn" data-toggle="modal" data-target="#deleteAssignment{{$allSubmittedAssignment->id}}" data-id="{{$allSubmittedAssignment->id}}">
                            <i class="ti-trash text-bold text-danger"></i>
                          </a>
                          
                          <!-- Edit Assignment Model -->
                          <div class="modal fade" id="editAssignment{{$allSubmittedAssignment->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title text-primary" >Edit Assignment</h4>
                                  <a class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <i class="ti-close opacity-10 text-info"></i>
                                  </a>
                                </div>
                                <div class="modal-body" id="editAssignmentModalBody">
                                  <form class="pt-3" role="form" method="POST" action="{{ url('/assignments/'.$allSubmittedAssignment->id)}}" id="editAssignment" >
                                    @csrf
                                    
                                    <div class="form-group">
                                      <input type="text" class="form-control text-capitalize" name="course_code" 
                                      placeholder="Course Code" required autocomplete="course_code" value="{{$allSubmittedAssignment->course_code}}">
                                    </div>
                                    <div class="form-group">
                                      <input type="text" class="form-control" name="title" 
                                      placeholder="Title" required autocomplete="title" value="{{$allSubmittedAssignment->title}}">
                                    </div>
                                    <div class="form-group">
                                      <textarea name="body" id=""  class="form-control" value="" autocomplete="body" required cols="30" rows="10">
                                        {{$allSubmittedAssignment->body}}
                                      </textarea>
                                    </div>
                                    <div class="form-group">
                                      <input type="text" class="form-control" name="due_date" 
                                      placeholder="Due Date" required autocomplete="due_date" onfocus="(this.type='date')" 
                                      onblur="(this.type='text')" value="{{$allSubmittedAssignment->due_date}}">
                                    </div>
                                    <div class="form-group">
                                      <input type="number" class="form-control" name="total_mark" 
                                      placeholder="Total Mark" required autocomplete="total_mark" value="{{$allSubmittedAssignment->total_mark}}">
                                    </div>
                                    <div class="form-group">
                                      <select name="status" id="" class="form-control" required>
                                        @if ($allSubmittedAssignment->status == 0)
                                          <option value="0" selected>Pending</option>
                                          <option value="1">In Progress</option>
                                          <option value="2">Completed</option>
                                        @endif
                                        @if ($allSubmittedAssignment->status == 1)
                                          <option value="0" >Pending</option>
                                          <option value="1" selected>In Progress</option>
                                          <option value="2">Completed</option>
                                        @endif
                                        @if ($allSubmittedAssignment->status == 2)
                                          <option value="0">Pending</option>
                                          <option value="1">In Progress</option>
                                          <option value="2" selected>Completed</option>
                                        @endif
                                        
                                      </select>
                                    </div>
                                    <input type="hidden" name="_method" value="PUT">
                                
                                </div>
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
                          <!--//Edit Assignment-->

                        </td>
                        <!--Delete Assignment-->
                        <div class="modal fade" id="deleteAssignment{{$allSubmittedAssignment->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title text-primary" >Delete Assignment</h4>
                                <a class="close" type="button" data-dismiss="modal" aria-label="Close">
                                  <i class="ti-close opacity-10 text-info"></i>
                                </a>
                              </div>
                              <div class="modal-body" id="DeleteAssignmentModalBody">
                                <p class="lead display-4 font-weight-bold">
                                  Are you sure you wish to remove this "{{$allSubmittedAssignment->course_code}}" Assignment?
                                </p>
                                <form method="POST" action="{{ url('/assignments/'. $allSubmittedAssignment->id)}}" id="deleteAssignment">
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
                        <!--//Delete Assignment-->
                      </tr>
                      
                      @endforeach
                      {{$allSubmittedAssignments->links()}}
                    </tbody>
                  </table>
                </div>  
                @else
                    <div class="text-center">
                      No Assignment has been submitted Found!
                    </div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Create assignment modal  -->
    <div class="modal fade" id="createAssignmentModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title text-primary" >Create Assignment</h4>
            <a class="close" type="button" data-dismiss="modal" aria-label="Close">
              <i class="ti-close opacity-10 text-info"></i>
            </a>
          </div>
          <div class="modal-body" id="createAssignmentModalBody">
            <form class="pt-3" role="form" action="{{ route('assignment')}}" method="post" >
              @csrf
              
              <div class="form-group">
                <input type="text" class="form-control text-capitalize" style="text-transform: uppercase" name="course_code" 
                placeholder="Course Code" required autocomplete="course_code">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="title" 
                placeholder="Title" required autocomplete="title">
              </div>
              <div class="form-group">
                <textarea name="body" id=""  class="form-control" autocomplete="body" required cols="30" rows="10">
                  Assignment body  goes here...
                </textarea>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="due_date" 
                placeholder="Due Date" required autocomplete="due_date" onfocus="(this.type='date')" 
                onblur="(this.type='text')">
              </div>
              <div class="form-group">
                <input type="number" class="form-control" name="total_mark" 
                placeholder="Total Mark" required autocomplete="total_mark">
              </div>
              <div class="form-group">
                <select name="status" id="" class="form-control" required>
                  <option value="" selected disabled>Select Status</option>
                  <option value="0">Pending</option>
                  <option value="1">In Progress</option>
                  <option value="2">Completed</option>
                </select>
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