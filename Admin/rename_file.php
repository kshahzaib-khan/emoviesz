<?php


//    start current filename add number

// $icon = $_FILES['icon']['name'];

$icon = 'laravel-6-from-scratch.png';

$icon = preg_replace('/\s+/','_',$icon);

$unique_number=strtoupper(bin2hex(random_bytes(4)));

$icon_filename_extention = pathinfo($icon,PATHINFO_EXTENSION);
$icon_filename = pathinfo($icon,PATHINFO_FILENAME);
// echo $icon_unique_name = $icon_filename.'_'.date('mjYHis').'.'.$icon_filename_extention;

 echo $icon_unique_name = $icon_filename.'_'.$unique_number.'.'.$icon_filename_extention;

//    end current filename add number















          
//   start file full name replace add number

//  $icon = 'laravel-6-from-scratch.png';
// $unique_number=strtoupper(bin2hex(random_bytes(4)));

// $icon_filename_extention = pathinfo($icon,PATHINFO_EXTENSION);

//  echo $icon_unique_name = $unique_number.'.'.$icon_filename_extention;

 //   end file full name replace add number
?>