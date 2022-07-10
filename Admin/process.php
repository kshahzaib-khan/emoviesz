
<?php
session_start();
include("pkcon.php");
if(isset($_POST['login'])){
    $email = $_POST['email_id'];
    $password = $_POST['password'];

    $email_search = "SELECT  * FROM admin WHERE email_id ='{$email}' AND status = 'active' ";


     $query = mysqli_query($con,$email_search);

     $email_count = mysqli_num_rows($query);


     if($email=='' || $password==''){
      $_SESSION['error_msg']="all fields are required !";
      header("location:login.php"); 
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
          header("location:login.php"); 
        }
        }else{
          $_SESSION['error_msg'] = 'Invalid Email Or Number';
          header("location:login.php"); 
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