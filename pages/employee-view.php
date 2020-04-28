<!--Page Header-->
<div class="mb-5">
    <div class="page-header  mb-0">
        <h4 class="page-title">Employee View</h4>
        <div class="float-right ml-auto">
            <a class="icon" href="javascript:void(0)"></a>
            <a href="javascript:void(0)" data-toggle="modal" data-target="#edit-modal" class="btn btn-primary"><i
                        class="fas fa-pen"></i> Edit</a>
        </div>
        <div class="float-right ml-1">
            <a href="#" class="btn btn-primary bg-red"><i class="fas fa-trash mr-1"></i>Delete</a>
        </div>
    </div>
</div>
<!--page header-->


<div class="row">
    <div class="col-xl-4 col-lg-8 col-md-12">
        <div class="card ">
            <div class="card-body text-center pt-3 ">
                <a href="#">
                    <span class="avatar avatar-xl brround cover-image m-2"
                          data-image-src="../assets/images/photos/pro7.jpg">
                        <span class="avatar-status bg-red"></span>
                    </span>
                </a>
                <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">Amir Sadat</a></h5>
                <span>Employee</span>
                <div>
                    <span class="badge badge-default">designer</span>
                </div>
                <div class="mt-4">
                    <button href="#" class="btn-pill  btn-outline-dark btn-sm font-weight-bold "><i
                                class="fas fa-eye"></i></button>
                    <button href="#" class="btn-pill  btn-outline-success btn-sm font-weight-bold"><i
                                class="fas fa-phone"></i></button>
                    <button href="#" class="btn-pill  btn-outline-warning btn-sm font-weight-bold"><i
                                class="fas fa-envelope"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8 col-lg-12 col-md-12">
        <div class="mini-stat clearfix bg-primary rounded">
            <span class="mini-stat-icon"><i class="fas fa-brain text-primary"></i></span>
            <div class="mini-stat-info text-white">
                <span>Mentalities</span>
                <div>
                    <a class="btn btn-xs fs-10 btn-bold btn-outline-secondary mr-1" href="#">Happy</a>
                    <a class="btn btn-xs fs-10 btn-bold btn-outline-secondary mr-1" href="#">Social</a>
                    <a class="btn btn-xs fs-10 btn-bold btn-outline-secondary mr-1" href="#">Dreamer</a>
                    <a class="btn btn-xs fs-10 btn-bold btn-outline-secondary mr-1" href="#">Lazy</a>
                    <a class="btn btn-xs fs-10 btn-bold btn-outline-secondary mr-1" href="#">Follower</a>
                    <a class="btn btn-xs fs-10 btn-bold btn-outline-secondary mr-1" href="#">Business</a>
                    <a class="btn btn-xs fs-10 btn-bold btn-outline-secondary mr-1" href="#">Envy</a>
                    <a class="btn btn-xs fs-10 btn-bold btn-outline-secondary mr-1" href="#">Fear</a>
                    <a class="btn btn-xs fs-10 btn-bold btn-outline-secondary mr-1" href="#">Growth</a>
                </div>
            </div>
        </div>
        <div class="mini-stat clearfix bg-primary rounded">
            <span class="mini-stat-icon"><i class="fas fa-filter text-primary"></i></span>
            <div class="mini-stat-info text-white">
                <span>Skills</span>
                <div>
                    <a class="btn btn-xs fs-10 btn-bold btn-outline-info mr-1" href="#">Good judgment</a>
                    <a class="btn btn-xs fs-10 btn-bold btn-outline-info mr-1" href="#">Leadership</a>
                    <a class="btn btn-xs fs-10 btn-bold btn-outline-info mr-1" href="#">Awareness of body language</a>
                    <a class="btn btn-xs fs-10 btn-bold btn-outline-info mr-1" href="#">Negotiation</a>
                    <a class="btn btn-xs fs-10 btn-bold btn-outline-info mr-1" href="#">Persuade others</a>
                    <a class="btn btn-xs fs-10 btn-bold btn-outline-info mr-1" href="#">Flexibility</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-4 col-lg-12 col-md-12 ">
        <div class="card">
            <div class="card-body">
                <div class="card-box tilebox-one">
                    <i class="fas fa-briefcase text-primary float-right" aria-hidden="true"></i>
                    <h6 class="text-drak text-uppercase mt-0">Total Tasks</h6>
                    <h3 class="m-b-20">459</h3>
                    <span class="badge badge-success">+2.5% </span> <span class="text-muted">From previous period</span>
                </div>
            </div>
        </div>
        <div class="card border-success">
            <div class="card-body">
                <div class="card-box tilebox-one">
                    <i class="fas fa-check text-primary float-right text-green" aria-hidden="true"></i>
                    <h6 class="text-muted text-uppercase mt-0">Accepted by TQM</h6>
                    <h3 class="m-b-20">376 task</h3>
                </div>
            </div>
        </div>
        <div class="card border-danger">
            <div class="card-body">
                <div class="card-box tilebox-one">
                    <i class="fas fa-times text-primary float-right text-red" aria-hidden="true"></i>
                    <h6 class="text-muted text-uppercase mt-0">Rejected by TQM</h6>
                    <h3 class="m-b-20">83 task</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8 col-lg-12 col-md-12">
        <div class="card overflow-hidden">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">Efficiency per month</h3>
            </div>
            <div class="card-body">
                <div id="social" class="overflow-hidden chart-dropshadow"></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-xl-12">
        <div class="card">
            <div class="card-body p-5">
                <div class="panel panel-primary">
                    <div class="  p-3 ">
                        <div class="tabs-menu ">
                            <!-- Tabs -->
                            <ul class="nav panel-tabs">
                                <li><a href="#tab11" class="active font-weight-bold" data-toggle="tab">Task</a></li>
                                <li><a href="#tab22" class=" font-weight-bold" data-toggle="tab">Call</a></li>
                                <li><a href="#tab33" class="font-weight-bold" data-toggle="tab">Meeting</a></li>
                                <li><a href="#tab44" class="font-weight-bold" data-toggle="tab">Project</a></li>
                                <li><a href="#tab55" class="font-weight-bold" data-toggle="tab">Deal</a></li>
                                <li><a href="#tab66" class="font-weight-bold" data-toggle="tab">Time off request</a>
                                </li>
                                <li><a href="#tab77" class="font-weight-bold" data-toggle="tab">Poll</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body  tabs-menu-body border-0 ">
                        <div class="tab-content">
                            <div class="tab-pane active " id="tab11">
                                <div class="card  mb-0">
                                    <div class="card-body">
                                        <div class="table-responsive ">
                                            <table id="example-2" class="table table-striped table-bordered nowrap">
                                                <thead class="bg-primary text-center">
                                                <tr class="text-center">
                                                    <th class="wd-15p border-bottom-0 text-center">Title</th>
                                                    <th class="wd-15p border-bottom-0 text-center">Type</th>
                                                    <th class="wd-10p border-bottom-0 text-center">Requester</th>
                                                    <th class="wd-15p border-bottom-0 text-center">Owner</th>
                                                    <th class="wd-20p border-bottom-0 text-center">From Date</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Deadline</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Estimation Time</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Priority</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Progress</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Status</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="text-center">
                                                    <td class="text-center">Title 1</td>
                                                    <td class="text-center">Type 1</td>
                                                    <td class="text-center">Mehdi Yegane</td>
                                                    <td class="text-center">Nikoo Gharib</td>
                                                    <td class="text-center">12 December 2019</td>
                                                    <td class="text-center">04 February 2020</td>
                                                    <td class="text-center">8h 45m</td>
                                                    <td class="text-center"><span
                                                                class="badge badge-warning">Medium</span></td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-info w-0 font-weight-bold ">0%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">Not Planned</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascriptvoid(0)"></a>
                                                        <a href="/task-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascriptvoid(0)"></a>
                                                        <a href="javascriptvoid(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">Title 2</td>
                                                    <td class="text-center">Type 2</td>
                                                    <td class="text-center">John Taromi</td>
                                                    <td class="text-center">Yasaman Taghvaie</td>
                                                    <td class="text-center">12 December 2019</td>
                                                    <td class="text-center">04 February 2020</td>
                                                    <td class="text-center">4h</td>
                                                    <td class="text-center"><span class="badge badge-success">Low</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-info w-5 font-weight-bold ">5%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">Accepted</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascriptvoid(0)"></a>
                                                        <a href="/task-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascriptvoid(0)"></a>
                                                        <a href="javascriptvoid(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">Title 3</td>
                                                    <td class="text-center">Type 3</td>
                                                    <td class="text-center">Mehdi Yegane</td>
                                                    <td class="text-center">Mahdi Ardalan</td>
                                                    <td class="text-center">12 December 2019</td>
                                                    <td class="text-center">04 February 2020</td>
                                                    <td class="text-center">16h 30m</td>
                                                    <td class="text-center">
                                                        <span class="badge badge-danger">High</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-info w-45 font-weight-bold ">45%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">Rejected</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascriptvoid(0)"></a>
                                                        <a href="/task-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascriptvoid(0)"></a>
                                                        <a href="javascriptvoid(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">Title 4</td>
                                                    <td class="text-center">Type 4</td>
                                                    <td class="text-center">Mehdi Yegane</td>
                                                    <td class="text-center">Shamsi Saberi</td>
                                                    <td class="text-center">12 December 2019</td>
                                                    <td class="text-center">04 February 2020</td>
                                                    <td class="text-center">7h 15m</td>
                                                    <td class="text-center"><span
                                                                class="badge badge-warning">Medium</span></td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-info w-100 font-weight-bold ">
                                                                100%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">Finished</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascriptvoid(0)"></a>
                                                        <a href="/task-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascriptvoid(0)"></a>
                                                        <a href="javascriptvoid(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">Title 5</td>
                                                    <td class="text-center">Type 5</td>
                                                    <td class="text-center">John Taromi</td>
                                                    <td class="text-center">Motahareh Moalem</td>
                                                    <td class="text-center">12 December 2019</td>
                                                    <td class="text-center">04 February 2020</td>
                                                    <td class="text-center">10h</td>
                                                    <td class="text-center"><span class="badge badge-danger">High</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-info w-25 font-weight-bold ">25%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">Paused</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascriptvoid(0)"></a>
                                                        <a href="/task-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascriptvoid(0)"></a>
                                                        <a href="javascriptvoid(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- table-wrapper -->
                                </div>
                            </div>
                            <div class="tab-pane" id="tab22">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <div class="table-responsive ">
                                            <table id="example-8" class="table table-striped table-bordered nowrap">
                                                <thead class="bg-primary text-center">
                                                <tr class="text-center">
                                                    <th class="wd-15p border-bottom-0 text-center">Topic</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Call Method</th>
                                                    <th class="wd-25p border-bottom-0 text-center">From</th>
                                                    <th class="wd-25p border-bottom-0 text-center">To</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Date</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Time</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Result
                                                    </th>
                                                    <th class="wd-25p border-bottom-0 text-center">Status</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="text-center">
                                                    <td class="text-center">Mr. Azimi's Deal</td>
                                                    <td class="text-center">Telephone</td>
                                                    <td class="text-center">Ghobad abbasi</td>
                                                    <td class="text-center">Samir Nasir</td>
                                                    <td class="text-center">12/3/97</td>
                                                    <td class="text-center">11:04</td>
                                                    <td class="text-center">Positive</td>
                                                    <td class="text-center">Done</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#view-modal" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">Mr. Azimi's Deal</td>
                                                    <td class="text-center">Telephone</td>
                                                    <td class="text-center">Ghobad abbasi</td>
                                                    <td class="text-center">Samir Nasir</td>
                                                    <td class="text-center">12/3/97</td>
                                                    <td class="text-center">11:04</td>
                                                    <td class="text-center">-</td>
                                                    <td class="text-center">Waiting to be made</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-dot-circle"></i>Actions</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">Mr. Azimi's Deal</td>
                                                    <td class="text-center">Telephone</td>
                                                    <td class="text-center">Ghobad abbasi</td>
                                                    <td class="text-center">Samir Nasir</td>
                                                    <td class="text-center">12/3/97</td>
                                                    <td class="text-center">11:04</td>
                                                    <td class="text-center">Positive</td>
                                                    <td class="text-center">Done</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#view-modal" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">Mr. Azimi's Deal</td>
                                                    <td class="text-center">Telephone</td>
                                                    <td class="text-center">Ghobad abbasi</td>
                                                    <td class="text-center">Samir Nasir</td>
                                                    <td class="text-center">12/3/97</td>
                                                    <td class="text-center">11:04</td>
                                                    <td class="text-center">-</td>
                                                    <td class="text-center">Waiting to be made</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-dot-circle"></i>Actions</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">Mr. Azimi's Deal</td>
                                                    <td class="text-center">Telephone</td>
                                                    <td class="text-center">Ghobad abbasi</td>
                                                    <td class="text-center">Samir Nasir</td>
                                                    <td class="text-center">12/3/97</td>
                                                    <td class="text-center">11:04</td>
                                                    <td class="text-center">Positive</td>
                                                    <td class="text-center">Done</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#view-modal" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">Mr. Azimi's Deal</td>
                                                    <td class="text-center">Telephone</td>
                                                    <td class="text-center">Ghobad abbasi</td>
                                                    <td class="text-center">Samir Nasir</td>
                                                    <td class="text-center">12/3/97</td>
                                                    <td class="text-center">11:04</td>
                                                    <td class="text-center">-</td>
                                                    <td class="text-center">Waiting to be made</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-dot-circle"></i>Actions</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">Mr. Azimi's Deal</td>
                                                    <td class="text-center">Telephone</td>
                                                    <td class="text-center">Ghobad abbasi</td>
                                                    <td class="text-center">Samir Nasir</td>
                                                    <td class="text-center">12/3/97</td>
                                                    <td class="text-center">11:04</td>
                                                    <td class="text-center">Positive</td>
                                                    <td class="text-center">Done</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#view-modal" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">Mr. Azimi's Deal</td>
                                                    <td class="text-center">Telephone</td>
                                                    <td class="text-center">Ghobad abbasi</td>
                                                    <td class="text-center">Samir Nasir</td>
                                                    <td class="text-center">12/3/97</td>
                                                    <td class="text-center">11:04</td>
                                                    <td class="text-center">-</td>
                                                    <td class="text-center">Waiting to be made</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-dot-circle"></i>Action</a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- table-wrapper -->
                                </div>
                            </div>
                            <div class="tab-pane " id="tab33">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <div class="table-responsive ">
                                            <table id="example-3" class="table table-striped table-bordered">
                                                <thead class="bg-primary text-center">
                                                <tr class="text-center">
                                                    <th class="wd-15p border-bottom-0 text-center">Title</th>
                                                    <th class="wd-15p border-bottom-0 text-center">Type</th>
                                                    <th class="wd-10p border-bottom-0 text-center">Date</th>
                                                    <th class="wd-25p border-bottom-0 text-center">From time</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Duration Time</th>
                                                    <th class="wd-15p border-bottom-0 text-center">Meeting Leader</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Place</th>
                                                    <th class="border-bottom-0 text-center">Status</th>
                                                    <th class="border-bottom-0 text-center">Actions</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="text-center">
                                                    <td>Mr. Azimi's Deal</td>
                                                    <td>Client ordering advice</td>
                                                    <td>2/3/93</td>
                                                    <td>13:00</td>
                                                    <td>2 Hours</td>
                                                    <td>Mr. Azimi</td>
                                                    <td>Tehran, Enqelab Square</td>
                                                    <td>Not Planned</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/meeting-view"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#exampleModal3-2"
                                                           class="btn btn-primary btn-sm text-white"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>Mr. Ahmadi's Deal</td>
                                                    <td>Client ordering advice</td>
                                                    <td>6/4/97</td>
                                                    <td>15:00</td>
                                                    <td>1 Hours</td>
                                                    <td>Mr. Azimi</td>
                                                    <td>Tehran, Enqelab Square</td>
                                                    <td>Planned</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/meeting-view"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#exampleModal3-2"
                                                           class="btn btn-primary btn-sm text-white"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>Mr. Azimi's Deal</td>
                                                    <td>Client ordering advice</td>
                                                    <td>2/3/93</td>
                                                    <td>13:00</td>
                                                    <td>2 Hours</td>
                                                    <td>Mr. Azimi</td>
                                                    <td>Tehran, Enqelab Square</td>
                                                    <td>Not Planned</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/meeting-view"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#exampleModal3-2"
                                                           class="btn btn-primary btn-sm text-white"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>Mr. Ahmadi's Deal</td>
                                                    <td>Client ordering advice</td>
                                                    <td>6/4/97</td>
                                                    <td>15:00</td>
                                                    <td>1 Hours</td>
                                                    <td>Mr. Azimi</td>
                                                    <td>Tehran, Enqelab Square</td>
                                                    <td>Planned</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/meeting-view"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#exampleModal3-2"
                                                           class="btn btn-primary btn-sm text-white"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>Mr. Azimi's Deal</td>
                                                    <td>Client ordering advice</td>
                                                    <td>2/3/93</td>
                                                    <td>13:00</td>
                                                    <td>2 Hours</td>
                                                    <td>Mr. Azimi</td>
                                                    <td>Tehran, Enqelab Square</td>
                                                    <td>Not Planned</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/meeting-view"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#exampleModal3-2"
                                                           class="btn btn-primary btn-sm text-white"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>Mr. Ahmadi's Deal</td>
                                                    <td>Client ordering advice</td>
                                                    <td>6/4/97</td>
                                                    <td>15:00</td>
                                                    <td>1 Hours</td>
                                                    <td>Mr. Azimi</td>
                                                    <td>Tehran, Enqelab Square</td>
                                                    <td>Planned</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/meeting-view"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#exampleModal3-2"
                                                           class="btn btn-primary btn-sm text-white"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>Mr. Azimi's Deal</td>
                                                    <td>Client ordering advice</td>
                                                    <td>2/3/93</td>
                                                    <td>13:00</td>
                                                    <td>2 Hours</td>
                                                    <td>Mr. Azimi</td>
                                                    <td>Tehran, Enqelab Square</td>
                                                    <td>Not Planned</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/meeting-view"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#exampleModal3-2"
                                                           class="btn btn-primary btn-sm text-white"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>Mr. Ahmadi's Deal</td>
                                                    <td>Client ordering advice</td>
                                                    <td>6/4/97</td>
                                                    <td>15:00</td>
                                                    <td>1 Hours</td>
                                                    <td>Mr. Azimi</td>
                                                    <td>Tehran, Enqelab Square</td>
                                                    <td>Planned</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/meeting-view"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#exampleModal3-2"
                                                           class="btn btn-primary btn-sm text-white"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- table-wrapper -->
                                </div>
                            </div>
                            <div class="tab-pane " id="tab44">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <div class="table-responsive ">
                                            <table id="example-4" class="table table-striped table-bordered nowrap">
                                                <thead class="bg-primary text-center">
                                                <tr class="text-center">
                                                    <th class="wd-15p border-bottom-0 text-center">Name</th>
                                                    <th class="wd-15p border-bottom-0 text-center">Owner</th>
                                                    <th class="wd-10p border-bottom-0 text-center">Hold Date</th>
                                                    <th class="wd-10p border-bottom-0 text-center">Tags</th>
                                                    <th class="wd-15p border-bottom-0 text-center">Project Leader</th>
                                                    <th class="wd-15p border-bottom-0 text-center">Product Owner</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Current milestone
                                                    </th>
                                                    <th class="wd-20p border-bottom-0 text-center">Branch</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Progress</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Status</th>
                                                    <th class="border-bottom-0 text-center">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="text-center">
                                                    <td class="text-center">Portrait</td>
                                                    <td class="text-center">Mahdie Azizi</td>
                                                    <td class="text-center">12 February 2020</td>
                                                    <td class="text-center">formality</td>
                                                    <td class="text-center">Ali Hashemi</td>
                                                    <td class="text-center">Azam Omidi</td>
                                                    <td class="text-center">3 out of 10</td>
                                                    <td class="text-center">Shariati</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-success w-95 font-weight-bold ">
                                                                95%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">Pending</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/project-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">Birthday</td>
                                                    <td class="text-center">Elham Azimi</td>
                                                    <td class="text-center">29 June 2020</td>
                                                    <td class="text-center">wedding</td>
                                                    <td class="text-center">Ali Hashemi</td>
                                                    <td class="text-center">Pooneh Saber</td>
                                                    <td class="text-center">2 out of 15</td>
                                                    <td class="text-center">Shariati</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-warning w-35 font-weight-bold ">
                                                                35%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">Pending</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/project-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">Wedding</td>
                                                    <td class="text-center">Abbas Rostami</td>
                                                    <td class="text-center">12 December 2019</td>
                                                    <td class="text-center">wedding</td>
                                                    <td class="text-center">Ebrahim Nadim</td>
                                                    <td class="text-center">Zahra Soleimani</td>
                                                    <td class="text-center">6 out of 9</td>
                                                    <td class="text-center">Valiasr</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-warning w-40 font-weight-bold ">
                                                                40%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">Pending</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/project-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">Wedding</td>
                                                    <td class="text-center">Ali Azimi</td>
                                                    <td class="text-center">22 March 2019</td>
                                                    <td class="text-center">wedding</td>
                                                    <td class="text-center">Ebrahim Nadim</td>
                                                    <td class="text-center">Shiva Shahed</td>
                                                    <td class="text-center">14 out of 14</td>
                                                    <td class="text-center">Khaghani</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-red w-15 font-weight-bold ">15%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">Completed</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/project-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">Engagement</td>
                                                    <td class="text-center">Fatemeh Esfandiar</td>
                                                    <td class="text-center">06 May 2019</td>
                                                    <td class="text-center">wedding</td>
                                                    <td class="text-center">Ali Hashemi</td>
                                                    <td class="text-center">Homa Roosta</td>
                                                    <td class="text-center">9 out of 9</td>
                                                    <td class="text-center">Khaghani</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-success w-70 font-weight-bold ">
                                                                70%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">Completed</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/project-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">Maternity</td>
                                                    <td class="text-center">Saba Nouri</td>
                                                    <td class="text-center">17 April 2019</td>
                                                    <td class="text-center">formality</td>
                                                    <td class="text-center">Ali Hashemi</td>
                                                    <td class="text-center">Saghar Salami</td>
                                                    <td class="text-center">3 out of 21</td>
                                                    <td class="text-center">Shariati</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-success w-85 font-weight-bold ">
                                                                85%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">On going</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/project-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">Newborn</td>
                                                    <td class="text-center">Meelad Rahimi</td>
                                                    <td class="text-center">10 July 2019</td>
                                                    <td class="text-center">formality</td>
                                                    <td class="text-center">Saba Nouri</td>
                                                    <td class="text-center">Donya Kazemi</td>
                                                    <td class="text-center">9 out of 13</td>
                                                    <td class="text-center">valiasr</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-red w-30 font-weight-bold ">30%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">Pending</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/project-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">Family</td>
                                                    <td class="text-center">Hamid Azizi</td>
                                                    <td class="text-center">27 October 2019</td>
                                                    <td class="text-center">formality</td>
                                                    <td class="text-center">Saba Nouri</td>
                                                    <td class="text-center">Taha Shafa</td>
                                                    <td class="text-center">5 out of 15</td>
                                                    <td class="text-center">Shariati</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-warning w-65 font-weight-bold ">
                                                                65%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">Pending</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/project-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- table-wrapper -->
                                </div>
                            </div>
                            <div class="tab-pane " id="tab55">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <div class="table-responsive ">
                                            <table id="example-5" class="table table-striped table-bordered">
                                                <thead class="bg-primary text-center">
                                                <tr class="text-center">
                                                    <th class="border-bottom-0 text-center">Create Date</th>
                                                    <th class="border-bottom-0 text-center">Title</th>
                                                    <th class="border-bottom-0 text-center">Customer</th>
                                                    <th class="border-bottom-0 text-center">Tag</th>
                                                    <th class="border-bottom-0 text-center">Value</th>
                                                    <th class="border-bottom-0 text-center">Source</th>
                                                    <th class="border-bottom-0 text-center">Responsibile</th>
                                                    <th class="border-bottom-0 text-center">Probability</th>
                                                    <th class="border-bottom-0 text-center">Status</th>
                                                    <th class="border-bottom-0 text-center">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="text-center">
                                                    <td class="text-center">12/2/97</td>
                                                    <td class="text-center">Formality</td>
                                                    <td class="text-center">Mohsen Heshmati</td>
                                                    <td class="text-center">Formality</td>
                                                    <td class="text-center">12,000,000 Rial</td>
                                                    <td class="text-center">Website</td>
                                                    <td class="text-center">John Taromi</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-red w-10">10%</div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">Contracted</td>
                                                    <td class="text-center">

                                                        <a href="/deal-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="btn btn-primary btn-sm mr-3 text-white"
                                                           data-toggle="modal" data-target="#exampleModal3-2"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">12/2/97</td>
                                                    <td class="text-center">Marriage ceremony</td>
                                                    <td class="text-center">Mohsen Heshmati</td>
                                                    <td class="text-center">Marriage ceremony</td>
                                                    <td class="text-center">12,000,000 Rial</td>
                                                    <td class="text-center">Website</td>
                                                    <td class="text-center">John Taromi</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-warning w-35">35%</div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">New</td>
                                                    <td class="text-center">

                                                        <a href="/deal-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>


                                                        <a class="btn btn-primary btn-sm mr-3 text-white"
                                                           data-toggle="modal" data-target="#exampleModal3-2"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">12/2/97</td>
                                                    <td class="text-center">Wedding</td>
                                                    <td class="text-center">Mohsen Heshmati</td>
                                                    <td class="text-center">Wedding</td>
                                                    <td class="text-center">12,000,000 Rial</td>
                                                    <td class="text-center">Website</td>
                                                    <td class="text-center">John Taromi</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-success w-100">100%</div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">Success</td>
                                                    <td class="text-center">

                                                        <a href="/deal-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>


                                                        <a class="btn btn-primary btn-sm mr-3 text-white"
                                                           data-toggle="modal" data-target="#exampleModal3-2"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">12/2/97</td>
                                                    <td class="text-center">Party</td>
                                                    <td class="text-center">Mohsen Heshmati</td>
                                                    <td class="text-center">Party</td>
                                                    <td class="text-center">12,000,000 Rial</td>
                                                    <td class="text-center">Website</td>
                                                    <td class="text-center">John Taromi</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-warning w-50">50%</div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">New</td>
                                                    <td class="text-center">

                                                        <a href="/deal-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>


                                                        <a class="btn btn-primary btn-sm mr-3 text-white"
                                                           data-toggle="modal" data-target="#exampleModal3-2"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">12/2/97</td>
                                                    <td class="text-center">Wedding</td>
                                                    <td class="text-center">Mohsen Heshmati</td>
                                                    <td class="text-center">Newborn</td>
                                                    <td class="text-center">12,000,000 Rial</td>
                                                    <td class="text-center">Website</td>
                                                    <td class="text-center">John Taromi</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-red w-30">30%</div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">Meeting scheduled</td>
                                                    <td class="text-center">

                                                        <a href="/deal-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>


                                                        <a class="btn btn-primary btn-sm mr-3 text-white"
                                                           data-toggle="modal" data-target="#exampleModal3-2"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">12/2/97</td>
                                                    <td class="text-center">Formality</td>
                                                    <td class="text-center">Mohsen Heshmati</td>
                                                    <td class="text-center">Formality</td>
                                                    <td class="text-center">12,000,000 Rial</td>
                                                    <td class="text-center">Website</td>
                                                    <td class="text-center">John Taromi</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-red w-0">0%</div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">Failed</td>
                                                    <td class="text-center">

                                                        <a href="/deal-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="btn btn-primary btn-sm mr-3 text-white"
                                                           data-toggle="modal" data-target="#exampleModal3-2"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">12/2/97</td>
                                                    <td class="text-center">Marriage ceremony</td>
                                                    <td class="text-center">Mohsen Heshmati</td>
                                                    <td class="text-center">Marriage ceremony</td>
                                                    <td class="text-center">12,000,000 Rial</td>
                                                    <td class="text-center">Website</td>
                                                    <td class="text-center">John Taromi</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-success w-85">85%</div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">New</td>
                                                    <td class="text-center">

                                                        <a href="/deal-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>


                                                        <a class="btn btn-primary btn-sm mr-3 text-white"
                                                           data-toggle="modal" data-target="#exampleModal3-2"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- table-wrapper -->
                                </div>
                            </div>
                            <div class="tab-pane " id="tab66">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <div class="table-responsive ">
                                            <table id="example-7" class="table table-striped table-bordered nowrap">
                                                <thead class="bg-primary text-center">
                                                <tr class="text-center">
                                                    <th class="wd-15p border-bottom-0 text-center">Requester</th>
                                                    <th class="wd-15p border-bottom-0 text-center">Request Date</th>
                                                    <th class="wd-10p border-bottom-0 text-center">Type</th>
                                                    <th class="wd-15p border-bottom-0 text-center">From Date</th>
                                                    <th class="wd-20p border-bottom-0 text-center">To Date</th>
                                                    <th class="wd-25p border-bottom-0 text-center">From Time</th>
                                                    <th class="wd-25p border-bottom-0 text-center">To Time</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Confirm Person</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Confirmation Status
                                                    </th>
                                                    <th class="wd-25p border-bottom-0 text-center">Actions</th>


                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="text-center">
                                                    <td>Mahbobe Espidkar</td>
                                                    <td class="text-center">2/5/97</td>
                                                    <td class="text-center">Paid</td>
                                                    <td class="text-center">3/6/97</td>
                                                    <td class="text-center">4/6/97</td>
                                                    <td class="text-center">8:00</td>
                                                    <td class="text-center">16:00</td>
                                                    <td class="text-center">Meelad Rezaee</td>
                                                    <td class="text-center">Accepted</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#view-modal"
                                                           class="btn btn-dark btn-sm text-white"><i
                                                                    class="fas fa-eye"></i>
                                                            View</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>Ali Azimi</td>
                                                    <td class="text-center">6/8/97</td>
                                                    <td class="text-center">Unpaid</td>
                                                    <td class="text-center">7/8/97</td>
                                                    <td class="text-center">10/8/97</td>
                                                    <td class="text-center">-</td>
                                                    <td class="text-center">-</td>
                                                    <td class="text-center">Meelad Rezaee</td>
                                                    <td class="text-center">Rejected</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#view-modal"
                                                           class="btn btn-dark btn-sm text-white"><i
                                                                    class="fas fa-eye"></i>
                                                            View</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>Mehdi Yegane</td>
                                                    <td class="text-center">4/8/98</td>
                                                    <td class="text-center">Sick</td>
                                                    <td class="text-center">5/9/98</td>
                                                    <td class="text-center">7/10/98</td>
                                                    <td class="text-center">-</td>
                                                    <td class="text-center">-</td>
                                                    <td class="text-center">Mehdi Yegane</td>
                                                    <td class="text-center">Accepted</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#view-modal"
                                                           class="btn btn-dark btn-sm text-white"><i
                                                                    class="fas fa-eye"></i>
                                                            View</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>Ali Azimi</td>
                                                    <td class="text-center">6/10/97</td>
                                                    <td class="text-center">Materiry</td>
                                                    <td class="text-center">8/10/97</td>
                                                    <td class="text-center">8/10/97</td>
                                                    <td class="text-center">8:00</td>
                                                    <td class="text-center">16:00</td>
                                                    <td class="text-center">Mohsen Afshani</td>
                                                    <td class="text-center">Rejected</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#view-modal"
                                                           class="btn btn-dark btn-sm text-white"><i
                                                                    class="fas fa-eye"></i>
                                                            View</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>John Taromi</td>
                                                    <td class="text-center">2/5/97</td>
                                                    <td class="text-center">Unpaid</td>
                                                    <td class="text-center">6/2/97</td>
                                                    <td class="text-center">10/2/97</td>
                                                    <td class="text-center">-</td>
                                                    <td class="text-center">-</td>
                                                    <td class="text-center">Abbas Rezai</td>
                                                    <td class="text-center">Accepted</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#view-modal"
                                                           class="btn btn-dark btn-sm text-white"><i
                                                                    class="fas fa-eye"></i>
                                                            View</a>
                                                    </td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- table-wrapper -->
                                </div>
                            </div>
                            <div class="tab-pane " id="tab77">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <div class="table-responsive ">
                                            <table id="example-2" class="table table-striped table-bordered nowrap">
                                                <thead class="bg-primary">
                                                <tr>
                                                    <th class="wd-15p border-bottom-0 text-center">Topic</th>
                                                    <th class="wd-15p border-bottom-0 text-center">Creator</th>
                                                    <th class="wd-10p border-bottom-0 text-center">Organization Affairs</th>
                                                    <th class="wd-10p border-bottom-0 text-center">Due Date</th>
                                                    <th class="wd-15p border-bottom-0 text-center">Num Of Participants</th>
                                                    <th class="wd-15p border-bottom-0 text-center">Progress</th>
                                                    <th class="wd-15p border-bottom-0 text-center">Status</th>
                                                    <th class="border-bottom-0 text-center">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="text-center">Topic 1</td>
                                                    <td class="text-center">Mahdie Azizi</td>
                                                    <td class="text-center">Project 1</td>
                                                    <td class="text-center">5 Feb 2018</td>
                                                    <td class="text-center">12</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar w-0 font-weight-bold ">0%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">Plan</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/poll-view" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#add-modal"
                                                           class="btn btn-primary btn-sm text-white"><i class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Topic 2</td>
                                                    <td class="text-center">Elham Azimi</td>
                                                    <td class="text-center">Project 2</td>
                                                    <td class="text-center">5 Feb 2018</td>
                                                    <td class="text-center">5</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar w-0 font-weight-bold ">0%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">Scheduled</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/poll-view" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#add-modal"
                                                           class="btn btn-primary btn-sm text-white"><i class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Topic 3</td>
                                                    <td class="text-center">Abbas Rostami</td>
                                                    <td class="text-center">Project 3</td>
                                                    <td class="text-center">5 Feb 2018</td>
                                                    <td class="text-center">9</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-success w-90 font-weight-bold ">90%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">Doing</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/poll-view" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#add-modal"
                                                           class="btn btn-primary btn-sm text-white"><i class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Topic 4</td>
                                                    <td class="text-center">Ali Azimi</td>
                                                    <td class="text-center">Project 4</td>
                                                    <td class="text-center">5 Feb 2018</td>
                                                    <td class="text-center">11</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-success w-100 font-weight-bold ">100%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">Finished</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/poll-view" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#add-modal"
                                                           class="btn btn-primary btn-sm text-white"><i class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Topic 5</td>
                                                    <td class="text-center">Fatemeh Esfandiar</td>
                                                    <td class="text-center">Project 5</td>
                                                    <td class="text-center">5 Feb 2018</td>
                                                    <td class="text-center">22</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-warning w-60 font-weight-bold ">60%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">Doing</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/poll-view" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#add-modal"
                                                           class="btn btn-primary btn-sm text-white"><i class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Topic 6</td>
                                                    <td class="text-center">Saba Nouri</td>
                                                    <td class="text-center">Project 6</td>
                                                    <td class="text-center">5 Feb 2018</td>
                                                    <td class="text-center">8</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-success w-100 font-weight-bold ">100%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">Finished</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/poll-view" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#add-modal"
                                                           class="btn btn-primary btn-sm text-white"><i class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Topic 7</td>
                                                    <td class="text-center">Meelad Rahimi</td>
                                                    <td class="text-center">Project 7</td>
                                                    <td class="text-center">5 Feb 2018</td>
                                                    <td class="text-center">8</td>
                                                    <td class="text-center">
                                                        <div class="progress progress-md mb-3">
                                                            <div class="progress-bar bg-red w-30 font-weight-bold ">30%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">Doing</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/poll-view" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#add-modal"
                                                           class="btn btn-primary btn-sm text-white"><i class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- table-wrapper -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-8 col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">Equipments</h3>
            </div>
            <div class="table-responsive rounded-bottom">
                <table class="table card-table table-vcenter table-hover">
                    <thead class="bg-primary text-center">
                    <tr class="text-center">
                        <th class=" bg-primary"></th>
                        <th class="text-center bg-primary">Equipment</th>
                        <th class="text-center bg-primary">Category</th>
                        <th class="text-center bg-primary">From Date</th>
                        <th class="text-center bg-primary">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-pink-lightest">
                        <th scope="row">1</th>
                        <td class="text-center">Camera</td>
                        <td class="text-center">Digital</td>
                        <td class="text-center">04 Sep 2019</td>
                        <td class="text-center">Ready to use</td>
                    </tr>
                    <tr class="bg-lime-lightest">
                        <th scope="row">2</th>
                        <td class="text-center">Tablet</td>
                        <td class="text-center">Digital</td>
                        <td class="text-center">04 Sep 2019</td>
                        <td class="text-center">Ready to use</td>
                    </tr>
                    <tr class="bg-purple-lightest">
                        <th scope="row">3</th>
                        <td class="text-center">Tablet</td>
                        <td class="text-center">Digital</td>
                        <td class="text-center">04 Sep 2019</td>
                        <td class="text-center">In use</td>
                    </tr>
                    <tr class="bg-yellow-lightest">
                        <th scope="row">4</th>
                        <td class="text-center">Tablet</td>
                        <td class="text-center">Digital</td>
                        <td class="text-center">04 Sep 2019</td>
                        <td class="text-center">Ready to use</td>
                    </tr>
                    <tr class="bg-gray-lightest ">
                        <th scope="row">5</th>
                        <td class="text-center">Camera</td>
                        <td class="text-center">Digital</td>
                        <td class="text-center">04 Sep 2019</td>
                        <td class="text-center">In use</td>
                    </tr>
                    <tr class="bg-pink-lightest">
                        <th scope="row">6</th>
                        <td class="text-center">Tablet</td>
                        <td class="text-center">Digital</td>
                        <td class="text-center">04 Sep 2019</td>
                        <td class="text-center">Ready to use</td>
                    </tr>
                    <tr class="bg-lime-lightest">
                        <th scope="row">7</th>
                        <td class="text-center">Headphone</td>
                        <td class="text-center">Digital</td>
                        <td class="text-center">04 Sep 2019</td>
                        <td class="text-center">Ready to use</td>
                    </tr>
                    <tr class="bg-purple-lightest">
                        <th scope="row">8</th>
                        <td class="text-center">Headphone</td>
                        <td class="text-center">Digital</td>
                        <td class="text-center">04 Sep 2019</td>
                        <td class="text-center">Ready to use</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- table-responsive -->
        </div>
    </div>
    <div class="col-xl-4 col-lg-8 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-box tilebox-one">
                    <i class="fas fa-grip-horizontal text-primary float-right" aria-hidden="true"></i>
                    <h6 class="text-drak text-uppercase mt-0">Total Projects</h6>
                    <h3 class="m-b-20">44</h3>
                    <span class="badge badge-success"> +1% </span> <span class="text-muted">From previous period</span>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="card-box tilebox-one">
                    <i class="far fa-handshake text-primary float-right" aria-hidden="true"></i>
                    <h6 class="text-dark text-uppercase mt-0">Meetings</h6>
                    <h3 class="mb-0">44</h3>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="card-box tilebox-one">
                    <i class="fas fa-bed text-primary float-right" aria-hidden="true"></i>
                    <h6 class="text-dark text-uppercase mt-0">Time off</h6>
                    <h3 class="m-b-20">59 days</h3>
                    <span class="badge badge-danger"> -3% </span> <span class="text-muted">From previous period</span>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-md-12 col-xl-12">
        <div class="card">
            <div class="card-body p-5">
                <div class="panel panel-primary">
                    <div class="  p-3 ">
                        <div class="tabs-menu ">
                            <!-- Tabs -->
                            <ul class="nav panel-tabs">
                                <li><a href="#tab111" class="active font-weight-bold" data-toggle="tab">Invoice</a></li>
                                <li><a href="#tab222" class=" font-weight-bold" data-toggle="tab">Transaction</a></li>
                                <li><a href="#tab333" class="font-weight-bold" data-toggle="tab">Payment request</a>
                                </li>
                                <li><a href="#tab444" class="font-weight-bold" data-toggle="tab">Fund</a></li>
                                <li><a href="#tab555" class="font-weight-bold" data-toggle="tab">Bank account</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body  tabs-menu-body border-0 ">
                        <div class="tab-content">
                            <div class="tab-pane active " id="tab111">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <div class="table-responsive ">
                                            <table id="example-9" class="table table-striped table-bordered nowrap">
                                                <thead class="bg-primary text-center">
                                                <tr class="text-center">
                                                    <th class="wd-15p border-bottom-0 text-center">Title</th>
                                                    <th class="wd-15p border-bottom-0 text-center">Type</th>
                                                    <th class="wd-20p border-bottom-0 text-center">Date</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Price</th>
                                                    <th class="wd-10p border-bottom-0 text-center">Creator</th>
                                                    <th class="wd-15p border-bottom-0 text-center">Owner</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Related To</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Payment Request Num
                                                    </th>
                                                    <th class="wd-25p border-bottom-0 text-center">Branch</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="text-center">
                                                    <td>Number One</td>
                                                    <td class="text-center">Purchase</td>
                                                    <td class="text-center">06 April 2020</td>
                                                    <td class="text-center">$ 1,200</td>
                                                    <td class="text-center">Ali Azimi</td>
                                                    <td class="text-center">Javad Javid</td>
                                                    <td class="text-center">Equipment</td>
                                                    <td class="text-center">151315</td>
                                                    <td class="text-center">Shariati</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/invoice-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>

                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>Number Two</td>
                                                    <td class="text-center">Sale</td>
                                                    <td class="text-center">15 March 2019</td>
                                                    <td class="text-center">$ 5,000</td>
                                                    <td class="text-center">John Taromi</td>
                                                    <td class="text-center">Nazgol Taranom</td>
                                                    <td class="text-center">Salaries</td>
                                                    <td class="text-center">31843416</td>
                                                    <td class="text-center">Valiasr</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/invoice-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>

                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>Number Three</td>
                                                    <td class="text-center">Purchase</td>
                                                    <td class="text-center">29 December 2021</td>
                                                    <td class="text-center">$ 4,100</td>
                                                    <td class="text-center">John Taromi</td>
                                                    <td class="text-center">Soheil Arabi</td>
                                                    <td class="text-center">Catering</td>
                                                    <td class="text-center">13815525</td>
                                                    <td class="text-center">Velenjak</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/invoice-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>

                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>Number Four</td>
                                                    <td class="text-center">Purchase</td>
                                                    <td class="text-center">11 October 2018</td>
                                                    <td class="text-center">$ 2,000</td>
                                                    <td class="text-center">Ali Azimi</td>
                                                    <td class="text-center">Nasrin Mobasher</td>
                                                    <td class="text-center">Equipment</td>
                                                    <td class="text-center">1351555</td>
                                                    <td class="text-center">Valiasr</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/invoice-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>

                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>Number Five</td>
                                                    <td class="text-center">Sale</td>
                                                    <td class="text-center">06 March 2020</td>
                                                    <td class="text-center">$ 5,500</td>
                                                    <td class="text-center">Ali Azimi</td>
                                                    <td class="text-center">Saba Azarpeyk</td>
                                                    <td class="text-center">Transportation</td>
                                                    <td class="text-center">11224456</td>
                                                    <td class="text-center">Shariati</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/invoice-view" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>

                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- table-wrapper -->
                                </div>
                            </div>
                            <div class="tab-pane " id="tab222">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <div class="table-responsive ">
                                            <table id="example-11" class="table table-striped table-bordered nowrap">
                                                <thead class="bg-primary text-center">
                                                <tr class="text-center">
                                                    <th class="wd-15p border-bottom-0 text-center">Type</th>
                                                    <th class="wd-15p border-bottom-0 text-center">Amount</th>
                                                    <th class="wd-10p border-bottom-0 text-center">Date</th>
                                                    <th class="wd-10p border-bottom-0 text-center">Time</th>
                                                    <th class="wd-10p border-bottom-0 text-center">Payment Request</th>
                                                    <th class="wd-15p border-bottom-0 text-center">From</th>
                                                    <th class="wd-20p border-bottom-0 text-center">To</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Branch</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Status</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="text-center">
                                                    <td class="text-center">Withdraw</td>
                                                    <td class="text-center">1,200 $</td>
                                                    <td class="text-center">12 February 2020</td>
                                                    <td class="text-center">08:40 PM</td>
                                                    <td class="text-center">54654</td>
                                                    <td class="text-center">Somaieh Gholami</td>
                                                    <td class="text-center">Kosar Naiemi</td>
                                                    <td class="text-center">Shariati</td>
                                                    <td class="text-center"><span class="status-icon bg-success"></span>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#transaction-modal" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="#" class="btn btn-indigo btn-sm"><i
                                                                    class="fas fa-print"></i>
                                                            Print</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">Withdraw</td>
                                                    <td class="text-center">3,400 $</td>
                                                    <td class="text-center">29 July 2020</td>
                                                    <td class="text-center">00:20 PM</td>
                                                    <td class="text-center">456456</td>
                                                    <td class="text-center">Meelad Rezaee</td>
                                                    <td class="text-center">Mahdi Alavi</td>
                                                    <td class="text-center">Valiasr</td>
                                                    <td class="text-center"><span class="status-icon bg-danger"></span>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#transaction-modal" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="#" class="btn btn-indigo btn-sm"><i
                                                                    class="fas fa-print"></i>
                                                            Print</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">Deposit</td>
                                                    <td class="text-center">660 $</td>
                                                    <td class="text-center">08 February 2018</td>
                                                    <td class="text-center">05:35 PM</td>
                                                    <td class="text-center">456456</td>
                                                    <td class="text-center">Hafez Asadi</td>
                                                    <td class="text-center">Nasrin Maghami</td>
                                                    <td class="text-center">Velenjak</td>
                                                    <td class="text-center"><span class="status-icon bg-success"></span>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#transaction-modal" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="#" class="btn btn-indigo btn-sm"><i
                                                                    class="fas fa-print"></i>
                                                            Print</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">Withdraw</td>
                                                    <td class="text-center">4,000 $</td>
                                                    <td class="text-center">23 January 2015</td>
                                                    <td class="text-center">10:50 AM</td>
                                                    <td class="text-center">456456</td>
                                                    <td class="text-center">ُAli Azimi</td>
                                                    <td class="text-center">Shahla Arasteh</td>
                                                    <td class="text-center">Bazar</td>
                                                    <td class="text-center"><span class="status-icon bg-success"></span>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#transaction-modal" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="#" class="btn btn-indigo btn-sm"><i
                                                                    class="fas fa-print"></i>
                                                            Print</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Deposit</td>
                                                    <td class="text-center"> 7,300 $</td>
                                                    <td class="text-center">27 January 2019</td>
                                                    <td class="text-center">06:55 AM</td>
                                                    <td class="text-center">456456</td>
                                                    <td class="text-center">Ahmad Akbari</td>
                                                    <td class="text-center">Nasir Bashir</td>
                                                    <td class="text-center">Valiasr</td>
                                                    <td class="text-center"><span class="status-icon bg-danger"></span>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#transaction-modal" class="btn btn-dark btn-sm"><i
                                                                    class="fas fa-eye"></i> View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="#" class="btn btn-indigo btn-sm"><i
                                                                    class="fas fa-print"></i>
                                                            Print</a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- table-wrapper -->
                                </div>
                            </div>
                            <div class="tab-pane " id="tab333">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <div class="table-responsive ">
                                            <table id="example-12" class="table table-striped table-bordered">
                                                <thead class="bg-primary text-center">
                                                <tr class="text-center">
                                                    <th class="wd-15p border-bottom-0 text-center">Serial</th>
                                                    <th class="wd-15p border-bottom-0 text-center">Type</th>
                                                    <th class="wd-15p border-bottom-0 text-center">Requester</th>
                                                    <th class="wd-10p border-bottom-0 text-center">Date</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Total Price</th>
                                                    <th class="wd-25p border-bottom-0 text-center">For</th>
                                                    <th class="wd-25p border-bottom-0 text-center">From</th>
                                                    <th class="wd-25p border-bottom-0 text-center">To</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Relation</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Invoice</th>
                                                    <th class="border-bottom-0 text-center">Status</th>
                                                    <th class="border-bottom-0 text-center">Actions</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="text-center">
                                                    <td>9856</td>
                                                    <td>Withdraw</td>
                                                    <td>Mr. Azimi</td>
                                                    <td>2/3/97</td>
                                                    <td>2,000,000</td>
                                                    <td>Project Commission</td>
                                                    <td>John Taromi</td>
                                                    <td>Matican Group</td>
                                                    <td>Mr. Taromi's Web Shop</td>
                                                    <td>687462</td>
                                                    <td>Paid</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/payment-request-view"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#edit-modal"
                                                           class="btn btn-primary btn-sm text-white"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>65416</td>
                                                    <td>Despoit</td>
                                                    <td>Ms. shirzad</td>
                                                    <td>10/12/97</td>
                                                    <td>4,000,000</td>
                                                    <td>Salary</td>
                                                    <td>Mohammad Qanati</td>
                                                    <td>Matican Group</td>
                                                    <td>Mr. Taromi's Web Shop</td>
                                                    <td>4,000,000</td>
                                                    <td>unpaid</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/payment-request-view"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#edit-modal"
                                                           class="btn btn-primary btn-sm text-white"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>


                                                <tr class="text-center">
                                                    <td>9856</td>
                                                    <td>Withdraw</td>
                                                    <td>Mr. Azimi</td>
                                                    <td>2/3/97</td>
                                                    <td>2,000,000</td>
                                                    <td>Salary</td>
                                                    <td>John Taromi</td>
                                                    <td>Matican Group</td>
                                                    <td>Mr. Taromi's Web Shop</td>
                                                    <td>687462</td>
                                                    <td>Paid</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/payment-request-view"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#edit-modal"
                                                           class="btn btn-primary btn-sm text-white"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>65416</td>
                                                    <td>Despoit</td>
                                                    <td>Ms. shirzad</td>
                                                    <td>10/12/97</td>
                                                    <td>4,000,000</td>
                                                    <td>Project Commission</td>
                                                    <td>Mohammad Qanati</td>
                                                    <td>Matican Group</td>
                                                    <td>Mr. Taromi's Web Shop</td>
                                                    <td>4,000,000</td>
                                                    <td>unpaid</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/payment-request-view"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#edit-modal"
                                                           class="btn btn-primary btn-sm text-white"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>9856</td>
                                                    <td>Withdraw</td>
                                                    <td>Mr. Azimi</td>
                                                    <td>2/3/97</td>
                                                    <td>2,000,000</td>
                                                    <td>Salary</td>
                                                    <td>John Taromi</td>
                                                    <td>Matican Group</td>
                                                    <td>Mr. Taromi's Web Shop</td>
                                                    <td>687462</td>
                                                    <td>Paid</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/payment-request-view"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#edit-modal"
                                                           class="btn btn-primary btn-sm text-white"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>65416</td>
                                                    <td>Despoit</td>
                                                    <td>Ms. shirzad</td>
                                                    <td>10/12/97</td>
                                                    <td>4,000,000</td>
                                                    <td>Salary</td>
                                                    <td>Mohammad Qanati</td>
                                                    <td>Matican Group</td>
                                                    <td>Mr. Taromi's Web Shop</td>
                                                    <td>4,000,000</td>
                                                    <td>unpaid</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/payment-request-view"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#edit-modal"
                                                           class="btn btn-primary btn-sm text-white"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>9856</td>
                                                    <td>Withdraw</td>
                                                    <td>Mr. Azimi</td>
                                                    <td>2/3/97</td>
                                                    <td>2,000,000</td>
                                                    <td>Project Commission</td>
                                                    <td>John Taromi</td>
                                                    <td>Matican Group</td>
                                                    <td>Mr. Taromi's Web Shop</td>
                                                    <td>687462</td>
                                                    <td>Paid</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/payment-request-view"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#edit-modal"
                                                           class="btn btn-primary btn-sm text-white"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>65416</td>
                                                    <td>Despoit</td>
                                                    <td>Ms. shirzad</td>
                                                    <td>10/12/97</td>
                                                    <td>4,000,000</td>
                                                    <td>Salary</td>
                                                    <td>Mohammad Qanati</td>
                                                    <td>Matican Group</td>
                                                    <td>Mr. Taromi's Web Shop</td>
                                                    <td>4,000,000</td>
                                                    <td>unpaid</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/payment-request-view"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#edit-modal"
                                                           class="btn btn-primary btn-sm text-white"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- table-wrapper -->
                                </div>
                            </div>
                            <div class="tab-pane " id="tab444">

                            </div>
                            <div class="tab-pane " id="tab555">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <div class="table-responsive ">
                                            <table id="example-13" class="table table-striped table-bordered">
                                                <thead class="bg-primary text-center">
                                                <tr class="text-center">
                                                    <th class="wd-15p border-bottom-0 text-center">Employee</th>
                                                    <th class="wd-15p border-bottom-0 text-center">Bank</th>
                                                    <th class="wd-15p border-bottom-0 text-center">Account Type</th>
                                                    <th class="wd-15p border-bottom-0 text-center">Account Number</th>
                                                    <th class="wd-10p border-bottom-0 text-center">Credit Card Num.</th>
                                                    <th class="wd-25p border-bottom-0 text-center">IBAN</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Actions</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="text-center">
                                                    <td class="text-center">Mohsen Heshmati</td>
                                                    <td class="text-center">Pasargad</td>
                                                    <td class="text-center">Saving Account</td>
                                                    <td class="text-center">285 - 8000 -11166656 -1</td>
                                                    <td class="text-center">6037 9974 2142 9474</td>
                                                    <td class="text-center">IR 170570028570011166656101</td>

                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/bank-account-view"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#exampleModal3-2"
                                                           class="btn btn-primary btn-sm text-white"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">Ali Nabavi</td>
                                                    <td class="text-center">Melli</td>
                                                    <td class="text-center">Checking Account</td>
                                                    <td class="text-center">285 - 8000 -11166656 -1</td>
                                                    <td class="text-center">6037 9974 2142 9474</td>
                                                    <td class="text-center">IR 170570028570011166656101</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/bank-account-view"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#exampleModal3-2"
                                                           class="btn btn-primary btn-sm text-white"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">Mohamad Nikzad</td>
                                                    <td class="text-center">Melat</td>
                                                    <td class="text-center">Checking Account</td>
                                                    <td class="text-center">285 - 8000 -11166656 -1</td>
                                                    <td class="text-center">6037 9974 2142 9474</td>
                                                    <td class="text-center">IR 170570028570011166656101</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/bank-account-view"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#exampleModal3-2"
                                                           class="btn btn-primary btn-sm text-white"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">Zahra Banihashem</td>
                                                    <td class="text-center">Ayande</td>
                                                    <td class="text-center">Saving Account</td>
                                                    <td class="text-center">285 - 8000 -11166656 -1</td>
                                                    <td class="text-center">6037 9974 2142 9474</td>
                                                    <td class="text-center">IR 170570028570011166656101</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/bank-account-view"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#exampleModal3-2"
                                                           class="btn btn-primary btn-sm text-white"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">Saba Nouri</td>
                                                    <td class="text-center">Sepah</td>
                                                    <td class="text-center">Checking Account</td>
                                                    <td class="text-center">285 - 8000 -11166656 -1</td>
                                                    <td class="text-center">6037 9974 2142 9474</td>
                                                    <td class="text-center">IR 170570028570011166656101</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/bank-account-view"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#exampleModal3-2"
                                                           class="btn btn-primary btn-sm text-white text-white"><i
                                                                    class="si si-pencil"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">Kamran Hosseini</td>
                                                    <td class="text-center">eqtesade Novin</td>
                                                    <td class="text-center">Saving Account</td>
                                                    <td class="text-center">285 - 8000 -11166656 -1</td>
                                                    <td class="text-center">6037 9974 2142 9474</td>
                                                    <td class="text-center">IR 170570028570011166656101</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/bank-account-view"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#exampleModal3-2"
                                                           class="btn btn-primary btn-sm text-white"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">Hamzeh Noori</td>
                                                    <td class="text-center">Melli</td>
                                                    <td class="text-center">Checking Account</td>
                                                    <td class="text-center">285 - 8000 -11166656 -1</td>
                                                    <td class="text-center">6037 9974 2142 9474</td>
                                                    <td class="text-center">IR 170570028570011166656101</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/bank-account-view"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#exampleModal3-2"
                                                           class="btn btn-primary btn-sm text-white"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td class="text-center">Hanieh Shahlayee</td>
                                                    <td class="text-center">Ghavamin</td>
                                                    <td class="text-center">Checking Account</td>
                                                    <td class="text-center">285 - 8000 -11166656 -1</td>
                                                    <td class="text-center">6037 9974 2142 9474</td>
                                                    <td class="text-center">IR 170570028570011166656101</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/bank-account-view"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a data-toggle="modal" data-target="#exampleModal3-2"
                                                           class="btn btn-primary btn-sm text-white"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- table-wrapper -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-4 col-lg-8 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-box tilebox-one">
                    <i class="fas fa-wallet text-primary float-right" aria-hidden="true"></i>
                    <h6 class="text-drak text-uppercase mt-0">Account balance</h6>
                    <h3 class="m-b-20">750,000 T</h3>
                    <span class="badge badge-success"> +1% </span> <span class="text-muted">From previous period</span>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="card-box tilebox-one">
                    <i class="fas fa-dollar-sign text-primary float-right" aria-hidden="true"></i>
                    <h6 class="text-drak text-uppercase mt-0">Total salary</h6>
                    <h3 class="m-b-20">45,000,000 T</h3>
                    <span class="badge badge-danger"> -3% </span> <span class="text-muted">From previous period</span>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="card-box tilebox-one">
                    <i class="fas fa-money-bill-wave text-primary float-right" aria-hidden="true"></i>
                    <h6 class="text-drak text-uppercase mt-0">Salary for this month</h6>
                    <h3 class="m-b-20">3,900,000 T</h3>
                    <span class="badge badge-danger"> -0.5% </span> <span class="text-muted">From previous period</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8 col-lg-12 col-md-12">
        <div class="card overflow-hidden">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">Locations</h3>
            </div>
            <div class="card-body">
                <div id="world-map-markers" class="h-400"></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-xl-12">
        <div class="card">
            <div class="card-body p-5">
                <div class="panel panel-primary">
                    <div class="  p-3 ">
                        <div class="tabs-menu ">
                            <!-- Tabs -->
                            <ul class="nav panel-tabs">
                                <li><a href="#tab1111" class="active font-weight-bold" data-toggle="tab">Supply deed</a>
                                </li>
                                <li><a href="#tab2222" class=" font-weight-bold" data-toggle="tab">Transfer deed</a>
                                </li>
                                <li><a href="#tab3333" class="font-weight-bold" data-toggle="tab">Purchase deed</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body  tabs-menu-body border-0 ">
                        <div class="tab-content">
                            <div class="tab-pane active " id="tab1111">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <div class="table-responsive ">
                                            <table id="example-10" class="table table-striped table-bordered nowrap">
                                                <thead class="bg-primary text-center">
                                                <tr class="text-center">
                                                    <th class="wd-15p border-bottom-0 text-center">Deed Serial</th>
                                                    <th class="wd-15p border-bottom-0 text-center">Supplier</th>
                                                    <th class="wd-20p border-bottom-0 text-center">Num of equipment</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Request date</th>
                                                    <th class="wd-10p border-bottom-0 text-center">From time</th>
                                                    <th class="wd-15p border-bottom-0 text-center">To time</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Related To</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Status</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="text-center">
                                                    <td>1354v18</td>
                                                    <td class="text-center">Jahan Shop</td>
                                                    <td class="text-center">03</td>
                                                    <td class="text-center">12 February 2019</td>
                                                    <td class="text-center">10:26 AM</td>
                                                    <td class="text-center">06:26 PM</td>
                                                    <td class="text-center">Organization</td>
                                                    <td class="text-center"> Requested</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/equipmentsupplydeed-view-print"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>243sx235</td>
                                                    <td class="text-center">Novin Shop</td>
                                                    <td class="text-center">23</td>
                                                    <td class="text-center">01 May 2021</td>
                                                    <td class="text-center">08:06 AM</td>
                                                    <td class="text-center">08:46 PM</td>
                                                    <td class="text-center">Deal</td>
                                                    <td class="text-center">Rejected</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/equipmentsupplydeed-view-print"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>23adc4544</td>
                                                    <td class="text-center">Bartar Company</td>
                                                    <td class="text-center">13</td>
                                                    <td class="text-center">18 March 2020</td>
                                                    <td class="text-center">09:16 AM</td>
                                                    <td class="text-center">10:15 PM</td>
                                                    <td class="text-center">Project</td>
                                                    <td class="text-center">Send To Supplier</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/equipmentsupplydeed-view-print"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>2134as235</td>
                                                    <td class="text-center">First Shop</td>
                                                    <td class="text-center">09</td>
                                                    <td class="text-center">28 April 2018</td>
                                                    <td class="text-center">02:01 PM</td>
                                                    <td class="text-center">11:00 PM</td>
                                                    <td class="text-center">Project</td>
                                                    <td class="text-center">Ready For Transfer</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/equipmentsupplydeed-view-print"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>2134r23</td>
                                                    <td class="text-center">Sadid Company</td>
                                                    <td class="text-center">44</td>
                                                    <td class="text-center">09 May 2020</td>
                                                    <td class="text-center">04:46 PM</td>
                                                    <td class="text-center">00:00 AM</td>
                                                    <td class="text-center">Deal</td>
                                                    <td class="text-center"> Send To Supplier</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/equipmentsupplydeed-view-print"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>1354v18</td>
                                                    <td class="text-center">Jahan Shop</td>
                                                    <td class="text-center">03</td>
                                                    <td class="text-center">12 February 2019</td>
                                                    <td class="text-center">10:26 AM</td>
                                                    <td class="text-center">06:26 PM</td>
                                                    <td class="text-center">Organization</td>
                                                    <td class="text-center"> Requested</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/equipmentsupplydeed-view-print"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>243sx235</td>
                                                    <td class="text-center">Novin Shop</td>
                                                    <td class="text-center">23</td>
                                                    <td class="text-center">01 May 2021</td>
                                                    <td class="text-center">08:06 AM</td>
                                                    <td class="text-center">08:46 PM</td>
                                                    <td class="text-center">Deal</td>
                                                    <td class="text-center">Rejected</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/equipmentsupplydeed-view-print"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>23adc4544</td>
                                                    <td class="text-center">Bartar Company</td>
                                                    <td class="text-center">13</td>
                                                    <td class="text-center">18 March 2020</td>
                                                    <td class="text-center">09:16 AM</td>
                                                    <td class="text-center">10:15 PM</td>
                                                    <td class="text-center">Project</td>
                                                    <td class="text-center">Send To Supplier</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/equipmentsupplydeed-view-print"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>2134as235</td>
                                                    <td class="text-center">First Shop</td>
                                                    <td class="text-center">09</td>
                                                    <td class="text-center">28 April 2020</td>
                                                    <td class="text-center">02:01 PM</td>
                                                    <td class="text-center">11:30 PM</td>
                                                    <td class="text-center">Project</td>
                                                    <td class="text-center">Ready For Transfer</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/equipmentsupplydeed-view-print"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>2134r23</td>
                                                    <td class="text-center">Sadid Company</td>
                                                    <td class="text-center">44</td>
                                                    <td class="text-center">09 May 2010</td>
                                                    <td class="text-center">04:30 PM</td>
                                                    <td class="text-center">00:30 AM</td>
                                                    <td class="text-center">Project</td>
                                                    <td class="text-center"> Send To Supplier</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/equipmentsupplydeed-view-print"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="tab2222">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <div class="table-responsive ">
                                            <table id="example-3" class="table table-striped table-bordered nowrap">
                                                <thead class="bg-primary text-center">
                                                <tr class="text-center">
                                                    <th class="wd-15p border-bottom-0 text-center">Deed Serial</th>
                                                    <th class="wd-15p border-bottom-0 text-center">Num Of Equipment</th>
                                                    <th class="wd-20p border-bottom-0 text-center">Create Date</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Requester</th>
                                                    <th class="wd-10p border-bottom-0 text-center">From</th>
                                                    <th class="wd-15p border-bottom-0 text-center">To</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Transfer Date</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Related To</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Status</th>
                                                    <th class="wd-25p border-bottom-0 text-center">Actions</th>
                                                </tr>
                                                </thead class="bg-primary">
                                                <tbody>
                                                <tr class="text-center">
                                                    <td>1354v18</td>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">12 February 2019</td>
                                                    <td class="text-center">Majid Moghadam</td>
                                                    <td class="text-center">TQM Unit</td>
                                                    <td class="text-center">Inventory Keeper</td>
                                                    <td class="text-center">15 Jun 2019</td>
                                                    <td class="text-center">Project</td>
                                                    <td class="text-center">On The Way</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/equipmenttransferdeed-view-print"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>243sx235</td>
                                                    <td class="text-center">11</td>
                                                    <td class="text-center">26 March 2020</td>
                                                    <td class="text-center">Salehe Rafie</td>
                                                    <td class="text-center">CEM Unit</td>
                                                    <td class="text-center">Inventory Keeper</td>
                                                    <td class="text-center">01 May 2021</td>
                                                    <td class="text-center">Organization</td>
                                                    <td class="text-center">Rejected</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/equipmenttransferdeed-view-print"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>23adc4544</td>
                                                    <td class="text-center">12</td>
                                                    <td class="text-center">03 June 2018</td>
                                                    <td class="text-center">Mohsen Foruzan</td>
                                                    <td class="text-center">TQM Unit</td>
                                                    <td class="text-center">Inventory Keeper</td>
                                                    <td class="text-center">18 March 2020</td>
                                                    <td class="text-center">Project</td>
                                                    <td class="text-center">Delivered</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/equipmenttransferdeed-view-print"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>2134as235</td>
                                                    <td class="text-center">5</td>
                                                    <td class="text-center">11 April 2019</td>
                                                    <td class="text-center">Saba Sabaghi</td>
                                                    <td class="text-center">Operational Team</td>
                                                    <td class="text-center">Inventory Keeper</td>
                                                    <td class="text-center">28 April 2018</td>
                                                    <td class="text-center">Deal</td>
                                                    <td class="text-center">Requested</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/equipmenttransferdeed-view-print"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>2134r23</td>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">19 April 2017</td>
                                                    <td class="text-center">Nastaran Yavari</td>
                                                    <td class="text-center">Edit Unit</td>
                                                    <td class="text-center">Inventory Keeper</td>
                                                    <td class="text-center">09 May 2020</td>
                                                    <td class="text-center">Organization</td>
                                                    <td class="text-center">List accepted</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/equipmenttransferdeed-view-print"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>1354v18</td>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">12 February 2019</td>
                                                    <td class="text-center">Majid Moghadam</td>
                                                    <td class="text-center">TQM Unit</td>
                                                    <td class="text-center">Inventory Keeper</td>
                                                    <td class="text-center">15 Jun 2019</td>
                                                    <td class="text-center">Project</td>
                                                    <td class="text-center">On The Way</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/equipmenttransferdeed-view-print"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>243sx235</td>
                                                    <td class="text-center">11</td>
                                                    <td class="text-center">26 March 2020</td>
                                                    <td class="text-center">Salehe Rafie</td>
                                                    <td class="text-center">CEM Unit</td>
                                                    <td class="text-center">Inventory Keeper</td>
                                                    <td class="text-center">01 May 2021</td>
                                                    <td class="text-center">Organization</td>
                                                    <td class="text-center">Rejected</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/equipmenttransferdeed-view-print"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>23adc4544</td>
                                                    <td class="text-center">12</td>
                                                    <td class="text-center">03 June 2018</td>
                                                    <td class="text-center">Mohsen Foruzan</td>
                                                    <td class="text-center">TQM Unit</td>
                                                    <td class="text-center">Inventory Keeper</td>
                                                    <td class="text-center">18 March 2020</td>
                                                    <td class="text-center">Project</td>
                                                    <td class="text-center">Delivered</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/equipmenttransferdeed-view-print"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>2134as235</td>
                                                    <td class="text-center">5</td>
                                                    <td class="text-center">11 April 2019</td>
                                                    <td class="text-center">Saba Sabaghi</td>
                                                    <td class="text-center">Operational Team</td>
                                                    <td class="text-center">Inventory Keeper</td>
                                                    <td class="text-center">28 April 2018</td>
                                                    <td class="text-center">Deal</td>
                                                    <td class="text-center">Requested</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/equipmenttransferdeed-view-print"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>2134r23</td>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">19 April 2017</td>
                                                    <td class="text-center">Nastaran Yavari</td>
                                                    <td class="text-center">Edit Unit</td>
                                                    <td class="text-center">Inventory Keeper</td>
                                                    <td class="text-center">09 May 2020</td>
                                                    <td class="text-center">Organization</td>
                                                    <td class="text-center">List accepted</td>
                                                    <td class="text-center">
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="/equipmenttransferdeed-view-print"
                                                           class="btn btn-dark btn-sm"><i class="fas fa-eye"></i>
                                                            View</a>
                                                        <a class="icon" href="javascript:void(0)"></a>
                                                        <a href="javascript:void(0)" data-toggle="modal"
                                                           data-target="#edit-modal" class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-pen"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="tab3333">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive ">
                                                    <table id="example-2"
                                                           class="table table-striped table-bordered nowrap">
                                                        <thead>
                                                        <tr>
                                                            <th class="wd-15p border-bottom-0 text-center bg-primary">
                                                                Num of Equipment
                                                            </th>
                                                            <th class="wd-15p border-bottom-0 text-center bg-primary">
                                                                Category
                                                            </th>
                                                            <th class="wd-10p border-bottom-0 text-center bg-primary">
                                                                Requester
                                                            </th>
                                                            <th class="wd-15p border-bottom-0 text-center bg-primary">
                                                                Confirmation person
                                                            </th>
                                                            <th class="wd-20p border-bottom-0 text-center bg-primary">
                                                                Purchasing officer
                                                            </th>
                                                            <th class="wd-25p border-bottom-0 text-center bg-primary">
                                                                Purchase date
                                                            </th>
                                                            <th class="wd-25p border-bottom-0 text-center bg-primary">
                                                                Invoices
                                                            </th>
                                                            <th class="wd-25p border-bottom-0 text-center bg-primary">
                                                                Branches
                                                            </th>
                                                            <th class="wd-25p border-bottom-0 text-center bg-primary">
                                                                Settled inventory
                                                            </th>
                                                            <th class="wd-25p border-bottom-0 text-center bg-primary">
                                                                Status
                                                            </th>
                                                            <th class="wd-25p border-bottom-0 text-center bg-primary">
                                                                Actions
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="text-center">2</td>
                                                            <td class="text-center">Digital</td>
                                                            <td class="text-center">Mehdi Yegane</td>
                                                            <td class="text-center">Nikoo Gharib</td>
                                                            <td class="text-center">Saba Nouri</td>
                                                            <td class="text-center">12 December 2019</td>
                                                            <td class="text-center"></td>
                                                            <td class="text-center">Shariati</td>
                                                            <td class="text-center">Number 3</td>
                                                            <td class="text-center"> Delivered</td>
                                                            <td class="text-center">
                                                                <a class="icon" href="javascriptvoid(0)"></a>
                                                                <a href="/equipmentpurchasedeed-view"
                                                                   class="btn btn-dark btn-sm"><i
                                                                            class="fas fa-eye"></i> View</a>
                                                                <a class="icon" href="javascriptvoid(0)"></a>
                                                                <a href="javascriptvoid(0)" data-toggle="modal"
                                                                   data-target="#edit-modal"
                                                                   class="btn btn-primary btn-sm"><i
                                                                            class="fas fa-pen"></i> Edit</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">Digital</td>
                                                            <td class="text-center">John Taromi</td>
                                                            <td class="text-center">Yasaman Taghvaie</td>
                                                            <td class="text-center">Saba Nouri</td>
                                                            <td class="text-center">12 December 2019</td>
                                                            <td class="text-center"></td>
                                                            <td class="text-center">Shariati</td>
                                                            <td class="text-center">Number 1</td>
                                                            <td class="text-center">rejected</td>
                                                            <td class="text-center">
                                                                <a class="icon" href="javascriptvoid(0)"></a>
                                                                <a href="/equipmentpurchasedeed-view"
                                                                   class="btn btn-dark btn-sm"><i
                                                                            class="fas fa-eye"></i> View</a>
                                                                <a class="icon" href="javascriptvoid(0)"></a>
                                                                <a href="javascriptvoid(0)" data-toggle="modal"
                                                                   data-target="#edit-modal"
                                                                   class="btn btn-primary btn-sm"><i
                                                                            class="fas fa-pen"></i> Edit</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">5</td>
                                                            <td class="text-center">Digital</td>
                                                            <td class="text-center">Mehdi Yegane</td>
                                                            <td class="text-center">Mahdi Ardalan</td>
                                                            <td class="text-center">Saba Nouri</td>
                                                            <td class="text-center">12 December 2019</td>
                                                            <td class="text-center"></td>
                                                            <td class="text-center">Shariati</td>
                                                            <td class="text-center">Number 3</td>
                                                            <td class="text-center">accepted</td>
                                                            <td class="text-center">
                                                                <a class="icon" href="javascriptvoid(0)"></a>
                                                                <a href="/equipmentpurchasedeed-view"
                                                                   class="btn btn-dark btn-sm"><i
                                                                            class="fas fa-eye"></i> View</a>
                                                                <a class="icon" href="javascriptvoid(0)"></a>
                                                                <a href="javascriptvoid(0)" data-toggle="modal"
                                                                   data-target="#edit-modal"
                                                                   class="btn btn-primary btn-sm"><i
                                                                            class="fas fa-pen"></i> Edit</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">3</td>
                                                            <td class="text-center">Digital</td>
                                                            <td class="text-center">Mehdi Yegane</td>
                                                            <td class="text-center">Shamsi Saberi</td>
                                                            <td class="text-center">Mehdi Yegane</td>
                                                            <td class="text-center">12 December 2019</td>
                                                            <td class="text-center"></td>
                                                            <td class="text-center">Shariati</td>
                                                            <td class="text-center">Number 5</td>
                                                            <td class="text-center">Initialized</td>
                                                            <td class="text-center">
                                                                <a class="icon" href="javascriptvoid(0)"></a>
                                                                <a href="/equipmentpurchasedeed-view"
                                                                   class="btn btn-dark btn-sm"><i
                                                                            class="fas fa-eye"></i> View</a>
                                                                <a class="icon" href="javascriptvoid(0)"></a>
                                                                <a href="javascriptvoid(0)" data-toggle="modal"
                                                                   data-target="#edit-modal"
                                                                   class="btn btn-primary btn-sm"><i
                                                                            class="fas fa-pen"></i> Edit</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">Digital</td>
                                                            <td class="text-center">John Taromi</td>
                                                            <td class="text-center">Motahareh Moalem</td>
                                                            <td class="text-center">Mehdi Yegane</td>
                                                            <td class="text-center">12 December 2019</td>
                                                            <td class="text-center"></td>
                                                            <td class="text-center">Shariati</td>
                                                            <td class="text-center">Number 3</td>
                                                            <td class="text-center">Purchased</td>
                                                            <td class="text-center">
                                                                <a class="icon" href="javascriptvoid(0)"></a>
                                                                <a href="/equipmentpurchasedeed-view"
                                                                   class="btn btn-dark btn-sm"><i
                                                                            class="fas fa-eye"></i> View</a>
                                                                <a class="icon" href="javascriptvoid(0)"></a>
                                                                <a href="javascriptvoid(0)" data-toggle="modal"
                                                                   data-target="#edit-modal"
                                                                   class="btn btn-primary btn-sm"><i
                                                                            class="fas fa-pen"></i> Edit</a>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title font-weight-bold">Organizational Images</div>
            </div>
            <div class="card-body">
                <div class="row img-gallery">
                    <div class="col-4">
                        <a href="javascript:void(0)" class="d-block link-overlay">
                            <img class="d-block img-fluid rounded" src="../assets/images/photos/people-office-group-team.jpg"
                                 alt="">
                            <span class="link-overlay-bg rounded">
                                <i class="fas fa-search"></i>
                            </span>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="javascript:void(0)" class="d-block link-overlay">
                            <img class="d-block img-fluid rounded" src="../assets/images/photos/pexels-photo-70292.jpeg"
                                 alt="">
                            <span class="link-overlay-bg rounded">
                                <i class="fas fa-search"></i>
                            </span>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="javascript:void(0)" class="d-block link-overlay">
                            <img class="d-block img-fluid rounded"
                                 src="../assets/images/photos/people-office-group-team.jpg" alt="">
                            <span class="link-overlay-bg rounded">
                                <i class="fas fa-search"></i>
                            </span>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="javascript:void(0)" class="d-block link-overlay">
                            <img class="d-block img-fluid rounded" src="../assets/images/photos/pexels-photo-70292.jpeg"
                                 alt="">
                            <span class="link-overlay-bg rounded">
                                <i class="fas fa-search"></i>
                            </span>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="javascript:void(0)" class="d-block link-overlay">
                            <img class="d-block img-fluid rounded"
                                 src="../assets/images/photos/people-office-group-team.jpg" alt="">
                            <span class="link-overlay-bg rounded">
                                <i class="fas fa-search"></i>
                            </span>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="javascript:void(0)" class="d-block link-overlay">
                            <img class="d-block img-fluid rounded"
                                 src="../assets/images/photos/pexels-photo-70292.jpeg" alt="">
                            <span class="link-overlay-bg rounded">
                                <i class="fas fa-search"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="row mt-5 border-top">
                    <div class="col-2">
                        <div class="hero-widget">
                            <i class="fas fa-file-pdf  fa-3x mb-4 text-primary"></i>
                            <div class="text">
                                <label class="text-muted">file name</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="hero-widget">
                            <i class="fas fa-file-pdf  fa-3x mb-4 text-primary"></i>
                            <div class="text">
                                <label class="text-muted">file name</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="hero-widget">
                            <i class="fas fa-file-pdf  fa-3x mb-4 text-primary"></i>
                            <div class="text">
                                <label class="text-muted">file name</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="hero-widget">
                            <i class="fas fa-file-pdf  fa-3x mb-4 text-primary"></i>
                            <div class="text">
                                <label class="text-muted">file name</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="hero-widget">
                            <i class="fas fa-file-pdf  fa-3x mb-4 text-primary"></i>
                            <div class="text">
                                <label class="text-muted">file name</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="hero-widget">
                            <i class="fas fa-file-pdf  fa-3x mb-4 text-primary"></i>
                            <div class="text">
                                <label class="text-muted">file name</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Modals-->
