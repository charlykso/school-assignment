@extends('layouts.student_layout')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h4 class="font-weight-bold mb-0">Student dashboard</h4>
            </div>
            @include('inc.messages')
            <div>
                <button type="button" class="btn btn-primary btn-icon-text btn-rounded">
                  <i class="ti-clipboard btn-icon-prepend"></i>Report
                </button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Assignment Records</h4>
            @if (count($submittedAssignments) > 0)
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Lecturer</th>
                      <th>Course Code</th>
                      <th>Title</th>
                      <th>Body</th>
                      <th>Due Date</th>
                      <th>Total Mark</th>
                      <th>Status</th>
                      <th>Score</th>
                      <th>Feedback</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                      @foreach ($submittedAssignments as $submittedAssignment)
                      <tr>
                        <td>{{$submittedAssignment->lecturerName}}</td>
                        <td>{{$submittedAssignment->course_code}}</td>
                        <td>{{$submittedAssignment->title}}</td>
                        <td>{{$submittedAssignment->body}}</td>
                        <td>{{$submittedAssignment->due_date}}</td>
                        <td>{{$submittedAssignment->total_mark}}</td>
                        <td>{{$submittedAssignment->status}}</td>
                        <td>{{$submittedAssignment->score}}</td>
                        <td>{{$submittedAssignment->feedback}}</td>
                        
                      </tr>
                      @endforeach
                    
                  </tbody>
                </table>
              </div>
            @else
              <h4>No Submitted Assignment</h4>
            @endif
            </div>
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

