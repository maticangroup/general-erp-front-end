
<!--Page Header-->
<div class="mb-5">
    <div class="page-header  mb-0">
        <h4 class="page-title">Poll View</h4>
        <div class="float-right ml-auto">
            <a class="icon" href="javascript:void(0)"></a>
            <a href="javascript:void(0)" data-toggle="modal" data-target="#edit-modal" class="btn btn-primary"><i class="fas fa-pen"></i> Edit</a>
        </div>
        <div class="float-right ml-1">
            <a href="#" class="btn btn-primary bg-red"><i class="fas fa-trash mr-1"></i>Delete</a>
        </div>
    </div>
</div>
<!--page header-->

<div class="row">
    <div class="col-xl-4 col-lg-12 col-md-12 ">
        <div class="card">
            <div class="card-header" >
                <h3 class="card-title">Questionnaire</h3>
                <div class="card-options d-none d-sm-block mr-1">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#questionAddModal"><i class="fas  fa-plus"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card m-0">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Question <span class="form-label-small">00/100</span></label>
                                    <textarea class="form-control" name="example-textarea-input" rows="6"
                                              placeholder="text here.." spellcheck="false"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card mb-0 mt-1">
                            <div class="card-header">
                                <h3 class="card-title text-muted">OPTIONS</h3>
                                <div class="card-options d-none d-sm-block mr-1">
                                    <a href="#" class="btn btn-outline-secondary btn-sm"><i
                                            class="fas fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Option 1</label>
                                    <input type="text" class="form-control" name="example-text-input">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Option 2</label>
                                    <input type="text" class="form-control" name="example-text-input">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-5 float-none mx-auto">
                <button type="button" class="btn btn-outline-primary btn-sm btn-block"><i class="fas fa-check"></i> Save</button>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12">
                <div class="card ">
                    <div class="card-body text-center pt-3 ">
                        <a href="#">
                <span class="avatar avatar-xl brround cover-image m-2" data-image-src="../assets/images/photos/pro18.jpg">
                    <span class="avatar-status bg-red"></span>
                </span>
                        </a>
                        <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">Saba Nouri</a></h5>
                        <span>Creator</span>
                        <div class="mt-4">
                            <button href="#" class="btn-pill  btn-outline-dark btn-sm font-weight-bold "><i class="fas fa-eye"></i></button>
                            <button href="#" class="btn-pill  btn-outline-success btn-sm font-weight-bold"><i class="fas fa-phone"></i></button>
                            <button href="#" class="btn-pill  btn-outline-warning btn-sm font-weight-bold"><i class="fas fa-envelope"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="plan-card text-center">
                            <i class="fas fa-users plan-icon text-primary"></i>
                            <h6 class="text-drak text-uppercase mt-2">Total Participants</h6>
                            <h2 class="mb-2">7</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header ">
                <div class="card-title font-weight-bold">
                  Poll  Info
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table card-table table-vcenter table-hover">

                        <tbody>
                        <tr>
                            <th scope="row">Creator :</th>
                            <td>Saba Nouri</td>
                        </tr>
                        <tr>
                            <th scope="row">Date :</th>
                            <td>12/8/97</td>
                        </tr>
                        <tr>
                            <th scope="row">Poll For :</th>
                            <td>Project</td>
                        </tr>
                        <tr>
                            <th scope="row">Number of participants :</th>
                            <td>7</td>
                        </tr>
                        <tr>
                            <th scope="row">Relation :</th>
                            <td>Project FH3400</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- table-responsive -->

            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">Recent Activity</h3>
            </div>
            <div class="card-body">
                <div class="activity">
                    <img src="../assets/images/photos/pro18.jpg" alt="" class="img-activity">
                    <div class="time-activity">
                        <div class="item-activity">
                            <p class="mb-0"><b>Akram Khoshpoosh</b> Add a new projects <b> <br>Project kick off</b></p>
                            <small class="text-info">30 mins ago</small>
                        </div>
                    </div>
                    <img src="../assets/images/photos/pro10.jpg" alt="" class="img-activity">
                    <div class="time-activity">
                        <div class="item-activity">
                            <p class="mb-0"><b>Saba Nouri</b> Add a new projects <b>Design New Films</b></p>
                            <small class="text-danger">1 days ago</small>
                        </div>
                    </div>
                    <img src="../assets/images/photos/pro8.jpg" alt="" class="img-activity">
                    <div class="time-activity">
                        <div class="item-activity">
                            <p class="mb-0"><b>Jasem Jabari</b> Add a new projects <b>Upload Modified Photos</b></p>
                            <small class="text-warning">3 days ago</small>
                        </div>
                    </div>
                    <img src="../assets/images/photos/pro11.jpg" alt="" class="img-activity">
                    <div class="time-activity mb-0">
                        <div class="item-activity mb-0">
                            <p class="mb-0"><b>Elnaz Shakerdoost</b><b> Hold The Coordination Meeting At Room Number 6</b></p>
                            <small class="text-success">5 days ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8 col-lg-12 col-md-12 ">
        <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Question 1</h3>
                        <div class="card-options d-none d-sm-block">
                            <a href="#" class="btn btn-outline-secondary btn-sm" data-target="#modal_save_as_template"
                               data-toggle="modal"><i class="fas fa-pen"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="panel panel-primary">
                            <div class="form-group ">
                                <h5 class="mb-3">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elitm?
                                </h5>
                                <div class="custom-controls-stacked">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option1" checked>
                                        <span class="custom-control-label text-muted font-weight-bold">Option 1</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option2">
                                        <span class="custom-control-label text-muted font-weight-bold">Option 2</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option3" >
                                        <span class="custom-control-label text-muted font-weight-bold">Option 3</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option4">
                                        <span class="custom-control-label text-muted font-weight-bold">Option 4</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Question 3</h3>
                        <div class="card-options d-none d-sm-block">
                            <a href="#" class="btn btn-outline-secondary btn-sm" data-target="#modal_save_as_template"
                               data-toggle="modal"><i class="fas fa-pen"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="panel panel-primary">
                            <div class="form-group ">
                                <h5 class="mb-3">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elitm?
                                </h5>
                                <div class="custom-controls-stacked">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option1" checked>
                                        <span class="custom-control-label text-muted font-weight-bold">Option 1</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option2">
                                        <span class="custom-control-label text-muted font-weight-bold">Option 2</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option3" >
                                        <span class="custom-control-label text-muted font-weight-bold">Option 3</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option4">
                                        <span class="custom-control-label text-muted font-weight-bold">Option 4</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Question 2</h3>
                        <div class="card-options d-none d-sm-block">
                            <a href="#" class="btn btn-outline-secondary btn-sm" data-target="#modal_save_as_template"
                               data-toggle="modal"><i class="fas fa-pen"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="panel panel-primary">
                            <div class="form-group ">
                                <h5 class="mb-3">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elitm?
                                </h5>
                                <div class="custom-controls-stacked">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option1" checked>
                                        <span class="custom-control-label text-muted font-weight-bold">Option 1</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option2">
                                        <span class="custom-control-label text-muted font-weight-bold">Option 2</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option3" >
                                        <span class="custom-control-label text-muted font-weight-bold">Option 3</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option4">
                                        <span class="custom-control-label text-muted font-weight-bold">Option 4</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Question 4</h3>
                        <div class="card-options d-none d-sm-block">
                            <a href="#" class="btn btn-outline-secondary btn-sm" data-target="#modal_save_as_template"
                               data-toggle="modal"><i class="fas fa-pen"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="panel panel-primary">
                            <div class="form-group ">
                                <h5 class="mb-3">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elitm?
                                </h5>
                                <div class="custom-controls-stacked">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option1" checked>
                                        <span class="custom-control-label text-muted font-weight-bold">Option 1</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option2">
                                        <span class="custom-control-label text-muted font-weight-bold">Option 2</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option3" >
                                        <span class="custom-control-label text-muted font-weight-bold">Option 3</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios" value="option4">
                                        <span class="custom-control-label text-muted font-weight-bold">Option 4</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card ">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap ">
                                <thead class="bg-primary ">
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th class="text-center">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="avatar-group">
                                            <span class="avatar brround cover-image" data-image-src="../assets/images/photos/pro5.jpg"></span>
                                        </div>
                                    </td>
                                    <td class="text-sm font-weight-600">Ali Saburi</td>
                                    <td class="text-nowrap">Jan 13, 2019</td>
                                    <td>06:00 PM</td>
                                    <td class="text-center"><span class="status-icon bg-success "></span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="avatar-group">
                                            <span class="avatar brround cover-image" data-image-src="../assets/images/photos/pro18.jpg"></span>
                                        </div>
                                    </td>
                                    <td class="text-sm font-weight-600">Sheida Shamkhani</td>
                                    <td class="text-nowrap">-</td>
                                    <td>-</td>
                                    <td  class="text-center"><span class="status-icon bg-red"></span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="avatar-group">
                                            <span class="avatar brround cover-image" data-image-src="../assets/images/photos/pro1.jpg"></span>
                                        </div>
                                    </td>
                                    <td class="text-sm font-weight-600">Vida Rahmani</td>
                                    <td class="text-nowrap">Jan 8, 2019</td>
                                    <td>09:35 AM</td>
                                    <td class="text-center"><span class="status-icon bg-success"></span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="avatar-group">
                                            <span class="avatar brround cover-image" data-image-src="../assets/images/photos/pro13.jpg"></span>
                                        </div>
                                    </td>
                                    <td class="text-sm font-weight-600">Samaneh Rashid</td>
                                    <td class="text-nowrap">Jan 28, 2019</td>
                                    <td>11:00 AM</td>
                                    <td class="text-center"><span class="status-icon bg-success"></span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="avatar-group">
                                            <span class="avatar brround cover-image" data-image-src="../assets/images/photos/pro9.jpg"></span>
                                        </div>
                                    </td>
                                    <td class="text-sm font-weight-600">Sobhan Tafreshi</td>
                                    <td class="text-nowrap">-</td>
                                    <td>-</td>
                                    <td class="text-center"><span class="status-icon bg-red"></span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="avatar-group">
                                            <span class="avatar brround cover-image" data-image-src="../assets/images/photos/pro14.jpg"></span>
                                        </div>
                                    </td>
                                    <td class="text-sm font-weight-600">Bashir Babajanzadeh</td>
                                    <td class="text-nowrap">-</td>
                                    <td>-</td>
                                    <td class="text-center"><span class="status-icon bg-red"></span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="avatar-group">
                                            <span class="avatar brround cover-image" data-image-src="../assets/images/photos/pro8.jpg"></span>
                                        </div>
                                    </td>
                                    <td class="text-sm font-weight-600">Samad Moghimi</td>
                                    <td class="text-nowrap">Feb 2, 2018</td>
                                    <td>09:00 AM</td>
                                    <td class="text-center"><span class="status-icon bg-success"></span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title font-weight-bold">Poll Result</h4>
            </div>
            <div class="card-body">
                <div id="highchart3"></div>
            </div>
        </div>
    </div>
