<!DOCTYPE html>

<!--
Theme: Keen - The Ultimate Bootstrap Admin Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: You must have a valid license purchased only from https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/ in order to legally use the theme for your project.
-->
<html lang="en">

<!-- begin::Head -->
<head>

    <!--begin::Base Path (base relative path for assets of this page) -->
    <base href=".">

    <!--end::Base Path -->
    <meta charset="utf-8"/>
    <title>QuizBuster</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!--begin::Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700"]
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Fonts -->

    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="{{ asset("assets/vendors/custom/fullcalendar/fullcalendar.bundle.css") }}" rel="stylesheet"
          type="text/css"/>

    <!--end::Page Vendors Styles -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="{{ asset("assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css") }}" rel="stylesheet"
          type="text/css"/>

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="{{ asset("assets/vendors/general/tether/dist/css/tether.css") }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css") }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css") }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css") }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css") }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset("assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css") }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css") }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset("assets/vendors/general/nouislider/distribute/nouislider.css") }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset("assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css") }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset("assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css") }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset("assets/vendors/general/dropzone/dist/dropzone.css") }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/vendors/general/summernote/dist/summernote.css") }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css") }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/vendors/general/animate.css/animate.css") }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/vendors/general/toastr/build/toastr.css") }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/vendors/general/morris.js/morris.css") }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/vendors/general/sweetalert2/dist/sweetalert2.css") }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset("assets/vendors/general/socicon/css/socicon.css") }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/vendors/custom/vendors/line-awesome/css/line-awesome.css") }}" rel="stylesheet"
    <link href="{{ asset("assets/vendors/custom/vendors/line-awesome/css/line-awesome.css") }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset("assets/vendors/custom/vendors/flaticon/flaticon.css") }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/vendors/custom/vendors/flaticon2/flaticon.css") }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css") }}" rel="stylesheet"
          type="text/css"/>
    <link rel="stylesheet" href="{{ asset("assets/vendors/general/toastr/build/toastr.min.css") }}">

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{ asset("assets/css/demo1/style.bundle.css") }}" rel="stylesheet" type="text/css"/>

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->
    <link href="{{ asset("assets/css/demo1/skins/header/base/light.css") }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/css/demo1/skins/header/menu/light.css") }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/css/demo1/skins/brand/brand.css") }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/css/demo1/skins/aside/brand.css") }}" rel="stylesheet" type="text/css"/>


    <!-- LOADING SELECT2 -->
    <!-- TODO : REPLACE THIS CDN VERSION WITH A LOCAL COPY -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
    <!--.SELECT2-->
    @yield('custom-styles', '')

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico"/>
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed">

<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
    <div class="kt-header-mobile__logo">
        <a href="demo1/index.html">
            <img alt="Logo" src="assets/media/logos/logo-6.png"/>
        </a>
    </div>
    <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left"
                id="kt_aside_mobile_toggler"><span></span></button>
        <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
        <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i
                    class="flaticon-more"></i></button>
    </div>
</div>

<!-- end:: Header Mobile -->

