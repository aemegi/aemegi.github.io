<?php
	include 'header.php';
	$sqldelete = "DELETE FROM herb_recipes WHERE herb_id = ". $_GET['herb']." AND blurb_id = ".$_GET['blurb'];
	$del=$mysqli->prepare($sqldelete);
	$del->execute();
	?>