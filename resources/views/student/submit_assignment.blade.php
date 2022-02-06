@extends('layouts.student_layout')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h4 class="font-weight-bold mb-0">Student dashboard</h4>
              @include('inc.messages')
            </div>
            <div>
                <button type="button" class="btn btn-primary btn-icon-text btn-rounded" data-toggle="modal" data-target="#submitAssignmentModal">
                  <i class="ti-clipboard btn-icon-prepend"></i> <span>Submit Assignment</span>
                </button>
            </div>
          </div>
        </div>
      </div>
    
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card position-relative">
            <div class="card-body">
              <p class="card-title">Assignments</p>
              <div class="row">
                @if (count($assignments) > 0)
                    
                
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-center text-secondary text-xxs">Course Code</th>
                        <th class="text-uppercase text-center text-secondary text-xxs">Title</th>
                        <th class="text-uppercase text-center text-secondary text-xxs" style="width: 10rem; word-wrap:break-word">Body</th>
                        <th class="text-uppercase text-center text-secondary text-xxs">Total Score</th>
                        <th class="text-uppercase text-center text-secondary text-xxs">Due Date</th>
                        <th class="text-uppercase text-center text-secondary text-xxs">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($assignments as $assignment)
                          
                      <tr>
                        <td class="align-middle text-center"><span class="text-xs ">{{$assignment->course_code}}</span></td>
                        <td class="align-middle text-center"><span class="text-xs ">{{$assignment->title}}</span></td>
                        <td class="align-middle text-center"><span class="text-xs " style="width: 10rem; word-wrap:break-word">{{$assignment->body}}</span></td>
                        <td class="align-middle text-center"><span class="text-xs ">{{$assignment->total_mark}}</span></td>
                        <td class="align-middle text-center"><span class="text-xs ">{{$assignment->due_date}}</span></td>
                        <td>
                          {{-- {{$assignment->status}} --}}
                          @if ($Assignmentstatus == "not expired")
                            @if (($assignment->submittedAssignmentId == $assignment->id) && ($assignment->getMatricNo == Auth()->user()->matric_no))
                                <button type="button" disabled class="btn btn-secondary btn-icon-text btn-rounded" data-toggle="modal" data-target="#submitAssignmentModal{{$assignment->id}}">
                                  <i class="ti-clipboard btn-icon-prepend"></i> <span>Submitted</span>
                                </button>
                            @else
                                <button type="button" class="btn btn-primary btn-icon-text btn-rounded" data-toggle="modal" data-target="#submitAssignmentModal{{$assignment->id}}">
                                  <i class="ti-clipboard btn-icon-prepend"></i> <span>Submit</span>
                                </button>
                            @endif
                            
                          @else
                              @if ($Assignmentstatus == "expired")
                                <button type="button" disabled class="btn btn-danger btn-icon-text btn-rounded" data-toggle="modal" data-target="#submitAssignmentModal{{$assignment->id}}">
                                  <i class="ti-clipboard btn-icon-prepend"></i> <span>Expired</span>
                                </button>
                              @endif
                          @endif
                          
                        </td>
                        <!-- Submit assignment modal  -->
                        <div class="modal fade" id="submitAssignmentModal{{$assignment->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title text-primary" >Submit Assignment</h4>
                                <a class="close" type="button" data-dismiss="modal" aria-label="Close">
                                  <i class="ti-close opacity-10 text-info"></i>
                                </a>
                              </div>
                              <div class="modal-body" id="submitAssignmentModalBody">
                                <form class="pt-3" role="form" action="{{ url('assignments/students/submit/'.$assignment->id)}}" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  
                                  <div class="form-group">
                                    <input type="text" class="form-control text-capitalize" style="text-transform: uppercase" name="course_code" 
                                    placeholder="Course Code" required autocomplete="course_code" value="{{$assignment->course_code}}" disabled >
                                  </div>
                                  <input type="hidden" value="{{$assignment->course_code}}" style="text-transform: uppercase" name="course_code">
                                  <div class="form-group">
                                    <input type="file" class="form-control" name="submitted_file" required>
                                  </div>

                                <div class="modal-footer">
                                  <div class="row">
                                    <div class="col-md-12">
                                      <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                                        Submit
                                      </button>
                                    </div>
                                  </div>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </tr>
                      
                      @endforeach
                      {{$assignments->links()}}
                    </tbody>
                  </table>
                </div>  
                @else
                    <div class="text-center">
                      No Assignment Found!
                    </div>
                @endif
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('inc.footer')
</div>
@endsection