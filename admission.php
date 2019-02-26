<?php
include("Application/function.php");
$admin=new Admin();
$courses = $admin->viewCourses();
//$countRes = count($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admission Form - JANANI EDUCATIONAL INSTITUTE</title>
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
      <!----datepicker jquerycssfunction-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" rel="stylesheet" type="text/css" />
    <style>
                .multiselect {
          width: 100%;
        }
        
        .selectBox {
          position: relative;
        }
        
        .selectBox select.form-control {
          width: 100%;
          color: #999ca2;
        }
        
        .overSelect {
          position: absolute;
          left: 0;
          right: 0;
          top: 0;
          bottom: 0;
        }
        
        #checkboxes {
          display: none;
          border: 1px #dadada solid;
          position: absolute;
          width: 94%;
          top: 82%;
          left: 1.1em;
          background: white;
          z-index: 98;
        }
        
        #checkboxes label {
          display: block;
          margin-bottom: 5px;
          padding: 5px 10px;
          transition: .3s;
          cursor: pointer;
        }
        
        #checkboxes label:hover {
          background-color: #f5f5f5;
        }
        
        #checkboxes label input[type="checkbox"] {
            margin-right: 6px;
        }
    .errorfullName,.errorfatherName,.errormotherName,.errordateOfBirth,.errormobileNo,.erroremailId,.erroreducationalQualification,.errorNationality,.errorReligion,.erroradmissionDate,.errorSex,.errormartialStatus,.errorcourseSelect,.errortimePeriod,.errorpermanentAddress,.errorpresentAddress{color:red;display:none;} .red{color:red;}
    </style>
</head>

<body>
    <!-- Loader -->
    <?php include('header.php'); ?>
    <!-- Header End -->
    <!-- Content Wrapper Start -->
    <section class="content-wrapper contactus">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <div class="contact-form">
                        <h3 class="text-center">JANANI EDUCATIONAL INSTITUTE</h3>
                        
                        <!-- <p class="text-center" style="margin-bottom: 10px;">AT/PO: PIPLI, PURI, ODISHA</p> -->
                        <h3 class="text-center mb-50" style="text-decoration: underline;">ADMISSION FORM</h3>
                        <form id="registration" method="post" action="admissionInner.php" enctype="multipart/form-data" role="form" ><!-- autocomplete="off" -->
                            <div class="row text-right" >
                                <small style="float:right;text-transform: capitalize;color: red;font-size: 13px;">(* Indicates Mandatory)</small>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Full Name <span class="red">*</span></label>
                                        <input placeholder="Full Name" class="form-control textfield" name="fullName" id="fullName" type="text">
                                        <span class="errorfullName"> This Field is required.</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Father/Husband's Name <span class="red">*</span></label>
                                        <input placeholder="Father/Husband's Name" class="form-control textfield" name="fatherName" id="fatherName" type="text">
                                        <span class="errorfatherName"> This Field is required.</span>
                                    </div>      
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Mother's Name <span class="red">*</span></label>
                                        <input placeholder="Mother's Name" name="motherName"  id="motherName" class="form-control textfield" type="text">
                                        <span class="errormotherName"> This Field is required.</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Date of Birth <span class="red">*</span></label>
                                        <input class="form-control" type="text" name="dateOfBirth" id="dateOfBirth" placeholder="Date Of Birth">
                                        <span class="errordateOfBirth"> This Field is required.</span>
                                    </div>
                                </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Mobile No<span class="red">*</span></label>
                                        <input class="form-control" type="text" name="mobileNo" id="mobileNo" placeholder="Enter Your Mobile No" maxlength="10" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                        <span class="errormobileNo" > This Field is required.</span>
                                    </div>
                                </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email Id<span class="red">*</span></label>
                                        <input class="form-control" type="text" name="emailId" id="emailId" placeholder="Enter Your Email Id">
                                        <span class="erroremailId"> This Field is required.</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Educational Qualification <span class="red">*</span></label>
                                        <input class="form-control" placeholder="Educational Qualification" type="text" name="educationalQualification" id="educationalQualification">
                                        <span class="erroreducationalQualification"> This Field is required.</span>
                                    </div>
                                </div>
                              
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nationality <span class="red">*</span></label>
                                        <input placeholder="Nationality" class="form-control textfield" type="text" name="Nationality" id="Nationality">
                                        <span class="errorNationality"> This Field is required.</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Religion <span class="red">*</span></label>
                                        <input placeholder="Religion" class="form-control textfield" type="text" name="Religion" id="Religion">
                                        <span class="errorReligion"> This Field is required.</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Admission Date <span class="red">*</span></label>
                                        <input placeholder="Admission Date" class="form-control" type="text" name="admissionDate" id="admissionDate">
                                        <span class="erroradmissionDate"> This Field is required.</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Gender<span class="red">*</span></label>
                                         <select class="form-control" id="Sex" name="Sex">
                                        <option value="0">-- Select --</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                        <span class="errorSex"> This Field is required.</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Marital Status <span class="red">*</span></label>
                                        <select class="form-control" id="martialStatus" name="martialStatus">
                                        <option value="0">-- Select --</option>
                                        <option value="single">Single</option>
                                        <option value="married">Married</option>
                                    </select>
                                        <span class="errormartialStatus"> This Field is required.</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Course(s) want to learn</label>
                                      <div class="multiselect">
                                        <div class="selectBox" onclick="showCheckboxes()">
                                          <select class="form-control" name="selectCourse">
                                            <option>Select Course(s)</option>
                                          </select>
                                          <div class="overSelect"></div>
                                        </div>
                                        <div id="checkboxes">
                                            <?php foreach($courses as $course){ ?>
                                            <label>
                                                <input type="checkbox" class="selectCourse" value="<?php echo $course['courseName'];?>" name="selectCourse[]" /><?php echo $course['courseName'];?>
                                            </label>
                                            <?php } ?>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Time you want<span class="red">*</span></label>
                                        <input placeholder="Time you want" class="form-control" type="text" name="timePeriod" id="timePeriod">
                                        <span class="errortimePeriod"> This Field is required.</span>
                                    </div>
                                </div>
                               
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label style="width: 100%;">Permanent Address</label>
                                        <textarea class="form-control" placeholder="Permanent Address" name="permanentAddress" id="permanentAddress"></textarea>
                                         <span class="errorpermanentAddress"> This Field is required.</span>
                                    </div>
                                </div>
                               
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label style="width: 100%;">Present Address
                                            <span style="float: right;">
                                                <input type="checkbox">
                                                <small style="font-weight:200;">same as permanent</small>
                                            </span>
                                        </label>
                                        <textarea class="form-control" placeholder="Present Address" name="presentAddress" id="presentAddress"></textarea>
                                        <span class="errorpresentAddress"> This Field is required.</span>
                                    </div>
                                </div>
                                <!--<div class="col-sm-6">
                                    <div class="form-group">
                                        <label style="width: 100%;">Upload Photo</label>
                                        <input type="file" name="" id="" class="form-control">
                                        <span class=""> This Field is required.</span>
                                    </div>
                                </div>-->
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label for="exampleInputPassword1"> Declaration<span style="color: #f00;">*</span></label>
                                    <div class="pull-left text-left">
                                        <input type="checkbox" required="" id="agree" class="form-check-input"> I, further declare that, my apllication may be cancelled, at any stage, if I am found ineligible and/or the informations provided by me are found to be incorrect.
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-50 text-center">
                                    <div class="form-group">
                                        <button type="submit" class="btn" name="submit" id="btnSubmit">Submit Form</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js" type="text/javascript"></script>
