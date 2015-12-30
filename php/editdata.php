<?php
include "config.php";

	$id = $_GET['id'];
	$alt = $_POST['alt'];

	if(!empty($id)){

		mysql_query("UPDATE images SET alt = '$alt' WHERE id = $id");
	}
?>