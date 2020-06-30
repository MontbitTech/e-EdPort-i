@extends('principal.include.app')
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
            <li class="breadcrumb-item"><a href="{{route('principal.dashboard')}}">Principle</a></li>
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
              <h3>53/60</h3>

              <p>Online Teachers</p>
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
              <h3>150/300</h3>

              <p>Online Students</p>
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
          <!-- TODO: Work on this @Saurabh -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-chart-pie mr-1"></i>
                Sales
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content p-0">
                <!-- Morris chart - Sales -->
                <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                  <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                </div>
              </div>
            </div><!-- /.card-body -->
          </div>
        </div>
        <div class="col-md-6">

          <div class="card card-secondary collapsed-card">
            <div class="card-header border-transparent">
              <h3 class="card-title">Holiday List</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="table-responsive mt-1 p-2">
                <table id="example1" class="table table-bordered table-striped table-sm">
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
              <a href="javascript:void(0)" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#modal-add-edit-holiday" style="width:100%;">Add Holiday</a>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>

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
                        <div class="col-md-4 icheck-success d-inline">
                          <input type="checkbox" id="checkboxSuccess1" checked>
                          <label for="checkboxSuccess1">
                            Principal
                          </label>
                        </div>
                        <div class="col-md-4 icheck-success d-inline">
                          <input type="checkbox" id="checkboxSuccess2" checked>
                          <label for="checkboxSuccess2">
                            Teacher
                          </label>
                        </div>
                        <div class="col-md-4 icheck-success d-inline">
                          <input type="checkbox" id="checkboxSuccess3" checked>
                          <label for="checkboxSuccess3">
                            Student
                          </label>
                        </div>
                      </div>
                    </div>
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
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>

<!-- /.content-wrapper -->
<script>
  $(function() {
    /* Chart.js Charts */
    // Sales chart
    var salesChartCanvas = document.getElementById('revenue-chart-canvas').getContext('2d');
    //$('#revenue-chart').get(0).getContext('2d');

    var salesChartData = {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [{
          label: 'Digital Goods',
          backgroundColor: 'rgba(60,141,188,0.9)',
          borderColor: 'rgba(60,141,188,0.8)',
          pointRadius: false,
          pointColor: '#3b8bba',
          pointStrokeColor: 'rgba(60,141,188,1)',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data: [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label: 'Electronics',
          backgroundColor: 'rgba(210, 214, 222, 1)',
          borderColor: 'rgba(210, 214, 222, 1)',
          pointRadius: false,
          pointColor: 'rgba(210, 214, 222, 1)',
          pointStrokeColor: '#c1c7d1',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data: [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }

    var salesChartOptions = {
      maintainAspectRatio: false,
      responsive: true,
      legend: {
        display: false
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
    var salesChart = new Chart(salesChartCanvas, {
      type: 'line',
      data: salesChartData,
      options: salesChartOptions
    })
  })
</script>
@endsection