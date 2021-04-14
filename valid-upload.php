<?php
#valid-upload.php

if($_SERVER['REQUEST_METHOD']=='POST'){

	if(isset($_POST['btn']) and !empty($_POST['btn'])){
			
	$filename = isset($_FILES['files']['name'])?$_FILES['files']['name']:NULL;
	$file_type = isset($_FILES['files']['type'])?$_FILES['files']['type']:NULL;
	$file_error = isset($_FILES['files']['error'])?$_FILES['files']['error']:NULL;
	$file_size = isset($_FILES['files']['size'])?$_FILES['files']['size']:NULL;
	$file_location = isset($_FILES['files']['tmp_name'])?$_FILES['files']['tmp_name']:NULL;
	
	
	
	
	
	
		
			
			
	}else{
		header("location:{$_REQUEST['/']}");
	}
		
	
}else{

header("location:{$_REQUEST['/']}");

}//end of if-else
















