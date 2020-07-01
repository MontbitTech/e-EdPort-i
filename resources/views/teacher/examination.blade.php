@extends('teacher.include.app')
@section('content')

<!-- Examination-Main-content -->

<div class="content-wrapper">

    <!-- Examination-Header-Content -->

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Examination</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('teacher.examination')}}">Teacher</a></li>
                        <li class="breadcrumb-item active">Examination</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- ./Examination-Header-Content -->

    <!-- Examination-Body-Content -->

    <section class="content">
          <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        Examination form
                    </div>
                    <div class="col-md-4 offset-md-2">
                        new data this 
                    </div>
                </div>
         </div>
    </section>

    <!-- ./Examination-Body-Content -->
</div>
<!-- Examination-Main-content -->
@endsection