@extends('student.include.app')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Welcome [Student Name]</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('student.dashboard')}}">Student</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <section class="content">
    <div class="container-fluid">

      <div class="row  ">
        <div class="col-md-6">

          <!-- small box -->
          <div class="small-box bg-info ">
            <div class="inner">
              <h4>[Subject]</h4>

              <p>By [Teacher Name]</p>
              <p>9:00Am To 10:00 Am</p>
            </div>
            <div class="icon">
              <i class="fas fa-book-reader"></i>
            </div>
            <a href="#" class="small-box-footer">Start Lecture <i class="fas fa-arrow-circle-right ml-2"></i></a>
          </div>

          <div class="card card-info">
            <div class="card-header border-transparent">
              <h3 class="card-title">My Today's Lectures</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>

              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table m-0">
                  <thead>
                    <tr>
                      <th>Subject</th>
                      <th>Teacher</th>
                      <th>Time</th>
                      <th>Join</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>[Subject Name]</td>
                      <td>[Teacher Name]</td>
                      <td><span class="badge badge-info">9:00 AM TO 10:00 AM</span></td>
                      <td>
                        <a href="#">
                          <span><i class="fas fa-lg icon-3x fa-arrow-circle-right text-info ml-2"></i></span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>[Subject Name]</td>
                      <td>[Teacher Name]</td>
                      <td><span class="badge badge-info">9:00 AM TO 10:00 AM</span></td>
                      <td>
                        <a href="#">
                          <span><i class="fas fa-lg icon-3x fa-arrow-circle-right text-info ml-2"></i></span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>[Subject Name]</td>
                      <td>[Teacher Name]</td>
                      <td><span class="badge badge-info">9:00 AM TO 10:00 AM</span></td>
                      <td>
                        <a href="#">
                          <span><i class="fas fa-lg icon-3x fa-arrow-circle-right text-info ml-2"></i></span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>[Subject Name]</td>
                      <td>[Teacher Name]</td>
                      <td><span class="badge badge-info">9:00 AM TO 10:00 AM</span></td>
                      <td>
                        <a href="#">
                          <span><i class="fas fa-lg icon-3x fa-arrow-circle-right text-info ml-2"></i></span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>[Subject Name]</td>
                      <td>[Teacher Name]</td>
                      <td><span class="badge badge-info">9:00 AM TO 10:00 AM</span></td>
                      <td>
                        <a href="#">
                          <span><i class="fas fa-lg icon-3x fa-arrow-circle-right text-info ml-2"></i></span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>[Subject Name]</td>
                      <td>[Teacher Name]</td>
                      <td><span class="badge badge-info">9:00 AM TO 10:00 AM</span></td>
                      <td>
                        <a href="#">
                          <span><i class="fas fa-lg icon-3x fa-arrow-circle-right text-info ml-2"></i></span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>[Subject Name]</td>
                      <td>[Teacher Name]</td>
                      <td><span class="badge badge-info">9:00 AM TO 10:00 AM</span></td>
                      <td>
                        <a href="#">
                          <span><i class="fas fa-lg icon-3x fa-arrow-circle-right text-info ml-2"></i></span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>[Subject Name]</td>
                      <td>[Teacher Name]</td>
                      <td><span class="badge badge-info">9:00 AM TO 10:00 AM</span></td>
                      <td>
                        <a href="#">
                          <span><i class="fas fa-lg icon-3x fa-arrow-circle-right text-info ml-2"></i></span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>[Subject Name]</td>
                      <td>[Teacher Name]</td>
                      <td><span class="badge badge-info">9:00 AM TO 10:00 AM</span></td>
                      <td>
                        <a href="#">
                          <span><i class="fas fa-lg icon-3x fa-arrow-circle-right text-info ml-2"></i></span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>[Subject Name]</td>
                      <td>[Teacher Name]</td>
                      <td><span class="badge badge-info">9:00 AM TO 10:00 AM</span></td>
                      <td>
                        <a href="#">
                          <span><i class="fas fa-lg icon-3x fa-arrow-circle-right text-info ml-2"></i></span>
                        </a>
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">


            <div class="col-lg-6 col-6">
              <div class="small-box bg-info ">
                <div class="inner">
                  <h4>50</h4>

                  <p> My Student Count</p>

                </div>
                <div class="icon">
                  <i class="fas fa-user-graduate"></i>
                </div>

              </div>
            </div>
            <div class="col-lg-6 col-6 ">
              <div class="small-box bg-info ">
                <div class="inner">
                  <h4>5</h4>

                  <p> My Subject Count</p>

                </div>
                <div class="icon">
                  <i class="fas fa-book"></i>
                </div>

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-6 ">
              <div class="small-box bg-info ">
                <div class="inner">
                  <h4>5</h4>

                  <p> My Lecture Count</p>

                </div>
                <div class="icon">
                  <i class="fas fa-book-reader"></i>
                </div>

              </div>
            </div>
            <div class="col-lg-6 col-6">
              <div class="small-box bg-info ">
                <div class="inner">
                  <h4>5</h4>

                  <p> My Lecture Count</p>

                </div>
                <div class="icon">
                  <i class="fas fa-book-reader"></i>
                </div>

              </div>
            </div>
          </div>
          <div class="card card-info">
            <div class="card-header border-transparent">
              <h3 class="card-title">Student's Holiday List</h3>

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
                      <th>Occasion</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td>Rakshabandhan</td>
                      <td>1 Jan 2020</td>
                    </tr>
                    <tr>
                      <td>Rakshabandhan</td>
                      <td>1 Jan 2020</td>
                    </tr>
                    <tr>
                      <td>Rakshabandhan</td>
                      <td>1 Jan 2020</td>
                    </tr>
                    <tr>
                      <td>Diwali</td>
                      <td>1 Jan 2020</td>
                    </tr>
                    <tr>
                      <td>Rakshabandhan</td>
                      <td>1 Jan 2020</td>
                    </tr>
                    <tr>
                      <td>Rakshabandhan</td>
                      <td>1 Jan 2020</td>
                    </tr>
                    <tr>
                      <td>Rakshabandhan</td>
                      <td>1 Jan 2020</td>
                    </tr>
                    <tr>
                      <td>Diwali</td>
                      <td>1 Jan 2020</td>
                    </tr>
                    <tr>
                      <td>Rakshabandhan</td>
                      <td>1 Jan 2020</td>
                    </tr>
                    <tr>
                      <td>Rakshabandhan</td>
                      <td>1 Jan 2020</td>
                    </tr>
                    <tr>
                      <td>Rakshabandhan</td>
                      <td>1 Jan 2020</td>
                    </tr>
                    <tr>
                      <td>Diwali</td>
                      <td>1 Jan 2020</td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.card-body -->

            <!-- /.card-footer -->
          </div>

        </div>

      </div>

    </div>
  </section>
</div>



@endsection