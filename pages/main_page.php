<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileColor" content="#0061da">
    <meta name="theme-color" content="#1643a3">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="../assets/images/brand/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico"/>

    <!-- Title -->
    <title>Getren - Bootstrap4 Responsive Admin WebApp Dashboard Template</title>

    <!--Bootstrap.min css-->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">

    <!--Font Awesome-->
    <link href="../assets/plugins/fontawesome-free/css/all.css" rel="stylesheet">

    <!-- Dashboard Css -->
    <link href="../assets/css/dashboard.css" rel="stylesheet"/>

    <!-- Custom scroll bar css-->
    <link href="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">

    <!-- Sidemenu Css -->
    <link href="../assets/plugins/toggle-sidebar/css/sidemenu-light.css" rel="stylesheet">

    <!-- Data table css -->
    <link href="../assets/plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../assets/plugins/Datatable/css/buttons.bootstrap4.min.css">
    <link href="../assets/plugins/datatable/responsive.bootstrap4.min.css" rel="stylesheet"/>

    <!-- Slect2 css -->
    <link href="../assets/plugins/select2/select2.min.css" rel="stylesheet"/>

    <!---Font icons-->
    <link href="../assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet"/>

    <link href="../assets/plugins/iconfonts/plugin.css" rel="stylesheet"/>

    <!-- Time picker Plugin -->
    <link href="../assets/plugins/time-picker/jquery.timepicker.css" rel="stylesheet"/>

    <!-- Date Picker Plugin -->
    <link href="../assets/plugins/date-picker/spectrum.css" rel="stylesheet"/>

    <!--mutipleselect css-->
    <link rel="stylesheet" href="../assets/plugins/multipleselect/multiple-select.css">

    <!--Chartist css-->
    <link rel="stylesheet" href="../assets/plugins/chartist/chartist.css">
    <link rel="stylesheet" href="../assets/plugins/chartist/chartist-plugin-tooltip.css">


    <!-- Notifications  css -->
    <link href="../assets/plugins/notify/css/jquery.growl.css" rel="stylesheet"/>

    <!-- Horizontal-menu Css -->
    <link href="../assets/plugins/horizontal-menu/dropdown-effects/fade-down.css" rel="stylesheet">
    <link href="../assets/plugins/horizontal-menu/webslidemenu.css" rel="stylesheet">

    <!-- c3 Charts css -->
    <link href="../assets/plugins/charts-c3/c3-chart.css" rel="stylesheet"/>

    <!-- Tabs Style -->
    <link href="../assets/plugins/tabs/style.css" rel="stylesheet"/>

    <!-- Calendar Plugin -->
    <link href="../assets/plugins/calendar/clndr.css" rel="stylesheet"/>
    <link href="../assets/plugins/calendar/stylesheet.css" rel="stylesheet"/>

    <!--Calendar Css -->
    <link href="../assets/plugins/calendar2/css/tui-time-picker.css" rel="stylesheet"/>
    <link href="../assets/plugins/calendar2/css/tui-date-picker.css" rel="stylesheet"/>
    <link href="../assets/plugins/calendar2/css/tui-calendar.css" rel="stylesheet"/>
    <link href="../assets/plugins/calendar2/css/default.css" rel="stylesheet"/>
    <link href="../assets/plugins/calendar2/css/icons.css" rel="stylesheet"/>

    <!-- timeline Plugin -->
    <link href="../assets/plugins/timeline/timeline.min.css" rel="stylesheet"/>


    <!-- Accordion Css -->
    <link href="../assets/plugins/accordion/accordion.css" rel="stylesheet"/>

    <!-- WYSIWYG Editor css -->
    <link href="../assets/plugins/wysiwyag/richtext.min.css" rel="stylesheet"/>

    <!--Rangeslider css-->
    <link href="../assets/plugins/rangeslider/ion.rangeSlider.css" rel="stylesheet"/>
    <link href="../assets/plugins/rangeslider/ion.rangeSlider.skinHTML5.css" rel="stylesheet">

    <!-- Sidebar css -->
    <link href="../assets/plugins/sidebar/sidebar.css" rel="stylesheet">
</head>
<body class="app sidebar-mini rtl">

<!-- Global Loader-->
<div id="global-loader"><img src="../assets/images/loader.svg" alt="loader"></div>

