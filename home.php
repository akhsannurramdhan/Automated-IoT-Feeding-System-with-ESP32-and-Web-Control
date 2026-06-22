<!doctype html>
<html lang="en">


<!-- Mirrored from www.wrraptheme.com/templates/lucid/html/dark/index9.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jan 2025 13:06:31 GMT -->
<head>
<title>:: Lucid :: IoT</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4.1.1 Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/vendor/morrisjs/morris.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">

<style>
       .btn {
            width: 80%; 
            padding: 15px;
            font-size: 18px;
            font-weight: bold;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            text-align: center;
            margin: 0 auto; 
        }
        .btn.add-schedule {
            background-color: #28a745;
        }
        .btn.add-schedule:hover {
            background-color: #218838;
            transform: scale(1.02);
        }
        .btn.feeds-farms {
            background-color: #17a2b8;
        }
        .btn.feeds-farms:hover {
            background-color: #138496;
            transform: scale(1.02);
        }
    </style>
</head>
<body class="theme-dark">

<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="https://www.wrraptheme.com/templates/lucid/html/assets/images/logo-icon.svg" width="48" height="48" alt="Lucid"></div>
        <p>Please wait...</p>        
    </div>
</div>

<div id="wrapper">

    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-btn">
                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
            </div>

            <div class="navbar-brand">
                <a href="index.html">Dashboard Pakan Ternak</a> 
            </div>
            
        
        </div>
    </nav>

    <div id="left-sidebar" class="sidebar">
        <div class="sidebar-scroll">
            
            <!-- Nav tabs -->
            
                
            <!-- Tab panes -->
            <div class="tab-content p-l-0 p-r-0">
                <div class="tab-pane active" id="menu">
                    <nav id="left-sidebar-nav" class="sidebar-nav">
                        <ul id="main-menu" class="metismenu">                            
                            <li class="active">
                                <a href="#Dashboard" class="has-arrow"><i class="icon-home"></i> <span>Dashboard</span></a>
                                <ul>
                                    <li><a href="home.php">Monitoring</a></li>           
                               </ul>
                            </li> 
                        </ul>
                    </nav>
                </div>
                
                
                   
            </div>          
        </div>
    </div>

    <div id="main-content">
        <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Feed Machine Capacity</h2>
                           
                        </div>
                        
                        <div class="body">
                            <div id="donut_chart" class="graph"></div>
                        </div>
                    
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Feed Machine Status</h2>
                        </div>
                        <div class="body">
                            <ul class="list-unstyled basic-list">
                                <li >
                                    Servo
                                    <span class="badge d-none">Off</span>
                                    <span class="badge">OFF</span>
                                </li>
                                <li class="text-warning">
                                    Load Cell
                                    <span class="badge">ON</span>
                                    <span class="badge d-none">On</span>
                                </li>
                                <li class="text-warning">
                                    Ultrasonic Censor
                                    <span class="badge">ON</span>
                                    <span class="badge d-none">On</span>
                                </li>
                            </ul>
                        </div>
                        
                        
                    </div>
                    <div class="card appliances-grp ng-star-inserted">
                        <div class="body clearfix">
                            <div class="icon"><img alt="" src="../assets/images/air-conditioner-grey.png"></div>
                            <div class="content">
                                <h6>Load Cell <span class="text-success">On</span></h6>
                                <p class="ng-star-inserted">Weight <span class="text-warning">0 Kg</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
    <div class="card">
        <div class="header">
            Add Schedule
        </div>
        <div class="body ">
            <!-- Add Schedule Button -->
            <button class="btn add-schedule ">
                <i class="fa fa-calendar-plus-o"></i>
                Add Schedule
            </button>
            <p ></p>
            <!-- Feeds Farms Button -->
            <button class="btn feeds-farms">
                <i class="fa fa-paw"></i>
                Feeds Farms
            </button>
        </div>
    </div>
</div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>New Admission List</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">                          
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Time</th>
                                        <th>Weight</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="list-name">1</span></td>
                                        <td>19:00</td>
                                        <td>1000</td>
                                        <td><span class="badge badge-primary">EDIT</span><span class="badge badge-warning">DELETE</span></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
           
            
        </div>
    </div>
    
</div>

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/morrisscripts.bundle.js"></script>
<script src="assets/vendor/jquery-sparkline/js/jquery.sparkline.min.js"></script>
<script src="assets/vendor/raphael/raphael-min.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/iot.js"></script>
</body>

<!-- Mirrored from www.wrraptheme.com/templates/lucid/html/dark/index9.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jan 2025 13:06:33 GMT -->
</html>
