<?php
 include("pkcon.php");
 $action = $_REQUEST['action'];


  //  start insert data  
 if($action == 'insert' && !empty($_POST)){

 
  
  $slider_image =  $_FILES["sliderimg"]["name"];
 
  

  $allowed_exttension = array('gif','png','PNG','jpg','jpeg');
  $slider_image = $_FILES['sliderimg']['name'];
  $file_extention = pathinfo($slider_image, PATHINFO_EXTENSION);
   if(!in_array($file_extention, $allowed_exttension)){
       echo json_encode(array('message' => '<h5><i class="fa fa-bomb"></i>You are allowed with only jpg png jpeg Poster image</h5>', 'status' => false));
      
   }
    else{
         
    
  
  if(file_exists("Alluploadfolder/sliderimg/".$_FILES['sliderimg']['name'])){
  $filename = $_FILES['sliderimg']['name'];
  
   echo json_encode(array('message' => '<h5> <i class="fa fa-bomb"><Duplicate Image not Inserted</h5>'.$filename, 'status' => false ));
           }
  
           else{
  
  
            $sql ="insert into sliderimage(slider_img)values ('$slider_image')";
  
  
             $query_run = mysqli_query($con,$sql);
  
            if($query_run){
   move_uploaded_file($_FILES["sliderimg"]["tmp_name"], "Alluploadfolder/sliderimg/".$_FILES["sliderimg"]["name"]);
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
    $query = 'SELECT * FROM  sliderimage';
            $query_run = mysqli_query($con,$query);
 
            $output = "";
            if(mysqli_num_rows($query_run) > 0){
            $output ='
            <table class="table table-bordered">
            <thead>
 
            <tr>
   
               <th>ID</th>
               <th>slider image</th>
               <th>Edit</th>
               <th>Delete</th>
 
                      </thead>';
                      
                      
          
                    while($row = mysqli_fetch_assoc($query_run)){
                    
                        $sliderimage=$row['slider_img'];


                          $output .= "<body>
                          
                                 <tr>
                                                                   
              
                               
                              <td class='id'>{$row["id"]}</td>
                              
                              
                              
                              <td><img src='Alluploadfolder/sliderimg/$sliderimage'width='50px'height='50px'></td>
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

                                  
                          $id=$_POST['slider_id'];
                      $query = "SELECT * FROM sliderimage WHERE id ='$id'";
                       $query_run = mysqli_query($con,$query);
         
                        $row=mysqli_fetch_array($query_run);
         
                        echo  json_encode($row);
         
                                }
                        //   end edit form load data



                    //    start update data

                    if( $action == 'update'&& !empty($_POST)){
 
                        $slider_id = $_POST['slider_id'];


                         $sliderimg = $_FILES['sliderimg']['name'];

                         $sliderimg_old_image = $_POST['sliderimg_old_image'];

                         if($sliderimg != ''){

                           $update_sliderimg = $_FILES['sliderimg']['name'];

                         }else{

                          $update_sliderimg = $sliderimg_old_image;

                         }

                         $query = "UPDATE sliderimage SET slider_img = '{$update_sliderimg}' WHERE id ='{$slider_id }'";
           
                         $query_run = mysqli_query($con,$query);
                        
                           if($query_run){
                  
                              if($_FILES['sliderimg']['name'] !='')
                              {
                               move_uploaded_file($_FILES["sliderimg"]["tmp_name"], "Alluploadfolder/sliderimg/".$_FILES["sliderimg"]["name"]);
                                 unlink('Alluploadfolder/sliderimg/'.$sliderimg_old_image);
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
   
                $sql="SELECT * FROM sliderimage WHERE id='{$id}'";
  
                    $run_sql=mysqli_query($con,$sql);
                   $result=mysqli_fetch_assoc($run_sql);
  
                   unlink("Alluploadfolder/sliderimg/".$result["slider_img"]);
                  


      
                   $sql1="DELETE FROM sliderimage WHERE id='{$id}'";
                         $run_sql1=mysqli_query($con,$sql1);
                     if($run_sql1){
        echo json_encode(array('message' => '<h5> <i class="fa fa-check"></i>Record Deleted Successfully</h5>', 'status' => true));
  
      }else{
        echo json_encode(array('message' => '<h5> <i class="fa fa-bomb"></i>Record Not Deleted </h5>', 'status' => false ));
      }
     }
        // end Delete code








?>