<!-- begin:: Root -->
<div class="kt-grid kt-grid--hor kt-grid--root">

    <!-- begin:: Page -->
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
    @include('includes.sidebar-copy')

    <!-- begin:: Wrapper -->
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

            <!-- begin:: Header -->
            <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

                <!-- begin:: Header Menu -->
                <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i
                            class="la la-close"></i></button>
                <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
                    <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout- ">
                        <ul class="kt-menu__nav ">
                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Reports</span><i class="kt-menu__hor-arrow la la-angle-down"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu  kt-menu__submenu--fixed kt-menu__submenu--left" style="width:1000px">
                                    <div class="kt-menu__subnav">
                                        <ul class="kt-menu__content">
                                            <li class="kt-menu__item ">
                                                <h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Finance Reports</span><i class="kt-menu__ver-arrow la la-angle-right"></i></h3>
                                                <ul class="kt-menu__inner">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-map"></i><span class="kt-menu__link-text">Annual Reports</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-user"></i><span class="kt-menu__link-text">HR Reports</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-clipboard"></i><span class="kt-menu__link-text">IPO Reports</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-graphic-1"></i><span class="kt-menu__link-text">Finance Margins</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-graphic-2"></i><span class="kt-menu__link-text">Revenue Reports</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="kt-menu__item ">
                                                <h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Project Reports</span><i class="kt-menu__ver-arrow la la-angle-right"></i></h3>
                                                <ul class="kt-menu__inner">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Coca Cola CRM</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Delta Airlines Booking Site</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Malibu Accounting</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Vineseed Website Rewamp</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Zircon Mobile App</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Mercury CMS</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="kt-menu__item ">
                                                <h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">HR Reports</span><i class="kt-menu__ver-arrow la la-angle-right"></i></h3>
                                                <ul class="kt-menu__inner">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Staff Directory</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Client Directory</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Salary Reports</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Staff Payslips</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Corporate Expenses</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Project Expenses</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="kt-menu__item ">
                                                <h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Reporting Apps</span><i class="kt-menu__ver-arrow la la-angle-right"></i></h3>
                                                <ul class="kt-menu__inner">
                                                    <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Report Adjusments</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Sources & Mediums</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Reporting Settings</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Conversions</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Report Flows</span></a></li>
                                                    <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Audit & Logs</span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- end:: Header Menu -->


                <!-- begin:: Header Topbar -->
                <div class="kt-header__topbar">
                    <!--begin: Search -->
                    <div class="kt-header__topbar-item kt-header__topbar-item--search dropdown">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                            <span class="kt-header__topbar-icon"><i class="flaticon2-search-1"></i></span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-top-unround dropdown-menu-anim dropdown-menu-lg">
                            <div class="kt-quick-search kt-quick-search--dropdown kt-quick-search--result-compact"
                                 id="kt_quick_search_dropdown">
                                <form method="get" class="kt-quick-search__form">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="flaticon2-search-1"></i></span></div>
                                        <input type="text" class="form-control kt-quick-search__input"
                                               placeholder="Search...">
                                        <div class="input-group-append"><span class="input-group-text"><i
                                                        class="la la-close kt-quick-search__close"></i></span></div>
                                    </div>
                                </form>
                                <div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="325"
                                     data-mobile-height="200">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--end: Search -->

                    <!--begin: Notifications -->
                    <div class="kt-header__topbar-item dropdown">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="30px, 0px"
                             aria-expanded="true">
									<span class="kt-header__topbar-icon">
										<i class="flaticon2-bell-alarm-symbol"></i>
										<span class="kt-badge kt-badge--dot kt-badge--notify kt-badge--sm kt-badge--brand"></span>
									</span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-lg">
                            <form>
                                <div class="kt-head" style="background-image: url('{{ asset("assets/media/misc/head_bg_sm.jpg") }}')">
                                    <h3 class="kt-head__title">User Notifications</h3>
                                    <div class="kt-head__sub"><span class="kt-head__desc">23 new notifications</span>
                                    </div>
                                </div>
                                <div class="kt-notification kt-margin-t-30 kt-margin-b-20 kt-scroll" data-scroll="true"
                                     data-height="270" data-mobile-height="220">
                                    <a href="#" class="kt-notification__item">
                                        <div class="kt-notification__item-icon">
                                            <i class="flaticon2-pie-chart kt-font-focus"></i>
                                        </div>
                                        <div class="kt-notification__item-details">
                                            <div class="kt-notification__item-title">
                                                New customer is registered
                                            </div>
                                            <div class="kt-notification__item-time">
                                                3 days ago
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!--end: Notifications -->

                    <!--begin: Quick Actions -->
                    <div class="kt-header__topbar-item">
                        <div class="kt-header__topbar-wrapper" id="kt_offcanvas_toolbar_quick_actions_toggler_btn">
                            <span class="kt-header__topbar-icon"><i class="flaticon2-gear"></i></span>
                        </div>
                    </div>

                    <!--end: Quick Actions -->

                    <!--begin: User Bar -->
                    <div class="kt-header__topbar-item kt-header__topbar-item--user">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px, 0px">
                            <div class="kt-header__topbar-user">
                                <span class="kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
                                <span class="kt-header__topbar-username kt-hidden-mobile">Sean</span>
                                <img alt="Pic" src="{{ asset("assets/media/users/300_25.jpg") }}"/>

                                <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                <span class="kt-badge kt-badge--username kt-badge--lg kt-badge--brand kt-hidden kt-badge--bold">S</span>
                            </div>
                        </div>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-sm">
                            <div class="kt-user-card kt-margin-b-40 kt-margin-b-30-tablet-and-mobile"
                                 style="background-image: url(assets/media/misc/head_bg_sm.jpg)">
                                <div class="kt-user-card__wrapper">
                                    <div class="kt-user-card__pic">
                                        <img alt="Pic" src="assets/media/users/300_21.jpg"/>
                                    </div>
                                    <div class="kt-user-card__details">
                                        <div class="kt-user-card__name">Alex Stone</div>
                                        <div class="kt-user-card__position">CTO, Loop Inc.</div>
                                    </div>
                                </div>
                            </div>
                            <ul class="kt-nav kt-margin-b-10">
                                <li class="kt-nav__item">
                                    <a href="demo1/custom/user/profile-v1.html" class="kt-nav__link">
                                        <span class="kt-nav__link-icon"><i class="flaticon2-calendar-3"></i></span>
                                        <span class="kt-nav__link-text">My Profile</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="demo1/custom/user/profile-v1.html" class="kt-nav__link">
                                        <span class="kt-nav__link-icon"><i class="flaticon2-browser-2"></i></span>
                                        <span class="kt-nav__link-text">My Tasks</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="demo1/custom/user/profile-v1.html" class="kt-nav__link">
                                        <span class="kt-nav__link-icon"><i class="flaticon2-mail"></i></span>
                                        <span class="kt-nav__link-text">Messages</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="demo1/custom/user/profile-v1.html" class="kt-nav__link">
                                        <span class="kt-nav__link-icon"><i class="flaticon2-gear"></i></span>
                                        <span class="kt-nav__link-text">Settings</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item kt-nav__item--custom kt-margin-t-15">
                                    <a href="demo1/custom/user/login-v1.html" target="_blank"
                                       class="btn btn-label-brand btn-upper btn-sm btn-bold">Sign Out</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!--end: User Bar -->

                    <!--begin:: Quick Panel Toggler -->
                    <div class="kt-header__topbar-item kt-header__topbar-item--quick-panel" data-toggle="kt-tooltip"
                         title="Quick panel" data-placement="right">
								<span class="kt-header__topbar-icon" id="kt_quick_panel_toggler_btn">
									<i class="flaticon2-grids"></i>
								</span>
                    </div>

                    <!--end:: Quick Panel Toggler -->
                </div>

                <!-- end:: Header Topbar -->
            </div>

            <!-- end:: Header -->
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
                @yield('page-content')
            </div>

            <!-- begin:: Footer -->
            <div class="kt-footer kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop">
                <div class="kt-footer__copyright">
                    2018&nbsp;&copy;&nbsp;<a href="http://keenthemes.com/keen" target="_blank" class="kt-link">Fluid
                        Technologies</a>
                </div>
                <div class="kt-footer__menu">
                    <a href="http://keenthemes.com/keen" target="_blank" class="kt-footer__menu-link kt-link">About</a>
                    <a href="http://keenthemes.com/keen" target="_blank" class="kt-footer__menu-link kt-link">Team</a>
                    <a href="http://keenthemes.com/keen" target="_blank"
                       class="kt-footer__menu-link kt-link">Contact</a>
                </div>
            </div>

            <!-- end:: Footer -->
        </div>

        <!-- end:: Wrapper -->
    </div>

    <!-- end:: Page -->
