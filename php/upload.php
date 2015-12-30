<?php

include "config.php";


if(!empty($_FILES)) {

	$temp = $_FILES['file']['tmp_name'];
	$fileupload = $_FILES['file']['name'];
	$fileSize = ($_FILES['file']['size'])/1000;
	$dir_separator = DIRECTORY_SEPARATOR;
	$folder = "images";

	echo $destination_path = dirname(__FILE__).$dir_separator.$folder.$dir_separator;
	echo $fileSize.'<br>';
	echo $fileupload.'<br>';

	$target_path = $destination_path.$_FILES['file']['name'];

	move_uploaded_file($temp, $target_path);
	

	$uploadsql = "INSERT INTO images (id, file_name, alt, size)
                  VALUES ('null', '$fileupload', 'null', '$fileSize')";
    
    mysql_query($uploadsql);

 
}
