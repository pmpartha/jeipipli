<!DOCTYPE html>
<html lang="en">
<?php
include('Application/function.php');
$admin= new Admin();
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Study Materials - JANANI EDUCATIONAL INSTITUTE</title>
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
                <h2>Study Materials</h2>
            </div>
           
                <ul class="material">
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                            <thead>
                                                <tr>
                                                    <th width="10%"> Sl.No#</th>
                                                    <th width="40%"> Subject</th>
                                                    <th width="25%"> Study Material</th>
                                                    <th width="25%"> Added Date</th>
                                                                                  
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $ctr=0;
                                            $studyMaterial = $admin->studyMaterial();
                                           
                                            foreach($studyMaterial as $studyMaterial)
                                            {
                                                $ctr++;
                                            ?>
                                                <tr class="odd gradeX">
                                                    
                                                   <td><?=$studyMaterial['studyId']?></td>
                                                   <td><?=$studyMaterial['studyMaterialHeading']?></td>
                                                   <td> <a class="text-primary" href="Application/studymaterial/<?=$studyMaterial['studyMaterial']?>" target="_blank"><i class="fa fa-download"></i>  <?=$studyMaterial['studyMaterial']?> </td>
                                                   <td><?= date('d-M-Y', strtotime($studyMaterial['createdOn']))?></td>
                                                </tr>  
                                            <?php } ?>              
                                            </tbody>
                                        </table>
                </ul>
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