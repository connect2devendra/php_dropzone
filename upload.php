<?php
  
$uploadDir = 'upload';
  
$tmpFile = $_FILES['file']['tmp_name'];
$filename = $uploadDir.'/'.$_FILES['file']['name'];
move_uploaded_file($tmpFile,$filename);
  
echo $filename;
  
?>