<!--Calendar Css -->
<link href="../assets/plugins/calendar2/css/tui-time-picker.css" rel="stylesheet"/>
<link href="../assets/plugins/calendar2/css/tui-date-picker.css" rel="stylesheet"/>
<link href="../assets/plugins/calendar2/css/tui-calendar.css" rel="stylesheet"/>
<link href="../assets/plugins/calendar2/css/default.css" rel="stylesheet"/>
<link href="../assets/plugins/calendar2/css/icons.css" rel="stylesheet"/>
<!--Page Header-->
<div class="mb-5">
    <div class="page-header  mb-0">
        <h4 class="page-title">Calendar</h4>
        <div class="float-right ml-auto">


        </div>

    </div>
</div>
<!--page header-->
<div class="row">
    <div class="col-lg-12 col-md-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="border p-0">
                    <div class="row m-0">
                        <div id="lnb" class="col-2">
                            <div class="lnb-new-schedule">
                                <button id="btn-new-schedule" type="button"
                                        class="btn btn-secondary btn-block " data-toggle="modal">
                                    New Task, Call or Meeting
                                </button>
                            </div>
                            <div id="lnb-calendars" class="lnb-calendars">
                                <div>
                                    <div class="lnb-calendars-item">
                                        <label>
                                            <input class="tui-full-calendar-checkbox-square" type="checkbox" value="all"
                                                   checked>
                                            <span></span>
                                            <strong>View all</strong>
                                        </label>
                                    </div>
                                </div>
                                <div id="calendarList" class="lnb-calendars-d1">
                                </div>
                            </div>
                        </div>
                        <div id="right" class="col-10">
                            <div id="menu">
                                <div class="dropdown">
                                    <button id="dropdownMenu-calendarType"
                                            class="btn btn-primary btn-sm btn-pill dropdown-toggle" type="button"
                                            data-toggle="dropdown"
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
                                                <input type="checkbox" class="tui-full-calendar-checkbox-square"
                                                       value="toggle-workweek" checked>
                                                <span class="checkbox-title"></span>Show weekends
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a role="menuitem" data-action="toggle-start-day-1">
                                                <input type="checkbox" class="tui-full-calendar-checkbox-square"
                                                       value="toggle-start-day-1">
                                                <span class="checkbox-title"></span>Start Week on Monday
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a role="menuitem" data-action="toggle-narrow-weekend">
                                                <input type="checkbox" class="tui-full-calendar-checkbox-square"
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
<?php
$scripts = [
    '/assets/plugins/calendar2/js/tui-code-snippet.min.js',
    '/assets/plugins/calendar2/js/tui-time-picker.min.js',
    '/assets/plugins/calendar2/js/moment.min.js',
    '/assets/plugins/calendar2/js/chance.min.js',
    '/assets/plugins/calendar2/js/tui-calendar.js',
    '/assets/plugins/calendar2/js/calendars.js',
    '/assets/plugins/calendar2/js/schedules.js',
    '/assets/plugins/calendar2/js/dooray.js',
    '/assets/plugins/calendar2/js/default.js',
];


?>
