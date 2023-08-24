<?php
	include 'header.php';
	
	if (isset($_POST['confirmed']) && $_POST['confirmed'] == 'confirm') {
		$herbal_id = $_POST['herbal_id'];
		$sqldelete = "DELETE FROM herbal WHERE herbal_id = $herbal_id";
		if ($mysqli->query($sqldelete) === TRUE) {
			echo "Record deleted successfully.";
    	} else {
    		echo "Error: " . $sql . "<br>" . $mysqli->error;
    	}		
    	$sqldelete = "DELETE FROM uses WHERE herbal_id = $herbal_id";
		if ($mysqli->query($sqldelete) === TRUE) {
			echo "Blurbs deleted successfully.";
    	} else {
    		echo "Error: " . $sql . "<br>" . $mysqli->error;
    	}
	} else {
	
	$herbal_id = $_GET['herbalid'];
	
	$sqlname = "SELECT name FROM herbal WHERE herbal_id = $herbal_id";
	
	$result = $mysqli->query($sqlname);

	//displays results if exists, if it doesn't echos '0 results'
	if ($result->num_rows > 0) {
    // output data of each row
    	while($row = $result->fetch_assoc()) {
    		$herbal_name = $row['name'];
    	}
} else {
    echo '0 results';
}
	
	
	?>
	<form method='post' action='deleteherbal.php'>
	<table align=center>
	<tr><td>
	<input type='hidden' name='herbal_id' value='<?php echo $herbal_id; ?>'>
	Are you sure you wish to delete: <?php echo $herbal_name; ?>? <input type='submit' name='confirmed' value='confirm'>
	</td></tr>
	</table>
	</form>
	
<?php
	}
	include 'footer.php';
	
	?>