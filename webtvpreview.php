<?php
 include "pkcon.php";
?>

<?php   

$idwebtv=$_GET['id'];
$sql="select * from webtv where id like'%$idwebtv%'";
$run=mysqli_query($con,$sql);     
$row=mysqli_fetch_array($run);

                    
 $id=$row['id'];
 $channel_name=$row['channel_name'];
 $View=$row['Views'];
 $Categories=$row['Categories'];
 $Channel_link=$row['Channel_link'];
 $Poster=$row['Poster'];
 

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>eMoviesz.pk | <?php echo $channel_name?></title>
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
      <form action ="webtv.php"method="get" class="navbar-form2"  accept-charset="utf-8">
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
      <form action="webtv.php" method="get" class="navbar-form2"  accept-charset="utf-8">
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
              <input type="text" class="form-control" name="search_query" class="search-input" type="text" placeholder="search webtv channels" style="padding: 5px;border-radius: 4px 0px 0px 4px;">
          </div>
            <div class="input-group-btn navbar-btn"><button class="btn btn-default btn-nav go">GO</button></div>
        </div>
      </div>
      </form>
      </div>
    </div>
    <!-- End Mobile Search Engine --> 
    



    
    <div class= "container" style="background-color:white;"><!-- main container start -->
       <div class="col-lg-8"> <!-- Start of col-lg-8 -->
  <div class="row"> <!-- Start of row -->

  <div class="moveis1 ">
                    
        <div class="panel panel-default LatestMovies mbsmgtp">
        <div class="panel-heading MLfonts"><span class="toll"data-toggle="tooltip" title="Web Tv">Web Tv</span> › <?php echo $channel_name ?></div>
       

          

       <div class="panel-body " style="background-color:white;padding-top: 2px; padding-bottom: 0px;">
          
    <div class="panel-body"  style="margin: -14px -25px -24px -25px">            
        <div class="col-sm-12 padding">
          <script src="js/hls.js"></script>
        <div id="beez_fixed_nw"></div>
 <div class="vidmain">
      <div id="beez_fixed">
        <!-- <video id="video-player" class="video-js vjs-default-skin vjs-big-play-centered vjs-16-9" controls autoplay preload="auto" playsInline  width="100%" height="360" poster="" data-setup='{"playbackRates": [0.5, 1, 1.5, 2, 4]}'>
        <source src="http://58.65.194.14:1935/live/Geo-news.stream/playlist.m3u8" type="rtmp/mp4">
       
        </video>  -->
        <iframe  style="width:100%; height:500px; margin-right:-80px;"src='<?php echo $Channel_link ?>' frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
</iframe>
      </div>
              
          </div>


    <script>
    var myVideo = document.getElementById("video-player");
      if (myVideo.addEventListener) {
        myVideo.addEventListener('contextmenu', function(e) {
        e.preventDefault();
        }, false);
        } else {
        myVideo.attachEvent('oncontextmenu', function() {
        window.event.returnValue = false;
        });
      }
    </script>
              
    <script>
    (function() {
      var vid1 = videojs('video-player');
      vid1.persistvolume({
      namespace: "set volume"
      });
    })();
    </script>
              
    <script>
      videojs(document.querySelector('#video-player')).remember({"localStorageKey": "videojs.remember.myvideo"});
    </script>
              
                      
        
    <script src="js/social.js"></script>
    <script src="js/share.js"></script>    
    <script>
    (function(window, videojs) {
      var player = window.player = videojs('video-player');
      player.share();
      }(window, window.videojs));
    </script>
        
    <div class="col-sm-9 col-xs-9 padding-view">
            <div class="v-title MLfonts"><?php echo $channel_name ?></div>
                <!-- <div class="v-category" ><a href="" > Taarak Mehta Ka Ooltah Chashmah</a></div> -->
        </div>
                  
        <div class="col-sm-3 col-xs-3 padding-view">  
            <div class="v-category2" style="padding-top: 14px;" >View : <?php echo $View ?></div><br>
           <!--  <div class="v-category2">Download : 0</div> -->
        </div>
        </div>
</div>           
      </div> 
    </div>

       
    <!-- <div class="col-sm-12 padding" style="margin-top: 20px;">
      <div class="panel panel-default padding">

      <div class="panel-body">
      <legend style="padding-left: 8px; margin-bottom: 2px;">Download Links
      
            <div class="col-sm-12  col-xs-12 padding-view"><a href="http://download.ebravo.pk/data9/videos/tvserials/IntoTheDark/Season01/IntoTheDark-S01.Ep09.mp4" target="_blank" id="setCounter" class="btn btn-sm btn-info"><span style="font-size: 16px; top: 5px;" class="glyphicon glyphicon-download"></span> | Download This Video</a></div>
            </div>
             </div>
              </div> -->

           
     

</div>

           </div><!-- End of row -->

         </div><!-- End of col-lg-8 -->



      <div class="row"> <!--  all center data main row start -->
        <div class="col-sm-12 fwd">


                  <div class="moveis1 ">
        <div class="panel panel-default LatestMovies mbsmgtp">
        <div class="panel-heading MLfonts"><span class="toll"data-toggle="tooltip" title="TV Channels">TV Channels</span> : All Random</div>

      
        <div class="panel-body adbttpmg" style="background-color:white;padding-top: 3px;padding-bottom:0px;">
          
              

         <div class="row" ><!--  movies 1 row start > -->
         <?php
           $query = "SELECT * FROM webtv ORDER BY id DESC ";
           $result = mysqli_query($con,$query);  
             
           while($row=mysqli_fetch_array($result)){

            $id=$row['id'];
            $Poster=$row['Poster'];
            $channel_name=$row['channel_name'];
            $Views=$row['Views']; 
           

           ?>
              
             <div class="thumb col-sm-2 col-xs-12">
            <a href='webtvpreview.php?=id<?php echo $id;?>'>
            <div class="col-item">
              <div class="photo col-sm-12 col-xs-5">
              <?php echo "<img src='Admin/Alluploadfolder/webposter/$Poster' class='img-responsive poster posternonround' alt=''>"?>

                <!-- <img src="tv/tv1.jpg" class="img-responsive poster posternonround" alt="ARY News"> -->
                </div>
              <div class="info col-sm-12 col-xs-7">
                <h6 class="category text-rose" title='<?php echo $channel_name ?>'><?php echo $channel_name?></h6>
                <div class="row">   
                 <div class="col-xs-9">
                  <div class="infohd">View : <?php echo $View ?></div>
                  </div>
                 
                </div>
              </div>
            </div></a>
          </div>  
             <?php
           }
           ?>

           

           </div>  <!-- movies 1 row end --> 
            
          
              
  

           



  </div>
  </div>
   </div>
                          
                             
                 

        </div> <!-- col-sm-8 col-sm-push-4 end -->



              

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

       