</div>

<!-- end:: Root -->

<!-- begin:: Topbar Offcanvas Panels -->

<!-- begin::Offcanvas Toolbar Quick Actions -->
<div id="kt_offcanvas_toolbar_quick_actions" class="kt-offcanvas-panel">
    <div class="kt-offcanvas-panel__head">
        <h3 class="kt-offcanvas-panel__title">
            Quick Actions
        </h3>
        <a href="#" class="kt-offcanvas-panel__close" id="kt_offcanvas_toolbar_quick_actions_close"><i
                    class="flaticon2-delete"></i></a>
    </div>
    <div class="kt-offcanvas-panel__body">
        <div class="kt-grid-nav-v2">
            <a href="#" class="kt-grid-nav-v2__item">
                <div class="kt-grid-nav-v2__item-icon"><i class="flaticon2-box"></i></div>
                <div class="kt-grid-nav-v2__item-title">Orders</div>
            </a>
            <a href="#" class="kt-grid-nav-v2__item">
                <div class="kt-grid-nav-v2__item-icon"><i class="flaticon-download-1"></i></div>
                <div class="kt-grid-nav-v2__item-title">Uploades</div>
            </a>
            <a href="#" class="kt-grid-nav-v2__item">
                <div class="kt-grid-nav-v2__item-icon"><i class="flaticon2-supermarket"></i></div>
                <div class="kt-grid-nav-v2__item-title">Products</div>
            </a>
            <a href="#" class="kt-grid-nav-v2__item">
                <div class="kt-grid-nav-v2__item-icon"><i class="flaticon2-avatar"></i></div>
                <div class="kt-grid-nav-v2__item-title">Customers</div>
            </a>
            <a href="#" class="kt-grid-nav-v2__item">
                <div class="kt-grid-nav-v2__item-icon"><i class="flaticon2-list"></i></div>
                <div class="kt-grid-nav-v2__item-title">Blog Posts</div>
            </a>
            <a href="#" class="kt-grid-nav-v2__item">
                <div class="kt-grid-nav-v2__item-icon"><i class="flaticon2-settings"></i></div>
                <div class="kt-grid-nav-v2__item-title">Settings</div>
            </a>
        </div>
    </div>
