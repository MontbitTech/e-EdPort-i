@extends('admin.include.app')
@section('content')
<style>
  .btn:not(:disabled):not(.disabled).active {
    background-color: #007bff;
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
          <h1 class="m-0 text-dark">Support</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.support')}}">Admin</a></li>
            <li class="breadcrumb-item active">Support</li>
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
        <!-- Support-Table -->
        <div class="col-md-12">
          <!-- Open-Service-Request-->
          <div class="card card-secondary">
            <div class="card-header border-transparent">
              <h3 class="card-title">Open Help Ticket</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="table-responsive mt-1 p-2">
                <table id="example1" class="table table-sm">
                  <thead>
                    <tr>
                      <th>Issues</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td>
                        <div class="post">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="{{asset('assets/img/admin.png')}}" alt="user image">
                            <a href="javascript:void(0)" class="btn float-right btn-xs btn-secondary"><i class="fas fa-redo mr-1"></i>Escalate</a>
                            <span class="username">
                              <a href="#">Jonathan Burke Jr.</a>
                              <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                            </span>
                            <span class="description">7th November 2020 - 8:30 AM</span>
                          </div>
                          <!-- /.user-block -->
                          <p style="font-size: smaller;">
                            Lorem ipsum represents a long-held tradition for designers,
                            typographers and the like.
                          </p>
                          <h6>Comments</h6>
                          <p style="font-size: smaller;">
                            Lorem ipsum represents a long-held tradition for designers,
                            typographers and the like.
                          </p>
                        </div>
                      </td>
                      <td>
                        <div class="btn-group btn-group-toggle btn-xs" data-toggle="buttons">
                          <label class="btn btn-secondary active btn-xs support-status" data-id="1">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked>Pending
                          </label>
                          <label class="btn btn-secondary btn-xs support-status" data-id="1">
                            <input type="radio" name="options" id="option2" autocomplete="off"> In Progress
                          </label>
                          <label class="btn btn-secondary btn-xs support-status" data-id="1">
                            <input type="radio" name="options" id="option2" autocomplete="off"> Solved
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="post">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="{{asset('assets/img/admin.png')}}" alt="user image">
                            <a href="javascript:void(0)" class="btn float-right btn-xs btn-secondary"><i class="fas fa-redo mr-1"></i>Escalate</a>
                            <span class="username">
                              <a href="#">Sanju Burke Jr.</a>
                            </span>
                            <span class="description">6th November 2020 - 9:30 PM</span>
                            
                          </div>
                          <!-- /.user-block -->
                          <p style="font-size: smaller;">
                            ABCD ipsum represents a long-held tradition for designers,
                            typographers and the like.
                          </p>
                          <h6>Comments</h6>
                          <p style="font-size: smaller;">
                            Lorem ipsum represents a long-held tradition for designers,
                            typographers and the like.
                          </p>
                        </div>
                      </td>
                      <td>
                        <div class="btn-group btn-group-toggle btn-xs" data-toggle="buttons">
                          <label class="btn btn-secondary active btn-xs support-status" data-id="1">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked>Pending
                          </label>
                          <label class="btn btn-secondary btn-xs support-status" data-id="1">
                            <input type="radio" name="options" id="option2" autocomplete="off"> In Progress
                          </label>
                          <label class="btn btn-secondary btn-xs support-status" data-id="1">
                            <input type="radio" name="options" id="option2" autocomplete="off"> Solved
                          </label>
                        </div>
                        <div>
                        
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
          <!--./ Open-Service-Request-->

          <!-- Close-Service-Request-->
          <div class="card card-secondary">
            <div class="card-header border-transparent">
              <h3 class="card-title">Close Help Ticket</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="table-responsive mt-1 p-2">
                <table id="example2" class="table table-sm">
                  <thead>
                    <tr>
                      <th>Issues</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td>
                        <div class="post">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="{{asset('assets/img/admin.png')}}" alt="user image">
                            <span class="username">
                              <a href="#">Jonathan Burke Jr.</a>
                            </span>
                            <span class="description">7th November 2020 - 8:30 AM</span>
                          </div>
                          <!-- /.user-block -->
                          <p style="font-size: smaller;">
                            Lorem ipsum represents a long-held tradition for designers,
                            typographers and the like.
                          </p>
                          <h6>Comments</h6>
                          <p style="font-size: smaller;">
                            Lorem ipsum represents a long-held tradition for designers,
                            typographers and the like.
                          </p>
                        </div>
                      </td>
                      <td>
                        <div class="btn-group btn-group-toggle btn-xs" data-toggle="buttons">
                          <label class="btn btn-secondary active btn-xs support-status" data-id="1">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked>Closed
                          </label>
                          <label class="btn btn-secondary btn-xs support-status" data-id="1">
                            <input type="radio" name="options" id="option2" autocomplete="off"> ReOpen
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="post">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="{{asset('assets/img/admin.png')}}" alt="user image">
                            <span class="username">
                              <a href="#">Sanju Burke Jr.</a>
                            </span>
                            <span class="description">6th November 2020 - 9:30 PM</span>
                          </div>
                          <!-- /.user-block -->
                          <p style="font-size: smaller;">
                            ABCD ipsum represents a long-held tradition for designers,
                            typographers and the like.
                          </p>
                          <h6>Comments</h6>
                          <p style="font-size: smaller;">
                            Lorem ipsum represents a long-held tradition for designers,
                            typographers and the like.
                          </p>
                        </div>
                      </td>
                      <td>
                        <div class="btn-group btn-group-toggle btn-xs" data-toggle="buttons">
                          <label class="btn btn-secondary active btn-xs support-status" data-id="1">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked>Closed
                          </label>
                          <label class="btn btn-secondary btn-xs support-status" data-id="1">
                            <input type="radio" name="options" id="option2" autocomplete="off"> ReOpen
                          </label>
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
          <!--./ Open-Service-Request-->
        </div>
        <!-- /.Support-Table -->


      </div>
      <!-- /.row -->

      <!-- All Modal Open-->

      <!-- All Modal Close-->
    </div>
  </section>
  <!-- /.content -->
</div>

<!-- /.content-wrapper -->

<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
      "ordering": true,
      "lengthMenu": [
        [3, 8, 10, 25, -1],
        [3, 8, 10, 25, "All"]
      ]
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
<script>
$('body').on('click', '.support-status', function(event) {
    var sr_id = $(this).attr('data-id');

    if (sr_id) { Swal.fire({
  title: 'Enter your comment',
  input: 'textarea',
  inputPlaceholder: 'Type your Comment here...',
  inputAttributes: {
    'aria-label': 'Type your Comment here'
  },
  showCancelButton: true
})
  .then((result) => {
  if (result.value) {
	  Swal.fire(result.value)
       }
      })
    }
});
</script>
@endsection