<div class="page">
    <div class="page-main">

        <!-- Navbar-->
        <header class="app-header header">
            <!-- Navbar Right Menu-->
            <div class="container-fluid">
                <div class="d-flex">
                    <a class="header-brand" href="index.html">
                        <img alt="logo" class="header-brand-img main-logo" src="../assets/images/brand/logo1.png">
                        <img alt="logo" class="header-brand-img mobile-logo" src="../assets/images/brand/icon.png">
                    </a>
                    <div class="d-none d-sm-flex">
                        <a href="#" data-toggle="search" class="icon navsearch">
                            <i class="fe fe-search"></i>
                        </a>
                    </div>
                    <!-- Sidebar toggle button-->
                    <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
                    <div class="header-searchinput">
                        <form class="form-inline">
                            <div class="search-element mr-3">
                                <input class="form-control header-search" type="search" placeholder="Search"
                                       aria-label="Search">
                                <span class="search-icon"><i class="fa fa-search"></i></span>
                            </div>
                        </form>
                    </div>
                    <div class="dropdown d-sm-flex d-none header-message">
                        <a class="nav-link icon" data-toggle="dropdown">
                            <i class="fe fe-grid mr-2"></i><span class="lay-outstyle">Layout styles</span>
                            <span class="pulse2 bg-danger" aria-hidden="true"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item d-flex pb-3" href="index.html">Icon Layout</a>
                            <a class="dropdown-item d-flex pb-3" href="sidemenu.html">Icon Closed Layout</a>
                            <a class="dropdown-item d-flex pb-3" href="overlay2.html">Icon Overlay Layout</a>
                            <a class="dropdown-item d-flex pb-3" href="overlay.html">Closed Overlay Layout</a>
                            <a class="dropdown-item d-flex pb-3" href="horizontal.html">Horizontal Layout</a>
                            <a class="dropdown-item d-flex pb-3" href="sidemenu-2.html">Light Layout</a>
                        </div>
                    </div>
                    <div class="d-flex order-lg-2 ml-auto">
                        <div class="d-sm-flex d-none">
                            <a href="#" class="nav-link icon full-screen-link">
                                <i class="fe fe-minimize fullscreen-button"></i>
                            </a>
                        </div>
                        <div class="dropdown d-sm-flex d-none header-contact">
                            <a class="nav-link icon" data-toggle="dropdown">
                                <i class="fe fe-user"></i>
                                <span class="nav-unread badge badge-danger  badge-pill">3</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item text-center" href="#"> Open Contact List</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item d-flex pb-3" href="#">
                                    <span class="avatar brround mr-3 align-self-center cover-image"
                                          data-image-src="../assets/images/users/male/4.jpg"></span>
                                    <div>
                                        <strong>Madeleine Scott</strong> Sent you add request
                                        <div class="small text-muted">
                                            view profile
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex pb-3" href="#">
                                    <span class="avatar brround mr-3 align-self-center cover-image"
                                          data-image-src="../assets/images/users/female/14.jpg"></span>
                                    <div>
                                        <strong>rebica</strong> Suggestions for you
                                        <div class="small text-muted">
                                            view profile
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex pb-3" href="#">
                                    <span class="avatar brround mr-3 align-self-center cover-image"
                                          data-image-src="../assets/images/users/male/1.jpg"></span>
                                    <div>
                                        <strong>Devid robott</strong> sent you add request
                                        <div class="small text-muted">
                                            view profile
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-center " href="#">View all contact list</a>
                            </div>
                        </div>
                        <div class="dropdown d-sm-flex d-none header-message">
                            <a class="nav-link icon" data-toggle="dropdown">
                                <i class="fe fe-mail"></i>
                                <span class="pulse bg-success" aria-hidden="true"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item text-center" href="#">2 New Messages</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item d-flex pb-3" href="#">
                                    <span class="avatar brround mr-3 align-self-center cover-image"
                                          data-image-src="../assets/images/users/male/41.jpg"></span>
                                    <div>
                                        <strong>Madeleine</strong> Hey! there I' am available....
                                        <div class="small text-muted">
                                            3 hours ago
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex pb-3" href="#"><span
                                        class="avatar brround mr-3 align-self-center cover-image"
                                        data-image-src="../assets/images/users/female/1.jpg"></span>
                                    <div>
                                        <strong>Anthony</strong> New product Launching...
                                        <div class="small text-muted">
                                            5 hour ago
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex pb-3" href="#"><span
                                        class="avatar brround mr-3 align-self-center cover-image"
                                        data-image-src="../assets/images/users/female/18.jpg"></span>
                                    <div>
                                        <strong>Olivia</strong> New Schedule Realease......
                                        <div class="small text-muted">
                                            45 mintues ago
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-center" href="#">See all Messages</a>
                            </div>
                        </div>
                        <button class="navbar-toggler navresponsive-toggler d-sm-none" type="button"
                                data-toggle="collapse" data-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon fe fe-more-vertical text-white"></span>
                        </button>
                        <!--Navbar -->

                        <div class="dropdown">
                            <a class="nav-link pr-0 leading-none d-flex" data-toggle="dropdown" href="#">
                                <span class="avatar avatar-md brround cover-image"
                                      data-image-src="../assets/images/users/female/25.jpg"></span>
                                <span class="ml-2 d-none d-lg-block">
											<span class="text-dark">Mehdi Yegane</span>
										</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-user"></i>My Profile</a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-edit"></i>My
                                    Schedule</a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-mail"></i> My Inbox</a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-unlock"></i> Look Screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-power"></i> Log Out</a>
                            </div>
                        </div>
                        <div class="dropdown d-md-flex header-settings">
                            <a href="#" class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
                                <i class="fe fe-bell"></i><span
                                    class=" nav-unread badge badge-info  badge-pill">6</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="mb-1 navbar navbar-expand-lg  responsive-navbar navbar-dark d-sm-none bg-white">
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <div class="d-flex order-lg-2 ml-auto">
                    <div class="">
                        <a href="#" data-toggle="search" class="icon navsearch">
                            <i class="fe fe-search"></i>
                        </a>
                    </div>
                    <div class="d-md-flex">
                        <a href="#" class="nav-link icon full-screen-link text-dark">
                            <i class="fe fe-minimize fullscreen-button"></i>
                        </a>
                    </div>
                    <div class="dropdown  d-md-flex header-contact">
                        <a class="nav-link icon text-dark" data-toggle="dropdown">
                            <i class="fe fe-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item text-center" href="#"> Open Contact List</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item d-flex pb-3" href="#">
                                <span class="avatar brround mr-3 align-self-center cover-image"
                                      data-image-src="../assets/images/users/male/4.jpg"></span>
                                <div>
                                    <strong>Madeleine Scott</strong> Sent you add request
                                    <div class="small text-muted">
                                        view profile
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex pb-3" href="#">
                                <span class="avatar brround mr-3 align-self-center cover-image"
                                      data-image-src="../assets/images/users/female/14.jpg"></span>
                                <div>
                                    <strong>rebica</strong> Suggestions for you
                                    <div class="small text-muted">
                                        view profile
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex pb-3" href="#">
                                <span class="avatar brround mr-3 align-self-center cover-image"
                                      data-image-src="../assets/images/users/male/1.jpg"></span>
                                <div>
                                    <strong>Devid robott</strong> sent you add request
                                    <div class="small text-muted">
                                        view profile
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-center " href="#">View all contact list</a>
                        </div>
                    </div>
                    <div class="dropdown d-md-flex header-message">
                        <a class="nav-link icon text-dark" data-toggle="dropdown">
                            <i class="fe fe-mail"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item text-center" href="#">2 New Messages</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item d-flex pb-3" href="#">
                                <span class="avatar brround mr-3 align-self-center cover-image"
                                      data-image-src="../assets/images/users/male/41.jpg"></span>
                                <div>
                                    <strong>Madeleine</strong> Hey! there I' am available....
                                    <div class="small text-muted">
                                        3 hours ago
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex pb-3" href="#"><span
                                    class="avatar brround mr-3 align-self-center cover-image"
                                    data-image-src="../assets/images/users/female/1.jpg"></span>
                                <div>
                                    <strong>Anthony</strong> New product Launching...
                                    <div class="small text-muted">
                                        5 hour ago
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex pb-3" href="#"><span
                                    class="avatar brround mr-3 align-self-center cover-image"
                                    data-image-src="../assets/images/users/female/18.jpg"></span>
                                <div>
                                    <strong>Olivia</strong> New Schedule Realease......
                                    <div class="small text-muted">
                                        45 mintues ago
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-center" href="#">See all Messages</a>
                        </div>
                    </div>
                    <div class="dropdown d-md-flex header-message">
                        <a class="nav-link icon" data-toggle="dropdown">
                            <i class="fe fe-grid"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item d-flex pb-3" href="index.html">Icon Layout</a>
                            <a class="dropdown-item d-flex pb-3" href="sidemenu.html">Icon Closed Layout</a>
                            <a class="dropdown-item d-flex pb-3" href="overlay2.html">Icon Overlay Layout</a>
                            <a class="dropdown-item d-flex pb-3" href="overlay.html">Closed Overlay Layout</a>
                            <a class="dropdown-item d-flex pb-3" href="horizontal.html">Horizontal Layout</a>
                            <a class="dropdown-item d-flex pb-3" href="sidemenu-2.html">Light Layout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.Navbar -->

        <!-- Sidebar menu-->
        <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
        <aside class="app-sidebar">
            <div class="app-sidebar__user">
                <div class="user-body">
                    <span class="avatar avatar-lg brround text-center cover-image"
                          data-image-src="../assets/images/users/female/25.jpg"></span>
                </div>
                <div class="user-info">
                    <a href="#" class="ml-2"><span class="text-dark app-sidebar__user-name font-weight-semibold">Mehdi Yegane</span><br>
                        <span class="text-muted app-sidebar__user-name text-sm"> CEO</span>
                    </a>
                </div>
            </div>
            <ul class="side-menu">
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#"><i
                            class="side-menu__icon si si-screen-desktop"></i><span
                            class="side-menu__label">Dashboard</span><i class="angle fas fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li><a class="slide-item" href="index.html">Dashboard 01</a></li>
                        <li><a class="slide-item" href="index2.html">Dashboard 02</a></li>
                        <li><a class="slide-item" href="index3.html">Dashboard 03</a></li>
                        <li><a class="slide-item" href="index4.html">Dashboard 04</a></li>
                        <li><a class="slide-item" href="index5.html">Dashboard 05</a></li>
                    </ul>
                </li>
                <li>
                    <a class="side-menu__item" href="widgets.html"><i class="side-menu__icon si si-layers"></i><span
                            class="side-menu__label">Widgets</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon si si-rocket"></i><span
                            class="side-menu__label">Ui Design</span><i class="angle fas fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li>
                            <a href="cards.html" class="slide-item">Cards</a>
                        </li>
                        <li>
                            <a href="chat.html" class="slide-item">Chat</a>
                        </li>
                        <li>
                            <a href="notify.html" class="slide-item">Notifications</a>
                        </li>
                        <li>
                            <a href="sweetalert.html" class="slide-item">Sweet alerts</a>
                        </li>
                        <li>
                            <a href="rangeslider.html" class="slide-item">Range slider</a>
                        </li>
                        <li>
                            <a href="scroll.html" class="slide-item">Content Scroll bar</a>
                        </li>
                        <li>
                            <a href="counters.html" class="slide-item">Counters</a>
                        </li>
                        <li>
                            <a href="loaders.html" class="slide-item">Loaders</a>
                        </li>
                        <li>
                            <a href="rating.html" class="slide-item">Rating</a>
                        </li>
                        <li>
                            <a href="time-line.html" class="slide-item">Time Line</a>
                        </li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#"><i
                            class="side-menu__icon si si-chart"></i><span class="side-menu__label">Chart Types</span><i
                            class="angle fas fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li>
                            <a href="chart-morris.html" class="slide-item">Morris Chart </a>
                        </li>
                        <li>
                            <a href="chart-echart.html" class="slide-item">Echarts</a>
                        </li>
                        <li>
                            <a href="charts-peity.html" class="slide-item">Peity Charts</a>
                        </li>
                        <li>
                            <a href="chart-chartist.html" class="slide-item">Chartist Charts</a>
                        </li>
                        <li>
                            <a href="chart-hightchart.html" class="slide-item">High Charts</a>
                        </li>
                        <li>
                            <a href="chartjs.html" class="slide-item">Chart js</a>
                        </li>
                        <li>
                            <a href="chart-flot.html" class="slide-item">Chart flot</a>
                        </li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#"><i
                            class="side-menu__icon si si-calendar"></i><span class="side-menu__label">Calendar</span><i
                            class="angle fas fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li>
                            <a href="calendar.html" class="slide-item">Default calendar</a>
                        </li>
                        <li>
                            <a href="calendar2.html" class="slide-item">Full calendar</a>
                        </li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#"><i
                            class="side-menu__icon si si-diamond"></i><span class="side-menu__label">Components</span><i
                            class="angle fas fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li>
                            <a href="modal.html" class="slide-item">Modal</a>
                        </li>
                        <li>
                            <a href="tooltipandpopover.html" class="slide-item">Tooltip and popover</a>
                        </li>
                        <li>
                            <a href="progress.html" class="slide-item">Progress</a>
                        </li>

                        <li>
                            <a href="carousel.html" class="slide-item">Carousels</a>
                        </li>
                        <li>
                            <a href="accordion.html" class="slide-item">Accordions</a>
                        </li>
                        <li>
                            <a href="tabs.html" class="slide-item">Tabs</a>
                        </li>
                        <li>
                            <a href="headers.html" class="slide-item">Headers</a>
                        </li>
                        <li>
                            <a href="footers.html" class="slide-item">Footers</a>
                        </li>
                        <li>
                            <a href="crypto-currencies.html" class="slide-item">Crypto-currencies</a>
                        </li>
                        <li>
                            <a href="users-list.html" class="slide-item">User List</a>
                        </li>
                        <li>
                            <a href="search.html" class="slide-item">Search page</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="side-menu__item" href="maps.html"><i class="side-menu__icon si si-map"></i><span
                            class="side-menu__label">Maps</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#"><i
                            class="side-menu__icon si si-grid"></i><span class="side-menu__label">Elements</span><i
                            class="angle fas fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li>
                            <a href="alerts.html" class="slide-item">Alerts</a>
                        </li>
                        <li>
                            <a href="buttons.html" class="slide-item">Buttons</a>
                        </li>
                        <li>
                            <a href="colors.html" class="slide-item">Colors</a>
                        </li>
                        <li>
                            <a href="avatars.html" class="slide-item">Avatars</a>
                        </li>
                        <li>
                            <a href="dropdown.html" class="slide-item">Drop downs</a>
                        </li>
                        <li>
                            <a href="thumbnails.html" class="slide-item">Thumbnails</a>
                        </li>
                        <li>
                            <a href="mediaobject.html" class="slide-item">Media Object</a>
                        </li>
                        <li>
                            <a href="list.html" class="slide-item">List</a>
                        </li>
                        <li>
                            <a href="tags.html" class="slide-item">Tags</a>
                        </li>
                        <li>
                            <a href="pagination.html" class="slide-item">Pagination</a>
                        </li>
                        <li>
                            <a href="navigation.html" class="slide-item">Navigation</a>
                        </li>
                        <li>
                            <a href="typography.html" class="slide-item">Typography</a>
                        </li>
                        <li>
                            <a href="breadcrumbs.html" class="slide-item">Breadcrumbs</a>
                        </li>
                        <li>
                            <a href="badge.html" class="slide-item">Badges</a>
                        </li>
                        <li>
                            <a href="jumbotron.html" class="slide-item">Jumbotron</a>
                        </li>
                        <li>
                            <a href="panels.html" class="slide-item">Panels</a>
                        </li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#"><i
                            class="side-menu__icon si si-calculator"></i><span class="side-menu__label">Tables</span><i
                            class="angle fas fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li>
                            <a href="tables.html" class="slide-item">Default table</a>
                        </li>
                        <li>
                            <a href="datatable.html" class="slide-item">Data Table</a>
                        </li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#"><i
                            class="side-menu__icon si si-briefcase"></i><span class="side-menu__label">Pages</span><i
                            class="angle fas fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li>
                            <a href="profile.html" class="slide-item">Profile</a>
                        </li>
                        <li>
                            <a href="editprofile.html" class="slide-item">Edit Profile</a>
                        </li>
                        <li>
                            <a href="email.html" class="slide-item">Email</a>
                        </li>
                        <li>
                            <a href="emailservices.html" class="slide-item">Email Inbox</a>
                        </li>
                        <li>
                            <a href="gallery.html" class="slide-item">Gallery</a>
                        </li>
                        <li>
                            <a href="login.php" class="slide-item">Login</a>
                        </li>
                        <li>
                            <a href="register.html" class="slide-item">Register</a>
                        </li>
                        <li>
                            <a href="forgot-password.html" class="slide-item">Forgot password</a>
                        </li>
                        <li>
                            <a href="lockscreen.html" class="slide-item">Lock screen</a>
                        </li>
                        <li>
                            <a href="empty.html" class="slide-item">Empty Page</a>
                        </li>
                        <li>
                            <a href="construction.html" class="slide-item">Under Construction</a>
                        </li>
                        <li>
                            <a href="about.html" class="slide-item">About Company</a>
                        </li>
                        <li>
                            <a href="services.html" class="slide-item">Services</a>
                        </li>
                        <li>
                            <a href="faq.html" class="slide-item">FAQS</a>
                        </li>
                        <li>
                            <a href="terms.html" class="slide-item">Terms and Conditions</a>
                        </li>
                        <li>
                            <a href="pricing.html" class="slide-item">Pricing Tables</a>
                        </li>
                        <li>
                            <a href="blog.html" class="slide-item">Blog</a>
                        </li>
                        <li>
                            <a href="invoice.html" class="slide-item">Invoice</a>
                        </li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#"><i
                            class="side-menu__icon si si-flag"></i><span class="side-menu__label">Icons</span><i
                            class="angle fas fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li>
                            <a href="icons.html" class="slide-item">Font Awesome</a>
                        </li>
                        <li>
                            <a href="icons2.html" class="slide-item">Material Design Icons</a>
                        </li>
                        <li>
                            <a href="icons3.html" class="slide-item">Simple Line Iocns</a>
                        </li>
                        <li>
                            <a href="icons4.html" class="slide-item">Feather Icons</a>
                        </li>
                        <li>
                            <a href="icons5.html" class="slide-item">Ionic Icons</a>
                        </li>
                        <li>
                            <a href="icons6.html" class="slide-item">Flags Icons</a>
                        </li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#"><i
                            class="side-menu__icon si si-docs"></i><span class="side-menu__label">Forms</span><i
                            class="angle fas fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li>
                            <a href="form-elements.html" class="slide-item">Form Elements</a>
                        </li>
                        <li>
                            <a href="form-wizard.html" class="slide-item">Form-wizard Elements</a>
                        </li>
                        <li>
                            <a href="form-edior.html" class="slide-item">Form Wizard</a>
                        </li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#"><i
                            class="side-menu__icon si si-basket-loaded"></i><span
                            class="side-menu__label">E-commerce</span><i class="angle fas fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li>
                            <a href="shop.html" class="slide-item">Products</a>
                        </li>
                        <li>
                            <a href="shop-des.html" class="slide-item">Product Details</a>
                        </li>
                        <li>
                            <a href="cart.html" class="slide-item">Cart</a>
                        </li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#"><i
                            class="side-menu__icon si si-exclamation"></i><span
                            class="side-menu__label">Error pages</span><i class="angle fas fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li>
                            <a href="400.html" class="slide-item">400 Error</a>
                        </li>
                        <li>
                            <a href="401.html" class="slide-item">401 Error</a>
                        </li>
                        <li>
                            <a href="500.html" class="slide-item">500 Error</a>
                        </li>
                        <li>
                            <a href="503.html" class="slide-item">503 Error</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </aside>
        <!--side-menu-->

        <div class=" app-content my-3 my-md-5">
            <div class="side-app">


            </div>

            <!--Sidebar-right-->
            <div class="sidebar sidebar-right sidebar-animate">
                <div class="panel panel-primary">
                    <div class="  border-0">
                        <div class="tabs-menu ">
                            <!-- Tabs -->
                            <ul class="nav panel-tabs">
                                <li class=""><a href="#side1" class="active" data-toggle="tab"><i
                                        class="fas fa-comments"></i> Chat</a></li>
                                <li><a href="#side2" data-toggle="tab"><i class="fas fa-bell"></i> Notifications</a>
                                </li>
                                <li><a href="#side3" data-toggle="tab"><i class="fas fa-user-friends"></i> Friends</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body tabs-menu-body p-0 border-0">
                        <div class="tab-content">
                            <div class="tab-pane active " id="side1">
                                <div class="list d-flex align-items-center border-bottom p-4">
                                    <div class="">
                                        <span class="avatar bg-primary brround avatar-md">CH</span>
                                    </div>
                                    <div class="wrapper w-100 ml-3">
                                        <p class="mb-0 d-flex">
                                            <b>New Websites is Created</b>
                                        </p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <i class="mdi mdi-clock text-muted mr-1"></i>
                                                <small class="text-muted ml-auto">30 mins ago</small>
                                                <p class="mb-0"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list d-flex align-items-center border-bottom p-4">
                                    <div class="">
                                        <span class="avatar bg-danger brround avatar-md">N</span>
                                    </div>
                                    <div class="wrapper w-100 ml-3">
                                        <p class="mb-0 d-flex">
                                            <b>Prepare For the Next Project</b>
                                        </p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <i class="mdi mdi-clock text-muted mr-1"></i>
                                                <small class="text-muted ml-auto">2 hours ago</small>
                                                <p class="mb-0"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list d-flex align-items-center border-bottom p-4">
                                    <div class="">
                                        <span class="avatar bg-info brround avatar-md">S</span>
                                    </div>
                                    <div class="wrapper w-100 ml-3">
                                        <p class="mb-0 d-flex">
                                            <b>Decide the live Discussion</b>
                                        </p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <i class="mdi mdi-clock text-muted mr-1"></i>
                                                <small class="text-muted ml-auto">3 hours ago</small>
                                                <p class="mb-0"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list d-flex align-items-center border-bottom p-4">
                                    <div class="">
                                        <span class="avatar bg-warning brround avatar-md">K</span>
                                    </div>
                                    <div class="wrapper w-100 ml-3">
                                        <p class="mb-0 d-flex">
                                            <b>Meeting at 3:00 pm</b>
                                        </p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <i class="mdi mdi-clock text-muted mr-1"></i>
                                                <small class="text-muted ml-auto">4 hours ago</small>
                                                <p class="mb-0"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list d-flex align-items-center border-bottom p-4">
                                    <div class="">
                                        <span class="avatar bg-success brround avatar-md">R</span>
                                    </div>
                                    <div class="wrapper w-100 ml-3">
                                        <p class="mb-0 d-flex">
                                            <b>Prepare for Presentation</b>
                                        </p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <i class="mdi mdi-clock text-muted mr-1"></i>
                                                <small class="text-muted ml-auto">1 days ago</small>
                                                <p class="mb-0"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list d-flex align-items-center border-bottom p-4">
                                    <div class="">
                                        <span class="avatar bg-pink brround avatar-md">MS</span>
                                    </div>
                                    <div class="wrapper w-100 ml-3">
                                        <p class="mb-0 d-flex">
                                            <b>Prepare for Presentation</b>
                                        </p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <i class="mdi mdi-clock text-muted mr-1"></i>
                                                <small class="text-muted ml-auto">1 days ago</small>
                                                <p class="mb-0"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list d-flex align-items-center border-bottom p-4">
                                    <div class="">
                                        <span class="avatar bg-purple brround avatar-md">L</span>
                                    </div>
                                    <div class="wrapper w-100 ml-3">
                                        <p class="mb-0 d-flex">
                                            <b>Prepare for Presentation</b>
                                        </p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <i class="mdi mdi-clock text-muted mr-1"></i>
                                                <small class="text-muted ml-auto">45 mintues ago</small>
                                                <p class="mb-0"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list d-flex align-items-center p-4">
                                    <div class="">
                                        <span class="avatar bg-blue brround avatar-md">U</span>
                                    </div>
                                    <div class="wrapper w-100 ml-3">
                                        <p class="mb-0 d-flex">
                                            <b>Prepare for Presentation</b>
                                        </p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <i class="mdi mdi-clock text-muted mr-1"></i>
                                                <small class="text-muted ml-auto">2 days ago</small>
                                                <p class="mb-0"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane  " id="side2">
                                <div class="list-group list-group-flush ">
                                    <div class="list-group-item d-flex  align-items-center">
                                        <div class="mr-3">
                                            <span class="avatar avatar-lg brround cover-image"
                                                  data-image-src="../assets/images/users/female/12.jpg"><span
                                                    class="avatar-status bg-green"></span></span>
                                        </div>
                                        <div>
                                            <strong>Madeleine</strong> Hey! there I' am available....
                                            <div class="small text-muted">
                                                3 hours ago
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex  align-items-center">
                                        <div class="mr-3">
                                            <span class="avatar avatar-lg brround cover-image"
                                                  data-image-src="../assets/images/users/male/21.jpg"></span>
                                        </div>
                                        <div>
                                            <strong>Anthony</strong> New product Launching...
                                            <div class="small text-muted">
                                                5 hour ago
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex  align-items-center">
                                        <div class="mr-3">
                                            <span class="avatar avatar-lg brround cover-image"
                                                  data-image-src="../assets/images/users/female/29.jpg"><span
                                                    class="avatar-status bg-green"></span></span>
                                        </div>
                                        <div>
                                            <strong>Olivia</strong> New Schedule Realease......
                                            <div class="small text-muted">
                                                45 mintues ago
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex  align-items-center">
                                        <div class="mr-3">
                                            <span class="avatar avatar-lg brround cover-image"
                                                  data-image-src="../assets/images/users/female/21.jpg"><span
                                                    class="avatar-status bg-green"></span></span>
                                        </div>
                                        <div>
                                            <strong>Madeleine</strong> Hey! there I' am available....
                                            <div class="small text-muted">
                                                3 hours ago
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex  align-items-center">
                                        <div class="mr-3">
                                            <span class="avatar avatar-lg brround cover-image"
                                                  data-image-src="../assets/images/users/male/11.jpg"></span>
                                        </div>
                                        <div>
                                            <strong>Anthony</strong> New product Launching...
                                            <div class="small text-muted">
                                                5 hour ago
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex  align-items-center">
                                        <div class="mr-3">
                                            <span class="avatar avatar-lg brround cover-image"
                                                  data-image-src="../assets/images/users/female/19.jpg"><span
                                                    class="avatar-status bg-green"></span></span>
                                        </div>
                                        <div>
                                            <strong>Olivia</strong> New Schedule Realease......
                                            <div class="small text-muted">
                                                45 mintues ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane  " id="side3">
                                <div class="list-group list-group-flush ">
                                    <form class="form-inline p-4">
                                        <div class="search-element">
                                            <input class="form-control header-search" type="search"
                                                   placeholder="Search..." aria-label="Search">
                                        </div>
                                    </form>
                                    <div class="list-group-item d-flex  align-items-center">
                                        <div class="mr-2">
                                            <span class="avatar avatar-md brround cover-image"
                                                  data-image-src="../assets/images/users/female/12.jpg"><span
                                                    class="avatar-status bg-green"></span></span>
                                        </div>
                                        <div class="">
                                            <div class="font-weight-semibold">Mahbobe Espidkari</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="btn btn-sm btn-light"><i
                                                    class="fab fa-facebook-messenger"></i></a>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex  align-items-center">
                                        <div class="mr-2">
                                            <span class="avatar avatar-md brround cover-image"
                                                  data-image-src="../assets/images/users/female/21.jpg"></span>
                                        </div>
                                        <div class="">
                                            <div class="font-weight-semibold">Florinda Carasco</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="btn btn-sm btn-light"><i
                                                    class="fab fa-facebook-messenger"></i></a>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex  align-items-center">
                                        <div class="mr-2">
                                            <span class="avatar avatar-md brround cover-image"
                                                  data-image-src="../assets/images/users/female/29.jpg"><span
                                                    class="avatar-status bg-green"></span></span>
                                        </div>
                                        <div class="">
                                            <div class="font-weight-semibold">Alina Bernier</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="btn btn-sm btn-light"><i
                                                    class="fab fa-facebook-messenger"></i></a>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex  align-items-center">
                                        <div class="mr-2">
                                            <span class="avatar avatar-md brround cover-image"
                                                  data-image-src="../assets/images/users/female/2.jpg"><span
                                                    class="avatar-status bg-green"></span></span>
                                        </div>
                                        <div class="">
                                            <div class="font-weight-semibold">Zula Mclaughin</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="btn btn-sm btn-light"><i
                                                    class="fab fa-facebook-messenger"></i></a>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex  align-items-center">
                                        <div class="mr-2">
                                            <span class="avatar avatar-md brround cover-image"
                                                  data-image-src="../assets/images/users/male/34.jpg"></span>
                                        </div>
                                        <div class="">
                                            <div class="font-weight-semibold">Isidro Heide</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="btn btn-sm btn-light"><i
                                                    class="fab fa-facebook-messenger"></i></a>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex  align-items-center">
                                        <div class="mr-2">
                                            <span class="avatar avatar-md brround cover-image"
                                                  data-image-src="../assets/images/users/male/12.jpg"><span
                                                    class="avatar-status bg-green"></span></span>
                                        </div>
                                        <div class="">
                                            <div class="font-weight-semibold">Mahbobe Espidkari</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="btn btn-sm btn-light"><i
                                                    class="fab fa-facebook-messenger"></i></a>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex  align-items-center">
                                        <div class="mr-2">
                                            <span class="avatar avatar-md brround cover-image"
                                                  data-image-src="../assets/images/users/male/21.jpg"></span>
                                        </div>
                                        <div class="">
                                            <div class="font-weight-semibold">Florinda Carasco</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="btn btn-sm btn-light"><i
                                                    class="fab fa-facebook-messenger"></i></a>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex  align-items-center">
                                        <div class="mr-2">
                                            <span class="avatar avatar-md brround cover-image"
                                                  data-image-src="../assets/images/users/male/29.jpg"></span>
                                        </div>
                                        <div class="">
                                            <div class="font-weight-semibold">Alina Bernier</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="btn btn-sm btn-light"><i
                                                    class="fab fa-facebook-messenger"></i></a>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex  align-items-center">
                                        <div class="mr-2">
                                            <span class="avatar avatar-md brround cover-image"
                                                  data-image-src="../assets/images/users/male/2.jpg"></span>
                                        </div>
                                        <div class="">
                                            <div class="font-weight-semibold">Zula Mclaughin</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="btn btn-sm btn-light"><i
                                                    class="fab fa-facebook-messenger"></i></a>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex  align-items-center">
                                        <div class="mr-2">
                                            <span class="avatar avatar-md brround cover-image"
                                                  data-image-src="../assets/images/users/female/14.jpg"><span
                                                    class="avatar-status bg-green"></span></span>
                                        </div>
                                        <div class="">
                                            <div class="font-weight-semibold">Isidro Heide</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="btn btn-sm btn-light"><i
                                                    class="fab fa-facebook-messenger"></i></a>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex  align-items-center">
                                        <div class="mr-2">
                                            <span class="avatar avatar-md brround cover-image"
                                                  data-image-src="../assets/images/users/male/11.jpg"></span>
                                        </div>
                                        <div class="">
                                            <div class="font-weight-semibold">Florinda Carasco</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="btn btn-sm btn-light"><i
                                                    class="fab fa-facebook-messenger"></i></a>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex  align-items-center">
                                        <div class="mr-2">
                                            <span class="avatar avatar-md brround cover-image"
                                                  data-image-src="../assets/images/users/male/9.jpg"></span>
                                        </div>
                                        <div class="">
                                            <div class="font-weight-semibold">Alina Bernier</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="btn btn-sm btn-light"><i
                                                    class="fab fa-facebook-messenger"></i></a>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex  align-items-center">
                                        <div class="mr-2">
                                            <span class="avatar avatar-md brround cover-image"
                                                  data-image-src="../assets/images/users/male/22.jpg"><span
                                                    class="avatar-status bg-green"></span></span>
                                        </div>
                                        <div class="">
                                            <div class="font-weight-semibold">Zula Mclaughin</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="btn btn-sm btn-light"><i
                                                    class="fab fa-facebook-messenger"></i></a>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex  align-items-center">
                                        <div class="mr-2">
                                            <span class="avatar avatar-md brround cover-image"
                                                  data-image-src="../assets/images/users/female/4.jpg"></span>
                                        </div>
                                        <div class="">
                                            <div class="font-weight-semibold">Isidro Heide</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="btn btn-sm btn-light"><i
                                                    class="fab fa-facebook-messenger"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Sidebar-right-->

            <!--footer-->
            <footer class="footer">
                <div class="container">
                    <div class="row align-items-center flex-row-reverse text-white-50">
                        <div class="col-md-12 col-sm-12 text-center">
                            Copyright © 2019 <a href="#">Getren</a>. Designed by <a href="#">Spruko</a> All rights
                            reserved.
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer-->
        </div>
    </div>