</body>
<script>
    $(document).ready(function(){

              $("#dateOfBirth").datepicker({ 
                  dateFormat: 'yy-mm-dd',
                  changeMonth: true,
                  changeYear: true,
                  yearRange: '1950:2019',
              });
               $("#admissionDate").datepicker({ 
                  dateFormat: 'yy-mm-dd',
                  changeMonth: true,
                  changeYear: true,
                  yearRange: '1950:2019',
              });
            });
        $('.textfield').keypress(function(e){
            var inputValue = e.which;
            // allow letters and whitespaces only.
            if(!(inputValue >= 65 && inputValue <= 122) && (inputValue != 32 && inputValue != 0)) {
                return false; 
            }
        });

         var expanded = false;

        function showCheckboxes() {
          var checkboxes = document.getElementById("checkboxes");
          if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;
          } else {
            checkboxes.style.display = "none";
            expanded = false;
          }
        }
        $('#fullName').focus();

        $('#btnSubmit').click(function(event) 
            {
                
              var errFlag = 0;
              var name                      = $('#fullName').val();
              var fatherName                = $('#fatherName').val();
              var motherName                = $('#motherName').val();
              var dateOfBirth               = $('#dateOfBirth').val();
              var mobileNo                  = $('#mobileNo').val();
              var emailId                   = $('#emailId').val();
              var educationalQualification  = $('#educationalQualification').val();
              var Nationality               = $('#Nationality').val();
              var Religion                  = $('#Religion').val();
              var admissionDate             = $('#admissionDate').val();
              var Sex                       = $("#Sex option:selected").val();
              var martialStatus             = $("#martialStatus option:selected").val();
              var courseSelect              = $("#courseSelect option:selected").val();
              var timePeriod                = $('#timePeriod').val();
              var permanentAddress          = $('#permanentAddress').val();
              var presentAddress            = $('#presentAddress').val();
              var pattern = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
              var filter = /^[7-9][0-9]{9}$/;
              var splArr = ["%", "<", ">", "'", "\\","\"" ];
               
              if(name==""){
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

              if(motherName==""){
                errFlag++;
                $('.errormotherName').css('display','block');
                $('#motherName').css('border-color','#F04938');             
              } else{
                    $('.errormotherName').hide();
                    $('#motherName').css('border-color','');
              }

              if(dateOfBirth==""){
                errFlag++;
                $('.errordateOfBirth').css('display','block');
                $('#dateOfBirth').css('border-color','#F04938');             
              } else{
                    $('.errordateOfBirth').hide();
                    $('#dateOfBirth').css('border-color','');
               }

               if(mobileNo == '') {
                    errFlag++;
                    $('#mobileNo').css('border-color','#F04938');
                    $('.errormobileNo').css('display','block');
                }
                else if (filter.test(mobileNo))
                {
                    $('#mobileNo').css('border-color','');
                    $('.errormobileNo').hide();
                }
                else {
                    errFlag++;
                    $('#mobileNo').css('border-color','#F04938');
                    $('.errormobileNo').html('Please enter a valid Mobile');
                    $('.errormobileNo').show();
                } 

                if(emailId == ''){
                errFlag++;
                $('#emailId').css('border-color','#F04938');
                $('.erroremailId').css('display','block');
                }
                else if (pattern.test(emailId)==true) {
                    $('#emailId').css('border-color','');
                    $('.erroremailId').hide();
                }
                else {
                    errFlag++;
                    $('#emailId').css('border-color','#F04938');
                    $('.erroremailId').html('Please enter a valid email address');
                    $('.erroremailId').show();
                }

               if(educationalQualification==""){
                errFlag++;
                $('.erroreducationalQualification').css('display','block');
                $('#educationalQualification').css('border-color','#F04938');             
              } else{
                    $('.erroreducationalQualification').hide();
                    $('#educationalQualification').css('border-color','');
               }    

                if(Nationality==""){
                errFlag++;
                $('.errorNationality').css('display','block');
                $('#Nationality').css('border-color','#F04938');             
              } else{
                    $('.errorNationality').hide();
                    $('#Nationality').css('border-color','');
               }

               if(Religion==""){
                errFlag++;
                $('.errorReligion').css('display','block');
                $('#Religion').css('border-color','#F04938');             
              } else{
                    $('.errorReligion').hide();
                    $('#Religion').css('border-color','');
               }

               if(admissionDate==""){
                errFlag++;
                $('.erroradmissionDate').css('display','block');
                $('#admissionDate').css('border-color','#F04938');             
              } else{
                    $('.erroradmissionDate').hide();
                    $('#admissionDate').css('border-color','');
               }

               if(Sex==0){
                errFlag++;
                $('.errorSex').css('display','block');
                $('#Sex').css('border-color','#F04938');             
              } else{
                    $('.errorSex').hide();
                    $('#Sex').css('border-color','');
               }

               if(martialStatus==0){
                errFlag++;
                $('.errormartialStatus').css('display','block');
                $('#martialStatus').css('border-color','#F04938');             
              } else{
                    $('.errormartialStatus').hide();
                    $('#martialStatus').css('border-color','');
               }

               if(courseSelect==0){
                errFlag++;
                $('.errorcourseSelect').css('display','block');
                $('#courseSelect').css('border-color','#F04938');             
              } else{
                    $('.errorcourseSelect').hide();
                    $('#courseSelect').css('border-color','');
               }

               if(timePeriod==""){
                errFlag++;
                $('.errortimePeriod').css('display','block');
                $('#timePeriod').css('border-color','#F04938');             
              } else{
                    $('.errortimePeriod').hide();
                    $('#timePeriod').css('border-color','');
               }
               if(permanentAddress==""){
                errFlag++;
                $('.errorpermanentAddress').css('display','block');
                $('#permanentAddress').css('border-color','#F04938');             
              } else{
                    $('.errorpermanentAddress').hide();
                    $('#permanentAddress').css('border-color','');
               }
               if(presentAddress==""){
                errFlag++;
                $('.errorpresentAddress').css('display','block');
                $('#presentAddress').css('border-color','#F04938');             
              } else{
                    $('.errorpresentAddress').hide();
                    $('#presentAddress').css('border-color','');
               }

              if(errFlag > 0) {       
                    alert("Mandatory field cannot be blank.");
                    return false;
                }
                else {
                  var checkBox = document.getElementById("agree");
                  if (checkBox.checked == false){
                    alert("Please agree the terms & condition.");
                    return false;
                  } else{
                    var rr = confirm("Are you sure you want to submit ? ");
                    if(rr){
                      $('form').submit();
                    }
                    else{
                      return false;
                    }
                  }
                }
         });


</script>
</html>