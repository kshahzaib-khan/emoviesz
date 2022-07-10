<?php
include "pkcon.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>eMoviesz.pk | webtv</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" lang="en" content="ADD SITE DESCRIPTION">
    <meta name="author" content="ADD AUTHOR INFORMATION">
    <meta name="robots" content="index, follow">

    <?php
    if($menu ='webtv');include_once('front-layout.php');
  ?>
     </head>
<body class="bgcolor">

<br><br><br><br><br><br>
         
       <div class="main2 hidden-sm hidden-xs containerSearchEngine">
    <br>

    <div class="container">
      <form method="get" class="navbar-form2"accept-charset="utf-8">
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
          <option value="News">News</option>
           <option value="Documentary">Documentary</option>
           <option value="Education">Education</option>
           <option value="Entertairment">Entertairment</option>
           <option value="Food-&-Health">Food & Health</option>
           <option value="Kids">Kids</option>
           <option value="Movies">Movies</option>
           <option value="Sports">Sports</option>  
                    </select>
          </span>
          
          
          
      <div class="input-group center-block">
      <input class="form-control" id="search-input2" name="search_query" type="text" placeholder="search webtv channels" autocomplete="off">
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
      <form method="get" class="navbar-form2" accept-charset="utf-8">
      <div class="form-group" style="display:inline;">
        <div class="input-group">
          <span class="input-group-btn" style="padding-bottom: 4px; padding-top: 11px;">
          <select name="Allcate" style="padding: 0px 0px 0px 4px;border-radius: 4px 4px 4px 4px;" class="form-control">
        <option value="All">All Categories</option>
          <option value="News">News</option>
           <option value="Documentary">Documentary</option>
           <option value="Education">Education</option>
           <option value="Entertairment">Entertairment</option>
           <option value="Food-&-Health">Food & Health</option>
           <option value="Kids">Kids</option>
           <option value="Movies">Movies</option>
           <option value="Sports">Sports</option> 
            
            </select>
          </span>
        </div>
        <div class="input-group"> 
          <div class="input-group center-block">
              <input type="text" class="form-control" id="search-input2" name="search_query" class="search-input" type="text" placeholder="search webtv channels" style="padding: 5px;border-radius: 4px 0px 0px 4px;">
          </div>
            <div class="input-group-btn navbar-btn"><button class="btn btn-default btn-nav go">GO</button></div>
        </div>
      </div>
      </form>
      </div>
    </div>
    <!-- End Mobile Search Engine --> 
    



    
    <div class= "container" style="background-color:white;"><!-- main container start -->
      
      <div class="row"> <!--  all center data main row start -->
        <div class="col-sm-8 fwd">


                  <div class="moveis1 ">
        <div class="panel panel-default LatestMovies mbsmgtp">
        <div class="panel-heading MLfonts"><span class="toll"data-toggle="tooltip" title="TV Channels">TV Channels</span> : All Random</div>

      
        <div class="panel-body adbttpmg" style="background-color:white;padding-top: 3px;padding-bottom:0px;">
          
              

         <div class="row" ><!--  movies 1 row start > -->

         <?php
          
          if(isset($_GET['search_query']) OR isset($_GET['Allcate'])){

            $Allcate = $_GET['Allcate'];
            $search_query=$_GET['search_query'];                      
            
        
            $query = "SELECT * FROM webtv WHERE Keywords = '$search_query' OR Categories = '$Allcate' ";
        
            
             $result = mysqli_query($con, $query) or die('error');
             if(mysqli_num_rows($result) > 0){
               while($row = mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $Poster=$row['Poster'];
                $channel_name=$row['channel_name'];
                $Views=$row['Views']; 
                            
              
                
        
                ?>
                
                <div class="thumb col-sm-2 col-xs-12">
             <a href="webtvpreview.php?id=<?php echo $id;?>">
            <div class="col-item">
              <div class="photo col-sm-12 col-xs-5">
              <?php echo "<img src='Admin/Alluploadfolder/webposter/$Poster' class='img-responsive poster posternonround' alt=''>"?>

                <!-- <img src="tv/tv1.jpg" class="img-responsive poster posternonround" alt="ARY News"> -->
                </div>
              <div class="info col-sm-12 col-xs-7">
                <h6 class="category text-rose" title='<?php echo $channel_name ?>'><?php echo $channel_name ?></h6>
                <div class="row">   
                 <div class="col-xs-9 infohdtopgaptv">
                  <div class="infohd">View : <?php echo $Views ?></div>
                  </div>
                 
                </div>
              </div>
            </div></a>
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

          if(!isset($_GET['search_query'] ) AND !isset($_GET['Allcate'])){
           
              
            $query = "SELECT * FROM webtv ";

            $result = mysqli_query($con, $query) or die('error');
            if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $Poster=$row['Poster'];
                $channel_name=$row['channel_name'];
                $Views=$row['Views'];
                
        
               
       
               ?>
               <div class="thumb col-sm-2 col-xs-12">
             <a href="webtvpreview.php?id=<?php echo $id;?>">
            <div class="col-item">
              <div class="photo col-sm-12 col-xs-5">
              <?php echo "<img src='Admin/Alluploadfolder/webposter/$Poster' class='img-responsive poster posternonround' alt=''>"?>

                <!-- <img src="tv/tv1.jpg" class="img-responsive poster posternonround" alt="ARY News"> -->
                </div>
              <div class="info col-sm-12 col-xs-7">
                <h6 class="category text-rose" title='<?php echo $channel_name ?>'><?php echo $channel_name ?></h6>
                <div class="row">   
                 <div class="col-xs-9 infohdtopgaptv">
                  <div class="infohd">View : <?php echo $Views ?></div>
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
            
          
              
  

           



  </div>
  </div>
   </div>
                          
                             
                 

        </div> <!-- col-sm-8 col-sm-push-4 end -->


<!-- col-lg-4 col-md-4 col-sm-12 col-xs-12 side hidden-sm hidden-xs col-sm-pull-8 -->
               <br>    

        <div class=" col-sm-4 col-sm"> <!-- left sidebar start -->
           



                      <div class="row bnbk">
           <div class="col-sm-12">
          <img src="frontend-asset/img/banner3.gif" class="img-responsive"alt=""style="width: 100%;">
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

       