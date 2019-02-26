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
        <style>.errorrollNo ,.errorcertificateNo,.errorserialNo,.errorfullName,.errorCourse,.errorGrade,.erroryearOfPassing,.errorfatherName{color:red;display:none;}</style>
        
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
                    <h3 class="page-title">Add Certificate Details </h3>                    
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER--> 
                    <?php
                    if($_REQUEST['errmsg'] !='' && $_REQUEST['errmsg']){
                        ?>
                        <div class="alert alert-success fade in alert-dismissible" style="margin-top:18px;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                            <strong><?php echo $_REQUEST['errmsg']; ?></strong>
                        </div>
                        <?php
                    }
                    ?>      
                    <div class="row">
                        <div class="col-md-9">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">                                
                                <div class="portlet-body form">
                                    <form action="addCertificateInner.php" method="post" id="form2" enctype="multipart/form-data" role="form">

                                        <div class="form-group form-md-line-input has-success">
                                                <input type="text" name="rollNumber"  id="rollNo"class="form-control" placeholder="Roll No" >
                                                
                                                 <span class="errorrollNo" id="errorrollNo"> This Field is required.</span>

                                            </div>
                                           
                                             <div class="form-group form-md-line-input has-success">
                                                <input type="text" name="certificateNo"  id="certificateNo"class="form-control" placeholder="Certificate No" required="">
                                               
                                                <span class="errorcertificateNo" id="errorcertificateNo"> This Field is required.</span>

                                            </div>
                                            
                                             <div class="form-group form-md-line-input has-success">
                                                <input type="text" name="serialNo"  id="serialNo"class="form-control" placeholder="Serial No" required="">
                                                
                                                <span class="errorserialNo" id="errorserialNo"> This Field is required.</span>

                                            </div>
                                            <div class="form-group form-md-line-input has-success">
                                                <input type="text" name="fullName"  id="fullName"class="form-control textfield" placeholder="Full Name" required="">
                                                
                                                <span class="errorfullName" id="errorfullName"> This Field is required.</span>

                                            </div>
                                            <div class="form-group form-md-line-input has-success">
                                                <input type="text" name="fatherName"  id="fatherName"class="form-control textfield" placeholder="Father's Name" required="">
                                                
                                                <span class="errorfatherName" id="errorfatherName"> This Field is required.</span>

                                            </div>
                                            <div class="form-group form-md-line-input has-success">
                                                <input type="text" name="course"  id="course"class="form-control" placeholder="Course" required="">
                                                
                                                <span class="errorCourse" id="errorCourse"> This Field is required.</span>

                                            </div>
                                            <div class="form-group form-md-line-input has-success">
                                                <input type="text" name="grade"  id="grade"class="form-control" placeholder="Grade" required="">
                                                
                                                <span class="errorGrade" id="errorGrade"> This Field is required.</span>

                                            </div>
                                            <div class="form-group form-md-line-input has-success">
                                                <input type="text" name="yearOfPassing"  id="yearOfPassing"class="form-control" placeholder="Year of Passing" required="">
                                                
                                                <span class="erroryearOfPassing" id="erroryearOfPassing"> This Field is required.</span>

                                            </div>
                                            
                                       
                                        <div class="form-actions noborder">
                                            <input type="submit" name="submitBtn" value="Submit" id="btnSubmit" class="btn btn-success green" />
                                            <input type="button" value="Reset" class="btn btn-danger red" onclick="window.location.href='addCertificate.php';" />
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
         $('.textfield').keypress(function(e){
            var inputValue = e.which;
            // allow letters and whitespaces only.
            if(!(inputValue >= 65 && inputValue <= 122) && (inputValue != 32 && inputValue != 0)) {
                return false; 
            }
        });
            
            $('#btnSubmit').click(function(event) 
        {
            //event.preventDefault();       
            var errFlag = 0;
            var rollNo                  = $('#rollNo').val();
            var certificateNo           = $('#certificateNo').val();
            var serialNo                = $('#serialNo').val();
            var fullName                = $('#fullName').val();
            var fatherName              = $('#fatherName').val();
            var course                  = $('#course').val();
            var grade                   = $('#grade').val();
            var yearOfPassing           = $('#yearOfPassing').val();
          
        

            if(rollNo==""){
                errFlag++;
                $('.errorrollNo').css('display','block');
                $('#rollNo').css('border-color','#F04938');                           
            } else{
                $('.errorrollNo').hide();
                $('#rollNo').css('border-color','');
            }
            if(certificateNo==""){
                errFlag++;
                $('.errorcertificateNo').css('display','block');
                $('#certificateNo').css('border-color','#F04938');                           
            } else{
                $('.errorcertificateNo').hide();
                $('#certificateNo').css('border-color','');
            }
            if(serialNo==""){
                errFlag++;
                $('.errorserialNo').css('display','block');
                $('#serialNo').css('border-color','#F04938');                           
            } else{
                $('.errorserialNo').hide();
                $('#serialNo').css('border-color','');
            }
             if(fullName==""){
                errFlag++;
                $('.errorfullName').css('display','block');
                $('#fullName').css('border-color','#F04938');                           
            } else{
                $('.errorfullName').hide();
                $('#fullName').css('border-color','');
            }
             if(fatherName==""){
                errFlag++;
                $('.errorfatherName').css('display','block');
                $('#fatherName').css('border-color','#F04938');                           
            } else{
                $('.errorfatherName').hide();
                $('#fatherName').css('border-color','');
            }
             if(course==""){
                errFlag++;
                $('.errorCourse').css('display','block');
                $('#course').css('border-color','#F04938');                           
            } else{
                $('.errorCourse').hide();
                $('#course').css('border-color','');
            }
             if(grade==""){
                errFlag++;
                $('.errorGrade').css('display','block');
                $('#grade').css('border-color','#F04938');                           
            } else{
                $('.errorGrade').hide();
                $('#grade').css('border-color','');
            }
             if(yearOfPassing==""){
                errFlag++;
                $('.erroryearOfPassing').css('display','block');
                $('#yearOfPassing').css('border-color','#F04938');                           
            } else{
                $('.erroryearOfPassing').hide();
                $('#yearOfPassing').css('border-color','');
            }

           
            if(errFlag > 0) {               
                alert("Mandatory field cannot be blank.");
                return false;
            }
            
                 else{
                    var rr = confirm("Are you sure you want to submit ? ");
                    if(rr){
                        $('#form2').submit();
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