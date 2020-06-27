@extends('admin.include.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

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
            <div class="card-body p-0" style="height: 232px;overflow: auto;">
              <div class="table-responsive">
                <table class="table m-0">
                  <thead>
                    <tr>
                      <th>Holiday Name</th>
                      <th>Date</th>
                      <th>Day</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Happy New Year</td>
                      <td>1 Jan 2020</td>
                      <td>Saturday</td>
                    </tr>
                    <tr>
                      <td>Happy New Year</td>
                      <td>1 Jan 2020</td>
                      <td>Saturday</td>
                    </tr>
                    <tr>
                      <td>Happy New Year</td>
                      <td>1 Jan 2020</td>
                      <td>Saturday</td>
                    </tr>
                    <tr>
                      <td>Happy New Year</td>
                      <td>1 Jan 2020</td>
                      <td>Saturday</td>
                    </tr>
                    <tr>
                      <td>Happy New Year</td>
                      <td>1 Jan 2020</td>
                      <td>Saturday</td>
                    </tr>
                    <tr>
                      <td>Happy New Year</td>
                      <td>1 Jan 2020</td>
                      <td>Saturday</td>
                    </tr>

                  </tbody>
                  <thead>
                    <tr>
                      <th>Holiday Name</th>
                      <th>Date</th>
                      <th>Day</th>
                    </tr>
                  </thead>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Add Holiday</a>
              <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">Edit/Delete</a>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
      </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
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