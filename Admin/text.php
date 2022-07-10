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

$upload_directory1 = "Alluploadfolder/islamicposter/";
$Poster=$_FILES['Poster']['name'];
$upload_directory1 .= $Poster;
$Poster_tmp=$_FILES['Poster']['tmp_name'];
move_uploaded_file($Poster_tmp,"Alluploadfolder/islamicposter/$Poster");


$upload_directory2  = "Alluploadfolder/islamicdownfolder/";
$filename          =  $_FILES["movupbt"]["name"];
$upload_directory2  .= $filename;
$tmp_dir            = $_FILES["movupbt"]["tmp_name"];
$size               = $_FILES["movupbt"]["size"]; 
move_uploaded_file($tmp_dir, $upload_directory2);


$allowed_exttension = array('png','PNG','jpg','jpeg');
$Poster=$_FILES['Poster']['name'];
$file_extention = pathinfo($Poster, PATHINFO_EXTENSION);

  if(!in_array($file_extention, $allowed_exttension)){
      echo json_encode(array('message' => '<span><i class="fa fa-bomb"></i>You are allowed with only jpg png jpeg Poster image</span>', 'status' => false));

  }

 $sql="insert into islamic(name,Add_Date,Naat_Bayan,Views_Rate,Down_Rate,Total_Tracks,VD_rate,Keywords,Categories,Description,Poster,Down_folder,filename)values
('$Naat_khawn','$Add_Date','$N_B_Name','$V_DRate','$Download_Rate','$Total_Tracks','$VD_rate','$Keywords','$Categories','$Description','$Poster','$upload_directory2','$filename')";

