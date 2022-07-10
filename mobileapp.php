<?php
include "pkcon.php";
?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>eMoviesz.pk | Mobilebeapp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" lang="en" content="ADD SITE DESCRIPTION">
    <meta name="author" content="ADD AUTHOR INFORMATION">
    <meta name="robots" content="index, follow">

    <?php
   if($menu ='mobileapp'); include_once('front-layout.php');
  ?>
     </head>
<body class="bgcolor">


<br><br><br><br><br><br>
         
       <div class="main2 hidden-sm hidden-xs containerSearchEngine ">
    <br>
   
     <div class="container ">
      <form method="get" class="navbar-form2" accept-charset="utf-8">
      <div class="form-group" style="display:inline;">
        <div class="input-group">

          <!-- <span class="input-group-btn">
          <select name="print" class="btn2331">
        <option>All Categories</option>
           <option>Android Apps</option>
           <option>Anti-Malware</option>
           <option>Converter</option>
           <option>Cuter</option>
           <option>Desktop</option>
           <option>Developer Tools</option>
           <option>DvD Burning</option>
          </select> 
          </span>    -->

          
          
          
      <div class="input-group center-block">
      <input class="form-control" name="search_query" type="text" placeholder="Search Top Application" autocomplete="off" style="padding: 5px;border-radius: 4px 0px 0px 4px;">
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

    <div class="main2 visible-sm visible-xs mbht containerSearchMobileEngine mobSearchEngine">
      <div class="container">
      <form method="get" class="navbar-form2"accept-charset="utf-8">
      <div class="form-group" style="display:inline;">
        <div class="input-group">
          <!-- <span class="input-group-btn" style="padding-bottom: 4px; padding-top: 11px;">
          <select name="cat" style="padding: 0px 0px 0px 4px;border-radius: 4px 4px 4px 4px;" class="form-control">
          <option>All Categories</option>
           <option>Android Apps</option>
           <option>Anti-Malware</option>
           <option>Converter</option>
           <option>Cuter</option>
           <option>Desktop</option>
           <option>Developer Tools</option>
           <option>DvD Burning</option>  
                </select>
          </span> -->
        </div>
        <br><br>
        <div class="input-group"> 
          <div class="input-group center-block">
              <input  class="form-control" name="search_query" class="search-input" type="text" placeholder="Search Top Application" style="padding: 5px;border-radius: 4px 0px 0px 4px;">
          </div>
            <div class="input-group-btn navbar-btn"><button class="btn btn-default btn-nav go">GO</button></div>
        </div>
      </div>
      </form>
      </div>
    </div>
    <!-- End Mobile Search Engine --> 
    



    
    <div class= "container" style="background-color:white"><!-- main container start -->
      
      <div class="row"> <!--  all center data main row start -->
        <div class="col-sm-8 fwd">


                  <div class="moveis1 ">
        <div class="panel panel-default LatestMovies mbsmgtp">
        <div class="panel-heading MLfonts"> <span class="toll " data-toggle="tooltip" title="Top Application "> Top Application</span> › All Random</div>
        
      
        <div class="panel-body adbttpmg" style="background-color:white;padding-top: 3px;" >
          
    
         <div class="row" ><!--  AndroidApp 1 row start > -->

         <?php
          
          if(isset($_GET['search_query'])){

            $search_query=$_GET['search_query'];                      
            
        
            $query = "SELECT * FROM mobiapp WHERE APkName = '$search_query' ";
        
            
             $result = mysqli_query($con, $query) or die('error');
             if(mysqli_num_rows($result) > 0){
               while($row = mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $Poster=$row['Poster'];
                $icon=$row['Icon']; 
                $APkName=$row['APkName'];
                $Add_Date=$row['Add_Date'];
                $Download_Rate=$row['Download_Rate'];  
                $Views=$row['Views'];
                            
              
                
        
                ?>
                
                
                      <div class="thumb col-sm-2 col-xs-12">
             <a href="mobileapppreview.php?id=<?php echo $id;?>">
            <div class="col-item">
              <div class="photo col-sm-12 col-xs-5">
              <?php echo "<img src='Admin/Alluploadfolder/mobiposter/$Poster' class='img-responsive poster posternonround' title='$APkName'>"?>

                <!-- <img src="ap/ap1.jpg" class="img-responsive poster posternonround" alt="Snapchat"> -->
                </div>
              <div class="info col-sm-12 col-xs-7 textopmrgmobiappg">
                <h6 class="category text-mobi" title='<?php echo $APkName ?>'><?php echo $APkName ?></h6>
                <div class="row">   
                 <div class="col-xs-9 infohdtext">
                  <div class="infohd">AD : <?php echo $Add_Date ?></div>
                  <div class="infohd">View : <?php echo $Views?></div>
                  <div class="infohd">Download : <?php echo $Download_Rate?></div>
                  </div>
                 <div class="col-xs-3">

                          <div class="mobi-icon">
                          <?php echo "<img src='Admin/Alluploadfolder/mobiIcons/$icon'title='MobiApp' alt='MobiApp'>"?>

                            <!-- <img class="img" src="movies Icon/android-icon2.png" title="MobiApp" alt="MobiApp"> -->
                          </div>
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

          if(!isset($_GET['search_query'] )){
           
              
            $query = "SELECT * FROM mobiapp ";

            $result = mysqli_query($con, $query) or die('error');
            if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $Poster=$row['Poster'];
                $icon=$row['Icon']; 
                $APkName=$row['APkName'];
                $Add_Date=$row['Add_Date'];
                $Download_Rate=$row['Download_Rate'];  
                $Views=$row['Views'];
                            
        
               
       
               ?>
                 
            <div class="thumb col-sm-2 col-xs-12">
             <a href="mobileapppreview.php?id=<?php echo $id;?>">
            <div class="col-item">
              <div class="photo col-sm-12 col-xs-5">
              <?php echo "<img src='Admin/Alluploadfolder/mobiposter/$Poster' class='img-responsive poster posternonround' title='$APkName'>"?>

                </div>
              <div class="info col-sm-12 col-xs-7 textopmrgmobiappg">
                <h6 class="category text-mobi" title='<?php echo $APkName ?>'><?php echo $APkName ?></h6>
                <div class="row">   
                 <div class="col-xs-9 infohdtext">
                  <div class="infohd">AD : <?php echo $Add_Date ?></div>
                  <div class="infohd">View : <?php echo $Views?></div>
                  <div class="infohd">Download : <?php echo $Download_Rate?></div>
                  </div>
                 <div class="col-xs-3">

                          <div class="mobi-icon">
                          <?php echo "<img src='Admin/Alluploadfolder/mobiIcons/$icon'title='MobiApp' alt='MobiApp'>"?>

                          </div>
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

       