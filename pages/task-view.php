<?php if (false): ?>
    <!--Calendar Css -->
    <link href="../assets/plugins/calendar2/css/tui-time-picker.css" rel="stylesheet"/>
    <link href="../assets/plugins/calendar2/css/tui-date-picker.css" rel="stylesheet"/>
    <link href="../assets/plugins/calendar2/css/tui-calendar.css" rel="stylesheet"/>
    <link href="../assets/plugins/calendar2/css/default.css" rel="stylesheet"/>
    <link href="../assets/plugins/calendar2/css/icons.css" rel="stylesheet"/>
<?php endif; ?>

<!--Page Header-->
<div class="mb-5">
    <div class="page-header  mb-0">
        <h4 class="page-title">Task View</h4>
        <div class="float-right ml-auto">
            <a class="icon" href="javascript:void(0)"></a>
            <a href="#" class="btn btn-primary  bg-secondary"><i
                        class="fas fa-calendar mr-1"></i>Schedule</a>
            <a href="javascript:void(0)" data-toggle="modal" data-target="#edit-modal"
               class="btn btn-primary "><i class="fas fa-pen"></i> Edit</a>
            <a href="#" class="btn btn-primary  bg-red"><i
                        class="fas fa-trash mr-1"></i>Delete</a>

        </div>

    </div>
</div>
<!--page header-->

