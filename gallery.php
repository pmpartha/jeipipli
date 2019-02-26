<!DOCTYPE html>
<html lang="en">
    <?php
include("Application/function.php");
$admin=new Admin();
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Our Gallery - JANANI EDUCATIONAL INSTITUTE</title>
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
    <!-- Gallery Wrapper -->
    <section class="content-wrapper gallery-wrapper">
        <div class="container">
            <div class="title">
                <h2>Our Gallery</h2>
            </div>
        </div>
                                         
        <div class="container">
            <div class="row">
                <div class="gal-container">
                    <?php
                        $i = 0;
                        $viewGalleryImage = $admin->viewGalleryImage();
                            foreach($viewGalleryImage as $viewGalleryImage)
                            { 
                                $i++;
                            ?>          
                            <div class="col-sm-6 col-md-3 gal-item">
                                <div class="gal-list">
                                    <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#<?php echo $i;  ?>">
                                            <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                                            <img src="Application/gallery/<?php echo $viewGalleryImage['galleryImage']; ?>" alt="Education Career" >
                                        </a>
                                        <div class="modal fade" id="<?php echo $i;  ?>" tabindex="-1" role="dialog">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                            aria-hidden="true">×</span></button>
                                                    <div class="modal-body"> <img src="Application/gallery/<?php echo $viewGalleryImage['galleryImage']; ?>" alt="Education Career" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>  
                        <!-- <div class="col-sm-6 col-md-3 gal-item">
                            <div class="gal-list">
                                <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#3">
                                        <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                                        <img src="images/gallery/big-3.jpg" >
                                    </a>
                                    <div class="modal fade" id="3" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                        aria-hidden="true">×</span></button>
                                                <div class="modal-body"> <img src="images/gallery/big-3.jpg" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 gal-item">
                            <div class="gal-list">
                                <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#4">
                                        <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                                        <img src="images/gallery/img-4.jpg" >
                                    </a>
                                    <div class="modal fade" id="4" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                        aria-hidden="true">×</span></button>
                                                <div class="modal-body"> <img src="images/gallery/big-4.jpg" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-sm-6 col-md-3 gal-item">
                        <div class="gal-list">
                            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#5">
                                    <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                                    <img src="images/gallery/img-5.jpg" >
                                </a>
                                <div class="modal fade" id="5" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">×</span></button>
                                            <div class="modal-body"> <img src="images/gallery/big-5.jpg" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 gal-item">
                        <div class="gal-list">
                            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#6">
                                    <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                                    <img src="images/gallery/img-6.jpg" >
                                </a>
                                <div class="modal fade" id="6" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">×</span></button>
                                            <div class="modal-body"> <img src="images/gallery/big-6.jpg" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 gal-item">
                        <div class="gal-list">
                            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#7">
                                    <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                                    <img src="images/gallery/img-7.jpg" >
                                </a>
                                <div class="modal fade" id="7" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">×</span></button>
                                            <div class="modal-body"> <img src="images/gallery/big-7.jpg" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 gal-item">
                        <div class="gal-list">
                            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#8">
                                    <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                                    <img src="images/gallery/img-8.jpg" >
                                </a>
                                <div class="modal fade" id="8" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">×</span></button>
                                            <div class="modal-body"> <img src="images/gallery/big-8.jpg" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 gal-item">
                        <div class="gal-list">
                            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#9">
                                    <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                                    <img src="images/gallery/img-9.jpg" >
                                </a>
                                <div class="modal fade" id="9" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">×</span></button>
                                            <div class="modal-body"> <img src="images/gallery/big-9.jpg" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 gal-item">
                        <div class="gal-list">
                            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#10">
                                    <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                                    <img src="images/gallery/img-10.jpg" >
                                </a>
                                <div class="modal fade" id="10" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">×</span></button>
                                            <div class="modal-body"> <img src="images/gallery/big-10.jpg" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 gal-item">
                        <div class="gal-list">
                            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#11">
                                    <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                                    <img src="images/gallery/img-11.jpg" >
                                </a>
                                <div class="modal fade" id="11" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">×</span></button>
                                            <div class="modal-body"> <img src="images/gallery/big-11.jpg" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 gal-item">
                        <div class="gal-list">
                            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#12">
                                    <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                                    <img src="images/gallery/img-12.jpg" >
                                </a>
                                <div class="modal fade" id="12" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">×</span></button>
                                            <div class="modal-body"> <img src="images/gallery/big-12.jpg" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 gal-item">
                        <div class="gal-list">
                            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#2">
                                    <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                                    <img src="images/gallery/img-2.jpg" >
                                </a>
                                <div class="modal fade" id="2" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">×</span></button>
                                            <div class="modal-body"> <img src="images/gallery/big-2.jpg" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 gal-item">
                        <div class="gal-list">
                            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#13">
                                    <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                                    <img src="images/gallery/img-13.jpg" >
                                </a>
                                <div class="modal fade" id="13" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">×</span></button>
                                            <div class="modal-body"> <img src="images/gallery/big-13.jpg" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 gal-item">
                        <div class="gal-list">
                            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#14">
                                    <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                                    <img src="images/gallery/img-14.jpg" >
                                </a>
                                <div class="modal fade" id="14" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">×</span></button>
                                            <div class="modal-body"> <img src="images/gallery/big-14.jpg" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 gal-item">
                        <div class="gal-list">
                            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#15">
                                    <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                                    <img src="images/gallery/img-15.jpg" >
                                </a>
                                <div class="modal fade" id="15" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">×</span></button>
                                            <div class="modal-body"> <img src="images/gallery/big-15.jpg" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 gal-item">
                        <div class="gal-list">
                            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#16">
                                    <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                                    <img src="images/gallery/img-16.jpg" >
                                </a>
                                <div class="modal fade" id="16" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">×</span></button>
                                            <div class="modal-body"> <img src="images/gallery/big-16.jpg" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 gal-item">
                        <div class="gal-list">
                            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#17">
                                    <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                                    <img src="images/gallery/img-17.jpg" >
                                </a>
                                <div class="modal fade" id="17" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">×</span></button>
                                            <div class="modal-body"> <img src="images/gallery/big-17.jpg" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 gal-item">
                        <div class="gal-list">
                            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#18">
                                    <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                                    <img src="images/gallery/img-18.jpg" >
                                </a>
                                <div class="modal fade" id="18" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">×</span></button>
                                            <div class="modal-body"> <img src="images/gallery/big-18.jpg" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 gal-item">
                        <div class="gal-list">
                            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#19">
                                    <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                                    <img src="images/gallery/img-19.jpg" >
                                </a>
                                <div class="modal fade" id="19" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">×</span></button>
                                            <div class="modal-body"> <img src="images/gallery/big-19.jpg" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 gal-item">
                        <div class="gal-list">
                            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#20">
                                    <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                                    <img src="images/gallery/img-20.jpg" >
                                </a>
                                <div class="modal fade" id="20" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">×</span></button>
                                            <div class="modal-body"> <img src="images/gallery/big-20.jpg" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 gal-item">
                        <div class="gal-list">
                            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#21">
                                    <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                                    <img src="images/gallery/img-21.jpg" >
                                </a>
                                <div class="modal fade" id="21" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">×</span></button>
                                            <div class="modal-body"> <img src="images/gallery/big-21.jpg" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 gal-item">
                        <div class="gal-list">
                            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#22">
                                    <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                                    <img src="images/gallery/img-22.jpg" >
                                </a>
                                <div class="modal fade" id="22" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">×</span></button>
                                            <div class="modal-body"> <img src="images/gallery/big-22.jpg" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 gal-item">
                        <div class="gal-list">
                            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#23">
                                    <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                                    <img src="images/gallery/img-23.jpg" >
                                </a>
                                <div class="modal fade" id="23" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">×</span></button>
                                            <div class="modal-body"> <img src="images/gallery/big-23.jpg" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 gal-item">
                        <div class="gal-list">
                            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#24">
                                    <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                                    <img src="images/gallery/img-24.jpg" >
                                </a>
                                <div class="modal fade" id="24" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">×</span></button>
                                            <div class="modal-body"> <img src="images/gallery/big-24.jpg" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 gal-item">
                        <div class="gal-list">
                            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#25">
                                    <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                                    <img src="images/gallery/img-25.jpg" >
                                </a>
                                <div class="modal fade" id="25" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">×</span></button>
                                            <div class="modal-body"> <img src="images/gallery/big-25.jpg" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 gal-item">
                        <div class="gal-list">
                            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#26">
                                    <div class="zoom"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                                    <img src="images/gallery/img-26.jpg" >
                                </a>
                                <div class="modal fade" id="26" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">×</span></button>
                                            <div class="modal-body"> <img src="images/gallery/big-26.jpg" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Wrapper -->
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