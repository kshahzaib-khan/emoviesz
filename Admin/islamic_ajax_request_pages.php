<?php
 include("pkcon.php");
 $action = $_REQUEST['action'];


//  start insert data
if($action == 'insert' && !empty($_POST)){
  $Naat_khawn=$_POST['Naat_khawn'];
  $Add_Date=$_POST['Add_Date'];
  $N_B_Name=$_POST['N_B_Name'];
  $V_DRate=$_POST['V_DRate'];
  $Download_Rate=$_POST['Download_Rate'];
  $Total_Tracks=$_POST['Total_Tracks'];
  $VD_rate=$_POST['VD_rate'];
  $Keywords=$_POST['Keywords'];
  $Categories=$_POST['Categories'];
  
  $Description= $_POST['Description'];
  $Description = str_replace("'", "\'",$Description);
  
  // $upload_directory1 = "Alluploadfolder/islamicposter/";
  $Poster=$_FILES['Poster']['name'];
  // $upload_directory1 .= $Poster;
  // $Poster_tmp=$_FILES['Poster']['tmp_name'];
  // move_uploaded_file($Poster_tmp,"Alluploadfolder/islamicposter/$Poster");
  
  
  $upload_directory2  = "Alluploadfolder/islamicdownfolder/";
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
         
    

 if(file_exists("Alluploadfolder/islamicposter/".$_FILES['Poster']['name'])){
    $filename = $_FILES['Poster']['name'];

   echo json_encode(array('message' => '<h5> <i class="fa fa-bomb"></i>Duplicate Image not Inserted</h5>'.$filename, 'status' => false ));
           }

           else{

  
            $sql="insert into islamic(name,Add_Date,Naat_Bayan,Views_Rate,Down_Rate,Total_Tracks,VD_rate,Keywords,Categories,Description,Poster,Down_folder,filename)values
            ('$Naat_khawn','$Add_Date','$N_B_Name','$V_DRate','$Download_Rate','$Total_Tracks','$VD_rate','$Keywords','$Categories','$Description','$Poster','$upload_directory2','$filename')";

             $query_run = mysqli_query($con,$sql);

            if($query_run){
   move_uploaded_file($_FILES["Poster"]["tmp_name"], "Alluploadfolder/islamicposter/".$_FILES["Poster"]["name"]);
    echo json_encode(array('message' => '<h5> <i class="fa fa-check"></i>Your Record is Successfully saved</h5>', 'status' => true));
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
    $query = 'SELECT * FROM islamic';
            $query_run = mysqli_query($con,$query);
 
            $output = "";
            if(mysqli_num_rows($query_run) > 0){
            $output ='
            <table class="table table-bordered">
            <thead>
 
            <tr>
   
               <th>ID</th>
               <th>Naat khawan Name</th>
               <th>Naat and Bayaan Name</th>
               <th>Bayaan and Naat</th>
               <th>Poster</th>
               <th>Edit</th>
               <th>Delete</th>
 
                      </thead>';
                      
                      
          
                    while($row = mysqli_fetch_assoc($query_run)){
                    
                        $poster=$row['Poster'];

                          $output .= "<body>
                          
                                 <tr>
                                                                   
              
                               
                              <td class='id'>{$row["id"]}</td>
                              <td>{$row["name"]}</td>
                              <td>{$row["Naat_Bayan"]}</td>
                              <td>{$row["Categories"]}</td>
                              
                              <td><img src='Alluploadfolder/islamicposter/$poster'width='50px'height='50px'></td>
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

                                  
                          $id=$_POST['islamic_id'];
                      $query = "SELECT * FROM islamic WHERE id ='$id'";
                       $query_run = mysqli_query($con,$query);
         
                        $row=mysqli_fetch_array($query_run);
         
                        echo  json_encode($row);
         
                                }
                        //   end edit form load data



                    //    start update data

                    if( $action == 'update'&& !empty($_POST)){
 
                        $islamic_id = $_POST['islamic_id'];
                        $Naat_khawn=$_POST['Naat_khawn'];
                        $Add_Date=$_POST['Add_Date'];
                        $N_B_Name=$_POST['N_B_Name'];
                        $V_DRate=$_POST['V_DRate'];
                        $Download_Rate=$_POST['Download_Rate'];
                        $Total_Tracks=$_POST['Total_Tracks'];
                        $VD_rate=$_POST['VD_rate'];
                        $Keywords=$_POST['Keywords'];
                        $Categories=$_POST['Categories'];
                        $Description= $_POST['Description'];
                        $Description = str_replace("'", "\'",$Description);

                        $filename_mp3 =  $_FILES["movupbt"]["name"];

                        $filename_mp3_old =  $_POST["old_filename"];


                           if($filename_mp3  !=''){
                            $update_filename_mp3  = $_FILES["movupbt"]["name"];
                            $upload_directory2  = "Alluploadfolder/islamicdownfolder/".$update_filename_mp3;

                           }else{
                            $upload_directory2  = "Alluploadfolder/islamicdownfolder/".$filename_mp3_old;

                            $update_filename_mp3  = $filename_mp3_old;
                           }


                         $poster = $_FILES['Poster']['name'];

                         $poster_old_image = $_POST['Poster_old_image'];

                         if($poster != ''){

                           $update_poster = $_FILES['Poster']['name'];

                         }else{
                          $update_poster = $poster_old_image;

                         }


                         $query = "UPDATE islamic SET  name = '{$Naat_khawn}', Add_Date ='{$Add_Date}', Naat_Bayan='{$N_B_Name}', Views_Rate='{$V_DRate}',Down_Rate='{$Download_Rate}',Total_Tracks='{$Total_Tracks}',VD_rate='{$V_DRate}',Keywords='{$Keywords}',Categories='{$Categories}',Description='{$Description}',Poster='{$update_poster}',Down_folder='{$upload_directory2}',filename='{$update_filename_mp3}'WHERE id ='{$islamic_id}'";
           
                         $query_run = mysqli_query($con,$query);
                        
                           if($query_run){
                  
                              if($_FILES['Poster']['name'] !='')
                              {
                               move_uploaded_file($_FILES["Poster"]["tmp_name"], "Alluploadfolder/islamicposter/".$_FILES["Poster"]["name"]);
                                 unlink('Alluploadfolder/islamicposter/'.$poster_old_image);
                              }
                             
                              if($_FILES['movupbt']['name'] !='')
                              {
                               move_uploaded_file($_FILES["movupbt"]["tmp_name"], "Alluploadfolder/islamicdownfolder/".$_FILES["movupbt"]["name"]);
                                 unlink('Alluploadfolder/islamicdownfolder/'.$filename_mp3_old);
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
   
                $sql="SELECT * FROM islamic WHERE id='{$id}'";
  
                    $run_sql=mysqli_query($con,$sql);
                   $result=mysqli_fetch_assoc($run_sql);
  
                   unlink("Alluploadfolder/islamicposter/".$result["Poster"]);
                   unlink("Alluploadfolder/islamicdownfolder/".$result["filename"]);

      
                   $sql1="DELETE FROM islamic WHERE id='{$id}'";
                         $run_sql1=mysqli_query($con,$sql1);
                     if($run_sql1){
        echo json_encode(array('message' => '<h5> <i class="fa fa-check"></i>Record Deleted Successfully</h5>', 'status' => true));
  
      }else{
        echo json_encode(array('message' => '<h5> <i class="fa fa-bomb"></i>Record Not Deleted </h5>', 'status' => false ));
      }
     }
        // end Delete code








?>
