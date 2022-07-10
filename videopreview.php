
<?php
 include("pkcon.php");
?>
<?php   
  
$idvideo=$_GET['id'];
$sql="select * from video where id like'%$idvideo%'";
$run=mysqli_query($con,$sql);     
$row=mysqli_fetch_array($run);

$id=$row['id'];
$Categories=$row['Categories'];
$Epifullname=$row['Epifullname'];
$Shortname=$row['Shortname'];
$Views=$row['Views'];
$Download_Rate=$row['Download_Rate'];
$vidprint=$row['filename'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>eMoviesz.pk | <?php echo $Epifullname ?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" lang="en" content="ADD SITE DESCRIPTION">
    <meta name="author" content="ADD AUTHOR INFORMATION">
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <?php
    if($menu ='video');include_once('front-layout.php');
  ?>
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
            <img src="frontend-asset/img/logo.png" alt="" class="img-responsive">
          </div>
            </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
        <li ><a href="index.php"><i class="pe-7s-home"></i><p>Home</p></a></li>
        <li><a href="islamic.php"><i class="kaaba-mecca"></i><p>Islamic</p></a></li> 
        <li><a href="software.php"><i class="pe-7s-download"></i><p>Softwares</p></a></li> 
        <li><a href="games.php"><i class="pe-7s-joy"></i><p>Games</p></a></li>    
        <li><a href="movies.php"><i class="pe-7s-film"></i><p>Movies</p></a></li>
        <li class="active"><a href="video.php"><i class="pe-7s-play"></i><p>Videos</p></a></li>
        <li><a href="music.php"><i class="pe-7s-music"></i><p>Music</p></a></li>
        <li><a href="onlinegame.php"><i class="pe-7s-compass"></i><p>Online Games</p></a></li>
        <li><a href="wallpaper.php"><i class="pe-7s-photo-gallery"></i><p>Wallpapers</p></a></li>
        <li><a href="webtv.php"><i class="pe-7s-airplay"></i><p>Web TV</p></a></li>
        <li><a href="mobileapp.php" style="border-radius: 4px;"><i class="fa fa-android" style="font-size:35px;position: relative;"></i><p>Mobi App</p></a></li>
       
        <li><a href="javascript:void(0);" data-toggle="search"><i class="pe-7s-search"></i><p>Search</p></a></li>
      </ul>
        </div><!-- /.navbar-collapse -->

        </div><!-- /.container-fluid -->   
    
    <form  class="navbar-form navbar-right navbar-search-form" role="search">
        <div class="form-group">
            <input type="text" value="" class="form-control srchinptclr" style="width: 600px; box-shadow: none;" placeholder="Search...">
        </div>
      <button class="btn btn-primary btn-just-icon"><i class="pe-7s-search"></i></button>
        </form>
        </nav>






<br><br><br><br><br><br>
         
       <div class="main2 hidden-sm hidden-xs containerSearchEngine">
    <br>
     <div class="container">
      <form action="video.php"method="get" class="navbar-form2" accept-charset="utf-8">
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
      <input class="form-control" name="search_query" type="text" placeholder="search Videos" autocomplete="off">
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
      <form action="video.php" method="get" class="navbar-form2"accept-charset="utf-8">
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
    



    
    <div class= "container" style="background-color:white;"><!-- main container start -->
       <div class="col-lg-8"> <!-- Start of col-lg-8 -->
  <div class="row"> <!-- Start of row -->

  <div class="moveis1 ">
                    
        <div class="panel panel-default LatestMovies mbsmgtp">
        <div class="panel-heading MLfonts">Latest <span class="toll"data-toggle="tooltip" title="Videos">Videos</span> › <?php echo $Categories ?></div>
       

          

       <div class="panel-body " style="background-color:white;padding-top: 2px; padding-bottom: 0px;">
          
    <div class="panel-body"  style="margin: -14px -24px -24px -24px">            
        <div class="col-sm-12 padding">
        <div id="beez_fixed_nw"></div>
   <!--  <div class="vidmain">
      <div id="beez_fixed">
        <video id="video-player" class="video-js vjs-default-skin vjs-big-play-centered vjs-16-9" controls autoplay preload="auto" playsInline  width="100%" height="360" poster="" data-setup='{"playbackRates": [0.5, 1, 1.5, 2, 4]}'>
        <source src="http://download.ebravo.pk/data1/video.songs/tvserials/TaarakMehtaKaOoltahChashmah/Jan17/TaarakMehtaKaOoltahChashmah-12.Jan.17.mp4" type="video/mp4">
        </video>

      </div>
              
          </div> -->

          <div class="vidmain">
      <div id="beez_fixed">
        <video id="video-player" class="video-js vjs-default-skin vjs-big-play-centered vjs-16-9" controls autoplay preload="auto" playsInline  width="100%" height="360" poster="" data-setup='{"playbackRates": [0.5, 1, 1.5, 2, 4]}'>
      <!--   <source src="http://download.ebravo.pk/data1/video.songs/tvserials/TaarakMehtaKaOoltahChashmah/Jan17/TaarakMehtaKaOoltahChashmah-12.Jan.17.mp4" type="video/mp4">
        </video> -->

         <?php echo "<source src='Admin/Alluploadfolder/videofolder/$vidprint' type='video/mp4'>" ?>
        </video>

     <!--    <source src="islamic/Mere Hussain Salam Manqabat By Tahir Qadri.mp4" type="video/mp4">
        </video>
 -->
       <!-- 
         <source src="https://muchdownloadwow.verystream.net/stream/fV1Bnf4Dvej/3UYxDdc6jPktq2Sh/mxb0MFVV04gol7ZN6rrVn8rmdVJyeY7THpuKLZ55HKUJ3yaFTUt3NL-fZqNhighjhIfSe-N0rCqE0RYuYTjIp9idGwdoq4vsy01pF7xZ3w0T7h8F5uAYSLhlz_2v-23XyQGN0V3C88h2zdFwxT-0LS94RL2Dby0sHuCXGqIcKsxpac9sy_LytHBDzBqY_5n-isuq07Ko6fzkDsdSwSMik_sHrlKrWSn-vUg0ztJyNPh-4vJazpdVQfD8wBLmawVGNBI91pPLLj2VLlpOBM-W5lm_BwWPkO5frMIMrcIytHIJAXxQ0McBd9N4TV1g49s8fNfWvATINtqC7QaI2lyjSzxHkAQsYN27jA8QyXDSZfHz92iL2EEtmOOl_vExfvxQWlwzgnxiOIh0HiXAodCWPtzshS95vUwjJa5KKrUE7hoVE8EFuiArrhn4pfa4E97W9dSDpxHeaZTEfnwA-rt9JQ/The+Smurfs+2+%282013%29+Hindi+Dubbed+Full+HD.mp4?download=true" type="video/mp4">
        </video> -->

           
 <!-- <source src="https://woof.tube/stream/fV1Bnf4Dvej" type="video/mp4">
        </video> -->

        
      </div>
              
          </div>

          <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/cOwmx5mBs0k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->

          <!-- <div style="display: block;" id="Youtube"><iframe width="100%" height="315" src="https://www.youtube.com/embed/v51X5-zNdTU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="" __idm_id__="797232130"></iframe></div> -->
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
            <div class="v-title MLfonts"> <legend class="MLfonts"><?php echo $Epifullname ?></legend> </div>
                <div class="v-category " ><a href="" > <?php echo $Shortname ?></a></div>
        </div>
                  
        <div class="col-sm-3 col-xs-3 padding-view ">  
            <div class="v-category2" >View : <?php echo $Views ?></div><br>
            <div class="v-category2">Download : <?php echo $Download_Rate ?></div>
        </div>
        </div>
</div>           
      </div> 
    </div>

       

           
     <div class="panel panel-default">
      <div class="panel-body" style="padding:0px; margin-bottom:6px;">
       <legend style="padding-left: 8px; margin-bottom: 10px; ">Download Links</legend>
      <div class="col-sm-12  col-xs-12 padding-view">
            <div class="col-sm-12  col-xs-12 padding-view">
      <!-- <button id="playbtton" class="btn btn-sm btn-info"><i class="fa  fa-arrow-circle-o-down" style="font-size: 18px;"></i> | Download This Video</button>
 -->
    

 <?php echo "<a href='Admin/video_download.php?filename=".$row["filename"]."'> <button id='Youtubebutton'class='btn btn-sm btn-info watchtrailerbt'style='margin-left:8px;'><i class='fa  fa-arrow-circle-o-down'></i> | Download This Video</button> <a>"?>


 <!-- <button id="Youtubebutton"class="btn btn-sm btn-info watchtrailerbt"style="margin-left:8px;"><i class="fa  fa-arrow-circle-o-down"></i> | Download This Video</button>  -->

   
      </div>
      
      
            
            </div>
      
    </div>
  </div>

</div>

           </div><!-- End of row -->

         </div><!-- End of col-lg-8 -->

          <!-- Start of Right side card list -->

<div class="col-sm-4 padding-left" style="float:right;padding: 0px 0px 0 8px;margin-top: 0px;"> 
    <!-- Advertisement Banner 300x250 -->
  <div class="advert"><center><a href="#"><img src="images/ads.jpg" style="width: 100%; display: none !important;" alt="Advertisement"></a></center></div>
  <!-- END Advertisement Banner 300x250 -->
    
    <legend class="MLfonts"><?php  echo $Shortname?></legend>

         <?php
            
   
            $sql="SELECT * from video WHERE Shortname LIKE '%$Shortname%' limit 0,6";

            // $sql="SELECT * from video WHERE id group by Shortname LIKE '%$Short_name%' limit 0,6";

             // $sql="SELECT * from video WHERE id group by Shortname limit 0,6";

             // $sql="SELECT * from video WHERE id order by Shortname limit 0,6";




              $run=mysqli_query($con,$sql);     
              while($row=mysqli_fetch_array($run))
              

                        {
                     $id=$row['id'];
                     $Poster=$row['Poster'];
                     $Epifullname=$row['Epifullname'];
                     $Views=$row['Views']; 
                     $Add_Date=$row['Add_Date']; 
                     $Shortname=$row['Shortname'];
                     $Download_Rate=$row['Download_Rate'];                                       
                                                           
                                                          
                                                         
                     ?>
      
           
           <div class="thumb col-sm-12 col-xs-12">
                <div class="col-item botmpd"> 
        <a href="videopreview.php?id=<?php echo $id;?>">
                <div class="photo col-sm-6 col-xs-6"> 
            <?php echo "<img src='Admin/Alluploadfolder/videoposter/$Poster' class='img-responsive poster3 posternonround' alt=''>"?>
           </div>
                 <div class="info hover1 col-sm-6 col-xs-6">
                   <h6 class="category text-rose5" title='<?php echo $Epifullname ?>'> <?php echo $Epifullname ?></h6>
                    <div class="infovideo"><?php  echo $Shortname?></div>
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
        </div>
      </a>
    </div>

     <?php
        }

        ?>
       
    
    </div> <!-- End of col-sm-4 -->
       <!-- End of Right side card list -->
     
        <div class="col-sm-8"><div class="row">
  <div class="panel-default">
      <legend  class="MLfonts"style="padding-left: 8px; margin-bottom: 2px;">Related: Videos</legend>
    <div class="panel-body">
        <div class="item active">    

                <!-- <div class="col-sm-3 col-xs-4 thumb">
            <div class="col-item">
            <a href="videopreview-89224.html">
              <div class="photo"><img src="uploads/videos/TV Serials/99797e6088d9d7ee10da6981fc768780.png" class="img-responsive poster3" alt="Yeh Hai Mohabbatein - 10th July 2019"></div>
              <div class="info">
               <h6 class="category text-rose2" title="Yeh Hai Mohabbatein - 10th July 2019">Yeh Hai Mohabbatein - 10th July 2019</h6>
        <div class="infovideo">Yeh Hai Mohabbatein</div>  
        <div class="row">   
                  <div class="col-sm-5">  
                    <div class="infohd">View : 247</div>
          <div class="infohd">Download : 33</div>
          </div>
                <div class="col-sm-7 hidden-xs">
                  <div class="infohd datevdo"><br>AD: Jul 11, 2019</div>
        </div>  
                </div>
            </div></a> 
            </div>
          </div>
 -->
               <?php
          
            $sql="select * from video where id order by rand () limit 0,12";
              $run=mysqli_query($con,$sql);     
              while($row=mysqli_fetch_array($run))


                        {
                     $id=$row['id'];
                     $Poster=$row['Poster'];
                     $Epifullname=$row['Epifullname'];
                     $Views=$row['Views']; 
                     $Add_Date=$row['Add_Date']; 
                     $Shortname=$row['Shortname'];
                     $Download_Rate=$row['Download_Rate'];                                       
                                                           
                                                          
                                                         
                     ?>

             

              <div class="col-sm-3 col-xs-6 thumb">
                 <div class="col-item">
                 <a href="videopreview.php?id=<?php echo $id;?>">
                  <div class=" photo v_photo col-sm-12 col-xs-12">
                  <?php echo "<img src='Admin/Alluploadfolder/videoposter/$Poster' class='img-responsive posternonround' alt=''>"?>
                    </div>
                    <div class="info">
                      <h6 class="category text-vidio" title="<?php  echo $Epifullname?>"><?php  echo $Epifullname?> </h6>
                      <div class="infovideo"> <?php  echo $Shortname?></div>
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

                    ?>

  
           </div> <!--  End active item div -->
     </div> 
  </div>
    </div></div>




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

       