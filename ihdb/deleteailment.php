<?php
	include 'header.php';
	$sqldelete = "DELETE FROM ailments WHERE ailment_id = ". $_GET['ailid'];
	$del=$mysqli->prepare($sqldelete);
	$del->execute();   
	include 'footer.php';
	?>                   