<?php
 include("pkcon.php");
?>
<?php   

$idmovi=$_GET['id'];
$sql="select * from movie where id like'%$idmovi%'";
$run=mysqli_query($con,$sql);     
$row=mysqli_fetch_array($run);

                    
 $id=$row['id'];
 $Categories1=$row['Categories1'];
 $Categories2=$row['Categories2'];
 $Categories3=$row['Categories3'];
 $cate_single_preview_heading=$row['cate_single_preview_heading'];
 $CateMainP=$row['CateMainP'];
 $Add_Date=$row['Add_Date'];
 $View=$row['View'];
 $Download_Rate=$row['Download_Rate'];
 $name=$row['Keywords'];
 $Quality=$row['movie_print_result'];
 $Ratings=$row['Ratings'];
 $Rated=$row['Rated'];                           
 $Released=$row['Released'];
 $Genre=$row['Genre'];
 $Length=$row['Length'];
 $Country=$row['Country'];
 $Language=$row['Language'];
 $DBMNP=$row['DBMNP'];
 $Description= $row['Description'];
 $Actors=$row['Actors'];
 $Director=$row['Director'];
 $Writer=$row['Writer'];
 $Poster=$row['Poster'];
 $icon=$row['icon'];
 $Downfolder=$row['Downfolder'];
 $vidprint=$row['filename']; 

                                                                            
                                 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title> eMoviesz.pk | <?php echo $name ?></title>
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="robots" content="index, follow">
       
    <?php
    if($menu ='movies');include_once('front-layout.php');
  ?>
	</head>
	<body class="bgcolor">

      

    <br><br><br><br><br><br>
         
       <!-- Start Desktop Search Engine -->
  <div class="main2 hidden-sm hidden-xs containerSearchEngine">
    <br>
 

              <div class="container">
      <form  action="movies.php" method="get" class="navbar-form2" accept-charset="utf-8">
      <div class="form-group" style="display:inline;">
        <div class="input-group">

          <span class="input-group-btn">
          <select name="Quality" class="btn2331">
          <option value="All">All Qualities</option>
          <option value="CAM">CAM</option>
          <option value="Screener">Screener</option>
          <option value="TS">TS</option>
          <option value="WebRip">WebRip</option>
          <option value="Master">Master</option>
          <option value="HDRip">HDRip</option>
          <option value="BRRip">BRRip</option>
          </select> 
          </span>   

          <span class="input-group-btn">
          <select name="Allcate" class="btn233">
          <option value="All">All Categories</option>
          <option value="3D Movies">3D Movies</option>
          <option value="Bollywood">Bollywood</option>
          <option value="Dual Audio">Dual Audio</option>
          <option value="Hollywood">Hollywood</option>
          <option value="Kids Movies">Kids Movies</option>
          <option value="Punjabi Movies">Punjabi Movies</option>
          <option value="Stage Shows">Stage Shows</option>
          <option value="Tamil Movies">Tamil Movies</option>
          <option value="Turkish Movies">Turkish Movies</option>
          <option value="Wrestling">Wrestling</option> 
          
                    
                    </select>
          </span>
          
          <span class="input-group-btn">
          <select name="genre" class="btn233">
          <option value="All">All Genre</option>
          <option value="Action">Action</option>
          <option value="Adventure">Adventure</option>
          <option value="Animation">Animation</option>
          <option value="Biography">Biography</option>
          <option value="Comedy">Comedy</option>
          <option value="Crime">Crime</option>
          <option value="Documentary">Documentary</option>
          <option value="Drama">Drama</option>
          <option value="Family">Family</option>
          <option value="Fantasy">Fantasy</option>
          <option value="History">History</option>
          <option value="Horror">Horror</option>
          <option value="Music">Music</option>
          <option value="Musical">Musical</option>
          <option value="Mystery">Mystery</option>
          <option value="Romance">Romance</option>
          <option value="Sci-Fi">Sci-Fi</option>
          <option value="Short">Short</option>
          <option value="Sport">Sport</option>
          <option value="Thriller">Thriller</option>
          <option value="War">War</option>
          <option value="Western">Western</option>
          </select>
          </span>
          
      <div class="input-group center-block">
      <input class="form-control" id="search-input2" name="search_query" type="text" placeholder="search movies" autocomplete="off">
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
      <form action="movies.php" method="get" class="navbar-form2"id="search-form"  accept-charset="utf-8">
      <div class="form-group" style="display:inline;">
        <div class="input-group">
          <span class="input-group-btn" style="padding-bottom: 4px; padding-top: 11px;">
          <select name="Allcate" style="padding: 0px 0px 0px 4px;border-radius: 4px 4px 4px 4px;" class="form-control">
          <option value="All">All Categories</option>
          <option value="3D Movies">3D Movies</option>
          <option value="Bollywood">Bollywood</option>
          <option value="Dual Audio">Dual Audio</option>
          <option value="Hollywood">Hollywood</option>
          <option value="Kids Movies">Kids Movies</option>
          <option value="Punjabi Movies">Punjabi Movies</option>
          <option value="Stage Shows">Stage Shows</option>
          <option value="Tamil Movies">Tamil Movies</option>
          <option value="Turkish Movies">Turkish Movies</option>
          <option value="Wrestling">Wrestling</option> 
          
                    </select>
          </span>
        </div>
        <div class="input-group"> 
          <div class="input-group center-block">
              <input  class="form-control" id="search-input2" name="search_query" class="search-input" type="text" placeholder="search movies" style="padding: 5px;border-radius: 4px 0px 0px 4px;">
          </div>
            <div class="input-group-btn navbar-btn"><button class="btn btn-default btn-nav go">GO</button></div>
        </div>
      </div>
      </form>
      </div>
    </div>
    <!-- End Mobile Search Engine --> 
    <!-- Start of Movies hide & show content -->
    <script>
      function watchbutton(){
        $("#onvideo").hide(500);
        $("#videowatcher").show(500);
        document.getElementById("back_black").className = "container bg w3-black";
        document.getElementById("video-player").play(); 
                          }
      function offvideo(){
        $("#onvideo").show(500);
        $("#videowatcher").hide(500);
        document.getElementById("video-player").pause();  
        document.getElementById("back_black").className = "container bg ";
      }
      
      </script>
      <div class="container bg" id="back_black">
          <div class="panel panel-default passo" style="display:none;" id="videowatcher">
        <div class="panel-body">
          <div class="col-sm-12 padding">
          <div class="vidmain">

           
           <div id="beez_fixed">
            <!-- <div class="demo-list">
              
              <video  src="music/The Last Boy - Trailer.mp4" data-ckin="default" id="video-player" style="width: 100%; height: auto;">

              </video>
         
      </div> -->
               <video id="video-player" class="video-js vjs-default-skin vjs-big-play-centered vjs-16-9" controls preload="auto" playsInline width="100%" height="360" poster="" data-setup='{"controls": true, "autoplay": false, "preload": "auto", "playbackRates": [0.5, 1, 1.5, 2, 4]}'><?php echo"<source src='Admin/Alluploadfolder/Moviefolder/$vidprint' type='video/mp4'>"?></video>
              <!-- <video id="video-player" class="video-js vjs-default-skin vjs-big-play-centered vjs-16-9" controls preload="auto" playsInline width="100%" height="360" poster="" data-setup='{"controls": true, "autoplay": false, "preload": "auto", "playbackRates": [0.5, 1, 1.5, 2, 4]}'><source src="http://download.ebravo.pk/data6/kidsmovies/A/AStorksJourney.2017.BRRip.Dual.mkv" type="video/webm"></video> -->
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
            var myVideo = document.getElementById("video-player");
            function playVideo() { 
            myVideo.play(); 
            } 
            function pauseVideo() { 
            myVideo.pause(); 
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


</script>
      

          
        <div class="col-sm-9 col-xs-9 padding-view">
              <div class="v-title"><?php echo $name ?></div>
          </div>
                        
          <div class="col-sm-3 col-xs-3 padding-view">
          <button  onclick="pauseVideo();offvideo();" style="float:right;background-color: #C93F0C; border-radius: 4px;" class="btn btn-default btn-nav go" style="float:right;animation: pulse 2s infinite;"><i class="fa fa-close" aria-hidden="true"></i></button>
          </div>


              </div>
        </div>           
          </div>
        </div>
        </div>
        <div id="onvideo">
		<!-- End of Movies hide & show content -->
		<div class="container containerpreiew" style="background-color:white"><!-- main container start -->
			   
      
         
      <div class="row"> <!--  all left side data main row start -->
      

        
        
				<div class="col-md-8">
          

                  <div class="moveis1">

               <div class="panel panel-default movpreviw mbsmgtp">

    <div class="panel-heading MLfonts ">
    <i class=" monicon fa fa-film "></i>
      <span class="toll" data-toggle="tooltip" title="Movies">Movies</span>
       &rsaquo;
       <span class="toll" data-toggle="tooltip" title='Hollywood'><?php echo $Categories1 ?></span> 
       <!-- <span class="toll" data-toggle="tooltip" title='<?php echo $Categories1;?>'><?php echo $Categories1 ?></span>  -->
       
       <span class="toll" data-toggle="tooltip" title='Dual Audio'><?php echo $Categories2 ?></span> 
      

       <span class="toll" data-toggle="tooltip" title='<?php echo $CateMainP;?>'><?php echo $cate_single_preview_heading ?></span>

  </div>
  <div class="panel-body" style="padding:0px;">                
        <div class="col-sm-12 padding4 "><legend style="padding-top:4px;" class="MLfonts"><?php echo $name ?></legend></div>
        <div class="col-sm-5  marginleftside pssmbl"> <?php echo"<img src='Admin/Alluploadfolder/Movieposter/$Poster' class='img-responsive' alt=''>"?>

    <!-- <div class="col-sm-5  marginleftside pssmbl"><img src="img/last boy.jpg" class="img-responsive" alt="The Last Boy"> -->
    </div>
     <div class="col-sm-7 padding4">
  <br>
  
          <div class="panel panel-default panelpdbt ">  
         <div class="panel-body " style="margin: -9px;">
         
       <div class="col-sm-6  col-xs-6  ">
            <button id="Youtubebutton"class="btn btn-sm btn-info watchtrailerbt"><i class="fa fa-play"></i> | Watch Trailer</button> 
        </div>

        <div class="col-sm-6 col-xs-6 veiws-content veiws-contentmovie"><b>Views</b> <?php echo $View ?><br> <b>Download</b>&nbsp;<?php echo $Download_Rate ?> <!--  <b>78823</b> Views<br> <b>70840</b> Downloads --></div>

        </div>
      </div>
      <script>
        $(document).ready(function(){
        $("#Youtubebutton").click(function(){
        $("#Youtube").toggle(150);
        });
        });
        </script>
              <div style="display:none; margin-top:-10px;" id="Youtube">
                <!-- <div id="ytplayer"></div> -->
                <!-- <video width="100%" height="180" controls>
                  <source src="music/The Last Boy - Trailer.mp4" type="video/mp4">
                  
                </video> -->

                <!-- <div class="demo-list">
                 

                  <video  src="music/The Last Boy - Trailer.mp4" data-ckin="default"></video>
             
          </div> -->

          <video controls  id="player">
            <!-- Video files -->
           <?php echo "<source src='Admin/Alluploadfolder/Moviefolder/$vidprint' type='video/mp4' size='576'>"?>
            <!-- <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720">
            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080">
            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1440p.mp4" type="video/mp4" size="1440"> -->

            <!-- Caption files -->
            
        </video>

              </div>
      
              <script>
                document.addEventListener('DOMContentLoaded', () => { 
      // This is the bare minimum JavaScript. You can opt to pass no arguments to setup.
      const player = new Plyr('#player');
      
      // Expose
      window.player = player;
    
      // Bind event listener
      function on(selector, type, callback) {
        document.querySelector(selector).addEventListener(type, callback, false);
      }
    
    
    });
            </script>
      <div class="col-sm-12 padding">
      <table cellpadding="0" cellspacing="0" class="veiws-content2">
        <tbody>
          <tr>
            <td width="99"><b>Quality</b></td>
            <td width="9"> : </td>
            <td><?php echo $Quality ?></td>
          </tr>
            
          <tr>
            <td><b>Added</b></td>
            <td> : </td>
            <td><?php echo $Add_Date ?></td>
          </tr>
          
          <tr>
                        <td width="100"><b>Ratings</b></td>
            <td width="10"> : </td>
            <td><span style="background-color:#333333;color: #FFFFFF;font-weight: bold;">&nbsp;<?php echo $Ratings ?>&nbsp;</span> / 
                        <div class="div-rate rating2" data-score='5.9'></div>
            </td>
                      </tr>
          
          <tr>
                      </tr>
               
                    <tr>
            <td width="100"><b>Released</b></td>
            <td width="10"> : </td>
            <td><?php echo $Released ?></td>
              
          </tr>
                    
                    <tr> 
            <td width="100"><b>Genre</b></td>
            <td width="10"> : </td>
            <td> <?php echo $Genre ?></td>
                      </tr>
          
            
          
                    <tr> 
            <td width="100"><b>Country</b></td>
            <td width="10"> : </td>
            <td><?php echo $Country ?></td>
              
          </tr>
            
            
                    <tr> 
            <td width="100"><b>Language</b></td>
            <td width="10"> : </td>
            <td><?php echo $Language ?></td>  
          </tr>
                      
            
                    <tr> 
            <td width="100"><b>Actors</b></td>
            <td width="10"> : </td>
            <td> <?php echo $Actors ?></td> 
          </tr>
                      
                    <tr> 
            <td width="100"><b>Director</b></td>
            <td width="10"> : </td>
            <td> <?php echo $Director ?></td>
          </tr>
                      
                    <tr> 
            <td width="100"><b>Writer</b></td>
            <td width="10"> : </td>
            <td> <?php echo $Writer ?></td>
          </tr>
                    
          
                    <tr>
            <td valign="top"><b>Description</b></td>
            <td valign="top"> : </td>
            <td><?php echo $Description ?></td> 
          </tr>
                  </tbody>
      </table>
      </div>
    </div> 
  </div>                   
    </div> 



   </div> <!-- end movies1 div -->
 

   <div class="panel panel-default">
      <div class="panel-body" style="padding:0px;">
       <legend style="padding-left: 8px; margin-bottom: 10px;">Download Links</legend>
      <div class="col-sm-12  col-xs-12 padding-view">
            <!-- <a href="" class="btn btn-sm btn-success downloadbtton downbtnrghtmgr"> -->
              <?php echo "<a href='Admin/movie_download.php?filename=".$row["filename"]."' class='btn btn-sm btn-success sdownloadbtton'>
      <span style='font-size: 16px; top: 5px; ' ><i class='fa fa-arrow-circle-o-down'></i></span> |  $DBMNP </a>"?>
      
      <br>
            <div class="panel-default">    
      <div class="panel-body" style="padding:0px;">
      <legend style="padding-left:8px; margin-top: 17px;">Watch Now</legend>
      <div class="col-sm-12  col-xs-12 padding-view">
        
        <a id="playbtton"href="#" onclick="playVideo();watchbutton();" class="btn btn-sm btn-info setCounter" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#videoModal" data-theVideo=""><i class="fa fa-play"></i> | <?php echo $name ?></a>

      <!-- <button id="playbtton" class="btn btn-sm btn-info"><i class="fa fa-play"></i> | The Last Boy</button> -->
      </div>
      </div>
    </div>
            </div>
      
    </div>
  </div>

                          
                       

<div class="panel panel-default  hidden-xs">
        <div class="panel-heading "> Related: Movies
    <div class="controls pull-right">
        <a class="left btn btn-success2 prev" href="#carousel-example2" data-slide="prev">
    <span class="fa fa-chevron-left chevronleft " style="padding-left: 2px;"></span></a>
    <a class="right btn btn-success2 next" href="#carousel-example2" data-slide="next">
    <span class="fa fa-chevron-right chevronRight" style="padding-left: 2px;"></span></a>   
    </div>
    </div>
     <div id="carousel-example2" class="carousel slide" data-ride="carousel">
    <div class="panel-body bg">
       
            <!-- Wrapper for slides -->
             <div class="row slidbgmg">
            <div class="carousel-inner  slidset">
                <div class="item active">
                
                <?php
               
                $sql="select * from movie where id order by rand () limit 0,6";
               $result = mysqli_query($con,$sql);
               while($row=mysqli_fetch_array($result))
               {
                $id=$row['id'];
                $poster=$row['Poster'];
                $name=$row['Keywords'];
                $Add_Date=$row['Add_Date']; 
                $Released=$row['Released'];                                       
                $View=$row['View']; 
                $icon=$row['icon'];                                       
                $Download_Rate=$row['Download_Rate']; 
                $Quality=$row['movie_print_result'];    
               ?>
          <div class="thumb col-sm-2 col-xs-12">
          <a href="moviepreview.php?id=<?php echo $id; ?>">
            <div class="col-item">
              <div class="photo  col-sm-12 col-xs-5 ">
              <?php echo "<img src='Admin/Alluploadfolder/Movieposter/$poster' class='img-responsive poster posternonround' alt=''>"?>
                <!-- <img src="img/m1.jpg" class="img-responsive poster posternonround" alt="Qismat"> -->
                <div id="icon-imdb" class="icon-imdb">
                            <div class="span"><h1 class="rating-num">5.9</h1></div>
                  <div class="rating"><div class="div-rate" data-score="5.9" title="regular"><i class="fa fa-fw fa-star" title="regular" data-score="1"></i>&nbsp;<i class="fa fa-fw fa-star" title="regular" data-score="2"></i>&nbsp;<!-- <i class="fa fa-fw fa-star" title="regular" data-score="3"></i>&nbsp; --><i class="fa fa-fw fa-star-o" title="regular" data-score="4"></i>&nbsp;<i class="fa fa-fw fa-star-o" title="regular" data-score="5"></i><input type="hidden" name="score" value="2.95" readonly="readonly"></div> </div>
                          </div>
              </div>
              <div class="info col-sm-12 col-xs-7 textopmrgmoviepg">
                <h6 class="category text-rose2" title='<?php echo $name ?>'> <?php echo $name ?></h6>
                <div class="row">   
                  <div class="col-xs-9 infohdtopgap">
                          <div class="infohd">AD : <?php echo $Add_Date ?></div>
                          <div class="infohd">RD : <?php echo $Released ?></div>
                          <div class="infohd">View : <?php echo $View ?></div>
                          <div class="infohd">Download : <?php echo $Download_Rate ?></div>
                        </div>
                  <div class="col-xs-3 inxcrdbt">
                          <div class="iconse2">
                          <?php echo"<img class='img' src='Admin/Alluploadfolder/Movieicons/$icon' title='$Quality'
                                >"?>
                            <!-- <img class="img" src="movies Icon/movies_hd_16x16.png" title="HDrip" alt="HDrip"> -->
                          </div>
                        </div> 
                </div>
              </div>
            </div></a>
          </div>

         <?php
             }  
           ?>
        
  </div> 

          <div class="item">    

                    <?php

              // $sql="select * from movie ORDER BY id DESC limit 0,6";
              $sql="select * from movie where id order by rand () limit 0,6";
              $result = mysqli_query($con,$sql);
              while($row=mysqli_fetch_array($result))
              {
               $id=$row['id'];
               $poster=$row['Poster'];
               $name=$row['Keywords'];
               $Add_Date=$row['Add_Date']; 
               $Released=$row['Released'];                                       
               $View=$row['View']; 
               $icon=$row['icon'];                                       
               $Download_Rate=$row['Download_Rate']; 
               $Quality=$row['movie_print_result'];    
              ?>
         <div class="thumb col-sm-2 col-xs-12">
         <a href="moviepreview.php?id=<?php echo $id; ?>">
           <div class="col-item">
             <div class="photo  col-sm-12 col-xs-5 ">
             <?php echo "<img src='Admin/Alluploadfolder/Movieposter/$poster' class='img-responsive poster posternonround' alt=''>"?>
               <!-- <img src="img/m1.jpg" class="img-responsive poster posternonround" alt="Qismat"> -->
               <div id="icon-imdb" class="icon-imdb">
                           <div class="span"><h1 class="rating-num">5.9</h1></div>
                 <div class="rating"><div class="div-rate" data-score="5.9" title="regular"><i class="fa fa-fw fa-star" title="regular" data-score="1"></i>&nbsp;<i class="fa fa-fw fa-star" title="regular" data-score="2"></i>&nbsp;<!-- <i class="fa fa-fw fa-star" title="regular" data-score="3"></i>&nbsp; --><i class="fa fa-fw fa-star-o" title="regular" data-score="4"></i>&nbsp;<i class="fa fa-fw fa-star-o" title="regular" data-score="5"></i><input type="hidden" name="score" value="2.95" readonly="readonly"></div> </div>
                         </div>
             </div>
             <div class="info col-sm-12 col-xs-7 textopmrgmoviepg">
               <h6 class="category text-rose2" title='<?php echo $name ?>'> <?php echo $name ?></h6>
               <div class="row">   
                 <div class="col-xs-9 infohdtopgap">
                         <div class="infohd">AD : <?php echo $Add_Date ?></div>
                         <div class="infohd">RD : <?php echo $Released ?></div>
                         <div class="infohd">View : <?php echo $View ?></div>
                         <div class="infohd">Download : <?php echo $Download_Rate ?></div>
                       </div>
                 <div class="col-xs-3 inxcrdbt">
                         <div class="iconse2">
                         <?php echo"<img class='img' src='Admin/Alluploadfolder/Movieicons/$icon' title='$Quality'
                               >"?>
                           <!-- <img class="img" src="movies Icon/movies_hd_16x16.png" title="HDrip" alt="HDrip"> -->
                         </div>
                       </div> 
               </div>
             </div>
           </div></a>
         </div>

        <?php
            }  
          ?>
          
         
         
             </div> 
            </div>
        </div> <!-- row -->

             </div> 

   </div> 
</div>

   <!--  This content show of mobile views -->
             
             
<div class="panel panel-default  visible-xs">
        <div class="panel-heading MLfonts ">Related: Movies
   
    </div>
     <div >
            <div class="panel-body bg">
       
            <!-- Wrapper for slides -->
             <div class="row " style="margin-top: -14px;margin-bottom: -14px;padding-left: 2px;">
            <div class="carousel-inner  slidset">
                <div class=""> <!-- active class remove -->
                

               <?php

              // $sql="select * from movie ORDER BY id DESC limit 0,6";
              $sql="select * from movie where id order by rand () limit 0,6";
              $result = mysqli_query($con,$sql);
              while($row=mysqli_fetch_array($result))
              {
               $id=$row['id'];
               $poster=$row['Poster'];
               $name=$row['Keywords'];
               $Add_Date=$row['Add_Date']; 
               $Released=$row['Released'];                                       
               $View=$row['View']; 
               $icon=$row['icon'];                                       
               $Download_Rate=$row['Download_Rate']; 
               $Quality=$row['movie_print_result'];    
              ?>
         <div class="thumb col-sm-2 col-xs-12" style="margin-bottom: -5px;">
         <a href="moviepreview.php?id=<?php echo $id; ?>">
           <div class="col-item">
             <div class="photo  col-sm-12 col-xs-5 ">
             <?php echo "<img src='Admin/Alluploadfolder/Movieposter/$poster' class='img-responsive poster posternonround' alt=''>"?>
               <!-- <img src="img/m1.jpg" class="img-responsive poster posternonround" alt="Qismat"> -->
               <div id="icon-imdb" class="icon-imdb">
                           <div class="span"><h1 class="rating-num">5.9</h1></div>
                 <div class="rating"><div class="div-rate" data-score="5.9" title="regular"><i class="fa fa-fw fa-star" title="regular" data-score="1"></i>&nbsp;<i class="fa fa-fw fa-star" title="regular" data-score="2"></i>&nbsp;<!-- <i class="fa fa-fw fa-star" title="regular" data-score="3"></i>&nbsp; --><i class="fa fa-fw fa-star-o" title="regular" data-score="4"></i>&nbsp;<i class="fa fa-fw fa-star-o" title="regular" data-score="5"></i><input type="hidden" name="score" value="2.95" readonly="readonly"></div> </div>
                         </div>
             </div>
             <div class="info col-sm-12 col-xs-7 textopmrgmoviepg">
               <h6 class="category text-rose2" title='<?php echo $name ?>'> <?php echo $name ?></h6>
               <div class="row">   
                 <div class="col-xs-9 infohdtopgap">
                         <div class="infohd">AD : <?php echo $Add_Date ?></div>
                         <div class="infohd">RD : <?php echo $Released ?></div>
                         <div class="infohd">View : <?php echo $View ?></div>
                         <div class="infohd">Download : <?php echo $Download_Rate ?></div>
                       </div>
                 <div class="col-xs-3 inxcrdbt">
                         <div class="iconse2">
                         <?php echo"<img class='img' src='Admin/Alluploadfolder/Movieicons/$icon' title='$Quality'
                               >"?>
                           <!-- <img class="img" src="movies Icon/movies_hd_16x16.png" title="HDrip" alt="HDrip"> -->
                         </div>
                       </div> 
               </div>
             </div>
           </div></a>
         </div>

        <?php
            }  
          ?>



  </div> <!-- item active remove -->

 
            </div>
        </div> <!-- row -->

             </div> 

   </div> 
</div>
    
      <!--  End of This content show of mobile views -->                  

                           


				</div> <!-- col-sm-8 col-sm-push-4 end -->

                   <br>

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 hidden-sm "> <!-- Right sidebar start -->
					 
            <div class="row">
           <div class="col-sm-12">
          <img src="frontend-asset/img/banner3.gif" class="img-responsive"alt=""style="width: 100%;">
         </div>
           </div>
           
            

				</div><!-- Right sidebar start -->
     
          </div><!-- main row end -->
     
          </div> <!-- main container end -->

        </div>

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
   
 
<!-- 
   <script src="dist/js/ckin.js"></script> -->

		

  </body>
</html>

       