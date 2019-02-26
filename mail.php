<?php

if(isset($_POST['submited'])){
  
   //Admin
$message='<table width="100%" align="center" cellpadding="0" cellspacing="0" style="width: 600px;font: normal 13px Arial,Helvetica,sans-serif;padding: 10px;background: #fff; border: 2px solid #ddd; padding-top:20px;">
    <tbody>
        <tr>
            <td align="center">
                <img src="http://jeipipli.com/images/logo-jei.png" alt="#" style="height:50px;margin-left:21px;">
            </td>
        </tr>
        <tr style="display:block;margin:21px">
            <td>Message is from <font color="#000">
                <b>'.$_REQUEST['firstName'].'</b>,</font>
                <br>
                <br>A New Online Contact Form Submission.
                <br>
                <br>Email : '.$_POST['email'].'
                <br>
                <br>Address : '.$_POST['address'].'
                <br>
                <br> Phone No : '.$_POST['phone'].'
                <br>
                <br>Message: '.$_REQUEST['message'].'
                <br>
                <br>
            </td>
        </tr>
        <tr style="display:block;margin:21px;"></tr>
    </tbody>
</table>';
              
                
        //customer      
$message2='<table width="100%" align="center" cellpadding="0" cellspacing="0" style="width: 600px;font: normal 13px Arial,Helvetica,sans-serif;padding: 10px;background: #fff; border: 2px solid #ddd;">
    <tbody>
        <tr>
            <td align="center">
                <img src="http://jeipipli.com/images/logo-jei.png" alt="#" style="height:50px;margin-left:21px">
            </td>
        </tr>
        <tr style="display:block;margin:21px">
            <td>Hi <font color="#000"><b>'.$_REQUEST['firstName'].'</b>,</font>
                <br>
                <br>Thanks for Enquiry We will get back you Soon. 
                <br>
                
                <br>Email : '.$_POST['email'].'
                <br>
                 <br>Address : '.$_POST['address'].'
                <br>
                <br> Phone No : '.$_POST['phone'].'
                <br>
                
                <br>Message: '.$_REQUEST['message'].'
                <br>
                <br>For any queries or assistance, please contact us at <a href="mailto: janani.educationalinstitute@gmail.com" target="_blank"> janani.educationalinstitute@gmail.com</a>
            </td>
        </tr>
        <tr style="display:block;margin:21px">
            <td>Regards,
                <br>Janani Education Institute</td>
        </tr>
    </tbody>
</table>';


            //customer  
           $to         = $_POST['email'];
            $subject    = 'Thank You for contacting us we will get back soon.'; 
            // To send HTML mail, the Content-type header must be set
            $headers[]  = 'MIME-Version: 1.0';
            $headers[]  = 'Content-type: text/html; charset=iso-8859-1';

            // Additional headers
            $headers[]  = 'To: '.$to;
            $headers[]  = 'From: Janani Education Institute<janani.educationalinstitute@gmail.com>';
            mail($to, $subject, $message2, implode("\r\n", $headers));



            //admin
            $subject = 'New Contact form Enquiry';
            $headers1[] = 'MIME-Version: 1.0';
            $headers1[] = 'Content-type: text/html; charset=iso-8859-1';

            // Additional headers
            //$headers1[] = 'To: Doctor '.$m;
            $headers1[] = 'From: Website Portal <info@saniotechnology.com>';
            
            // Mail it
            $flgchk = mail('partha@saniotechnology.com', $subject, $message, implode("\r\n", $headers1));
            
        
 
            if($flgchk) { ?>
                <script language="javascript" type="text/javascript">
                    alert('Thanks for your inquiry, we will get back to you soon');
                                         location.href = 'index.php';
                </script>
                <?php } else { 
                  echo "Error in Email sending";
                }
            }
            ?>