<?php
	include 'header.php';
	$sqldelete = "DELETE FROM medical_terms WHERE medterms_id = ". $_GET['medtermid'];
	$del=$mysqli->prepare($sqldelete);
	$del->execute();
	?>