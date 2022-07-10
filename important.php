<?php
include "pkcon.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>eMoviesz.pk  | software</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" lang="en" content="ADD SITE DESCRIPTION">
    <meta name="author" content="ADD AUTHOR INFORMATION">
    <meta name="robots" content="index, follow">

    <link rel="icon" href=" icon/favicon.ico" sizes="90x90">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
    <link href="pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" />
     <link rel="stylesheet" type="text/css" href="css/Enavigatonbar.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/ct-navbar.js"></script>
     </head>
<body class="bgcolor">

<nav class="navbar navbar-ct-red navbar-fixed-top" role="navigation">
 
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
              <li ><a href="index.php"><i class="pe-7s-home"></i><p>Home</p></a></li>
        <li class=""><a href="islamic.php"><i class="kaaba-mecca"></i><p>Islamic</p></a></li> 
              <li class="active"><a href="software.php"><i class="pe-7s-download"></i><p>Softwares</p></a></li> 
              <li><a href="games.php"><i class="pe-7s-joy"></i><p>Games</p></a></li>
             
              <li><a href="movies.php"><i class="pe-7s-film"></i><p>Movies</p></a></li>
              <li><a href="video.php"><i class="pe-7s-play"></i><p>Videos</p></a></li>
        <li><a href="music.php"><i class="pe-7s-music"></i><p>Music</p></a></li>
        <li><a href="onlinegame.php"><i class="pe-7s-compass"></i><p>Online Games</p></a></li>
        <li><a href="wallpaper.php"><i class="pe-7s-photo-gallery"></i><p>Wallpapers</p></a></li>
        <li><a href="webtv.php"><i class="pe-7s-airplay"></i><p>Web TV</p></a></li>
          <li><a href="mobileapp.php" style="border-radius: 4px;"><i class="fa fa-android" style="font-size:35px;position: relative;"></i><p>Mobi App</p></a></li>
       
        <li><a href="javascript:void(0);" data-toggle="search"><i class="pe-7s-search"></i><p>Search</p></a></li>
      </ul>
        </div><!-- /.navbar-collapse -->

        </div><!-- /.container-fluid -->   
    
    <form action="search" method="get" class="navbar-form navbar-right navbar-search-form" role="search">
        <div class="form-group">
            <input type="text" value="" class="form-control srchinptclr" style="width: 600px; box-shadow: none;" name="s" placeholder="Search...">
        </div>
      <button class="btn btn-primary btn-just-icon"><i class="pe-7s-search"></i></button>
        </form>
        </nav>








<br><br><br><br><br><br>
         
       <div class="main2 hidden-sm hidden-xs containerSearchEngine">
    <br>
   <div class="container">
      <form method="get" class="navbar-form2"id="search-form" accept-charset="utf-8">
      <div class="form-group" style="display:inline;">
        <div class="input-group">

          <span class="input-group-btn">
          <select name="Allcate" class="btn2331">
          <option>All Categories</option>
           <option value="Graphics">Graphics</option>
           <option value="Office">Office</option>
           <option value="Anti-Malware">Anti-Malware</option>
           <option value="MacOS">MacOS</option>
           <option value="Operating System">Operating System</option>
           <option value="Desktop,">Desktop</option>
           <option value="Network Tools">Network Tool</option>
           <option value="Internet Tools">Internet Tool</option>
          </select> 
          </span>   

         
          
          
      <div class="input-group center-block">
      <input class="form-control" id="search-input2" name="search_query" type="text" placeholder="search Software" autocomplete="off">
      <div class="suggestresult"></div>
      </div>
      <div class="input-group-btn navbar-btn"><button class="btn btn-default btn-nav go">GO</button>
      </div>

        </div>
      </div>
      </form>
      </div>

  </div>
  <!-- End Desktop Search Engine -->
   
      
  <!-- Start Mobile Search Engine -->

    <div class="main2 visible-sm visible-xs mbht containerSearchMobileEngine">
      <div class="container">
      <form action="movies" method="get" class="navbar-form2" name="search-form" id="search-form"  accept-charset="utf-8">
      <div class="form-group" style="display:inline;">
        <div class="input-group">
          <span class="input-group-btn" style="padding-bottom: 4px; padding-top: 11px;">
          <select name="Allcate" style="padding: 0px 0px 0px 4px;border-radius: 4px 4px 4px 4px;" class="form-control">
           <option>All Categories</option>
           <option value="Graphics">Graphics</option>
           <option value="Office">Office</option>
           <option value="Anti-Malware">Anti-Malware</option>
           <option value="MacOS">MacOS</option>
           <option value="Operating System">Operating System</option>
           <option value="Desktop,">Desktop</option>
           <option value="Network Tools">Network Tool</option>
           <option value="Internet Tools">Internet Tool</option>      
              </select>
          </span>
        </div>
        <div class="input-group"> 
          <div class="input-group center-block">
              <input action="movies" class="form-control" id="search-input2" name="k" class="search-input" type="text" placeholder="search Software" style="padding: 5px;border-radius: 4px 0px 0px 4px;">
          </div>
            <div class="input-group-btn navbar-btn"><button class="btn btn-default btn-nav go">GO</button></div>
        </div>
      </div>
      </form>
      </div>
    </div>
    <!-- End Mobile Search Engine --> 
    
        
    <?php  