</div>

<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fas fa-angle-up "></i></a>

<!-- Dashboard js -->
<script src="../assets/js/vendors/jquery-3.2.1.min.js"></script>
<script src="../assets/js/vendors/jquery.sparkline.min.js"></script>
<script src="../assets/js/vendors/bootstrap.bundle.min.js"></script>
<script src="../assets/js/vendors/selectize.min.js"></script>
<script src="../assets/js/vendors/jquery.tablesorter.min.js"></script>
<script src="../assets/js/vendors/circle-progress.min.js"></script>
<script src="../assets/plugins/rating/jquery.rating-stars.js"></script>

<!--Bootstrap.min js-->
<script src="../assets/plugins/bootstrap/popper.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Side menu js -->
<script src="../assets/plugins/toggle-sidebar/js/sidemenu.js"></script>

<!-- Custom scroll bar Js-->
<script src="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- peitychart -->
<script src="../assets/plugins/peitychart/jquery.peity.min.js"></script>

<!---Tabs JS-->
<script src="../assets/plugins/tabs/jquery.multipurpose_tabcontent.js"></script>

<!---Tabs scripts-->
<script src="../assets/js/tabs.js"></script>

<!-- Input Mask Plugin -->
<script src="../assets/plugins/input-mask/jquery.mask.min.js"></script>

