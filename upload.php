<?php
#upload.php


$up_file=$_FILES['files'];
$filename = $up_file['name'];
$location = $up_file['tmp_name'];
$size = $up_file['size'];
$mime_type = $up_file['type'];
$error = $up_file['error'];

echo "<hr/>";
echo "File name is = {$filename} <br/>";
echo "File size = {$size} <br/>";
echo "File tmp location = {$location} <br/>";
echo "File type = {$mime_type} <br/>";
echo "File error  = {$error} <br/>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";