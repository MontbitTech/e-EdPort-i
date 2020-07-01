@extends('student.include.app')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Lecture</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Student</a></li>
            <li class="breadcrumb-item active">Lecture</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="card card-info collapsed-card">
            <div class="card-header border-transparent">
              <h3 class="card-title">My Past Lectures</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-plus"></i>
                </button>

              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0" style="max-height:25rem;overflow:scroll;">
              <div class="table-responsive">
                <table class="table m-0">
                  <thead>
                    <tr>
                      <th class="text-center">Subject</th>
                      <th class="text-left">Teacher</th>
                      <th class="text-center">Time</th>
                      <th class="text-right">Notes</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">English</td>
                      <td class="text-left"> Teacher Name</td>
                      <td class="text-center">
                        <span class="badge badge-info">
                          9:00 AM
                          </br> 10:00 AM
                        </span>
                      </td>
                      <td class="text-right">
                        <a href="#">
                          <span>
                            <i class="fas fa-sticky-note text-info fa-lg icon-3x "></i>

                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">English</td>
                      <td class="text-left"> Teacher Name</td>
                      <td class="text-center">
                        <span class="badge badge-info">
                          9:00 AM
                          </br> 10:00 AM
                        </span>
                      </td>
                      <td class="text-right">
                        <a href="#">
                          <span>
                            <i class="fas fa-sticky-note text-info fa-lg icon-3x ml-2"></i>

                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">English</td>
                      <td class="text-left"> Teacher Name</td>
                      <td class="text-center">
                        <span class="badge badge-info">
                          9:00 AM
                          </br> 10:00 AM
                        </span>
                      </td>
                      <td class="text-right">
                        <a href="#">
                          <span>
                            <i class="fas fa-sticky-note text-info fa-lg icon-3x ml-2"></i>

                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">English</td>
                      <td class="text-left"> Teacher Name</td>
                      <td class="text-center">
                        <span class="badge badge-info">
                          9:00 AM
                          </br> 10:00 AM
                        </span>
                      </td>
                      <td class="text-right">
                        <a href="#">
                          <span>
                            <i class="fas fa-sticky-note text-info fa-lg icon-3x ml-2"></i>

                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">English</td>
                      <td class="text-left"> Teacher Name</td>
                      <td class="text-center">
                        <span class="badge badge-info">
                          9:00 AM
                          </br> 10:00 AM
                        </span>
                      </td>
                      <td class="text-right">
                        <a href="#">
                          <span>
                            <i class="fas fa-sticky-note text-info fa-lg icon-3x ml-2"></i>

                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">English</td>
                      <td class="text-left"> Teacher Name</td>
                      <td class="text-center">
                        <span class="badge badge-info">
                          9:00 AM
                          </br> 10:00 AM
                        </span>
                      </td>
                      <td class="text-right">
                        <a href="#">
                          <span>
                            <i class="fas fa-sticky-note text-info fa-lg icon-3x ml-2"></i>

                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">English</td>
                      <td class="text-left"> Teacher Name</td>
                      <td class="text-center">
                        <span class="badge badge-info">
                          9:00 AM
                          </br> 10:00 AM
                        </span>
                      </td>
                      <td class="text-right">
                        <a href="#">
                          <span>
                            <i class="fas fa-sticky-note text-info fa-lg icon-3x ml-2"></i>

                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">English</td>
                      <td class="text-left"> Teacher Name</td>
                      <td class="text-center">
                        <span class="badge badge-info">
                          9:00 AM
                          </br> 10:00 AM
                        </span>
                      </td>
                      <td class="text-right">
                        <a href="#">
                          <span>
                            <i class="fas fa-sticky-note text-info fa-lg icon-3x"></i>

                          </span>
                        </a>
                      </td>
                    </tr>



                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-info collapsed-card">
            <div class="card-header border-transparent">
              <h3 class="card-title">My Today's Lectures</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-plus"></i>
                </button>

              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0 " style="max-height:25rem;overflow:scroll;">
              <div class=" table-responsive">
                <table class="table m-0">
                  <thead>
                    <tr>
                      <th class="text-center">Subject</th>
                      <th class="text-left">Teacher</th>
                      <th class="text-center">Time</th>
                      <th class="text-right">Join</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">English</td>
                      <td class="text-left"> Teacher Name</td>
                      <td class="text-center"><span class="badge badge-info"> 9:00 AM
                          </br> 10:00 AM</span></td>
                      <td class="text-right">
                        <a href="#">
                          <span>
                            <i class="fas fa-lg icon-3x fa-arrow-circle-right text-info"></i></span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">English</td>
                      <td class="text-left"> Teacher Name</td>
                      <td class="text-center"><span class="badge badge-info"> 9:00 AM
                          </br> 10:00 AM</span></td>
                      <td class="text-right">
                        <a href="#">
                          <span><i class="fas fa-lg icon-3x fa-arrow-circle-right text-info ml-2"></i></span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">English</td>
                      <td class="text-left"> Teacher Name</td>
                      <td class="text-center"><span class="badge badge-info"> 9:00 AM
                          </br> 10:00 AM</span></td>
                      <td class="text-right">
                        <a href="#">
                          <span><i class="fas fa-lg icon-3x fa-arrow-circle-right text-info ml-2"></i></span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">English</td>
                      <td class="text-left"> Teacher Name</td>
                      <td class="text-center"><span class="badge badge-info"> 9:00 AM
                          </br> 10:00 AM</span></td>
                      <td class="text-right">
                        <a href="#">
                          <span><i class="fas fa-lg icon-3x fa-arrow-circle-right text-info ml-2"></i></span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">English</td>
                      <td class="text-left"> Teacher Name</td>
                      <td class="text-center"><span class="badge badge-info"> 9:00 AM
                          </br> 10:00 AM</span></td>
                      <td class="text-right">
                        <a href="#">
                          <span><i class="fas fa-lg icon-3x fa-arrow-circle-right text-info ml-2"></i></span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">English</td>
                      <td class="text-left"> Teacher Name</td>
                      <td class="text-center"><span class="badge badge-info"> 9:00 AM
                          </br> 10:00 AM</span></td>
                      <td class="text-right">
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
        <div class="col-md-4">
          <div class="card card-info collapsed-card ">
            <div class="card-header border-transparent">
              <h3 class="card-title">My Future Lectures</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-plus"></i>
                </button>

              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0" style="max-height:25rem;overflow:scroll;">
              <div class=" table-responsive">
                <table class="table m-0">
                  <thead>
                    <tr>
                      <th class="text-center">Subject</th>
                      <th class="text-left">Teacher</th>
                      <th class="text-right">Time</th>

                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td class="text-center">English</td>
                      <td class="text-left"> Teacher Name</td>
                      <td class="text-right">
                        <span class="badge badge-info"> 9:00 AM
                          </br> 10:00 AM
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">English</td>
                      <td class="text-left"> Teacher Name</td>
                      <td class="text-right">
                        <span class="badge badge-info"> 9:00 AM
                          </br> 10:00 AM
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">English</td>
                      <td class="text-left"> Teacher Name</td>
                      <td class="text-right">
                        <span class="badge badge-info"> 9:00 AM
                          </br> 10:00 AM
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">English</td>
                      <td class="text-left"> Teacher Name</td>
                      <td class="text-right">
                        <span class="badge badge-info"> 9:00 AM
                          </br> 10:00 AM
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">English</td>
                      <td class="text-left"> Teacher Name</td>
                      <td class="text-right">
                        <span class="badge badge-info"> 9:00 AM
                          </br> 10:00 AM
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">English</td>
                      <td class="text-left"> Teacher Name</td>
                      <td class="text-right">
                        <span class="badge badge-info"> 9:00 AM
                          </br> 10:00 AM
                        </span>
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- /.container-fluid -->
    <!-- /.modal -->
  </section>
  <!-- /.content -->


</div>

@endsection