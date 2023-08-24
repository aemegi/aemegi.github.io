<?php 
	include 'header.php';
	//get blurb id and make variable
	$blurbid = $_GET['blurb'];
	echo "<table align='center'><form method='post' action='updateuseherb.php'>";
	//call to database
	$sql = "SELECT uses_id, use_type_id, herb_id, herbal_id, use_blurb FROM uses WHERE uses_id = '$blurbid'";
	$result = $mysqli->query($sql);

if ($result->num_rows > 0)  {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$useblurb = $row['use_blurb'];
		$herbalid = $row['herbal_id']; 
		$typeid = $row['use_type_id'];
		$herb_id = $row['herb_id'];
		$uses_id = $row['uses_id'];
		
			echo '<tr><td>Herbal: </td><td><select name="herbal_id">';
		$sqlherbalid = "SELECT herbal_id, name, author, year FROM herbal ORDER BY year";
		$resultherbalid = $mysqli->query($sqlherbalid);
		if ($resultherbalid->num_rows > 0) {
    // output data of each row
		while($row = $resultherbalid->fetch_assoc()) {
				echo "<option value='" . $row['herbal_id'] . "'";
					if ($row['herbal_id'] == $herbalid) { echo " SELECTED"; } else { }
				echo ">" . $row['name'] . "</option>";
		}
			echo "</select></td></tr>";

		}
		 //lists types of blurbs
		 $use_type = "SELECT use_type_id, use_type_name FROM use_type ORDER BY type_order";
		 $results = $mysqli->query($use_type);
			echo '<tr><td>Blurb type: </td><td><select name="use_type">';
		 if ($results->num_rows > 0) {
		 	 // output data of each row
		 	 while($row = $results->fetch_assoc()) {
		 	 	 echo "<option value='" . $row['use_type_id'] . "'";
					if ($row['use_type_id'] == $typeid) { echo " SELECTED"; } else { }
		 	 	 echo ">" . $row['use_type_name'] . "</option>";
		 	 }
   		 } else {
    echo '0 results';
    	 	}
    	echo "</select>";
    	echo '<tr><td>Blurb:</td><td><textarea name="blurb">';
    	
    	echo $useblurb;
    	echo "</textarea></td></tr><tr><td>";
    	echo "<input type='submit'><input type='hidden' name='uses_id' value='" . $uses_id . "'>";
    	echo "</td></tr></form></table>";
    }
}
	?>
	
	
<?php
	include 'footer.php';
	
	?>