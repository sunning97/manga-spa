<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/images/favicon.png') }}">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('admin/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/plugins/bootstrap-extension/css/bootstrap-extension.css') }}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ asset('admin/plugins/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
    <!-- Animation CSS -->
    <link href="{{ asset('admin/css/animate.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <!-- color CSS you can use different color css from css/colors folder -->
    <!-- We have chosen the skin-blue (blue.css) for this starter
          page. However, you can choose any other skin from folder css / colors .
-->
    <link href="{{ asset('admin/css/colors/blue.css') }}" id="theme" rel="stylesheet" asset="{{ asset('admin') }}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
    <!-- Top Navigation -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header"><a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)"
                                      data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
            <!-- Logo -->
            <div class="top-left-part">
                <a class="logo" href="index.html">
                    <!-- Logo icon image, you can use font-icon also --><b><img
                            src="{{ asset('admin/images/eliteadmin-logo.png') }}" alt="home"/></b>
                    <!-- Logo text image you can use text also --><span class="hidden-xs"><img
                            src="{{ asset('admin/images/eliteadmin-text.png') }}" alt="home"/></span> </a>
            </div>
            <!-- /Logo -->
            <!-- This is for mobile view search and menu icon -->
            <ul class="nav navbar-top-links navbar-left hidden-xs">
                <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i
                            class="icon-arrow-left-circle ti-menu"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
                        <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                    </a>
                    <ul class="dropdown-menu mailbox animated bounceInDown">
                        <li>
                            <div class="drop-title">You have 4 new messages</div>
                        </li>
                        <li>
                            <div class="message-center">
                                <a href="#">
                                    <div class="user-img"><img src="{{ asset('admin/images/users/pawandeep.jpg') }}"
                                                               alt="user" class="img-circle"> <span
                                            class="profile-status online pull-right"></span></div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span
                                            class="time">9:30 AM</span></div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <form role="search" class="app-search hidden-xs">
                        <input type="text" placeholder="Search..." class="form-control"> <a href=""><i
                                class="fa fa-search"></i></a></form>
                </li>
            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right">
                <li class="right-side-toggle"><a class="waves-effect waves-light" href="javascript:void(0)"><i
                            class="ti-settings"></i></a></li>
            </ul>
        </div>

    </nav>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse slimscrollsidebar">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                    <!-- input-group -->
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span></div>
                    <!-- /input-group -->
                </li>
                <li class="user-pro">
                    <a href="#" class="waves-effect"><img src="{{ asset('admin/images/users/varun.jpg') }}" alt="user-img"
                                                          class="img-circle"> <span
                            class="hide-menu"> Steve Gection<span class="fa arrow"></span></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-wallet"></i> My Balance</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul>
                </li>
                <li class="nav-small-cap m-t-10">--- Main Menu</li>
                <li><a href="index.html" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i>
                        <span class="hide-menu"> Dashboard <span class="fa arrow"></span> <span
                                class="label label-rouded label-custom pull-right">4</span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="index.html">Demographical</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- Left navbar-header end -->
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Starter Page </h4></div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li class="active">Starter Page</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title">Blank Starter page</h3></div>
                </div>
            </div>
            <!-- .right-sidebar -->
            <div class="right-sidebar">
                <div class="slimscrollright">
                    <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span>
                    </div>
                    <div class="r-panel-body">
                        <ul>
                            <li><b>Layout Options</b></li>
                            <li>
                                <div class="checkbox checkbox-info">
                                    <input id="checkbox1" type="checkbox" class="fxhdr">
                                    <label for="checkbox1"> Fix Header </label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox checkbox-warning">
                                    <input id="checkbox2" type="checkbox" checked="" class="fxsdr">
                                    <label for="checkbox2"> Fix Sidebar </label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox4" type="checkbox" class="open-close">
                                    <label for="checkbox4"> Toggle Sidebar </label>
                                </div>
                            </li>
                        </ul>
                        <ul id="themecolors" class="m-t-20">
                            <li><b>With Light sidebar</b></li>
                            <li><a href="javascript:void(0)" theme="default" class="default-theme">1</a></li>
                            <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
                            <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
                            <li><a href="javascript:void(0)" theme="blue" class="blue-theme working">4</a></li>
                            <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
                            <li><a href="javascript:void(0)" theme="megna" class="megna-theme">6</a></li>
                            <li><b>With Dark sidebar</b></li>
                            <br/>
                            <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
                            <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
                            <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>
                            <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
                            <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
                            <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
                        </ul>
                        <ul class="m-t-20 chatonline">
                            <li><b>Chat option</b></li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.right-sidebar -->
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2017 &copy; Elite Admin brought to you by themedesigner.in</footer>
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('admin/bootstrap/dist/js/tether.min.js') }}"></script>
<script src="{{ asset('admin/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/plugins/bootstrap-extension/js/bootstrap-extension.min.js') }}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{ asset('admin/plugins/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
<!--slimscroll JavaScript -->
<script src="{{ asset('admin/js/jquery.slimscroll.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('admin/js/waves.js') }}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{ asset('admin/js/custom.min.js') }}"></script>
<!--Style Switcher -->
<script src="{{asset('admin/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
</body>

</html>