$page_no = isset($_GET['page_no']) && is_numeric($_GET['page_no']) ? $_GET['page_no'] : 1;


$total_records_per_page = 12;






$result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM `software`");
	$total_records = mysqli_fetch_array($result_count);
	$total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
	$second_last = $total_no_of_pages - 1; // total page minus 1


	if ($page_no < 1) { 
		$page_no = 1; 
	} else if ($page_no> $total_no_of_pages) { 
		$page_no = $total_no_of_pages; 
	}




	$offset = ($page_no-1) * $total_records_per_page;
	$previous_page = $page_no - 1;
	$next_page = $page_no + 1;
	$adjacents = "2";


$character = '';  
if(isset($_GET["character"]))  
{  
     $character = $_GET["character"];  
     $character = preg_replace('#[^a-z]#i', '', $character);  
     $query = "SELECT * FROM software WHERE Keywords LIKE '$character%'";  
}  
else  
{  
     $query = "SELECT * FROM software ORDER BY id DESC  limit $offset, $total_records_per_page";  
}  
$result = mysqli_query($con, $query);  
?> 


    
    <div class= "container" style="background-color:white"><!-- main container start -->
      
      <div class="row"> <!--  all center data main row start -->
        <div class="col-sm-8 fwd">


                  <div class="moveis1 ">
        <div class="panel panel-default LatestMovies mbsmgtp">
         <div class="panel-heading MLfonts"> <span class="toll" data-toggle="tooltip" title="Software">Software</span> › All Random </div>
        <div class="btn-group btn-group-sm" style="top:-1px;">
        
          <li class="btn btn-default sbty ">SORT BY:</li>
          
 <li class="btn btn-default pgbt66"><a href="software.php?q=num" class="">0-9</a></li>

  

  <?php  
       $character = range('A', 'Z');  
          // echo '<ul class="pagination ">';  
      foreach($character as $alphabet)  
        {  
     echo '<li class="btn btn-default pgbt6"><a href="software.php?character='.$alphabet.'">'.$alphabet.'</a></li>';  
          }  
                         // echo '</ul>';  
      ?> 
  </div> 




 <span class="input-group-btn btn-block floatrightinput">
    <select class="btn btn-category btn-default dropdown-toggle" style="width: 100px;border-radius: 0px 4px 4px 0px;" id="sort_order" name="cat">
    <option value="Recent">Recently Added</option>
    <option value="NewRel">New Released</option>
    <option value="TopRated">Top Rated</option>
    <option value="MostView">Most Views</option>
    <option value="MostDownload">Most Download</option>
    <option value="Title">By Title</option>
    </select>
    </span>

        <!-- <div class="panel-body adbttpmg" style="background-color:white;padding-top: 28px;"> -->
          <div class="panel-body adbttpmg" style="background-color:white;">
              

           <div class="row" ><!-- Start of Software row> -->


           <?php
          
     if(isset($_POST['search_query'])){
         
     $result = mysqli_query($con, $query) or die('error');
     if(mysqli_num_rows($result) > 0){
       while($row = mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $poster=$row['poster'];
            $name=$row['Keywords'];
            $Add_Date=$row['Add_Date']; 
            $View=$row['Views']; 
            $Download_Rate=$row['Download_Rate'];
      
      
        

        ?>
     
     <div class="thumb col-sm-2 col-xs-12">
            <!-- <a href="moviepreview-17082.html"> -->
            <a href="Softwarepreview.php?id=<?php echo $id; ?>">
            <div class="col-item">
              <div class="photo col-sm-12 col-xs-5">
              <?php echo "<img src='Admin/Alluploadfolder/softposter/$poster' class='img-responsive poster posternonround' alt=''>"?>

                <!-- <img src="software/s1.jpg" class="img-responsive poster posternonround" alt="VMware Workstation "> -->
                </div>
              <div class="info col-sm-12 col-xs-7 textopmrgsoftwarepg">
              <h6 class="category text-rose textsoft" title='<?php echo $name;?>' ><?php echo $name;?></h6>

                <!-- <h6 class="category text-rose textsoft" title="VMware Workstation ">VMware Workstation </h6> -->
                <div class="row">   
                 <div class="col-xs-9 infohdtopgapsoft">
                  <div class="infohd">AD : <?php echo $Add_Date;?></div>
                  <div class="infohd">View : <?php echo $View;?></div>
                  <div class="infohd">Download : <?php echo $Download_Rate;?></div>
                  </div>
                 
                </div>
              </div>
            </div></a>
          </div>  
        <?php
       }

     }
      else{
        ?>
        <tr>
        <td>Record Not Found</td>
        </tr>  
        <?php 
      }
       
      }
   else{
          if(isset($_GET['search_query']) && isset($_GET['Allcate'])){


            
    $search_query=$_GET['search_query'];                      
    $Allcate=$_GET['Allcate']; 
 
  
   if($search_query != ""  || $Allcate != ""){

   $query = "SELECT * FROM software WHERE Keywords LIKE '%{$Allcate}%'";
    
     $result = mysqli_query($con, $query) or die('error');
     if(mysqli_num_rows($result) > 0){
       while($row = mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $poster=$row['poster'];
        $name=$row['Keywords'];
        $Add_Date=$row['Add_Date']; 
        $View=$row['Views']; 
        $Download_Rate=$row['Download_Rate'];
      
        

        ?>
        
        <div class="thumb col-sm-2 col-xs-12">
            <!-- <a href="moviepreview-17082.html"> -->
            <a href="Softwarepreview.php?id=<?php echo $id; ?>">
            <div class="col-item">
              <div class="photo col-sm-12 col-xs-5">
              <?php echo "<img src='Admin/Alluploadfolder/softposter/$poster' class='img-responsive poster posternonround' alt=''>"?>

                <!-- <img src="software/s1.jpg" class="img-responsive poster posternonround" alt="VMware Workstation "> -->
                </div>
              <div class="info col-sm-12 col-xs-7 textopmrgsoftwarepg">
              <h6 class="category text-rose textsoft" title='<?php echo $name;?>' ><?php echo $name;?></h6>

                <!-- <h6 class="category text-rose textsoft" title="VMware Workstation ">VMware Workstation </h6> -->
                <div class="row">   
                 <div class="col-xs-9 infohdtopgapsoft">
                  <div class="infohd">AD : <?php echo $Add_Date;?></div>
                  <div class="infohd">View : <?php echo $View;?></div>
                  <div class="infohd">Download : <?php echo $Download_Rate;?></div>
                  </div>
                 
                </div>
              </div>
            </div></a>
          </div>  
        <?php
       }

     }
      else{
        ?>
        <tr>
        <td>Record Not Found</td>
        </tr>  
        <?php 
      }
    }
    }  else{
      $query = "SELECT * FROM software";
    
      $result = mysqli_query($con, $query) or die('error');
      if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
         $id=$row['id'];
         $poster=$row['poster'];
         $name=$row['Keywords'];
         $Add_Date=$row['Add_Date']; 
         $View=$row['Views']; 
         $Download_Rate=$row['Download_Rate'];
       
         
 
         ?>
         
         <div class="thumb col-sm-2 col-xs-12">
             <!-- <a href="moviepreview-17082.html"> -->
             <a href="Softwarepreview.php?id=<?php echo $id; ?>">
             <div class="col-item">
               <div class="photo col-sm-12 col-xs-5">
               <?php echo "<img src='Admin/Alluploadfolder/softposter/$poster' class='img-responsive poster posternonround' alt=''>"?>
 
                 <!-- <img src="software/s1.jpg" class="img-responsive poster posternonround" alt="VMware Workstation "> -->
                 </div>
               <div class="info col-sm-12 col-xs-7 textopmrgsoftwarepg">
               <h6 class="category text-rose textsoft" title='<?php echo $name;?>' ><?php echo $name;?></h6>
 
                 <!-- <h6 class="category text-rose textsoft" title="VMware Workstation ">VMware Workstation </h6> -->
                 <div class="row">   
                  <div class="col-xs-9 infohdtopgapsoft">
                   <div class="infohd">AD : <?php echo $Add_Date;?></div>
                   <div class="infohd">View : <?php echo $View;?></div>
                   <div class="infohd">Download : <?php echo $Download_Rate;?></div>
                   </div>
                  
                 </div>
               </div>
             </div></a>
           </div>  
         <?php
        }
 
      }
    }
   }
   
       
       
      ?>



         

           
           </div>  <!-- End of Software row --> 
            
          
             
             <center>Page  <?php echo $page_no." of ".$total_no_of_pages; ?> <br>
          <!-- <div class="page-nation"> <ul class="pagination pagination-sm" ><li class="active"><span>1</span></li><li><a href="softwares?page=2" >2</a></li><li><a href="softwares?page=3">3</a></li><li><a href="softwares?page=4">4</a></li><li><a href="softwares?page=5">5</a></li><li><a href="softwares?page=6">6</a></li><li><a href="softwares?page=7">7</a></li><li><a href="softwares?page=8">8</a></li> <li><a href="softwares?page=2"><i class="fa fa-arrow-right arrowright" aria-hidden="true""></i></a></li></ul>
           </div> -->
           <div class="page-nation"> 
           <ul class="pagination pagination-sm"">
           <?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>
    
    <li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
    <a <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?><i class="fa fa-arrow-left arrowright" aria-hidden="true""></i></a>
    </li>
         
      <?php 
    if ($total_no_of_pages <= 10){  	 
      for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
        if ($counter == $page_no) {
         echo "<li class='active'><span>$counter</span></li>";	
          }else{
             echo "<li><a href='?page_no=$counter'>$counter</a></li>";
          }
          }
    }
    elseif($total_no_of_pages > 10){
      
    if($page_no <= 4) {			
     for ($counter = 1; $counter < 8; $counter++){		 
        if ($counter == $page_no) {
         echo "<li class='active'><span>$counter</span></li>";	
          }else{
             echo "<li><a href='?page_no=$counter'>$counter</a></li>";
          }
          }
      echo "<li><a>...</a></li>";
      //echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
      echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
      }
  
     elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
      echo "<li><a href='?page_no=1'>1</a></li>";
      echo "<li><a href='?page_no=2'>2</a></li>";
          echo "<li><a>...</a></li>";
          for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
             if ($counter == $page_no) {
         echo "<li class='active'><span>$counter</span></li>";	
          }else{
             echo "<li><a href='?page_no=$counter'>$counter</a></li>";
          }                  
         }
         echo "<li><a>...</a></li>";
      // echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
       echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
              }
      
      else {
          echo "<li><a href='?page_no=1'>1</a></li>";
      echo "<li><a href='?page_no=2'>2</a></li>";
          echo "<li><a>...</a></li>";
  
          for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
            if ($counter == $page_no) {
         echo "<li class='active'><span>$counter</span></li>";	
          }else{
             echo "<li><a href='?page_no=$counter'>$counter</a></li>";
          }                   
                  }
              }
    }
  ?>
      
    <li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
    <a <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?><i class="fa fa-arrow-right arrowright" aria-hidden="true""></i></a>
    </li>
      <?php if($page_no < $total_no_of_pages){
    //	echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
      } ?>
