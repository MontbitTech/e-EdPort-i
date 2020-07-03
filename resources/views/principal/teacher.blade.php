@extends('principal.include.app')
@section('content')
<!-- Teacher-Main-Content -->
<div class="content-wrapper">

    <!-- Teacher-Header-Content -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Welcome [Principal Name ]</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('principal.dashboard')}}">Principal</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Teacher-Header-Content -->

    <!-- Teacher-Body-Content  -->
    <section class="content">

    </section>
    <!-- /.Teacher-Body-Content  -->
</div>

<!-- /.Teacher-Main-Content -->

@endsection