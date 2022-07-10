<?php
 include("pkcon.php");
 $action = $_REQUEST['action'];


  //  start insert data  
 if($action == 'insert' && !empty($_POST)){

  $APkName=$_POST['APkName'];
  $Views=$_POST['Views'];
  $Download_Rate=$_POST['Download_Rate'];
  $Add_Date=$_POST['Add_Date'];
  $Description=$_POST['Description']; 
  $Description = str_replace("'", "\'",$Description);
  
      $upload_directory2  = "Alluploadfolder/mobifolder/";
      $filename          =  $_FILES["mobidownfld"]["name"];
      $upload_directory2  .= $filename;
      $tmp_dir            = $_FILES["mobidownfld"]["tmp_name"];
      $size               = $_FILES["mobidownfld"]["size"]; 
      move_uploaded_file($tmp_dir, $upload_directory2);
  
  
  $Poster =  $_FILES["Poster"]["name"];

  $icon=$_FILES['icon']['name'];
  
   $unique_number=strtoupper(bin2hex(random_bytes(4)));
  
   $icon_filename_extention = pathinfo($icon,PATHINFO_EXTENSION);

   $icon_unique_name = $unique_number.'.'.$icon_filename_extention;
  

  $allowed_exttension = array('gif','png','PNG','jpg','jpeg');
  $Poster = $_FILES['Poster']['name'];
  $file_extention = pathinfo($Poster, PATHINFO_EXTENSION);
   if(!in_array($file_extention, $allowed_exttension)){
       echo json_encode(array('message' => '<h5><i class="fa fa-bomb"></i>You are allowed with only jpg png jpeg Poster image</h5>', 'status' => false));
      
   }
    else{
         
    
  
  if(file_exists("Alluploadfolder/mobiposter/".$_FILES['Poster']['name'])){
  $filename = $_FILES['Poster']['name'];
  
   echo json_encode(array('message' => '<h5> <i class="fa fa-bomb"><Duplicate Image not Inserted</h5>'.$filename, 'status' => false ));
           }
  
           else{
  
  
            $sql="insert into mobiapp(APkName,Views,Download_Rate,Add_Date,Description,Downfolder,filename,Poster,Icon)values
          ('$APkName','$Views','$Download_Rate','$Add_Date','$Description','$upload_directory2','$filename','$Poster','$icon_unique_name')";
  
  
             $query_run = mysqli_query($con,$sql);
  
            if($query_run){
              move_uploaded_file($_FILES["Poster"]["tmp_name"], "Alluploadfolder/mobiposter/".$_FILES["Poster"]["name"]);
              // echo json_encode(array('message' => '<h5> <i class="fa fa-check">Your Record is Successfully saved</5>', 'status' => true));

  
            }

            if($query_run){
              move_uploaded_file($_FILES["icon"]["tmp_name"], "Alluploadfolder/mobiIcons/".$icon_unique_name);
              echo json_encode(array('message' => '<h5> <i class="fa fa-check">Your Record is Successfully saved</5>', 'status' => true));

  
            }
  
          
          else{
   echo json_encode(array('message' => '<h5> <i class="fa fa-bomb"> All Record not Inserted</5>', 'status' => false));
  
      }
  
      }
    }
        }
  
        
        //  end insert data  



 if($action == 'displaydata')

 {
    $query = 'SELECT * FROM  mobiapp';
            $query_run = mysqli_query($con,$query);
 
            $output = "";
            if(mysqli_num_rows($query_run) > 0){
            $output ='
            <table class="table table-bordered">
            <thead>
 
            <tr>
   
               <th>ID</th>
               <th>App name</th>
               <th>Views</th>
               <th>Add_Date</th>
               <th>Poster</th>
               <th>Edit</th>
               <th>Delete</th>
 
                      </thead>';
                      
                      
          
                    while($row = mysqli_fetch_assoc($query_run)){
                    
                        $poster=$row['Poster'];


                          $output .= "<body>
                          
                                 <tr>
                                                                   
              
                               
                              <td class='id'>{$row["id"]}</td>
                              <td>{$row["APkName"]}</td>
                              <td>{$row["Views"]}</td>
                              <td>{$row["Add_Date"]}</td>
                              
                              <td><img src='Alluploadfolder/mobiposter/$poster'width='50px'height='50px'></td>
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

                                  
                          $id=$_POST['mobiapp_id'];
                      $query = "SELECT * FROM mobiapp WHERE id ='$id'";
                       $query_run = mysqli_query($con,$query);
         
                        $row=mysqli_fetch_array($query_run);
         
                        echo  json_encode($row);
         
                                }
                        //   end edit form load data



                    //    start update data

                    if( $action == 'update'&& !empty($_POST)){
 
                        $mobiapp_id = $_POST['mobiapp_id'];


                        $APkName=$_POST['APkName'];
                        $Views=$_POST['Views'];
                        $Download_Rate=$_POST['Download_Rate'];
                        $Description=$_POST['Description']; 
                        $Description = str_replace("'", "\'",$Description);
                        $Add_Date=$_POST['Add_Date'];

                       

                        $old_filename = $_POST['mobifolder_old_image'];
                        $filename          =  $_FILES["mobidownfld"]["name"];
                       
                             if($filename != ''){

                              $upload_directory2  = "Alluploadfolder/mobifolder/".$filename;

                              $update_filename    =  $_FILES["mobidownfld"]["name"];

                             }else{
                              $update_filename =$old_filename;
                              $upload_directory2  = "Alluploadfolder/mobifolder/".$old_filename;
                             }

                  
                         $poster = $_FILES['Poster']['name'];

                         $poster_old_image = $_POST['Poster_old_image'];

                         if($poster != ''){

                           $update_poster = $_FILES['Poster']['name'];

                         }else{

                          $update_poster = $poster_old_image;

                         }


                         $icon = $_FILES['icon']['name'];

                         
                         $icon_old_image = $_POST['icon_old_image'];
                   

                         if($icon != ''){

                        
                          $update_icon = $icon;

                         }else{

                          $update_icon = $_POST['icon_old_image'];


                         }


                         $query = "UPDATE mobiapp SET APkName = '{$APkName}',Views='{$Views}',Download_Rate='{$Download_Rate}',Add_Date='{$Add_Date}',Description='{$Description}',Poster='{$update_poster}',Icon='{$update_icon}',Downfolder='{$upload_directory2}',filename='{$update_filename}' WHERE id ='{$mobiapp_id}'";
           
                         $query_run = mysqli_query($con,$query);
                        
                           if($query_run){
                  
                              if($_FILES['Poster']['name'] !='')
                              {
                               move_uploaded_file($_FILES["Poster"]["tmp_name"], "Alluploadfolder/mobiposter/".$_FILES["Poster"]["name"]);
                                 unlink('Alluploadfolder/mobiposter/'.$poster_old_image);
                              }

                              if($_FILES['icon']['name'] !='')
                              {
                               move_uploaded_file($_FILES["icon"]["tmp_name"], "Alluploadfolder/mobiIcons/".$icon);
                                 unlink('Alluploadfolder/mobiIcons/'.$icon_old_image);
                              }
                             
                              if($_FILES['mobidownfld']['name'] !='')
                              {
                               move_uploaded_file($_FILES["mobidownfld"]["tmp_name"], "Alluploadfolder/mobifolder/".$_FILES["mobidownfld"]["name"]);
                                 unlink('Alluploadfolder/mobifolder/'.$old_filename);
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
   
                $sql="SELECT * FROM mobiapp WHERE id='{$id}'";
  
                    $run_sql=mysqli_query($con,$sql);
                   $result=mysqli_fetch_assoc($run_sql);
  
                   unlink("Alluploadfolder/mobiposter/".$result["Poster"]);
                   unlink("Alluploadfolder/mobiIcons/".$result["Icon"]);
                   unlink("Alluploadfolder/mobifolder/".$result["filename"]);


      
                   $sql1="DELETE FROM mobiapp WHERE id='{$id}'";
                         $run_sql1=mysqli_query($con,$sql1);
                     if($run_sql1){
        echo json_encode(array('message' => '<h5> <i class="fa fa-check"></i>Record Deleted Successfully</h5>', 'status' => true));
  
      }else{
        echo json_encode(array('message' => '<h5> <i class="fa fa-bomb"></i>Record Not Deleted </h5>', 'status' => false ));
      }
     }
        // end Delete code








?>
