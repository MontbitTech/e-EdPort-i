@extends('admin.include.app')
@section('content')
<style>
  .box {

    display: none;
  }
</style>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<!-- Content Wrapper -->
<div class="content-wrapper">

  <!-- Student-HeaderContent -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Student</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.student')}}">Admin</a></li>
            <li class="breadcrumb-item active">Student</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- /.Student-HeaderContent -->

  <!-- Section Content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- Student-Table -->
        <div class="col-md-8">
          <div class="card card-secondary">
            <div class="card-header border-transparent">
              <h3 class="card-title">Add Student</h3>
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
                      <th>Student Name</th>
                      <th>Student Email</th>
                      <th>Phone No.</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td>Vaibhav Sharma</td>
                      <td>vaibhav@gmail.com</td>
                      <td>+91 7737737377</td>
                      <td>
                        <div style="margin:-0.4375em;">
                          <button type="button" class="btn"><i class="fas fa-edit"></i></button>
                          <button type="button" class="btn"><i class="fas fa-trash"></i></button>
                          <button type="button" class="btn" data-toggle="modal" data-target="#modal-view-student"><i class="fas fa-eye"></i></button>
                          <input type="checkbox" data-toggle="toggle" name="my-checkbox" checked data-on="<i class='fas fa-check'></i>" data-off="<i class='fas fa-times'></i>" data-onstyle="success" data-offstyle="danger" data-size="mini">
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Anuj Kumar</td>
                      <td>anuj@gmail.com</td>
                      <td>+91 7737737377</td>
                      <td>
                        <div style="margin:-0.4375em;">
                          <button type="button" class="btn"><i class="fas fa-edit"></i></button>
                          <button type="button" class="btn"><i class="fas fa-trash"></i></button>
                          <button type="button" class="btn" data-toggle="modal" data-target="#modal-view-student"><i class="fas fa-eye"></i></button>
                          <input type="checkbox" data-toggle="toggle" name="my-checkbox" checked data-on="<i class='fas fa-check'></i>" data-off="<i class='fas fa-times'></i>" data-onstyle="success" data-offstyle="danger" data-size="mini">
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
              <div class="row">
                <div class="col-md-6">
                  <a href="javascript:void(0)" class="btn btn-sm btn-secondary w-100" data-toggle="modal" data-target="#modal-add-edit-student"><i class="fas fa-plus-circle mr-3"></i>Add Student</a>
                </div>
                <div class="col-md-6">
                  <a href="javascript:void(0)" class="btn btn-sm btn-secondary w-100" data-toggle="modal" data-target="#modal-import-student"><i class="fas fa-file-import mr-3"></i>Import CSV</a>
                </div>
              </div>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- Student-PendingStudent -->
          <div class="card card-secondary">
            <div class="card-header border-transparent">
              <h3 class="card-title">Approval Pending Student</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="table-responsive mt-1 p-2">
                <table id="example2" class="table table-bordered table-striped table-sm">
                  <thead>
                    <tr>
                      <th>Student Name</th>
                      <th>Student Email</th>
                      <th> Phone No.</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td>Amit Sharma</td>
                      <td>amit@gmail.com</td>
                      <td>+91 7737737377</td>
                      <td>
                        <div style="margin:-0.4375em;">
                          <button type="button" class="btn" data-toggle="modal" data-target="#modal-view-pending-student"><i class="fas fa-eye"></i></button>
                          <button type="button" class="btn"><i class="fas fa-check"></i></button>
                          <button type="button" class="btn"><i class="fas fa-times"></i></button>

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Ram Kumar</td>
                      <td>ram@gmail.com</td>
                      <td>+91 7737737377</td>
                      <td>
                        <div style="margin:-0.4375em;">
                          <button type="button" class="btn" data-toggle="modal" data-target="#modal-view-pending-student"><i class="fas fa-eye"></i></button>
                          <button type="button" class="btn"><i class="fas fa-check"></i></button>
                          <button type="button" class="btn"><i class="fas fa-times"></i></button>

                        </div>
              </div>
              </td>
              </tr>


              </tbody>
              </table>
            </div>
            <!-- /.table-responsive -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- ./Student-PendingStudent -->


      </div>
      <!-- /.Student-Table -->

      <!-- Student-BatchTable -->
      <div class="col-md-4">
        <div class="card card-secondary collapsed-card">
          <div class="card-header border-transparent">
            <h3 class="card-title">Add Batch</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <form role="form" enctype="multipart/form-data" method="post" action="">
              <div class="card-body pb-0">

                <div class="form-group">
                  <label for="select_batch">Student</label>
                  <select data-placeholder="Select a Student" class="form-control select1" id="select_student" name="select_student" style="width: 100%;">
                    <option value="Vaibhav">Vaibhav Sharma</option>
                    <option value="Anuj">Anuj Kumar</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="select_class">Class</label>
                  <select data-placeholder="Select a Class" class="form-control select1" id="select_class" name="select_class" style="width: 100%;">
                    <option value="">Select Class</option>
                    <option value="1">X</option>
                    <option value="2">XII</option>
                  </select>
                </div>
                <div class="form-group">

                  <div class="1 box">
                    <label for="holiday_from">Batch</label>
                    <div class="row">
                      <div class="col-md-4 icheck-success d-inline">
                        <input type="checkbox" id="checkboxSuccess1">
                        <label for="checkboxSuccess1">
                          Evening
                        </label>
                      </div>
                      <div class="col-md-4 icheck-success d-inline">
                        <input type="checkbox" id="checkboxSuccess2">
                        <label for="checkboxSuccess2">
                          Morning
                        </label>
                      </div>
                      <div class="col-md-4 icheck-success d-inline">
                        <input type="checkbox" id="checkboxSuccess3">
                        <label for="checkboxSuccess3">
                          Afternoon
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="2 box">
                    <label for="holiday_from">Batch</label>
                    <div class="row">

                      <div class="col-md-4 icheck-success d-inline">
                        <input type="checkbox" id="checkboxSuccess1">
                        <label for="checkboxSuccess1">
                          Evening
                        </label>
                      </div>
                      <div class="col-md-4 icheck-success d-inline">
                        <input type="checkbox" id="checkboxSuccess2">
                        <label for="checkboxSuccess2">
                          Morning
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary" style="width:100%;">Assign</a>
              </div>
              <!-- /.card-footer -->

            </form>

          </div>

        </div>

      </div>
      <!-- /.Student-BatchTable -->
    </div>
    <!-- /.row -->

    <!-- All Modal Open-->
    <!-- Student-AddModal -->
    <div class="modal fade" id="modal-add-edit-student">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Add Student</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form role="form" enctype="multipart/form-data" id="addstudenti" method="post" action="">
              <div class="card-body">
                <input type="hidden" value='' id="select_id" name="select_id" />
                <div class="form-group">
                  <label for="student_name">Student Name</label>
                  <input type="text" id="student_name" name="student_name" class="form-control" placeholder="Enter Student Name">
                </div>
                <div class="form-group">
                  <label for="student_email">Student Email</label>
                  <input type="text" id="student_email" name="student_email" class="form-control" placeholder="Enter Student Email">
                </div>
                <div class="form-group">
                  <label for="student_phoneno">Phone No.</label>
                  <input type="text" id="student_phoneno" name="student_phoneno" class="form-control" placeholder="Enter Phone No">
                </div>
                <div class="form-group">
                  <label for="student_dob">Date Of Birth</label>
                  <input type="date" id="student_dob" name="student_dob" class="form-control" placeholder="Enter DOB">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>

            </form>
          </div>

        </div>
      </div>
    </div>
    <!-- ./Student-AddModal-->

    <!-- Student-ImportModal -->
    <div class="modal fade" id="modal-import-student">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Import Student CSV</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form role="form" enctype="multipart/form-data" id="addbatchi" method="post" action="">
              <div class="card-body">
                <div class="form-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Import Student Record</label>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>

            </form>
          </div>

        </div>
      </div>
    </div>
    <!-- ./Student-ImportModal-->

    <!-- Student-ViewModal -->
    <div class="modal fade" id="modal-view-student">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">View Student</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form role="form" enctype="multipart/form-data" id="addstudenti" method="post" action="">
              <div class="card-body">
                <div class="form-group">
                  <label for="student_name">Student Registration No.</label>
                  <input type="text" id="student_regno" name="student_regno" class="form-control" disabled value="2016ACSC0117082">
                </div>
                <div class="form-group">
                  <label for="student_name">Student Name</label>
                  <input type="text" id="student_name" name="student_name" class="form-control" disabled value="Vaibhav Sharma">
                </div>
                <div class="form-group">
                  <label for="student_email">Student Email</label>
                  <input type="text" id="student_email" name="student_email" class="form-control" disabled value="vaibhav@gmail.com">
                </div>
                <div class="form-group">
                  <label for="student_phoneno">Phone No.</label>
                  <input type="text" id="student_phoneno" name="student_phoneno" class="form-control" disabled value="+91 7383828382">
                </div>
                <div class="form-group">
                  <label for="student_dob">DOB.</label>
                  <input type="text" id="student_phoneno" name="student_phoneno" class="form-control" disabled value="22-Jul-2020">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              </div>

            </form>
          </div>

        </div>
      </div>
    </div>
    <!-- ./Student-ViewModal-->
    <!-- Student-PendingViewModal -->
    <div class="modal fade" id="modal-view-pending-student">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">View Student</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form role="form" enctype="multipart/form-data" id="addstudenti" method="post" action="">
              <div class="card-body pb-0">

                <div class="form-group">
                  <label for="select_name">Name</label>
                  <div class="row">
                    <div class="col-md-4 mt-1">
                      <input type="text" class="form-control" id="select_name" value="Amit" disabled>
                    </div>
                    <div class="col-md-4 mt-1">
                      <input type="text" class="form-control" id="select_name" value="Ram" disabled>
                    </div>
                    <div class="col-md-4 mt-1">
                      <input type="text" class="form-control" id="select_name" value="Sharma" disabled>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="select_name">Guardian Name</label>
                  <div class="row">
                    <div class="col-md-4 mt-1">
                      <input type="text" class="form-control" id="select_name" value="Ram" disabled>
                    </div>
                    <div class="col-md-4 mt-1">
                      <input type="text" class="form-control" id="select_name" value="Suresh" disabled>
                    </div>
                    <div class="col-md-4 mt-1">
                      <input type="text" class="form-control" id="select_name" value="Sharma" disabled>
                    </div>
                  </div>
                </div>
                <div class="form-group">

                  <div class="row">
                    <div class="col-md-6 mt-1">
                      <label for="select_dob">Primary Email</label>
                      <input type="email" class="form-control" id="select_name" value="ram@gmail.com" disabled>
                    </div>
                    <div class="col-md-6 mt-1">
                      <label for="select_dob">D.O.B</label>
                      <input type="date" class="form-control" id="select_name" value="19 Jun 1997" disabled>
                    </div>
                  </div>
                </div>
                <div class="form-group">

                  <div class="row">
                    <div class="col-md-6 mt-1">
                      <label for="select_dob">Mobile No.</label>
                      <input type="text" class="form-control" id="select_name" disabled value="+91 7373737377">
                    </div>
                    <div class="col-md-6 mt-1">
                      <label for="select_dob">Gender</label>
                      <div class="row mt-2">
                        <div class="col-md-6">
                          <input checked type="radio" name="radio1">
                          <label class="form-check-label">
                            Male
                          </label>
                        </div>
                        <div class="col-md-6">
                          <input type="radio" name="radio1">
                          <label class="form-check-label">
                            Female
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </form>
          </div>
          <!-- /.card-body -->
          <div class="modal-footer justify-content-between">
            <button type="submit" class="btn btn-primary">REJECT</button>
            <button type="submit" class="btn btn-primary">ACCEPT</button>
          </div>
        </div>
      </div>
    </div>
    <!-- ./Student-PendingViewModal-->
    <!-- All Modal Close-->
