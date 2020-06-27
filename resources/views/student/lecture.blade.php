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
        <div class="col-12">

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Division</th>
                      <th>Subject</th>
                      <th>Time</th>
                      <th>View Lecture</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>10 A</td>
                      <td>English</td>
                      <td><span class="badge badge-info">9:00 AM TO 10:00 AM</span></td>
                      <td>
                        <div class="btn-group btn-group-xs">

                          <div style="margin:-7px;">
                            <button type="button" class="btn"><i class="fas fa-lg icon-3x fa-arrow-circle-right text-info ml-2"></i></button>
                          </div>


                          <!-- <a class="btn btn-sm btn-danger" href="" onClick="return confirm('Are you sure you want to delete this?');" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a> -->

                        </div>
                      </td>
                    </tr>

                  </tbody>
                </table>
            
            </div>

              <!-- /.card-body -->
            </div>
            
           </div>
          </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.col -->
      <!-- /.row -->
    </div>

    
    <!-- /.container-fluid -->
    <!-- /.modal -->
  </section>
  <!-- /.content -->

  
</div>

@endsection