<?php
 include "pkcon.php";
?>

<?php   

$idwallpaper=$_GET['id'];
$sql="select * from wallpaper where id like'%$idwallpaper%'";
$run=mysqli_query($con,$sql);     
$row=mysqli_fetch_array($run);

                    
 $id=$row['id'];
 $FullName=$row['FullName'];
 $Add_Date=$row['Add_Date'];
 $View=$row['Views'];
 $Download_Rate=$row['Download_Rate'];
 $PicRelateN=$row['PicRelateN'];
 $Categories=$row['Categories'];
 $Poster=$row['filename'];
 

 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>eMoviesz.pk | <?php echo $FullName ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Description" lang="en" content="ADD SITE DESCRIPTION">
		<meta name="author" content="ADD AUTHOR INFORMATION">
		<meta name="robots" content="index, follow">
    <?php
    if($menu ='wallpaper');include_once('front-layout.php');
  ?>
	</head>
	<body class="bgcolor">
      

    <br><br><br><br><br><br>
         
       <!-- Start Desktop Search Engine -->
  <div class="main2 hidden-sm hidden-xs containerSearchEngine">
    <br>
    <div class="container">
      <form  action="wallpaper.php"method="get" class="navbar-form2" accept-charset="utf-8">
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
          <option value="Aero">Aero</option>
           <option value="Black">Black</option>
           <option value="Colorfull">Colorfull</option>
           <option value="Creative">Creative</option>
           <option value="Island">Island</option>
           <option value="Macro">Macro</option> 
                    </select>
          </span>
          
          
          
      <div class="input-group center-block">
      <input class="form-control" id="search-input2" name="search_query" type="text" placeholder="search Wallpapers" autocomplete="off">
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
      <form action="wallpaper.php" method="get" class="navbar-form2"accept-charset="utf-8">
      <div class="form-group" style="display:inline;">
        <div class="input-group">
          <span class="input-group-btn" style="padding-bottom: 4px; padding-top: 11px;">
          <select name="Allcate" style="padding: 0px 0px 0px 4px;border-radius: 4px 4px 4px 4px;" class="form-control">
          <option value="All">All Categories</option>
          <option value="Aero">Aero</option>
           <option value="Black">Black</option>
           <option value="Colorfull">Colorfull</option>
           <option value="Creative">Creative</option>
           <option value="Island">Island</option>
           <option value="Macro">Macro</option>        
            </select>
          </span>
        </div>
        <div class="input-group"> 
          <div class="input-group center-block">
              <input type="text" class="form-control"name="search_query" class="search-input" type="text" placeholder="search Wallpapers" style="padding: 5px;border-radius: 4px 0px 0px 4px;">
          </div>
            <div class="input-group-btn navbar-btn"><button class="btn btn-default btn-nav go">GO</button></div>
        </div>
      </div>
      </form>
      </div>
    </div>
    <!-- End Mobile Search Engine --> 
		
		<div class="container containerpreiew " style="background-color:white;"><!-- main container start -->
			   
			<div class="row"> <!--  all left side data main row start -->
				<div class="col-md-8 fwd ">


                  <div class="moveis1">

               <div class="panel panel-default movpreviw mbsmgtp">

    <div class="panel-heading MLfonts">
    <i class=" monicon fa fa-download "></i>
      <span class="toll" data-toggle="tooltip" title="Wallpaper">Wallpaper</span>
       &rsaquo;
       <span class="toll" data-toggle="tooltip" title='<?php echo $Categories ?>'><?php echo $Categories ?></span> 


      
  </div>

 
<!-- style="margin: -13px -28px -10px -28px;" -->
  <div class="panel-body">                
       
    <div class="col-sm-12">
    <?php echo "<img src='Admin/Alluploadfolder/walpaperposter/$Poster' class='img-responsive posternonround' alt=''>"?>
  </div>
  
  <div class="col-sm-9 col-xs-9 padding-view1">
            <div class="v-title1 MLfonts"><?php echo $FullName ?></div>
                <div class="v-category1" ><a href="" > <?php echo $PicRelateN ?></a></div>
        </div>
                  
        <div class="col-sm-3 col-xs-3 padding-view1">  
            <div class="v-category21" >View : <?php echo $View ?></div><br>
            <div class="v-category21">Download : <?php echo $Download_Rate ?></div>
        </div>
  </div>

    </div> 



