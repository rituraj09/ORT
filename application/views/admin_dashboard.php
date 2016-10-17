<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">

    <title>OneRoofTravel</title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="../assets/admin/css/font-awesome.min.css">
    <!-- Sandstone Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/admin/css/bootstrap.min.css">
    <!-- Bootstrap Datatables -->
    <link rel="stylesheet" href="../assets/admin/css/dataTables.bootstrap.min.css">
    <!-- Bootstrap social button library -->
    <link rel="stylesheet" href="../assets/admin/css/bootstrap-social.css">
    <!-- Bootstrap select -->
    <link rel="stylesheet" href="../assets/admin/css/bootstrap-select.css">
    <!-- Bootstrap file input -->
    <link rel="stylesheet" href="../assets/admin/css/fileinput.min.css">
    <!-- Awesome Bootstrap checkbox -->
    <link rel="stylesheet" href="../assets/admin/css/awesome-bootstrap-checkbox.css">
    <!-- Admin Stye -->
    <link rel="stylesheet" href="../assets/admin/css/style.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div class="brand clearfix">
    <a href="index.html" class="logo"><img src="../assets/images/logo.png" class="img-responsive" alt=""></a>
    <span class="menu-btn"><i class="fa fa-bars"></i></span>
    <ul class="ts-profile-nav">
<!--        <li><a href="#">Help</a></li>-->
<!--        <li><a href="#">Settings</a></li>-->
        <li class="ts-account">
            <a href="#"><img src="../assets/admin/img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
            <ul>
<!--                <li><a href="#">My Account</a></li>-->
<!--                <li><a href="#">Edit Account</a></li>-->
                <li><a href="#">Logout</a></li>
            </ul>
        </li>
    </ul>
</div>

<div class="ts-main-content">
    <nav class="ts-sidebar">
        <ul class="ts-sidebar-menu">
            <li class="ts-label">Search</li>
            <li>
                <input type="text" class="ts-sidebar-search" placeholder="Search here...">
            </li>
            <li class="ts-label">Main</li>
            <li class="open"><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#"><i class="fa fa-desktop"></i>New Users</a></li>
            <li><a href="#"><i class="fa fa-files-o"></i>Group Flight Booking</a></li>
            <li><a href="#"><i class="fa fa-envelope"></i>Email Subscribers</a></li>

            <!-- Account from above -->
            <ul class="ts-profile-nav">
<!--                <li><a href="#">Help</a></li>-->
<!--                <li><a href="#">Settings</a></li>-->
                <li class="ts-account">
                    <a href="#"><img src="../assets/admin/img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
                    <ul>
<!--                        <li><a href="#">My Account</a></li>-->
<!--                        <li><a href="#">Edit Account</a></li>-->
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>

        </ul>
    </nav>
    <div class="content-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">

                    <h2 class="page-title">Dashboard</h2>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="panel panel-default">
                                        <div class="panel-body bk-primary text-light">
                                            <div class="stat-panel text-center">
                                                <div class="stat-panel-number h1 ">24</div>
                                                <div class="stat-panel-title text-uppercase">New Users</div>
                                            </div>
                                        </div>
                                        <a href="#" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="panel panel-default">
                                        <div class="panel-body bk-success text-light">
                                            <div class="stat-panel text-center">
                                                <div class="stat-panel-number h1 ">8</div>
                                                <div class="stat-panel-title text-uppercase">Support Tickets</div>
                                            </div>
                                        </div>
                                        <a href="#" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="panel panel-default">
                                        <div class="panel-body bk-info text-light">
                                            <div class="stat-panel text-center">
                                                <div class="stat-panel-number h1 ">58</div>
                                                <div class="stat-panel-title text-uppercase">New Orders</div>
                                            </div>
                                        </div>
                                        <a href="#" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="panel panel-default">
                                        <div class="panel-body bk-warning text-light">
                                            <div class="stat-panel text-center">
                                                <div class="stat-panel-number h1 ">18</div>
                                                <div class="stat-panel-title text-uppercase">New Comments</div>
                                            </div>
                                        </div>
                                        <a href="#" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
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

<!-- Loading Scripts -->
<script src="../assets/admin/js/jquery.min.js"></script>
<script src="../assets/admin/js/bootstrap-select.min.js"></script>
<script src="../assets/admin/js/bootstrap.min.js"></script>
<script src="../assets/admin/js/jquery.dataTables.min.js"></script>
<script src="../assets/admin/js/dataTables.bootstrap.min.js"></script>
<script src="../assets/admin/js/Chart.min.js"></script>
<script src="../assets/admin/js/fileinput.js"></script>
<script src="../assets/admin/js/chartData.js"></script>
<script src="../assets/admin/js/main.js"></script>
</body>

</html>