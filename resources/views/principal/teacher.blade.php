@extends('principal.include.app')
@section('content')
<style>
    /* #example4_filter.dataTables_filter input {
        width: 70%;
    }

    #example1_filter.dataTables_filter input {
        width: 70%;
    }

    #example3_filter.dataTables_filter input {
        width: 70%;
    } */
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
                            <h3 class="card-title">All Teacher</h3>
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
                                            <th>Status</th>
                                            <th>Teacher</th>
                                            <th>Subject</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td><span class="badge bg-danger">Offline</span></td>
                                            <td>Sanju Kapoor</td>
                                            <td>Math</td>
                                        </tr>
                                        <tr>
                                            <td><span class="badge bg-warning">Leave</span></td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                        </tr>
                                        <tr>
                                            <td><span class="badge bg-warning">Leave</span></td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                        </tr>
                                        <tr>
                                            <td><span class="badge bg-success">Online</span></td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                        </tr>
                                        <tr>
                                            <td><span class="badge bg-danger">Offline</span></td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                        </tr>
                                        <tr>
                                            <td><span class="badge bg-success">Online</span></td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                        </tr>
                                        <tr>
                                            <td><span class="badge bg-danger">Offline</span></td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                        </tr>
                                        <tr>
                                            <td><span class="badge bg-success">Online</span></td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                        </tr>
                                        <tr>
                                            <td><span class="badge bg-danger">Offline</span></td>
                                            <td>Teacher Name</td>
                                            <td>Subject Name</td>
                                        </tr>
                                        <tr>
                                            <td><span class="badge bg-success">Online</span></td>
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
                            <h3 class="card-title">Teacher Attendance Export</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <input type="hidden" value='' id="select_id" name="select_id" />
                            <div class="form-group">
                                <label for="student_dob">Year</label>
                                <select data-placeholder="Select a Student" class="form-control select1" id="select_student" name="select_student" style="width: 100%;">
                                    <option value="Vaibhav">2019</option>
                                    <option value="Anuj">2020</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="student_dob">Month</label>
                                <select data-placeholder="Select a Student" class="form-control select1" id="select_student" name="select_student" style="width: 100%;">
                                    <option value="Vaibhav">Jan</option>
                                    <option value="Anuj">Feb</option>
                                    <option value="Vaibhav">March</option>
                                    <option value="Anuj">April</option>
                                    <option value="Vaibhav">May</option>
                                    <option value="Anuj">June</option>
                                </select>
                            </div>


                        </div>
                        <div class="card-footer clearfix">
                            <button type="submit" class="btn btn-sm btn-secondary" style="width:100%;">Export</button>
                        </div>

                    </div>
                </div>

                <!-- ./Teacher-Working-Online-Teacher-->

                <!-- Teacher-BatchTable -->
                <div class="col-md-4">
                    <div class="card card-secondary collapsed-card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Look Up Teacher</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
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
                                    <div class="card card-secondary card-outline card-outline-tabs">
                                        <div class="card-header p-0 border-bottom-0">
                                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-profile-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Profile</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Subject</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Attendance</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content" id="custom-tabs-four-tabContent">
                                                <div class="tab-pane fade show active" id="custom-tabs-profile-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                                    <div class="form-group">
                                                        <label for="teacher_email">Teacher Email</label>
                                                        <div class="input-group">
                                                            <input type="text" id="teacher_email" name="teacher_email" class="form-control" disabled value="amit@gmail.com">

                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id=""><a href="mailto:amit@gmail.com"><i class="fas fa-envelope"></i></a></span>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="teacher_phoneno">Phone No.</label>
                                                        <div class="input-group">
                                                            <input type="text" id="teacher_phoneno" name="teacher_phoneno" class="form-control" disabled value="+91 7383828382">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id=""><a href="tel:9239239323"><i class="fas fa-phone-alt"></i></a></span>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="teacher_phoneno">Address.</label>
                                                        <div class="input-group">
                                                            <input type="text" id="teacher_address" name="teacher_address" class="form-control" disabled value="Bombay,India">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id=""><a href="mailto:amit@gmail.com"><i class="fas fa-map-marker-alt"></i></a></span>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                                    <div class="form-group">
                                                        <label for="select_batch">Association</label>
                                                        <select multiple="multiple" data-placeholder="Select a Batch" disabled class="form-control select1" id="select_batch" name="select_batch" style="width: 100%;">
                                                            <option value="Evening" selected>Evening</option>
                                                            <option value="Morning" selected>Morning</option>
                                                        </select>
                                                    </div>
                                                    <div class="table-responsive mt-1 p-2">
                                                        <table id="example1" class="table table-bordered table-striped table-sm">
                                                            <thead>
                                                                <tr>
                                                                    <th>Class</th>
                                                                    <th>Section</th>
                                                                    <th>Subject</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <tr>
                                                                    <td>X</td>
                                                                    <td>A</td>
                                                                    <td>Math</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>XII</td>
                                                                    <td>B</td>
                                                                    <td>English</td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                                    <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>

                </div>
                <!-- /.Teacher-BatchTable -->

                <!-- Teacher-All-Online-Teacher -->

                <div class="col-md-4">
                    <div class="card card-secondary collapsed-card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Teacher On Leave Today</h3>
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
                                            <th>Teacher</th>
                                            <th>Till</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>Sanju Kapoor</td>
                                            <td>17 Jul 2020</td>
                                        </tr>
                                        <tr>
                                            <td>Raju Kapoor</td>
                                            <td>18 Jul 2020</td>
                                        </tr>
                                        <tr>
                                            <td>Sanjay Kapoor</td>
                                            <td>19 Jul 2020</td>
                                        </tr>
                                        <tr>
                                            <td>Sam Kapoor</td>
                                            <td>20 Jul 2020</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- ./Teacher-All-Online-Teacher -->

                <!-- Teacher-All-Online-Teacher -->

                <div class="col-md-8">
                    <div class="card card-secondary collapsed-card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Teacher Leave Approval</h3>
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
                                            <th>Teacher</th>
                                            <th>Leave Date</th>
                                            <th>Total Day </th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>Sanju efeferscf Kapoor</td>
                                            <td> 12-Jul-2020 - 13-Jul-2020</td>
                                            <td>1</td>
                                            <td><button type="button" class="btn p-0" data-toggle="modal" data-target="#modal-leave-status"><span class="badge bg-warning">Pending</span></button></td>

                                        </tr>
                                        <tr>
                                            <td>Sanju efeferscf Kapoor</td>
                                            <td> 12-Jul-2020 - 13-Jul-2020</td>
                                            <td>1</td>
                                            <td><button type="button" class="btn p-0" data-toggle="modal" data-target="#modal-leave-status"><span class="badge bg-danger">UnApproved</span></button></td>

                                        </tr>
                                        <tr>
                                            <td>Sanju efeferscf Kapoor</td>
                                            <td> 12-Jul-2020 - 13-Jul-2020</td>
                                            <td>1</td>
                                            <td><button type="button" class="btn p-0" data-toggle="modal" data-target="#modal-leave-status"><span class="badge bg-success">Approved</span></button></td>

                                        </tr>
                                        <tr>
                                            <td>Sanju efeferscf Kapoor</td>
                                            <td> 12-Jul-2020 - 13-Jul-2020</td>
                                            <td>1</td>
                                            <td><button type="button" class="btn p-0" data-toggle="modal" data-target="#modal-leave-status"><span class="badge bg-warning">Pending</span></button></td>

                                        </tr>


                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- ./Teacher-All-Online-Teacher -->
            </div>
        </div>

    </section>
    <!-- /.Teacher-Body-Content  -->

    <!-- All Modal Open-->
    <!-- Student-AddModal -->
    <div class="modal fade" id="modal-leave-status">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modify Leave Status</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" enctype="multipart/form-data" id="addstudenti" method="post" action="">
                        <div class="card-body">
                            <input type="hidden" value='' id="select_id" name="select_id" />
                            <div class="form-group">
                                <label for="student_name">Teacher Name</label>
                                <input type="text" id="student_name" value="Sanju Kapoor" disabled name="student_name" class="form-control" placeholder="Enter Student Name">
                            </div>
                            <div class="form-group">
                                <label for="student_email">Leave Date</label>
                                <input type="text" id="student_email" value="12-Jul-2020 - 13-Jul-2020" disabled name="student_email" class="form-control" placeholder="Enter Student Email">
                            </div>
                            <div class="form-group">
                                <label for="student_phoneno">Total Day</label>
                                <input type="text" id="student_phoneno" value="1 day" disabled name="student_phoneno" class="form-control" placeholder="Enter Phone No">
                            </div>
                            <div class="form-group">
                                <label for="holiday_name">Reason</label>
                                <textarea id="notice" name="notice" class="form-control" rows="2" disabled>Going Hometown</textarea>
                            </div>
                            <div class="form-group">
                                <label for="student_dob">Status</label>
                                <select data-placeholder="Select a Student" class="form-control select1" id="select_student" name="select_student" style="width: 100%;">
                                    <option value="Vaibhav">Approved</option>
                                    <option value="Anuj">UnApproved</option>
                                    <option value="Anuj">Pending</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="student_dob">Allot Role To</label>
                                <select data-placeholder="Select a Student" class="form-control select1" id="select_student" name="select_student" style="width: 100%;">
                                    <option value="Vaibhav">Vaibhav Kapoor</option>
                                    <option value="Anuj">Yugendar Singh</option>
                                    <option value="Anuj">Manu Kumar</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="holiday_name">Remark</label>
                                <textarea id="notice" name="notice" class="form-control" rows="2" placeholder="Enter Remark..."></textarea>
                            </div>
                        </div>
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
</div>

<!-- /.Teacher-Main-Content -->

<script>
    // $(function() {
    //     $("#example3").DataTable({
    //         "responsive": true,
    //         "autoWidth": false,
    //         "ordering": true,
    //         "lengthMenu": [
    //             [3, 8, 15, 25, -1],
    //             [3, 8, 15, 25, "All"]
    //         ]
    //     });
    // });

    // $(function() {
    //     $("#example4").DataTable({
    //         "responsive": true,
    //         "autoWidth": false,
    //         "ordering": true,
    //         "lengthMenu": [
    //             [3, 8, 15, 25, -1],
    //             [3, 8, 15, 25, "All"]
    //         ]
    //     });
    // });
</script>
<script>
    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData = {
        labels: [
            'Absent',
            'Present'
        ],
        datasets: [{
            data: [5, 25],
            backgroundColor: ['#f56954', '#00a65a'],
        }]
    }
    var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
    });
</script>
@endsection