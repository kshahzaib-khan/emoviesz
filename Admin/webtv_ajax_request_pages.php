<?php
 include("pkcon.php");
 $action = $_REQUEST['action'];


//  start insert data
if($action == 'insert' && !empty($_POST)){

      $channel_name=$_POST['channel_name'];
      $Views=$_POST['Views'];
      $Keywords=$_POST['Keywords'];
      $Categories=$_POST['Categories'];
      $chanel_link=$_POST['chanel_link'];


  $Poster =  $_FILES["Poster"]["name"];


 
 $allowed_exttension = array('gif','png','PNG','jpg','jpeg');
 $Poster = $_FILES['Poster']['name'];
 $file_extention = pathinfo($Poster, PATHINFO_EXTENSION);
   if(!in_array($file_extention, $allowed_exttension)){
       echo json_encode(array('message' => '<h5><i class="fa fa-bomb"></i>You are allowed with only jpg png jpeg Poster image</h5>', 'status' => false));
      
   }
    else{
         
    

 if(file_exists("Alluploadfolder/webposter/".$_FILES['Poster']['name'])){
  $filename = $_FILES['Poster']['name'];

   echo json_encode(array('message' => '<h5> <i class="fa fa-bomb"><Duplicate Image not Inserted</h5>'.$filename, 'status' => false ));
           }

           else{

  
            $sql="insert into webtv(channel_name,Views,Keywords,Categories,Channel_link,Poster)values
            ('$channel_name','$Views','$Keywords','$Categories','$chanel_link','$Poster')";
  

             $query_run = mysqli_query($con,$sql);

            if($query_run){
   move_uploaded_file($_FILES["Poster"]["tmp_name"], "Alluploadfolder/webposter/".$_FILES["Poster"]["name"]);
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
    $query = 'SELECT * FROM  webtv';
            $query_run = mysqli_query($con,$query);
 
            $output = "";
            if(mysqli_num_rows($query_run) > 0){
            $output ='
            <table class="table table-bordered">
            <thead>
 
            <tr>
   
               <th>ID</th>
               <th>channel_name</th>
               <th>Views</th>
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
                              <td>{$row["channel_name"]}</td>
                              <td>{$row["Views"]}</td>
                              <td>{$row["Categories"]}</td>
                              
                              <td><img src='Alluploadfolder/webposter/$poster'width='50px'height='50px'></td>
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

                                  
                          $id=$_POST['webtv_id'];
                      $query = "SELECT * FROM webtv WHERE id ='$id'";
                       $query_run = mysqli_query($con,$query);
         
                        $row=mysqli_fetch_array($query_run);
         
                        echo  json_encode($row);
         
                                }
                        //   end edit form load data



                    //    start update data

                    if( $action == 'update'&& !empty($_POST)){
 
                        $webtv_id = $_POST['webtv_id'];


                        $channel_name=$_POST['channel_name'];
                        $Views=$_POST['Views'];
                        $key_word=$_POST['search_keyword1'];
                       
                        $chanel_link=$_POST['chanel_link'];
                      
                        $fetch_Categories=$_POST['fetch_Categories'];
                      
                  
                         $poster = $_FILES['Poster']['name'];

                         $poster_old_image = $_POST['Poster_old_image'];

                         if($poster != ''){

                           $update_poster = $_FILES['Poster']['name'];

                         }else{

                          $update_poster = $poster_old_image;

                         }


                         $query = "UPDATE webtv SET channel_name = '{$channel_name}',Views='{$Views}',Channel_link='{$chanel_link}',Keywords='{$key_word}',Categories='{$fetch_Categories}',Poster='{$update_poster}' WHERE id ='{$webtv_id}'";
           
                         $query_run = mysqli_query($con,$query);
                        
                           if($query_run){
                  
                              if($_FILES['Poster']['name'] !='')
                              {
                               move_uploaded_file($_FILES["Poster"]["tmp_name"], "Alluploadfolder/webposter/".$_FILES["Poster"]["name"]);
                                 unlink('Alluploadfolder/webposter/'.$poster_old_image);
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
   
                $sql="SELECT * FROM webtv WHERE id='{$id}'";
  
                    $run_sql=mysqli_query($con,$sql);
                   $result=mysqli_fetch_assoc($run_sql);
  
                   unlink("Alluploadfolder/webposter/".$result["Poster"]);

      
                   $sql1="DELETE FROM webtv WHERE id='{$id}'";
                         $run_sql1=mysqli_query($con,$sql1);
                     if($run_sql1){
        echo json_encode(array('message' => '<h5> <i class="fa fa-check"></i>Record Deleted Successfully</h5>', 'status' => true));
  
      }else{
        echo json_encode(array('message' => '<h5> <i class="fa fa-bomb"></i>Record Not Deleted </h5>', 'status' => false ));
      }
     }
        // end Delete code








?>
