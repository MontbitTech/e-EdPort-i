@extends('principal.include.app')
@section('content')
<style>
    #example4_filter.dataTables_filter input {
        width: 70%;
    }

    #example1_filter.dataTables_filter input {
        width: 70%;
    }

    #example3_filter.dataTables_filter input {
        width: 70%;
    }
</style>
<!-- Teacher-Main-Content -->
<div class="content-wrapper">

    <!-- Teacher-Header-Content -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Teacher</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('principal.dashboard')}}">Principal</a></li>
                        <li class="breadcrumb-item active">Teacher</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Teacher-Header-Content -->

    <!-- Teacher-Body-Content  -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <!-- Teacher-All-Online-Teacher -->

                <div class="col-md-4">
                    <div class="card card-secondary collapsed-card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">All Online Teacher</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-body p-0">
                            <div class="table-responsive mt-1 p-2">
                                <table id="example1" class="table table-bordered table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Teacher</th>
                                            <th>Subject</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>1</td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- ./Teacher-All-Online-Teacher -->

                <!-- Teacher-Working-Online-Teacher -->
                <div class="col-md-4">
                    <div class="card card-secondary collapsed-card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Working Online Teacher</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-body p-0">
                            <div class="table-responsive mt-1 p-2">
                                <table id="example3" class="table table-bordered table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Teacher</th>
                                            <th>Subject</th>
                                            <th>Class</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>1</td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                            <td>Class Name</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                            <td>Class Name</td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                            <td>Class Name</td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                            <td>Class Name</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                            <td>Class Name</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                            <td>Class Name</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                            <td>Class Name</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                            <td>Class Name</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                            <td>Class Name</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                            <td>Class Name</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- ./Teacher-Working-Online-Teacher-->


                <!-- Teacher-Online-Free-Teacher -->

                <div class="col-md-4">
                    <div class="card card-secondary collapsed-card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Online Free Teacher</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-body p-0">
                            <div class="table-responsive mt-1 p-2">
                                <table id="example4" class="table table-bordered table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Teacher</th>
                                            <th>Subject</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>1</td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                   
                </div>

                <!-- ./Teacher-Online-Free-Teacher -->

            </div>
        </div>

    </section>
    <!-- /.Teacher-Body-Content  -->
</div>

<!-- /.Teacher-Main-Content -->

<script>
    $(function() {
        $("#example3").DataTable({
            "responsive": true,
            "autoWidth": false,
            "ordering": true,
            "lengthMenu": [
                [3, 8, 15, 25, -1],
                [3, 8, 15, 25, "All"]
            ]
        });
    });

    $(function() {
        $("#example4").DataTable({
            "responsive": true,
            "autoWidth": false,
            "ordering": true,
            "lengthMenu": [
                [3, 8, 15, 25, -1],
                [3, 8, 15, 25, "All"]
            ]
        });
    });
</script>
@endsection