<?php 
include "pkcon.php";
?>

<?php 

$idgame=$_GET['id'];
$sql="select * from onlinegame where id like'%$idgame%'";
$run=mysqli_query($con,$sql);     
$row=mysqli_fetch_array($run);

$id=$row['id'];
$GameName=$row['GameName'];
$Add_Date=$row['Add_Date'];
$View=$row['Views'];
$Categories=$row['Categories'];
$game_link=$row['game_link'];
$Poster=$row['Poster'];

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>eMoviesz.pk | <?php echo $GameName ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" lang="en" content="ADD SITE DESCRIPTION">
    <meta name="author" content="ADD AUTHOR INFORMATION">
    <meta name="robots" content="index, follow">

    <?php
   if($menu ='onlinegame'); include_once('front-layout.php');
  ?>
    
	</head>
	<body class="bgcolor">

   
    <br><br><br><br><br><br>
         
       <!-- Start Desktop Search Engine -->
  <div class="main2 hidden-sm hidden-xs   containerSearchEngine">
    <br>
       <div class="container">
      <form  action="onlinegame.php"method="get" class="navbar-form2"accept-charset="utf-8">
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
           <option value="Action">Action</option> 
           <option value="Fighting">Fighting</option>
           <option value="Adventure">Adventure</option>
           <option value="Sports">Sports</option>
           <option value="Shooter">Shooter</option>
           <option value="Racing">Racing</option>
           <option value="puzzle">puzzle</option> 
           <option value="Strategy">Strategy</option>  
           <option value="Bombs">Bombs</option> 
          </select> 
          </span> 
          
          
      <div class="input-group center-block">
      <input class="form-control" id="search-input2" name="search_query" type="text" placeholder="search Games" autocomplete="off">
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
      <form action="onlinegame.php" method="get" class="navbar-form2" accept-charset="utf-8">
      <div class="form-group" style="display:inline;">
        <div class="input-group">
          <span class="input-group-btn" style="padding-bottom: 4px; padding-top: 11px;">
          <select name="Allcate" style="padding: 0px 0px 0px 4px;border-radius: 4px 4px 4px 4px;" class="form-control">
          <option value="All">All Categories</option>
           <option value="Action">Action</option> 
           <option value="Fighting">Fighting</option>
           <option value="Adventure">Adventure</option>
           <option value="Sports">Sports</option>
           <option value="Shooter">Shooter</option>
           <option value="Racing">Racing</option>
           <option value="puzzle">puzzle</option> 
           <option value="Strategy">Strategy</option>  
           <option value="Bombs">Bombs</option>         
             </select>
          </span>
        </div>
        <div class="input-group"> 
          <div class="input-group center-block">
              <input type="text" class="form-control" name="search_query"class="search-input" type="text" placeholder="search Software" style="padding: 5px;border-radius: 4px 0px 0px 4px;">
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
    <i class=" monicon fa fa-gamepad "></i>
      <span class="toll" data-toggle="tooltip" title="Games">Games</span>
       &rsaquo;
       <span class="toll" data-toggle="tooltip" title='<?php echo $Categories ?>'><?php echo $Categories ?></span> 


<!-- <span class="toll" data-toggle="tooltip" title="Adventure,"></span> -->


      
  </div>

 

  <!-- <div class="panel-body">                
        <div class="col-sm-12 spadding4"><legend>Shadow of the Tomb Raider</legend></div>
    <div class="col-sm-5 spadding"><img src="game/g4.jpg" class="img-responsive" alt="Shadow of the Tomb Raider"></div>
  <div class="col-sm-7 spadding4">
  <br>
      <div class="panel panel-default spadding">  
          <div class="panel-body " style="margin: -9px;">
      
        <div class="col-sm-6 col-xs-6 sveiws-content"> <b>Views</b> 70840<br> <b>Downloads</b> 70840</div> 
        </div>
      </div>
      
      <div class="col-sm-12 spadding">
      <table cellpadding="0" cellspacing="0" class="sveiws-content2">
        <tbody>
          <tr>
            <td><b>Added</b></td>
            <td> : </td>
            <td>Dec 06, 2018</td>
          </tr>
          
          <tr> 
            <td width="100"><b></b></td>
            <td width="10">  </td>
            <td></td> 
          </tr>
          
                    <tr>
            <td valign="top"><b>Description</b></td>
            <td valign="top"> : </td>
            <td>In the two months since Rise of the Tomb Raider, Lara Croft (Camilla Luddington) and her friend Jonah Maiava (Earl Baylon) have dedicated themselves to stopping the activities of paramilitary organization Trinity. The two track a cell to Cozumel in Mexico that is led by Pedro Dominguez (Carlos Leal), the head of Trinity's High Council. Slipping inside nearby tombs being excavated by Trinity, Lara discovers a temple containing the Dagger of Ix Chel and references to a hidden city. </td>
          </tr>
                  </tbody>
      </table>
      </div>
    </div> 
  </div> -->

  <div class="panel-body"  style="margin: -14px -13px -14px -13px; ">		        
        <div class="col-sm-12 padding">
        <!-- 16:9 aspect ratio -->
        <!-- <div class="embed-responsive embed-responsive-16by9" style="height: 100%; width:100%;"><embed class="games-object" src="https://img-hws.y8.com/cloud/y8-flash-game/contents/item_versions/flash_games/66997/original/bear_in_super_action_adventure.swf"> -->

