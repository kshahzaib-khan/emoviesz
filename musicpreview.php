
<?php 
include "pkcon.php";
?>


<?php
$idmusic=$_GET['id'];
$sql="select * from music where id like '%$idmusic%' ";
$run=mysqli_query($con,$sql);
$row=mysqli_fetch_array($run);

$id=$row['id'];
$Poster=$row['Poster'];
$name=$row['Keywords'];
$Song_name=$row['Song_name'];
$Movie_Name=$row['Movie_Name'];
$Total_Track=$row['Total_Track'];
$VD_rate=$row['V_Drate'];
$Views=$row['Views'];
$Add_Date=$row['Add_Date'];
$Down_Rate=$row['Down_Rate'];
$Categories=$row['Categories'];
$Description=$row['Description'];
$musicfolder=$row['musicfolder'];
$filename=$row['filename'];



?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>eMoviesz.pk | <?php echo $name ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Description" lang="en" content="ADD SITE DESCRIPTION">
		<meta name="author" content="ADD AUTHOR INFORMATION">
		<meta name="robots" content="index, follow">
    <?php
    if($menu ='music');include_once('front-layout.php');
  ?>
    
	</head>

	<body class="bgcolor">

      

    <br><br><br><br><br><br>
         
       <!-- Start Desktop Search Engine -->
  <div class="main2 hidden-sm hidden-xs   containerSearchEngine">
    <br>
   <div class="container">
      <form  action ="music.php"method="get" class="navbar-form2" name="search-form" id="search-form" accept-charset="utf-8">
      <div class="form-group" style="display:inline;">
        <div class="input-group">

          <span class="input-group-btn">
          <select name="Allcate" class="btn2331">
          <option value="All">All Categories</option>
          <option value="Bhangra-punjabi">Bhangra/punjabi</option>
           <option value="Bollywood-Movies-Songs">Bollywood Movies Songs</option>
           <option value="Ghazals">Ghazals</option>
           <option value="Indian-Pop-Remix">Indian Pop Remix</option>
           <option value="Pakistani-Songs">Pakistani Songs</option> 
          </select> 
          </span>   

         
          
          
      <div class="input-group center-block">
      <input class="form-control" id="search-input2" name="search_query" type="text" placeholder="search music album" autocomplete="off">
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
      <form action="music.php" method="get" class="navbar-form2" accept-charset="utf-8">
      <div class="form-group" style="display:inline;">
        <div class="input-group">
          <span class="input-group-btn" style="padding-bottom: 4px; padding-top: 11px;">
          <select name="cat" style="padding: 0px 0px 0px 4px;border-radius: 4px 4px 4px 4px;" class="form-control">
          <option value="All">All Categories</option>
          <option value="Bhangra-punjabi">Bhangra/punjabi</option>
           <option value="Bollywood-Movies-Songs">Bollywood Movies Songs</option>
           <option value="Ghazals">Ghazals</option>
           <option value="Indian-Pop-Remix">Indian Pop Remix</option>
           <option value="Pakistani-Songs">Pakistani Songs</option>         
             </select>
          </span>
        </div>
        <div class="input-group"> 
          <div class="input-group center-block">
              <input type="text" class="form-control" id="search-input2" name="search_query" class="search-input" type="text" placeholder="search Music" style="padding: 5px;border-radius: 4px 0px 0px 4px;">
          </div>
            <div class="input-group-btn navbar-btn"><button class="btn btn-default btn-nav go">GO</button></div>
        </div>
      </div>
      </form>
      </div>
    </div>
    <!-- End Mobile Search Engine --> 
		
		<div class="container containerpreiew" style="background-color:white"><!-- main container start -->
			   
			<div class="row"> <!--  all left side data main row start -->
				<div class="col-md-8">


                  <div class="moveis1">

               <div class="panel panel-default movpreviw mbsmgtp">

    <div class="panel-heading MLfonts">
    <i class=" monicon fa fa fa-music "></i>
      <span class="toll" data-toggle="tooltip" title="Music Album">Music Album</span>
       &rsaquo;
       <span class="toll" data-toggle="tooltip" title="Bollywood Movies Songs"><?php echo $Categories ?></span> 


      
  </div>

 

  <div class="panel-body">                
        <div class="col-sm-12 spadding4 " ><legend class="MLfonts"><?php echo $Movie_Name ?></legend></div>
    <div class="col-sm-5 spadding pssmbl">
    <?php echo "<img src='Admin/Alluploadfolder/musicposter/$Poster' class='img-responsive' alt=''>"?>

      <!-- <img src="music/mu9.jpg" class="img-responsive" alt="Munna Michael"> -->
    </div>
  <div class="col-sm-7 spadding4">
  <br>
      <div class="panel panel-default spadding">  
          <div class="panel-body " style="margin: -9px;">
      
        <div class="col-sm-6 col-xs-6 sveiws-content"> <b>Views</b> <?php echo $Views ?><br> <b>Downloads</b> <?php echo $Down_Rate ?></div> 
        </div>
      </div>
      
      <div class="col-sm-12 spadding">
      <table cellpadding="0" cellspacing="0" class="sveiws-content2">
        <tbody>
          <tr>
            <td><b>Added</b></td>
            <td> : </td>

            <td><?php echo $Add_Date ?></td>
          </tr>
          
          <tr>
            <td><b>Total Tracks</b></td>
            <td> : </td>
            
            <td><?php echo $Total_Track ?></td>
          </tr>
          <tr> 
            <td width="100"><b></b></td>
            <td width="10">  </td>
            <td></td> 
          </tr>
          
                    <tr>
            <td valign="top"><b>Description</b></td>
            <td valign="top"> : </td>
            <td class="tdfont"><?php echo $Description ?> </td>
          </tr>
                  </tbody>
      </table>
      </div>
    </div> 
  </div>

    </div> 










   </div> <!-- end movies1 div -->

  