</div>

<!-- end::Offcanvas Toolbar Quick Actions -->

<!-- end:: Topbar Offcanvas Panels -->

<!-- begin:: Quick Panel -->
<div id="kt_quick_panel" class="kt-offcanvas-panel">
    <div class="kt-offcanvas-panel__nav">
        <ul class="nav nav-pills" role="tablist">
            <li class="nav-item active">
                <a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_tab_notifications" role="tab">Notifications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_actions" role="tab">Actions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_settings" role="tab">Settings</a>
            </li>
        </ul>
        <button class="kt-offcanvas-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i>
        </button>
    </div>
    <div class="kt-offcanvas-panel__body">
        <div class="tab-content">
            <div class="tab-pane fade show kt-offcanvas-panel__content kt-scroll active"
                 id="kt_quick_panel_tab_notifications" role="tabpanel">

                <!--Begin::Timeline -->
                <div class="kt-timeline">

                    <!--Begin::Item -->
                    <div class="kt-timeline__item kt-timeline__item--success">
                        <div class="kt-timeline__item-section">
                            <div class="kt-timeline__item-section-border">
                                <div class="kt-timeline__item-section-icon">
                                    <i class="flaticon-feed kt-font-success"></i>
                                </div>
                            </div>
                            <span class="kt-timeline__item-datetime">02:30 PM</span>
                        </div>
                        <a href="" class="kt-timeline__item-text">
                            KeenThemes created new layout whith tens of new options for Keen Admin panel
                        </a>
                        <div class="kt-timeline__item-info">
                            HTML,CSS,VueJS
                        </div>
                    </div>

                    <!--End::Item -->

                    <!--Begin::Item -->
                    <div class="kt-timeline__item kt-timeline__item--danger">
                        <div class="kt-timeline__item-section">
                            <div class="kt-timeline__item-section-border">
                                <div class="kt-timeline__item-section-icon">
                                    <i class="flaticon-safe-shield-protection kt-font-danger"></i>
                                </div>
                            </div>
                            <span class="kt-timeline__item-datetime">01:20 AM</span>
                        </div>
                        <a href="" class="kt-timeline__item-text">
                            New secyrity alert by Firewall & order to take aktion on User Preferences
                        </a>
                        <div class="kt-timeline__item-info">
                            Security, Fieewall
                        </div>
                    </div>

                    <!--End::Item -->

                    <!--Begin::Item -->
                    <div class="kt-timeline__item kt-timeline__item--brand">
                        <div class="kt-timeline__item-section">
                            <div class="kt-timeline__item-section-border">
                                <div class="kt-timeline__item-section-icon">
                                    <i class="flaticon2-box kt-font-brand"></i>
                                </div>
                            </div>
                            <span class="kt-timeline__item-datetime">Yestardey</span>
                        </div>
                        <a href="" class="kt-timeline__item-text">
                            FlyMore design mock-ups been uploadet by designers Bob, Naomi, Richard
                        </a>
                        <div class="kt-timeline__item-info">
                            PSD, Sketch, AJ
                        </div>
                    </div>

                    <!--End::Item -->

                    <!--Begin::Item -->
                    <div class="kt-timeline__item kt-timeline__item--warning">
                        <div class="kt-timeline__item-section">
                            <div class="kt-timeline__item-section-border">
                                <div class="kt-timeline__item-section-icon">
                                    <i class="flaticon-pie-chart-1 kt-font-warning"></i>
                                </div>
                            </div>
                            <span class="kt-timeline__item-datetime">Aug 13,2018</span>
                        </div>
                        <a href="" class="kt-timeline__item-text">
                            Meeting with Ken Digital Corp ot Unit14, 3 Edigor Buildings, George Street, Loondon<br>
                            England, BA12FJ
                        </a>
                        <div class="kt-timeline__item-info">
                            Meeting, Customer
                        </div>
                    </div>

                    <!--End::Item -->

                    <!--Begin::Item -->
                    <div class="kt-timeline__item kt-timeline__item--info">
                        <div class="kt-timeline__item-section">
                            <div class="kt-timeline__item-section-border">
                                <div class="kt-timeline__item-section-icon">
                                    <i class="flaticon-notepad kt-font-info"></i>
                                </div>
                            </div>
                            <span class="kt-timeline__item-datetime">May 09, 2018</span>
                        </div>
                        <a href="" class="kt-timeline__item-text">
                            KeenThemes created new layout whith tens of new options for Keen Admin panel
                        </a>
                        <div class="kt-timeline__item-info">
                            HTML,CSS,VueJS
                        </div>
                    </div>

                    <!--End::Item -->

                    <!--Begin::Item -->
                    <div class="kt-timeline__item kt-timeline__item--accent">
                        <div class="kt-timeline__item-section">
                            <div class="kt-timeline__item-section-border">
                                <div class="kt-timeline__item-section-icon">
                                    <i class="flaticon-bell kt-font-success"></i>
                                </div>
                            </div>
                            <span class="kt-timeline__item-datetime">01:20 AM</span>
                        </div>
                        <a href="" class="kt-timeline__item-text">
                            New secyrity alert by Firewall & order to take aktion on User Preferences
                        </a>
                        <div class="kt-timeline__item-info">
                            Security, Fieewall
                        </div>
                    </div>

                    <!--End::Item -->
                </div>

                <!--End::Timeline -->
            </div>
            <div class="tab-pane fade kt-offcanvas-panel__content kt-scroll" id="kt_quick_panel_tab_actions"
                 role="tabpanel">

                <!--begin::Portlet-->
                <div class="kt-portlet kt-portlet--solid-success">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <span class="kt-portlet__head-icon kt-hide"><i class="flaticon-stopwatch"></i></span>
                            <h3 class="kt-portlet__head-title">Recent Bills</h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-group">
                                <div class="dropdown dropdown-inline">
                                    <button type="button"
                                            class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="flaticon-more"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="kt-portlet__content">
                            Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the
                            printing industry.
                        </div>
                    </div>
                    <div class="kt-portlet__foot kt-portlet__foot--sm kt-align-right">
                        <a href="#"
                           class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">Dismiss</a>
                        <a href="#"
                           class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">View</a>
                    </div>
                </div>

                <!--end::Portlet-->

                <!--begin::Portlet-->
                <div class="kt-portlet kt-portlet--solid-focus">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <span class="kt-portlet__head-icon kt-hide"><i class="flaticon-stopwatch"></i></span>
                            <h3 class="kt-portlet__head-title">Latest Orders</h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-group">
                                <div class="dropdown dropdown-inline">
                                    <button type="button"
                                            class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="flaticon-more"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="kt-portlet__content">
                            Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the
                            printing industry.
                        </div>
                    </div>
                    <div class="kt-portlet__foot kt-portlet__foot--sm kt-align-right">
                        <a href="#"
                           class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">Dismiss</a>
                        <a href="#"
                           class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">View</a>
                    </div>
                </div>

                <!--end::Portlet-->

                <!--begin::Portlet-->
                <div class="kt-portlet kt-portlet--solid-info">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">Latest Invoices</h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-group">
                                <div class="dropdown dropdown-inline">
                                    <button type="button"
                                            class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="flaticon-more"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="kt-portlet__content">
                            Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the
                            printing industry.
                        </div>
                    </div>
                    <div class="kt-portlet__foot kt-portlet__foot--sm kt-align-right">
                        <a href="#"
                           class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">Dismiss</a>
                        <a href="#"
                           class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">View</a>
                    </div>
                </div>

                <!--end::Portlet-->

                <!--begin::Portlet-->
                <div class="kt-portlet kt-portlet--solid-warning">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">New Comments</h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-group">
                                <div class="dropdown dropdown-inline">
                                    <button type="button"
                                            class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="flaticon-more"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="kt-portlet__content">
                            Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the
                            printing industry.
                        </div>
                    </div>
                    <div class="kt-portlet__foot kt-portlet__foot--sm kt-align-right">
                        <a href="#"
                           class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">Dismiss</a>
                        <a href="#"
                           class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">View</a>
                    </div>
                </div>

                <!--end::Portlet-->

                <!--begin::Portlet-->
                <div class="kt-portlet kt-portlet--solid-brand">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">Recent Posts</h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-group">
                                <div class="dropdown dropdown-inline">
                                    <button type="button"
                                            class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="flaticon-more"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="kt-portlet__content">
                            Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the
                            printing industry.
                        </div>
                    </div>
                    <div class="kt-portlet__foot kt-portlet__foot--sm kt-align-right">
                        <a href="#"
                           class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">Dismiss</a>
                        <a href="#"
                           class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">View</a>
                    </div>
                </div>

                <!--end::Portlet-->
            </div>
            <div class="tab-pane fade kt-offcanvas-panel__content kt-scroll" id="kt_quick_panel_tab_settings"
                 role="tabpanel">
                <form class="kt-form">
                    <div class="kt-heading kt-heading--space-sm">Notifications</div>
                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Enable notifications:</label>
                        <div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_1">
											<span></span>
										</label>
									</span>
                        </div>
                    </div>
                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Enable audit log:</label>
                        <div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm">
										<label>
											<input type="checkbox" name="quick_panel_notifications_2">
											<span></span>
										</label>
									</span>
                        </div>
                    </div>
                    <div class="form-group form-group-last form-group-xs row">
                        <label class="col-8 col-form-label">Notify on new orders:</label>
                        <div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_2">
											<span></span>
										</label>
									</span>
                        </div>
                    </div>
                    <div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
                    <div class="kt-heading kt-heading--space-sm">Orders</div>
                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Enable order tracking:</label>
                        <div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--danger">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_3">
											<span></span>
										</label>
									</span>
                        </div>
                    </div>
                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Enable orders reports:</label>
                        <div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--danger">
										<label>
											<input type="checkbox" name="quick_panel_notifications_3">
											<span></span>
										</label>
									</span>
                        </div>
                    </div>
                    <div class="form-group form-group-last form-group-xs row">
                        <label class="col-8 col-form-label">Allow order status auto update:</label>
                        <div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--danger">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_4">
											<span></span>
										</label>
									</span>
                        </div>
                    </div>
                    <div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
                    <div class="kt-heading kt-heading--space-sm">Customers</div>
                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Enable customer singup:</label>
                        <div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--success">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_5">
											<span></span>
										</label>
									</span>
                        </div>
                    </div>
                    <div class="form-group form-group-xs row">
                        <label class="col-8 col-form-label">Enable customers reporting:</label>
                        <div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--success">
										<label>
											<input type="checkbox" name="quick_panel_notifications_5">
											<span></span>
										</label>
									</span>
                        </div>
                    </div>
                    <div class="form-group form-group-last form-group-xs row">
                        <label class="col-8 col-form-label">Notifiy on new customer registration:</label>
                        <div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--success">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_6">
											<span></span>
										</label>
									</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- end:: Quick Panel -->