<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="example-Modal3-1">Edit Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-xl-12">
                        <div class="card mb-0">
                            <div class="panel panel-primary ">
                                <div class="tab-menu-heading border-0">
                                    <div class="tabs-menu ">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs">
                                            <li class=""><a href="#tab1-1" class="active font-weight-bold"
                                                            data-toggle="tab">Basic Info</a></li>
                                            <li><a href="#tab2-2" class="font-weight-bold" data-toggle="tab">Place &
                                                    Location</a></li>
                                            <li><a href="#tab3-3" class="font-weight-bold" data-toggle="tab">ORG
                                                    Information</a></li>
                                            <li><a href="#tab4-4" class="font-weight-bold" data-toggle="tab">Working
                                                    Time</a></li>
                                            <li><a href="#tab5-5" class="font-weight-bold" data-toggle="tab">Salary</a>
                                            </li>
                                            <li><a href="#tab6-6" class="font-weight-bold" data-toggle="tab">Authentication</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body  border-left-0 border-right-0 border-bottom-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active " id="tab1-1">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold">Name
                                                                    :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <input class="form-control required" id="Name"
                                                                       name="userName" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix ">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold">Family
                                                                    :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <input class="form-control required" id="Name"
                                                                       name="userName" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group  clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold">Gender
                                                                    :</label>
                                                            </div>
                                                            <div class="col-lg-9 d-flex">
                                                                <label class="custom-control custom-radio mr-5">
                                                                    <input type="radio" class="custom-control-input"
                                                                           name="example-radios1" value="option1"
                                                                           checked>
                                                                    <span class="custom-control-label font-weight-bold">Male</span>
                                                                </label>
                                                                <label class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input"
                                                                           name="example-radios1" value="option2">
                                                                    <span class="custom-control-label font-weight-bold">Female</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix ">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold">Passport
                                                                    Number :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <input class="form-control required" id="Name"
                                                                       name="userName" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold">Date
                                                                    Of Birth :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="row gutters-xs">
                                                                    <div class="col-5">
                                                                        <select name="user[month]"
                                                                                class="form-control custom-select">
                                                                            <option value="">Month</option>
                                                                            <option value="1">January</option>
                                                                            <option value="2">February</option>
                                                                            <option value="3">March</option>
                                                                            <option value="4">April</option>
                                                                            <option value="5">May</option>
                                                                            <option selected="selected" value="6">June
                                                                            </option>
                                                                            <option value="7">July</option>
                                                                            <option value="8">August</option>
                                                                            <option value="9">September</option>
                                                                            <option value="10">October</option>
                                                                            <option value="11">November</option>
                                                                            <option value="12">December</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <select name="user[day]"
                                                                                class="form-control custom-select">
                                                                            <option value="">Day</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                            <option value="11">11</option>
                                                                            <option value="12">12</option>
                                                                            <option value="13">13</option>
                                                                            <option value="14">14</option>
                                                                            <option value="15">15</option>
                                                                            <option value="16">16</option>
                                                                            <option value="17">17</option>
                                                                            <option value="18">18</option>
                                                                            <option value="19">19</option>
                                                                            <option selected="selected" value="20">20
                                                                            </option>
                                                                            <option value="21">21</option>
                                                                            <option value="22">22</option>
                                                                            <option value="23">23</option>
                                                                            <option value="24">24</option>
                                                                            <option value="25">25</option>
                                                                            <option value="26">26</option>
                                                                            <option value="27">27</option>
                                                                            <option value="28">28</option>
                                                                            <option value="29">29</option>
                                                                            <option value="30">30</option>
                                                                            <option value="31">31</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <select name="user[year]"
                                                                                class="form-control custom-select">
                                                                            <option value="">Year</option>
                                                                            <option value="2014">2014</option>
                                                                            <option value="2013">2013</option>
                                                                            <option value="2012">2012</option>
                                                                            <option value="2011">2011</option>
                                                                            <option value="2010">2010</option>
                                                                            <option value="2009">2009</option>
                                                                            <option value="2008">2008</option>
                                                                            <option value="2007">2007</option>
                                                                            <option value="2006">2006</option>
                                                                            <option value="2005">2005</option>
                                                                            <option value="2004">2004</option>
                                                                            <option value="2003">2003</option>
                                                                            <option value="2002">2002</option>
                                                                            <option value="2001">2001</option>
                                                                            <option value="2000">2000</option>
                                                                            <option value="1999">1999</option>
                                                                            <option value="1998">1998</option>
                                                                            <option value="1997">1997</option>
                                                                            <option value="1996">1996</option>
                                                                            <option value="1995">1995</option>
                                                                            <option value="1994">1994</option>
                                                                            <option value="1993">1993</option>
                                                                            <option value="1992">1992</option>
                                                                            <option value="1991">1991</option>
                                                                            <option value="1990">1990</option>
                                                                            <option selected="selected" value="1989">
                                                                                1989
                                                                            </option>
                                                                            <option value="1988">1988</option>
                                                                            <option value="1987">1987</option>
                                                                            <option value="1986">1986</option>
                                                                            <option value="1985">1985</option>
                                                                            <option value="1984">1984</option>
                                                                            <option value="1983">1983</option>
                                                                            <option value="1982">1982</option>
                                                                            <option value="1981">1981</option>
                                                                            <option value="1980">1980</option>
                                                                            <option value="1979">1979</option>
                                                                            <option value="1978">1978</option>
                                                                            <option value="1977">1977</option>
                                                                            <option value="1976">1976</option>
                                                                            <option value="1975">1975</option>
                                                                            <option value="1974">1974</option>
                                                                            <option value="1973">1973</option>
                                                                            <option value="1972">1972</option>
                                                                            <option value="1971">1971</option>
                                                                            <option value="1970">1970</option>
                                                                            <option value="1969">1969</option>
                                                                            <option value="1968">1968</option>
                                                                            <option value="1967">1967</option>
                                                                            <option value="1966">1966</option>
                                                                            <option value="1965">1965</option>
                                                                            <option value="1964">1964</option>
                                                                            <option value="1963">1963</option>
                                                                            <option value="1962">1962</option>
                                                                            <option value="1961">1961</option>
                                                                            <option value="1960">1960</option>
                                                                            <option value="1959">1959</option>
                                                                            <option value="1958">1958</option>
                                                                            <option value="1957">1957</option>
                                                                            <option value="1956">1956</option>
                                                                            <option value="1955">1955</option>
                                                                            <option value="1954">1954</option>
                                                                            <option value="1953">1953</option>
                                                                            <option value="1952">1952</option>
                                                                            <option value="1951">1951</option>
                                                                            <option value="1950">1950</option>
                                                                            <option value="1949">1949</option>
                                                                            <option value="1948">1948</option>
                                                                            <option value="1947">1947</option>
                                                                            <option value="1946">1946</option>
                                                                            <option value="1945">1945</option>
                                                                            <option value="1944">1944</option>
                                                                            <option value="1943">1943</option>
                                                                            <option value="1942">1942</option>
                                                                            <option value="1941">1941</option>
                                                                            <option value="1940">1940</option>
                                                                            <option value="1939">1939</option>
                                                                            <option value="1938">1938</option>
                                                                            <option value="1937">1937</option>
                                                                            <option value="1936">1936</option>
                                                                            <option value="1935">1935</option>
                                                                            <option value="1934">1934</option>
                                                                            <option value="1933">1933</option>
                                                                            <option value="1932">1932</option>
                                                                            <option value="1931">1931</option>
                                                                            <option value="1930">1930</option>
                                                                            <option value="1929">1929</option>
                                                                            <option value="1928">1928</option>
                                                                            <option value="1927">1927</option>
                                                                            <option value="1926">1926</option>
                                                                            <option value="1925">1925</option>
                                                                            <option value="1924">1924</option>
                                                                            <option value="1923">1923</option>
                                                                            <option value="1922">1922</option>
                                                                            <option value="1921">1921</option>
                                                                            <option value="1920">1920</option>
                                                                            <option value="1919">1919</option>
                                                                            <option value="1918">1918</option>
                                                                            <option value="1917">1917</option>
                                                                            <option value="1916">1916</option>
                                                                            <option value="1915">1915</option>
                                                                            <option value="1914">1914</option>
                                                                            <option value="1913">1913</option>
                                                                            <option value="1912">1912</option>
                                                                            <option value="1911">1911</option>
                                                                            <option value="1910">1910</option>
                                                                            <option value="1909">1909</option>
                                                                            <option value="1908">1908</option>
                                                                            <option value="1907">1907</option>
                                                                            <option value="1906">1906</option>
                                                                            <option value="1905">1905</option>
                                                                            <option value="1904">1904</option>
                                                                            <option value="1903">1903</option>
                                                                            <option value="1902">1902</option>
                                                                            <option value="1901">1901</option>
                                                                            <option value="1900">1900</option>
                                                                            <option value="1899">1899</option>
                                                                            <option value="1898">1898</option>
                                                                            <option value="1897">1897</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="Inform">Languages :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select multiple="multiple" class="multi-select"
                                                                        id="Inform">
                                                                    <option>English</option>
                                                                    <option>Persian</option>
                                                                    <option>Arabic</option>
                                                                    <option>Turkish</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group  clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold">Marriage
                                                                    Status :</label>
                                                            </div>
                                                            <div class="col-lg-9 d-flex">
                                                                <label class="custom-control custom-radio mr-5">
                                                                    <input type="radio" class="custom-control-input"
                                                                           name="example-radios" value="option1"
                                                                           checked>
                                                                    <span class="custom-control-label font-weight-bold">Bachelor</span>
                                                                </label>
                                                                <label class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input"
                                                                           name="example-radios" value="option2">
                                                                    <span class="custom-control-label font-weight-bold">Married</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold">Military
                                                                    Service Status :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control" id="ProjectManager">
                                                                    <option></option>
                                                                    <option></option>
                                                                    <option></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix ">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold">Mobile
                                                                    Number :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <input class="form-control required" id="Name"
                                                                       name="userName" type="tel">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix ">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold">Email
                                                                    :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <input class="form-control required" id="Name"
                                                                       name="userName" type="email"
                                                                       placeholder="..........@example.com">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="Descriptions">Descriptions (bio) :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <textarea class="form-control"
                                                                          name="example-textarea-input" rows="6"
                                                                          placeholder="text here.."
                                                                          id="Descriptions"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab2-2">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="Address">Address :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-map-signs tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control fc-datepicker"
                                                                           id="Address" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="Location">Static Phone :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-phone tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control fc-datepicker"
                                                                           id="Location" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="Location">Location :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-map-marker-alt tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control fc-datepicker"
                                                                           id="Location" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="Descriptions">Map :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="map-header">
                                                                    <div class="map-header-layer" id="map2"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab3-3">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold">Working
                                                                    Branch :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control" id="ProjectManager">
                                                                    <option>Saad Abad</option>
                                                                    <option>Velenjak</option>
                                                                    <option>Shariati</option>
                                                                    <option>Ferdosi</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold">Unit
                                                                    :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control" id="ProjectManager">
                                                                    <option>TQM</option>
                                                                    <option>Designing</option>
                                                                    <option>Operation</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold">Role
                                                                    :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control" id="ProjectManager">
                                                                    <option>Photographer</option>
                                                                    <option>Cameraman</option>
                                                                    <option>Quality Supervisor</option>
                                                                    <option>Receptionist</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold">Skills
                                                                    :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select multiple="multiple" class="multi-select">
                                                                    <option value="1"></option>
                                                                    <option value="2"></option>
                                                                    <option value="3"></option>
                                                                    <option value="4"></option>
                                                                    <option value="5"></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab4-4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-4">
                                                                <label class="control-label form-label font-weight-bold">Working
                                                                    Days :</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <select multiple="multiple" class="multi-select">
                                                                    <option value="1">Saturday</option>
                                                                    <option value="2">Sunday</option>
                                                                    <option value="3">Monday</option>
                                                                    <option value="4">Tuesday</option>
                                                                    <option value="5">Wednesday</option>
                                                                    <option value="6">Thursday</option>
                                                                    <option value="7">Friday</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix ">
                                                        <div class="row ">
                                                            <div class="col-lg-4">
                                                                <label class="control-label form-label font-weight-bold">Working
                                                                    From :</label>
                                                            </div>
                                                            <div class="col-lg-8">
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
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix ">
                                                        <div class="row ">
                                                            <div class="col-lg-4">
                                                                <label class="control-label form-label font-weight-bold">Working
                                                                    To :</label>
                                                            </div>
                                                            <div class="col-lg-8">
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
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix ">
                                                        <div class="row ">
                                                            <div class="col-lg-4">
                                                                <label class="control-label form-label font-weight-bold">Regular
                                                                    Time Work Per Month :</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input class="form-control required" id="Name"
                                                                       name="userName" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab5-5">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix ">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold">Salary
                                                                    Per Hour :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <input class="form-control required" id="Name"
                                                                       name="userName" type="text"
                                                                       placeholder="$ 000,000,000">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix ">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold">Over
                                                                    Work Per Hour :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <input class="form-control required" id="Name"
                                                                       name="userName" type="text"
                                                                       placeholder="$ 000,000,000">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix ">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold">Deal
                                                                    :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <input class="form-control required" id="Name"
                                                                       name="userName" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix ">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold">Project
                                                                    :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <input class="form-control required" id="Name"
                                                                       name="userName" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab6-6">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix mt-3">
                                                        <div class="row justify-content-center">
                                                            <div class="col-lg-5 ">
                                                                <div class="thumbnail border-0">
                                                                    <a href="#">
                                                                        <img src="../assets/images/photos/19.jpg"
                                                                             alt="thumb1" class="thumbimg ">
                                                                    </a>
                                                                    <div class="caption">
                                                                        <h4 class="text-center mt-3"><strong>Profile
                                                                                Picture</strong></h4>
                                                                        <div class="text-center">
                                                                            <button href="#"
                                                                                    class="btn-pill btn-outline-secondary mt-1 "
                                                                                    role="button">Upload <i
                                                                                        class="fas fa-cloud-upload-alt"></i>
                                                                            </button>
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
    '/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js',
    '/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
    '/assets/plugins/jvectormap/gdp-data.js',
    '/assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js',
    '/assets/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js',
    '/assets/plugins/jvectormap/jquery-jvectormap-au-mill.js',
    '/assets/plugins/jvectormap/jquery-jvectormap-ca-lcc.js',
    '/assets/js/jvectormap.js',
    '/assets/plugins/multipleselect/multiple-select.js',
    '/assets/plugins/multipleselect/multi-select.js',
    '/assets/plugins/peitychart/jquery.peity.min.js',
    '/assets/plugins/othercharts/jquery.knob.js',
    '/assets/plugins/othercharts/othercharts.js',
    '/assets/js/apexcharts.js',
    '/assets/plugins/chart/chart.bundle.js',
    '/assets/js/custom.js',
    '/assets/js/index5.js',
];
?>