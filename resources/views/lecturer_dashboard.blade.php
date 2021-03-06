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
                <button type="button" class="btn btn-primary btn-icon-text btn-rounded">
                  <i class="ti-clipboard btn-icon-prepend"></i>Report
                </button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title text-md-center text-xl-left">No Of Students</p>
              <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{$noOfStudents->count()}}</h3>
                <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
              </div>  
              {{-- <p class="mb-0 mt-2 text-danger">0.12% <span class="text-black ml-1"><small>(30 days)</small></span></p> --}}
            </div>
          </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title text-md-center text-xl-left">My Assignments</p>
              <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{$noOfMyAssignments->count()}}</h3>
                <i class="ti-pencil-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
              </div>  
              {{-- <p class="mb-0 mt-2 text-danger">0.47% <span class="text-black ml-1"><small>(30 days)</small></span></p> --}}
            </div>
          </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title text-md-center text-xl-left">No of Lecturers</p>
              <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{$lecturers->count()}}</h3>
                <i class="ti-agenda icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
              </div>  
              {{-- <p class="mb-0 mt-2 text-success">64.00%<span class="text-black ml-1"><small>(30 days)</small></span></p> --}}
            </div>
          </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title text-md-center text-xl-left">Marked assignment</p>
              <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{$markedAssignments->count()}}</h3>
                <i class="ti-check-box icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
              </div>  
              {{-- <p class="mb-0 mt-2 text-success">23.00%<span class="text-black ml-1"><small>(30 days)</small></span></p> --}}
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title">Nes Flash</p>
              <p class="text-muted font-weight-light">Received overcame oh sensible so at an. Formed do change merely to county it. Am separate contempt domestic to to oh. On relation my so addition branched.</p>
              <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
              {{-- <canvas id="sales-chart"></canvas> --}}
            </div>
            <div class="card border-right-0 border-left-0 border-bottom-0">
              <div class="d-flex justify-content-center justify-content-md-end">
                <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                  <button class="btn btn-lg btn-outline-light dropdown-toggle rounded-0 border-top-0 border-bottom-0" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Today
                  </button>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                    <a class="dropdown-item" href="#">January - March</a>
                    <a class="dropdown-item" href="#">March - June</a>
                    <a class="dropdown-item" href="#">June - August</a>
                    <a class="dropdown-item" href="#">August - November</a>
                  </div>
                </div>
                <button class="btn btn-lg btn-outline-light text-primary rounded-0 border-0 d-none d-md-block" type="button"> View all </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card border-bottom-0">
            <div class="card-body pb-0">
              <p class="card-title">Most Recent News</p>
              <p class="text-muted font-weight-light">The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime you reach a review</p>
              <div class="d-flex flex-wrap mb-5">
                <div class="mr-5 mt-3">
                  <p class="text-muted">Status</p>
                  <h3>362</h3>
                </div>
                <div class="mr-5 mt-3">
                  <p class="text-muted">New users</p>
                  <h3>187</h3>
                </div>
                <div class="mr-5 mt-3">
                  <p class="text-muted">Chats</p>
                  <h3>524</h3>
                </div>
                <div class="mt-3">
                  <p class="text-muted">Feedbacks</p>
                  <h3>509</h3>
                </div> 
              </div>
            </div>
            {{-- <canvas id="order-chart" class="w-100"></canvas> --}}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card position-relative">
            <div class="card-body">
              <p class="card-title">Detailed Reports</p>
              <div class="row">
                <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-center">
                  <div class="ml-xl-4">
                    <h1>33500</h1>
                    <h3 class="font-weight-light mb-xl-4">Sales</h3>
                    <p class="text-muted mb-2 mb-xl-0">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                  </div>  
                </div>
                <div class="col-md-12 col-xl-9">
                  <div class="row">
                    <div class="col-md-6 mt-3 col-xl-5">
                      <canvas id="north-america-chart"></canvas>
                      <div id="north-america-legend"></div>
                    </div>
                    <div class="col-md-6 col-xl-7">
                      <div class="table-responsive mb-3 mb-md-0">
                        <table class="table table-borderless report-table">
                          <tr>
                            <td class="text-muted">Illinois</td>
                            <td class="w-100 px-0">
                              <div class="progress progress-md mx-4">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td><h5 class="font-weight-bold mb-0">524</h5></td>
                          </tr>
                          <tr>
                            <td class="text-muted">Washington</td>
                            <td class="w-100 px-0">
                              <div class="progress progress-md mx-4">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td><h5 class="font-weight-bold mb-0">722</h5></td>
                          </tr>
                          <tr>
                            <td class="text-muted">Mississippi</td>
                            <td class="w-100 px-0">
                              <div class="progress progress-md mx-4">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td><h5 class="font-weight-bold mb-0">173</h5></td>
                          </tr>
                          <tr>
                            <td class="text-muted">California</td>
                            <td class="w-100 px-0">
                              <div class="progress progress-md mx-4">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td><h5 class="font-weight-bold mb-0">945</h5></td>
                          </tr>
                          <tr>
                            <td class="text-muted">Maryland</td>
                            <td class="w-100 px-0">
                              <div class="progress progress-md mx-4">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td><h5 class="font-weight-bold mb-0">553</h5></td>
                          </tr>
                          <tr>
                            <td class="text-muted">Alaska</td>
                            <td class="w-100 px-0">
                              <div class="progress progress-md mx-4">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td><h5 class="font-weight-bold mb-0">912</h5></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ?? 2021 <a href="#" target="_blank">Programmer</a>. All rights reserved.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
      </div>
    </footer>
    <!-- partial -->
</div>
@endsection