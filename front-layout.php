        <link rel="icon" href="frontend-asset/icon/favicon.ico" sizes="90x90">
        <link rel="stylesheet" type="text/css" href="frontend-asset/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="frontend-asset/fonts/font-awesome.min.css">
        <link href="frontend-asset/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="frontend-asset/css/Enavigatonbar.css">
        <link rel="stylesheet" type="text/css" href="frontend-asset/css/style.css">
        <link rel="stylesheet" type="text/css" href="frontend-asset/css/style2.css">
        <link rel="stylesheet" type="text/css" href="frontend-asset/css/default.css">
        <link rel="stylesheet" type="text/css" href="frontend-asset/playercss/playerfont/bzicons.css">
        <link rel="stylesheet" type="text/css" href="frontend-asset/css/ontop.css">
        <link rel="stylesheet" type="text/css" href="frontend-asset/css/plugins-default.css">
        <link rel="stylesheet" href="frontend-asset/plyr.css_3.5.6/plyr.css">

        <link rel="stylesheet" type="text/css" href="frontend-asset/css/audioplayer.css">


        <script src="frontend-asset/js/jquery-3.3.1.min.js"></script>
        
        <script src="frontend-asset/js/video.min.js"></script>
        <script src="frontend-asset/js/volume.js"></script>
        <script src="frontend-asset/js/remember.js"></script>
        <script src="frontend-asset/js/fixed.js"></script>
        <script src="frontend-asset/js/bootstrap.js"></script>
        <script src="frontend-asset/js/ct-navbar.js"></script>
        <script src="frontend-asset/plyr.js_3.5.6/plyr.js"></script>

        <script src="frontend-asset/js/audioplayer.js"></script>
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
     <li class="<?php if($menu == 'home'){echo 'active';} ?>" ><a href="index.php"><i class="pe-7s-home"></i><p>Home</p></a></li>
     <li class="<?php if($menu == 'islamic'){echo 'active';}?>"><a href="islamic.php"><i class="kaaba-mecca"></i><p>Islamic</p></a></li> 
     <li class="<?php if($menu == 'software'){echo 'active';}?>"><a href="software.php"><i class="pe-7s-download"></i><p>Softwares</p></a></li> 
     <li class="<?php if($menu == 'game'){echo 'active';} ?>"><a href="games.php"><i class="pe-7s-joy"></i><p>Games</p></a></li>    
     <li class="<?php if($menu == 'movies'){echo 'active';}?>"><a href="movies.php"><i class="pe-7s-film"></i><p>Movies</p></a></li>
     <li class="<?php if($menu == 'video'){echo 'active';}?>"><a href="video.php"><i class="pe-7s-play"></i><p>Videos</p></a></li>
     <li class="<?php if($menu == 'music'){echo 'active';}?>"><a href="music.php"><i class="pe-7s-music"></i><p>Music</p></a></li>
     <li class="<?php if($menu == 'onlinegame'){echo 'active';}?>"><a href="onlinegame.php"><i class="pe-7s-compass"></i><p>Online Games</p></a></li>
     <li class="<?php if($menu == 'wallpaper'){echo 'active';}?>"><a href="wallpaper.php"><i class="pe-7s-photo-gallery"></i><p>Wallpapers</p></a></li>
     <li class="<?php if($menu == 'webtv'){echo 'active';}?>"><a href="webtv.php"><i class="pe-7s-airplay"></i><p>Web TV</p></a></li>
     <li class="<?php if($menu == 'mobileapp'){echo 'active';}?>"><a href="mobileapp.php" style="border-radius: 4px;"><i class="fa fa-android" style="font-size:35px;position: relative;"></i><p>Mobi App</p></a></li>
    
     <li><a href="javascript:void(0);" data-toggle="search"><i class="pe-7s-search"></i><p>Search</p></a></li>
   </ul>
     </div><!-- /.navbar-collapse -->

     </div><!-- /.container-fluid -->   
 
 <form class="navbar-form navbar-right navbar-search-form" role="search">
     <div class="form-group">
         <input type="text" value="" class="form-control srchinptclr" style="width: 600px; box-shadow: none;"placeholder="Search...">
     </div>
   <button class="btn btn-primary btn-just-icon"><i class="pe-7s-search"></i></button>
     </form>
     </nav>