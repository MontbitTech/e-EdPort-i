@extends('admin.include.app')
@section('content')
<style>
  div#example1_filter.dataTables_filter input {
    width: 70%;
  }
</style>
<!-- Content Wrapper -->
<div class="content-wrapper">

  <!-- Dashboard-WelcomeContent -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Welcome [School Name ]</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Admin</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- /.Dashboard-WelcomeContent -->

  <!-- Section Content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Row1 -->
      <div class="row">

        <!-- Dashboard-OnlineTeacher -->
        <div class="col-lg-3 col-6">
          <div class="small-box bg-secondary">
            <div class="inner">
              <h3>53/60</h3>

              <p>Online Teachers</p>
            </div>
            <div class="icon">
              <i class="ion ion-person" style="color:#fff"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
          <!-- ./small box -->
        </div>
        <!-- ./Dashboard-OnlineTeacher -->

        <!-- Dashboard-OnlineStudent-->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-secondary">
            <div class="inner">
              <h3>99/300</h3>

              <p>Online Students</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-stalker" style="color:#fff"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./Dashboard-OnlineStudent -->

        <!-- Dashboard-PendingFees -->
        <div class="col-lg-3 col-6">
          <div class="small-box bg-secondary">
            <div class="inner">
              <h3>44/300</h3>

              <p>Pending Student Fees</p>
            </div>
            <div class="icon">
              <i class="fa fa-rupee-sign" style="color:#fff"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./Dashboard-PendingFees -->

        <!-- Dashboard-PendingHelp -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-secondary">
            <div class="inner">
              <h3>65/100</h3>

              <p>Pending Help Ticket</p>
            </div>
            <div class="icon">
              <i class="fa fa-exclamation-triangle" style="color:#dd4b39"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./Dashboard-PendingHelp -->

      </div>
      <!--/Row1-->

      <!--Row2-->
      <div class="row">

        <!-- Dashboard-CPUTraffic -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">CPU Traffic</span>
              <span class="info-box-number">
                10
                <small>%</small>
              </span>
            </div>
          </div>
        </div>
        <!-- ./Dashboard-CPUTraffic -->

        <!-- Dashboard-MemoryUsage -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-sd-card"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Memory Usage</span>
              <span class="info-box-number">
                10
                <small>%</small>
              </span>
            </div>
          </div>
        </div>
        <!-- /.Dashboard-MemoryUsage -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <!-- Dashboard-DiskSpaceUsage -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-disc-drive"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">DiskSpace Usage</span>
              <span class="info-box-number">
                10
                <small>%</small>
              </span>
            </div>
          </div>
        </div>
        <!-- /.Dashboard-DiskSpaceUsage-->

        <!-- Dashboard-ApacheMysql -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Apache & Mysql</span>
              <span class="info-box-number">Running</span>
            </div>
          </div>
        </div>
        <!-- /.Dashboard-ApacheMysql -->

      </div>
      <!-- /.Row2 -->
      <!-- Row3 -->
      <div class="row">

        <!-- Dashboard-LineChart -->
        <div class="col-md-6">

          <!-- Dashboard-TeacherAttendance -->
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title"><i class="fas fa-chart-line mr-1"></i>Teacher's Attendance</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content p-0">
                <!-- Morris chart - Sales -->
                <div class="chart tab-pane active" id="revenue-chart-teacher" style="position: relative; height: 300px;">
                  <canvas id="revenue-chart-canvas-teacher" height="300" style="height: 300px;"></canvas>
                </div>
              </div>
            </div><!-- /.card-body -->
          </div>
          <!-- ./Dashboard-TeacherAttendance -->

          <!-- Dashboard-StudentAttendance -->
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title"><i class="fas fa-chart-line mr-1"></i>Student's Attendance</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content p-0">
                <!-- Morris chart - Sales -->
                <div class="chart tab-pane active" id="revenue-chart-student" style="position: relative; height: 300px;">
                  <canvas id="revenue-chart-canvas-student" height="300" style="height: 300px;"></canvas>
                </div>
              </div>
            </div><!-- /.card-body -->
          </div>
          <!-- ./Dashboard-StudentAttendance -->

        </div>
        <!-- ./Dashboard-LineChart -->

        <!-- Dashboard-Table -->
        <div class="col-md-6">

          <!-- Dashboard-NoticeBoard -->
          <div class="card card-secondary">
            <div class="card-header border-transparent">
              <h3 class="card-title">Notice Board</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="table-responsive mt-1 p-2">
                <table id="example2" class="table table-sm">
                  <thead>
                    <tr>
                      <th>Notices</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td>
                        <div class="post">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="{{asset('assets/img/admin.png')}}" alt="user image">
                            <span class="username">
                              <a href="#">Jonathan Burke Jr.</a>
                              <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                            </span>
                            <span class="description">7th November 2020 - 8:30 AM</span>
                          </div>
                          <!-- /.user-block -->
                          <p style="font-size: smaller;">
                            Lorem ipsum represents a long-held tradition for designers,
                            typographers and the like.
                          </p>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="post">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="{{asset('assets/img/admin.png')}}" alt="user image">
                            <span class="username">
                              <a href="#">Sanju Burke Jr.</a>
                              <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                            </span>
                            <span class="description">6th November 2020 - 9:30 PM</span>
                          </div>
                          <!-- /.user-block -->
                          <p style="font-size: smaller;">
                            ABCD ipsum represents a long-held tradition for designers,
                            typographers and the like.
                          </p>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="post">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="{{asset('assets/img/admin.png')}}" alt="user image">
                            <span class="username">
                              <a href="#">Raju Burke Jr.</a>
                              <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                            </span>
                            <span class="description">5th November 2020 - 7:30 PM</span>
                          </div>
                          <!-- /.user-block -->
                          <p style="font-size: smaller;">
                            Lorem ipsum represents a long-held tradition for designers,
                            typographers and the like.
                          </p>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="post">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="{{asset('assets/img/admin.png')}}" alt="user image">
                            <span class="username">
                              <a href="#">Raju Burke Jr.</a>
                              <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                            </span>
                            <span class="description">5th November 2020 - 7:30 PM</span>
                          </div>
                          <!-- /.user-block -->
                          <p style="font-size: smaller;">
                            Lorem ipsum represents a long-held tradition for designers,
                            typographers and the like.
                          </p>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="post">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="{{asset('assets/img/admin.png')}}" alt="user image">
                            <span class="username">
                              <a href="#">Raju Burke Jr.</a>
                              <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                            </span>
                            <span class="description">5th November 2020 - 7:30 PM</span>
                          </div>
                          <!-- /.user-block -->
                          <p style="font-size: smaller;">
                            Lorem ipsum represents a long-held tradition for designers,
                            typographers and the like.
                          </p>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="post">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="{{asset('assets/img/admin.png')}}" alt="user image">
                            <span class="username">
                              <a href="#">Raju Burke Jr.</a>
                              <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                            </span>
                            <span class="description">5th November 2020 - 7:30 PM</span>
                          </div>
                          <!-- /.user-block -->
                          <p style="font-size: smaller;">
                            Lorem ipsum represents a long-held tradition for designers,
                            typographers and the like.
                          </p>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="post">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="{{asset('assets/img/admin.png')}}" alt="user image">
                            <span class="username">
                              <a href="#">Sam Burke Jr.</a>
                              <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                            </span>
                            <span class="description">5th November 2020 - 6:30 PM</span>
                          </div>
                          <!-- /.user-block -->
                          <p style="font-size: smaller;">
                            Lorem ipsum represents a long-held tradition for designers,
                            typographers and the like.
                          </p>
                        </div>
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#modal-add-edit-notice" style="width:100%;"><i class="fas fa-plus-circle mr-3"></i>Add Notice</a>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- ./Dashboard-NoticeBoard -->

          <!-- Dashboard-HolidayList -->
          <div class="card card-secondary collapsed-card">
            <div class="card-header border-transparent">
              <h3 class="card-title">Holiday List</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-plus"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="table-responsive mt-1 p-2">
                <table id="example1" class="table table-bordered table-striped table-sm">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Holiday Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td>1 Jan 2020</td>
                      <td>Rakshabandhan</td>
                      <td>
                        <div style="margin:-0.4375em;">
                          <button type="button" class="btn"><i class="fas fa-edit"></i></button>
                          <button type="button" class="btn"><i class="fas fa-trash"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Diwali</td>
                      <td>1 Jan 2020</td>
                      <td>
                        <div style="margin:-0.4375em;">
                          <button type="button" class="btn"><i class="fas fa-edit"></i></button>
                          <button type="button" class="btn"><i class="fas fa-trash"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Holi</td>
                      <td>1 Jan 2020</td>
                      <td>
                        <div style="margin:-0.4375em;">
                          <button type="button" class="btn"><i class="fas fa-edit"></i></button>
                          <button type="button" class="btn"><i class="fas fa-trash"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Rakshabandhan</td>
                      <td>1 Jan 2020</td>
                      <td>
                        <div style="margin:-0.4375em;">
                          <button type="button" class="btn"><i class="fas fa-edit"></i></button>
                          <button type="button" class="btn"><i class="fas fa-trash"></i></button>
                        </div>
                      </td>
                    </tr>


                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#modal-add-edit-holiday" style="width:100%;"><i class="fas fa-plus-circle mr-3"></i>Add Holiday</a>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- ./Dashboard-HolidayList -->

        </div>
        <!-- ./Dashboard-table -->
      </div>
      <!-- ./Row3 -->

      <!--All Modal Open -->

      <!-- Dashboard-HolidayModal -->
      <div class="modal fade" id="modal-add-edit-holiday">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Holiday</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form" enctype="multipart/form-data" method="post" action="">
                <div class="card-body">

                  <div class="form-group">
                    <label for="holiday_name">Occassion</label>
                    <input type="text" id="holiday_name" name="holiday_name" class="form-control" placeholder="Enter Occassion" />
                  </div>
                  <div class="form-group">
                    <label for="holiday_from">From</label>
                    <input type="date" id="holiday_from" name="holiday_from" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label for="holiday_to">To</label>
                    <input type="date" id="holiday_to" name="holiday_to" class="form-control" />
                  </div>
                  <div class="form-group clearfix">
                    <label for="holiday_from">For</label>
                    <div class="row">
                      <div class="col-md-6 icheck-success d-inline">
                        <input type="checkbox" id="checkboxSuccess1" checked>
                        <label for="checkboxSuccess1">
                          Admin
                        </label>
                      </div>
                      <div class="col-md-6 icheck-success d-inline">
                        <input type="checkbox" id="checkboxSuccess2" checked>
                        <label for="checkboxSuccess2">
                          Principal
                        </label>
                      </div>
                      <div class="col-md-6 icheck-success d-inline">
                        <input type="checkbox" id="checkboxSuccess3" checked>
                        <label for="checkboxSuccess3">
                          Teacher
                        </label>
                      </div>
                      <div class="col-md-6 icheck-success d-inline">
                        <input type="checkbox" id="checkboxSuccess4" checked>
                        <label for="checkboxSuccess4">
                          Student
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>

              </form>
            </div>

          </div>
        </div>
      </div>
      <!-- ./Dashboard-HolidayModal -->

      <!-- Dashboard-NoticeModal -->
      <div class="modal fade" id="modal-add-edit-notice">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Notice</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form" enctype="multipart/form-data" method="post" action="">
                <div class="card-body">

                  <div class="form-group">
                    <label for="holiday_name">Notice</label>
                    <textarea id="notice" name="notice" class="form-control" rows="5" placeholder="Enter Notice..."></textarea>
                  </div>
                  <div class="form-group clearfix">
                    <label for="holiday_from">For</label>
                    <div class="row">
                      <div class="col-md-6 icheck-success d-inline">
                        <input type="checkbox" id="checkboxSuccess8" checked>
                        <label for="checkboxSuccess8">
                          Admin
                        </label>
                      </div>
                      <div class="col-md-6 icheck-success d-inline">
                        <input type="checkbox" id="checkboxSuccess5" checked>
                        <label for="checkboxSuccess5">
                          Principal
                        </label>
                      </div>
                      <div class="col-md-6 icheck-success d-inline">
                        <input type="checkbox" id="checkboxSuccess6" checked>
                        <label for="checkboxSuccess6">
                          Teacher
                        </label>
                      </div>
                      <div class="col-md-6 icheck-success d-inline">
                        <input type="checkbox" id="checkboxSuccess7" checked>
                        <label for="checkboxSuccess7">
                          Student
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>

              </form>
            </div>

          </div>
        </div>
      </div>
      <!-- ./Dashboard-NoticeModal-->

      <!-- All Modal Close-->

    </div>
  </section>
  <!-- /.content -->
