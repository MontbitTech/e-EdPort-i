@extends('admin.include.app')
@section('content') 
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <div class="card">
              <div class="card-header">
			  <div class="row" style="float:right;">
                 <button type="button" class="btn bg-gradient-primary m-1 createclass" data-toggle="modal" data-target="#modal-add-edit-cms">Add Content</button>
				 <button type="button" class="btn bg-gradient-primary m-1 createclass" data-toggle="modal" data-target="#modal-import-cms">Import Content Repo</button>
				 <button type="button" class="btn bg-gradient-primary m-1 createclass" data-toggle="modal" data-target="#modal-add-edit-class">Download Sample</button>
			  </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Class</th>
                    <th>Subject</th>
                    <th>Topic</th>
                    <th>Link</th>
					<th>Assignment Link</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
				  
                  <tr>
                    <td>A</td>
                    <td>Math</td>
                    <td>Integer</td>
					<td><a href="" target="_blank">Link</a></td>
                    <td><a href="" target="_blank">Link</a></td>
                    <td>
					<button type="button" class="editclass btn" data-toggle="modal" data-target="#modal-add-edit-class" data-id=""><i class="fas fa-edit"></i></button>
					<button type="button" class="btn delete-confirm" data-id=""><i class="fas fa-trash"></i></button>
				    </td>
                  </tr>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Class</th>
                    <th>Subject</th>
                    <th>Topic</th>
                    <th>Link</th>
					<th>Assignment Link</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
	   <div class="modal fade" id="modal-add-edit-cms">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Large Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <!-- form start -->
              <form role="form" enctype="multipart/form-data" id="addcmsi" method="post" action="">
                <div class="card-body">
				  <input type="hidden" value='' id="select_id" name="select_id"/>
                  <div class="form-group">
                    <label for="select_teacher">Select Class</label>
					<select class="form-control select2" id="select_class" name="select_class" style="width: 100%;">
                    <option value=''>Select an option</option>
                    <option value="">Amit sinha</option>
					
                    </select>
                    
                  </div>
				  <div class="form-group">
                    <label for="select_subject">Select Subject</label>
					<select class="form-control select2" id="select_subject" name="select_subject" style="width: 100%;">
                    <option value=''>Select an option</option>
                    <option value="">Science</option>
                    </select>
                    
                  </div>
				  <div class="form-group">
                    <label for="select_batch">Topic</label>
					<input type="text" id="select_topic" name="select_topic" class="form-control"  placeholder="Enter Topic">
                  </div>
				  <div class="form-group">
                    <label for="select_batch">Url</label>
					<input type="text" id="select_url" name="select_url" class="form-control"  placeholder="Enter Url">
                  </div>
				  <div class="form-group">
                    <label for="select_batch">Assignment Url</label>
					<input type="text" id="select_asgurl" name="select_asgurl" class="form-control"  placeholder="Enter Assignment Url">
                  </div>
				  
                </div>
                <!-- /.card-body -->
				<div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>

              </form>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
	   <div class="modal fade" id="modal-import-cms">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Large Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <!-- form start -->
              <form role="form" enctype="multipart/form-data" id="importcmsi" method="post" action="">
                <div class="card-body">
				  <input type="hidden" value='' id="select_id" name="select_id"/>
				  
				  <div class="form-group">
                    <label for="import_cms">Import CMS</label>
					<input type="file" id="import_cms" name="import_cms" accept=".csv" class="form-control" style="height:calc(2.25rem + 8px);" placeholder="Enter Assignment Url">
                  </div>
				  
                </div>
                <!-- /.card-body -->
				<div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>

              </form>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script type="text/javascript">
$(document).ready(function () {
  $.validator.setDefaults({
    submitHandler: function (form) {
      form.submit();
    }
  });
  $('#addcmsi').validate({
    rules: {
      select_class: {
        required: true
      },
      select_subject: {
        required: true
      },
      select_topic: {
        required: true
      },
	  select_url: {
        required: true
      },
	  select_asgurl: {
        required: true
      },
    },
    messages: {
      select_class: "Please Select Class",
      select_subject: "Please Select Subject",
      select_topic: {
        required: "Please Select Batch"
      },
      select_url: {
		  required: "Please Select Url"
	  },
	  select_asgurl: {
		  required: "Please Select Assignment Url"
	  },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
  $('#importcmsi').validate({
    rules: {
      import_cms: {
        required: true,
		extension: "csv"
      },
    },
    messages: {
      import_cms: {
		  required:"Please Select Csv File",
		  extension:"Please Select Only Csv File",
	  },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
<script>
$('body').on('click', '.editclass', function(event) {
    var class_id = $(this).attr('data-id');
    if (class_id) {
        $.ajax({
            url: "",
            type: 'POST',
            dataType: "json",
			beforeSend: function(xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');
                if (token) {
                    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }
            },
            data: {
                'class_id': class_id
            },
            success: function(data) {

				    $('#select_id').val(data['id']);
					$('#select_teacher').val(data['teacher_id']);
					$('#select_subject').val(data['subject_id']);
					$('#select_batch').val(data['batch']);
            }
        });

    }
});
$('body').on('click', '.createclass', function(event) {
					$('#select_teacher').val("");
					$('#select_subject').val("");
					$('#select_batch').val("");
});
</script>
<script>
$('body').on('click', '.delete-confirm', function(event) {
    var class_id = $(this).attr('data-id');
    if (class_id) {
        Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
  })
  .then((result) => {
  if (result.value) {
	  $.ajax({
            url: "",
            type: 'POST',
            dataType: "json",
			beforeSend: function(xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');
                if (token) {
                    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }
            },
            data: {
                'class_id': class_id
            },
            success: function(data) {
				    Swal.fire(
                    'Deleted!',
                    'Your Row has been deleted.',
                    'success'
					)
				setTimeout(function(){
                   location.reload(); 
                    }, 1000);
            }
        });
       }
      })
    }
});
</script>
@endsection