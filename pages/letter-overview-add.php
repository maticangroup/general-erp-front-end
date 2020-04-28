<!-- Accordion Css -->
<link href="/assets/plugins/accordion/accordion.css" rel="stylesheet"/>
<!-- WYSIWYG Editor css -->
<link href="../assets/plugins/wysiwyag/richtext.min.css" rel="stylesheet"/>
<!--Page Header-->
<div class="mb-5">
    <div class="page-header  mb-0">
        <h4 class="page-title">Letter Overview</h4>
        <div class="row">
            <div class="col-12">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-modal"><i
                            class="fas fa-play"></i> Ready to use Letter
                </button>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add-modal"><i
                            class="fas  fa-plus"></i></button>
            </div>
        </div>
    </div>
</div>
<!--page header end-->
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive ">
                    <table id="example-2" class="table table-striped table-bordered nowrap">
                        <thead class="bg-primary">
                        <tr>
                            <th class="wd-15p border-bottom-0 text-center">Title</th>
                            <th class="wd-15p border-bottom-0 text-center">Type</th>
                            <th class="wd-10p border-bottom-0 text-center">Send Date</th>
                            <th class="wd-15p border-bottom-0 text-center">From</th>
                            <th class="wd-20p border-bottom-0 text-center">To</th>
                            <th class="wd-25p border-bottom-0 text-center">Priority</th>
                            <th class="wd-25p border-bottom-0 text-center">Tracking Status</th>
                            <th class="wd-25p border-bottom-0 text-center">Options</th>

                        </tr>
                        </thead>
                        <tbody class="text-center">
                        <tr>
                            <td>Catering Request</td>
                            <td class="text-center">Instant</td>
                            <td class="text-center">12 February 2020</td>
                            <td class="text-center">Somaieh Gholami</td>
                            <td class="text-center">Kosar Naiemi</td>
                            <td class="text-center">A</td>
                            <td class="text-center">Seen</td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="/letter-view" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Tablet request</td>
                            <td class="text-center">Instant</td>
                            <td class="text-center">29 July 2020</td>
                            <td class="text-center">Meelad Rezaee</td>
                            <td class="text-center">Mahdi Alavi</td>
                            <td class="text-center">C</td>
                            <td class="text-center">Delivered</td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="/letter-view" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>salary increase</td>
                            <td class="text-center">Normal</td>
                            <td class="text-center">08 February 2018</td>
                            <td class="text-center">Hafez Asadi</td>
                            <td class="text-center">Saba Nouri</td>
                            <td class="text-center">A</td>
                            <td class="text-center">Answered</td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="/letter-view" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Deposit Bonus</td>
                            <td class="text-center">Instant</td>
                            <td class="text-center">23 January 2015</td>
                            <td class="text-center">Ali Azimi</td>
                            <td class="text-center">Shahla Arasteh</td>
                            <td class="text-center">B</td>
                            <td class="text-center">Seen</td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="/letter-view" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>employee recruitment</td>
                            <td class="text-center">Normal</td>
                            <td class="text-center">12 June 2021</td>
                            <td class="text-center">Ahmad Akbari</td>
                            <td class="text-center">Nasir Bashir</td>
                            <td class="text-center">B</td>
                            <td class="text-center">Delivered</td>
                            <td class="text-center">
                                <a class="icon" href="javascript:void(0)"></a>
                                <a href="/letter-view" class="btn btn-dark btn-sm"><i
                                            class="fas fa-eye"></i> View</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- table-wrapper -->
        </div>
        <!-- section-wrapper -->
    </div>
</div>

