<?php
	include 'header.php';
	
	if (isset($_POST['confirmed']) && $_POST['confirmed'] == 'confirm') {
		$blurb_id = $_POST['blurb_id'];
		$sqldelete = "DELETE FROM uses WHERE uses_id = $blurb_id";
		if ($mysqli->query($sqldelete) === TRUE) {
			echo "Record deleted successfully.";
    	} else {
    		echo "Error: " . $sql . "<br>" . $mysqli->error;
    	}
	} else {
	
	$blurb_id = $_GET['blurbid'];
	
	$sqlname = "SELECT uses_id, use_type_id, herb_id, herbal_id FROM uses WHERE uses_id = $blurb_id";
	
	$result = $mysqli->query($sqlname);

	//displays results if exists, if it doesn't echos '0 results'
	if ($result->num_rows > 0) {
    // output data of each row
    	while($row = $result->fetch_assoc()) {
    		$herb_id = $row['herb_id'];
    		$herbal_id = $row['herbal_id'];
    		$use_type_id = $row['use_type_id'];
    			//get name of the blurb type
    			$sqlusetype = "SELECT use_type_name FROM use_type WHERE use_type_id = $use_type_id";
    			$resultusetype = $mysqli->query($sqlusetype);
    			if ($result->num_rows > 0) {
    				while($row = $resultusetype->fetch_assoc()) {
    					$use_type_name = $row['use_type_name'];
    					//echo $use_type_name;
    				}
    			} else {
    				echo "error";
    			}
    			//get the name of the herbal
    			$sqlherbaltitle = "SELECT name FROM herbal WHERE herbal_id = $herbal_id";
    			$resultherbaltitle = $mysqli->query($sqlherbaltitle);
    			if ($resultherbaltitle->num_rows > 0) {
    				while($row = $resultherbaltitle->fetch_assoc()) {
    					$herbal_name = $row['name'];
    					//echo $herbal_name;
    				}
    	
    			} else {
    				echo "error";
    			}
    			//get the name of the herb
    			$sqlherbname = "SELECT common_name FROM herb WHERE herb_id = $herb_id";
    			$resultherbname = $mysqli->query($sqlherbname);
    			if ($resultherbname->num_rows > 0) {
    				while($row = $resultherbname->fetch_assoc()) {
    					$herb_name = $row['common_name'];
    					//echo $herb_name;
    				}
    			} else {
    				echo "error";
    			}
    	}
    		$blurb_name = "the " . $use_type_name . " from " . $herb_name . " in " . $herbal_name;
	} else {
    echo '0 results';
}
	
	
	?>
	<form method='post' action='deleteblurb.php'>
	<table align=center>
	<tr><td>
	<input type='hidden' name='blurb_id' value='<?php echo $blurb_id; ?>'>
	Are you sure you wish to delete: <?php echo $blurb_name; ?>? <input type='submit' name='confirmed' value='confirm'>
	</td></tr>
	</table>
	</form>
	
<?php
	}

	include 'footer.php';
	
	?>