</ul>
</div>
         </center>    
  




  </div>
  </div>
   </div>
                          
                             
                         <!--  <div class="banner5">
                         <div class="row">
                           <div class="col-sm-12">
                             <img src="img/banner5.gif "class="img-responsive"alt="">
                           </div>
                         </div>
                         </div>
 -->





        </div> <!-- col-sm-8 col-sm-push-4 end -->


<!-- col-lg-4 col-md-4 col-sm-12 col-xs-12 side hidden-sm hidden-xs col-sm-pull-8 -->
               <br>    

        <div class=" col-sm-4 col-sm"> <!-- left sidebar start -->
           



                      <div class="row bnbk">
           <div class="col-sm-12">
          <img src="img/banner3.gif" class="img-responsive"alt=""style="width: 100%;">
         </div>
           </div>
           
                 
                   
                     
                   


                  

                
        </div><!-- left sidebar start -->

                 </div><!-- main row end -->

              </div> <!-- main container end -->

      



                  <footer class="margin-tb-3">
              <div class="container">
        <div class="row">
          <div class="col-xs-12 ftmrg">
          <center><h5>Copyrights © 2019 - 2020 eMoviesz.Pk. All Rights Reserved and developer by Shahzaib khan.</h5></center>
        </div>
        </div>
    </div>
    </footer>




   


    <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
   

    

  </body>
</html>

       