<!-- Google Maps js-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyAykAdIIsNMu0V2wyGOMQcguo8zKngWlyM"></script>
<script src="../assets/plugins/maps-google/jquery.googlemap.js"></script>
<script src="../assets/plugins/maps-google/map.js"></script>

<!-- Vector Map js-->
<script src="../assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="../assets/plugins/jvectormap/gdp-data.js"></script>
<script src="../assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
<script src="../assets/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js"></script>
<script src="../assets/plugins/jvectormap/jquery-jvectormap-au-mill.js"></script>
<script src="../assets/plugins/jvectormap/jquery-jvectormap-ca-lcc.js"></script>
<script src="../assets/js/jvectormap.js"></script>

<!-- Chart js -->
<script src="../assets/plugins/chart/chart.bundle.js"></script>
<script src="../assets/plugins/chart/utils.js"></script>
<script src="../assets/js/chart.js"></script>

<!-- ApexChart -->
<script src="../assets/js/apexcharts.js"></script>

<!-- Data tables -->
<script src="../assets/plugins/Datatable/js/jquery.dataTables.js"></script>
<script src="../assets/plugins/Datatable/js/dataTables.bootstrap4.js"></script>
<script src="../assets/plugins/Datatable/js/dataTables.buttons.min.js"></script>
<script src="../assets/plugins/Datatable/js/buttons.bootstrap4.min.js"></script>
<script src="../assets/plugins/Datatable/js/jszip.min.js"></script>
<script src="../assets/plugins/Datatable/js/pdfmake.min.js"></script>
<script src="../assets/plugins/Datatable/js/vfs_fonts.js"></script>
<script src="../assets/plugins/Datatable/js/buttons.html5.min.js"></script>
<script src="../assets/plugins/Datatable/js/buttons.print.min.js"></script>
<script src="../assets/plugins/Datatable/js/buttons.colVis.min.js"></script>
<script src="../assets/plugins/datatable/dataTables.responsive.min.js"></script>
<script src="../assets/plugins/datatable/responsive.bootstrap4.min.js"></script>

