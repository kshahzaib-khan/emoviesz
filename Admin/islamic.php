<?php
session_start();
if (isset($_SESSION['username'])) { 
  
}else{

    header("location:login.php");
     }
?>
 <?php
 include("pkcon.php");
?> 
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="utf-8">
		<title>eMoviesz.pk | Admin | Islamic</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Description" lang="en" content="ADD SITE DESCRIPTION">
		<meta name="author" content="ADD AUTHOR INFORMATION">
		<meta name="robots" content="index, follow">
    <link rel="icon" href="icon/favicon.ico" sizes="90x90">
    <link rel="stylesheet" type="text/css" href="css/custom-uploadbtn.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link href="pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/Enavigatonbar.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
     
    <script src="js/jquery-3.3.1.min.js"></script>
     <script src="js/bootstrap.js"></script>
     <script src="js/custom-uploadbtn.js"></script>
     <script src="js/jquery.dataTables.min.js"></script>
     <script src="js/dataTables.bootstrap.min.js"></script>


    
  
 <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);
        </script>

	</head>
  <style>

 .subg:focus{
 outline:none!important;
  background:#47a647!important;
 border-color:black!important;
 }
 
 @media(max-width:991px){
  .islamic_poster_modal img{
    margin-left: 20px!important;
  }
} 

