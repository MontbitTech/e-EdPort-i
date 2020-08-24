@extends('principal.include.app')
@section('content')
<!-- Content Wrapper -->
<div class="content-wrapper">

  <!-- Timetable-HeaderContent -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Timetable</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.timetable')}}">Admin</a></li>
            <li class="breadcrumb-item active">Timetable</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- /.Timetable-HeaderContent -->

  <!-- Section Content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-md-12">
          <div class="card card-secondary">
            <div class="card-header border-transparent">
              <h3 class="card-title">TimeTable 2020-21</h3>
              <button type="submit" class="mr-1 btn btn-sm btn-default" style="float:right;"><i class="fas fa-file-export mr-3"></i>Export TimeTable</button>
                <button type="submit" class="mr-1 btn btn-sm btn-default" style="float:right;"><i class="fas fa-file-import mr-3"></i>Import TimeTable</button>
             
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
            <div class="form-group">
            <label for="student_dob">Class</label>
                          <select data-placeholder="Select a Class" class="form-control select1" id="select_student1" name="select_student1" style="width: 100%;">
                            <option value="">Select Class</option>
                            <option value="Vaibhav">X</option>
                            <option value="Anuj">XI</option>
                          </select>
                        </div>
</div>
<div class="col-md-6">
                        <div class="form-group">
                        <label for="student_dob">Section</label>
                          <select data-placeholder="Select a Section" class="form-control select1" id="select_student2" name="select_student2" style="width: 100%;">
                            <option value="">Select Section</option>
                            <option value="Vaibhav">A</option>
                            <option value="Anuj">B</option>
                          </select>
                        </div>
</div>
                        </div>
              <div class="table-responsive mt-1 p-2">
                <table id="example1" class="table table-bordered table-striped table-sm">
                  <thead>
                    <tr>
                      <th>Class 12 A</th>
                      <th>Time</th>
                      <th>Monday</th>
                      <th>Tuesday</th>
                      <th>Wednesday</th>
                      <th>Thursday</th>
                      <th>Friday</th>
                      <th>Saturday</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td>Period 1
                        <div><span class="badge m-1 bg-primary">Delete</span></div>
                      </td>
                      <td>1:00 - 1:30</td>
                      <td>Amit Sharma
                      <div><span class="badge m-1 bg-secondary">Math</span><span class="badge m-1 bg-primary">Edit</span></div>

                      </td>
                      <td>Baldev Sharma
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                      <td>Ram Singh
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                      <td>Rajni Kanth
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                      <td>Hello Singh
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                      <td>Dildar Sharma
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                    </tr>
                    <tr>
                      <td>Period 2</td>
                      <td>1:00 - 1:30</td>
                      <td>Amit Sharma
                      <div><span class="badge bg-secondary">Math</span></div>

                      </td>
                      <td>Baldev Sharma
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                      <td>Ram Singh
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                      <td>Rajni Kanth
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                      <td>Hello Singh
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                      <td>Dildar Sharma
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                    </tr>
                    <tr>
                      <td>Period 3</td>
                      <td>1:00 - 1:30</td>
                      <td>Amit Sharma
                      <div><span class="badge bg-secondary">Math</span></div>

                      </td>
                      <td>Baldev Sharma
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                      <td>Ram Singh
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                      <td>Rajni Kanth
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                      <td>Hello Singh
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                      <td>Dildar Sharma
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                    </tr>
                    <tr>
                      <td>Period 4</td>
                      <td>1:00 - 1:30</td>
                      <td>Amit Sharma
                      <div><span class="badge bg-secondary">Math</span></div>

                      </td>
                      <td>Baldev Sharma
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                      <td>Ram Singh
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                      <td>Rajni Kanth
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                      <td>Hello Singh
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                      <td>Dildar Sharma
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                    </tr>
                    <tr>
                      <td>Period 5</td>
                      <td>1:00 - 1:30</td>
                      <td>Amit Sharma
                      <div><span class="badge bg-secondary">Math</span></div>

                      </td>
                      <td>Baldev Sharma
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                      <td>Ram Singh
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                      <td>Rajni Kanth
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                      <td>Hello Singh
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                      <td>Dildar Sharma
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                    </tr>
                    <tr>
                      <td>Period 6</td>
                      <td>1:00 - 1:30</td>
                      <td>Amit Sharma
                      <div><span class="badge bg-secondary">Math</span></div>

                      </td>
                      <td>Baldev Sharma
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                      <td>Ram Singh
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                      <td>Rajni Kanth
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                      <td>Hello Singh
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                      <td>Dildar Sharma
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                    </tr>
                    <tr>
                      <td>Period 7</td>
                      <td>1:00 - 1:30</td>
                      <td>Amit Sharma
                      <div><span class="badge bg-secondary">Math</span></div>

                      </td>
                      <td>Baldev Sharma
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                      <td>Ram Singh
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                      <td>Rajni Kanth
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                      <td>Hello Singh
                      <div><span class="badge bg-secondary">Math</span></div>
                      </td>
                      <td>Dildar Sharma
                      <div><span class="badge bg-secondary">Math</span></div>
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
  </section>
  <!-- /.Section Content -->

  <!-- All Modal Open --->
  <!-- ./All Modal Close -->

</div>

<!-- /.content-wrapper -->


@endsection