<!-- begin:: Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
    <i class="la la-arrow-up"></i>
</div>

<!-- end:: Scrolltop -->


<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "metal": "#c4c5d6",
                "light": "#ffffff",
                "accent": "#00c5dc",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995",
                "focus": "#9816f4"
            },
            "base": {
                "label": [
                    "#c5cbe3",
                    "#a1a8c3",
                    "#3d4465",
                    "#3e4466"
                ],
                "shape": [
                    "#f0f3ff",
                    "#d9dffa",
                    "#afb4d4",
                    "#646c9a"
                ]
            }
        }
    };
</script>

<!-- end::Global Config -->

<!--begin:: Global Mandatory Vendors -->
<script src="{{ asset("assets/vendors/general/jquery/dist/jquery.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/popper.js/dist/umd/popper.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/bootstrap/dist/js/bootstrap.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/js-cookie/src/js.cookie.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/moment/min/moment.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js") }}"
        type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/sticky-js/dist/sticky.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/wnumb/wNumb.js") }}" type="text/javascript"></script>

<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<script src="{{ asset("assets/vendors/general/jquery-form/dist/jquery.form.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/block-ui/jquery.blockUI.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js") }}"
        type="text/javascript"></script>
<script src="{{ asset("assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js") }}"
        type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js") }}"
        type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js") }}"
        type="text/javascript"></script>
