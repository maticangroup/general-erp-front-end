
<!--Calendar Css -->
<link href="../assets/plugins/calendar2/css/tui-time-picker.css" rel="stylesheet" />
<link href="../assets/plugins/calendar2/css/tui-date-picker.css" rel="stylesheet" />
<link href="../assets/plugins/calendar2/css/tui-calendar.css" rel="stylesheet" />
<link href="../assets/plugins/calendar2/css/default.css" rel="stylesheet" />
<link href="../assets/plugins/calendar2/css/icons.css" rel="stylesheet" />


<!--Page Header-->
<div class="mb-5">
    <div class="page-header  mb-0">
        <h4 class="page-title">Project View</h4>
        <div class="float-right ml-auto">
            <a class="icon" href="javascript:void(0)"></a>
            <a href="javascript:void(0)" data-toggle="modal" data-target="#edit-modal" class="btn btn-primary "><i class="fas fa-pen"></i> Edit</a>
        </div>
        <div class="float-right ml-1">
            <a href="#" class="btn btn-primary bg-red"><i class="fas fa-trash mr-1"></i>Delete</a>
        </div>
    </div>
</div>
<!--page header-->

<div class="row">
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div id="tasks" class="card">
            <div class="card-body d-flex">
                <img src="../assets/images/svgs/png/018-clipboard-1.png" alt="img" class="w-8 h-8">
                <div class="svg-icons float-right text-right ml-auto">
                    <h2>88</h2>
                    <button href="#" class=" btn-pill btn-outline-primary btn-sm font-weight-bold">Tasks</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div id="equipment" class="card">
            <div class="card-body d-flex">
                <img src="../assets/images/svgs/png/088-package.png" alt="img" class="w-8 h-8">
                <div class="svg-icons float-right text-right ml-auto">
                    <h2>203</h2>
                    <button href="#" class=" btn-pill btn-outline-primary btn-sm font-weight-bold">Equipment</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div id="invoice" class="card">
            <div class="card-body d-flex">
                <img src="../assets/images/svgs/png/096-parcel.png" alt="img" class="w-8 h-8">
                <div class="svg-icons float-right text-right ml-auto">
                    <h2>$7,256</h2>
                    <button href="#" class=" btn-pill btn-outline-primary btn-sm font-weight-bold">Invoice</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div id="PaymentRequest" class="card">
            <div class="card-body d-flex">
                <img src="../assets/images/svgs/png/097-premium.png" alt="img" class="w-8 h-8">
                <div class="svg-icons float-right text-right ml-auto">
                    <h2>56</h2>
                    <button href="#" class=" btn-pill btn-outline-primary btn-sm font-weight-bold">Payment Requests</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div id="Polls" class="card">
            <div class="card-body d-flex">
                <img src="../assets/images/svgs/png/026-customer-service.png" alt="img" class="w-8 h-8">
                <div class="svg-icons float-right text-right ml-auto">
                    <h2>14</h2>
                    <button href="#" class=" btn-pill btn-outline-primary btn-sm font-weight-bold">Polls</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-12 ">
        <div id="Letters" class="card">
            <div class="card-body d-flex">
                <img src="../assets/images/svgs/png/028-delivery-1.png" alt="img" class="w-8 h-8">
                <div class="svg-icons float-right text-right ml-auto">
                    <h2>37</h2>
                    <button href="#" class=" btn-pill btn-outline-primary btn-sm font-weight-bold">Letters</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div id="milestone" class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">Milestone & Tasks</h3>
            </div>
            <div class="card-body p-3">
                <div class="panel panel-primary">
                    <div class="  ">
                        <div class="tabs-menu1 ">
                            <!-- Tabs -->
                            <ul class="nav panel-tabs">
                                <li class=""><a href="#tab5" class="active font-weight-bold " data-toggle="tab">Preparation</a>
                                </li>
                                <li><a href="#tab6" class="font-weight-bold" data-toggle="tab">Look & Feel</a></li>
                                <li><a href="#tab7" class="font-weight-bold" data-toggle="tab">Completion</a></li>
                                <li class="ml-auto">
                                    <button type="button" class="btn btn-outline-primary " data-toggle="modal" data-target="#milestone-add-modal"><i class="fas  fa-plus"></i></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body  tabs-menu-body border-0">
                        <div class="tab-content">
                            <div class="tab-pane active " id="tab5">
                                <div id="jumbotron" class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="jumbotron d-print-inline-block rounded-0">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-12 col-md-12">
                                                        <div class="form-group row">
                                                            <div class="media-body ml-5">
                                                                <h6 class="mediafont text-dark mt-3 mb-3 ">Budget Usage
                                                                    :</h6>
                                                                <span class="d-block">
                                                                                <div class="progress progress-md mb-1">
                                                                                    <div class="progress-bar bg-success w-20 font-weight-bold">20%</div>
                                                                                </div>
                                                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-12 col-md-12">
                                                        <div class="form-group row">
                                                            <div class="media-body ml-5 mt-3">
                                                                <h6 class="mediafont text-dark mb-1">Total Estimate
                                                                    :</h6>
                                                                <p class="d-block text-muted">9h 25m</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-12 col-md-12">
                                                        <div class="form-group row">
                                                            <div class="media-body ml-5 mt-3">
                                                                <h6 class="mediafont text-danger mb-1">Estimate
                                                                    Overflow:</h6>
                                                                <p class="d-block text-muted">1h 50m</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-1 col-lg-12 col-md-12 text-right ">
                                                        <button href="javascript:void(0)" data-toggle="modal"
                                                                data-target="#edit-modal"
                                                                class="btn btn-outline-primary btn-sm mt-2"><i
                                                                    class="fas fa-pen"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div id="card-1" class="col-xl-4 col-lg-12 col-md-12">
                                        <div class="card rounded-0">
                                            <div class="card-header d-flex justify-content-center">
                                                <h3 class="row card-title font-weight-bold ">To Be Scheduled &nbsp;
                                                    <div class="text-muted">5h 25m</div>
                                                </h3>
                                            </div>
                                            <div class="card-body">
                                                <div id="sec1.1">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h5 class="font-weight-bold">Administration</h5>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <div class="form-group row">
                                                                <div class="media-body ml-3">
                                                                    <p class="text-info mb-0">2h remaining</p>
                                                                    <span class="d-block pr-5">
                                                                                <div class="progress progress-md mt-0 mb-1">
                                                                                    <div class="progress-bar bg-info w-100 font-weight-bold"></div>
                                                                                </div>
                                                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p class="font-weight-bold mb-0 mt-1">John Taromi</p>
                                                            <p>Develop first wireframes of new company page</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="sec1.2">
                                                    <div class="row mt-4">
                                                        <div class="col-12">
                                                            <h5 class="font-weight-bold">Development</h5>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-5 ">
                                                            <div class="form-group row">
                                                                <div class="media-body ml-3">
                                                                    <p class=" text-info mb-0">1h 25m remaining</p>
                                                                    <span class="d-block pr-5">
                                                                                <div class="progress progress-md mt-0 mb-1 ">
                                                                                    <div class="progress-bar bg-info w-100 font-weight-bold"></div>
                                                                                </div>
                                                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p class="font-weight-bold mt-1 mb-0">John Taromi</p>
                                                            <p>Fix bugs in company page</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="sec1.3">
                                                    <div class="row mt-4">
                                                        <div class="col-12">
                                                            <h5 class="font-weight-bold">Design</h5>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <div class="form-group row">
                                                                <div class="media-body ml-3">
                                                                    <p class="text-info mb-0">1h remaining</p>
                                                                    <span class="d-block pr-5">
                                                                                <div class="progress progress-md mt-0 mb-1">
                                                                                    <div class="progress-bar bg-info w-100 font-weight-bold"></div>
                                                                                </div>
                                                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p class="font-weight-bold mt-1 mb-0">John Taromi</p>
                                                            <p>Images for mobile reservation app</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="sec1.4">
                                                    <div class="row mt-6">
                                                        <div class="col-6 p-0">
                                                            <button type="button"
                                                                    class="btn-pill btn-outline-primary ml-3"><i
                                                                        class="fas  fa-plus"></i> New Task
                                                            </button>
                                                        </div>
                                                        <div class="col-6 p-0">
                                                            <button type="button"
                                                                    class="btn-pill btn-outline-primary ml-0"><i
                                                                        class="fas  fa-plus"></i> New Meeting
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="card-2" class="col-xl-4 col-lg-12 col-md-12">
                                        <div class="card rounded-0">
                                            <div class="card-header d-flex justify-content-center">
                                                <h3 class="row card-title font-weight-bold ">Scheduled &nbsp;
                                                    <div class="text-muted">3h</div>
                                                </h3>
                                            </div>
                                            <div class="card-body">
                                                <div id="sec2.1">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h5 class="font-weight-bold">Meetings</h5>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <div class="form-group row">
                                                                <div class="media-body ml-3">
                                                                    <p class="text-info mb-0">3h remaining</p>
                                                                    <span class="d-block pr-5">
                                                                            <div class="progress progress-md mt-0 mb-1">
                                                                                <div class="progress-bar bg-info w-100 font-weight-bold"></div>
                                                                            </div>
                                                                        </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p class="font-weight-bold mb-0 mt-1">John Taromi</p>
                                                            <p>29/07/19 - Status meeting on delivery of the project</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="card-3" class="col-xl-4 col-lg-12 col-md-12">
                                        <div class="card rounded-0">
                                            <div class="card-header d-flex justify-content-center">
                                                <h3 class="row card-title font-weight-bold ">Timetracking &nbsp;
                                                    <div class="text-muted">5h 50m</div>
                                                </h3>
                                            </div>
                                            <div class="card-body">
                                                <div id="sec3.1">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h5 class="font-weight-bold">Administration</h5>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <div class="form-group row">
                                                                <div class="media-body ml-3">
                                                                    <p class="text-danger mb-0">Total 5h 50m</p>
                                                                    <span class="d-block pr-5">
                                                                            <div class="progress progress-md mt-0 mb-1">
                                                                                <div class="progress-bar bg-danger w-50 font-weight-bold"></div>
                                                                            </div>
                                                                        </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p class="font-weight-bold mb-0 mt-1">John Taromi</p>
                                                            <p>
                                                                <del>Create logo for Peterson</del>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="tab6">

                            </div>
                            <div class="tab-pane " id="tab7">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="information" class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="row">
            <div class="col-md-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title font-weight-bold">Information</h3>
                    </div>
                    <div class="card-body p-5">
                        <div class="panel panel-primary">
                            <div class="  p-3 ">
                                <div class="tabs-menu ">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li><a href="#tab1111" class="active font-weight-bold" data-toggle="tab">Scheduling & Timing</a></li>
                                        <li><a href="#tab2222" class="font-weight-bold"  data-toggle="tab">Analytics</a></li>
                                        <li><a href="#tab3333" class="font-weight-bold" data-toggle="tab">People</a></li>
                                        <li><a href="#tab4444" class="font-weight-bold" data-toggle="tab">Calls</a></li>
                                        <li><a href="#tab5555" class="font-weight-bold" data-toggle="tab">Meeting</a></li>
                                        <li><a href="#tab6666" class="font-weight-bold" data-toggle="tab">Basic Info</a></li>
                                        <li><a href="#tab7777" class="font-weight-bold" data-toggle="tab">Financial</a></li>
                                        <li><a href="#tab8888" class="font-weight-bold" data-toggle="tab">Deed</a></li>
                                        <li><a href="#tab9999" class="font-weight-bold" data-toggle="tab">Notification & Alert</a></li>
                                        <li><a href="#tab1010" class="font-weight-bold" data-toggle="tab">Place & Location</a></li>
                                        <li><a href="#tab11111" class="font-weight-bold" data-toggle="tab">Files</a></li>
                                        <li><a href="#tab1212" class="font-weight-bold" data-toggle="tab">Quality Control</a></li>
                                        <li><a href="#tab1313" class="font-weight-bold" data-toggle="tab">Services</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body  tabs-menu-body border-0 ">
                                <div class="tab-content">
                                    <div class="tab-pane active " id="tab1111">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="border p-0">
                                                            <div class="row m-0">
                                                                <div id="lnb" class="col-lg-3 col-md-12 col-12">
                                                                    <div class="lnb-new-schedule">
                                                                        <button id="btn-new-schedule" type="button" class="btn btn-secondary btn-block lnb-new-schedule-btn" data-toggle="modal">
                                                                            New schedule</button>
                                                                    </div>
                                                                    <div id="lnb-calendars" class="lnb-calendars">
                                                                        <div>
                                                                            <div class="lnb-calendars-item">
                                                                                <label>
                                                                                    <input class="tui-full-calendar-checkbox-square" type="checkbox" value="all" checked>
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
                                                                            <button id="dropdownMenu-calendarType" class="btn btn-primary btn-sm btn-pill dropdown-toggle" type="button" data-toggle="dropdown"
                                                                                    aria-haspopup="true" aria-expanded="true">
                                                                                <i id="calendarTypeIcon" class="calendar-icon ic_view_month"></i>
                                                                                <span id="calendarTypeName">Dropdown</span>&nbsp;
                                                                                <i class="calendar-icon tui-full-calendar-dropdown-arrow"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu-calendarType">
                                                                                <li role="presentation">
                                                                                    <a class="dropdown-menu-title" role="menuitem" data-action="toggle-daily">
                                                                                        <i class="calendar-icon ic_view_day"></i>Daily
                                                                                    </a>
                                                                                </li>
                                                                                <li role="presentation">
                                                                                    <a class="dropdown-menu-title" role="menuitem" data-action="toggle-weekly">
                                                                                        <i class="calendar-icon ic_view_week"></i>Weekly
                                                                                    </a>
                                                                                </li>
                                                                                <li role="presentation">
                                                                                    <a class="dropdown-menu-title" role="menuitem" data-action="toggle-monthly">
                                                                                        <i class="calendar-icon ic_view_month"></i>Month
                                                                                    </a>
                                                                                </li>
                                                                                <li role="presentation">
                                                                                    <a class="dropdown-menu-title" role="menuitem" data-action="toggle-weeks2">
                                                                                        <i class="calendar-icon ic_view_week"></i>2 weeks
                                                                                    </a>
                                                                                </li>
                                                                                <li role="presentation">
                                                                                    <a class="dropdown-menu-title" role="menuitem" data-action="toggle-weeks3">
                                                                                        <i class="calendar-icon ic_view_week"></i>3 weeks
                                                                                    </a>
                                                                                </li>
                                                                                <li role="presentation" class="dropdown-divider"></li>
                                                                                <li role="presentation">
                                                                                    <a role="menuitem" data-action="toggle-workweek">
                                                                                        <input type="checkbox" class="tui-full-calendar-checkbox-square" value="toggle-workweek" checked>
                                                                                        <span class="checkbox-title"></span>Show weekends
                                                                                    </a>
                                                                                </li>
                                                                                <li role="presentation">
                                                                                    <a role="menuitem" data-action="toggle-start-day-1">
                                                                                        <input type="checkbox" class="tui-full-calendar-checkbox-square" value="toggle-start-day-1">
                                                                                        <span class="checkbox-title"></span>Start Week on Monday
                                                                                    </a>
                                                                                </li>
                                                                                <li role="presentation">
                                                                                    <a role="menuitem" data-action="toggle-narrow-weekend">
                                                                                        <input type="checkbox" class="tui-full-calendar-checkbox-square" value="toggle-narrow-weekend">
                                                                                        <span class="checkbox-title"></span>Narrower than weekdays
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <span id="menu-navi">
															<button type="button" class="btn btn-success btn-sm btn-pill move-today" data-action="move-today">Today</button>
															<button type="button" class="btn btn-primary btn-pill btn-sm move-day" data-action="move-prev">
																<i class="calendar-icon ic-arrow-line-left" data-action="move-prev"></i>
															</button>
															<button type="button" class="btn btn-primary btn-pill btn-sm move-day " data-action="move-next">
																<i class="calendar-icon ic-arrow-line-right" data-action="move-next"></i>
															</button>
														</span>
                                                                        <span id="renderRange" class="render-range"></span>
                                                                    </div>
                                                                    <div id="calendar"  class="table-responsive h-800"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane " id="tab2222">
                                        <div class="row mt-5">
                                            <div class="col-xl-4 col-lg-12 col-md-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="dash-2">
                                                                    <h2 class="text-info mb-2"><span class="counter font-weight-extrabold">89,385</span></h2>
                                                                    <span>Project Value</span>
                                                                </div>
                                                            </div>
                                                            <div class="col col-auto">
                                                                <span class="sparkline_bar1"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col">
                                                                <p class="mt-1 mb-1"><span class="font-weight-bold"><i
                                                                                class="fas fa-arrow-circle-up text-success"></i> 10%</span> Orders Incresed </p>
                                                            </div>
                                                            <div class="col col-auto">
                                                                <a class="btn btn-sm btn-white border">View Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="dash-2">
                                                                    <h2 class="text-orange mb-2">$<span class="counter font-weight-extrabold">83,547</span></h2>
                                                                    <span>Total Expenses</span>
                                                                </div>
                                                            </div>
                                                            <div class="col col-auto">
                                                                <span class="sparkline_bar"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col">
                                                                <p class="mt-1 mb-1"><span class="font-weight-bold"><i
                                                                                class="fas fa-arrow-circle-down text-danger"></i> 5%</span> Expences Decresed
                                                                </p>
                                                            </div>
                                                            <div class="col col-auto">
                                                                <a class="btn btn-sm btn-white border">View Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="dash-2">
                                                                    <h2 class="text-success mb-2">$<span class="counter font-weight-extrabold">99,425</span>
                                                                    </h2>
                                                                    <span>Total Net Profit</span>
                                                                </div>
                                                            </div>
                                                            <div class="col col-auto">
                                                                <span class="sparkline22 w-100"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col">
                                                                <p class="mt-1 mb-1"><span class="font-weight-bold"><i
                                                                                class="fas fa-arrow-circle-up text-success"></i> 13%</span> Net Profit Incresed
                                                                </p>
                                                            </div>
                                                            <div class="col col-auto">
                                                                <a class="btn btn-sm btn-white border">View Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-12 col-md-12">
                                                <div class="card overflow-hidden">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Statistics</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <canvas id="pieChart" class="donutShadow h-350 overflow-hidden"></canvas>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="mb-4">
                                                            <h4 class="mb-5 d-block">
                                                                <span class="fs-16">Invoice</span>
                                                                <span class="float-right p-1 badge badge-success text-white">
												15,635</span>
                                                            </h4>
                                                            <div class="progress progress-md h-1">
                                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success w-30"></div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-5">
                                                            <h4 class="mb-4">
                                                                <span class="fs-16">Progress</span>
                                                                <span class="float-right p-1 badge badge-danger text-white">
												97,356</span>
                                                            </h4>
                                                            <div class="progress progress-md h-1">
                                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger w-70"></div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-5">
                                                            <h4 class="mb-4">
                                                                <span class="fs-16">Deals</span>
                                                                <span class="float-right p-1 badge badge-primary text-white">
												28,425</span>
                                                            </h4>
                                                            <div class="progress progress-md h-1">
                                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary w-40"></div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-0">
                                                            <h4 class="mb-4">
                                                                <span class="fs-16">Vendors</span>
                                                                <span class="float-right p-1 badge badge-warning text-white">245</span>
                                                            </h4>
                                                            <div class="progress progress-md h-1">
                                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning w-35"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                     </div>
                                    <div class="tab-pane " id="tab3333">
                                        <div class="row mt-5">
                                            <div class="col-xl-3 col-lg-6 col-md-12">
                                                <div class="card ">
                                                    <div class="card-body text-center pt-3 ">
                                                        <a href="#">
                                                        <span class="avatar avatar-xl brround cover-image m-2" data-image-src="../assets/images/photos/pro1.jpg">
                                                            <span class="avatar-status bg-green"></span>
                                                        </span>
                                                        </a>
                                                        <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">Mahbobe Espidkar</a></h5>
                                                        <span>Product Owner</span>
                                                        <div >
                                                            <span class="badge badge-default">manager</span>
                                                        </div>
                                                        <div class="mt-4">
                                                            <button href="#" class="btn-pill  btn-outline-dark btn-sm font-weight-bold "><i class="fas fa-eye"></i></button>
                                                            <button href="#" class="btn-pill  btn-outline-success btn-sm font-weight-bold"><i class="fas fa-phone"></i></button>
                                                            <button href="#" class="btn-pill  btn-outline-warning btn-sm font-weight-bold"><i class="fas fa-envelope"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-12">
                                                <div class="card ">
                                                    <div class="card-body text-center pt-3 ">
                                                        <a href="#">
                                                        <span class="avatar avatar-xl brround cover-image m-2" data-image-src="../assets/images/photos/pro14.jpg">
                                                            <span class="avatar-status bg-green"></span>
                                                        </span>
                                                        </a>
                                                        <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">Mehdi Yegane</a></h5>
                                                        <span>Owner 1</span>
                                                        <div >
                                                            <span class="badge badge-default">Religious</span>
                                                            <span class="badge badge-default">sullen</span>
                                                        </div>
                                                        <div class="mt-4">
                                                            <button href="#" class="btn-pill  btn-outline-dark btn-sm font-weight-bold "><i class="fas fa-eye"></i></button>
                                                            <button href="#" class="btn-pill  btn-outline-success btn-sm font-weight-bold"><i class="fas fa-phone"></i></button>
                                                            <button href="#" class="btn-pill  btn-outline-warning btn-sm font-weight-bold"><i class="fas fa-envelope"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-12">
                                                <div class="card ">
                                                    <div class="card-body text-center pt-3 ">
                                                        <a href="#">
                                                        <span class="avatar avatar-xl brround cover-image m-2" data-image-src="../assets/images/photos/pro13.jpg">
                                                            <span class="avatar-status bg-red"></span>
                                                        </span>
                                                        </a>
                                                        <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">Sara Nazparvar</a></h5>
                                                        <span>Owner 2</span>
                                                        <div >
                                                            <span class="badge badge-default">religious</span>
                                                            <span class="badge badge-default">energetic</span>
                                                            <span class="badge badge-default">joyful</span>
                                                        </div>
                                                        <div class="mt-4">
                                                            <button href="#" class="btn-pill  btn-outline-dark btn-sm font-weight-bold "><i class="fas fa-eye"></i></button>
                                                            <button href="#" class="btn-pill  btn-outline-success btn-sm font-weight-bold"><i class="fas fa-phone"></i></button>
                                                            <button href="#" class="btn-pill  btn-outline-warning btn-sm font-weight-bold"><i class="fas fa-envelope"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-12">
                                                <div class="card ">
                                                    <div class="card-body text-center pt-3 ">
                                                        <a href="#">
                                                        <span class="avatar avatar-xl brround cover-image m-2" data-image-src="../assets/images/photos/pro9.jpg">
                                                            <span class="avatar-status bg-green"></span>
                                                        </span>
                                                        </a>
                                                        <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">John Taromi</a></h5>
                                                        <span>Project Manager</span>
                                                        <div >
                                                            <span class="badge badge-default">manager</span>
                                                            <span class="badge badge-default">supervisor</span>
                                                        </div>
                                                        <div class="mt-4">
                                                            <button href="#" class="btn-pill  btn-outline-dark btn-sm font-weight-bold "><i class="fas fa-eye"></i></button>
                                                            <button href="#" class="btn-pill  btn-outline-success btn-sm font-weight-bold"><i class="fas fa-phone"></i></button>
                                                            <button href="#" class="btn-pill  btn-outline-warning btn-sm font-weight-bold"><i class="fas fa-envelope"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-6 col-md-12">
                                                <div class="card ">
                                                    <div class="card-body text-center pt-3 ">
                                                        <a href="#">
                                                        <span class="avatar avatar-xl brround cover-image m-2" data-image-src="../assets/images/photos/pro8.jpg">
                                                            <span class="avatar-status bg-green"></span>
                                                        </span>
                                                        </a>
                                                        <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">Hashem Safaie</a></h5>
                                                        <span>Photo Designer</span>
                                                        <div >
                                                            <span class="badge badge-default">photo</span>
                                                            <span class="badge badge-default">design</span>
                                                        </div>
                                                        <div class="mt-4">
                                                            <button href="#" class="btn-pill  btn-outline-dark btn-sm font-weight-bold "><i class="fas fa-eye"></i></button>
                                                            <button href="#" class="btn-pill  btn-outline-success btn-sm font-weight-bold"><i class="fas fa-phone"></i></button>
                                                            <button href="#" class="btn-pill  btn-outline-warning btn-sm font-weight-bold"><i class="fas fa-envelope"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-12">
                                                <div class="card ">
                                                    <div class="card-body text-center pt-3 ">
                                                        <a href="#">
                                                        <span class="avatar avatar-xl brround cover-image m-2" data-image-src="../assets/images/photos/pro11.jpg">
                                                            <span class="avatar-status bg-red"></span>
                                                        </span>
                                                        </a>
                                                        <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">Asal Moghadam</a></h5>
                                                        <span>Photographer</span>
                                                        <div >
                                                            <span class="badge badge-default">photo</span>
                                                            <span class="badge badge-default">edit</span>
                                                        </div>
                                                        <div class="mt-4">
                                                            <button href="#" class="btn-pill  btn-outline-dark btn-sm font-weight-bold "><i class="fas fa-eye"></i></button>
                                                            <button href="#" class="btn-pill  btn-outline-success btn-sm font-weight-bold"><i class="fas fa-phone"></i></button>
                                                            <button href="#" class="btn-pill  btn-outline-warning btn-sm font-weight-bold"><i class="fas fa-envelope"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-12">
                                                <div class="card ">
                                                    <div class="card-body text-center pt-3 ">
                                                        <a href="#">
                                                        <span class="avatar avatar-xl brround cover-image m-2" data-image-src="../assets/images/photos/pro3.jpg">
                                                            <span class="avatar-status bg-green"></span>
                                                        </span>
                                                        </a>
                                                        <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">Sobhan Shafati</a></h5>
                                                        <span>Designer</span>
                                                        <div >
                                                            <span class="badge badge-default">design</span>
                                                        </div>
                                                        <div class="mt-4">
                                                            <button href="#" class="btn-pill  btn-outline-dark btn-sm font-weight-bold "><i class="fas fa-eye"></i></button>
                                                            <button href="#" class="btn-pill  btn-outline-success btn-sm font-weight-bold"><i class="fas fa-phone"></i></button>
                                                            <button href="#" class="btn-pill  btn-outline-warning btn-sm font-weight-bold"><i class="fas fa-envelope"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-12">
                                                <div class="card ">
                                                    <div class="card-body text-center pt-3 ">
                                                        <a href="#">
                                                        <span class="avatar avatar-xl brround cover-image m-2" data-image-src="../assets/images/photos/pro7.jpg">
                                                            <span class="avatar-status bg-red"></span>
                                                        </span>
                                                        </a>
                                                        <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">Alireza Badran</a></h5>
                                                        <span>Quality Supervisor</span>
                                                        <div >
                                                            <span class="badge badge-default">check</span>
                                                            <span class="badge badge-default">supervisor</span>
                                                        </div>
                                                        <div class="mt-4">
                                                            <button href="#" class="btn-pill  btn-outline-dark btn-sm font-weight-bold "><i class="fas fa-eye"></i></button>
                                                            <button href="#" class="btn-pill  btn-outline-success btn-sm font-weight-bold"><i class="fas fa-phone"></i></button>
                                                            <button href="#" class="btn-pill  btn-outline-warning btn-sm font-weight-bold"><i class="fas fa-envelope"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-6 col-md-12">
                                                <div class="card ">
                                                    <div class="card-body text-center pt-3 ">
                                                        <a href="#">
                                                        <span class="avatar avatar-xl brround cover-image m-2" data-image-src="../assets/images/photos/pro15.jpg">
                                                            <span class="avatar-status bg-green"></span>
                                                        </span>
                                                        </a>
                                                        <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">Baran Azimi</a></h5>
                                                        <span>Photo Editor</span>
                                                        <div >
                                                            <span class="badge badge-default">edit</span>
                                                        </div>
                                                        <div class="mt-4">
                                                            <button href="#" class="btn-pill  btn-outline-dark btn-sm font-weight-bold "><i class="fas fa-eye"></i></button>
                                                            <button href="#" class="btn-pill  btn-outline-success btn-sm font-weight-bold"><i class="fas fa-phone"></i></button>
                                                            <button href="#" class="btn-pill  btn-outline-warning btn-sm font-weight-bold"><i class="fas fa-envelope"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-12">
                                                <div class="card ">
                                                    <div class="card-body text-center pt-3 ">
                                                        <a href="#">
                                                        <span class="avatar avatar-xl brround cover-image m-2" data-image-src="../assets/images/photos/pro10.jpg">
                                                            <span class="avatar-status bg-red"></span>
                                                        </span>
                                                        </a>
                                                        <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">Saghar Kasiri</a></h5>
                                                        <span>Film Editor</span>
                                                        <div >
                                                            <span class="badge badge-default">edit</span>
                                                            <span class="badge badge-default">design</span>
                                                        </div>
                                                        <div class="mt-4">
                                                            <button href="#" class="btn-pill  btn-outline-dark btn-sm font-weight-bold "><i class="fas fa-eye"></i></button>
                                                            <button href="#" class="btn-pill  btn-outline-success btn-sm font-weight-bold"><i class="fas fa-phone"></i></button>
                                                            <button href="#" class="btn-pill  btn-outline-warning btn-sm font-weight-bold"><i class="fas fa-envelope"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-12">
                                                <div class="card ">
                                                    <div class="card-body text-center pt-3 ">
                                                        <a href="#">
                                                        <span class="avatar avatar-xl brround cover-image m-2" data-image-src="../assets/images/photos/pro6.jpg">
                                                            <span class="avatar-status bg-red"></span>
                                                        </span>
                                                        </a>
                                                        <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">Hosein Shojaie</a></h5>
                                                        <span>Cameraman</span>
                                                        <div >
                                                            <span class="badge badge-default">film</span>
                                                            <span class="badge badge-default">camera</span>
                                                            <span class="badge badge-default">edit</span>
                                                        </div>
                                                        <div class="mt-4">
                                                            <button href="#" class="btn-pill  btn-outline-dark btn-sm font-weight-bold "><i class="fas fa-eye"></i></button>
                                                            <button href="#" class="btn-pill  btn-outline-success btn-sm font-weight-bold"><i class="fas fa-phone"></i></button>
                                                            <button href="#" class="btn-pill  btn-outline-warning btn-sm font-weight-bold"><i class="fas fa-envelope"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-12">
                                                <div class="card ">
                                                    <div class="card-body text-center pt-3 ">
                                                        <a href="#">
                                                        <span class="avatar avatar-xl brround cover-image m-2" data-image-src="../assets/images/photos/pro18.jpg">
                                                            <span class="avatar-status bg-green"></span>
                                                        </span>
                                                        </a>
                                                        <h5 class="mt-3 mb-0"><a class="hover-primary" href="#">Shamim Aghaie</a></h5>
                                                        <span>Photo Editor</span>
                                                        <div >
                                                            <span class="badge badge-default">edit</span>
                                                        </div>
                                                        <div class="mt-4">
                                                            <button href="#" class="btn-pill  btn-outline-dark btn-sm font-weight-bold "><i class="fas fa-eye"></i></button>
                                                            <button href="#" class="btn-pill  btn-outline-success btn-sm font-weight-bold"><i class="fas fa-phone"></i></button>
                                                            <button href="#" class="btn-pill  btn-outline-warning btn-sm font-weight-bold"><i class="fas fa-envelope"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane " id="tab4444">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="card-title mr-2">Calls</div>
                                                        <button type="button" class="btn btn-success ml-auto" data-toggle="modal"
                                                                data-target="#add-modal"><i class="fas  fa-plus"></i></button>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive ">
                                                            <table id="example-2" class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                <tr>
                                                                    <th class="wd-15p border-bottom-0">Topic</th>
                                                                    <th class="wd-25p border-bottom-0 text-center">Call Method</th>
                                                                    <th class="wd-25p border-bottom-0 text-center">From</th>
                                                                    <th class="wd-25p border-bottom-0 text-center">To</th>
                                                                    <th class="wd-25p border-bottom-0 text-center">Date</th>
                                                                    <th class="wd-25p border-bottom-0 text-center">Time</th>
                                                                    <th class="wd-25p border-bottom-0 text-center">Result
                                                                    </th>
                                                                    <th class="wd-25p border-bottom-0 text-center">Status</th>
                                                                    <th class="wd-25p border-bottom-0 text-center"></th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td>Mr. Azimi's Deal</td>
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
                                                                <tr>
                                                                    <td>Mr. Azimi's Deal</td>
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
                                                                <tr>
                                                                    <td>Mr. Azimi's Deal</td>
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
                                                                <tr>
                                                                    <td>Mr. Azimi's Deal</td>
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
                                                                <tr>
                                                                    <td>Mr. Azimi's Deal</td>
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
                                                                <tr>
                                                                    <td>Mr. Azimi's Deal</td>
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
                                                                <tr>
                                                                    <td>Mr. Azimi's Deal</td>
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
                                                                <tr>
                                                                    <td>Mr. Azimi's Deal</td>
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
                                                <!-- section-wrapper -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane " id="tab5555">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="card-title mr-2">Meetings</div>
                                                        <button type="button" class="btn btn-success ml-auto" data-toggle="modal" data-target="#exampleModal3"><i class="fas fa-plus"></i></button>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive ">
                                                            <table id="example-5" class="table table-striped table-bordered">
                                                                <thead>
                                                                <tr>
                                                                    <th class="wd-15p border-bottom-0 text-center">Title</th>
                                                                    <th class="wd-15p border-bottom-0 text-center">Type</th>
                                                                    <th class="wd-10p border-bottom-0 text-center">Date</th>
                                                                    <th class="wd-25p border-bottom-0 text-center">From time</th>
                                                                    <th class="wd-25p border-bottom-0 text-center">Duration Time</th>
                                                                    <th class="wd-15p border-bottom-0 text-center">Meeting Leader</th>
                                                                    <th class="wd-25p border-bottom-0 text-center">Place</th>
                                                                    <th class="border-bottom-0 text-center">Status</th>
                                                                    <th></th>
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
                                                <!-- section-wrapper -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane " id="tab6666">
                                        <div class="panel panel-primary">
                                            <div class="  ">
                                                <div class="tabs-menu1 ">
                                                    <!-- Tabs -->
                                                    <ul class="nav panel-tabs">
                                                        <li class=""><a href="#tab1-1" class="active font-weight-bold" data-toggle="tab">Basic Info</a></li>
                                                        <li><a href="#tab2-2" class="font-weight-bold" data-toggle="tab">Project Times</a></li>
                                                        <li><a href="#tab3-3" class="font-weight-bold" data-toggle="tab">Financial info</a></li>
                                                        <li><a href="#tab4-4" class="font-weight-bold" data-toggle="tab">Subservices</a></li>
                                                        <li><a href="#tab5-5" class="font-weight-bold" data-toggle="tab">Descriptions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="panel-body  tabs-menu-body border-0">
                                                <div class="tab-content">
                                                    <div class="tab-pane active " id="tab1-1">
                                                        <div id="basic info" class="p-3 text-left">
                                                            <div class="media-list">
                                                                <div class="media mt-1 pb-2">
                                                                    <div class="mediaicon">
                                                                        <i class="fas fa-hashtag" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="media-body ml-5 mt-1">
                                                                        <h6 class="mediafont text-dark mb-1">Title</h6><span class="d-block">Wedding</span>
                                                                    </div>
                                                                </div>
                                                                <div class="media mt-1 pb-2">
                                                                    <div class="mediaicon">
                                                                        <i class="fas fa-user" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="media-body ml-5 mt-1">
                                                                        <h6 class="mediafont text-dark mb-1">Owner</h6><span class="d-block">Mehdi Yegane, Sara Nazparvar</span>
                                                                    </div>
                                                                </div>
                                                                <div class="media mt-1 pb-2">
                                                                    <div class="mediaicon">
                                                                        <i class="fas fa-phone-volume" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="media-body ml-5 mt-1">
                                                                        <h6 class="mediafont text-dark mb-1">Product Owner</h6><span class="d-block">Mahbobe Espidkar</span>
                                                                    </div>
                                                                </div>
                                                                <div class="media mt-1 pb-2">
                                                                    <div class="mediaicon">
                                                                        <i class="fas fa-hashtag" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="media-body ml-5 mt-1">
                                                                        <h6 class="mediafont text-dark mb-1">Project Manager</h6><span class="d-block">John Taromi</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane " id="tab2-2">
                                                        <div id="task time" class="p-3 text-left">
                                                            <div class="media-list">
                                                                <div class="media mt-1 pb-2">
                                                                    <div class="mediaicon">
                                                                        <i class="far fa-calendar" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="media-body ml-5 mt-1">
                                                                        <h6 class="mediafont text-dark mb-1">Start Date</h6><span
                                                                                class="d-block">07 October 2019</span>
                                                                    </div>
                                                                </div>
                                                                <div class="media mt-1 pb-2">
                                                                    <div class="mediaicon">
                                                                        <i class="far fa-calendar" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="media-body ml-5 mt-1">
                                                                        <h6 class="mediafont text-dark mb-1">Hold Date</h6><span
                                                                                class="d-block">02 January 2020</span>
                                                                    </div>
                                                                </div>
                                                                <div class="media mt-1 pb-2">
                                                                    <div class="mediaicon">
                                                                        <i class="far fa-calendar-check" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="media-body ml-5 mt-1">
                                                                        <h6 class="mediafont text-dark mb-1">Deadline Date</h6><span
                                                                                class="d-block">12 February 2020</span>
                                                                    </div>
                                                                </div>
                                                                <div class="media mt-1 pb-2">
                                                                    <div class="mediaicon">
                                                                        <i class="far fa-calendar" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="media-body ml-5 mt-1">
                                                                        <h6 class="mediafont text-dark mb-1">Estimation Date</h6><span
                                                                                class="d-block">12 February 2020</span>
                                                                    </div>
                                                                </div>
                                                                <div class="media mt-1 pb-2">
                                                                    <div class="mediaicon">
                                                                        <i class="far fa-calendar" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="media-body ml-5 mt-1">
                                                                        <h6 class="mediafont text-dark mb-1">End Date</h6><span class="d-block">07 October 2019</span>
                                                                    </div>
                                                                </div>
                                                                <div class="media mt-1 pb-2">
                                                                    <div class="mediaicon">
                                                                        <i class="far fa-calendar" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="media-body ml-5 mt-1">
                                                                        <h6 class="mediafont text-dark mb-1">Delivery Date</h6><span
                                                                                class="d-block">02 January 2020</span>
                                                                    </div>
                                                                </div>
                                                                <div class="media mt-1 pb-2">
                                                                    <div class="mediaicon">
                                                                        <i class="far fa-clock" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="media-body ml-5 mt-1">
                                                                        <h6 class="mediafont text-dark mb-1">Duration Time</h6><span
                                                                                class="d-block">8 Hour</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane " id="tab3-3">
                                                        <div id="Financial info" class="p-3 text-left">
                                                            <div class="media-list">
                                                                <div class="media mt-1 pb-2">
                                                                    <div class="mediaicon">
                                                                        <i class="fas fa-hashtag" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="media-body ml-5 mt-1">
                                                                        <h6 class="mediafont text-dark mb-1">Value</h6><span class="d-block">...........</span>
                                                                    </div>
                                                                </div>
                                                                <div class="media mt-1 pb-2">
                                                                    <div class="mediaicon">
                                                                        <i class="fas fa-user" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="media-body ml-5 mt-1">
                                                                        <h6 class="mediafont text-dark mb-1">Budget</h6><span class="d-block">...........</span>
                                                                    </div>
                                                                </div>
                                                                <div class="media mt-1 pb-2">
                                                                    <div class="mediaicon">
                                                                        <i class="fas fa-phone-volume" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="media-body ml-5 mt-1">
                                                                        <h6 class="mediafont text-dark mb-1">Total Expense</h6><span class="d-block">...........</span>
                                                                    </div>
                                                                </div>
                                                                <div class="media mt-1 pb-2">
                                                                    <div class="mediaicon">
                                                                        <i class="fas fa-phone-volume" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="media-body ml-5 mt-1">
                                                                        <h6 class="mediafont text-dark mb-1">Total Net Profit</h6><span class="d-block">...........</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane " id="tab4-4">
                                                        <div id="Subservices" class="p-3 text-left">
                                                            <div class="media-list">
                                                                <!--<div class="media mt-1 pb-2">
                                                                    <div class="mediaicon">
                                                                        <i class="fas fa-hashtag" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="media-body ml-5 mt-1">
                                                                        <h6 class="mediafont text-dark mb-1">Title</h6><span class="d-block">Wedding</span>
                                                                    </div>
                                                                </div>
                                                                <div class="media mt-1 pb-2">
                                                                    <div class="mediaicon">
                                                                        <i class="fas fa-user" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="media-body ml-5 mt-1">
                                                                        <h6 class="mediafont text-dark mb-1">Owner</h6><span class="d-block">Mehdi Yegane, Sara Nazparvar</span>
                                                                    </div>
                                                                </div>
                                                                <div class="media mt-1 pb-2">
                                                                    <div class="mediaicon">
                                                                        <i class="fas fa-phone-volume" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="media-body ml-5 mt-1">
                                                                        <h6 class="mediafont text-dark mb-1">Product Owner</h6><span
                                                                                class="d-block">Mahbobe Espidkar</span>
                                                                    </div>
                                                                </div>-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane " id="tab5-5">
                                                        <div id="descriptions" class="p-3 text-left">
                                                            <div class="media-list">
                                                                <div class="media mt-1 pb-2">
                                                                    <div class="mediaicon">
                                                                        <i class="fas fa-file-medical" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="media-body ml-5 mt-1">
                                                                        <h6 class="mediafont text-dark mb-1">Descriptions</h6><span
                                                                                class="d-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane " id="tab7777"></div>
                                    <div class="tab-pane " id="tab8888"></div>
                                    <div class="tab-pane " id="tab9999"></div>
                                    <div class="tab-pane " id="tab1010">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 class="card-title font-weight-bold">Map</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="col-12 mt-1">
                                                            <img class="border-dark" src="/assets/images/photos/Matican Location Map + Pin.png" width="100%" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane " id="tab11111">
                                        <div class="row">
                                                <div class="col-3">
                                                    <div class="card">
                                                        <a href="#"><img class="card-img-top br-tr-3 br-tl-3"
                                                                         src="../assets/images/photos/2.jpg"
                                                                         alt="Well, I didn&#39;t vote for you."></a>
                                                        <div class="card-body d-flex flex-column">
                                                            <h4><a href="#">Wireframe.PDF</a>
                                                            </h4>
                                                            <a href="#" class="btn btn-primary btn-sm">View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="card">
                                                        <a href="#"><img class="card-img-top br-tr-3 br-tl-3"
                                                                         src="../assets/images/photos/2.jpg"
                                                                         alt="Well, I didn&#39;t vote for you."></a>
                                                        <div class="card-body d-flex flex-column">
                                                            <h4><a href="#">Photos.JPG</a>
                                                            </h4>
                                                            <a href="#" class="btn btn-primary btn-sm">View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="card">
                                                        <a href="#"><img class="card-img-top br-tr-3 br-tl-3"
                                                                         src="../assets/images/photos/2.jpg"
                                                                         alt="Well, I didn&#39;t vote for you."></a>
                                                        <div class="card-body d-flex flex-column">
                                                            <h4><a href="#">Videos.MKV</a>
                                                            </h4>
                                                            <a href="#" class="btn btn-primary btn-sm">View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="card">
                                                        <a href="#"><img class="card-img-top br-tr-3 br-tl-3"
                                                                         src="../assets/images/photos/2.jpg"
                                                                         alt="Well, I didn&#39;t vote for you."></a>
                                                        <div class="card-body d-flex flex-column">
                                                            <h4><a href="#">Movies.MKV</a>
                                                            </h4>
                                                            <a href="#" class="btn btn-primary btn-sm">View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="tab-pane " id="tab1212"></div>
                                    <div class="tab-pane " id="tab1313"></div>
                                </div>
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
                                <div class="  border-0">
                                    <div class="tabs-menu ">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs">
                                            <li class=""><a href="#tab111" class="active font-weight-bold" data-toggle="tab">Basic Info</a></li>
                                            <li><a href="#tab222" class="font-weight-bold" data-toggle="tab">People</a></li>
                                            <li><a href="#tab333" class="font-weight-bold"  data-toggle="tab">Financial</a></li>
                                            <li><a href="#tab444" class="font-weight-bold"  data-toggle="tab">Timing</a></li>
                                            <li><a href="#tab555" class="font-weight-bold"  data-toggle="tab">Services</a></li>
                                            <li><a href="#tab666" class="font-weight-bold"  data-toggle="tab">Notification</a></li>
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
                                                                <label class="control-label form-label font-weight-bold" for="Name">Name :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <input class="form-control required" id="Name" name="userName" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group  clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="branch">Branch :</label>
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
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="Contract">Contract :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control" id="contract">
                                                                    <option>......</option>
                                                                    <option>......</option>
                                                                    <option>......</option>
                                                                    <option>......</option>
                                                                    <option>......</option>
                                                                    <option>......</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="Descriptions">Descriptions :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="text here.." id="Descriptions"></textarea>
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
                                                                <label class="control-label form-label font-weight-bold" for="ProjectManager">Project Manager :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control" id="ProjectManager">
                                                                    <option>John Taromi</option>
                                                                    <option>Amirhossein Hajighorbani</option>
                                                                    <option>Mehdi Yegane</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group  clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="ProductOwner">Product Owner :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control" id="ProductOwner">
                                                                    <option>Mahbobe Espidkar</option>
                                                                    <option>Amirhossein Hajighorbani</option>
                                                                    <option>Mehdi Yegane</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="OperationalTeam">Operational Team :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select multiple="multiple" class="multi-select" id="OperationalTeam">
                                                                    <option value="1">Team 1</option>
                                                                    <option value="1">Team 2</option>
                                                                    <option value="1">Team 3</option>
                                                                    <option value="1">Team 4</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="form-group clearfix">
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="Owner">Owner :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <!-- Accordion begin -->
                                                                <ul class="demo-accordion accordionjs m-0" data-active-index="false">
                                                                    <!-- Section 1 -->
                                                                    <li>
                                                                        <div><h3 id="">Customer</h3></div>
                                                                        <div>
                                                                            <div class="form-group ">
                                                                                <select class="form-control select2-show-search " data-placeholder="Choose one">
                                                                                    <option value="p1">project 1</option>
                                                                                    <option value="p2">project 2</option>
                                                                                    <option value="p3">project 3</option>
                                                                                    <option value="p4">project 4</option>
                                                                                    <option value="p5">project 5</option>
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
                                                    <div class="form-group clearfix">
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="Owner">Other People :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <!-- Accordion begin -->
                                                                <ul class="demo-accordion accordionjs m-0" data-active-index="false">
                                                                    <!-- Section 1 -->
                                                                    <li>
                                                                        <div><h3 >Employee</h3></div>
                                                                        <div>
                                                                            <div class="form-group ">
                                                                                <select class="form-control select2-show-search " data-placeholder="Choose one" >
                                                                                    <option value="p1">project 1</option>
                                                                                    <option value="p2">project 2</option>
                                                                                    <option value="p3">project 3</option>
                                                                                    <option value="p4">project 4</option>
                                                                                    <option value="p5">project 5</option>
                                                                                </select>
                                                                            </div>
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
                                        <div class="tab-pane" id="tab333">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="ProjectValue">Project Value :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-dollar-sign tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control required" id="ProjectValue" name="ProjectValue" type="text" placeholder="000,000,000">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="Budget">Budget :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-dollar-sign tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control required" id="Budget" name="Budget" type="text" placeholder="000,000,000">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab444">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="StartDate">Start Date :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="far fa-calendar tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control fc-datepicker" id="StartDate" placeholder="MM/DD/YYYY" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="HoldDate">Hold Date :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="far fa-calendar tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control required" id="HoldDate" name="HoldDate" type="date">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="DeadlineDate">Deadline Date :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="far fa-calendar-check tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control required" id="DeadlineDate" name="DeadlineDate" type="date">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab555">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="ServiceCategory">Service Category :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control select2-show-search" id="ServiceCategory" data-placeholder="Choose one (with optgroup)">
                                                                    <option >Service Category 1</option>
                                                                    <option >Service Category 2</option>
                                                                    <option >Service Category 3</option>
                                                                    <option >Service Category 4</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-5">
                                                        <div class="col-md-12 col-lg-12">
                                                            <div class="table-responsive ">
                                                                <table class="table card-table table-vcenter text-nowrap table-primary border" >
                                                                    <thead  class="bg-primary text-white border-dark">
                                                                    <tr>
                                                                        <th class="text-white">Subservice</th>
                                                                        <th class="text-white text-center">Action</th>
                                                                        <th class="text-white text-center">Create Milestone</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th scope="row">Service One</th>
                                                                        <td class="text-center">
                                                                            <button href="inventory-view.html" class=" btn-pill btn-outline-secondary btn-sm">Select</button>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group text-center">
                                                                                <label class="custom-switch">
                                                                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                                                                    <span class="custom-switch-indicator"></span>
                                                                                </label>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Service Two</th>
                                                                        <td class="text-center">
                                                                            <button href="inventory-view.html" class=" btn-pill btn-outline-secondary btn-sm">Select</button>
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <div class="form-group">
                                                                                <label class="custom-switch">
                                                                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                                                                    <span class="custom-switch-indicator"></span>
                                                                                </label>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Service Three</th>
                                                                        <td class="text-center">
                                                                            <button href="inventory-view.html" class=" btn-pill btn-outline-secondary btn-sm">Select</button>
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <div class="form-group">
                                                                                <label class="custom-switch">
                                                                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                                                                    <span class="custom-switch-indicator"></span>
                                                                                </label>
                                                                            </div>
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
                                        <div class="tab-pane" id="tab666">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="Inform">Inform :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select multiple="multiple" class="multi-select" id="Inform">
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
<div class="modal fade" id="milestone-add-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="example-Modal3-1">New Project</h5>
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
                                            <li class=""><a href="#tab1111" class="active font-weight-bold" data-toggle="tab">Basic Info</a></li>
                                            <li><a href="#tab2222" class="font-weight-bold"  data-toggle="tab">Services</a></li>
                                            <li><a href="#tab3333" class="font-weight-bold"  data-toggle="tab">Financial</a></li>
                                            <li><a href="#tab4444" class="font-weight-bold"  data-toggle="tab">Timing</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body  border-left-0 border-right-0 border-bottom-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active " id="tab1111">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="Name">Name :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <input class="form-control required" id="Name" name="userName" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group  clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" >Responsible Person :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control" >
                                                                    <option>Ali Samadi</option>
                                                                    <option>Atefeh Kalooti</option>
                                                                    <option>Hassan Amiri</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" >Quality Control :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control" >
                                                                    <option></option>
                                                                    <option></option>
                                                                    <option></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" >Depends On :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control" >
                                                                    <option></option>
                                                                    <option></option>
                                                                    <option></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab2222">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="ServiceCategory">Service Category :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <select class="form-control select2-show-search" id="ServiceCategory" data-placeholder="Choose one (with optgroup)">
                                                                    <option >Service Category 1</option>
                                                                    <option >Service Category 2</option>
                                                                    <option >Service Category 3</option>
                                                                    <option >Service Category 4</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-5">
                                                        <div class="col-md-12 col-lg-12">
                                                            <div class="table-responsive ">
                                                                <table class="table card-table table-vcenter text-nowrap table-primary border" >
                                                                    <thead  class="bg-primary text-white border-dark">
                                                                    <tr>
                                                                        <th class="text-white">Subservice</th>
                                                                        <th class="text-white text-center">Action</th>
                                                                        <th class="text-white text-center">Create Milestone</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th scope="row">Service One</th>
                                                                        <td class="text-center">
                                                                            <button href="inventory-view.html" class=" btn-pill btn-outline-secondary btn-sm">Select</button>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group text-center">
                                                                                <label class="custom-switch">
                                                                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                                                                    <span class="custom-switch-indicator"></span>
                                                                                </label>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Service Two</th>
                                                                        <td class="text-center">
                                                                            <button href="inventory-view.html" class=" btn-pill btn-outline-secondary btn-sm">Select</button>
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <div class="form-group">
                                                                                <label class="custom-switch">
                                                                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                                                                    <span class="custom-switch-indicator"></span>
                                                                                </label>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Service Three</th>
                                                                        <td class="text-center">
                                                                            <button href="inventory-view.html" class=" btn-pill btn-outline-secondary btn-sm">Select</button>
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <div class="form-group">
                                                                                <label class="custom-switch">
                                                                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                                                                    <span class="custom-switch-indicator"></span>
                                                                                </label>
                                                                            </div>
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
                                        <div class="tab-pane" id="tab3333">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="Budget">Budget :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="fas fa-dollar-sign tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control required" id="Budget" name="Budget" type="text" placeholder="000,000,000">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab4444">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group clearfix mt-3">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" >From Date :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="far fa-calendar tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="row ">
                                                            <div class="col-lg-3">
                                                                <label class="control-label form-label font-weight-bold" for="DeadlineDate">Deadline Date :</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="far fa-calendar-check tx-16 lh-0 op-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input class="form-control required" id="DeadlineDate" name="DeadlineDate" type="date">
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
    '/assets/plugins/accordion/accordion.min.js',
    '/assets/plugins/accordion/accor.js',
    '/assets/plugins/peitychart/jquery.peity.min.js',
    '/assets/js/apexcharts.js',
    '/assets/plugins/input-mask/jquery.mask.min.js',
    '/assets/plugins/input-mask/jquery.mask.min.js',
    '/assets/plugins/morris/morris.min.js',
    '/assets/plugins/morris/raphael.min.js',
    '/assets/plugins/echart/echart.js',
    '/assets/js/echarts.js',
    '/assets/plugins/counters/counterup.min.js',
    '/assets/plugins/counters/waypoints.min.js',
    'assets/plugins/chart/chart.bundle.js',
    '/assets/js/chart.js',
    '/assets/js/index2.js',
    '/assets/plugins/select2/select2.full.min.js',
    '/assets/plugins/multipleselect/multiple-select.js',
    '/assets/plugins/multipleselect/multi-select.js',
    '/assets/js/custom.js',
    '/assets/js/index4.js',
];
?>