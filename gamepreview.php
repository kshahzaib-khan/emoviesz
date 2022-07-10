<?php
 include "pkcon.php";
?>
 <?php   

$idgame=$_GET['id'];
$sql="select * from games where id like'%$idgame%'";
$run=mysqli_query($con,$sql);     
$row=mysqli_fetch_array($run);

                    
 $id=$row['id'];
 $name=$row['name'];
 $Add_Date=$row['Add_Date'];
 $View=$row['Views'];
 $Download_Rate=$row['Download_Rate'];
 $Categories1=$row['Categories1'];
 $Categories2=$row['Categories2'];
 $Description= $row['Description'];
 $DBGNISO=$row['DBGNISO'];
 $Poster=$row['Poster'];
 

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
    if($menu ='game'); include_once('front-layout.php');
  ?>
    
	</head>
	<body class="bgcolor">

 

    <br><br><br><br><br><br>
         
       <!-- Start Desktop Search Engine -->
  <div class="main2 hidden-sm hidden-xs   containerSearchEngine">
    <br>
       <div class="container">
      <form action="games.php"method="get" class="navbar-form2"accept-charset="utf-8">
      <div class="form-group" style="display:inline;">
        <div class="input-group">

          <span class="input-group-btn">
          <select name="Allcate" class="btn2331">
          <option value="All">All Categories</option>
          <option value="Action,">Action</option>
          <option value="Adventure,">Adventure</option>
          <option value="Counter Strike,">Counter Strike</option>
          <option value="Fighting,">Fighting</option>
          <option value="Racing,">Racing</option>
          <option value="Shooter">Shooter</option>
          <option value="kids">kids</option>
          <option value="Sports,">Sports</option>
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
      <form action="gamepreview.php" method="get" class="navbar-form2"accept-charset="utf-8">
      <div class="form-group" style="display:inline;">
        <div class="input-group">
          <span class="input-group-btn" style="padding-bottom: 4px; padding-top: 11px;">
          <select name="Allcate" style="padding: 0px 0px 0px 4px;border-radius: 4px 4px 4px 4px;" class="form-control">
          <option value="All">All Categories</option>
          <option value="Action,">Action</option>
          <option value="Adventure,">Adventure</option>
          <option value="Counter Strike,">Counter Strike</option>
          <option value="Fighting,">Fighting</option>
          <option value="Racing,">Racing</option>
          <option value="Shooter">Shooter</option>
          <option value="kids">kids</option>
          <option value="Sports,">Sports</option>        
             </select>
          </span>
        </div>
        <div class="input-group"> 
          <div class="input-group center-block">
              <input type="text" class="form-control" id="search-input2" name="search_query" class="search-input" type="text" placeholder="search Software" style="padding: 5px;border-radius: 4px 0px 0px 4px;">
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

    <div class="panel-heading MLfonts ">
    <i class=" monicon fa fa-gamepad "></i>
      <span class="toll" data-toggle="tooltip" title="Games">Games</span>
       &rsaquo;
       <span class="toll" data-toggle="tooltip" title='<?php echo $Categories1 ?>'><?php echo $Categories1 ?></span> 


<span class="toll" data-toggle="tooltip" title='<?php echo $Categories2 ?>'><?php echo $Categories2 ?></span>


      
  </div>

 

  <div class="panel-body">                
        <div class="col-sm-12 spadding4"><legend class="MLfonts"><?php echo $name ?></legend></div>
    <div class="col-sm-5 spadding pssmbl">
    <?php echo "<img src='Admin/Alluploadfolder/gameposter/$Poster' class='img-responsive' alt=''>"?>

    <!-- <img src="game/g4.jpg" class="img-responsive" alt="Shadow of the Tomb Raider"> -->
    </div>
  <div class="col-sm-7 spadding4">
  <br>
      <div class="panel panel-default spadding">  
          <div class="panel-body " style="margin: -9px;">
      
        <div class="col-sm-6 col-xs-6 sveiws-content"> <b>Views</b> <?php echo $View ?><br> <b>Downloads</b> <?php echo $Download_Rate ?></div> 
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

  <div class="panel panel-default">
      <div class="panel-body" style="padding:0px; margin-bottom:6px;">
       <legend style="padding-left: 8px; margin-bottom: 10px;">Download Links</legend>
      <div class="col-sm-12  col-xs-12 padding-view">
           <?php echo  "<a href='Admin/game_download.php?filename=".$row["filename"]."' class='btn btn-sm btn-success sdownloadbtton'>
      <span style='font-size: 16px; top: 5px; ' ><i class='fa fa-arrow-circle-o-down '></i></span> |   $DBGNISO </a>"?>
      
      
            
            </div>
      
    </div>
  </div>


                  

