
<?php
session_start();
include_once('pkcon.php');

if(isset($_POST['recover_email'])){

 
  $email_id = mysqli_real_escape_string($con,$_POST['email_id']);
 


    $email_select = " SELECT * FROM admin WHERE email_id = '{$email_id}' ";

     $query=mysqli_query($con,$email_select);


      $emailcount = mysqli_num_rows($query);

      if( $email_id==''){

        $_SESSION['error_msg']="fields are required !";
    }else{

         
            if($emailcount){

              $userdata = mysqli_fetch_array($query);
              $username = $userdata['full_name'];
              $token = $userdata['token'];

                        $subject = 'Reset Password';
                        $body = 'Hi, $full_name. Click here to Reset  your password http://localhost/php_register_crypto/reset_password.php?token=$token';
                        $sender_email = 'From: ';
                        if(mail($email_id, $subject, $body, $sender_email)){
                          $_SESSION['success_msg'] = 'check you mail to reset password $email_id...';
                          header('location:login.php');
                        }else{
                          $_SESSION['error_msg'] = 'Email sending failed';
                        }
              // $_SESSION['success_msg'] = 'User Register Successfully';
              
            }else{
              $_SESSION['error_msg'] = ' Enter your Correct Email';
              
            }
           
    }
         
           }
         ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>eMoviesz.pk  | login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Description" lang="en" content="ADD SITE DESCRIPTION">
		<meta name="author" content="ADD AUTHOR INFORMATION">
		<meta name="robots" content="index, follow">
    <link rel="icon" href="icon/favicon.ico" sizes="90x90">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   <link href="pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="css/Enavigatonbar.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
    
    <script src="js/jquery-3.3.1.min.js"></script>
 <script src="js/bootstrap.js"></script>
<script src="js/ct-navbar.js"></script>
	</head>
  <style>
  @media(max-width:369px){
#uplod button{
font-size: 10px!important;
margin-left:-100px!important; 
}

}
  </style>
	<body class="bgcolor">
 

  <nav class="navbar navbar-ct-red navbar-fixed-top" role="navigation">
   
    <div class="container">
            <div class="navbar-header">
            <img src="img/logo.png" alt="" class="img-responsive">
            </div>
        </div><!-- /.container-fluid -->   

   
        </nav>


        
 <br><br>


<div class="login-form">
<form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
    <div class="avatar">
      <img src="img/face.png">  
    
       </div>
<div style="margin-top:40px; text-align:center; font-size:17px;">


  <?php
     if(isset($_SESSION['error_msg']) && $_SESSION != ''){

      ?>
     
      <div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
   <?php echo $_SESSION['error_msg'];?>
</div>
      <?php
        unset($_SESSION['error_msg']);
   }
  ?>
      
</div>
<label for="exampleInputEmail1" class="form-label">Email</label>
   <div class="form-group inptroun inpht" style="margin-bottom: 20px;">
           <i class="fa fa-user" aria-hidden="true"></i>
          <input type="text" class="form-control inth"placeholder="Enter Your Email" name="email_id">
        </div> 
        
      
        <div class="form-group">
           <button type="submit" name="recover_email" class=" btn logbt"><i class="fa fa-sign-in" aria-hidden="true" ></i>Send</button>
        </div>
    
    </form>
  
</div>


              <footer class="margin-tb-3" style="margin-top:58px;">
              <div class="container">
        <div class="row">
            
          <div class="col-xs-12 ftmrg">
<center><h5>Copyrights © 2019 - 2020 emoviez.Pk. All Rights Reserved and developer by Shahzaib khan.</h5></center>
</div>
        </div>
    </div>
    </footer>
  </body>
</html>

       