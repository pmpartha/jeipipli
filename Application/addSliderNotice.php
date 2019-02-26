<?php
ini_set( 'session.use_only_cookies', TRUE );                
ini_set( 'session.use_trans_sid', FALSE );
session_start();
session_regenerate_id();
if(!isset($_SESSION['adminId'])){
    header('location: index.php');
}
include("function.php");

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>JANANI EDUCATIONAL INSTITUTE</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- <link href="assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" /> -->
        <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- <link rel="stylesheet" href="dist/css/bootstrapValidator.css"/> -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> 
        <style>.errorsliderNotice{color:red;display:none;}</style>
        
    </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <!-- BEGIN HEADER -->
        <?php include("include/header.php");?>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <?php include("include/sidebar.php");?>
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
                                <a href="dashboard.php">Dashboard</a>
                                <i class="fa fa-circle"></i>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title">Slider Notice </h3>                    
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER--> 
                                     
                    <div class="row">
                        <div class="col-md-9">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">                                
                                <div class="portlet-body form">
                                    <form action="addSliderNoticeInner.php" method="post" id="form1" enctype="multipart/form-data" role="form">
                                        <div class="form-body">
                                            <div class="form-group form-md-line-input has-success">
                                                <input type="text" name="sliderNotice"  id="sliderNotice"class="form-control" placeholder="Slider Notice" required="">
                                                <label for="form_control_1"> </label>

                                            </div>
                                            <span class="errorsliderNotice" id="errorsliderNotice"> This Field is required.</span>
                                           
                                           
											<div class="form-actions noborder">
                                        		<input type="submit" name="btnSubmit" value="Submit" id="btnSubmit" class="btn btn-success green" />
                                                <input type="button" value="Reset" class="btn btn-danger red" onclick="window.location.href='addSliderNotice.php';" />
                                        	</div>
                                        </div>                                        
                                    </form>
                                </div>
                            </div>
                            <!-- END SAMPLE FORM PORTLET-->
                            
                        </div>
                    </div>
                   
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
           
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
       <?php include("include/footer.php");?>
        <!-- END FOOTER -->
        <!--[if lt IE 9]>
        <script src="assets/global/plugins/respond.min.js"></script>
        <script src="assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>        
        <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <!-- <script src="assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script> -->
        <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- <script type="text/javascript" src="dist/js/bootstrapValidator.js"></script> -->
        <script>
            $('#btnSubmit').click(function(event) 
        {
            //event.preventDefault();       
            var errFlag = 0;
            var sliderNotice          = $('#sliderNotice').val();


            if(sliderNotice==""){
                errFlag++;
                $('.errorsliderNotice').css('display','block');
                $('#sliderNotice').css('border-color','#F04938');                           
            } else{
                $('.errorsliderNotice').hide();
                $('#sliderNotice').css('border-color','');
            }
            if(errFlag > 0) {               
                alert("Mandatory field cannot be blank.");
                return false;
            }
            
                 else{
                    var rr = confirm("Are you sure you want to submit ? ");
                    if(rr){
                        $('#form1').submit();
                    }
                    else{
                        return false;
                    }
                }
                
            
        });
        </script>
       
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>