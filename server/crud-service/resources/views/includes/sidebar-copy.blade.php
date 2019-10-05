<!-- begin:: Aside -->
<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
<div class="kt-aside kt-aside--fixed kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

    <!-- begin::Aside Brand -->
    <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
        <div class="kt-aside__brand-logo">
            <a href="/">
                <img alt="Logo" src="{{ asset("assets/media/logos/sl-logo-small.png") }}" />
            </a>
        </div>
        <div class="kt-aside__brand-tools">
            <button class="kt-aside__brand-aside-toggler kt-aside__brand-aside-toggler--left" id="kt_aside_toggler"><span></span></button>
        </div>
    </div>
    <!-- end:: Aside Brand -->

    <!-- begin:: Aside Menu -->
    <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
        <div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
            <ul class="kt-menu__nav">

                <!-- DASHBOARD -->
                <li class="kt-menu__item  kt-menu__item--here {{Request::is('dashboard') ? 'kt-menu__item--active' : ''}}"
                    aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                    <a href="/" class="kt-menu__link kt-menu__toggle">
                        <i class="kt-menu__link-icon flaticon2-graphic"></i>
                        <span class="kt-menu__link-text">Dashboards</span>
                    </a>
                </li>
                <!-- .DASHBOARD -->


                <!-- SOCIETY PILLS -->
                <li class="kt-menu__item ht-menu__item--submenu {{Request::is('society*') ? 'kt-menu__item--active kt-menu__item--open' : ''}}" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                    <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                        <i class="kt-menu__link-icon la la-group"></i>
                        <span class="kt-menu__link-text">Societies</span>
                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                    </a>
                    <div class="kt-menu__submenu">
                        <span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <!-- PARENT ITEM -->
                            <li class="kt-menu__item kt-menu__item--parent" aria-haspopup="true">
                                <span class="kt-menu__link">
                                    <span class="kt-menu__link-text">Societies</span>
                                </span>
                            </li>

                            <!-- ADD BATCH PILL -->
                            <li class="kt-menu__item  {{ Request::is('society/create') ? 'kt-menu__item--active' : '' }}" aria-haspopup="true">
                                <a href="/society/create" class="kt-menu__link">
                                    <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                        <span></span>
                                    </i>
                                    <span class="kt-menu__link-text">Add Society</span>
                                </a>
                            </li>
                            <!-- .ADD BATCH PILL -->

                            <!-- MANAGE STUDENT PILL -->
                            <li class="kt-menu__item  {{ Request::is('society') ? 'kt-menu__item--active' : '' }}" aria-haspopup="true">
                                <a href="/society" class="kt-menu__link">
                                    <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                        <span></span>
                                    </i>
                                    <span class="kt-menu__link-text">Manage Societies</span>
                                </a>
                            </li>
                            <!-- .MANAGE BATCH PILL -->
                        </ul>
                    </div>
                </li>
                <!-- .BATCH PILLS -->



            </ul>
        </div>
    </div>

    <!-- end:: Aside Menu -->

    <!-- begin:: Aside Footer -->
    <div class="kt-aside__footer kt-grid__item" id="kt_aside_footer">
        <div class="kt-aside__footer-nav">
            <div class="kt-aside__footer-item">
                <a href="#" class="btn btn-icon"><i class="flaticon2-gear"></i></a>
            </div>
            <div class="kt-aside__footer-item">
                <a href="#" class="btn btn-icon"><i class="flaticon2-cube"></i></a>
            </div>
            <div class="kt-aside__footer-item">
                <a href="#" class="btn btn-icon"><i class="flaticon2-bell-alarm-symbol"></i></a>
            </div>
            <div class="kt-aside__footer-item">
                <button type="button" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                    <i class="flaticon2-add"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-left">
                    <ul class="kt-nav">
                        <li class="kt-nav__section kt-nav__section--first">
                            <span class="kt-nav__section-text">Export Tools</span>
                        </li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon la la-print"></i>
                                <span class="kt-nav__link-text">Print</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon la la-copy"></i>
                                <span class="kt-nav__link-text">Copy</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                <span class="kt-nav__link-text">Excel</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon la la-file-text-o"></i>
                                <span class="kt-nav__link-text">CSV</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                <span class="kt-nav__link-text">PDF</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="kt-aside__footer-item">
                <a href="#" class="btn btn-icon"><i class="flaticon2-calendar-2"></i></a>
            </div>
        </div>
    </div>

    <!-- end:: Aside Footer-->
</div>