<!-- Data table js -->
<script src="../assets/js/datatable.js"></script>

<!--Horizontalmenu js-->
<script src="../assets/plugins/horizontal-menu/webslidemenu.js"></script>

<!-- Default calendar -->
<script src="../assets/plugins/calendar/underscore-min.js"></script>
<script src="../assets/plugins/calendar/moment.js"></script>
<script src="../assets/plugins/calendar/clndr.js"></script>
<script src="../assets/plugins/calendar/demo.js"></script>
<script src="../assets/plugins/rating/jquery.rating-stars.js"></script>
<script src='../assets/plugins/calendar/calendar.min.js'></script>
<script src='../assets/plugins/calendar/defalutcal.js'></script>

<!-- Calendar js -->
<script src="../assets/plugins/calendar2/js/tui-code-snippet.min.js"></script>
<script src="../assets/plugins/calendar2/js/tui-time-picker.min.js"></script>
<script src="../assets/plugins/calendar2/js/tui-date-picker.min.js"></script>
<script src="../assets/plugins/calendar2/js/moment.min.js"></script>
<script src="../assets/plugins/calendar2/js/chance.min.js"></script>
<script src="../assets/plugins/calendar2/js/tui-calendar.js"></script>
<script src="../assets/plugins/calendar2/js/calendars.js"></script>
<script src="../assets/plugins/calendar2/js/schedules.js"></script>
<script src="../assets/plugins/calendar2/js/dooray.js"></script>
<script src="../assets/plugins/calendar2/js/default.js"></script>