<!-- Message Modal -->
<div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="example-Modal3">New Letter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-xl-12">
                        <div class="card mb-0">
                            <div class="panel panel-primary ">
                                <div class="  border-0">
                                    <div class="tabs-menu ">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs">
                                            <li class="">
                                                <a href="#tab1" class="active font-weight-bold"
                                                   data-toggle="tab">Basic Info</a>
                                            </li>
                                            <li><a href="#tab2" class="font-weight-bold" data-toggle="tab">Letter
                                                    Text</a>
                                            </li>
                                            <li><a href="#tab3" class="font-weight-bold" data-toggle="tab">Relation</a>
                                            </li>
                                            <li><a href="#tab4" class="font-weight-bold"
                                                   data-toggle="tab">Scheduling</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body  border-left-0 border-right-0 border-bottom-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active " id="tab1">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group  clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="type">Language :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control">

                                                                    <option>Persian</option>
                                                                    <option>Turkey</option>
                                                                    <option>English</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="title">Title :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <input class="form-control required" id="title"
                                                                       type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group  clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold">Type
                                                                    :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control">
                                                                    <option>Instant</option>
                                                                    <option>Normal</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group  clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold">Priority
                                                                    :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control">
                                                                    <option>A</option>
                                                                    <option>B</option>
                                                                    <option>C</option>
                                                                    <option>D</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="title">From :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <input class="form-control required" id="title"
                                                                       type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold">To
                                                                    :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <!-- Accordion begin -->
                                                                <ul class="demo-accordion accordionjs m-0"
                                                                    data-active-index="false">
                                                                    <!-- Section 1 -->
                                                                    <li>
                                                                        <div><h3 id="">Customer</h3></div>
                                                                        <div>
                                                                        </div>
                                                                    </li>
                                                                    <!-- Section 2 -->
                                                                    <li>
                                                                        <div><h3>Employee</h3></div>
                                                                        <div>

                                                                        </div>
                                                                    </li>
                                                                    <!-- Section 3 -->
                                                                    <li>
                                                                        <div><h3>Branch</h3></div>
                                                                        <div>
                                                                            <!-- Your text here. For this demo, the content is generated automatically. -->
                                                                        </div>
                                                                    </li>
                                                                    <!-- Section 4 -->
                                                                    <li>
                                                                        <div><h3>Companies</h3></div>
                                                                        <div>
                                                                            <!-- Your text here. For this demo, the content is generated automatically. -->
                                                                        </div>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label class="control-label form-label font-weight-bold"
                                                           for="type">Share letter with :</label>
                                                    <div class="row mt-5">
                                                        <div class="col-md-12 col-lg-12">
                                                            <div class="table-responsive ">
                                                                <table class="table card-table table-vcenter text-nowrap table-primary border">
                                                                    <thead class="bg-primary text-white border-dark">
                                                                    <tr>
                                                                        <th class="text-white">Name</th>
                                                                        <th class="text-white text-center">Unit</th>
                                                                        <th class="text-white text-center">Role</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th scope="row">John Taromi</th>
                                                                        <td class="text-center">
                                                                            TQM
                                                                        </td>
                                                                        <td class="text-center">
                                                                            HR
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Mehdi Yegane</th>
                                                                        <td class="text-center">
                                                                            Finance
                                                                        </td>
                                                                        <td class="text-center">
                                                                            Credit analyst
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Milad Ahmadi</th>
                                                                        <td class="text-center">
                                                                            IT
                                                                        </td>
                                                                        <td class="text-center">
                                                                            Content manager
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <div class="row m-1">
                                                <textarea class="content " name="example"></textarea>

                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-lg-3">
                                                    <div class="form-label">Attachment :</div>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="form-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input"
                                                                   name="example-file-input-custom">
                                                            <label class="custom-file-label">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab3">
                                            <div class="row mt-3">
                                                <div class="col-12">
                                                    <div class="form-group clearfix">
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="relation">Related To </label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <!-- Accordion begin -->
                                                                <ul class="demo-accordion accordionjs m-0"
                                                                    data-active-index="false">
                                                                    <!-- Section 1 -->
                                                                    <li>
                                                                        <div><h3 id="">Deal</h3></div>
                                                                        <div>
                                                                            <div class="form-group ">
                                                                                <select class="form-control select2-show-search "
                                                                                        id="relation"
                                                                                        data-placeholder="Choose one">
                                                                                    <option value="p1">Deal 1</option>
                                                                                    <option value="p2">Deal 2</option>
                                                                                    <option value="p3">Deal 3</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <!-- Section 2 -->
                                                                    <li>
                                                                        <div><h3>Project</h3></div>
                                                                        <div>
                                                                            <!-- Your text here. For this demo, the content is generated automatically. -->
                                                                        </div>
                                                                    </li>
                                                                    <!-- Section 3 -->
                                                                    <li>
                                                                        <div><h3>Organization</h3></div>
                                                                        <div>
                                                                            <!-- Your text here. For this demo, the content is generated automatically. -->
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix ">
                                                        <div class="row mt-3">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="DeadlineDate">Date :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="far fa-calendar-check tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control required"
                                                                           id="DeadlineDate" name="DeadlineDate"
                                                                           type="date">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row mt-3">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="HoldDate">Time :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="wd-150 mg-b-30">
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <i class="fas fa-clock tx-16 lh-0 op-6"></i>
                                                                            </div>
                                                                        </div><!-- input-group-prepend -->
                                                                        <input class="form-control" id="tpBasic"
                                                                               placeholder="Set time" type="text">
                                                                    </div>
                                                                </div><!-- wd-150 -->

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-2 mb-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <div class="card border-success ">
                                    <div class="card-body text-center pt-3 ">
                                        <a href="#">
                                            <span class="avatar avatar-xl brround cover-image m-2"
                                                  data-image-src="../assets/images/photos/pro10.jpg"
                                                  style="background: url(&quot;../assets/images/photos/pro9.jpg&quot;) center center;">
                                                <span class="avatar-status bg-green"></span>
                                            </span>
                                        </a>
                                        <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">Mojgan Tabesh</a>
                                        </h5>
                                        <span>Person Position</span>
                                        <div>
                                            <span class="badge badge-default">manager</span>
                                        </div>
                                        <div class="mt-4">

                                            <button href="#"
                                                    class="btn-pill  btn-outline-success btn-sm font-weight-bold">
                                                <i class="fas fa-phone"></i></button>
                                            <button href="#"
                                                    class="btn-pill  btn-outline-warning btn-sm font-weight-bold">
                                                <i class="fas fa-envelope"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <a href="#" class="fas fa-remove text-danger"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card border-warning ">
                                    <div class="card-body text-center pt-3 ">
                                        <a href="#">
                                            <span class="avatar avatar-xl brround cover-image m-2"
                                                  data-image-src="../assets/images/photos/pro14.jpg"
                                                  style="background: url(&quot;../assets/images/photos/pro9.jpg&quot;) center center;">
                                                <span class="avatar-status bg-green"></span>
                                            </span>
                                        </a>
                                        <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">John Taromi</a></h5>
                                        <span>Person Position</span>
                                        <div>
                                            <span class="badge badge-default">supervisor</span>
                                        </div>
                                        <div class="mt-4">

                                            <button href="#"
                                                    class="btn-pill  btn-outline-success btn-sm font-weight-bold">
                                                <i class="fas fa-phone"></i></button>
                                            <button href="#"
                                                    class="btn-pill  btn-outline-warning btn-sm font-weight-bold">
                                                <i class="fas fa-envelope"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <a href="#" class="fas fa-remove text-danger"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card border-secondary ">
                                    <div class="card-body text-center pt-3 ">
                                        <a href="#">
                                            <span class="avatar avatar-xl brround cover-image m-2"
                                                  data-image-src="../assets/images/photos/pro11.jpg"
                                                  style="background: url(&quot;../assets/images/photos/pro9.jpg&quot;) center center;">
                                                <span class="avatar-status bg-green"></span>
                                            </span>
                                        </a>
                                        <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">Asal Nasirtash</a>
                                        </h5>
                                        <span>Person Position</span>
                                        <div>
                                            <span class="badge badge-default">designer</span>
                                        </div>
                                        <div class="mt-4">

                                            <button href="#"
                                                    class="btn-pill  btn-outline-success btn-sm font-weight-bold">
                                                <i class="fas fa-phone"></i></button>
                                            <button href="#"
                                                    class="btn-pill  btn-outline-warning btn-sm font-weight-bold">
                                                <i class="fas fa-envelope"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <a href="#" class="fas fa-remove text-danger"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card border-info">
                                    <div class="card-body text-center pt-3 ">
                                        <a href="#">
                                            <span class="avatar avatar-xl brround cover-image m-2"
                                                  data-image-src="../assets/images/photos/pro7.jpg"
                                                  style="background: url(&quot;../assets/images/photos/pro9.jpg&quot;) center center;">
                                                <span class="avatar-status bg-green"></span>
                                            </span>
                                        </a>
                                        <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">Mehdi Yegane</a>
                                        </h5>
                                        <span>Person Position</span>
                                        <div>
                                            <span class="badge badge-default">cameraman</span>
                                        </div>
                                        <div class="mt-4">

                                            <button href="#"
                                                    class="btn-pill  btn-outline-success btn-sm font-weight-bold">
                                                <i class="fas fa-phone"></i></button>
                                            <button href="#"
                                                    class="btn-pill  btn-outline-warning btn-sm font-weight-bold">
                                                <i class="fas fa-envelope"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <a href="#" class="fas fa-remove text-danger"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary"><i class="fas fa-check"></i>
                    Save
                </button>
            </div>
        </div>
    </div>
</div>


<?php
$scripts = [
    '/assets/plugins/accordion/accordion.min.js',
    '/assets/plugins/accordion/accor.js',
    '/assets/plugins/multipleselect/multiple-select.js',
    '/assets/plugins/multipleselect/multi-select.js',
    '/assets/plugins/input-mask/jquery.maskedinput.js',
    '/assets/plugins/wysiwyag/jquery.richtext.js',
    '/assets/plugins/wysiwyag/richText1.js',
];
?>