<div class="row">
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <div class="panel panel-primary">
                    <div class="p-3 ">
                        <div class="tabs-menu d-flex ">
                            <!-- Tabs -->
                            <ul class="nav panel-tabs">
                                <li><a href="#tab2" class=" active font-weight-bold" data-toggle="tab">Description</a>
                                </li>
                                <li><a href="#tab1" class=" font-weight-bold" data-toggle="tab">Timing</a></li>
                                <li><a href="#tab4" class=" font-weight-bold" data-toggle="tab">Files</a></li>
                                <li><a href="#tab3" class="font-weight-bold" data-toggle="tab">Other Info</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body tabs-menu-body border-0 ">
                        <div class="tab-content">
                            <div class="tab-pane " id="tab1">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="media mt-1 pb-2">
                                            <div class="mediaicon">
                                                <i class="far fa-calendar" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body ml-5 mt-1">
                                                <h6 class="mediafont text-dark mb-1">From Date</h6>
                                                <span class="d-block">07 October 2019</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="media mt-1 pb-2">
                                            <div class="mediaicon">
                                                <i class="far fa-calendar-check" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body ml-5 mt-1">
                                                <h6 class="mediafont text-dark mb-1">Deadline Date</h6>
                                                <span class="d-block">12 February 2020</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="media mt-1 pb-2">
                                            <div class="mediaicon">
                                                <i class="far fa-clock" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body ml-5 mt-1">
                                                <h6 class="mediafont text-dark mb-1">From Time</h6>
                                                <span class="d-block">09:00 AM</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="media mt-1 pb-2">
                                            <div class="mediaicon">
                                                <i class="far fa-clock" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body ml-5 mt-1">
                                                <h6 class="mediafont text-dark mb-1">To Time</h6><span
                                                        class="d-block">09:15 PM</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="media mt-1 pb-2">
                                            <div class="mediaicon">
                                                <i class="fas fa-clock" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body ml-5 mt-1">
                                                <h6 class="mediafont text-dark mb-1">Estimation Time</h6><span
                                                        class="d-block">12h 15m</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane active " id="tab2">
                                <blockquote class="blockquote mb-0 card-body">
                                    <h3 class="text-dark">Description Title </h3>
                                    <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Praesent semper
                                        feugiat nibh sed. Neque aliquam vestibulum morbi blandit. Ipsum consequat nisl
                                        vel pretium lectus quam id leo in. </p>
                                    <footer class="blockquote-footer">
                                        <small class="text-muted font-weight-bold mb-3">Saghar Nikpoor <cite
                                                    title="Source Title">public relations expert</cite></small>
                                    </footer>
                                </blockquote>
                            </div>
                            <div class="tab-pane " id="tab3">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="media mt-1 pb-2">
                                            <div class="mediaicon">
                                                <i class="fas fa-project-diagram" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body ml-5 mt-1">
                                                <h6 class="mediafont text-dark mb-1">Project</h6>
                                                <span class="d-block">FH 3400 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="media mt-1 pb-2">
                                            <div class="mediaicon">
                                                <i class="fas fa-list" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body ml-5 mt-1">
                                                <h6 class="mediafont text-dark mb-1">Milestone</h6>
                                                <span class="d-block">ML 1600f622 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="media mt-1 pb-2">
                                            <div class="mediaicon">
                                                <i class="fas fa-map-signs" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body ml-5 mt-1">
                                                <h6 class="mediafont text-dark mb-1">Address</h6><span class="d-block">Shariati street, Ladan Alley, Majnon Reception Hall</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-12">
                                        <img src="/assets/images/photos/Matican Location Map + Pin.png" width="100%" alt="#">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab4">
                                <div class="row img-gallery">
                                    <div class="col-6">
                                        <a href="javascript:void(0)" class="d-block link-overlay">
                                            <img class="d-block img-fluid rounded" src="../assets/images/photos/11.jpg" alt="">
                                            <span class="link-overlay-bg rounded">
                                                <i class="fas fa-search"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0)" class="d-block link-overlay">
                                            <img class="d-block img-fluid rounded" src="../assets/images/photos/11.jpg" alt="">
                                            <span class="link-overlay-bg rounded">
                                                <i class="fas fa-search"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0)" class="d-block link-overlay">
                                            <img class="d-block img-fluid rounded" src="../assets/images/photos/11.jpg" alt="">
                                            <span class="link-overlay-bg rounded">
                                                <i class="fas fa-search"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0)" class="d-block link-overlay">
                                            <img class="d-block img-fluid rounded" src="../assets/images/photos/11.jpg" alt="">
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
            </div>
        </div>

        <!--        Comment-->
        <div class="card">
            <div class="card-body">
                <div class="media ">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object brround"
                                 src="../assets/images/photos/pro11.jpg" alt="media1">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Nasrin Maghami</h4>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                        ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object brround"
                                         src="../assets/images/photos/pro9.jpg" alt="media1">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Abolfazl Naseh</h4>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                quae ab illo inventore veritatis et quasi architecto beatae vitae
                                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                aspernatur aut odit aut fugit, sed quia consequuntur magni dolores
                                eos qui ratione voluptatem sequi nesciunt
                            </div>
                        </div>
                        <div class="media ">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object brround"
                                         src="../assets/images/photos/pro18.jpg" alt="media1">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="form-group">
                            <textarea class="form-control" name="example-textarea-input" rows="3"
                                      placeholder="text here.."></textarea>
                                    <div class="row mt-3">
                                        <div class="col-12 text-right">
                                            <button class="btn btn-primary ">Reply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="media ">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object brround"
                                 src="../assets/images/photos/pro11.jpg" alt="media1">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Nasrin Maghami</h4>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                        ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
                        <div class="media ">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object brround"
                                         src="../assets/images/photos/pro18.jpg" alt="media1">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="form-group">
                            <textarea class="form-control" name="example-textarea-input" rows="3"
                                      placeholder="text here.."></textarea>
                                    <div class="row mt-3">
                                        <div class="col-12 text-right">
                                            <button class="btn btn-primary ">Reply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="media mt-0">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object brround"
                                 src="../assets/images/photos/pro18.jpg" alt="media1">
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="form-group">
                            <textarea class="form-control" name="example-textarea-input" rows="3"
                                      placeholder="text here.."></textarea>
                            <div class="row mt-3">
                                <div class="col-12 text-right">
                                    <button class="btn btn-primary ">Reply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--        Comment-->
    </div>
    <div class="col-4">
        <div class="row">
            <div class="col-12">
                <div class="card">


                    <div class="card-body ">
                        <div class="row">
                            <div class="col-12">
                                <h3>Total: 00:02:30</h3>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">

                            <a href="#" class="btn btn-primary btn-sm bg-success"><i
                                        class="fas fa-play mr-1"></i>Start</a>
                            <a href="#" class="btn btn-primary btn-sm bg-info"><i
                                        class="fas fa-check mr-1"></i>Finish</a>
                            <a href="#" class="btn btn-primary btn-sm bg-success"><i
                                        class="fas fa-check-double mr-1"></i>Accept</a>
                            <a href="#" class="btn btn-primary btn-sm bg-warning"><i
                                        class="fas fa-pause mr-1"></i>Pause</a>
                        </div>

                    </div>
                    <div class="progress progress-md mb-3">
                        <div class="progress-bar bg-success w-10">10%</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">


                    <div class="card-body ">
                        <div class="row">
                            <div class="col-12">
                                <h3>Total: 00:02:30</h3>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">

                            <a href="#" class="btn btn-primary btn-sm bg-success"><i
                                        class="fas fa-play mr-1"></i>Start</a>
                            <a href="#" class="btn btn-primary btn-sm bg-info"><i
                                        class="fas fa-check mr-1"></i>Finish</a>
                            <a href="#" class="btn btn-primary btn-sm bg-success"><i
                                        class="fas fa-check-double mr-1"></i>Accept</a>
                            <a href="#" class="btn btn-primary btn-sm bg-warning"><i
                                        class="fas fa-pause mr-1"></i>Pause</a>
                        </div>

                    </div>
                    <div class="progress progress-md mb-3">
                        <div class="progress-bar bg-danger w-90">90%</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">


                    <div class="card-body ">
                        <div class="row">
                            <div class="col-12">
                                <h3>Total: 00:02:30</h3>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">

                            <a href="#" class="btn btn-primary btn-sm bg-success"><i
                                        class="fas fa-play mr-1"></i>Start</a>
                            <a href="#" class="btn btn-primary btn-sm bg-info"><i
                                        class="fas fa-check mr-1"></i>Finish</a>
                            <a href="#" class="btn btn-primary btn-sm bg-success"><i
                                        class="fas fa-check-double mr-1"></i>Accept</a>
                            <a href="#" class="btn btn-primary btn-sm bg-warning"><i
                                        class="fas fa-pause mr-1"></i>Pause</a>
                        </div>

                    </div>
                    <div class="progress progress-md mb-3">
                        <div class="progress-bar bg-warning w-70">70%</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="card ">
                    <div class="card-body text-center pt-3 ">
                        <a href="#">
                    <span class="avatar avatar-xl brround cover-image m-2"
                          data-image-src="../assets/images/photos/pro9.jpg">
                        <span class="avatar-status bg-green"></span>
                    </span>
                        </a>
                        <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">John Taromi</a></h5>
                        <span>Requester</span>
                        <div>
                            <span class="badge badge-default">manager</span>
                            <span class="badge badge-default">supervisor</span>
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
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="card ">
                    <div class="card-body text-center pt-3 ">
                        <a href="#">
                    <span class="avatar avatar-xl brround cover-image m-2"
                          data-image-src="../assets/images/photos/pro14.jpg">
                        <span class="avatar-status bg-green"></span>
                    </span>
                        </a>
                        <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">Mehdi Yegane</a></h5>
                        <span>Owner</span>
                        <div>
                            <span class="badge badge-default">Religious</span>
                            <span class="badge badge-default">sullen</span>
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
            <div class="col-12">
                <div id="equipment" class="card">
                    <div class="card-body d-flex">
                        <img src="../assets/images/svgs/png/058-logistic.png" alt="img" class="w-8 h-8">
                        <div class="svg-icons float-right text-right ml-auto">
                            <h2>11</h2>
                            <button href="#" class=" btn-pill btn-outline-primary btn-sm font-weight-bold">Files
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div id="equipment" class="card">
                    <div class="card-body d-flex">
                        <img src="../assets/images/svgs/png/088-package.png" alt="img" class="w-8 h-8">
                        <div class="svg-icons float-right text-right ml-auto">
                            <h2>5</h2>
                            <button href="#" class=" btn-pill btn-outline-primary btn-sm font-weight-bold">Equipment
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div id="Services" class="card">
                    <div class="card-body d-flex">
                        <img src="../assets/images/svgs/png/095-box-14.png" alt="img" class="w-8 h-8">
                        <div class="svg-icons float-right text-right ml-auto">
                            <h2>8</h2>
                            <button href="#" class=" btn-pill btn-outline-primary btn-sm font-weight-bold">Services
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title font-weight-bold">Calls</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter table-hover">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Time</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>John Taromi</td>
                                    <td>Mehdi Yegane</td>
                                    <td>3:10</td>
                                    <td><a href="#" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>John Taromi</td>
                                    <td>Mehdi Yegane</td>
                                    <td>3:10</td>
                                    <td><a href="#" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>John Taromi</td>
                                    <td>Mehdi Yegane</td>
                                    <td>3:10</td>
                                    <td><a href="#" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>John Taromi</td>
                                    <td>Mehdi Yegane</td>
                                    <td>3:10</td>
                                    <td><a href="#" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>John Taromi</td>
                                    <td>Mehdi Yegane</td>
                                    <td>3:10</td>
                                    <td><a href="#" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i> View</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if (false): ?>
            <div class="row ">
                <div class="col-xl-12 col-lg-12 col-md-12 p-0">
                    <div class="col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">
                                    <div id="lnb" class="col-lg-3 col-md-12 col-12">
                                        <div class="lnb-new-schedule">
                                            <button id="btn-new-schedule" type="button"
                                                    class="btn btn-secondary btn-block lnb-new-schedule-btn"
                                                    data-toggle="modal">
                                                New schedule
                                            </button>
                                        </div>
                                        <div id="lnb-calendars" class="lnb-calendars">
                                            <div>
                                                <div class="lnb-calendars-item">
                                                    <label>
                                                        <input class="tui-full-calendar-checkbox-square" type="checkbox"
                                                               value="all" checked>
                                                        <span></span>
                                                        <strong>View all</strong>
                                                    </label>
                                                </div>
                                            </div>
                                            <div id="calendarList" class="lnb-calendars-d1">
                                            </div>
                                        </div>
                                    </div>


                                    <div id="right" class="col-lg-9 col-md-12 col-12">
                                        <div id="menu">
                                            <div class="dropdown">
                                                <button id="dropdownMenu-calendarType"
                                                        class="btn btn-primary btn-sm btn-pill dropdown-toggle"
                                                        type="button"
                                                        data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="true">
                                                    <i id="calendarTypeIcon" class="calendar-icon ic_view_month"></i>
                                                    <span id="calendarTypeName">Dropdown</span>&nbsp;
                                                    <i class="calendar-icon tui-full-calendar-dropdown-arrow"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu"
                                                    aria-labelledby="dropdownMenu-calendarType">
                                                    <li role="presentation">
                                                        <a class="dropdown-menu-title" role="menuitem"
                                                           data-action="toggle-daily">
                                                            <i class="calendar-icon ic_view_day"></i>Daily
                                                        </a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a class="dropdown-menu-title" role="menuitem"
                                                           data-action="toggle-weekly">
                                                            <i class="calendar-icon ic_view_week"></i>Weekly
                                                        </a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a class="dropdown-menu-title" role="menuitem"
                                                           data-action="toggle-monthly">
                                                            <i class="calendar-icon ic_view_month"></i>Month
                                                        </a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a class="dropdown-menu-title" role="menuitem"
                                                           data-action="toggle-weeks2">
                                                            <i class="calendar-icon ic_view_week"></i>2 weeks
                                                        </a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a class="dropdown-menu-title" role="menuitem"
                                                           data-action="toggle-weeks3">
                                                            <i class="calendar-icon ic_view_week"></i>3 weeks
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="dropdown-divider"></li>
                                                    <li role="presentation">
                                                        <a role="menuitem" data-action="toggle-workweek">
                                                            <input type="checkbox"
                                                                   class="tui-full-calendar-checkbox-square"
                                                                   value="toggle-workweek" checked>
                                                            <span class="checkbox-title"></span>Show weekends
                                                        </a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a role="menuitem" data-action="toggle-start-day-1">
                                                            <input type="checkbox"
                                                                   class="tui-full-calendar-checkbox-square"
                                                                   value="toggle-start-day-1">
                                                            <span class="checkbox-title"></span>Start Week on Monday
                                                        </a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a role="menuitem" data-action="toggle-narrow-weekend">
                                                            <input type="checkbox"
                                                                   class="tui-full-calendar-checkbox-square"
                                                                   value="toggle-narrow-weekend">
                                                            <span class="checkbox-title"></span>Narrower than weekdays
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span id="menu-navi">
															<button type="button"
                                                                    class="btn btn-success btn-sm btn-pill move-today"
                                                                    data-action="move-today">Today</button>
															<button type="button"
                                                                    class="btn btn-primary btn-pill btn-sm move-day"
                                                                    data-action="move-prev">
																<i class="calendar-icon ic-arrow-line-left"
                                                                   data-action="move-prev"></i>
															</button>
															<button type="button"
                                                                    class="btn btn-primary btn-pill btn-sm move-day "
                                                                    data-action="move-next">
																<i class="calendar-icon ic-arrow-line-right"
                                                                   data-action="move-next"></i>
															</button>
														</span>
                                            <span id="renderRange" class="render-range"></span>
                                        </div>
                                        <div id="calendar" class="table-responsive h-800"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>