<!--Datepicker Js-->
<script src="../assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>


<!--Time Counter -->
<script src="../assets/plugins/counters/jquery.missofis-countdown.js"></script>
<script src="../assets/plugins/counters/counter.js"></script>

<!--Counters -->
<script src="../assets/plugins/counters/counterup.min.js"></script>
<script src="../assets/plugins/counters/waypoints.min.js"></script>

<!-- popover js -->
<script src="../assets/js/popover.js"></script>

<!---Accordion Js-->
<script src="../assets/plugins/accordion/accordion.min.js"></script>
<script src="../assets/plugins/accordion/accor.js"></script>

<!-- Notifications js -->
<script src="../assets/plugins/notify/js/rainbow.js"></script>
<script src="../assets/plugins/notify/js/sample.js"></script>
<script src="../assets/plugins/notify/js/jquery.growl.js"></script>
<script src="../assets/plugins/notify/js/notify.js"></script>

<!-- Scripts -->
<script src="../assets/js/index2.js"></script>
<script src="../assets/js/index3.js"></script>

<!-- Notify js -->
<script src="../assets/js/notify.js"></script>

<!--Morris.js Charts Plugin -->
<script src="../assets/plugins/morris/morris.min.js"></script>
<script src="../assets/plugins/morris/raphael.min.js"></script>