.check_success_message{
  display:none;
    position:fixed; 
   z-index:1981;
   right:15px;
   width:250px;
   border:solid 2px #5CB85C;
   border-radius: 2px;
   background:#DFF0D8;
   text-align:center;
   padding: 10px;
   top:6px;
 }

 .check_success_message h5{
   color:#3C763D;
    
 }
 
 .check_success_message .fa-check{
     font-size: 20px;
     margin-left: -12px;
     margin-right: 10px;
 }
 
 .check_error_message{
   display:none;
   position:fixed;
   z-index:1981;
   right:15px;
   width:250px;
   border:solid 2px #842029;
   border-radius: 2px;
   background:#F8D7DA;
   text-align:center;
   top:6px;
   padding: 10px;
   
 }
 .check_error_message span{
   color:#842029;
   margin-top:100px;
 
 }
 
 .check_error_message .fa-bomb{
     font-size: 20px;
     margin-left: 12px;
     margin-right: 10px;
 }

 </style>
 
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
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
            <ul class="nav navbar-nav navbar-right navmrg" style="margin-right: -30px;">
              <li ><a href="index.php"><i class="pe-7s-home"></i><p>Home</p></a></li>
        <li><a href="islamic.php"><i class="kaaba-mecca"></i><p>Islamic</p></a></li> 
              <li><a href="software.php"><i class="pe-7s-download"></i><p>Softwares</p></a></li> 
              <li><a href="games.php"><i class="pe-7s-joy"></i><p>Games</p></a></li>
              
              <li><a href="movies.php"><i class="pe-7s-film"></i><p>Movies</p></a></li>
              <li><a href="video.php"><i class="pe-7s-play"></i><p>Videos</p></a></li>
        <li><a href="music.php"><i class="pe-7s-music"></i><p>Music</p></a></li>
        <li><a href="onlinegame.php"><i class="pe-7s-compass"></i><p>Online Games</p></a></li>
        <li><a href="wallpaper.php"><i class="pe-7s-photo-gallery"></i><p>Wallpapers</p></a></li>
        <li><a href="webtv.php"><i class="pe-7s-airplay"></i><p>Web TV</p></a></li>
          <li><a href="mobileapp.php" style="border-radius: 4px;"><i class="fa fa-android" style="font-size:35px;position: relative;"></i><p>Mobi App</p></a></li>
          <!-- <li><a href="mobileapp.php" target="_blank" style="border-radius: 4px;"><i class="fa fa-android" style="font-size:35px;position: relative;"></i><p>Mobi App</p></a></li> -->
        <li><a href="slider.php"><i class="pe-7s-photo"></i><p>slider</p></a></li>
        <!-- <a href="logout.php?logout"><i class="fa fa-2x fa-unlock-alt" aria-hidden="true"></i><br>Login</a>  -->
        <li class="active loginbtn"><a href="logout.php?logout"><i class="pe-7s-unlock " ></i><p>Login</p></a></li>
       
      </ul>
        </div><!-- /.navbar-collapse -->

        </div><!-- /.container-fluid -->   
    
    <form action="search" method="get" class="navbar-form navbar-right navbar-search-form" role="search" >
        <div class="form-group" >
            <input type="text" value="" class="form-control" style="width: 600px; box-shadow: none;" name="s" placeholder="Search...">
        </div>
      <button class="btn btn-primary btn-just-icon"><i class="pe-7s-search"></i></button>
        </form>
        </nav>
             
         <!-- <div class=" alert alert-success check_success_message"id="success-message"></div> -->
         <div class=" alert alert-success check_success_message"id="success-message"></div>

          <div class=" alert alert-danger check_error_message" id="error-message"></div>


                      

		<div class="container Admincontainer"><!-- main container start -->
			   <br>
			  <div class="row">
			  <div class="col-md-12">
        <div class="well well-sm">
         <h1 class="text-muted text-center">Well come to <?php echo $_SESSION['username'];?></h1>
       </div>
      </div>	
        </div>

        <div class="row"> <!-- Start of Card row -->
          
         <div class="col-md-3">
          <div class="panel border1">
            <div class="panel-heading adm1 color1">
              <i class="fa fa-user adminuser"></i>
               <div class=" text-right set">
              <span>Admin</span>
              </div>
               <h4 class="text-right com">comment</h4>
            </div>
            <div class="panel-footer">
             <a href=""> View<i class="fa fa-arrow-circle-right pull-right"></i></a>
            </div>
          </div> 
         </div> 

          <div class="col-md-3">
            <div class="panel border2">
            <div class="panel-heading adm2 color2">
              <i class="fa fa-trash adminuser"></i>
               <div class=" text-right set">
              <span>Delete</span>
              </div>
               <h4 class="text-right com">comment</h4>
            </div>
            <div class="panel-footer">
             <a href=""> View<i class="fa fa-arrow-circle-right pull-right"></i></a>
            </div>
          </div> 
          </div> 

            <div class="col-md-3">
             <div class="panel border3">
             <div class="panel-heading adm3 color3">
              <i class="fa fa-film adminuser"></i>
               <div class=" text-right movi">
              <span>Movies</span>
              </div>
               <h4 class="text-right com">comment</h4>
            </div>
            <div class="panel-footer">
             <a href=""> View<i class="fa fa-arrow-circle-right pull-right"></i></a>
            </div>
          </div> 
           </div> 

            <div class="col-md-3">
            <div class="panel border4">
            <div class="panel-heading adm4 color4">
              <i class="fa fa-cloud-download adminuser"></i>
               <div class=" text-right soft">
              <span>Software</span>
              </div>
               <h4 class="text-right com">comment</h4>
            </div>
            <div class="panel-footer">
             <a href=""> View<i class="fa fa-arrow-circle-right pull-right"></i></a>
            </div>
          </div> 
            </div>

        </div> <!--End of Card row -->
     
               <br>
                     
                
       <div class="Datauploadcontainer"> <!--  Start Data upload container -->
              <div  id="adminform"> <!-- start adminform div -->

              
              
                <center><b class="registation admislmfontup">Upload New Bayan and Naat Shareef</b></center> <br>
                  <form id="insertform">
                   <div class="row"> <!-- start of 1 row -->

                
                        <div class=" col-md-2 col-xs-6 form-group borderround admbtnlf">
                    <label class="admislmfont">Naatkhawn</label>
                     <input type="text" name="Naat_khawn" class="form-control btnwth" placeholder=" Enter ItemName"id="Naat_khawn"required>
                     </div>

                    <div class=" col-md-2 col-xs-6 form-group borderround admbtnrgt">
                    <label class="admislmfont">AddDate</label>
                    <input type="text" name="Add_Date" class="form-control btnwth"placeholder="Enter Add Date"id="Add_Date"required>
                    </div>

                     <div class=" col-md-2 col-xs-6 form-group borderround admbtnlf">
                    <label class="admislmfont">N_B_Name</label>
                     <input type="text" name="N_B_Name" class="form-control btnwth " placeholder=" Enter NatBayan"id="N_B_Name"required>
                    </div>



                       <div class=" col-md-2 col-xs-6 form-group borderround admbtnrgt">
                    <label  class="admislmfont">ViewsRate</label>
                     <input type="text" name="V_DRate" class="form-control btnwth" placeholder=" Enter ViewsRate"id="V_DRate"required>
                    </div>

                     <div class=" col-md-2 col-xs-6 form-group borderround admbtnlf">
                    <label class="admislmfont">DownRate</label>
                     <input type="text" name="Download_Rate" class="form-control btnwth" placeholder="Enter DownloadLink"id="Download_Rate"required>
                    </div>

                         
                          <div class=" col-md-2 col-xs-6 form-group borderround admbtnrgt">
                    <label class="admislmfont">TotalTracks</label>
                     <input type="text" name="Total_Tracks" class="form-control btnwth" placeholder= "Enter Total Tracks"id="Total_Tracks"required>
                    </div>

                      <div class=" col-md-2 col-xs-6 form-group borderround admbtnlf">
                    <label class="admislmfont">V/Drate</label>
                     <input type="text" name="VD_rate" class="form-control btnwth" placeholder="Enter V/D-rate"id="VD_rate"required>
                    </div>

                    <div class=" col-md-2 col-xs-6 form-group borderround admbtnrgt">
                      <label class="admislmfont">Keywords</label>
                       <input type="text" name="Keywords" class="form-control btnwth" placeholder="Enter Keywords"id="Keywords"required>
                      </div>

                    
                    <div class=" col-md-2 col-xs-6 form-group inputstyle admbtnlf">
                      <label class="admislmfont" >Categories</label>
                      <select name="Categories" class="form-control btnwth"id="Categories"required>
                      <option value=""hidden >Select</option>
                      <option value="Bayaan">Bayaan</option>
                      <option value="Shareef">Shareef</option>
                      </select>
                    </div>

                 

                    <div class=" col-md-2 col-xs-6 form-group borderround admbtnrgt">
                       <label class="admislmfont">Description</label>
                       <textarea style="height: 35px;" name="Description" class="form-control btnwth " row="6" placeholder=" Description"id="Description"required></textarea>
                     </div>
                     
              
                           <div class=" col-md-2  col-xs-6 form-group borderround admbtnlf">
                       <label class="admislmfont ">Poster </label>
                       <input type="file" name=" Poster" id="file-1" class=" inputfile inputfile-1 form-control"id="Poster"required accept=".png, .jpg, .jpeg">
        
            <label for="file-1"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg><span class="admislmfont"></span></label> 

                    </div>

                    <div class=" col-md-2  col-xs-6 form-group borderround filebtnislm">
                      <label class="admislmfont ">Downfolder </label>
                      <input type="file" name="movupbt" id="file-2" class="inputfile inputfile-1" id="movupbt"required accept=".mp3">
                            <label for="file-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span class="admislmfont cfbblk"></span></label>
        
                                       </div>


                                      

                  <div class="centrdivmov">
                  <div class=" col-md-6 col-sm-12 col-xs-12 form-group borderround">
                        <label class="btnmfnt"> Submit</label>
                        <input type="Submit" name="sub"value="Submit"class="btn btn-success form-control subg"id="sub">
                       </div> 
                         </div>
                    

                         </div> <!-- end of 1 row -->
   
                             <div class="row">
      
               <!-- <div class="alert1" id="success-message"></div> 

              <div class="alert2D" id="error-message"></div>   -->

                     </div>

                     <input type="hidden"name="action"value="insert">
                 </form>
                
           

    
                                
                  </div><!-- End of adminform div -->
    
                 </div><!--  End Data upload container -->



                         <!-- start updatform model -->

                 <div class="modal fade " id="UpdateModal">
                     <div class="modal-dialog" style="width:92%;">
                       <div class="modal-content modal_bg_color">

                <div class="modal-header">
                    <h4 class="modal-title modal-title-text text-center">islamic all content update</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                      

                <form  method="post" id="Updateform">
                        <div id="edit-form"></div>
                        <div class='modal-body'>
                          <div class="row">


                          <input type='hidden'name='islamic_id'id='islamic_id'>
                        <div class=' col-md-2 col-xs-6 form-group borderround admbtnlf'>
                         <label class='admislmfont'>Naatkhawn</label>

                         

                   <input type='text' name='Naat_khawn' class='form-control btnwth Naat_khawn'>
                       </div>


                       <div class=' col-md-2 col-xs-6 form-group borderround admbtnrgt'>
                <label class='admislmfont'>AddDate</label>
                <input type='text' name='Add_Date' class='form-control btnwth Add_Date'>
                </div>



                <div class=' col-md-2 col-xs-6 form-group borderround admbtnlf'>
                <label class='admislmfont'>Naat and Bayaan Name</label>
                 <input type='text' name='N_B_Name' class='form-control btnwth Naat_Bayan'>
                </div>



                   <div class=' col-md-2 col-xs-6 form-group borderround admbtnrgt'>
                <label  class='admislmfont'>ViewsRate</label>
                 <input type='text' name='V_DRate' class='form-control btnwth Views_Rate'>
                </div>


                <div class=' col-md-2 col-xs-6 form-group borderround admbtnlf'>
                <label class='admislmfont'>DownRate</label>
                 <input type='text' name='Download_Rate' class='form-control btnwth Down_Rate'>
                </div>

                     
                      <div class=' col-md-2 col-xs-6 form-group borderround admbtnrgt'>
                <label class='admislmfont'>TotalTracks</label>
                 <input type='text' name='Total_Tracks' class='form-control btnwth Total_Tracks'>
                </div>

                  <div class=' col-md-2 col-xs-6 form-group borderround admbtnlf'>
                <label class='admislmfont'>V/Drate</label>
                 <input type='text' name='VD_rate' class='form-control btnwth VD_rate'>
                </div>


                <div class=' col-md-2 col-xs-6 form-group borderround admbtnrgt'>
                  <label class='admislmfont'>Keywords</label>
                   <input type='text' name='Keywords' class='form-control btnwth Keywords'>
                  </div>

                    
                <div class=' col-md-2 col-xs-6 form-group inputstyle admbtnlf'>
                  <label class='admislmfont' >Categories</label>
                  <select name='Categories' class='form-control btnwth Categories'>
           
                  <option value='Bayaan'>Bayaan</option>
                

                  <option  value='Shareef'>Shareef</option>

                 
                  </select>
                </div>

                <div class=' col-md-2 col-xs-6 form-group borderround admbtnrgt'>
                   <label class='admislmfont'>Description</label>
                   <textarea style='height: 35px;' name='Description' class='form-control btnwth Description' row='6'></textarea>
                 </div>
                 
          
                       <div class=' col-md-2  col-xs-6 form-group borderround admbtnlf'>
                   <label class='admislmfont '>Poster </label>
                   <input type='file'name='Poster'class='form-control'accept=".png, .jpg, .jpeg">

                        <input type='hidden'name='Poster_old_image' class='Poster_old_image'>
                </div>

                <div class=' col-md-2  col-xs-6 form-group borderround filebtnislm'>
                  <label class='admislmfont '>Downfolder </label>
                  <input type='file' name='movupbt'class='form-control' accept=".mp3">
                          <input type='hidden'name='old_filename'class='old_filename'>

                                   </div>




                                   <div class='row'>
                                  <div class='col-md-offset-9 islamic_poster_modal'>
                                    <div class="poster_preview"></div>
                                </div>

                                <div class=''style='float:right;margin-top:-60px; margin-right:20px;'>
                                  <div class="audio_mp3"></div>
                                  
                           
                                                </div>

                            </div>
                        </div>  <!-- end row -->
                         
                        </div>
                       
                    <div class="modal-footer">
                    <input type="hidden" class="form-control" name="action"value="update">
                    <button type="submit" class='btn btn-success'>Update</button>



                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
        <!-- end updatform model -->
              
              
     

               

                   <!-- Start All data Fetch table -->

               <div id="table-data" class="table-responsive">

               </div>  

           <!-- End All data Fetch table -->
            
         

                 </div> <!-- main container end -->
                  
                    


                  <script>

           $(document).ready(function(){
 
           //Show Success or Error Messages
             function message(message, status){
            if(status == true){
            $("#success-message").html(message).slideDown();
            $("#error-message").fadeOut();
            setTimeout(function(){
            $("#success-message").fadeOut();
            },2000);

            }else if(status == false){
            $("#error-message").html(message).slideDown();
           $("#success-message").fadeOut();
           setTimeout(function(){
           $("#error-message").fadeOut();
           },2000);
          }
        }



            //  ajax with table page load

        function loadTable(){
           $.ajax({
            url:"islamic_ajax_request_pages.php",
            type:"POST",
            data:{action:'displaydata'},
            success: function(data){
            $("#table-data").html(data);

            $("table").DataTable({
              order: [0, 'dec']
            });
            
            }
           });

          }
           loadTable(); //  ajax with table page load

                    //  start insert data with ajax
           $("#insertform").on("submit", function(e){

           e.preventDefault();

               $.ajax({
               url :"islamic_ajax_request_pages.php",
               type : "POST",
               data: new FormData(this),
               dataType: 'json',
                contentType : false,
               processData : false,
              success: function(data){ 
                message(data.message, data.status);
                 if(data.status == true){
                   loadTable();
                  $("#insertform").trigger("reset");
                $(".inputfile,span").empty(); 
              } 
                 }
               });

                      });

               //  end insert data with ajax

                    $(document).on('click','.edit-btn',function(){
                      // var islamic_id = $(this).closest("tr").find('.stud_id').text();
                     

                        var islamic_id = $(this).data('editid');
                        $('#islamic_id').val(islamic_id);
                        $.ajax({
                           url:"islamic_ajax_request_pages.php",
                           method:"POST",
                           data:{islamic_id:islamic_id, action:'edit'},
                           dataType:"json", 
                           success:function(data){
                            
                             $('.Add_Date').val(data.Add_Date);
                               $('.Naat_khawn').val(data.name);
                               $('.Naat_Bayan').val(data.Naat_Bayan);
                               $('.Views_Rate').val(data.Views_Rate);
                               $('.Down_Rate').val(data.Down_Rate);
                               $('.Total_Tracks').val(data.Total_Tracks);
                               $('.VD_rate').val(data.VD_rate);
                               $('.Keywords').val(data.Keywords);
                               $('.Description').val(data.Description);
                               $('.Categories').val(data.Categories);
                               $('.old_filename').val(data.filename);
                               $('.Poster_old_image').val(data.Poster);

                               
                               $('.poster_preview').html('<img src="Alluploadfolder/islamicposter/'+data.Poster+'" height="55" width="55"/>');
                               $('.audio_mp3').html('<audio controls style="width: 210px;"><source src="Alluploadfolder/islamicdownfolder/'+data.filename+'"type="audio/mp3"></audio>');

                           }
                        });

                    });

                   //  start  update code
               
               $("#Updateform").on('submit',function(e){

                     e.preventDefault();
                    
                        const formData = new FormData(this);
                           
                       $.ajax({
                        url:"islamic_ajax_request_pages.php",
                       type: "POST",
                       data: formData,
                       dataType:"json",
                       processData: false,
                       contentType: false,
                      
                          success:function(data){
                            loadTable();
                            message(data.message, data.status);

                            if(data.status == true){
                            $("#UpdateModal").modal("hide");

                            }
                          }

                          
                    });
               });
              
           
              //  end  update code

                              //  Start Delete code
                      $(document).on( "click",'#delete-data',function(e){
                      const id = $(this).data("id");
                      
                      e.preventDefault();
                      $.ajax({
                        url:"islamic_ajax_request_pages.php",
                        type: "POST",
                        dataType:"json",
                        data: { id:id,action:'delete'},
                     
            
                          success:function(data){
                          
                            loadTable();
                            message(data.message, data.status);

                            if(data.status == true){
                           

                            }
                          }

                          
                    });
                    });
                    //  End Delete code

   });

</script> 
               <footer class="margin-tb-3">
              <div class="container">
        <div class="row">
          <div class="col-xs-12 ftmrg">
<center><h5>Copyrights © 2019 - 2020 eMoviesz.Pk. All Rights Reserved and developer by Shahzaib khan.</h5></center>
</div>
        </div>
    </div>
    </footer>
 <script src="js/custom-uploadbtn.js"></script>
  </body>
</html>

       