<script src="{{ asset("assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js") }}"
        type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js") }}"
        type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js") }}"
        type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js") }}"
        type="text/javascript"></script>
<script src="{{ asset("assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js") }}"
        type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js") }}"
        type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/typeahead.js/dist/typeahead.bundle.js") }}"
        type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/handlebars/dist/handlebars.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js") }}"
        type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js") }}"
        type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js") }}"
        type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/nouislider/distribute/nouislider.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/owl.carousel/dist/owl.carousel.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/autosize/dist/autosize.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/clipboard/dist/clipboard.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/dropzone/dist/dropzone.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/summernote/dist/summernote.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/markdown/lib/markdown.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js") }}"
        type="text/javascript"></script>
<script src="{{ asset("assets/vendors/custom/js/vendors/bootstrap-markdown.init.js") }}"
        type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/jquery-validation/dist/jquery.validate.js") }}"
        type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/jquery-validation/dist/additional-methods.js") }}"
        type="text/javascript"></script>
<script src="{{ asset("assets/vendors/custom/js/vendors/jquery-validation.init.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/toastr/build/toastr.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/raphael/raphael.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/morris.js/morris.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/chart.js/dist/Chart.bundle.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js") }}"
        type="text/javascript"></script>
<script src="{{ asset("assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js") }}"
        type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/waypoints/lib/jquery.waypoints.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/counterup/jquery.counterup.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/es6-promise-polyfill/promise.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/sweetalert2/dist/sweetalert2.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/vendors/custom/js/vendors/sweetalert2.init.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/jquery.repeater/src/lib.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/jquery.repeater/src/jquery.input.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/jquery.repeater/src/repeater.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/vendors/general/dompurify/dist/purify.js") }}" type="text/javascript"></script>

<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="{{ asset("assets/js/demo1/scripts.bundle.js") }}" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<!--begin::Page Vendors(used by this page) -->
<script src="{{ asset("assets/vendors/custom/fullcalendar/fullcalendar.bundle.js") }}" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="{{ asset("assets/js/demo1/pages/dashboard.js") }}" type="text/javascript"></script>

<!-- SELECT2 -->
<!-- TODO : REPLACE THIS CDN VERSION WITH A LOCAL COPY -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
<!--.SELECT2 -->

@yield('custom-scripts', '')

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
