
<?php
session_start();
include_once('pkcon.php');


if(isset($_POST['login'])){
    $email = $_POST['email_id'];
    $password = $_POST['password'];

    $email_search = "SELECT  * FROM admin WHERE email_id ='{$email}' AND status = 'active' ";


     $query = mysqli_query($con,$email_search);

     $email_count = mysqli_num_rows($query);


     if($email=='' || $password==''){
      $_SESSION['error_msg']="all fields are required !";
     }else{
     if($email_count){
       $email_pass = mysqli_fetch_assoc($query);
       $db_pass = $email_pass['password'];

       $_SESSION['username'] = $email_pass['full_name'];
       $_SESSION['email'] = $email_pass['email_id'];


 
        $pass_decode = password_verify($password, $db_pass);

        if($pass_decode){

       if(isset($_POST["remember"]))   
       {  
    setcookie('email_cookie',$email,time()+30); 
    setcookie('password_cookie',$password,time()+30);
     }  
      else  
       {  
    setcookie('email_cookie',$email,30); 
    setcookie('password_cookie',$password,30);

   }  
   header("location:islamic.php"); 
         
        }else{
          $_SESSION['error_msg'] = 'password Incorrect';
        
        }
        }else{
          $_SESSION['error_msg'] = 'Plaese Enter Invalid Email';
         
        }

        
      }
      
     }
     $email_cookie ='';
     $password_cookie ='';
     $set_remember = '';
     if(isset($_COOKIE['email_cookie']) && isset($_COOKIE['password_cookie'])){
      $email_cookie =$_COOKIE['email_cookie'];
      $password_cookie=$_COOKIE['password_cookie'];
      $set_remember="checked='checked'";
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
    
    <!-- <a id="skippy" class="sr-only sr-only-focusable" href="#content">
      <div class="container">
        <span class="skiplink-text">Skip to main content</span>
      </div>
    </a> -->
    <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only"></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
              </button>
            
              <div class="logo" class="navbar-brand navbar-brand-logo">
            <img src="img/logo.png" alt="" class="img-responsive">
          </div>
            </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li class=""><a href="index.php"><i class="pe-7s-home"></i><p>Home</p></a></li>
        <li><a href="islamic.php"><i class="kaaba-mecca"></i><p>Islamic</p></a></li> 
              <li><a href="software.php"><i class="pe-7s-download"></i><p>Softwares</p></a></li> 
              <li><a href="games.php"><i class="pe-7s-joy"></i><p>Games</p></a></li>
              
              <li><a href="movies.php"><i class="pe-7s-film"></i><p>Movies</p></a></li>
              <li><a href="video.php"><i class="pe-7s-play"></i><p>Videos</p></a></li>
        <li><a href="music.php"><i class="pe-7s-music"></i><p>Music</p></a></li>
        <li><a href="onlinegame.php"><i class="pe-7s-compass"></i><p>Online Games</p></a></li>
        <li><a href="wallpaper.php"><i class="pe-7s-photo-gallery"></i><p>Wallpapers</p></a></li>
        <li><a href="webtv.php"><i class="pe-7s-airplay"></i><p>Web TV</p></a></li>
          <li><a href="mobileapp.php" style="border-radius: 4px;"><i class="fa fa-android" style="font-size:35px;position: relative;"></i><p>Mobi App</p></a></li>
          <!-- <li><a href="mobileapp.html" target="_blank" style="border-radius: 4px;"><i class="fa fa-android" style="font-size:35px;position: relative;"></i><p>Mobi App</p></a></li> -->
        
        <li class="active loginbtn"><a><i class="pe-7s-lock"></i><p>Lock</p></a></li>


      </ul>
        </div><!-- /.navbar-collapse -->

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
       
   <div class="form-group inptroun inpht" style="margin-bottom: 20px;">
           <i class="fa fa-user" aria-hidden="true"></i>
          <input type="text" class="form-control inth"placeholder="Enter Email" name="email_id" value="<?php echo $email_cookie ?>">
        </div>
    <div class="form-group inptroun inpht">
       <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" class="form-control inth" placeholder="Password" name="password" value="<?php  echo $password_cookie ?>">
        </div>        
        <div class="form-group">
           <button type="submit" name="login" class=" btn logbt"><i class="fa fa-sign-in" aria-hidden="true" ></i>Login</button>
        </div>
    <div class="clearfix">
            <label class="pull-left checkbox-inline">
              <input type="checkbox" name="remember" <?php echo $set_remember ?> /> Remember me</label>
            <a href="recover_email.php"class="pull-right lftmrg">Change Password?</a>
          

        </div>
    </form>
  
</div>



    


	
        


              <footer class="margin-tb-3">
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

       