<!-- <div class="panel panel-default">
      <div class="panel-heading"><i class="pe-7s-photo-gallery"></i><a href="wallpapers" title="" data-original-title="Wallpapers"> Wallpapers </a> › <a href="wallpapers?cat=23" title="" data-original-title="Nature">Nature</a>,     <a data-toggle="modal" data-target="#modalForm" href="javascript:void(0);" style="font-size: 12px;float: right;padding: 0px 5px;" class="modalForm btn btn-sm btn-success2"><span class="glyphicon glyphicon-link"></span>Report</a>
    </div>
    
    <div class="panel-body">                
        <div class="col-sm-12 padding">
        <div class="wallpaper-js" style="width:100%; text-align:center; margin:0px auto; ">
        <img src="wp/wp13.jpg" style="height:auto;width:100%;" alt="Sun Shining through Wilderness HD">
        </div>
        <div class="col-sm-9 col-xs-9 padding-view">
            <div class="v-title">Sun Shining through Wilderness HD</div>
            <div class="v-category"><a href="wallpapers?k=Lakes"> Lakes</a></div>
        </div>     
        <div class="col-sm-3 col-xs-3 padding-view">    
            <div class="v-category2">View : 3402</div><br>
            <div class="v-category2">Download : 1422</div>
        </div>  
        </div>
    </div>           
  </div>
 -->





   </div> <!-- end movies1 div -->

  <div class="panel panel-default">
      <div class="panel-body" style="padding:0px; margin-bottom:6px;">
       <legend style="padding-left: 8px; margin-bottom: 10px;">Download Links</legend>
      <!-- <div class="col-sm-12  col-xs-12 padding-view">
            <a href="" class="btn btn-sm btn-danger sdownloadbtton">
      <span style="font-size: 16px; top: 5px; " ><i class="fa fa-arrow-circle-o-down"></i></span> |Internet Download Manager 6.33 Build 2</a>
      
      
            
            </div> -->
            <div class="col-sm-12  col-xs-12 padding-view" style="top:5px;">
      <!-- <button id="playbtton" class="btn btn-sm btn-info wlppedldbt1 "><i class="fa  fa-arrow-circle-o-down" style="font-size: 16px;"></i> | 1400x1050</button> -->
      <?php echo  "<a href='Admin/wallpaper_download.php?filename=".$row["filename"]."' class='btn btn-sm btn-info wlppedldbt1 'id='playbtton'>
             
             <style'font-size: 16px; ' ><i class='fa fa-arrow-circle-o-down'></i> | 1400x1050 </a>"?>
      <!-- <button id="playbtton" class="btn btn-sm btn-info  "><i class="fa  fa-arrow-circle-o-down" style="font-size: 16px;"></i> | 1280x1020</button>
      <button id="playbtton" class="btn btn-sm btn-info wlppedldbt2"><i class="fa  fa-arrow-circle-o-down" style="font-size: 16px;"></i> | 1900x1080</button> -->

      </div>
      
    </div>
  </div>


                  

