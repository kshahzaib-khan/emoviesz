<?php
 include("pkcon.php");
 $action = $_REQUEST['action'];


//  start insert data
if($action == 'insert' && !empty($_POST)){

    $Game_Name=$_POST['Game_Name'];
    $Add_Date=$_POST['Add_Date'];
    $Views=$_POST['Views'];
    $Keywords=$_POST['keywords'];
    $Categories=$_POST['Categories'];
    $game_link=$_POST['game_link'];

  $Poster=$_FILES['Poster']['name'];
 
 $allowed_exttension = array('gif','png','PNG','jpg','jpeg');
 $poster = $_FILES['Poster']['name'];
 $file_extention = pathinfo($poster, PATHINFO_EXTENSION);
   if(!in_array($file_extention, $allowed_exttension)){
       echo json_encode(array('message' => '<h5><i class="fa fa-bomb"></i>You are allowed with only jpg png jpeg Poster image</h5>', 'status' => false));
      
   }
    else{
         
    

 if(file_exists("Alluploadfolder/ongameposter/".$_FILES['Poster']['name'])){
    $filename = $_FILES['Poster']['name'];

   echo json_encode(array('message' => '<h5> <i class="fa fa-bomb"><Duplicate Image not Inserted</h5>'.$filename, 'status' => false ));
           }

           else{

  
            $sql="insert into onlinegame(GameName,Add_Date,Views,Keywords,Categories,game_link,Poster)values
            ('$Game_Name','$Add_Date','$Views','$Keywords','$Categories','$game_link','$Poster')";

             $query_run = mysqli_query($con,$sql);

            if($query_run){
   move_uploaded_file($_FILES["Poster"]["tmp_name"], "Alluploadfolder/ongameposter/".$_FILES["Poster"]["name"]);
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
    $query = 'SELECT * FROM  onlinegame';
            $query_run = mysqli_query($con,$query);
 
            $output = "";
            if(mysqli_num_rows($query_run) > 0){
            $output ='
            <table class="table table-bordered">
            <thead>
 
            <tr>
   
               <th>ID</th>
               <th>Game Name</th>
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
                              <td>{$row["GameName"]}</td>
                              <td>{$row["Add_Date"]}</td>
                              <td>{$row["Categories"]}</td>
                              
                              <td><img src='Alluploadfolder/ongameposter/$poster'width='50px'height='50px'></td>
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

                                  
                          $id=$_POST['onlinegame_id'];
                      $query = "SELECT * FROM onlinegame WHERE id ='$id'";
                       $query_run = mysqli_query($con,$query);
         
                        $row=mysqli_fetch_array($query_run);
         
                        echo  json_encode($row);
         
                                }
                        //   end edit form load data



                    //    start update data

                    if( $action == 'update'&& !empty($_POST)){
 
                        $onlinegame_id = $_POST['onlinegame_id'];

                      
                        $Game_Name=$_POST['Game_Name'];
                        $Add_Date=$_POST['Add_Date'];
                        $Views=$_POST['Views'];
                        $Keywords=$_POST['keywords'];
                        $fetch_Categories=$_POST['fetch_Categories'];
                        $game_link=$_POST['game_link'];
                    


                         $poster = $_FILES['Poster']['name'];

                         $poster_old_image = $_POST['Poster_old_image'];

                         if($poster != ''){

                           $update_poster = $_FILES['Poster']['name'];

                         }else{
                          $update_poster = $poster_old_image;

                         }


                         $query = "UPDATE onlinegame SET GameName = '{$Game_Name}', Add_Date ='{$Add_Date}',Views='{$Views}',Keywords='{$Keywords}',Categories='{$fetch_Categories}',game_link='{$game_link}',Poster='{$update_poster}' WHERE id ='{$onlinegame_id}'";
           
                         $query_run = mysqli_query($con,$query);
                        
                           if($query_run){
                  
                              if($_FILES['Poster']['name'] !='')
                              {
                               move_uploaded_file($_FILES["Poster"]["tmp_name"], "Alluploadfolder/ongameposter/".$_FILES["Poster"]["name"]);
                                 unlink('Alluploadfolder/ongameposter/'.$poster_old_image);
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
   
                $sql="SELECT * FROM onlinegame WHERE id='{$id}'";
  
                    $run_sql=mysqli_query($con,$sql);
                   $result=mysqli_fetch_assoc($run_sql);
  
                   unlink("Alluploadfolder/ongameposter/".$result["Poster"]);

      
                   $sql1="DELETE FROM onlinegame WHERE id='{$id}'";
                         $run_sql1=mysqli_query($con,$sql1);
                     if($run_sql1){
        echo json_encode(array('message' => '<h5> <i class="fa fa-check"></i>Record Deleted Successfully</h5>', 'status' => true));
  
      }else{
        echo json_encode(array('message' => '<h5> <i class="fa fa-bomb"></i>Record Not Deleted </h5>', 'status' => false ));
      }
     }
        // end Delete code








?>
