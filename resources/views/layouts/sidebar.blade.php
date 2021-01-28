<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
    </div>
        <div class="scrollbar-sidebar ps ps--active-y">
            <div class="app-sidebar__inner">
                <ul class="vertical-nav-menu metismenu">
                    <li class="app-sidebar__heading">Statistics</li>
                    <li class="">
                        <a href="{!! url('/') !!}" aria-expanded="false">
                            <i class="metismenu-icon pe-7s-keypad"></i>Dashboard
                        </a>
                    </li>
                    <li class="app-sidebar__heading">Setup</li>
                    <li>
                        <a href="{!! url('/shifts') !!}">
                            <i class="metismenu-icon pe-7s-timer">
                            </i>Shifts
                        </a>
                    </li>

                    <li class="app-sidebar__heading">Employees</li>
                    <li class="">
                        <a href="#" aria-expanded="false">
                            <i class="metismenu-icon pe-7s-users"></i>Employees
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul class="mm-collapse" style="height: 7.04px;">
                            <li>
                                <a href="{!! url('/all-employees') !!}">
                                    <i class="metismenu-icon">
                                    </i>All Employees
                                </a>
                            </li>
                            <li>
                                <a href="{!! url('/attendance') !!}">
                                    <i class="metismenu-icon">
                                    </i>Attendance
                                </a>
                            </li>
                            <li>
                                <a href="{!! url('/assign-shifts') !!}">
                                    <i class="metismenu-icon">
                                    </i>Assign Shifts
                                </a>
                            </li>


                        </ul>
                    </li>
                </ul>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 417px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 171px;"></div></div></div>
</div>

