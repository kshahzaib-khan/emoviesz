<?php
include "pkcon.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>eMoviesz.pk | movies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" lang="en" content="ADD SITE DESCRIPTION">
    <meta name="author" content="ADD AUTHOR INFORMATION">
    <meta name="robots" content="index, follow">

    <link rel="icon" href=" icon/favicon.ico" sizes="90x90">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
     <link href="pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" />
     <link rel="stylesheet" type="text/css" href="css/Enavigatonbar.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/ct-navbar.js"></script>
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
            <img src="img/logo.png" alt="" class="img-responsive">
          </div>
            </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
        <li ><a href="index.php"><i class="pe-7s-home"></i><p>Home</p></a></li>
        <li><a href="islamic.php"><i class="kaaba-mecca"></i><p>Islamic</p></a></li> 
        <li><a href="software.php"><i class="pe-7s-download"></i><p>Softwares</p></a></li> 
        <li ><a href="games.php"><i class="pe-7s-joy"></i><p>Games</p></a></li>    
        <li class="active"><a href="movies.php"><i class="pe-7s-film"></i><p>Movies</p></a></li>
        <li><a href="video.php"><i class="pe-7s-play"></i><p>Videos</p></a></li>
        <li><a href="music.php"><i class="pe-7s-music"></i><p>Music</p></a></li>
        <li><a href="onlinegame.php"><i class="pe-7s-compass"></i><p>Online Games</p></a></li>
        <li><a href="wallpaper.php"><i class="pe-7s-photo-gallery"></i><p>Wallpapers</p></a></li>
        <li><a href="webtv.php"><i class="pe-7s-airplay"></i><p>Web TV</p></a></li>
        <li><a href="mobileapp.php" style="border-radius: 4px;"><i class="fa fa-android" style="font-size:35px;position: relative;"></i><p>Mobi App</p></a></li>
       
        <li><a href="javascript:void(0);" data-toggle="search"><i class="pe-7s-search"></i><p>Search</p></a></li>
      </ul>
        </div><!-- /.navbar-collapse -->

        </div><!-- /.container-fluid -->   
    
    <form action="search" method="get" class="navbar-form navbar-right navbar-search-form" role="search">
        <div class="form-group">
            <input type="text" value="" class="form-control srchinptclr" style="width: 600px; box-shadow: none;" name="s" placeholder="Search...">
        </div>
      <button class="btn btn-primary btn-just-icon"><i class="pe-7s-search"></i></button>
        </form>
        </nav>







        
<br><br><br><br><br><br>
         
       <div class="main2 hidden-sm hidden-xs containerSearchEngine">
    <br>
 

    <div class="container">

      <form method="get" class="navbar-form2" id="search-form" accept-charset="utf-8">
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
          <!-- <select name="CateMainP" class="btn233"> -->
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
          <option value="Action,">Action</option>
          <option value="Adventure,">Adventure</option>
          <option value="Animation">Animation</option>
          <option value="Biography,">Biography</option>
          <option value="Comedy,">Comedy</option>
          <option value="Crime,">Crime</option>
          <option value="Documentary,">Documentary</option>
          <option value="Drama">Drama</option>
          <option value="Family,">Family</option>
          <option value="Fantasy,">Fantasy</option>
          <option value="History,">History</option>
          <option value="Horror,">Horror</option>
          <option value="Music,">Music</option>
          <option value="Musical,">Musical</option>
          <option value="Mystery,">Mystery</option>
          <option value="Romance,">Romance</option>
          <option value="Sci-Fi,">Sci-Fi</option>
          <option value="Short,">Short</option>
          <option value="Sport,">Sport</option>
          <option value="Thriller,">Thriller</option>
          <option value="War,">War</option>
          <option value="Western,">Western</option>
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
      <form method="get" class="navbar-form2" accept-charset="utf-8">
      <div class="form-group" style="display:inline;">
        <div class="input-group">
          <span class="input-group-btn " style="padding-bottom: 4px; padding-top: 11px;">
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
              <input class="form-control" id="search-input2" name="search_query" class="search-input" type="text" placeholder="search Movies" style="padding: 5px;border-radius: 4px 0px 0px 4px;">
          </div>
            <div class="input-group-btn navbar-btn"><button class="btn btn-default btn-nav go">GO</button></div>
        </div>
             
     <!--  <div class="input-group center-block">
      <input class="form-control" id="search-input2" name="k" type="text" placeholder="search movies" autocomplete="off">
      <div class="suggestresult"></div>
      </div>
      <div class="input-group-btn navbar-btn"><button class="btn btn-default btn-nav go">GO</button>
      </div> -->

      </div>
      </form>
      </div>
    </div>
    <!-- End Mobile Search Engine --> 
    
    <?php  