<div class="embed-responsive embed-responsive-16by9" style="height: 100%; width:100%;"><embed class="games-object" src='<?php echo $game_link?>'>
</div> 


 <!-- 
     <div class="embed-responsive embed-responsive-16by9" style="height: 560px;">    <embed class="games-object" src="https://www.youtube.com/embed/HRku6JKFL3c?rel=0"></div>
 -->
    
 <!-- <div class="embed-responsive embed-responsive-16by9" style="height: 560px;"><embed class="games-object" src="games/puzzle-bubble.swf"></div>  -->

 <!-- <div class="embed-responsive embed-responsive-16by9" style="height:650px; width:100%;margin-left:-1px;"><embed class="games-object" src="http://www.freewebarcade.com/html5/bubbleshooter/index.html"></div> -->

 <!-- <iframe w640"idth=" height="640" scrolling="no" border="0" frameborder="0" src="http://www.freewebarcade.com/html5/bubbleshooter/index.html"></iframe> -->

  <!-- <iframe src="https://play.famobi.com/bubbles-shooter/A-LOGICPLAYS" width="100%"  height="550" scrolling="no"></iframe> -->

    <!-- <iframe src="https://www.gameflare.com/embed/ultimate-spider-man-iron-spider" width="100%"  height="550" scrolling="no"></iframe> -->


		        <div class="col-sm-9 col-xs-9 padding-view">
            <div class="v-title"><?php echo $GameName ?> </div>
        </div>
                  
        <div class="col-sm-3 col-xs-3 padding-view">	
            <div class="v-category2 ">Views Played : <?php  echo $View ?></div><br>
        </div>	
        </div>
	</div>



    </div> 










   </div> <!-- end movies1 div -->

  <!-- div class="panel panel-default">
      <div class="panel-body" style="padding:0px; margin-bottom:6px;">
       <legend style="padding-left: 8px; margin-bottom: 10px;">Download Links</legend>
      <div class="col-sm-12  col-xs-12 padding-view">
            <a href="" class="btn btn-sm btn-success sdownloadbtton">
      <span style="font-size: 16px; top: 5px; " ><i class="fa fa-arrow-circle-o-down "></i></span> |Shadow of the Tomb Raider</a>
      
      
            
            </div>
      
    </div>
  </div> -->


                  



   <!--  This content show of mobile views -->
             
   <div class="panel panel-default  hidden-xs">
        <div class="panel-heading "> Related: Games
    <div class="controls pull-right">
        <a class="left btn btn-success2 prev" href="#carousel-example2" data-slide="prev">
    <span class="fa fa-chevron-left chevronleft " style="padding-left: 2px; margin-top: 2px;"></span></a>
    <a class="right btn btn-success2 next" href="#carousel-example2" data-slide="next">
    <span class="fa fa-chevron-right chevronRight" style="padding-left: 2px; margin-top: 2px;"></span></a>   
    </div>
    </div>
     <div id="carousel-example2" class="carousel slide" data-ride="carousel">
    <div class="panel-body" >
       
            <!-- Wrapper for slides -->
             <div class="row slidbgmg" style="padding: 2px 4px 7px 4px;">
        
            <div class="carousel-inner  slidset">
                <div class="item active">
                
                <?php 
            $sql="select * from onlinegame where id order by rand () limit 0,6";
            $result = mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($result)){
              $id=$row['id'];
              $poster=$row['Poster'];
              $GameName=$row['GameName'];
              $Add_Date=$row['Add_Date']; 
              $View=$row['Views']; 
           ?>
          
          <div class="thumb col-sm-2 col-xs-12">
          <a href="onlinegamepreview.php?id=<?php echo $id; ?>">
            <div class="col-item">
              <div class="photo col-sm-12 col-xs-5">
              <?php echo "<img src='Admin/Alluploadfolder/ongameposter/$poster' class='img-responsive poster posternonround' alt=''>"?>

                <!-- <img src="game/ong1.jpg" class="img-responsive poster posternonround" alt="Papa's Sushiria"> -->
                </div>
              <div class="info col-sm-12 col-xs-7 textopmrgolinegamepg ">
                <h6 class="category text-ongm " title='<?php echo $GameName ?>'><?php echo $GameName ?></h6>
                <div class="row">   
                 <div class="col-xs-9 infohdgmtxt">
                  <div class="infohd">AD : <?php echo $Add_Date ?></div>
                  <div class="infohd">View : <?php echo $View ?></div>
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
            $sql="select * from onlinegame where id order by rand () limit 0,6";
            $result = mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($result)){
              $id=$row['id'];
              $poster=$row['Poster'];
              $GameName=$row['GameName'];
              $Add_Date=$row['Add_Date']; 
              $View=$row['Views']; 
           ?>
          
          <div class="thumb col-sm-2 col-xs-12">
          <a href="onlinegamepreview.php?id=<?php echo $id; ?>">
            <div class="col-item">
              <div class="photo col-sm-12 col-xs-5">
              <?php echo "<img src='Admin/Alluploadfolder/ongameposter/$poster' class='img-responsive poster posternonround' alt=''>"?>

                </div>
              <div class="info col-sm-12 col-xs-7 textopmrgolinegamepg ">
                <h6 class="category text-ongm " title='<?php echo $GameName ?>'><?php echo $GameName ?></h6>
                <div class="row">   
                 <div class="col-xs-9 infohdgmtxt">
                  <div class="infohd">AD : <?php echo $Add_Date ?></div>
                  <div class="infohd">View : <?php echo $View ?></div>
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

    
      <!--  End of This content show of mobile views -->                  

                           


				</div> <!-- col-sm-8 col-sm-push-4 end -->

                   <br>

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 hidden-sm"> <!-- Right sidebar start -->
					 
            <div class="row">
           <div class="col-sm-12">
          <img src="frontend-asset/img/banner3.gif" class="img-responsive"alt="" style="width: 100%;">
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



 <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
   
   



		

  </body>
</html>

       