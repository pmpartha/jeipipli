<?php
include("Application/function.php");
$admin=new Admin();
$applicationId = $_REQUEST['id'];
$ApplicantDetails = $admin->viewStudentDetails($applicationId);
//echo $ApplicantDetails['row']['applicationId'];die;
//echo '<pre>';print_r($ApplicantDetails);die;
//print_r($ApplicantDetails);die;
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Print Admission Form</title>
    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"
    crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <!----datepicker jquerycssfunction-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" rel="stylesheet" type="text/css" />
  <style>section {padding:35px 0 !important;}/*.photo-view {width: 160px;height: 200px;margin: 0 auto;border: 1px solid #ababab;}*/
  @media print {#_print {visibility: hidden;}}
  </style>
    
</head>

<body>
    <!-- Content Wrapper Start -->
    <section class="content-wrapper contactus">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-10 col-md-offset-1">

                    <?php 
                        if($ApplicantDetails['num_rows'] > 0){  ?>
                            <div class="contact-form">
                                <h3 class="text-center"  style="font-size: 20px;">JANANI EDUCATIONAL INSTITUTE</h3>
                                <p class="text-center" style="margin-bottom: 10px;">AT/PO: PIPLI, PURI, ODISHA</p>
                                <h3 class="text-center" style="text-decoration: underline;margin-bottom: 40px;font-size: 18px;">ADMISSION FORM</h3>
                                <div class="row">
                                    <div class="col-xs-9" style="padding:0;">                                
                                        <div class="col-xs-6">
                                            <p><b>Full Name</b></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p><?php echo $ApplicantDetails['row']['fullName']; ?></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p><b>Father/Husband's Name:</b></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p><?php echo $ApplicantDetails['row']['fatherName']; ?></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p><b>Mother's Name:</b></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p><?php echo $ApplicantDetails['row']['motherName']; ?></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p><b>Date of Birth:</b></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p><?php echo date('d-M-Y', strtotime($ApplicantDetails['row']['dateOfBirth'])); ?></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p><b>Mobile No:</b></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p><?php echo $ApplicantDetails['row']['mobileNo']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-xs-3 text-right">
                                        <div class="img-paste">
                                            <span>Paste Your<br>Photo Here</span>
                                        </div>
                                    </div>
                                    <div class="col-xs-9" style="padding:0;">
                                        <div class="col-xs-6">
                                            <p><b>Email ID:</b></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p><?php echo $ApplicantDetails['row']['emailId']; ?></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p><b>Educational Qualification:</b></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p><?php echo $ApplicantDetails['row']['educationalQualification']; ?></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p><b>Nationality:</b></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p><?php echo $ApplicantDetails['row']['Nationality']; ?></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p><b>Religion:</b></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p><?php echo $ApplicantDetails['row']['Religion']; ?></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p><b>Admission Date:</b></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p><?php echo date('d-M-Y', strtotime($ApplicantDetails['row']['admissionDate'])); ?></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p><b>Gender:</b></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p><?php echo $ApplicantDetails['row']['Sex']; ?></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p><b>Marital Status:</b></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p><?php echo $ApplicantDetails['row']['martialStatus']; ?></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p><b>Course(s) want to learn:</b></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p>
                                                <?php 
                                                $courses = explode(',',$ApplicantDetails['row']['selectCourse']);
                                                foreach($courses as $course){ 
                                                    echo $course.',';
                                                }?>
                                            </p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p><b>Time you want:</b></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p><?php echo $ApplicantDetails['row']['timePeriod']; ?></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p><b>Permanent Address:</b></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p><?php echo $ApplicantDetails['row']['permanentAddress']; ?></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p><b>Present Address:</b></p>
                                        </div>
                                        <div class="col-xs-6">
                                            <p><?php echo $ApplicantDetails['row']['presentAddress']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                       }  
                    ?>
                </div>
            </div>
            <div class="row print" id="_print">
                <div class="container text-center mt-50">
                    <a href="javascript:window.print()" class="btn btn-primary"><i class="fas fa-print"></i> &nbsp; Print</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Content WrapperEnd -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/jquery/jquery-3.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/jquery/plugins.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js" type="text/javascript"></script>
</body>
</html>