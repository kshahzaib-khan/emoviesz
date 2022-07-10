<?php
include "pkcon.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>eMoviesz.pk | videos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" lang="en" content="ADD SITE DESCRIPTION">
    <meta name="author" content="ADD AUTHOR INFORMATION">
    <meta name="robots" content="index, follow">

    <?php
   if($menu ='video'); include_once('front-layout.php');
  ?>
     </head>
<body class="bgcolor">


<br><br><br><br><br><br>
         
       <div class="main2 hidden-sm hidden-xs containerSearchEngine">
    <br>

    <div class="container">
      <form method="get" class="navbar-form2" accept-charset="utf-8">
      <div class="form-group" style="display:inline;">
        <div class="input-group">

          <span class="input-group-btn">
          <select name="print" class="btn2331">
         <option>Recenty Added</option>
           <option>News Released</option>
           <option>Most Views</option>
           <option>Most Download</option>
           <option>By Title</option>
          </select> 
          </span>   

          <span class="input-group-btn">
          <select name="Allcate" class="btn233">
          <option value="All">All Categories</option>
           <option value="Urdu Shows,">Urdu Shows</option>
           <option value="Animated Serials,">Animated Serials</option>
           <option value="Comedy,">Comedy</option>
           <option value="Documentary,">Documentary</option>
           <option value="Food & Health,">Food & Health</option>
           <option value="Gaming,">Gaming</option>
           <option value="Learning & Education,">Learning & Education</option>
           <option value="Music,">Music</option>
           <option value="Reality Show,">Reality Show</option>
           <option value="Sports,">Sports</option> 
                    </select>
          </span>
          
          
          
      <div class="input-group center-block">
      <input class="form-control" id="search-input2" name="search_query" type="text" placeholder="search Videos" autocomplete="off">
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
      <form  method="get" class="navbar-form2" accept-charset="utf-8">
      <div class="form-group" style="display:inline;">
        <div class="input-group">
          <span class="input-group-btn" style="padding-bottom: 4px; padding-top: 11px;">
          <select name="Allcate" style="padding: 0px 0px 0px 4px;border-radius: 4px 4px 4px 4px;" class="form-control">
          <option value="All">All Categories</option>
           <option value="Urdu Shows,">Urdu Shows</option>
           <option value="Animated Serials,">Animated Serials</option>
           <option value="Comedy,">Comedy</option>
           <option value="Documentary,">Documentary</option>
           <option value="Food & Health,">Food & Health</option>
           <option value="Gaming,">Gaming</option>
           <option value="Learning & Education,">Learning & Education</option>
           <option value="Music,">Music</option>
           <option value="Reality Show,">Reality Show</option>
           <option value="Sports,">Sports</option>         
            </select>
          </span>
        </div>
        <div class="input-group"> 
          <div class="input-group center-block">
              <input class="form-control" id="search-input2" name="search_query" class="search-input" type="text" placeholder="search Videos" style="padding: 5px;border-radius: 4px 0px 0px 4px;">
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

$result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM `video`");
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
  

