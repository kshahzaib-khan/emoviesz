<?php
 include("pkcon.php");
 $action = $_REQUEST['action'];


//  start insert data
if($action == 'insert' && !empty($_POST)){

  $Movie_Name=$_POST['Movie_Name'];
  $Add_Date=$_POST['Add_Date'];
  $Views=$_POST['Views'];
  $Down_Rate=$_POST['Down_Rate'];
  $Total_Track=$_POST['Total_Track'];
  $Song_name=$_POST['Song_name'];
  $VD_rate=$_POST['VD_rate'];
  $Keywords=$_POST['Keywords'];
  $Categories=$_POST['Categories'];

  $Description=$_POST['Description']; 
  $Description = str_replace("'", "\'",$Description);
     
  
 
  $Poster=$_FILES['Poster']['name'];
 
  
  $upload_directory2  = "Alluploadfolder/Musicfolder/";
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
         
    

 if(file_exists("Alluploadfolder/Musicposter/".$_FILES['Poster']['name'])){
    $filename = $_FILES['Poster']['name'];

   echo json_encode(array('message' => '<h5> <i class="fa fa-bomb"><Duplicate Image not Inserted</h5>'.$filename, 'status' => false ));
           }

           else{

  
            $sql="insert into music(Movie_Name,Add_Date,Views,Down_Rate,Total_Track,Song_name,V_Drate,Keywords,Categories,Description,Poster,musicfolder,filename)values
            ('$Movie_Name','$Add_Date','$Views','$Down_Rate','$Total_Track','$Song_name','$VD_rate','$Keywords','$Categories','$Description','$Poster','$upload_directory2','$filename')";

             $query_run = mysqli_query($con,$sql);

            if($query_run){
   move_uploaded_file($_FILES["Poster"]["tmp_name"], "Alluploadfolder/Musicposter/".$_FILES["Poster"]["name"]);
    echo json_encode(array('message' => '<h5> <i class="fa fa-check">Your Record is Successfully saved</h5>', 'status' => true));
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
    $query = 'SELECT * FROM  music';
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
                              <td>{$row["Movie_Name"]}</td>
                              <td>{$row["Add_Date"]}</td>
                              <td>{$row["Categories"]}</td>
                              
                              <td><img src='Alluploadfolder/Musicposter/$poster'width='50px'height='50px'></td>
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

                                  
                          $id=$_POST['music_id'];
                      $query = "SELECT * FROM music WHERE id ='$id'";
                       $query_run = mysqli_query($con,$query);
         
                        $row=mysqli_fetch_array($query_run);
         
                        echo  json_encode($row);
         
                                }
                        //   end edit form load data



                    //    start update data

                    if( $action == 'update'&& !empty($_POST)){
 
                        $music_id = $_POST['music_id'];

                      
                            $Movie_Name=$_POST['Movie_Name'];
                            $Add_Date=$_POST['Add_Date'];
                            $Views=$_POST['Views'];
                            $Down_Rate=$_POST['Down_Rate'];
                            $Total_Track=$_POST['Total_Track'];
                            $Song_name=$_POST['Song_name'];
                            $VD_rate=$_POST['VD_rate'];
                            $Keywords=$_POST['Keywords'];
                            $Categories=$_POST['Categories'];

                        $Description=$_POST['Description']; 
                        $Description = str_replace("'", "\'",$Description);


                        $filename_music =  $_FILES["movupbt"]["name"];
                        $filename_music_old =  $_POST["old_filename"];


                           if($filename_music  !=''){
                            $update_filename_music  = $_FILES["movupbt"]["name"];
                            $upload_directory2  = "Alluploadfolder/Musifolder/".$filename_music;

                           }else{
                            $update_filename_music  = $filename_music_old;
                            $upload_directory2  = "Alluploadfolder/Musicfolder/".$filename_music_old;

                           }


                         $poster = $_FILES['Poster']['name'];

                         $poster_old_image = $_POST['Poster_old_image'];

                         if($poster != ''){

                           $update_poster = $_FILES['Poster']['name'];

                         }else{
                          $update_poster = $poster_old_image;

                         }


                         $query = "UPDATE music SET  Movie_Name = '{$Movie_Name}', Add_Date ='{$Add_Date}',Views='{$Views}',Down_Rate='{$Down_Rate}',Total_Track='{$Total_Track}',Song_name='{$Song_name}',V_Drate='{$VD_rate}',Keywords='{$Keywords}',Categories='{$Categories}',Description='{$Description}',Poster='{$update_poster}',musicfolder='{$upload_directory2}',filename='{$update_filename_music}' WHERE id ='{$music_id}'";
           
                         $query_run = mysqli_query($con,$query);
                        
                           if($query_run){
                  
                              if($_FILES['Poster']['name'] !='')
                              {
                               move_uploaded_file($_FILES["Poster"]["tmp_name"], "Alluploadfolder/Musicposter/".$_FILES["Poster"]["name"]);
                                 unlink('Alluploadfolder/Musicposter/'.$poster_old_image);
                              }
                             
                              if($_FILES['movupbt']['name'] !='')
                              {
                               move_uploaded_file($_FILES["movupbt"]["tmp_name"], "Alluploadfolder/Musicfolder/".$_FILES["movupbt"]["name"]);
                                 unlink('Alluploadfolder/Musicfolder/'.$filename_music_old);
                              }
                              echo json_encode(array('message' => '<h5> <i class="fa fa-check"></i> Record Updated Successfully</h5>', 'status' => true ));
                           
                           }
                            else{
                              echo json_encode(array('message' => 'h5><i class="fa fa-bomb"></i> Record Not Updated</h5>', 'status' => false));
                           
                            }
                          
                          
                        
                             
                      }
                    //    end update data



                          // start Delete code

                    if($action == 'delete'){
                 $id= $_POST['id'];// input field hidden id
   
                $sql="SELECT * FROM music WHERE id='{$id}'";
  
                    $run_sql=mysqli_query($con,$sql);
                   $result=mysqli_fetch_assoc($run_sql);
  
                   unlink("Alluploadfolder/Musicposter/".$result["Poster"]);
                   unlink("Alluploadfolder/Musicfolder/".$result["filename"]);

      
                   $sql1="DELETE FROM music WHERE id='{$id}'";
                         $run_sql1=mysqli_query($con,$sql1);
                     if($run_sql1){
        echo json_encode(array('message' => '<h5> <i class="fa fa-check"></i>Record Deleted Successfully</h5>', 'status' => true));
  
      }else{
        echo json_encode(array('message' => '<h5> <i class="fa fa-bomb"></i>Record Not Deleted </h5>', 'status' => false ));
      }
     }
        // end Delete code








?>
