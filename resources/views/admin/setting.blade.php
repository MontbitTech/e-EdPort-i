@extends('admin.include.app')
@section('content')
<!-- Setting Extra Content -->

<!-- ./Setting Extra Content -->
<!-- Content Wrapper -->
<div class="content-wrapper">

  <!-- Setting-HeaderContent -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Setting</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.setting')}}">Admin</a></li>
            <li class="breadcrumb-item active">Setting</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- /.Setting-HeaderContent -->

  <!-- Section Content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">

        <!-- Examination-Exam-Create -->


        <div class="col-md-8">
          <div class="card card-secondary">
            <div class="card-header border-transparent">
              <h3 class="card-title">School Setting</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>


            <div class="card-body">
              <div class="form-group">

                <label for="select_name">School Name</label>
                <input type="text" class="form-control" id="select_name" placeholder="School Name">

              </div>
              <div class="form-group">

                <label for="exampleInputFile">School Logo</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">School Logo</label>
                </div>

              </div>
              <div class="form-group">

                <label for="select_name">School Address</label>
                <input type="text" class="form-control" id="select_name" placeholder="School Address">

              </div>
            </div>
            <div class="card-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-secondary w-100" data-toggle="modal" data-target="#modal-add-edit-teacher"><i class="fas fa-edit mr-3"></i>Edit</a>

            </div>
            <!-- /.card-footer -->
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-secondary">
            <div class="card-header border-transparent">
              <h3 class="card-title">Setting</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>


            <div class="card-body">
              <div class="form-group">

                <label for="select_name">Domain</label>
                <input type="text" class="form-control" id="select_name" placeholder="Domain Name">

              </div>
              <div class="form-group">

                <label for="select_name">Mail From</label>
                <input type="email" class="form-control" id="select_name" placeholder="Mail From">

              </div>
            </div>
            <div class="card-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-secondary w-100" data-toggle="modal" data-target="#modal-add-edit-teacher"><i class="fas fa-edit mr-3"></i>Edit</a>

            </div>
            <!-- /.card-footer -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.Section Content -->

  <!-- All Modal Open --->
  <!-- ./All Modal Close -->

</div>

<!-- /.Content Wrapper -->

<!-- Setting Extra Content -->

<!-- ./Setting Extra Content -->
@endsection