</div>
</section>
<!-- /.content -->
</div>

<!-- /.content-wrapper -->
<script>
  $(document).ready(function() {
    $.validator.setDefaults({
      submitHandler: function(form) {
        form.submit();
      }
    });
    $('#addstudenti').validate({
      rules: {
        student_name: {
          required: true
        },
        student_email: {
          required: true
        },
        student_phoneno: {
          required: true
        },
      },
      messages: {
        student_name: {
          required: "Please Enter Student Name"
        },
        student_email: {
          required: "Please Enter Student Email"
        },
        student_phoneno: "Please Enter Student Phone No.",
        student_dib: "Please Enter Student DOB."
      },
      errorElement: 'span',
      errorPlacement: function(error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function(element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
    $('#addbatchi').validate({
      rules: {
        add_batch: {
          required: true
        },
      },
      messages: {
        add_batch: "Please Enter Batch"
      },
      errorElement: 'span',
      errorPlacement: function(error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function(element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });
</script>
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": false,
      "autoWidth": false,
      "ordering": true,
    });
    $("#example2").DataTable({
      "responsive": false,
      "autoWidth": false,
      "ordering": true,
      "lengthMenu": [
        [3, 8, 10, 25, -1],
        [3, 8, 10, 25, "All"]
      ]
    });
  });
</script>
<script>
  $(document).ready(function() {
    $("select").change(function() {
      $(this).find("option:selected").each(function() {
        var optionValue = $(this).attr("value");
        if (optionValue) {
          $(".box").not("." + optionValue).hide();
          $("." + optionValue).show();
        } else {
          $(".box").hide();
        }
      });
    }).change();
  });
</script>
@endsection