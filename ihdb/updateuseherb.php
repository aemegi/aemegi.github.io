<?php
	include 'header.php';
	
		$useblurb = $_POST['blurb'];
		$herbalid = $_POST['herbal_id']; 
		$typeid = $_POST['use_type'];
		$uses_id = $_POST['uses_id'];
			//translates enter to <br>
	$useblurb = str_replace(PHP_EOL, "<br>", "$useblurb");
	$useblurb = str_replace("'", "\'", "$useblurb");
	$useblurb = str_replace('"', '\"', "$useblurb");
		
		//creates a sql statement that replaces fields with new ones from edituseherb.php
$sql = "UPDATE uses SET use_blurb='$useblurb', herbal_id='$herbalid', use_type_id='$typeid' WHERE uses_id = $uses_id";

//runs sql statement or outputs error message
if ($mysqli->query($sql) === TRUE) {
    $last_id = $mysqli->insert_id;
    echo "Record updated successfully.";
    }
 else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
//close mysqli connection
$mysqli->close();
	
	?>
	
	
<?php
	include 'footer.php';
	
	?>