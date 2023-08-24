<?php
	include 'header.php';
	$sqldelete = "DELETE FROM constituents WHERE constituent_id = ". $_GET['conid'];
	$del=$mysqli->prepare($sqldelete);
	$del->execute();
	?>