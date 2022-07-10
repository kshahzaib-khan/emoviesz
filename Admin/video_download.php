<?php

if(isset($_GET["filename"]) && $_GET["filename"] != ""){
  $file = "Alluploadfolder/videofolder/".$_GET["filename"];
  header('Content-type: application/force-download');
  header('Content-disposition: attachment; filename=" '.basename($file).'"');

  // header('Content-disposition: attachment; filename=" '.basename($file).'"');
  header('Content-Length: '.filesize($file));
  readfile($file);


 }


?>