<!-- Index Scripts -->
<script src="../assets/js/morris.js"></script>
<script src="../assets/js/flot.js"></script>


<!--Echart Plugin -->
<script src="../assets/plugins/echart/echart.js"></script>
<script src="../assets/js/echarts.js"></script>

<!-- Chartist.js -->
<script src="../assets/plugins/chartist/chartist.js"></script>
<script src="../assets/plugins/chartist/chart.chartist.js"></script>
<script src="../assets/plugins/chartist/chartist-plugin-tooltip.js"></script>


<!--Rang slider js-->
<script src="../assets/plugins/rangeslider/ion.rangeSlider.js"></script>
<script src="../assets/js/rangeslider.js"></script>

<!--Highcharts Plugin -->
<script src="../assets/plugins/highcharts/highcharts.js"></script>
<script src="../assets/plugins/highcharts/highcharts-3d.js"></script>
<script src="../assets/plugins/highcharts/exporting.js"></script>
<script src="../assets/plugins/highcharts/export-data.js"></script>
<script src="../assets/plugins/highcharts/histogram-bellcurve.js"></script>
<script src="../assets/js/highcharts.js"></script>

<!-- Sweet alert Plugin -->
<script src="../assets/plugins/sweet-alert/sweetalert.min.js"></script>
<script src="../assets/js/sweet-alert.js"></script>