</div>




<!--Modals-->
<div class="modal fade" id="questionAddModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="example-Modal3-1">Add Question</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                        <div class="col-12">
                            <div class="card m-0">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label">Question <span class="form-label-small">00/100</span></label>
                                        <textarea class="form-control" name="example-textarea-input" rows="6"
                                                  placeholder="text here.." spellcheck="false"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card mb-0 mt-1">
                                <div class="card-header">
                                    <h3 class="card-title text-muted">OPTIONS</h3>
                                    <div class="card-options d-none d-sm-block mr-1">
                                        <a href="#" class="btn btn-outline-secondary btn-sm"><i
                                                class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label">Option 1</label>
                                        <input type="text" class="form-control" name="example-text-input">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Option 2</label>
                                        <input type="text" class="form-control" name="example-text-input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary"><i class="fas fa-check"></i> Save</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="example-Modal3-1">New Team</h5>
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
                                            <li class=""><a href="#tab1" class="active font-weight-bold" data-toggle="tab">Basic Info</a></li>
                                            <li class=""><a href="#tab2" class=" font-weight-bold" data-toggle="tab">Participants</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body  border-left-0 border-right-0 border-bottom-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active " id="tab1">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="title">Topic :</label>
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
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="type">Poll for :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control">

                                                                    <option>Employee</option>
                                                                    <option>Customer</option>
                                                                    <option>Project</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="FromDate">Due Date </label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="far fa-calendar tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control fc-datepicker"
                                                                           id="FromDate"
                                                                           placeholder="MM/DD/YYYY"
                                                                           type="date">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="attendant">Relation :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <!-- Accordion begin -->
                                                                <ul class="demo-accordion accordionjs m-0"
                                                                    data-active-index="false">
                                                                    <!-- Section 1 -->
                                                                    <li>
                                                                        <div><h3>Employee</h3></div>
                                                                        <div>

                                                                        </div>
                                                                    </li>
                                                                    <!-- Section 2 -->
                                                                    <li>
                                                                        <div><h3>Unit</h3></div>
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
                                        <div class="tab-pane" id="tab2">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix">
                                                        <div class="row mt-3">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="attendant">Participants :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <!-- Accordion begin -->
                                                                <ul class="demo-accordion accordionjs m-0"
                                                                    data-active-index="false">
                                                                    <!-- Section 1 -->
                                                                    <li>
                                                                        <div><h3 id="">Customer</h3></div>
                                                                        <div>
                                                                            <div class="form-group ">
                                                                                <select class="form-control select2-show-search "
                                                                                        data-placeholder="Choose one">
                                                                                    <option value="p1">project 1
                                                                                    </option>
                                                                                    <option value="p2">project 2
                                                                                    </option>
                                                                                    <option value="p3">project 3
                                                                                    </option>
                                                                                    <option value="p4">project 4
                                                                                    </option>
                                                                                    <option value="p5">project 5
                                                                                    </option>
                                                                                </select>
                                                                            </div>
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
                                                    <div class="row mt-5">
                                                        <div class="col-md-12 col-lg-12">
                                                            <div class="table-responsive rounded-bottom">
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
                                                                        <th scope="row">Ehsan Rezvanian</th>
                                                                        <td class="text-center">
                                                                            TQM
                                                                        </td>
                                                                        <td class="text-center">
                                                                            HR
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Hossein Azimi</th>
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
                                                                    <tr>
                                                                        <th scope="row">Amirhossein Hajighorbani</th>
                                                                        <td class="text-center">
                                                                            Film
                                                                        </td>
                                                                        <td class="text-center">
                                                                            Cameraman
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card mt-5 mb-0">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-3 ">
                                                                    <div class="card border-success text-center font-weight-bold text-muted">Meeting leader</div>
                                                                </div>
                                                                <div class="col-3 ">
                                                                    <div class="card border-warning text-center font-weight-bold text-muted">Employee</div>
                                                                </div>
                                                                <div class="col-3 ">
                                                                    <div class="card border-secondary text-center font-weight-bold text-muted">Guest</div>
                                                                </div>
                                                                <div class="col-3 ">
                                                                    <div class="card border-info text-center font-weight-bold text-muted">Vendor</div>
                                                                </div>
                                                                <div class="col-3">
                                                                    <div class="card border-success ">
                                                                        <div class="card-body text-center pt-3 ">
                                                                            <a href="#">
                                            <span class="avatar avatar-xl brround cover-image m-2"
                                                  data-image-src="../assets/images/photos/pro10.jpg" style="background: url(&quot;../assets/images/photos/pro9.jpg&quot;) center center;">
                                                <span class="avatar-status bg-green"></span>
                                            </span>
                                                                            </a>
                                                                            <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">Mojgan Tabesh</a></h5>
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
                                                                            <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">Abbas
                                                                                    Ghaderi</a></h5>
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
                                                                            <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">Asal Nasirtash</a></h5>
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
                                                                            <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">Hossein Azimi</a></h5>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary"><i class="fas fa-check"></i> Save</button>
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
    '/assets/plugins/highcharts/highcharts.js',
    '/assets/plugins/highcharts/highcharts-3d.js',
    '/assets/plugins/highcharts/exporting.js',
    '/assets/plugins/highcharts/export-data.js',
    '/assets/plugins/highcharts/histogram-bellcurve.js',
    '/assets/plugins/chart/chart.bundle.js',
    '/assets/js/chart.js',
    '/assets/js/highcharts.js',
];
?>