?>

    
    <div class= "container" style="background-color:white"><!-- main container start -->
      
      <div class="row"> <!--  all center data main row start -->
        <div class="col-sm-12">


                  <div class="moveis1 ">
        <div class="panel panel-default LatestMovies mbsmgtp">
        <div class="panel-heading MLfonts">Latest <span class="toll"data-toggle="tooltip" title="Videos">Videos</span> › All Random</div>
       

          

        <div class="panel-body " style="background-color:white;padding-top: 2px;">
          
              

         <div class="row" ><!--  movies 1 row start > -->




         

     <?php
          
          if(isset($_GET['search_query'])){

            $Allcate = $_GET['Allcate'];
            $search_query=$_GET['search_query'];                      
            
        
            $query = "SELECT * FROM video WHERE Keywords = '$search_query' OR Categories = '$Allcate' ";
        
            
             $result = mysqli_query($con, $query) or die('error');
             if(mysqli_num_rows($result) > 0){
               while($row = mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $Poster=$row['Poster'];
                $Epifullname=$row['Epifullname'];
                $Shortname=$row['Shortname'];
                $Views=$row['Views']; 
                $Download_Rate=$row['Download_Rate'];
                $Add_Date=$row['Add_Date'];
                            
              
                
        
                ?>
                
                
                <div class="col-sm-2 col-xs-6 thumb">
            <div class="col-item">
            <a href="videopreview.php?id=<?php echo $id;?>">
            <div class=" photo v_photo col-sm-12 col-xs-12">
            <?php echo "<img src='Admin/Alluploadfolder/videoposter/$Poster' class='img-responsive  posternonround' alt=''>"?>

                    </div>
              <div class="info">
                  <h6 class="category text-vidio" title='<?php echo $Epifullname ?>'><?php echo $Epifullname ?> </h6>
                      <div class="infovideo"><?php echo $Shortname ?></div>
                      <div class="row">   
                      <div class="col-sm-5"> 
                     <div class="infohd">View : <?php  echo $Views?></div>
                      <div class="infohd">Download : <?php  echo $Download_Rate?></div>
                         </div>
                    <div class="col-sm-7 hidden-xs">
                    <div class="infohd datevdo"><br>AD: <?php  echo $Add_Date?></div>
                   </div>  
                      </div>
                          </div>
                            </a>
                                </div>
                              </div>   

                <?php
               }
        
             }else{
              ?>
                   <div style="text-align: center;">
                 <strong style="color:red; font-size:17px;">Result</strong>
                  <p>Record not Found</p>
                  </div>

              <?php 
            }
              
           
          }
          
          
                  // start first  time visit data load code

          if(!isset($_GET['search_query'] )){
           
            $query = "SELECT * FROM video ORDER BY id DESC  limit $offset, $total_records_per_page";

        
            $result = mysqli_query($con, $query) or die('error');
            if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $Poster=$row['Poster'];
                $Epifullname=$row['Epifullname'];
                $Shortname=$row['Shortname'];
                $Views=$row['Views']; 
                $Download_Rate=$row['Download_Rate'];
                $Add_Date=$row['Add_Date'];
                            
        
               
       
               ?>
                 
                 <div class="col-sm-2 col-xs-6 thumb">
            <div class="col-item">
            <a href="videopreview.php?id=<?php echo $id;?>">
            <div class=" photo v_photo col-sm-12 col-xs-12">
            <?php echo "<img src='Admin/Alluploadfolder/videoposter/$Poster' class='img-responsive  posternonround' alt=''>"?>

                    </div>
              <div class="info">
                  <h6 class="category text-vidio" title='<?php echo $Epifullname ?>'><?php echo $Epifullname ?> </h6>
                      <div class="infovideo"><?php echo $Shortname ?></div>
                      <div class="row">   
                      <div class="col-sm-5"> 
                     <div class="infohd">View : <?php  echo $Views?></div>
                      <div class="infohd">Download : <?php  echo $Download_Rate?></div>
                         </div>
                    <div class="col-sm-7 hidden-xs">
                    <div class="infohd datevdo"><br>AD: <?php  echo $Add_Date?></div>
                   </div>  
                      </div>
                          </div>
                            </a>
                                </div>
                              </div>    
               <?php
              }
       
            }
             else{
               ?>
                    <div style="text-align: center;">
                  <strong style="color:red; font-size:17px;">Result</strong>
                   <p>Record not Found</p>
                   </div>

               <?php 
             }
          
         }
          // end first  time visit data load code

            

      ?>




           </div>  <!-- movies 1 row end --> 
            
          
              
          <center>Page <?php echo $page_no." of ".$total_no_of_pages; ?> <br>
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
              






        </div> <!-- col-sm-8 col-sm-push-4 end -->


<!-- col-lg-4 col-md-4 col-sm-12 col-xs-12 side hidden-sm hidden-xs col-sm-pull-8 -->
        
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

       