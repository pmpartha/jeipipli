<?php
include("Application/function.php");
$admin=new Admin();
$res = $admin->viewImageFrontend();
//$countRes = count($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Welcome to JANANI EDUCATIONAL INSTITUTE</title>
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
  <!-- Banner Wrapper Start -->
  <div class="banner-wrapper">
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
      <!-- Overlay -->
      <div class="overlay"></div>
      <!-- Wrapper for slides -->
      <div class="carousel-inner">

      	<?php
          $i = 0;
          foreach($res as $re){
            $i++;
            if($i == 1){
              $active = 'active';
            }else {
               $active = '';
            }
          ?>
              <div class="item slides <?php echo $active; ?>">
                  <div class="slide-1"><img src="Application/images/<?php echo $re['sliderImage']; ?>" alt="Education Career" /></div>
                  <div class="hero hidden-xs">
                    <h1>A Warm Welcome to</h1>
                    <h2>JANANI EDUCATIONAL INSTITUTE</h2>
                    <a href="admission.php" class="btn btn-hero">Start Course Now!</a>
                  </div>
                  <div class="hero hidden-sm hidden-md hidden-lg">
                    <h1>Welcome to</h1>
                    <h1>JANANI EDUCATIONAL INSTITUTE</h1>
                  </div>
              </div>
            <?php } ?>

      </div>
      <div class="slide-arrows"><a class="left carousel-control" href="#bs-carousel" data-slide="prev"><span class="transition3s glyphicon glyphicon-chevron-left fa fa-angle-left"></span></a>
        <a class="right carousel-control" href="#bs-carousel" data-slide="next"><span class="transition3s glyphicon glyphicon-chevron-right fa fa-angle-right"></span></a></div>
    </div>
  </div>
  <!-- Banner Wrapper End -->
  <!-- Course Search Start -->
  <div class="course-search">
    <div class="container">
    	  <p>
        <marquee behavior="" direction="left" scrollamount="6">
      
          <?php
            $ctr=0;
            $viewCategorys = $admin->viewCategorys();
           
            foreach($viewCategorys as $viewCategorys)
            {
                $ctr++;
            ?>
            <?=$viewCategorys['sliderNotice']?>&nbsp;&nbsp; | &nbsp;&nbsp;
          <?php } ?>
        </marquee>
      </p>
    </div>
  </div>
  <!-- Course Search End -->
  <!-- About Us Start -->
  <section class="about-us">
    <div class="container">
      <div class="row">
        <div class="col-sm-7">
          <!-- <h3>JANANI EDUCATIONAL INSTITUTE</h3> -->
          <h4>WELCOME TO JANANI EDUCATIONAL INSTITUTE</h4><br>
          <p><span>JANANI EDUCATIONAL INSTITUTE</span>
            (Regd. By Govt. of Odisha, An ISO 9001:2015 Certified Institute) owned by the advance teaching, programme
            method. Also the organization having the vast experience in the field of education in the committed to make
            all round social transformation through spread of quality of education in the rural and urban opportunities
            and spread the study center across the Odisha.</p>
          <p><span>JANANI EDUCATIONAL INSTITUTE</span>
            (Regd. By Govt. of Odisha, An ISO 9001:2015 Certified Institute) also know the requirement of the students
            in various field with giving the all types of study programme for deserving candidates like – <b>STENOGRAPHY
              &
              TYPE WRITING , COMPUTER COURSE(S), COMPETITIVE COACHING.</b></p>
          <p class="bg-info">Our Ambition is – <b>“To engage in goverment sector/ Learn to Earn”</b> for
            all.</p>
        </div>
        <div class="col-sm-5 news-wrapper">
          <div class="sidebar">
            <div class="latest-news-section">
              <h3>Latest News</h3>
              <div class="latest-news">
                <div class="row" id="div-marquee">
                  <div class="col-sm-8 meta-info">
                   <?php
                                           
                    $latestNews1 = $admin->latestNews1();
                   
                    foreach($latestNews1 as $latestNews1)
                    {
                        
                    ?>
         
                           <p><?=$latestNews1['latestNews']?> 
                           <?php } ?>   </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="download-services">
              <span>Test Result</span>
              <a class="btn btn-success" href="result.php">View Result</a>
            </div>
            <div class="row sidebar-btn clearfix">
              <div class="col-sm-6">
                <a href="study-materials.php" class="btn btn-primary"><i class="fa fa-book"></i> Study Material</a>
              </div>
              <div class="col-sm-6">
                <a href="successful-students.php" class="btn btn-info"><i class="fa fa-user"></i> Successful Students</a>
              </div>
              <div class="col-sm-6">
                <a href="form.pdf" class="btn btn-warning"><i class="fab fa-wpforms"></i> Admission Form</a>
              </div>
              <div class="col-sm-6">
                <a href="#" class="btn btn-success"><i class="fa fa-arrow-down"></i> Download Brochure</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Us End -->
  <!-- Courses -->
  <section class="content-wrapper course-grid" style="padding: 40px 0 20px;">
    <div class="container">
      <div class="title">
        <h2>Our Courses</h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="course-img">
              <div class="hover-img">
                <img alt="image" src="images/course-img1.jpg">
              </div>
              <ul class="area-time">
                <li>English / Odia</li>
              </ul>
            </div>
            <div class="caption">
              <h3><a href="javascript:void(0)">STENOGRAPHY & TYPE WRITING</a></h3>
              <p class="posted"><span>Courses Offered:</span> Stenography & Type Writing for Learning & Practice</p>
              <a href="admission.php" class="btn btn-warning">Apply Now</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="course-img">
              <div class="hover-img">
                <img alt="image" src="images/c2.jpg">
              </div>
            </div>
            <div class="caption">
              <h3><a href="javascript:void(0)">COMPUTER COURSE(S)</a></h3>
              <p class="posted"><span>Courses Offered:</span> DCA, PGDCA, TALLY, DTP, DEO, INTERNET</p>
              <a href="admission.php" class="btn btn-warning">Apply Now</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="course-img">
              <div class="hover-img">
                <img alt="image" src="images/c1.jpg">
              </div>
            </div>
            <div class="caption">
              <h3><a href="javascript:void(0)">COMPETITIVE COACHING</a></h3>
              <p class="posted"><span>Courses Offered:</span> SSC, BANKING, RAILWAY, DEFENCE, COURTS, SPOKEN ENGLISH</p>
              <a href="admission.php" class="btn btn-warning">Apply Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Courses -->
  <!-- Gallery Wrapper Start -->
  <section class="content-wrapper gallery-wrapper" style="padding: 60px 0 40px;">
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
                        <img src="Application/gallery/<?php echo $viewGalleryImage['galleryImage']; ?>" alt="Education" >
                    </a>
                    <div class="modal fade" id="<?php echo $i;  ?>" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">×</span></button>
                                <div class="modal-body"> <img src="Application/gallery/<?php echo $viewGalleryImage['galleryImage']; ?>" alt="education" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>  
        </div>
      </div>
    </div>
    <div class="container text-center">
      <a href="gallery.php" class="btn btn-warning btn-md">View More</a>
    </div>
  </section>
  <!-- Gallery Wrapper End -->
  <!-- Testimonials Wrapper Start -->
  <section class="testimonials-wrapper">
    <div class="container">
      <div class="title">
        <h2>What Student Say?</h2>
      </div>
      <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="testimonials">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" style="height: auto;">
          <div class="item active">
            <div class="row">
              <div class="col-sm-1"> <i class="fa fa-quote-left" aria-hidden="true"></i> </div>
              <div class="col-sm-10">
                <p>“ A Right Institute for every Students,