<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="example-Modal3-1">Edit Task</h5>
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
                                            <li class=""><a href="#tab111" class="active font-weight-bold"
                                                            data-toggle="tab">Basic Info</a></li>
                                            <li><a href="#tab222" class="font-weight-bold" data-toggle="tab">Timing & Financial</a>
                                            </li>
                                            <li><a href="#tab333" class="font-weight-bold" data-toggle="tab">Execution
                                                    Place</a></li>
                                            <li><a href="#tab444" class="font-weight-bold" data-toggle="tab">Relation</a>
                                            </li>
                                            <li><a href="#tab555" class="font-weight-bold"
                                                   data-toggle="tab">Requirements</a></li>
                                            <li><a href="#tab666" class="font-weight-bold"
                                                   data-toggle="tab">Notification</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body  border-left-0 border-right-0 border-bottom-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active " id="tab111">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="title">Title </label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <input class="form-control required" id="title"
                                                                       name="title" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="Descriptions">Descriptions </label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <textarea class="form-control"
                                                                          name="example-textarea-input" rows="6"
                                                                          placeholder="text here.."
                                                                          id="Descriptions"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group  clearfix">
                                                        <div class="row ">
                                                            <div class="col-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="Priority">Priority </label>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="row">
                                                                    <label class="custom-control custom-radio col-4">
                                                                        <input type="radio" class="custom-control-input"
                                                                               name="example-radios" value="option1"
                                                                               checked="">
                                                                        <span class="custom-control-label font-weight-bold">High</span>
                                                                    </label>
                                                                    <label class="custom-control custom-radio col-4">
                                                                        <input type="radio" class="custom-control-input"
                                                                               name="example-radios" value="option1"
                                                                               checked="">
                                                                        <span class="custom-control-label font-weight-bold">Medium</span>
                                                                    </label>
                                                                    <label class="custom-control custom-radio col-4">
                                                                        <input type="radio" class="custom-control-input"
                                                                               name="example-radios" value="option1"
                                                                               checked="">
                                                                        <span class="custom-control-label font-weight-bold">Low</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="Owner">Owner </label>
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
                                                                            <!-- Your text here. For this demo, the content is generated automatically. -->
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
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab222">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="FromDate">From Date :</label>
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
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="DeadlineDate">Deadline Date :</label>
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
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="FromTime">From Time :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="far fa-clock tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control required"
                                                                           id="FromTime"
                                                                           name="FromTime" type="time">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="toTime">To Time :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="far fa-clock tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control required"
                                                                           id="toTime"
                                                                           name="toTime" type="time">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="EstimationTime">Estimation
                                                                    Time :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-clock tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control required"
                                                                           id="EstimationTime"
                                                                           name="EstimationTime"
                                                                           type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix ">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="title">Actual cost : </label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <input class="form-control required" id="title"
                                                                       name="title" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix mb-4 ">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="title">Apply custom cost : </label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <label class="custom-switch">
                                                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                                                    <span class="custom-switch-indicator"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group  clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="branch">Cost method </label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control" id="branch">
                                                                    <option>fixed</option>
                                                                    <option>per hour</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix ">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="title">Amount : </label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <input class="form-control required" id="title"
                                                                       name="title" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix ">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="title">Total cost : </label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <input class="form-control required" id="title"
                                                                       name="title" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab333">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="Address">Address </label>
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
                                                            <div class="col-12 mt-1">
                                                                <img class="border-dark"
                                                                     src="/assets/images/photos/Matican Location Map + Pin.png" width="100%"
                                                                     alt="">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab444">
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
                                                    <div class="form-group  clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="branch">Branch </label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control" id="branch">
                                                                    <option>Pasdaran</option>
                                                                    <option>Shariati</option>
                                                                    <option>Shoosh</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab555">
                                            <div class="row ">
                                                <div class="col-12">
                                                    <div class="form-group  clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold">Blocker
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control">
                                                                    <option>This is a task name</option>
                                                                    <option>This is a task name</option>
                                                                    <option>This is a task name</option>
                                                                    <option>This is a task name</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group  clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold">Equipment
                                                                    Category </label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control select2-show-search"
                                                                        data-placeholder="Choose one (with optgroup)">
                                                                    <option>Digital</option>
                                                                    <option>Electronic</option>
                                                                    <option>Foodstuffs</option>
                                                                    <option>Paper & Cardboard</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-5">
                                                        <div class="col-md-12 col-lg-12">
                                                            <div class="table-responsive ">
                                                                <table class="table card-table table-vcenter text-nowrap table-primary border">
                                                                    <thead class="bg-primary text-white">
                                                                    <tr>
                                                                        <th class="text-white">ID</th>
                                                                        <th class="text-white">Name</th>
                                                                        <th class="text-white">Status</th>
                                                                        <th class="text-white"></th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>Heli shot NI370</td>
                                                                        <td>Intact</td>
                                                                        <td>
                                                                            <button href="#"
                                                                                    class="btn-pill btn-outline-secondary btn-sm">
                                                                                Select
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">2</th>
                                                                        <td>Camera Nikon D3400</td>
                                                                        <td>Destroyed</td>
                                                                        <td>
                                                                            <button href="#"
                                                                                    class="btn-pill btn-outline-secondary btn-sm">
                                                                                Select
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>Tripod stand F50</td>
                                                                        <td>Ready to use</td>
                                                                        <td>
                                                                            <button href="#"
                                                                                    class="btn-pill btn-outline-secondary btn-sm">
                                                                                Select
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix mt-5">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold">File
                                                                    Attachment </label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input"
                                                                           name="example-file-input-custom">
                                                                    <label class="custom-file-label">Choose file</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab666">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold"
                                                                       for="Inform">Inform </label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select multiple="multiple" class="multi-select"
                                                                        id="Inform">
                                                                    <option value="1">Ali Javadi</option>
                                                                    <option value="2">Mohsen Salami</option>
                                                                    <option value="3">Amir Ghane</option>
                                                                    <option value="4">Sahar Salimi</option>
                                                                    <option value="5">Rima mahan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="form-label font-weight-bold">Notifying </label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <div class="form-group m-0">

                                                                <div class="row gutters-xs">
                                                                    <div class="col-5">
                                                                        <select multiple="multiple"
                                                                                class="multi-select">
                                                                            <option value="1">Notification</option>
                                                                            <option value="2">SMS</option>
                                                                            <option value="3">Email</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <select name="user[day]"
                                                                                class="form-control custom-select">
                                                                            <option value="1">Minutes</option>
                                                                            <option value="2">Hour</option>
                                                                            <option value="3">Day</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <select name="user[year]"
                                                                                class="form-control custom-select">
                                                                            <option value="15">15</option>
                                                                            <option value="30">30</option>
                                                                            <option value="45">45</option>
                                                                            <option value="60">60</option>
                                                                            <option value="120">120</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-3">
                                                                    <div class="col-4"></div>
                                                                    <div class="col-4"></div>
                                                                    <div class="col-4 mt-2 mb-3">
                                                                        <button type="button" class="btn-pill btn-outline-secondary mr-auto">Add Notification</button>
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
                <div class="card mt-2 mb-0">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-4">
                                <div class="card  ">
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
                            <div class="col-4">
                                <div class="card">
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
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-body text-center pt-3 ">
                                        <a href="#">
                                            <span class="avatar avatar-xl brround cover-image m-2"
                                                  data-image-src="../assets/images/photos/pro7.jpg"
                                                  style="background: url(&quot;../assets/images/photos/pro9.jpg&quot;) center center;">
                                                <span class="avatar-status bg-green"></span>
                                            </span>
                                        </a>
                                        <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">Mehdi Yegane</a></h5>
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
                <button type="button" class="btn btn-primary"><i class="fas fa-check"></i> Save</button>
            </div>
        </div>

    </div>
