<?php
	include 'header.php';
	
	if (isset($_POST['confirmed']) && $_POST['confirmed'] == 'confirm') {
		$herb_id = $_POST['herb_id'];
		$sqldelete = "DELETE FROM herb WHERE herb_id = $herb_id";
		if ($mysqli->query($sqldelete) === TRUE) {
			echo "Record deleted successfully.";
    	} else {
    		echo "Error: " . $sql . "<br>" . $mysqli->error;
    	}
    	
    	$sqldelete = "DELETE FROM uses WHERE herb_id = $herb_id";
		if ($mysqli->query($sqldelete) === TRUE) {
			echo "Blurbs deleted successfully.";
    	} else {
    		echo "Error: " . $sql . "<br>" . $mysqli->error;
    	}
	} else {
	
	$herb_id = $_GET['herbid'];
	
	$sqlname = "SELECT common_name FROM herb WHERE herb_id = $herb_id";
	
	$result = $mysqli->query($sqlname);

	//displays results if exists, if it doesn't echos '0 results'
	if ($result->num_rows > 0) {
    // output data of each row
    	while($row = $result->fetch_assoc()) {
    		$herb_name = $row['common_name'];
    	}
} else {
    echo '0 results';
}
	
	
	?>
	<form method='post' action='deleteherb.php'>
	<table align=center>
	<tr><td>
	<input type='hidden' name='herb_id' value='<?php echo $herb_id; ?>'>
	Are you sure you wish to delete: <?php echo $herb_name; ?>? <input type='submit' name='confirmed' value='confirm'>
	</td></tr>
	</table>
	</form>
	
<?php
	}

	include 'footer.php';
	
	?>