$page_no = isset($_GET['page_no']) && is_numeric($_GET['page_no']) ? $_GET['page_no'] : 1;


$total_records_per_page = 12;






$result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM `movie`");
	$total_records = mysqli_fetch_array($result_count);
	$total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
	$second_last = $total_no_of_pages - 1; // total page minus 1


	if ($page_no < 1) { 
		$page_no = 1; 
	} else if ($page_no> $total_no_of_pages) { 
		$page_no = $total_no_of_pages; 
	}




	$offset = ($page_no-1) * $total_records_per_page;
	$previous_page = $page_no - 1;
	$next_page = $page_no + 1;
	$adjacents = "2";

  

$character = '';  
if(isset($_GET["character"]))  
{  
     $character = $_GET["character"];  
     $character = preg_replace('#[^a-z]#i', '', $character);  
     $query = "SELECT * FROM movie  WHERE Keywords LIKE '$character%'";  


}  
else  
{  
     $query = "SELECT * FROM movie   ORDER BY id DESC  limit $offset, $total_records_per_page";  
}  
      $result = mysqli_query($con, $query);  
?>  


    
    <div class= "container" style="background-color:white"><!-- main container start -->
      
      <div class="row"> <!--  all center data main row start -->
        <div class="col-sm-8 fwd">


                  <div class="moveis1 ">
        <div class="panel panel-default LatestMovies mbsmgtp">
         <div class="panel-heading MLfonts"> <span class="toll" data-toggle="tooltip" title="Movies Album">Movies Album</span> › All Random</div>
      

     <div class="btn-group btn-group-sm" style="top:-1px;">
          <!-- <button class="btn label  sbty">SORT BY:</button> -->
          <li class="btn btn-default sbtym">SORT BY:</li>
 <li class="btn btn-default pgbt666m"><a href="movies.php?q=num" class="">0-9</a></li>
   
  <?php  
      $character = range('A', 'Z');  
                         // echo '<ul class="pagination ">';  
      foreach($character as $alphabet)  
         {  
      echo '<li class="btn btn-default pgbtm"><a href="movies.php?character='.$alphabet.'">'.$alphabet.'</a></li>';  
             }  
                         // echo '</ul>';  
       ?>   
 </div>  





  <span class="input-group-btn btn-block floatrightinputMoviepage ">
    <select class="btn btn-category btn-default dropdown-toggle" style="width: 100px;" id="sort_order" name="cat">
    <option value="Recent">Recently Added</option>
    <option value="NewRel">New Released</option>
    <option value="TopRated">Top Rated</option>
    <option value="MostView">Most Views</option>
    <option value="MostDownload">Most Download</option>
    <option value="Title">By Title</option>
    </select>

    <select class="btn btn-categorys btn-default dropdown-toggle" style="width: 58px;border-radius: 0px 4px 4px 0px;" id="yearselect" name="year">
          <option value="2019">2019</option>
          <option value="2018">2018</option>
          <option value="2017">2017</option>
          <option value="2016">2016</option>
          <option value="2015">2015</option>
          <option value="2014">2014</option>
          <option value="2013">2013</option>
          <option value="2012">2012</option>
          <option value="2011">2011</option>
          <option value="2010">2010</option>
          <option value="2009">2009</option>
          <option value="2008">2008</option>
          <option value="2007">2007</option>
          <option value="2006">2006</option>
          <option value="2005">2005</option>
          <option value="2004">2004</option>
          <option value="2003">2003</option>
          <option value="2002">2002</option>
          <option value="2001">2001</option>
          <option value="2000">2000</option>
          <option value="1999">1999</option>
          <option value="1998">1998</option>
          <option value="1997">1997</option>
          <option value="1996">1996</option>
          <option value="1995">1995</option>
          <option value="1994">1994</option>
          <option value="1993">1993</option>
          <option value="1992">1992</option>
          <option value="1991">1991</option>
          <option value="1990">1990</option>
          <option value="1989">1989</option>
          <option value="1988">1988</option>
          <option value="1987">1987</option>
          <option value="1986">1986</option>
          <option value="1985">1985</option>
          <option value="1984">1984</option>
          <option value="1983">1983</option>
          <option value="1982">1982</option>
          <option value="1981">1981</option>
          <option value="1980">1980</option>
          <option value="1979">1979</option>
          <option value="1978">1978</option>
          <option value="1977">1977</option>
          <option value="1976">1976</option>
          <option value="1975">1975</option>
          <option value="1974">1974</option>
          <option value="1973">1973</option>
          <option value="1972">1972</option>
          <option value="1971">1971</option>
          <option value="1970">1970</option>
          <option value="1969">1969</option>
          <option value="1968">1968</option>
          <option value="1967">1967</option>
          <option value="1966">1966</option>
          <option value="1965">1965</option>
          <option value="1964">1964</option>
          <option value="1963">1963</option>
          <option value="1962">1962</option>
          <option value="1961">1961</option>
          <option value="1960">1960</option>
          <option value="1959">1959</option>
          <option value="1958">1958</option>
          <option value="1957">1957</option>
          <option value="1956">1956</option>
          <option value="1955">1955</option>
          <option value="1954">1954</option>
          <option value="1953">1953</option>
          <option value="1952">1952</option>
          <option value="1951">1951</option>
          <option value="1950">1950</option>
          <option value="1949">1949</option>
          <option value="1948">1948</option>
          <option value="1947">1947</option>
          <option value="1946">1946</option>
          <option value="1945">1945</option>
          <option value="1944">1944</option>
          <option value="1943">1943</option>
          <option value="1942">1942</option>
          <option value="1941">1941</option>
          <option value="1940">1940</option>
              </select>
    </span>
          

        <div class="panel-body admrgtopmovi" style="background-color:white;">
         

           <div class="row" ><!-- Start of Software row> -->
           
               
          
           <?php
          
            // start this code  two categories  select Allcategories and Genre display data 

            if( $Quality != "" AND $CateMainP != "" AND $genre != "" ){

              $query = "SELECT * FROM movie WHERE Keywords = '$search_query' OR movie_print_result = '$Quality' AND CateMainP = '$CateMainP' AND Categories3 = '$genre' ";
               
                $result = mysqli_query($con, $query) or die('error');
                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
                   $id=$row['id'];
                   $poster=$row['Poster'];
                   $name=$row['Keywords'];
                   $Add_Date=$row['Add_Date']; 
                   $Released=$row['Released'];                                       
                   $View=$row['View']; 
                   $icon=$row['icon'];                                       
                   $Download_Rate=$row['Download_Rate']; 
                   $Quality=$row['movie_print_result'];
                   $CateMainP=$row['CateMainP'];
                   $genre=$row['Categories3'];
                   
           
                   ?>
                  <div class="thumb col-sm-2 col-xs-12">
                       <a href="moviepreview.php?id=<?php echo $id; ?>">
                       <div class="col-item">
                         <div class="photo  col-sm-12 col-xs-5 ">
                         <?php echo "<img src='Admin/Alluploadfolder/Movieposter/$poster' class='img-responsive poster posternonround' alt=''>"?>
                           <div id='icon-imdb' class='icon-imdb'>
                                       <div class="span"><h1 class="rating-num">5.9</h1></div>
                             <div class="rating"><div class="div-rate" data-score="5.9" title="regular"><i class="fa fa-fw fa-star" title="regular" data-score="1"></i>&nbsp;<i class="fa fa-fw fa-star" title="regular" data-score="2"></i>&nbsp;<!-- <i class="fa fa-fw fa-star" title="regular" data-score="3"></i>&nbsp; --><i class="fa fa-fw fa-star-o" title="regular" data-score="4"></i>&nbsp;<i class="fa fa-fw fa-star-o" title="regular" data-score="5"></i><input type="hidden" name="score" value="2.95" readonly="readonly"></div> </div>
                                     </div>
                         </div>
                         <div class="info col-sm-12 col-xs-7 ">
                           <h6 class="category text-rose2" title='<?php echo $name;?>' ><?php echo $name;?></h6>
                           <div class="row">   
                             <div class="col-xs-9 infohdtopgap">
                                     <div class="infohd">AD : <?php echo $Add_Date;?></div>
                                     <div class="infohd">RD : <?php echo $Released;?></div>
                                     <div class="infohd">View : <?php echo $View;?></div>
                                     <div class="infohd">Download : <?php echo $Download_Rate;?></div>
                                   </div>
                             <div class="col-xs-3 inxcrdbt">
                                     <div class="iconse2">
                                     <?php echo"<img class='img' src='Admin/Alluploadfolder/Movieicons/$icon' title='$Quality'
                                           >"?>
                                     </div>
                                   </div> 
                           </div>
                         </div>
                       </div></a>
                     </div>
                   <?php
                  }
           
                }
              }

            // end this code  two categories  select Allcategories and Genre display data 



            //  start this code  three categories  select  anyone categories selected categories  display data 

  if(isset($_GET['search_query']) OR isset($_GET['genre']) OR isset($_GET['Allcate']) OR isset($_GET['Quality'])){

    // $search_query = Keywords
    // $genre =  Categories3
    // $Allcate =  CateMainP
    // $Quality = movie_print_result
    
    
    $search_query=$_GET['search_query'];
    $genre = $_GET['genre'];
    $Allcate = $_GET['Allcate'];
    $Quality = $_GET['Quality'];                     
   

    $query = "SELECT * FROM movie WHERE Keywords = '$search_query' OR Categories3 ='$genre' OR CateMainP='$Allcate' OR movie_print_result ='$Quality' ";

    
     $result = mysqli_query($con, $query) or die('error');
     if(mysqli_num_rows($result) > 0){
       while($row = mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $poster=$row['Poster'];
        $name=$row['Keywords'];
        $Add_Date=$row['Add_Date']; 
        $Released=$row['Released'];                                       
        $View=$row['View']; 
        $icon=$row['icon'];                                       
        $Download_Rate=$row['Download_Rate']; 
        $Quality=$row['movie_print_result'];
        $CateMainP=$row['CateMainP'];
        $genre=$row['Categories3'];
                    
      
        

        ?>
        
        
        <div class="thumb col-sm-2 col-xs-12">
    <a href="moviepreview.php?id=<?php echo $id; ?>">
    <div class="col-item">
      <div class="photo  col-sm-12 col-xs-5 ">
      <?php echo "<img src='Admin/Alluploadfolder/Movieposter/$poster' class='img-responsive poster posternonround' alt=''>"?>
        <div id='icon-imdb' class='icon-imdb'>
                    <div class="span"><h1 class="rating-num">5.9</h1></div>
          <div class="rating"><div class="div-rate" data-score="5.9" title="regular"><i class="fa fa-fw fa-star" title="regular" data-score="1"></i>&nbsp;<i class="fa fa-fw fa-star" title="regular" data-score="2"></i>&nbsp;<!-- <i class="fa fa-fw fa-star" title="regular" data-score="3"></i>&nbsp; --><i class="fa fa-fw fa-star-o" title="regular" data-score="4"></i>&nbsp;<i class="fa fa-fw fa-star-o" title="regular" data-score="5"></i><input type="hidden" name="score" value="2.95" readonly="readonly"></div> </div>
                  </div>
      </div>
      <div class="info col-sm-12 col-xs-7 ">
        <h6 class="category text-rose2" title='<?php echo $name;?>' ><?php echo $name;?></h6>
        <div class="row">   
          <div class="col-xs-9 infohdtopgap">
                  <div class="infohd">AD : <?php echo $Add_Date;?></div>
                  <div class="infohd">RD : <?php echo $Released;?></div>
                  <div class="infohd">View : <?php echo $View;?></div>
                  <div class="infohd">Download : <?php echo $Download_Rate;?></div>
                </div>
          <div class="col-xs-3 inxcrdbt">
                  <div class="iconse2">
                  <?php echo"<img class='img' src='Admin/Alluploadfolder/Movieicons/$icon' title='$Quality'
                        >"?>
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
          // end this code  three categories  select  anyone categories selected categories  display data 




          
                  // start first  time visit data load code
                  if(!isset($_GET['search_query']) OR !isset($_GET['Allcate']) OR !isset($_GET['genre'])){

    
        
            $result = mysqli_query($con, $query) or die('error');
            if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $poster=$row['Poster'];
                $name=$row['Keywords'];
                $Add_Date=$row['Add_Date']; 
                $Released=$row['Released'];                                       
                $View=$row['View']; 
                $icon=$row['icon'];                                       
                $Download_Rate=$row['Download_Rate']; 
                $Quality=$row['movie_print_result'];
                $CateMainP=$row['CateMainP'];
                $genre=$row['Categories3'];
                            
        
               
       
               ?>
                 
                 <div class="thumb col-sm-2 col-xs-12">
            <a href="moviepreview.php?id=<?php echo $id; ?>">
            <div class="col-item">
              <div class="photo  col-sm-12 col-xs-5 ">
              <?php echo "<img src='Admin/Alluploadfolder/Movieposter/$poster' class='img-responsive poster posternonround' alt=''>"?>
                <div id='icon-imdb' class='icon-imdb'>
                            <div class="span"><h1 class="rating-num">5.9</h1></div>
                  <div class="rating"><div class="div-rate" data-score="5.9" title="regular"><i class="fa fa-fw fa-star" title="regular" data-score="1"></i>&nbsp;<i class="fa fa-fw fa-star" title="regular" data-score="2"></i>&nbsp;<!-- <i class="fa fa-fw fa-star" title="regular" data-score="3"></i>&nbsp; --><i class="fa fa-fw fa-star-o" title="regular" data-score="4"></i>&nbsp;<i class="fa fa-fw fa-star-o" title="regular" data-score="5"></i><input type="hidden" name="score" value="2.95" readonly="readonly"></div> </div>
                          </div>
              </div>
              <div class="info col-sm-12 col-xs-7 ">
                <h6 class="category text-rose2" title='<?php echo $name;?>' ><?php echo $name;?></h6>
                <div class="row">   
                  <div class="col-xs-9 infohdtopgap">
                          <div class="infohd">AD : <?php echo $Add_Date;?></div>
                          <div class="infohd">RD : <?php echo $Released;?></div>
                          <div class="infohd">View : <?php echo $View;?></div>
                          <div class="infohd">Download : <?php echo $Download_Rate;?></div>
                        </div>
                  <div class="col-xs-3 inxcrdbt">
                          <div class="iconse2">
                          <?php echo"<img class='img' src='Admin/Alluploadfolder/Movieicons/$icon' title='$Quality'
                                >"?>
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


     

           </div>  <!-- End of Software row --> 
            
          
             
             <center>Page <?php echo $page_no." of ".$total_no_of_pages; ?> <br>
         
           <div class="page-nation"> 
           <ul class="pagination pagination-sm"">
           <?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>
    
    <li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
    <a <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?><i class="fa fa-arrow-left arrowright" aria-hidden="true""></i></a>
    </li>
         
      <?php 
    if ($total_no_of_pages <= 10){  	 
      for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
        if ($counter == $page_no) {
         echo "<li class='active'><span>$counter</span></li>";	
          }else{
             echo "<li><a href='?page_no=$counter'>$counter</a></li>";
          }
          }
    }
    elseif($total_no_of_pages > 10){
      
    if($page_no <= 4) {			
     for ($counter = 1; $counter < 8; $counter++){		 
        if ($counter == $page_no) {
         echo "<li class='active'><span>$counter</span></li>";	
          }else{
             echo "<li><a href='?page_no=$counter'>$counter</a></li>";
          }
          }
      echo "<li><a>...</a></li>";
      //echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
      echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
      }
  
     elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
      echo "<li><a href='?page_no=1'>1</a></li>";
      echo "<li><a href='?page_no=2'>2</a></li>";
          echo "<li><a>...</a></li>";
          for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
             if ($counter == $page_no) {
         echo "<li class='active'><span>$counter</span></li>";	
          }else{
             echo "<li><a href='?page_no=$counter'>$counter</a></li>";
          }                  
         }
         echo "<li><a>...</a></li>";
      // echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
       echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
              }
      
      else {
          echo "<li><a href='?page_no=1'>1</a></li>";
      echo "<li><a href='?page_no=2'>2</a></li>";
          echo "<li><a>...</a></li>";
  
          for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
            if ($counter == $page_no) {
         echo "<li class='active'><span>$counter</span></li>";	
          }else{
             echo "<li><a href='?page_no=$counter'>$counter</a></li>";
          }                   
                  }
              }
    }
  ?>
      
    <li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
    <a <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?><i class="fa fa-arrow-right arrowright" aria-hidden="true""></i></a>
    </li>
      <?php if($page_no < $total_no_of_pages){
    //	echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
      } ?>
</ul>
</div>
         </center>    
  
        



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
          <img src="img/banner3.gif" class="img-responsive"alt=""style="width: 100%;">
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

       