</div>


<?php
if (false):
    $scripts = [
        '/assets/plugins/accordion/accordion.min.js',
        '/assets/plugins/accordion/accor.js',
        '/assets/plugins/multipleselect/multiple-select.js',
        '/assets/plugins/multipleselect/multi-select.js',
        '/assets/plugins/calendar2/js/tui-code-snippet.min.js',
        '/assets/plugins/calendar2/js/tui-time-picker.min.js',
        '/assets/plugins/calendar2/js/tui-date-picker.min.js',
        '/assets/plugins/calendar2/js/moment.min.js',
        '/assets/plugins/calendar2/js/chance.min.js',
        '/assets/plugins/calendar2/js/tui-calendar.js',
        '/assets/plugins/calendar2/js/calendars.js',
        '/assets/plugins/calendar2/js/schedules.js',
        '/assets/plugins/calendar2/js/dooray.js',
        '/assets/plugins/calendar2/js/default.js',
        '/assets/plugins/timeline/timeline.min.js',
        '/assets/js/timeline.js',
    ];

endif;
?>

<?php
$scripts = [
    '/assets/plugins/accordion/accordion.min.js',
    '/assets/plugins/accordion/accor.js',
    '/assets/plugins/multipleselect/multiple-select.js',
    '/assets/plugins/multipleselect/multi-select.js'
];


?>
