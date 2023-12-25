<!doctype html>
<html lang="en">
<?php
require 'constants/settings.php';


if (isset($_GET['page'])) {
    $page = $_GET['page'];
    if ($page == "" || $page == "1") {
        $page1 = 0;
        $page = 1;
    } else {
        $page1 = ($page * 16) - 16;
    }
} else {
    $page1 = 0;
    $page = 1;
}
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jobs - Employers</title>
    <meta name="description" content="Online Job Management / Job Portal" />
    <meta name="keywords" content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
    <meta name="author" content="BwireSoft">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="Bwire Jobs" />
    <meta property="og:description" content="Online Job Management / Job Portal" />

    <link rel="shortcut icon" href="images/ico/favicon.png">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="images/ico/favicon.png">

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/component.css" rel="stylesheet">

    <link rel="stylesheet" href="icons/linearicons/style.css">
    <link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="icons/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="icons/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="icons/rivolicons/style.css">
    <link rel="stylesheet" href="icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
    <link rel="stylesheet" href="icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
    <link rel="stylesheet" href="icons/flaticon-thick-icons/flaticon-thick.css">
    <link rel="stylesheet" href="icons/flaticon-ventures/flaticon-ventures.css">

    <link href="css/style.css" rel="stylesheet">


</head>
<style>
    .autofit2 {
        height: 100px;
        width: 100px;
        object-fit: cover;
    }
</style>

<body class="not-transparent-header">

    <div class="container-wrapper">

        <header id="header">

            <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

                <div class="container">

                    <div class="logo-wrapper">
                        <div class="logo">
                            <a href="./"><img src="images/logo.png" alt="Logo" /></a>
                        </div>
                    </div>

                    <div id="navbar" class="navbar-nav-wrapper navbar-arrow">

                        <ul class="nav navbar-nav" id="responsive-menu">

                            <li>

                                <a href="./">Home</a>

                            </li>

                            <li>
                                <a href="job-list.php">Job List</a>

                            </li>

                            <li>
                                <a href="employers.php">Employers</a>
                            </li>

                            <li>
                                <a href="employees.php">Employees</a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-mini-wrapper">
                        <ul class="nav-mini sign-in">
                            <li class="dropdown">
                                <a href="index.php" class="dropdown-toggle" data-toggle="dropdown">logout</a>



                            </li>
                        </ul>
                    </div>
                </div>
                <div id="slicknav-mobile"></div>
            </nav>
        </header>

        <div class="main-wrapper">

            <div class="breadcrumb-wrapper">

                <div class="container">

                    <ol class="breadcrumb-list booking-step">
                        <li><a href="./">Home</a></li>
                        <li><span>Admin</span></li>
                    </ol>

                </div>

            </div>
            <div class="admin-container-wrapper">

                <div class="container">

                    <div class="GridLex-gap-15-wrappper">

                        <div class="GridLex-grid-noGutter-equalHeight">

                            <div class="GridLex-col-3_sm-4_xs-12">

                                <div class="admin-sidebar">

                                    <div class="admin-user-action text-center">
                                        <ul class="admin-user-menu clearfix">
                                            <li class="active">
                                                <a href="./"><i class="fa fa-user"></i> Profile</a>
                                            </li>
                                            <li class="">
                                                <a href="change-pass.php"><i class="fa fa-key"></i> Change Password</a>
                                            </li>
                                            <li>
                                                <a> </a><i class="fa fa-trophy"></i> user's database </a>
                                            </li>

                                            <li>
                                                <a><i class="fa fa-map-marker"></i> add/edit citie's</a>
                                            </li>


                                            <li>
                                                <a><i class="fa fa-list-alt"></i> modify category</a>
                                            </li>

                                            <li>
                                                <a href="../logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer-wrapper">
                    <div class="main-footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-md-9">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <div class="footer-about-us">
                                                <h5 class="footer-title">About Job~Notify</h5>
                                                <p>Job~Notify is an open-source online job management portal. Aim to provide job services, advertise, and search for Resumes.</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-5 mt-30-xs">
                                            <h5 class="footer-title">Quick Links</h5>
                                            <ul class="footer-menu clearfix">
                                                <li><a href="./">Home</a></li>
                                                <li><a href="job-list.php">Job List</a></li>
                                                <li><a href="employers.php">Employers</a></li>
                                                <li><a href="employees.php">Employees</a></li>
                                                <li><a href="contact.php">Contact Us</a></li>
                                                <li><a href="#">Go to top</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3 mt-30-sm">
                                    <h5 class="footer-title">Job~Notify</h5>
                                    <p>Address : Mathura, P.O. mathura NH-2 Uttar Pradesh India</p>
                                    <p>Email : <a href="mailto:nightingale.nath2@gmail.com">jobnotify@gmail.com</a></p>
                                    <p>Phone : <a href="tel:+233546607474">+91-4858792981</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4 col-md-4">
                                    <p class="copy-right">&#169; Copyright <?php echo date('Y'); ?> Job~Notify</p>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <ul class="bottom-footer-menu">
                                        <li><a>Developed by <i class="fa fa-heart-o" style="font-size:15px;color:green"></i></a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <ul class="bottom-footer-menu for-social">
                                        <li><a href="<?php echo "$tw"; ?>"><i class="ri ri-twitter" data-toggle="tooltip" data-placement="top" title="twitter"></i></a></li>
                                        <li><a href="<?php echo "$fb"; ?>"><i class="ri ri-facebook" data-toggle="tooltip" data-placement="top" title="facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <div id="back-to-top">

            <a href="#"><i class="ion-ios-arrow-up"></i></a>
        </div>

        <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-modalmanager.js"></script>
        <script type="text/javascript" src="js/bootstrap-modal.js"></script>
        <script type="text/javascript" src="js/smoothscroll.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-tokenfield.js"></script>
        <script type="text/javascript" src="js/typeahead.bundle.min.js"></script>
        <script type="text/javascript" src="js/bootstrap3-wysihtml5.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="js/jquery-filestyle.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
        <script type="text/javascript" src="js/handlebars.min.js"></script>
        <script type="text/javascript" src="js/jquery.countimator.js"></script>
        <script type="text/javascript" src="js/jquery.countimator.wheel.js"></script>
        <script type="text/javascript" src="js/slick.min.js"></script>
        <script type="text/javascript" src="js/easy-ticker.js"></script>
        <script type="text/javascript" src="js/jquery.introLoader.min.js"></script>
        <script type="text/javascript" src="js/jquery.responsivegrid.js"></script>
        <script type="text/javascript" src="js/customs.js"></script>


</body>


</html>