<div class="panel panel-default  hidden-xs">
        <div class="panel-heading">Related: Wallpaper
    <div class="controls pull-right">
        <a class="left btn btn-success2 prev" href="#carousel-example2" data-slide="prev">
    <span class="fa fa-chevron-left chevronleft " style="padding-left: 2px; margin-top:2px;"></span></a>
    <a class="right btn btn-success2 next" href="#carousel-example2" data-slide="next">
    <span class="fa fa-chevron-right chevronRight" style="padding-left: 2px; margin-top:2px;"></span></a>   
    </div>
    </div>
     <div id="carousel-example2" class="carousel slide" data-ride="carousel">
    <div class="panel-body" >
              <!--    padding: 2px 4px 2px 4px; -->
            <!-- Wrapper for slides -->
             <div class="row slidbgmg" style="padding: 2px 4px 7px 4px;">
            <div class="carousel-inner  slidset">
                <div class="item active">
                
                <?php 
            $sql="select * from wallpaper where id order by rand () limit 0,4";
            $result = mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($result)){
              $id=$row['id'];
              $poster=$row['filename'];
              $FullName=$row['FullName'];
              $Add_Date=$row['Add_Date']; 
              $View=$row['Views']; 
              $Download_Rate=$row['Download_Rate'];
              $PicRelateN=$row['PicRelateN'];
           ?>

           <div class="col-sm-3 col-xs-6 thumb" >
               <div class="col-item">
               <a href="Wallpaperpreview.php?id=<?php echo $id; ?>">
               <div class=" photo v_photo col-sm-12 col-xs-12">
               <?php echo "<img src='Admin/Alluploadfolder/walpaperposter/$poster' class='img-responsive  posternonround' alt=''>"?>

                 <!-- <img src="wp/wp1.jpg" class="img-responsive posternonround" alt="Macro"> -->
                  </div>
              <div class="info">
                <h6 class="category text-rose" title='<?php echo $FullName?>'><?php echo $FullName?></h6>
                <div class="infovideo"><?php echo $PicRelateN?></div>
                 <div class="row">   
                 <div class="col-sm-5"> 
                 <div class="infohd">View : <?php echo $View ?></div>
               <div class="infohd">Download : <?php echo $Download_Rate ?></div>
                   </div>
              <div class="col-sm-7 hidden-xs">
            <div class="infohd datevdo"><br>AD: <?php echo $Add_Date ?></div>
                </div>  
                 </div>
                   </div>
                  </a>
                  </div>
                    </div>

                  <?php
                   }
                   ?>


  </div> 

            <div class="item">    

        




            <?php 
            $sql="select * from wallpaper where id order by rand () limit 0,4";
            $result = mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($result)){
              $id=$row['id'];
              $poster=$row['filename'];
              $FullName=$row['FullName'];
              $Add_Date=$row['Add_Date']; 
              $View=$row['Views']; 
              $Download_Rate=$row['Download_Rate'];
              $PicRelateN=$row['PicRelateN'];
           ?>

           <div class="col-sm-3 col-xs-6 thumb" >
               <div class="col-item">
               <a href="Wallpaperpreview.php?id=<?php echo $id; ?>">
               <div class=" photo v_photo col-sm-12 col-xs-12">
               <?php echo "<img src='Admin/Alluploadfolder/walpaperposter/$poster' class='img-responsive  posternonround' alt=''>"?>

                 <!-- <img src="wp/wp1.jpg" class="img-responsive posternonround" alt="Macro"> -->
                  </div>
              <div class="info">
                <h6 class="category text-rose" title='<?php echo $FullName?>'><?php echo $FullName?></h6>
                <div class="infovideo"><?php echo $PicRelateN?></div>
                 <div class="row">   
                 <div class="col-sm-5"> 
                 <div class="infohd">View : <?php echo $View ?></div>
               <div class="infohd">Download : <?php echo $Download_Rate ?></div>
                   </div>
              <div class="col-sm-7 hidden-xs">
            <div class="infohd datevdo"><br>AD: <?php echo $Add_Date ?></div>
                </div>  
                 </div>
                   </div>
                  </a>
                  </div>
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
        <div class="panel-heading MLfonts">Related: Wallpapers
   
    </div>
     <div >
    <div class="panel-body">
       
            <!-- Wrapper for slides -->
             <div class="row " style="margin-top: -14px;margin-bottom: -14px;padding-left: 2px;">
            <div class="carousel-inner  slidset">
                <div class=""> <!-- active class remove -->
                
                <?php 
            $sql="select * from wallpaper where id order by rand () limit 0,4";
            $result = mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($result)){
              $id=$row['id'];
              $poster=$row['filename'];
              $FullName=$row['FullName'];
              $Add_Date=$row['Add_Date']; 
              $View=$row['Views']; 
              $Download_Rate=$row['Download_Rate'];
              $PicRelateN=$row['PicRelateN'];
           ?>

            <div class="thumb col-sm-2 col-xs-12">
            <a href="Wallpaperpreview.php?id=<?php echo $id; ?>">
            <div class="col-item">
              <div class="photo  col-sm-12 col-xs-5">
                <!-- <img src="wp/wp1.jpg" class="img-responsive poster posternonround  w_photo" alt="Macro "> -->
                <?php echo "<img src='Admin/Alluploadfolder/walpaperposter/$poster' class='img-responsive poster  posternonround w_photo' alt=''>"?>

                </div>
              <div class="info col-sm-12 col-xs-7 infotxtopmrgwlppg">
                <h6 class="category text-rose txtopmrgwlppg " title='<?php echo $FullName ?> '> <?php echo $FullName ?> </h6>
                <div class="row">   
                 <div class="col-xs-9 infohd-txtopmrgwlppg">
                  <div class="infohd">AD : <?php echo $Add_Date ?> </div>
                  <div class="infohd">View : <?php echo $View ?> </div>
                  <div class="infohd">Download : <?php echo $Download_Rate ?> </div>
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

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 hidden-sm "> <!-- start of Right sidebar -->

           <hr  style="border: 1.5px solid #D4D4D4;border-radius:6px; margin-top:0px;">
					 <legend >Others</legend>
            <div class="row">
           <div class="col-sm-12">


         <!--  <img src="img/banner3.gif" class="img-responsive"alt=""style="width: 100%;"> -->
         <?php 
            $sql="select * from wallpaper where id order by rand () limit 0,6";
            $result = mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($result)){
              $id=$row['id'];
              $poster=$row['filename'];
              $FullName=$row['FullName'];
              $Add_Date=$row['Add_Date']; 
              $View=$row['Views']; 
              $Download_Rate=$row['Download_Rate'];
              $PicRelateN=$row['PicRelateN'];
           ?>

         <div class="thumb col-sm-12 col-xs-12">
         <a href="Wallpaperpreview.php?id=<?php echo $id; ?>">

        <div class="col-item botmpd">
      <div class="photo col-sm-6 col-xs-6">
      <?php echo "<img src='Admin/Alluploadfolder/walpaperposter/$poster' class='img-responsive poster  posternonround w_othrphoto' alt=''>"?>

        <!-- <img src="wp/wp14.jpg" class="img-responsive  posternonround w_othrphoto" alt="Shadow of the Tomb Raider 2018 Puzzle Video Game "> -->
      </div>
          <div class="info hover1 col-sm-6 col-xs-6 infotxtopmrgwlppg">
                <h6 class="category text-rose5 txtopmrgwlppg" title='<?php echo $FullName?>'><?php echo $FullName?> </h6>
                <div class="infovideo"><?php echo $PicRelateN ?></div>
                <div class="row">   
                  <div class="col-sm-5 infohd-txtopmrgwlpp">
          <div class="infohd">View : <?php echo $View ?></div>
          <div class="infohd">Download : <?php echo $Download_Rate ?></div>
          </div>
            <div class="col-sm-7 hidden-xs">
           <div class="infohd datevdo"><br>AD: <?php echo $Add_Date ?></div>
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
           
            

				</div><!--End Right sidebar -->

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

       