<div class="panel panel-default ">
  <div class="panel-heading" style="padding-bottom: 28px;"><div class="col-md-6 MLfonts">Songs / Download</div><div class="col-md-6 hidden-xs listent" style="padding-left: 180px;">Listen</div><i class="pe-7s-dot"></i></div>
      <!--   <div class="panel-heading"> Listen
   <div class="col-md-6 hidden-xs" >Songs / Download</div>
     </div> -->
    <div class="panel-body music" >


      <div class="row" style="border-bottom: 2px dashed #dddddd; margin: -10px; margin-bottom: 20px;">
            <div style="width: 2%;border-right: 2px dashed #dddddd;" class="col-sm-1 hidden-xs"><i class="fa fa fa-music"></i></div>

          <div style="border-right: 2px dashed #dddddd;" class="col-md-6">
         <?php echo  "<a class='setCounter' href='Admin/music_download.php?filename=".$row["filename"]."'>1) $Song_name</a>"?> 
         </div>
          
          <div class="col-md-12">
            <div class="pull-right">

     <audio preload="auto" controls ="" style="width: 0px; height: 0px; visibility: hidden;">
        
        <?php echo  "<source src='Admin/Alluploadfolder/Musicfolder/$filename'/>"?>

      </audio>
        
        </div>
        </div>
        </div> 


 



        

       
       
 



       
      


           
      


 

            </div> 

   
</div>

                
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

			

                  <footer class="margin-tb-3">
              <div class="container">
        <div class="row">
          <div class="col-xs-12 ftmrg">
          <center><h5>Copyrights © 2019 - 2020 eMoviesz.Pk. All Rights Reserved and developer by Shahzaib khan.</h5></center>
        </div>
        </div>
    </div>
    </footer>

<script>$( function() { $( 'audio' ).audioPlayer(); } );</script>

 <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
   
   



		

  </body>
</html>

       