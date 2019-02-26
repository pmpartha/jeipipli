<?php
include('Application/function.php');
$admin= new Admin();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Certificate Search - JANANI EDUCATIONAL INSTITUTE</title>
    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"
        crossorigin="anonymous">
    <!-- Mobile Menu Css -->
    <link href="assets/menu/css/meanmenu.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="assets/owl-carousel/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/owl-carousel/css/owl.theme.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Loader -->
    <?php include('header.php'); ?>
    <!-- Header End -->
    <!-- Content Wrapper Start -->
    <section class="content-wrapper about-us">
        <div class="container certificate-search">
            <div class="title">
                <h2>Certificate Search</h2>
            </div>
            <form action="" method="post" autocomplete="off">
                <div class="form-group col-md-3 col-xs-12">
                    <label>Enter Roll No.</label>
                    <input type="text" class="form-control" name="roll" placeholder="Enter Roll No.">
                </div>
                <div class="form-group col-md-3 col-xs-12">
                    <label>Enter Certificate No.</label>
                    <input type="text" class="form-control" name="certificate" placeholder="Enter Certificate No.">
                </div>
                <div class="form-group col-md-3 col-xs-12">
                    <label>Enter Serial No.</label>
                    <input type="text" class="form-control" name="serial" placeholder="Enter Serial No.">
                </div>
                <div class="col-md-3 col-xs-12">
                    <label>&nbsp;</label>
                     <button type="submit" class="btn btn-warning" name="searchResult" style="width: 100%;">Search</button>
                </div>
            </form>
           
        </div>
        <div class="container">
            <div class="col-md-6 col-md-offset-3 cert-search">               
                <div class="row">   
                    <?php
                    if(isset($_REQUEST['searchResult'])){
                        //echo 'Hi';
                        $roll = $_REQUEST['roll'];
                        $certificate = $_REQUEST['certificate'];
                        $serial = $_REQUEST['serial'];
                        $results = $admin->viewCertificateSearch($roll,$certificate,$serial);
                        //echo '<pre>';print_r($results);die;
                   
                        if($results['num_rows'] > 0){ ?>       

                            <div class="cert-list"><b>Roll No.</b><span class="pull-right"><?php echo $results['row']['rollNumber']  ?></span></div>
                            <div class="cert-list"><b>Certificate No.</b><span class="pull-right"><?php echo $results['row']['certificateNo']  ?></span></div>
                            <div class="cert-list"><b>Serial No.</b><span class="pull-right"><?php echo $results['row']['serialNo']  ?></span></div>
                            <div class="cert-list"><b>Candidate Name</b><span class="pull-right"><?php echo $results['row']['fullName'] ?></span></div>
                            <div class="cert-list"><b>Father's Name</b><span class="pull-right"><?php echo $results['row']['fatherName'] ?></span></div>
                            <div class="cert-list"><b>Course</b><span class="pull-right"><?php echo $results['row']['course'] ?></span></div>
                            <div class="cert-list"><b>Grade</b><span class="pull-right"><?php echo $results['row']['grade'] ?></span></div>
                            <div class="cert-list"><b>Year of Passing</b><span class="pull-right"><?php echo $results['row']['yearOfPassing'] ?></span></div>
                            <?php } else { ?>
                            <h2 class="bg-info text-center p-2">No Results Found...</h2> 
                            <?php } } ?>
            </div>
        </div>        
    </section>
    <!-- Content WrapperEnd -->
    <!-- Footer Wrapper Start -->
    <?php include('footer.php'); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/jquery/jquery-3.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/menu/js/jquery.meanmenu.js"></script>
    <script src="assets/jquery/jquery.animateNumber.min.js"></script>
    <script src="assets/owl-carousel/js/owl.carousel.js"></script>
    <script src="assets/jquery/plugins.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>