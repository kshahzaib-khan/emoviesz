<?php
    
                      // $servername="localhost";
                      //  $username="root";
                      //  $paswordname="";
                      //  $dbname="ebravo";

                      //    $con=mysqli_connect($servername, $username, $paswordname,$dbname);




                      $con=mysqli_connect('localhost','root','','emoviesz');

if (!$con) 


{
	die('please check your connection'.mysqli_error($con));
}

// if($con)

//   {
//   	 echo" connection is ok";
//   }
//    else{
//    	  echo " connection is not ok";
//    }


?>

  