@extends('layouts.lecturer_layout')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h4 class="font-weight-bold mb-0">Lecturer dashboard</h4>
              @include('inc.messages')
            </div>
            <div>
            </div>
          </div>
        </div>
      </div>
    
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card position-relative">
            <div class="card-body">
              <p class="card-title">Submitted assignments</p>
              
              <div class="row">
                @if (count($assignments) > 0)
                    
                
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-center text-secondary text-xxs">Student</th>
                        <th class="text-uppercase text-center text-secondary text-xxs">File</th>
                        <th class="text-uppercase text-center text-secondary text-xxs">Status</th>
                        <th class="text-uppercase text-center text-secondary text-xxs">Score</th>
                        <th class="text-uppercase text-center text-secondary text-xxs">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($assignments as $assignment)
                          
                      <tr>
                        <td class="align-middle text-center"><span class="text-xs ">{{$assignment->matric_no}}</span></td>
                        <td class="align-middle text-center"><span class="text-xs ">{{$assignment->file}}</span></td>
                        @if ($assignment->status == "not marked")
                          <td class="align-middle text-center text-sm"> <span class="badge badge-sm bg-gradient-warning">Not Marked</span></td>
                        @else 
                          @if ($assignment->status == "marked")
                            <td class="align-middle text-center text-sm"><span class="badge badge-sm bg-gradient-success">Marked</span></td>
                          @endif
                        @endif
                        <td class="align-middle text-center"><span class="text-xs ">{{$assignment->score}}</span></td>
                        <td class="align-middle text-center">
                          <a href="" class=" font-weight-bold editUserBtn" data-toggle="modal" data-target="#editAssignment{{$assignment->id}}" data-id="{{$assignment->id}}">
                              <i class="ti-pencil text-bold text-info"></i>Update
                          </a>
                          
                          <!-- Mark Assignment Model -->
                          <div class="modal fade" id="editAssignment{{$assignment->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title text-primary" >Mark Assignment</h4>
                                  <a class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <i class="ti-close opacity-10 text-info"></i>
                                  </a>
                                </div>
                                <div class="modal-body" id="editAssignmentModalBody">
                                  <div class="responsive-iframe frame" style="width: 100%; height: 100rem">
                                    <iframe class="responsive-iframe" src="/storage/assignments/{{$assignment->file}}" frameborder="0" 
                                      style="width: 100%; height:inherit;">
                                    </iframe>
                                  </div>
                                  <form class="pt-3" role="form" method="POST" action="{{ route('mark_assignment', ['assignment' => $assignment->id])}}" id="editAssignment" >
                                    @csrf
                                  
                                    <div class="form-group">
                                      {{-- <label for="matric_no"></label> --}}
                                      <input type="text" class="form-control" name="matric_no" 
                                      placeholder="Matric No" disabled required autocomplete="matric_no" value="{{$assignment->matric_no}}">
                                    </div>
                                    <div class="form-group">
                                      {{-- <label for="score">Score</label> --}}
                                      <input type="number" class="form-control" name="score" 
                                      placeholder="Score" required autocomplete="score" >
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleTextarea1">Feedback</label>
                                      <textarea name="feedback" class="form-control textarea" id="exampleTextarea1" cols="30" rows="5">

                                      </textarea>
                                    </div>
                                    <div class="form-group">
                                      {{-- <label for="status">Status</label> --}}
                                      <select name="status" id="" class="form-control" required>
                                          <option value=" " selected disabled>Select Status</option>
                                          <option value="marked">Marked</option>
                                          <option value="nat marked">Not Marked</option>
                                      </select>
                                    </div>
                                    <input type="hidden" name="_method" value="PUT">
                                
                                </div>
                                <div class="modal-footer">
                                  <div class="row">
                                    <div class="col-md-12">
                                      <button type="submit" class="btn btn-primary btn-md font-weight-medium auth-form-btn">
                                        Mark
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
                      </tr>
                      
                      @endforeach
                    </tbody>
                  </table>
                </div>  
                @else
                    <div class="text-center">
                      No Assignment Submitted yet!
                    </div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection