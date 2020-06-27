@extends('admin.include.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Welcome [School Name ]</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Admin</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-secondary">
            <div class="inner">
              <h3>53</h3>

              <p>Teachers</p>
            </div>
            <div class="icon">
              <i class="ion ion-person" style="color:#fff"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-secondary">
            <div class="inner">
              <h3>150</h3>

              <p>Students</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-stalker" style="color:#fff"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-secondary">
            <div class="inner">
              <h3>44</h3>

              <p>Resolve Help Ticket</p>
            </div>
            <div class="icon">
              <i class="fa fa-check" style="color:#00a65a"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-secondary">
            <div class="inner">
              <h3>65</h3>

              <p>Pending Help Ticket</p>
            </div>
            <div class="icon">
              <i class="fa fa-exclamation-triangle" style="color:#dd4b39"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-6">

          <!-- DONUT CHART -->
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Attendance</h3>
            </div>
            <div class="card-body">
              <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">

          <div class="card card-secondary">
            <div class="card-header border-transparent">
              <h3 class="card-title">Holiday List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0" style="height: 235px;overflow: auto;">
              <div class="table-responsive mt-1 p-2">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Holiday Name</th>
                      <th>Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td>Rakshabandhan</td>
                      <td>1 Jan 2020</td>
                      <td>
                        <div style="margin:-7px;">
                          <button type="button" class="btn"><i class="fas fa-edit"></i></button>
                          <button type="button" class="btn"><i class="fas fa-trash"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Rakshabandhan</td>
                      <td>1 Jan 2020</td>
                      <td>
                        <div style="margin:-7px;">
                          <button type="button" class="btn"><i class="fas fa-edit"></i></button>
                          <button type="button" class="btn"><i class="fas fa-trash"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Rakshabandhan</td>
                      <td>1 Jan 2020</td>
                      <td>
                        <div style="margin:-7px;">
                          <button type="button" class="btn"><i class="fas fa-edit"></i></button>
                          <button type="button" class="btn"><i class="fas fa-trash"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Diwali</td>
                      <td>1 Jan 2020</td>
                      <td>
                        <div style="margin:-7px;">
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
              <a href="javascript:void(0)" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#modal-add-holiday" style="width:100%;">Add Holiday</a>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>

        <div class="modal fade" id="modal-add-holiday">
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Add Holiday</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!-- form start -->
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
                        <div class="icheck-success d-inline">
                          <input type="checkbox" checked="" id="checkboxSuccess1">
                          <label for="checkboxSuccess1">
                          </label>
                        </div>
                        <div class="icheck-success d-inline">
                          <input type="checkbox" id="checkboxSuccess2">
                          <label for="checkboxSuccess2">
                          </label>
                        </div>
                        <div class="icheck-success d-inline">
                          <input type="checkbox" disabled="" id="checkboxSuccess3">
                          <label for="checkboxSuccess3">
                            Success checkbox
                          </lab
                    </div>iv>


              </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>

                </form>
             </div>

            </div>
          </div>
        </div>
      </div>->
      </tent --pper -->
      <script>
        $(function() {
          //-------------
          //- DONUT CHART -
          //-------------
          // Get context with jQuery - using jQuery's .get() method.
          var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
          var donutData = {
            labels: [
              'Present',
              'Absent',
            ],
            datasets: [{
              data: [700, 500],
              backgroundColor: ['#00a65a', '#dd4b39'],
            }]
          }
          var donutOptions = {
            maintainAspectRatio: false,
            responsive: true,
          }
          //Create pie or douhnut chart
          // You can switch between pie and douhnut using the method below.
          var donutChart = new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
          })


        })
        /*
         * Custom Label formatter
         * ----------------------
         */
        function labelFormatter(label, series) {
          return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">' +
            label +
            '<br>' +
            Math.round(series.percent) + '%</div>'
        }
      </script>
      @endsection