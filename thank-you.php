<?php
include("Application/function.php");
$admin=new Admin();
//$row = $admin->viewStudentDetails($applicationId);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Thank You - JANANI EDUCATIONAL INSTITUTE</title>
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
  <section class="content-wrapper contactus">
    <div class="container text-center">
        <i class="fas fa-check-circle" style="font-size: 65px; color: green;"></i>
        <h2  style="margin: 20px 0;">Thank you for submitting your application!</h2>
        <p>Your application form has been submitted succecsfully. Please view and take a print out of your application.</p>
        <p>Your Application ID: <b><?= $_GET['id']; ?></b></p>
        <a target="_blank" href="admission-print.php?id=<?php echo $_GET['id']; ?>" class="btn btn-primary">View Your Application Form</a>
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