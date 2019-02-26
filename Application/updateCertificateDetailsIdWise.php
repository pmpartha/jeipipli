<?php
ini_set( 'session.use_only_cookies', TRUE );                
ini_set( 'session.use_trans_sid', FALSE );
session_start();
session_regenerate_id();
if(!isset($_SESSION['adminId'])){
    header('location: index.php');
}
include("function.php");
$admin=new Admin();
$rollNumber = $_GET['id'];
$rollNumber = $admin->viewcertificateDetailsIdWise($rollNumber);
//echo '<pre>';print_r($ApplicantDetails);die;
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8" />
        <title>JANANI EDUCATIONAL INSTITUTE</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        
        <link rel="stylesheet" href="assets/css/jquery-ui.css"/>
        
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> 
        <style>
            hr, p {
                margin: 8px 0;
            }
        </style>
      </head>  
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper">
        
            <!-- BEGIN HEADER -->
            <?php include('include/header.php'); ?>
            <!-- END HEADER -->
            
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
            
                <!-- BEGIN SIDEBAR -->
                <?php include('include/sidebar.php'); ?>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->                        
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="dashboard.php">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <a href="#.">Dashboard</a>
                                    <i class="fa fa-circle"></i>
                                </li>                                
                            </ul>                            
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> View
                            <small>Admission Details</small>
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div id="successMessage" style="color: #14ce24;font-weight: 600;">
                            <?php if(isset($_REQUEST['msg']) && $_REQUEST['msg'] !=''){ echo $_REQUEST['msg']; } ?> 
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="portlet light bordered"> 
                                   <form id="registration" method="post" action="updateCertificateDetailsIdWiseInner.php" autocomplete="off">
                                     <div class="row">
                                        <div class="col-md-9">
                                             <div class="row" style="margin-bottom:1em;">                               
                                                <div class="col-md-6">
                                                    <p><b>Roll No</b></p>
                                                </div>
                                                <div class="col-md-6">
                                                   <input type="text" class="form-control  textfield"  name="rollNumber" id="rollNumber"  placeholder="rollNumber" value="<?= $rollNumber['row']['rollNumber']; ?>" readonly>
                                                </div>
                                            </div>
                                             <div class="row" style="margin-bottom:1em;">                               
                                                <div class="col-md-6">
                                                    <p><b>Certificate No</b></p>
                                                </div>
                                                <div class="col-md-6">
                                                   <input type="text" class="form-control  textfield" required name="certificateNo" id="certificateNo"  placeholder="Certificate No" value="<?= $rollNumber['row']['certificateNo']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom:1em;">
                                                <div class="col-md-6">
                                                    <p><b>Serial No</b></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control  textfield" required name="serialNo" id="serialNo"  placeholder="Serial No" value="<?= $rollNumber['row']['serialNo']; ?>" readonly>
                                                    
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom:1em;">
                                                <div class="col-md-6">
                                                    <p><b>Full Name</b></p>
                                                </div>
                                                <div class="col-md-6">
                                                     <input type="text" class="form-control  textfield" required name="fullName" id="fullName"  placeholder="Full Name" value="<?= $rollNumber['row']['fullName']; ?>">
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom:1em;">
                                                <div class="col-md-6">
                                                    <p><b>Father Name</b></p>
                                                </div>
                                                <div class="col-md-6">
                                                     <input type="text" class="form-control  textfield" required name="fatherName" id="fatherName"  placeholder="Father Name" value="<?= $rollNumber['row']['fatherName']; ?>">
                                                    
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom:1em;">
                                                <div class="col-md-6">
                                                    <p><b>Course</b></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" required name="course" id="course"  placeholder="Course" value="<?= $rollNumber['row']['course']; ?>">
                                                   
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom:1em;">
                                                <div class="col-md-6">
                                                    <p><b>Grade</b></p>
                                                </div>
                                                <div class="col-md-6">
                                                     <input type="text" class="form-control" required name="grade" id="grade"  placeholder="Grade" value="<?= $rollNumber['row']['grade']; ?>">
                                                    
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom:1em;">
                                                <div class="col-md-6">
                                                    <p><b>Year Of passing</b></p>
                                                </div>
                                                <div class="col-md-6">
                                                     <input type="text" class="form-control" required name="yearOfPassing" id="yearOfPassing"  placeholder="Year Of passing" value="<?= $rollNumber['row']['yearOfPassing']; ?>">
                                                </div>
                                            </div>
                                           
                                           
                                           
                                        </div>
                                       
                                    </div>
                                    <div class="form-group text-center">
                                       
                                        <button name="btnSubmitt"  class="submit btn btn-success">Update</button>
                                        <button class="btn btn-danger" type="reset" name="reset" onclick="window.location.href='#';">Reset
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>                       
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->               
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            <?php include('include/footer.php'); ?>
            <!-- END FOOTER -->
        </div>
        <!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui.js"></script>

<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<script>

          $("#dateOfBirth").datepicker({ 
                  dateFormat: 'yy-mm-dd',
                  changeMonth: true,
                  changeYear: true,
                  yearRange: '1950:2019',
              });
               $("#admissionDate").datepicker({ 
                  dateFormat: 'yy-mm-dd',
                  changeMonth: true,
                  changeYear: true,
                  yearRange: '1950:2019',
              });
          

</script>
<script>
    /*$("#datepicker").datepicker({ 
    dateFormat: 'yy-mm-dd',
    minDate: '1',
    onSelect: function(date){
        var selectedDate = new Date(date);
        var msecsInADay = 86400000;
        var endDate = new Date(selectedDate.getTime() + msecsInADay);
        $("#datepicker1").datepicker( "option", "minDate", endDate );
    }
    });

    $("#datepicker1").datepicker({ 
        dateFormat: 'yy-mm-dd',
        minDate: '2',
    });*/
    </script>
</body>
</html>
