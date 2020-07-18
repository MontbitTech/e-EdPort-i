@extends('admin.include.app')
@section('content')
<style>
  div#example2_filter.dataTables_filter input {
    width: 70%;
  }

  .box {

    display: none;
  }
</style>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<!-- Content Wrapper -->
<div class="content-wrapper">

  <!-- Teacher-HeaderContent -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Teacher</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.teacher')}}">Admin</a></li>
            <li class="breadcrumb-item active">Teacher</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- /.Teacher-HeaderContent -->

  <!-- Section Content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- Teacher-Table -->
        <div class="col-md-8">
          <!-- Teacher-AddTeacher -->
          <div class="card card-secondary">
            <div class="card-header border-transparent">
              <h3 class="card-title">Add Teacher</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="maximize">
                  <i class="fas fa-expand"></i>
                </button>
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
                      <th>Teacher Name</th>
                      <th>Teacher Email</th>
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
                          <button type="button" class="btn"><i class="fas fa-edit"></i></button>
                          <button type="button" class="btn"><i class="fas fa-trash"></i></button>
                          <button type="button" class="btn" data-toggle="modal" data-target="#modal-view-teacher"><i class="fas fa-eye"></i></button> </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Ram Kumar</td>
                      <td>ram@gmail.com</td>
                      <td>+91 7737737377</td>
                      <td>
                        <div style="margin:-0.4375em;">
                          <button type="button" class="btn"><i class="fas fa-edit"></i></button>
                          <button type="button" class="btn"><i class="fas fa-trash"></i></button>
                          <button type="button" class="btn" data-toggle="modal" data-target="#modal-view-teacher"><i class="fas fa-eye"></i></button>
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
                  <a href="javascript:void(0)" class="btn btn-sm btn-secondary w-100" data-toggle="modal" data-target="#modal-add-edit-teacher"><i class="fas fa-plus-circle mr-3"></i>Add Teacher</a>
                </div>
                <div class="col-md-6">
                  <a href="javascript:void(0)" class="btn btn-sm btn-secondary w-100" data-toggle="modal" data-target="#modal-import-teacher"><i class="fas fa-file-import mr-3"></i>Import CSV</a>
                </div>
              </div>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- ./Teacher-AddTeacher -->

          <!-- Teacher-PendingTeacher -->
          <div class="card card-secondary">
            <div class="card-header border-transparent">
              <h3 class="card-title">Approval Pending Teacher</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="maximize">
                  <i class="fas fa-expand"></i>
                </button>
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
                      <th>Teacher Name</th>
                      <th>Teacher Email</th>
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
                          <button type="button" class="btn" data-toggle="modal" data-target="#modal-view-pending-teacher"><i class="fas fa-eye"></i></button>
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
                          <button type="button" class="btn" data-toggle="modal" data-target="#modal-view-pending-teacher"><i class="fas fa-eye"></i></button>
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
        <!-- ./Teacher-PendingTeacher -->

      </div>
      <!-- /.Teacher-Table -->

      <!-- Teacher-BatchTable -->
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
                  <label for="select_batch">Teacher</label>
                  <select data-placeholder="Select a teacher" class="form-control select1" id="select_teacher" name="select_teacher" style="width: 100%;">
                    <option value="Amit Sharma">Amit Sharma</option>
                    <option value="Ram Kumar">Ram Kumar</option>
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
                  <label for="select_batch">Batch</label>
                  <select multiple="multiple" data-placeholder="Select a Batch" class="form-control select2" id="teacher_batch" name="teacher_batch" style="width: 100%;">
                    <option value="Evening">Evening</option>
                    <option value="Morning">Morning</option>
                  </select>
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
      <!-- /.Teacher-BatchTable -->
    </div>
    <!-- /.row -->

    <!-- All Modal Open-->
    <!-- Teacher-AddModal -->
    <div class="modal fade" id="modal-add-edit-teacher">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Add Teacher</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form role="form" enctype="multipart/form-data" id="addteacheri" method="post" action="">
              <div class="card-body">
                <input type="hidden" value='' id="select_id" name="select_id" />
                <div class="form-group">
                  <label for="teacher_name">Teacher Name</label>
                  <input type="text" id="teacher_name" name="teacher_name" class="form-control" placeholder="Enter Teacher Name">
                </div>
                <div class="form-group">
                  <label for="teacher_email">Teacher Email</label>
                  <input type="text" id="teacher_email" name="teacher_email" class="form-control" placeholder="Enter Teacher Email">
                </div>
                <div class="form-group">
                  <label for="teacher_phoneno">Phone No.</label>
                  <input type="text" id="teacher_phoneno" name="teacher_phoneno" class="form-control" placeholder="Enter Phone No">
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
    <!-- ./Teacher-AddModal-->

    <!-- Teacher-BatchModal -->
    <div class="modal fade" id="modal-add-edit-batch">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Add Batch</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form role="form" enctype="multipart/form-data" id="addbatchi" method="post" action="">
              <div class="card-body">
                <div class="form-group">
                  <label for="add_batch">Batch</label>
                  <input type="text" id="add_batch" name="add_batch" class="form-control" placeholder="Enter Batch">
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
    <!-- ./Teacher-BatchModal-->

    <!-- Teacher-ViewModal -->
    <div class="modal fade" id="modal-view-teacher">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">View Teacher</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form role="form" enctype="multipart/form-data" id="addteacheri" method="post" action="">
              <div class="card-body">
                <input type="hidden" value='' id="select_id" name="select_id" />
                <div class="form-group">
                  <label for="teacher_name">Teacher Name</label>
                  <input type="text" id="teacher_name" name="teacher_name" class="form-control" disabled value="Amit Sharma">
                </div>
                <div class="form-group">
                  <label for="teacher_email">Teacher Email</label>
                  <input type="text" id="teacher_email" name="teacher_email" class="form-control" disabled value="amit@gmail.com">
                </div>
                <div class="form-group">
                  <label for="teacher_phoneno">Phone No.</label>
                  <input type="text" id="teacher_phoneno" name="teacher_phoneno" class="form-control" disabled value="+91 7383828382">
                </div>
                <div class="form-group">
                  <label for="select_batch">Batch</label>
                  <select multiple="multiple" data-placeholder="Select a Batch" disabled class="form-control select2" id="select_batch" name="select_batch" style="width: 100%;">
                    <option value="Evening" selected>Evening</option>
                    <option value="Morning" selected>Morning</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="teacher_phoneno">Address.</label>
                  <input type="text" id="teacher_address" name="teacher_address" class="form-control" disabled value="Bombay,India">
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
    <!-- ./Teacher-ViewModal-->

    <!-- Teacher-ImportModal -->
    <div class="modal fade" id="modal-import-teacher">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Import Teacher CSV</h4>
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
                    <label class="custom-file-label" for="exampleInputFile">Import Teacher Record</label>
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
    <!-- ./Teacher-ImportModal-->

    <!-- Teacher-PendingViewModal -->
    <div class="modal fade" id="modal-view-pending-teacher">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">View Teacher</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form role="form" enctype="multipart/form-data" id="addteacheri" method="post" action="">
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
                      <input type="text" class="form-control" id="select_name" placeholder="Mobile No.">
                    </div>
                    <div class="col-md-6 mt-1">
                      <label for="select_dob">Gender</label>
                      <div class="row mt-2">
                        <div class="col-md-6">
                          <input type="radio" name="radio1">
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
                <div class="form-group">
                  <label>Upload Document</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">No Document</label>
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
    <!-- ./Teacher-PendingViewModal-->

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
    $('#addteacheri').validate({
      rules: {
        teacher_name: {
          required: true
        },
        teacher_email: {
          required: true
        },
        teacher_phoneno: {
          required: true
        },
      },
      messages: {
        teacher_name: {
          required: "Please Enter Teacher Name"
        },
        teacher_email: {
          required: "Please Enter Teacher Email"
        },
        teacher_phoneno: "Please Enter Teacher Phone No."
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