
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Contact Us - JANANI EDUCATIONAL INSTITUTE</title>
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
<style>
  .errorfirstName,.erroraddress,.erroremail,.errorphone{color:red;display:none;}
</style>

<body>
  <!-- Loader -->
  <?php include('header.php'); ?>
  <!-- Header End -->
  <!-- Content Wrapper Start -->
  <section class="content-wrapper contactus">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <div class="contact-address">
            <h2>Contact Details</h2>
            <div class="cnt-details">
              <div class="row">
                <div class="col-sm-5"> <i class="fa fa-phone"></i> Phone<br>
                  <p> +91 9556 6666 50<br>+91 6758 2401 98 </p>
                </div>
                <div class="col-sm-7"> <i class="fa fa-envelope"></i> Email<br>
                  <p> <a href="mailto:janani.educationalinstitute@gmail.com">janani.educationalinstitute@gmail.com</a>
                    <br><a href="mailto:inst.edu.janani@gmail.com">inst.edu.janani@gmail.com</a>
                    <br><a href="mailto:joborienteds6@gmail.com">joborienteds6@gmail.com</a></p>
                </div>
                <div class="col-sm-12">
                  <div class="address"><i class="fa fa-map-marker" aria-hidden="true"></i> Address <br>
                    <p>JAYAPUR KILLA, PLOT NO.420/476,
                      COURT CHHAKA, P.O/P.S-PIPLI,
                      DIST-PURI, ODISHA, PIN-752104</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="contact-form">
            <h2>Send Inquiry</h2>
            <form action="mail.php" role="form" id="contactForm"  method="post">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" name="firstName" id="firstName" class="form-control" placeholder="Full Name" type="text">
                      <span class="errorfirstName" id="errorfirstName"> This Field is required.</span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" name="address" id="address" class="form-control" placeholder="Address" type="text">
                    <span class="erroraddress" id="erroraddress"> This Field is required.</span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" name="email" id="email" class="form-control" placeholder="Enter email" type="email">
                    <span class="erroremail" id="erroremail"> This Field is required.</span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number" type="text" maxlength="10">
                    <span class="errorphone" id="errorphone"> This Field is required.</span>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <textarea class="form-control" name="message"  placeholder="Write message"></textarea>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <button type="submit" name="submited" id="Submited" class="btn">Submit</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        <h2>Find Us</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29972.25336383776!2d85.832609!3d20.111855!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5cc980757a5e00ff!2sJANANI+EDUCATIONAL+INSTITUTE!5e0!3m2!1sen!2sin!4v1540987869013"
          width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
  <script>
      $('#Submited').click(function(event) 
        {
            //event.preventDefault();       
            var errFlag = 0;
            var firstName               = $('#firstName').val();
            var address                = $('#address').val();
            var email                   = $('#email').val();
            var phone                   = $('#phone').val();
            var pattern = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
            var filter = /^[6-9][0-9]{9}$/;
            var splArr = ["%", "<", ">", "'", "\\","\"" ];



            if(firstName==""){
                errFlag++;
                $('.errorfirstName').css('display','block');
                $('#firstName').css('border-color','#F04938');                           
            } else{
                $('.errorfirstName').hide();
                $('#firstName').css('border-color','');
            }
            if(address==""){
                errFlag++;
                $('.erroraddress').css('display','block');
                $('#address').css('border-color','#F04938');                           
            } else{
                $('.erroraddress').hide();
                $('#address').css('border-color','');
            }
            if(email == ''){
            errFlag++;
            $('#email').css('border-color','#F04938');
            $('.erroremail').css('display','block');
        }
        else if (pattern.test(email)==true) {
            $('#email').css('border-color','');
            $('.erroremail').hide();
      }
      else {
            errFlag++;
            $('#email').css('border-color','#F04938');
            $('.erroremail').html('Please enter a valid email address');
            $('.erroremail').show();
        } 
      if(phone == '') {
            errFlag++;
            $('#phone').css('border-color','#F04938');
            $('.errorphone').css('display','block');
        }
        else if (filter.test(phone))
        {
            $('#phone').css('border-color','');
            $('.errorphone').hide();
        }
        else {
            errFlag++;
            $('#phone').css('border-color','#F04938');
            $('.errorphone').html('Please enter a valid Mobile');
            $('.errorphone').show();
        } 
        
             if(errFlag > 0) {               
                alert("Mandatory field cannot be blank.");
                return false;
            }
            
                 else{
                    var rr = confirm("Are you sure you want to submit ? ");
                    if(rr){
                        $('#contactForm').submit();
                    }
                    else{
                        return false;
                    }
                }
                
            
        });
  </script>
</body>

</html>