<div class="panel panel-default  hidden-xs">
        <div class="panel-heading">Related: Games
    <div class="controls pull-right">
        <a class="left btn btn-success2 prev" href="#carousel-example2" data-slide="prev">
    <span class="fa fa-chevron-left chevronleft " style="padding-left: 2px;"></span></a>
    <a class="right btn btn-success2 next" href="#carousel-example2" data-slide="next">
    <span class="fa fa-chevron-right chevronRight" style="padding-left: 2px;"></span></a>   
    </div>
    </div>
     <div id="carousel-example2" class="carousel slide" data-ride="carousel">
    <div class="panel-body" >
       
            <!-- Wrapper for slides -->
             <div class="row slidbgmg" style="padding: 2px 4px 2px 4px;">
        
            <div class="carousel-inner  slidset">
                <div class="item active">
                
          <?php 

            $sql="select * from games where id order by rand () limit 0,6";
            $result = mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($result)){
              $id=$row['id'];
              $poster=$row['Poster'];
              $name=$row['name'];
              $Add_Date=$row['Add_Date']; 
              $View=$row['Views']; 
              $Download_Rate=$row['Download_Rate']; 
           ?>

           <div class="thumb col-sm-2 col-xs-12">
           <a href="gamepreview.php?id=<?php echo $id; ?>">
            <div class="col-item">
              <div class="photo col-sm-12 col-xs-5">
              <?php echo "<img src='Admin/Alluploadfolder/gameposter/$poster' class='img-responsive poster posternonround' alt=''>"?>

                <!-- <img src="game/g7.png" class="img-responsive poster posternonround" alt="Mafia III"> -->
                </div>
              <div class="info col-sm-12 col-xs-7 textopmrggamepg">
                <h6 class="category text-rose" title='<?php echo $name ?>'> <?php echo $name ?></h6> 
                <div class="row">   
                 <div class="col-xs-9">
                  <div class="infohd">AD : <?php echo $Add_Date ?></div>
                  <div class="infohd">View : <?php echo $View ?></div>
                  <div class="infohd">Download : <?php echo $Download_Rate ?></div>
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

            $sql="select * from games where id order by rand () limit 0,6";
            $result = mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($result)){
              $id=$row['id'];
              $poster=$row['Poster'];
              $name=$row['name'];
              $Add_Date=$row['Add_Date']; 
              $View=$row['Views']; 
              $Download_Rate=$row['Download_Rate']; 
           ?>

         <div class="thumb col-sm-2 col-xs-12">
         <a href="gamepreview.php?id=<?php echo $id; ?>">
            <div class="col-item">
              <div class="photo col-sm-12 col-xs-5">
              <?php echo "<img src='Admin/Alluploadfolder/gameposter/$poster' class='img-responsive poster posternonround' alt=''>"?>

                <!-- <img src="game/g1.jpg" class="img-responsive poster posternonround" alt="Just Cuase 4 "> -->
                </div>
              <div class="info col-sm-12 col-xs-7 textopmrggamepg">
                <h6 class="category text-rose" title='<?php echo $name ?>'><?php echo $name ?> </h6>
                <div class="row">   
                 <div class="col-xs-9">
                  <div class="infohd">AD : <?php echo $Add_Date ?></div>
                  <div class="infohd">View : <?php echo $View ?></div>
                  <div class="infohd">Download : <?php echo $Download_Rate ?></div>
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
        <div class="panel-heading MLfonts">Related: Games
   
    </div>
     <div >
    <div class="panel-body">
       
            <!-- Wrapper for slides -->
             <div class="row " style="margin-top: -14px;margin-bottom: -14px;padding-left: 2px;">
            <div class="carousel-inner  slidset">
                <div class=""> <!-- active class remove -->
                
              <?php 

            $sql="select * from games where id order by rand () limit 0,6";
            $result = mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($result)){
              $id=$row['id'];
              $poster=$row['Poster'];
              $name=$row['name'];
              $Add_Date=$row['Add_Date']; 
              $View=$row['Views']; 
              $Download_Rate=$row['Download_Rate']; 
           ?>

          <div class="thumb col-sm-2 col-xs-12">
          <a href="gamepreview.php?id=<?php echo $id; ?>">
            <div class="col-item">
              <div class="photo col-sm-12 col-xs-5">
              <?php echo "<img src='Admin/Alluploadfolder/gameposter/$poster' class='img-responsive poster posternonround' alt=''>"?>

                <!-- <img src="game/g1.jpg" class="img-responsive poster posternonround" alt="Just Cuase 4 "> -->
                </div>
              <div class="info col-sm-12 col-xs-7 textopmrggamepg">
                <h6 class="category text-rose" title='<?php echo $name ?>'><?php echo $name ?> </h6>
                <div class="row">   
                 <div class="col-xs-9">
                  <div class="infohd">AD : <?php echo $Add_Date ?></div>
                  <div class="infohd">View : <?php echo $View ?></div>
                  <div class="infohd">Download : <?php echo $Download_Rate ?></div>
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

			

          <footer class="margin-tb-3">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 ftmrg">
                  <center>
                    <h5>Copyrights © 2016 - 2020 eBravo.Pk. All Rights Reserved and developer by Shahzaib khan.</h5>
                  </center>
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

       