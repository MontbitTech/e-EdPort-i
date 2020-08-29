@extends('teacher.include.app')
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
            <li class="breadcrumb-item"><a href="{{route('teacher.setting')}}">Admin</a></li>
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
    </div>
  </section>
  <!-- /.Section Content -->

  <!-- All Modal Open --->
  <!-- ./All Modal Close -->

</div>

<!-- /.content-wrapper -->


@endsection