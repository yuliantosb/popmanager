<?php

include "config.php";

	$id = $_GET['id'];
	$file_name = $_POST['file_name'];

	unlink('../images/'.$file_name);

	mysql_query("DELETE FROM images WHERE id='$id'");


?>