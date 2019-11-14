<?php
include("connection.php");
session_start();
ob_start();
if(isset($_SESSION['admin'])){
    
}
else{
    header("location:index.php");
}
if(isset($_POST['add_cat'])){
    $ct=$_POST['ct'];
    $ins_cat=mysqli_query($con,"insert into cat_info values('','$ct','')");
    if($ins_cat>0){
        header("location:p_msg.php?t=1");
    }
}
if(isset($_POST['add_cat1'])){
    $ct1=$_POST['ct1'];
    $ins_cat1=mysqli_query($con,"insert into cat_info1 values('','$ct1','')");
    if($ins_cat1>0){
        header("location:p_msg.php?t=2");
    }
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
    <title>Admin Home</title>
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
    <form method="post">
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="width: 250px;" href="adminhome.php"> <img alt="Charisma Logo" src="img/logo20.png" class="hidden-xs"/>
                <span>secure certification</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
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
                        <li><a class="ajax-link" href="adminhome.php"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        </li>
                        <li><a class="ajax-link" href="loc_manage.php"><i class="glyphicon glyphicon-globe "></i><span> Manage Location</span></a>
                        </li>
                        <li><a class="ajax-link" href="tal_manage.php"><i class="glyphicon glyphicon-star "></i><span> Manage Taluk</span></a>
                        </li>
                        <li><a class="ajax-link" href="vil_manage.php"><i class="glyphicon glyphicon-star-empty "></i><span> Manage Village</span></a>
                        </li>
                        <li><a class="ajax-link" href="admin_inbox.php"><i class="glyphicon glyphicon-envelope"></i><span> Inbox</span></a>
                        </li>
                        <li><a class="ajax-link" href="p_msg.php"><i class="glyphicon glyphicon-warning-sign"></i><span> Msg to Public</span></a>
                        </li>
                        <li><a class="ajax-link" href="admin_cmplnt.php"><i class="glyphicon glyphicon-arrow-down"></i><span> Complaints</span></a>
                        </li>
                        <li><a class="ajax-link" href="admin_fdbk.php"><i class="glyphicon glyphicon-folder-open"></i><span> FeedBacks</span></a>
                        </li>
                        <li><a class="ajax-link" href="admin_msg.php"><i class="glyphicon glyphicon-file"></i><span> Msg to Village/Taluk</span></a>
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
        <a href="p_msg.php?t=1"><div class="btn btn-primary">Add Quick Contacts</div></a>
        <a href="p_msg.php?t=2"><div class="btn btn-primary">Add Informations</div></a>
    </ul>
</div>


<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Message to Public</h2>

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
                <div class="col-lg-12 col-md-12">
                    <?php
                    if(isset($_GET['t']))
                    {
                    if($_GET['t']==1)
                    {                    
                    ?>
                    <div class="col-lg-6">
                        <h4>Create Category for Quick Contact</h4>
                        <table class="table table-bordered table-condensed table-hover table-responsive">
                            <tr>
                                <td>Create Category</td>
                                <td><input type="text" name="ct" class="form-control" /></td>
                            </tr>
                            <tr>
                                <td colspan="2"><center><input type="submit" name="add_cat" value="Create Category" class="btn btn-success" /></center></td>
                            </tr>
                        </table>
                    </div> 
                    <div class="col-lg-6">
                        <h4>Available Categories</h4>
                        <?php
                        $sel_cat=mysqli_query($con,"select * from cat_info");
                        if(mysqli_num_rows($sel_cat)>0){
                            $i=1;
                            ?>
                        <table class="table table-bordered table-condensed table-hover table-responsive">
                            <tr>
                                <td>#</td>
                                <td>Category</td>
                                <td>More</td>
                            </tr>
                        <?php
                            while($r_cat=mysqli_fetch_row($sel_cat)){
                              ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $r_cat[1] ?></td>
                                <td><a href="p_msg.php?x=1&catid=<?php echo $r_cat[0] ?>"><i class="glyphicon glyphicon-plus-sign yellow"></i></a></td>
                            </tr>
                        <?php
                        $i++;
                        }
                        ?>
                        </table>
                            <?php
                        }
                        else{
                            echo"No Category Found";
                        }
                        ?>
                    </div>
                    
                    <?php
                    }
                    if($_GET['t']==2){
                        ?>
                    <div class="col-lg-6">
                        <h4>Create Category for Information</h4>
                        <table class="table table-bordered table-condensed table-hover table-responsive">
                            <tr>
                                <td>Create Category</td>
                                <td><input type="text" name="ct1" class="form-control" /></td>
                            </tr>
                            <tr>
                                <td colspan="2"><center><input type="submit" name="add_cat1" value="Create Category" class="btn btn-success" /></center></td>
                            </tr>
                        </table>
                    </div> 
                    <div class="col-lg-6">
                        <h4>Available Categories</h4>
                        <?php
                        $sel_cat=mysqli_query($con,"select * from cat_info1");
                        if(mysqli_num_rows($sel_cat)>0){
                            $i=1;
                            ?>
                        <table class="table table-bordered table-condensed table-hover table-responsive">
                            <tr>
                                <td>#</td>
                                <td>Category</td>
                                <td>More</td>
                            </tr>
                        <?php
                            while($r_cat=mysqli_fetch_row($sel_cat)){
                              ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $r_cat[1] ?></td>
                                <td><a href="p_msg.php?x=2&catid=<?php echo $r_cat[0] ?>"><i class="glyphicon glyphicon-plus-sign yellow"></i></a></td>
                            </tr>
                        <?php
                        $i++;
                        }
                        ?>
                        </table>
                            <?php
                        }
                        else{
                            echo"No Category Found";
                        }
                        ?>
                    </div>
                    <?php
                    }
                    }
                    ?>
                    
                    <?php
                    if(isset($_GET['x'])){
                        if($_GET['x']==1)
                        {
                        $sel_cat=mysqli_query($con,"select * from cat_info where id=".$_GET['catid']);
                        $r_cat=mysqli_fetch_row($sel_cat);
                        if(isset($_POST['add_info'])){
                            $on=$_POST['on'];
                            $cn=$_POST['cn'];
                            $ins_info=mysqli_query($con,"insert into cat_info_contact values('','".$_GET['catid']."','$on','$cn','1')");
                            if($ins_info>0){
                                header("location:p_msg.php?x=1&catid=".$_GET['catid']);
                            }
                        }
                        ?>
                    <div class="col-lg-6">
                        <table class="table table-bordered table-condensed table-hover table-responsive">
                            <tr>
                                <td colspan="2"><b><center>Add Quick Contact in <?php echo $r_cat[1] ?> Category</center></b></td>
                            </tr>
                            <tr>
                                <td>Organization Name</td>
                                <td><input type="text" name="on" class="form-control" /></td>
                            </tr>
                            <tr>
                                <td>Contact Number</td>
                                <td><input type="text" name="cn" class="form-control" /></td>
                            </tr>
                            <tr>
                                <td colspan="2"><center><input type="submit" name="add_info" value="Add Now" class="btn btn-success" /></center></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-6">
                        <?php
                        $sel_qcon=mysqli_query($con,"select * from cat_info_contact where cat_id=".$_GET['catid']);
                        if(mysqli_num_rows($sel_qcon)>0){
                            ?>
                        <table class="table table-bordered table-condensed table-hover table-responsive">
                            <tr>
                                <th>Organization Name</th>
                                <th>Contact</th>
                            </tr>
                        <?php
                            while($r_con=mysqli_fetch_row($sel_qcon)){
                                ?>
                            <tr>
                                <td><?php echo $r_con[2] ?></td>
                                <td><?php echo $r_con[3] ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </table>
                            <?php
                        }
                        else{
                            echo"No data Available";
                        }
                        ?>
                    </div>
                    <?php
                    }
                    
                    if($_GET['x']==2){
                       
                    $sel_cat=mysqli_query($con,"select * from cat_info1 where id=".$_GET['catid']);
                        $r_cat=mysqli_fetch_row($sel_cat);
                        if(isset($_POST['add_info1'])){
                            $hd=$_POST['hd'];
                            $inf=$_POST['inf'];
                            $ins_info=mysqli_query($con,"insert into cat_info_contact1 values('','".$_GET['catid']."','$hd','$inf','1')");
                            if($ins_info>0){
                                header("location:p_msg.php?x=2&catid=".$_GET['catid']);
                            }
                        }
                        ?>
                    <div class="col-lg-6">
                        <table class="table table-bordered table-condensed table-hover table-responsive">
                            <tr>
                                <td colspan="2"><b><center>Add Information in <?php echo $r_cat[1] ?> Category</center></b></td>
                            </tr>
                            <tr>
                                <td>Title</td>
                                <td><input type="text" name="hd" class="form-control" /></td>
                            </tr>
                            <tr>
                                <td>Information</td>
                                <td><textarea name="inf" class="form-control"></textarea></td>
                            </tr>
                            <tr>
                                <td colspan="2"><center><input type="submit" name="add_info1" value="Add Now" class="btn btn-success" /></center></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-6">
                        <?php
                        $sel_qcon=mysqli_query($con,"select * from cat_info_contact1 where cat_id=".$_GET['catid']);
                        if(mysqli_num_rows($sel_qcon)>0){
                            ?>
                        <table class="table table-bordered table-condensed table-hover table-responsive">
                            <tr>
                                <th>Title</th>
                                <th>Information</th>
                            </tr>
                        <?php
                            while($r_con=mysqli_fetch_row($sel_qcon)){
                                ?>
                            <tr>
                                <td><?php echo $r_con[2] ?></td>
                                <td><?php echo $r_con[3] ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </table>
                            <?php
                        }
                        else{
                            echo"No data Available";
                        }
                        ?>
                    </div>
                    <?php
                    }
                    }
                    ?>
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

</form>
</body>
</html>