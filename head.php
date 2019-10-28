<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileColor" content="#0670f0">
    <meta name="theme-color" content="#1643a3">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="/assets/images/brand/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/brand/favicon.ico"/>

    <!-- Title -->
    <title>Matican Group</title>


    <!-- select2 Plugin -->
    <link href="/assets/plugins/select2/select2.min.css" rel="stylesheet"/>


    <!--Bootstrap.min css-->
    <link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css">

    <!--Font Awesome-->
    <link href="/assets/plugins/fontawesome-free/css/all.css" rel="stylesheet">

    <!-- Dashboard Css -->
    <link href="/assets/css/dashboard.css" rel="stylesheet" />


    <!-- Custom scroll bar css-->
    <link href="/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

    <!-- Font Family -->
    <link href="/assets/copy-font.css" rel="stylesheet">

    <!-- Sidemenu Css -->
    <link href="/assets/plugins/toggle-sidebar/css/sidemenu-light.css" rel="stylesheet">

    <!---Font icons-->
    <link href="/assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet"/>
    <link href="/assets/plugins/iconfonts/plugin.css" rel="stylesheet"/>
    <link href="/assets/plugins/iconfonts/icons.css" rel="stylesheet"/>


    <!-- Sidebar css -->
    <link href="/assets/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!-- Data table css -->
    <link href="/assets/plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/assets/plugins/datatable/css/buttons.bootstrap4.min.css">
    <link href="/assets/plugins/datatable/responsive.bootstrap4.min.css" rel="stylesheet"/>

    <?php if (false): ?>
        <?php
        $current_page = ['/test', '/tasks', '/project-view'];

        if (in_array($_SERVER['REQUEST_URI'], $current_page)) :?>

            <!-- Calendar Plugin -->
            <link href="/assets/plugins/calendar/clndr.css" rel="stylesheet"/>
            <link href="/assets/plugins/calendar/stylesheet.css" rel="stylesheet"/>

            <!--Calendar Css -->
            <link href="/assets/plugins/calendar2/css/tui-time-picker.css" rel="stylesheet"/>
            <link href="/assets/plugins/calendar2/css/tui-date-picker.css" rel="stylesheet"/>
            <link href="/assets/plugins/calendar2/css/tui-calendar.css" rel="stylesheet"/>
            <link href="/assets/plugins/calendar2/css/default.css" rel="stylesheet"/>
            <link href="/assets/plugins/calendar2/css/icons.css" rel="stylesheet"/>

        <?php endif ?>

    <?php endif; ?>
    <!--Chartist css-->
    <link rel="stylesheet" href="/assets/plugins/chartist/chartist.css">
    <link rel="stylesheet" href="/assets/plugins/chartist/chartist-plugin-tooltip.css">


    <!-- Notifications  css -->
    <link href="/assets/plugins/notify/css/jquery.growl.css" rel="stylesheet"/>

    <!-- Horizontal-menu Css -->
    <link href="/assets/plugins/horizontal-menu/dropdown-effects/fade-down.css" rel="stylesheet">
    <link href="/assets/plugins/horizontal-menu/webslidemenu.css" rel="stylesheet">

    <!-- c3 Charts css -->
    <link href="/assets/plugins/charts-c3/c3-chart.css" rel="stylesheet"/>

    <!-- Tabs Style -->
    <link href="/assets/plugins/tabs/style.css" rel="stylesheet"/>


    <!-- timeline Plugin -->
    <link href="/assets/plugins/timeline/timeline.min.css" rel="stylesheet"/>


    <!-- Accordion Css -->
    <link href="/assets/plugins/accordion/accordion.css" rel="stylesheet"/>

    <!-- WYSIWYG Editor css -->
    <link href="/assets/plugins/wysiwyag/richtext.min.css" rel="stylesheet"/>

    <!--Rangeslider css-->
    <link href="/assets/plugins/rangeslider/ion.rangeSlider.css" rel="stylesheet"/>
    <link href="/assets/plugins/rangeslider/ion.rangeSlider.skinHTML5.css" rel="stylesheet">


    <!-- Time picker Plugin -->
    <link href="/assets/plugins/time-picker/jquery.timepicker.css" rel="stylesheet"/>

    <!-- Date Picker Plugin -->
    <link href="/assets/plugins/date-picker/spectrum.css" rel="stylesheet"/>

    <!--multipleselect css-->
    <link rel="stylesheet" href="/assets/plugins/multipleselect/multiple-select.css">

    <style>
        .page-title {
            color: white !important;
        }

        .side-app {

            padding-top: 58px !important;

        }
    </style>

</head>