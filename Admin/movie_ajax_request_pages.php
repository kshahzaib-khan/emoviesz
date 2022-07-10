<?php
 include("pkcon.php");
 $action = $_REQUEST['action'];


//  start insert data
if($action == 'insert' && !empty($_POST)){

  $Categories1=$_POST['Categories1'];
  $Categories2=$_POST['Categories2'];
  $Categories3=$_POST['Categories3'];
  $cate_single_preview_heading=$_POST['cate_single_preview_heading'];
  $CateMainP=$_POST['CateMainP'];
  $Add_Date=$_POST['Add_Date'];
  $View=$_POST['View'];
  $Download_Rate=$_POST['Download_Rate'];
  $Keywords=$_POST['Keywords'];
  $Q_uality=$_POST['Qu-ality'];
  $Ratings=$_POST['Ratings'];
  $Rated=$_POST['Rated'];                           
  $Released=$_POST['Released'];
  $Genre=$_POST['Genre'];
  $Length=$_POST['Length'];
  $Country=$_POST['Country'];
  $Language=$_POST['Language'];
  $DBMNP=$_POST['DBMNP'];
  
  $Description= $_POST['Description'];
  $Description = str_replace("'", "\'",$Description);
  
  $Actors=$_POST['Actors'];
  $Actors = str_replace("'", "\'",$Actors);
  
  $Director=$_POST['Director'];
  $Director = str_replace("'", "\'",$Director);
  
  $Writer=$_POST['Writer'];
  $Writer = str_replace("'", "\'",$Writer);
  
  
  $Poster=$_FILES['Poster']['name'];

  $icon=$_FILES['icon']['name'];

 
  $upload_directory2  = "Alluploadfolder/Moviefolder/";
  $filename          =  $_FILES["movupbt"]["name"];
  $upload_directory2  .= $filename;
  $tmp_dir            = $_FILES["movupbt"]["tmp_name"];
  $size               = $_FILES["movupbt"]["size"]; 
  move_uploaded_file($tmp_dir, $upload_directory2);


 $allowed_exttension = array('gif','png','PNG','jpg','jpeg');
 $poster = $_FILES['Poster']['name'];
 $file_extention = pathinfo($poster, PATHINFO_EXTENSION);
   if(!in_array($file_extention, $allowed_exttension)){
       echo json_encode(array('message' => '<h5><i class="fa fa-bomb"></i>You are allowed with only jpg png jpeg Poster image</h5>', 'status' => false));
      
   }
    else{
        

 if(file_exists("Alluploadfolder/Movieposter/".$_FILES['Poster']['name'])){
    $filename = $_FILES['Poster']['name'];

   echo json_encode(array('message' => '<h5> <i class="fa fa-bomb"><Duplicate Image not Inserted</h5>'.$filename, 'status' => false ));
           }

           else{

            $sql="insert into movie(Categories1,Categories2,Categories3, cate_single_preview_heading,CateMainP,Add_Date,View,Download_Rate,Keywords,movie_print_result,Ratings,Rated,Released,Genre,Length,Country,Language,DBMNP,Description,Actors,Director,Writer,Poster,icon,downfolder,filename)values
            ('$Categories1','$Categories2','$Categories3', '$cate_single_preview_heading','$CateMainP','$Add_Date','$View','$Download_Rate','$Keywords',' $Q_uality',' $Ratings',' $Rated','$Released','$Genre','$Length','$Country','$Language','$DBMNP','$Description','$Actors','$Director','$Writer','$Poster','$icon','$upload_directory2','$filename')";
            
          
           

             $query_run = mysqli_query($con,$sql);

            if($query_run){
   move_uploaded_file($_FILES["Poster"]["tmp_name"], "Alluploadfolder/Movieposter/".$_FILES["Poster"]["name"]);
    echo json_encode(array('message' => '<h5>  <i class="fa fa-check">Your Record is Successfully saved</h5>', 'status' => true));
            }

            if($query_run){
              move_uploaded_file($_FILES["icon"]["tmp_name"], "Alluploadfolder/Movieicons/".$_FILES["icon"]["name"]);
              //  echo json_encode(array('message' => '<h6>  <i class="fa fa-check">Your Record is Successfully saved</h6>', 'status' => true));
                       }

          else{
   echo json_encode(array('message' => '<h5> All Record not Inserted</h5>', 'status' => false));
 
      }

      }

        }

        }