</div>

<!-- /.content-wrapper -->
<script>
  $(function() {
    /* Chart.js Charts */

    // Dasboard-TeacherAttendanceChart
    var salesChartCanvasT = document.getElementById('revenue-chart-canvas-teacher').getContext('2d');

    var salesChartDataT = {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [{
          label: 'Teacher Present',
          backgroundColor: 'rgba(60,141,188,0.9)',
          borderColor: 'rgba(60,141,188,0.8)',
          pointRadius: 3,
          pointHitRadius: 10,
          pointColor: '#3b8bba',
          pointStrokeColor: 'rgba(60,141,188,1)',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data: [28, 48, 40, 19, 36, 27, 40]
        },
        {
          label: 'Total Teacher',
          backgroundColor: 'rgba(210, 214, 222, 1)',
          borderColor: 'rgba(210, 214, 222, 1)',
          pointRadius: 3,
          pointHitRadius: 10,
          pointColor: 'rgba(210, 214, 222, 1)',
          pointStrokeColor: '#c1c7d1',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data: [65, 59, 80, 81, 56, 55, 90]
        },
      ]
    }

    var salesChartOptionsT = {
      maintainAspectRatio: false,
      responsive: true,
      legend: {
        display: true
      },
      scales: {
        xAxes: [{
          gridLines: {
            display: true,
          }
        }],
        yAxes: [{
          gridLines: {
            display: true,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    var salesChart = new Chart(salesChartCanvasT, {
      type: 'line',
      data: salesChartDataT,
      options: salesChartOptionsT
    })
    // Dasboard-TeacherAttendanceChartClose

    // Dashboard-StudentAttendanceChart
    var salesChartCanvasS = document.getElementById('revenue-chart-canvas-student').getContext('2d');

    var salesChartDataS = {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [{
          label: 'Student Present',
          backgroundColor: 'rgba(60,141,188,0.9)',
          borderColor: 'rgba(60,141,188,0.8)',
          pointRadius: 3,
          pointHitRadius: 10,
          pointColor: '#3b8bba',
          pointStrokeColor: 'rgba(60,141,188,1)',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data: [28, 48, 40, 19, 32, 27, 40]
        },
        {
          label: 'Total Student',
          backgroundColor: 'rgba(210, 214, 222, 1)',
          borderColor: 'rgba(210, 214, 222, 1)',
          pointRadius: 3,
          pointHitRadius: 10,
          pointColor: 'rgba(210, 214, 222, 1)',
          pointStrokeColor: '#c1c7d1',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data: [85, 99, 70, 81, 56, 65, 90]
        },
      ]
    }

    var salesChartOptionsS = {
      maintainAspectRatio: false,
      responsive: true,
      legend: {
        display: true
      },
      scales: {
        xAxes: [{
          gridLines: {
            display: true,
          }
        }],
        yAxes: [{
          gridLines: {
            display: true,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    var salesChart = new Chart(salesChartCanvasS, {
      type: 'line',
      data: salesChartDataS,
      options: salesChartOptionsS
    })
    // Dashboard-StudentAttendanceChartClose

  })
</script>
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
      "ordering": true,
    });
    $("#example2").DataTable({
      "responsive": true,
      "autoWidth": false,
      "ordering": true,
      "lengthMenu": [
        [3, 8, 15, 25, -1],
        [3, 8, 15, 25, "All"]
      ]
    });
  });
</script>
@endsection