if(mysqli_query($con, $sql)){
  echo json_encode(array('message' => ' <i class="fa fa-check"></i> Your Record is Successfully saved', 'status' => true ));


}else{

 
  echo json_encode(array('message' => '<span> <i class="fa fa-bomb"></i>Your Record is not saved</span>', 'status' => false));
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
               <th>Student Name</th>
               <th>Student Class</th>
               <th>Student Phone</th>
               <th>Student Image</th>
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
                              <td><button class=' btn btn-success btn-sm edit-btn' data-id='{$row["id"]}'data-toggle='modal'data-target='#UpdateModal'>Edit</button></td>
                             
                             
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

                        if( $action == 'Edit' && !empty($_POST))
       
                        {
                 
                                $id=$_POST['id'];
                          $query = "SELECT * FROM islamic WHERE id ='$id'";
                         $query_run = mysqli_query($con,$query);
                 
                         $output="";
                           if(mysqli_num_rows(  $query_run) > 0){
                       $output.="<div class='modal-body'>";
                       while($row=mysqli_fetch_assoc( $query_run)){

                             $poster = $row['Poster'];
                             $filename = $row['filename'];
                             $Categories =$row['Categories'];

                             
                           $output .="
                           
                           <div class='row'>

                           <input type='hidden'name='islamic_id'value='{$row["id"]}'>
                    <div class=' col-md-2 col-xs-6 form-group borderround admbtnlf'>
                <label class='admislmfont'>Naatkhawn</label>
                 <input type='text' name='Naat_khawn' class='form-control btnwth' 'id='Naat_khawn'value='{$row["name"]}'>
                 </div>

                <div class=' col-md-2 col-xs-6 form-group borderround admbtnrgt'>
                <label class='admislmfont'>AddDate</label>
                <input type='text' name='Add_Date' class='form-control btnwth'id='Add_Date'value='{$row["Add_Date"]}'>
                </div>

                 <div class=' col-md-2 col-xs-6 form-group borderround admbtnlf'>
                <label class='admislmfont'>N_B_Name</label>
                 <input type='text' name='N_B_Name' class='form-control btnwth'id='N_B_Name'value='{$row["Naat_Bayan"]}'>
                </div>



                   <div class=' col-md-2 col-xs-6 form-group borderround admbtnrgt'>
                <label  class='admislmfont'>ViewsRate</label>
                 <input type='text' name='V_DRate' class='form-control btnwth'value='{$row["Views_Rate"]}'>
                </div>

                 <div class=' col-md-2 col-xs-6 form-group borderround admbtnlf'>
                <label class='admislmfont'>DownRate</label>
                 <input type='text' name='Download_Rate' class='form-control btnwth'value='{$row["Down_Rate"]}'>
                </div>

                     
                      <div class=' col-md-2 col-xs-6 form-group borderround admbtnrgt'>
                <label class='admislmfont'>TotalTracks</label>
                 <input type='text' name='Total_Tracks' class='form-control btnwth'value='{$row["Total_Tracks"]}'>
                </div>

                  <div class=' col-md-2 col-xs-6 form-group borderround admbtnlf'>
                <label class='admislmfont'>V/Drate</label>
                 <input type='text' name='VD_rate' class='form-control btnwth'value='{$row["VD_rate"]}'>
                </div>

                <div class=' col-md-2 col-xs-6 form-group borderround admbtnrgt'>
                  <label class='admislmfont'>Keywords</label>
                   <input type='text' name='Keywords' class='form-control btnwth'value='{$row["Keywords"]}'>
                  </div>

                
                <div class=' col-md-2 col-xs-6 form-group inputstyle admbtnlf'>
                  <label class='admislmfont' >Categories</label>
                  <select name='Categories' class='form-control btnwth'id='Categories'required>

                  if($Categories == 'Bayaan'){
                    <option value='Bayaan'>Bayaan</option>

                  }

                  if($Categories == 'Shareef'){
                    <option value='Shareef'>Shareef</option>
                  }
                  
                  </select>
                </div>

             

                <div class=' col-md-2 col-xs-6 form-group borderround admbtnrgt'>
                   <label class='admislmfont'>Description</label>
                   <textarea style='height: 35px;' name='Description' class='form-control btnwth ' row='6'>{$row["Description"]}</textarea>
                 </div>
                 
          
                       <div class=' col-md-2  col-xs-6 form-group borderround admbtnlf'>
                   <label class='admislmfont '>Poster </label>
                   <input type='file'name=' Poster' class='form-control'>
    
                    <label for=''> <svg xmlns='http://www.w3.org/2000/svg' width='20' height='17' viewBox='0 0 20 17'><path d='M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z'/></svg><span class='admislmfont'></span></label> 
                        <input type='hidden'value='{$row["Poster"]}'name='Poster_old_image'>
                </div>

                <div class=' col-md-2  col-xs-6 form-group borderround filebtnislm'>
                  <label class='admislmfont '>Downfolder </label>
                  <input type='file' name='movupbt' id='file-3' class='inputfile inputfile-1' id='movupbt'>
                        <label for='file-3'><svg xmlns='http://www.w3.org/2000/svg' width='20' height='17' viewBox='0 0 20 17'><path d='M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z'/></svg> <span class='admislmfont cfbblk'></span></label>
                          <input type='hidden'value='{$row["filename"]}'name='old_filename'>

                                   </div>

                                 </div>
                                 
                                 
                                  <div class='row'>
                                  <div class='col-md-offset-9 islamic_poster_modal'> <img src='Alluploadfolder/islamicposter/$poster'style='width:60px; height:60px;'></div>


                                  <div>
                                  <div class=''style='float:right;margin-top:-60px; margin-right:20px;'>
                                  
                                         <audio controls style='width: 210px;'>
                                    
                                               <source src='Alluploadfolder/islamicdownfolder/$filename' type='audio/mp3'>
 
                                                       </audio>
                                  
                                                       </div>";

                          
                                         }
                 
                 
                       $output .="</div>";
                       echo $output;
                                       }
                 
                          else{
                                echo "Record not found ";
                          }
                 
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

                         $poster = $_FILES['Poster']['name'];

                         $poster_old_image = $_POST['Poster_old_image'];

                         if($poster != ''){

                           $update_poster = $_FILES['Poster']['name'];

                         }else{
                          $update_poster = $poster_old_image;

                         }


                         $query = "UPDATE islamic SET  name = '{$Naat_khawn}', Add_Date ='{$Add_Date}', Naat_Bayan='{$N_B_Name}', Views_Rate='{$V_DRate}',Down_Rate='{$Download_Rate}',Total_Tracks='{$Total_Tracks}',VD_rate='{$V_DRate}',Keywords='{$Keywords}',Categories='{$Categories}',Description='{$Description}',Poster='{$update_poster}'WHERE id ='{$islamic_id}'";
           
                         $query_run = mysqli_query($con,$query);
                        
                           if($query_run){
                  
                              if($_FILES['Poster']['name'] !='')
                              {
                               move_uploaded_file($_FILES["Poster"]["tmp_name"], "Alluploadfolder/islamicposter/".$_FILES["Poster"]["name"]);
                                 unlink('Alluploadfolder/islamicposter/'.$poster_old_image);
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
   
                $sql="SELECT * FROM islamic WHERE id='{$id}'";
  
                    $run_sql=mysqli_query($con,$sql);
                   $result=mysqli_fetch_assoc($run_sql);
  
                   unlink("Alluploadfolder/islamicposter/".$result["Poster"]);
      
                   $sql1="DELETE FROM islamic WHERE id='{$id}'";
                         $run_sql1=mysqli_query($con,$sql1);
                     if($run_sql1){
        echo json_encode(array('message' => '<span> <i class="fa fa-check"></i>Record Deleted Successfully</span>', 'status' => true));
  
      }else{
        echo json_encode(array('message' => '<span> <i class="fa fa-bomb"></i>Record Not Deleted </span>', 'status' => false ));
      }
     }
        // end Delete code








?>