//  end insert data





 if($action == 'displaydata')

 {
    $query = 'SELECT * FROM movie';
            $query_run = mysqli_query($con,$query);
 
            $output = "";
            if(mysqli_num_rows($query_run) > 0){
            $output ='
            <table class="table table-bordered">
            <thead>
 
            <tr>
   
               <th>ID</th>
               <th>Software Name</th>
               <th>Add Date</th>
               <th>Categories</th>
               <th>Poster</th>
               <th>Edit</th>
               <th>Delete</th>
 
                      </thead>';
                      
                      
          
                    while($row = mysqli_fetch_assoc($query_run)){
                    
                        $poster=$row['Poster'];

                          $output .= "<body>
                          
                                 <tr>
                                                                   
              
                               
                              <td class='id'>{$row["id"]}</td>
                              <td>{$row["Keywords"]}</td>
                              <td>{$row["Add_Date"]}</td>
                              <td>{$row["Categories1"]}</td>
                              
                              <td><img src='Alluploadfolder/Movieposter/$poster'width='50px'height='50px'></td>
                              <td><button class=' btn btn-success btn-sm edit-btn'data-editid='{$row["id"]}'data-toggle='modal'data-target='#UpdateModal'>Edit</button></td>
                             
                             
                             <td> <input type='submit' data-id='{$row["id"]}'id='delete-data' class='btn btn-danger btn-sm'value='Delete'></td>
 

                               </tr>
                               
                                  </body>";
                                     
                                          
                                          
                    }
                   
                   
                    $output.='</table>';
                  
          
                    echo $output;
                      
 
                 }
 
                 else{
                          echo "<h2> NO Record Found</h2>";
                    }
 
                          }


                        //   start edit form load data

                        if($action  == 'edit'){

                                  
                          $id=$_POST['movie_id'];
                      $query = "SELECT * FROM movie WHERE id ='$id'";
                       $query_run = mysqli_query($con,$query);
         
                        $row=mysqli_fetch_array($query_run);
         
                        echo  json_encode($row);
         
                                }
                        //   end edit form load data



                    //    start update data

                    if( $action == 'update'&& !empty($_POST)){
 
                        $movie_id = $_POST['movie_id'];
                          
                        $Categories1=$_POST['Categories1'];
                        $Categories2=$_POST['Categories2'];
                        $Categories3=$_POST['Categories3'];
                        $cate_single_preview_heading=$_POST['cate_single_preview_heading'];
                        $CateMainP=$_POST['CateMainP'];
                        $View=$_POST['View'];
                        $Add_Date=$_POST['Add_Date'];
                        $Download_Rate=$_POST['Download_Rate'];
                        $Keywords=$_POST['Keywords'];
                        $movie_print_result=$_POST['movie_print_result'];
                        $Ratings=$_POST['Ratings'];
                        $Rated=$_POST['Rated'];                           
                        $Released=$_POST['Released'];
                        $Genre=$_POST['Genre'];
                        $Length=$_POST['Length'];
                        $Country=$_POST['Country'];
                        $Language=$_POST['Language'];
                        $DBMNP=$_POST['DBMNP'];
  
                        $Description= $_POST['Description'];
                        $Description = str_replace("'", "\'",$Description);
  
                        $Actors=$_POST['Actors'];
                        $Actors = str_replace("'", "\'",$Actors);
  
                        $Director=$_POST['Director'];
                        $Director = str_replace("'", "\'",$Director);
  
                        $Writer=$_POST['Writer'];
                        $Writer = str_replace("'", "\'",$Writer);
  
                       
  

                        $filename_file_mp4 =  $_FILES["movupbt"]["name"];

                        $old_file_mp4 =  $_POST["old_file_mp4"];


                           if($filename_file_mp4 !=''){

                            $update_filename_mp4  = $_FILES["movupbt"]["name"];
                            $update_directory2  = "Alluploadfolder/Moviefolder/".$filename_file_mp4;

                           }else{
                            $update_filename_mp4  = $old_file_mp4;

                            $update_directory2  = "Alluploadfolder/Moviefolder/".$old_file_mp4;

                           }


                         $Poster = $_FILES['Poster']['name'];

                         $Poster_old_image = $_POST['Poster_old_image'];

                         if($Poster != ''){

                           $update_Poster = $_FILES['Poster']['name'];

                         }else{
                          $update_Poster = $Poster_old_image;

                         }


                         $icon = $_FILES['icon']['name'];

                         $icon_old_image = $_POST['icon_old_image'];

                         if($icon != ''){

                           $update_icon = $_FILES['icon']['name'];

                         }else{
                          $update_icon = $icon_old_image;

                         }

                                                                
                         

                         $query = "UPDATE movie SET  Categories1 ='{$Categories1}',Categories2='{$Categories2}',Categories3='{$Categories3}',cate_single_preview_heading='{$cate_single_preview_heading}',CateMainP='{$CateMainP}',View='{$View}',Add_Date='{$Add_Date}',Download_Rate='{$Download_Rate}',Keywords='{$Keywords}',movie_print_result='{$movie_print_result}',Ratings='{$Ratings}',Released='{$Released}',Genre='{$Genre}',Length='{$Length}',Country='{$Country}',Language='{$Language}',DBMNP='{$DBMNP}',Description='{$Description}',Actors='{$Actors}',Director='{$Director}',Writer='{$Writer}',icon='{$update_icon}',Poster='{$update_Poster}',filename='{$update_filename_mp4}',Downfolder='{$update_directory2}' WHERE id ='{$movie_id}'";
           
                         $query_run = mysqli_query($con,$query);
                        
                           if($query_run){

                            if($_FILES['movupbt']['name'] !='')
                              {
                               move_uploaded_file($_FILES["movupbt"]["tmp_name"], "Alluploadfolder/Moviefolder/".$_FILES["movupbt"]["name"]);
                                 unlink('Alluploadfolder/Moviefolder/'.$old_file_mp4);
                              }
                              // echo json_encode(array('message' => '<span> <i class="fa fa-check"></i> Record Updated Successfully</span>', 'status' => true ));
                  



                              if($_FILES['Poster']['name'] !='')
                              {
                               move_uploaded_file($_FILES["Poster"]["tmp_name"], "Alluploadfolder/Movieposter/".$_FILES["Poster"]["name"]);
                                 unlink('Alluploadfolder/Movieposter/'.$Poster_old_image);
                              }
                             
                              //  echo json_encode(array('message' => '<span> <i class="fa fa-check"></i> Record Updated Successfully</span>', 'status' => true ));

                           

                              if($_FILES['icon']['name'] !='')
                              {
                               move_uploaded_file($_FILES["icon"]["tmp_name"], "Alluploadfolder/Movieicons/".$_FILES["icon"]["name"]);
                                 unlink('Alluploadfolder/Movieicons/'.$icon_old_image);
                              }
                              echo json_encode(array('message' => '<h5> <i class="fa fa-check"></i> Record Updated Successfully</h5>', 'status' => true ));


                           }
                            else{
                              echo json_encode(array('message' => '<h5><i class="fa fa-bomb"></i> Record Not Updated</h5>', 'status' => false));
                           
                            }
                          
                          
                             }
                    //    end update data



                          // start Delete code

                    if($action == 'delete'){
                 $id= $_POST['id'];// input field hidden id
   
                $sql="SELECT * FROM movie WHERE id='{$id}'";
  
                    $run_sql=mysqli_query($con,$sql);
                   $result=mysqli_fetch_assoc($run_sql);
  
                   unlink("Alluploadfolder/Movieposter/".$result["Poster"]);
                   unlink("Alluploadfolder/Moviefolder/".$result["filename"]);
                   unlink("Alluploadfolder/Movieicons/".$result["icon"]);


      
                   $sql1="DELETE FROM movie WHERE id='{$id}'";
                         $run_sql1=mysqli_query($con,$sql1);
                     if($run_sql1){
        echo json_encode(array('message' => '<h5> <i class="fa fa-check"></i>Record Deleted Successfully</h5>', 'status' => true));
  
      }else{
        echo json_encode(array('message' => '<h5> <i class="fa fa-bomb"></i>Record Not Deleted </h5>', 'status' => false ));
      }
     }
        // end Delete code








?>