My second home,  A place of Peace, Prosperity & Adventure. ”

</p>
              </div>
              <div class="col-sm-1"><i class="fa fa-quote-right" aria-hidden="true"></i></div>
            </div>
            <img src="Application/images/6.png" alt="Education Career">
            <h4>Subhalaxmi Pradhan</h4>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-sm-1"> <i class="fa fa-quote-left" aria-hidden="true"></i> </div>
              <div class="col-sm-10">
                <p> “ An Institute of Hard working Teacher’s & Student’s opens everyday, the paradise of successors. ”</p>
              </div>
              <div class="col-sm-1"><i class="fa fa-quote-right" aria-hidden="true"></i></div>
            </div>
            
            <img src="Application/images/abinash.png" alt="Education Career">
            <h4>Abinash Mohapatra </h4>
          </div>
          
        </div>
        <div class="slide-arrows"><a class="left carousel-control" href="#testimonials" data-slide="prev"><span class="transition3s glyphicon glyphicon-chevron-left fa fa-angle-left"></span></a>
          <a class="right carousel-control" href="#testimonials" data-slide="next"><span class="transition3s glyphicon glyphicon-chevron-right fa fa-angle-right"></span></a></div>
      </div>
    </div>
  </section>
  <!-- Testimonials Wrapper End -->
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