<!-- Timepicker js -->
<script src="../assets/plugins/time-picker/jquery.timepicker.js"></script>
<script src="../assets/plugins/time-picker/toggles.min.js"></script>

<!--Accordion-Wizard-Form js-->
<script src="../assets/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js"></script>
<script src="../assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
<script src="../assets/js/wizard.js"></script>


<!-- Datepicker js -->
<script src="../assets/plugins/date-picker/spectrum.js"></script>
<script src="../assets/plugins/date-picker/jquery-ui.js"></script>
<script src="../assets/plugins/input-mask/jquery.maskedinput.js"></script>

<!--MutipleSelect js-->
<script src="../assets/plugins/multipleselect/multiple-select.js"></script>
<script src="../assets/plugins/multipleselect/multi-select.js"></script>

<!-- Inline js -->
<script src="../assets/js/select2.js"></script>

<!--Rating js-->
<script src="../assets/plugins/rating/jquery.rating-stars.js"></script>

<!-- WYSIWYG Editor js -->
<script src="../assets/plugins/wysiwyag/jquery.richtext.js"></script>
<script src="../assets/plugins/wysiwyag/richText1.js"></script>

<!--ckeditor js-->
<script src="../assets/plugins/tinymce/tinymce.min.js"></script>

<!-- Richtext js -->
<script src="../assets/js/richtext.js"></script>
<!-- Timeline js -->
<script src="../assets/plugins/timeline/timeline.min.js"></script>
<script src="../assets/js/timeline.js"></script>

<!-- Sidebar js -->
<script src="../assets/plugins/sidebar/sidebar.js"></script>

<!-- Custom js -->
<script src="../assets/js/custom.js"></script>
<script src="../assets/js/index3.js"></script>

</body>
</html>