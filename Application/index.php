<?php
session_start();
if(isset($_SESSION['adminId'])){
	header('location: dashboard.php');
}
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <meta charset="utf-8" />
    <title>Admin | Admin Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/pages/css/login.min.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="favicon.ico" /> 
    <style>
    .login .content {
	    padding: 10px 30px 30px;
	}
	.login .logo {
	    margin: 40px 180px 0px 180px;
	    text-align: center;
	}
	.login .copyright {
	    text-align: center;
	    margin: 0 17% 0;
	    color: #fff;
	}
	.login .content .create-account {
        background-color: #0996ab;
    }
    .btn.green:not(.btn-outline) {
        color: #FFF;
        background-color: #dc3450;
        border-color: #dc3450;
        width: 25%;
    }
    .btn.green:not(.btn-outline).active, .btn.green:not(.btn-outline):active, .btn.green:not(.btn-outline):hover, .open>.btn.green:not(.btn-outline).dropdown-toggle {
        color: #FFF;
        background-color: #0996ab;
        border-color: #f7f7f7;
    }
    </style>
</head>
    <!-- END HEAD -->

    <body class="login" style="background-repeat: no-repeat;background-size: 100% auto;background-position: center top;background-attachment: fixed;background-image: url"">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="index.php">
                <img src="../images/logo-jei.png" alt="website_logo" style="margin-right: 5px;width: 120px;border: 2px solid #fff;border-radius: 50%!important;" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form action="login.php" method="post">
                <h3 class="form-title font-green">Sign In</h3>
                <p align="center" style="color: #29585d;">Login to Signin your Account</p>               
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="userName" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" /> </div>                
                    <a data-toggle="modal" data-target="#exampleModal">Forgot Password</a></br>
                <div class="create-account" style="background-color: #060606;opacity: 0.8;">

                    <p>
                        <button type="submit" id="register-btn" name="admin_login" class="btn green uppercase">Login</button>
                    </p>
                </div>
            </form>
            <!-- END LOGIN FORM -->
                       
        </div>
        <div class="copyright"> <?php echo date('Y'); ?> &copy; Copyright Protected .. </div>
        <!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/pages/scripts/login.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Enter Your Register Email Id</h5>
		        <input type="email" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>

		      </div>
		      <div class="modal-body">
                <form id="form1">
                    <span class="result"></span>
                    <div id="passwordChange">
        		        <div class="form-group">
                            <label>Enter Email ID</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter Email Id">
                        </div>   
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="passowrd" class="form-control" name="cpass" placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="passowrd" class="form-control" name="confpass" placeholder="Confirm Password">
                        </div>
                    </div>
                </form>
		      </div>
		      <div class="modal-footer" id="footerHide">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary" onclick="finalSubmit();">Submit</button>
		      </div>
		    </div>
		  </div>
		</div>

        <script type="text/javascript">
            function finalSubmit(){
                var form = $("#form1");
                // you can't pass Jquery form it has to be javascript form object
                var formData = new FormData(form[0]);
                //console.log(formData);return false;
                var rr = confirm("Are you sure to confirm this ? ");
                 if(rr){
                    $.ajax({
                        url: 'ajax_formsubmit.php',
                        type: 'POST',
                        data: formData,
                        success: function(response) {
                            console.log(response);
                            if(response == 'success'){
                                $('#passwordChange').fadeOut();
                                $('#footerHide').fadeOut();
                                $('.result').html('Your password has been changed..').css({'color':'#008000', 'display':'block','font-size':'25px','text-align':'center'});
                            } else {
                                $('.result').html("Email id doesn't exists").css('color','#ff0000');
                            }
                            /*response = JSON.parse(response);
                           // alert(response.status);
                            if(response.status==0){
                                //alert(response.msg);
                                //showFinalSubmit(response.id);
                            }else{
                                alert(response.msg);
                                //backToEdit();
                            }*/
                        },
                        contentType: false,
                        processData: false,
                        cache: false
                    });
                }
            }
        </script>
</body>
</html>