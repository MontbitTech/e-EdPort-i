@extends('admin.include.app')
@section('content')
<style>
  div#example2_filter.dataTables_filter input {
    width: 70%;
  }
</style>
<!-- Content Wrapper -->
<div class="content-wrapper">

  <!-- Classroom-HeaderContent -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Classroom</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.classroom')}}">Admin</a></li>
            <li class="breadcrumb-item active">Classroom</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- /.Classroom-HeaderContent -->

  <!-- Section Content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- Classroom-ClassTable -->
        <div class="col-md-8">
          <div class="card card-secondary">
            <div class="card-header border-transparent">
              <h3 class="card-title">Add Class</h3>
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
                      <th>Class Name</th>
                      <th>Batch</th>
                      <th>Subjects</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td>X</td>
                      <td>Evening</td>
                      <td>Math,Science</td>
                      <td>
                        <div style="margin:-0.4375em;">
                          <button type="button" class="btn"><i class="fas fa-edit"></i></button>
                          <button type="button" class="btn"><i class="fas fa-trash"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>XI</td>
                      <td>Morning</td>
                      <td>Science,History</td>
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
              <a href="javascript:void(0)" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#modal-add-edit-class" style="width:100%;">Add Class</a>
            </div>
            <!-- /.card-footer -->
          </div>

        </div>
        <!-- /.Classroom-ClassTable -->

        <!-- Classroom-SubjectTable -->
        <div class="col-md-4">
          <div class="card card-secondary collapsed-card">
            <div class="card-header border-transparent">
              <h3 class="card-title">Add Subject</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-plus"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="table-responsive mt-1 p-2">
                <table id="example2" class="table table-bordered table-striped table-sm">
                  <thead>
                    <tr>
                      <th>Subject Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td>Math</td>
                      <td>
                        <div style="margin:-0.4375em;">
                          <button type="button" class="btn"><i class="fas fa-edit"></i></button>
                          <button type="button" class="btn"><i class="fas fa-trash"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Science</td>
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
              <a href="javascript:void(0)" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#modal-add-edit-subject" style="width:100%;">Add Subject</a>
            </div>
            <!-- /.card-footer -->
          </div>

        </div>
        <!-- /.Classroom-SubjectTable -->
      </div>
      <!-- /.row -->

      <!-- All Modal Open-->
      <!-- Dashboard-ClassModal -->
      <div class="modal fade" id="modal-add-edit-class">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Classroom</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form" enctype="multipart/form-data" id="addclassroomi" method="post" action="">
                <div class="card-body">
                  <div class="form-group">
                    <label for="select_teacher">Class Name</label>
                    <input type="text" id="add_class" name="add_class" class="form-control" placeholder="Enter Class Name">
                  </div>
                  <div class="form-group">
                    <label for="select_batch">Batch</label>
                    <select multiple="multiple" data-placeholder="Select a Batch" class="form-control select2" id="select_batch" name="select_batch" style="width: 100%;">
                      <option value="Evening">Evening</option>
                      <option value="Morning">Morning</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="select_subject">Select Subject</label>
                    <select multiple="multiple" data-placeholder="Select a Subject" class="form-control select2" id="select_subject" name="select_subject" style="width: 100%;">
                      <option value="Math">Math</option>
                      <option value="Science">Science</option>
                    </select>
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
      <!-- ./Dashboard-ClassModal-->

      <!-- Dashboard-SubjectModal -->
      <div class="modal fade" id="modal-add-edit-subject">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Subject</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form" enctype="multipart/form-data" id="addsubjecti" method="post" action="">
                <div class="card-body">
                  <div class="form-group">
                    <label for="add_subject">Subject Name</label>
                    <input type="text" id="add_subject" name="add_subject" class="form-control" placeholder="Enter Subject Name">
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
      <!-- ./Dashboard-SubjectModal-->

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
    $('#addclassroomi').validate({
      rules: {
        select_teacher: {
          required: true
        },
        select_batch: {
          required: true
        },
        select_subject: {
          required: true
        },
      },
      messages: {
        select_teacher: {
          required: "Please Select Teacher"
        },
        select_batch: {
          required: "Please Select Batch"
        },
        select_subject: "Please Select Subject"
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
    $('#addsubjecti').validate({
      rules: {
        add_subject: {
          required: true
        },
      },
      messages: {
        add_subject: "Please Select Subject"
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
      "responsive": true,
      "autoWidth": false,
      "ordering": true,
    });
    $("#example2").DataTable({
      "responsive": true,
      "autoWidth": false,
      "ordering": true,
      "lengthMenu": [
        [3, 8, 10, 25, -1],
        [3, 8, 10, 25, "All"]
      ]
    });
  });
</script>
@endsection