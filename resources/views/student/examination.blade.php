@extends('student.include.app')
@section('content')
<!-- Examination Extra Content -->
<style>
    .subj {

        display: none;
    }

    .exam {
        display: none;
    }
</style>
<!-- ./Examination Extra Content -->
<!-- Content Wrapper -->

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
                        <li class="breadcrumb-item"><a href="{{route('teacher.examination')}}">Student</a></li>
                        <li class="breadcrumb-item active">Examination</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- ./Examination-Header-Content -->

    <!-- Section-Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-info collapsed-card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Examination </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>


                        <div class="card-body">
                            <select data-placeholder="Select Examination Name" class="form-control select1" style="width:100%">
                                <option value="">Select Examination Name</option>
                                <option value="english">English </option>
                                <option value="hindi">Hindi</option>
                                <option value="math">Math</option>
                            </select>
                            <div class="english exam mt-3">
                                <form role="form">
                                    <div class="form-group">
                                        <label for="exampleInputQuestion" class="mb-0">English</label>

                                    </div>
                                    <hr>
                                    <label for="exampleInputQuestion" class="align-top">Question 1</label>
                                    <div class="form-group mb-0 pb-1">

                                        <textarea name="" id="exampleInputQuestion" class="w-100" rows="3">your company name</textarea>
                                        <!-- <input type="text" class="form-control form-control-sm" id="exampleInputQuestion" placeholder="Insert your question"> -->
                                    </div>


                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>

                                                <th scope="col" class="text-center pb-0 pt-0 mb-0 mt-0">Option </th>
                                                <th scope="col" class="pb-0 pt-0 mb-0 mt-0">Answer</th>
                                                <th scope="col" class="text-center pb-0 pt-0 mb-0 mt-0">Option </th>
                                                <th scope="col" class="pb-0 pt-0 mb-0 mt-0">Answer</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>

                                                <td class="mb-0 mt-0 pt-0 pb-1">
                                                    <input class="form-control form-control-sm  " value="MontBit" type="text" placeholder="option 1">

                                                </td>
                                                <td class="mb-0 mt-0 pt-0 pb-0">
                                                    <input type="checkbox" class=" form-control-sm  ml-4 " checked>
                                                </td>

                                                <td class="mb-0 mt-0 pt-0 pb-1">
                                                    <input class="form-control form-control-sm  " value="info" type="text" placeholder="option 2">

                                                </td>
                                                <td class="mb-0 mt-0 pt-0 pb-0">
                                                    <input type="checkbox" class=" form-control-sm  ml-4 ">
                                                </td>
                                            </tr>
                                            <tr>

                                                <td class="mb-0 mt-0 pt-1 pb-0">
                                                    <input class="form-control form-control-sm  " value="company" type="text" placeholder="option 3">

                                                </td>
                                                <td class="mb-0 mt-0 pt-0 pb-0">
                                                    <input type="checkbox" class=" form-control-sm  ml-4 ">
                                                </td>
                                                <td class="mb-0 mt-0 pt-1 pb-0">
                                                    <input class="form-control form-control-sm  " value="no" type="text" placeholder="option 4">

                                                </td>
                                                <td class="mb-0 mt-0 pt-0 pb-0">
                                                    <input type="checkbox" class=" form-control-sm  ml-4 ">
                                                </td>
                                            </tr>




                                        </tbody>

                                    </table>
                                    <div class="newquestion"></div>

                                    <a class="btn btn-info addquestion w-100 mb-1"><i class="fas fa-plus text-white"></i></a>


                                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">

                    <!-- Profile-Performance card -->
                    <div class="card card-info collapsed-card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title"><i class="fas fa-award mr-2"></i> Performance Card</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-plus"></i>
                                </button>

                            </div>
                        </div>

                        <div class="card-body pt-2 pb-2">
                            <select class="form-control">
                                <option value="">Select subject Name</option>
                                <option value="english">English</option>
                                <option value="hindi">Hindi</option>
                                <option value="math">Math</option>
                            </select>

                            <!-- English -->

                            <div class="table-responsive subj english mt-1 p-2">
                                <label for="select_dob">English</label>
                                <table id="example1" class="table table-bordered table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th>Exam Name</th>
                                            <th>Marks</th>
                                            <th>Percentage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>[Exam Name]</td>
                                            <td>[Marks]</td>
                                            <td><span class="badge badge-info"> 90%
                                                </span></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <!-- ./English -->

                            <!-- Hindi -->

                            <div class="table-responsive subj hindi mt-1 p-2">
                                <label for="select_dob">Hindi</label>
                                <table id="example2" class="table table-bordered table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th>Exam Name</th>
                                            <th>Marks</th>
                                            <th>Percentage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>[Exam Name]</td>
                                            <td>[Marks]</td>
                                            <td><span class="badge badge-info"> 90%
                                                </span></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <!-- ./Hindi -->

                        </div>

                    </div>
                    <!-- /.Profile-Performance card -->
                </div>
    </section>
    <!-- ./Section-Content -->
    <!-- All Modal Open --->
    <!-- ./All Modal Close -->
</div>
<!-- ./Content Wrapper -->

<!-- Examination Extra Content -->
<script>
    $(document).ready(function() {
        $("select").change(function() {
            $(this).find("option:selected").each(function() {
                var optionValue = $(this).attr("value");
                if (optionValue) {
                    $(".subj").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else {
                    $(".subj").hide();
                }
            });
        }).change();
    });
</script>
<script>
    $(function() {
        $("#example2").DataTable({
            "responsive": true,
            "autoWidth": false,
            "ordering": true,
        });
    });
</script>
<!-- ./Examination Extra Content -->
@endsection