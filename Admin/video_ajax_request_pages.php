<?php
 include("pkcon.php");
 $action = $_REQUEST['action'];


//  start insert data
if($action == 'insert' && !empty($_POST)){

      $fulname=$_POST['fulname'];
      $Add_Date=$_POST['Add_Date'];
      $Views=$_POST['Views'];
      $Download_Rate=$_POST['Download_Rate'];
      $short_name=$_POST['short_name'];
      $Categories=$_POST['Categories'];
      $Keywords=$_POST['Keywords'];
     
  
 
  $Poster=$_FILES['Poster']['name'];
 
  
  $upload_directory2  = "Alluploadfolder/videofolder/";
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
         
    

 if(file_exists("Alluploadfolder/videoposter/".$_FILES['Poster']['name'])){
    $filename = $_FILES['Poster']['name'];

   echo json_encode(array('message' => '<h5> <i class="fa fa-bomb"><Duplicate Image not Inserted</h5>'.$filename, 'status' => false ));
           }

           else{

  
            $sql="insert into video(Epifullname,Add_Date,Views,Download_Rate,Shortname,Categories,Keywords,Poster,Videofolder,filename)values
          ('$fulname','$Add_Date','$Views','$Download_Rate','$short_name','$Categories','$Keywords','$Poster','$upload_directory2','$filename')";

             $query_run = mysqli_query($con,$sql);

            if($query_run){
   move_uploaded_file($_FILES["Poster"]["tmp_name"], "Alluploadfolder/videoposter/".$_FILES["Poster"]["name"]);
    echo json_encode(array('message' => '<h5> <i class="fa fa-check">Your Record is Successfully saved</56>', 'status' => true));
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
    $query = 'SELECT * FROM video';
            $query_run = mysqli_query($con,$query);
 
            $output = "";
            if(mysqli_num_rows($query_run) > 0){
            $output ='
            <table class="table table-bordered">
            <thead>
 
            <tr>
   
               <th>ID</th>
               <th>Episode Full Name</th>
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
                              <td>{$row["Epifullname"]}</td>
                              <td>{$row["Add_Date"]}</td>
                              <td>{$row["Categories"]}</td>
                              
                              <td><img src='Alluploadfolder/videoposter/$poster'width='50px'height='50px'></td>
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

                                  
                          $id=$_POST['video_id'];
                      $query = "SELECT * FROM video WHERE id ='$id'";
                       $query_run = mysqli_query($con,$query);
         
                        $row=mysqli_fetch_array($query_run);
         
                        echo  json_encode($row);
         
                                }
                        //   end edit form load data



                    //    start update data

                    if( $action == 'update'&& !empty($_POST)){
 
                        $video_id = $_POST['video_id'];

                        $fulname=$_POST['fulname'];
                        $Add_Date=$_POST['Add_Date'];
                        $Views=$_POST['Views'];
                        $Download_Rate=$_POST['Download_Rate'];
                        $short_name=$_POST['short_name'];
                        $Categories=$_POST['Categories'];
                        $Keywords=$_POST['Keywords'];

                        $filename_video =  $_FILES["movupbt"]["name"];


                        $filename_video_old =  $_POST["old_filename"];


                           if($filename_video  !=''){
                            $update_filename_video  = $_FILES["movupbt"]["name"];
                            $upload_directory2  = "Alluploadfolder/videofolder/".$filename_video;

                           }else{
                            $update_filename_video  = $filename_video_old;
                            $upload_directory2  = "Alluploadfolder/videofolder/".$filename_video_old;

                           }


                         $poster = $_FILES['Poster']['name'];

                         $poster_old_image = $_POST['Poster_old_image'];

                         if($poster != ''){

                           $update_poster = $_FILES['Poster']['name'];

                         }else{
                          $update_poster = $poster_old_image;

                         }


                         $query = "UPDATE video SET  Epifullname = '{$fulname}', Add_Date ='{$Add_Date}',Views='{$Views}',Download_Rate='{$Download_Rate}',Shortname='{$short_name}',Categories='{$Categories}',Keywords='{$Keywords}',Categories='{$Categories}',Poster='{$update_poster}',Videofolder='{$upload_directory2}',filename='{$update_filename_video}'WHERE id ='{$video_id}'";
           
                         $query_run = mysqli_query($con,$query);
                        
                           if($query_run){
                  
                              if($_FILES['Poster']['name'] !='')
                              {
                               move_uploaded_file($_FILES["Poster"]["tmp_name"], "Alluploadfolder/videoposter/".$_FILES["Poster"]["name"]);
                                 unlink('Alluploadfolder/videoposter/'.$poster_old_image);
                              }
                             
                              if($_FILES['movupbt']['name'] !='')
                              {
                               move_uploaded_file($_FILES["movupbt"]["tmp_name"], "Alluploadfolder/videofolder/".$_FILES["movupbt"]["name"]);
                                 unlink('Alluploadfolder/videofolder/'.$filename_video_old);
                              }
                              echo json_encode(array('message' => '<span> <i class="fa fa-check"></i> Record Updated Successfully</span>', 'status' => true ));
                           
                           }
                            else{
                              echo json_encode(array('message' => '<span><i class="fa fa-bomb"></i> Record Not Updated</span>', 'status' => false));
                           
                            }
                          
                          
                             }
                    //    end update data



                          // start Delete code

                    if($action == 'delete'){
                 $id= $_POST['id'];// input field hidden id
   
                $sql="SELECT * FROM video WHERE id='{$id}'";
  
                    $run_sql=mysqli_query($con,$sql);
                   $result=mysqli_fetch_assoc($run_sql);
  
                   unlink("Alluploadfolder/videoposter/".$result["Poster"]);
                   unlink("Alluploadfolder/videofolder/".$result["filename"]);

      
                   $sql1="DELETE FROM video WHERE id='{$id}'";
                         $run_sql1=mysqli_query($con,$sql1);
                     if($run_sql1){
        echo json_encode(array('message' => '<span> <i class="fa fa-check"></i>Record Deleted Successfully</span>', 'status' => true));
  
      }else{
        echo json_encode(array('message' => '<span> <i class="fa fa-bomb"></i>Record Not Deleted </span>', 'status' => false ));
      }
     }
        // end Delete code








?>
