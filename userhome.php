<?php
include("connection.php");
ob_start();
session_start();
if(isset($_SESSION['usr'])){
    $usr=$_SESSION['usr'];
    $sel_usr=mysqli_query($con,"select * from cit_info where uid='$usr'");
    $r_usr=mysqli_fetch_row($sel_usr);
    $w_num=$r_usr[6];
    $h_num=$r_usr[7];
    $v_pin=$r_usr[9];
}
else{
    header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>User Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="width: 250px;" href="userhome.php"> <img alt="Charisma Logo" src="img/logo20.png" class="hidden-xs"/>
                <span>secure certification</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> <?php echo $r_usr[5] ?></span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="user_profile.php">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-tint"></i><span
                        class="hidden-sm hidden-xs"> Change Theme / Skin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="themes">
                    <li><a data-value="classic" href="#"><i class="whitespace"></i> Classic</a></li>
                    <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
                    <li><a data-value="cyborg" href="#"><i class="whitespace"></i> Cyborg</a></li>
                    <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                    <li><a data-value="darkly" href="#"><i class="whitespace"></i> Darkly</a></li>
                    <li><a data-value="lumen" href="#"><i class="whitespace"></i> Lumen</a></li>
                    <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                    <li><a data-value="spacelab" href="#"><i class="whitespace"></i> Spacelab</a></li>
                    <li><a data-value="united" href="#"><i class="whitespace"></i> United</a></li>
                </ul>
            </div>
            <!-- theme selector ends -->

            

        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="userhome.php"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        </li>
                        <li><a class="ajax-link" href="user_profile.php"><i class="glyphicon glyphicon-bookmark "></i><span> My Profile</span></a>
                        </li>
                        <li><a class="ajax-link" href="u_srchvillage.php"><i class="glyphicon glyphicon-search "></i><span> Search Village</span></a>
                        </li>
                        <li><a class="ajax-link" href="u_reqcert.php"><i class="glyphicon glyphicon-file "></i><span> Request Certificate</span></a>
                        </li>
                        <li><a class="ajax-link" href="u_certstatus.php"><i class="glyphicon glyphicon-zoom-in"></i><span> Certificate Status</span></a>
                        </li>
                        <li><a class="ajax-link" href="u_feedback.php"><i class="glyphicon glyphicon-warning-sign"></i><span> Post Feedback</span></a>
                        </li>
                        <li><a class="ajax-link" href="u_cmplnt.php"><i class="glyphicon glyphicon-arrow-down"></i><span> Post Complaints</span></a>
                        </li>
                        <li><a class="ajax-link" href="admin_alerts.php"><i class="glyphicon glyphicon-bullhorn"></i><span> Admin Alerts</span></a>
                        </li>
                        <li><a class="ajax-link" href="se_app.php"><i class="glyphicon glyphicon-bullhorn"></i><span> Application to Secretariat </span></a>
                        </li>
                        <li><a class="ajax-link" href="pay_tax.php"><i class="glyphicon glyphicon-credit-card"></i><span> Land Tax Payment </span></a>
                        </li>
                        <li><a class="ajax-link" href="u_account.php"><i class="glyphicon glyphicon-cog"></i><span> Account Settings</span></a>
                        </li>
                        
                    </ul>
                    
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="userhome.php">Home</a>
        </li>
        <li>
            <a href="userhome.php">Dashboard</a>
        </li>
    </ul>
</div>
<div class=" row">
    <div class="col-md-3 col-sm-3 col-xs-6">
        <?php
        $sel_oth=mysqli_query($con,"select * from cit_info where w_num='$w_num' and h_num='$h_num' and v_pin='$v_pin'");
        $count_num=  mysqli_num_rows($sel_oth);
        ?>
        <a data-toggle="tooltip" title="<?php echo $count_num-1 ?> Family Members" class="well top-block" href="user_profile.php">
            <i class="glyphicon glyphicon-bookmark blue"></i>

            <div>My Profile</div>
            <div><?php echo $count_num-1 ?> Family Members</div>
            <span class="notification"><?php echo $count_num-1 ?></span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <?php
        $count_vil=mysqli_query($con,"select * from vil_info");
        $vil=mysqli_num_rows($count_vil);
        ?>
        <a data-toggle="tooltip" title="<?php echo $vil ?> Villages" class="well top-block" href="u_srchvillage.php">
            <i class="glyphicon glyphicon-search green"></i>

            <div>Search Village</div>
            <div><?php echo $vil ?> Villages</div>
            <span class="notification green"><?php echo $vil ?></span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="$34 new sales." class="well top-block" href="u_reqcert.php">
            <i class="glyphicon glyphicon-file yellow"></i>

            <div>Request Certificate</div>
            <div>0</div>
            <span class="notification yellow">0</span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="12 new messages." class="well top-block" href="u_certstatus.php">
            <i class="glyphicon glyphicon-zoom-in red"></i>

            <div>Certificate Status</div>
            <div>0</div>
            <span class="notification red">0</span>
        </a>
    </div>
    
    <div class="col-md-3 col-sm-3 col-xs-6">
        <?php
        $count_fb=mysqli_query($con,"select * from fb_info where usrid='$usr'");
        $fbcount=mysqli_num_rows($count_fb);
        ?>
        <a data-toggle="tooltip" title="<?php echo $fbcount ?> Feedbacks" class="well top-block" href="u_feedback.php">
            <i class="glyphicon glyphicon-warning-sign blue"></i>

            <div>Post Feedback</div>
            <div><?php echo $fbcount ?> Feedback(s)</div>
            <span class="notification red"><?php echo $fbcount ?></span>
        </a>
    </div>
    
    <div class="col-md-3 col-sm-3 col-xs-6">
        <?php
        $count_cmp=mysqli_query($con,"select * from cmp_info where cmp_frmid='$usr'");
        $cmpcount=mysqli_num_rows($count_cmp);
        ?>
        <a data-toggle="tooltip" title="<?php echo $cmpcount ?> Complaint(s)" class="well top-block" href="u_cmplnt.php">
            <i class="glyphicon glyphicon-arrow-down green"></i>

            <div>Post Complaints</div>
            <div><?php echo $cmpcount ?> Complaint(s)</div>
            <span class="notification yellow"><?php echo $cmpcount ?></span>
        </a>
    </div>
    
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="12 new messages." class="well top-block" href="admin_alerts.php">
            <i class="glyphicon glyphicon-bullhorn yellow"></i>

            <div>Admin Alerts</div>
            <div>25</div>
            <span class="notification green">12</span>
        </a>
    </div>
    
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="My Account Settings" class="well top-block" href="u_account.php">
            <i class="glyphicon glyphicon-cog red"></i>

            <div>Account Settings</div>
            <div>0</div>
            <span class="notification red">0</span>
        </a>
    </div>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> User Home ::</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content row">
                <div class="col-lg-12 col-md-12"><center>
                    <img src="logo/userlogo.jpg" class="img img-responsive" />
                    </center>
                    
                </div>
                <!-- Ads, you can remove these -->
                

                
                <!-- Ads end -->

            </div>
        </div>
    </div>
</div>

<div class="row">
    
    <!--/span-->

    
    <!--/span-->

    
    <!--/span-->
</div><!--/row-->


    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <!-- Ad, you can remove it -->
    <div class="row">
       
        

    </div>
    <!-- Ad ends -->

    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="#" target="_blank">Trinity Technologies</a> 2015 - 2016</p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="#">Trinity</a></p>
    </footer>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>


</body>
</html>
