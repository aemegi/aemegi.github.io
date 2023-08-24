<?php 
	include 'header.php';
	
	//make variables
			$herbal_id = $_POST['herbal_id'];
			$herbal_name = $_POST['name'];
			$year = $_POST['year'];
			$bce_ad = $_POST['bce_ad'];
			$author = $_POST['author'];
			$description = $_POST['description'];
	/*UPDATE sql query for info from editherbal.php */
	
	//creates a sql statement that replaces fields with new ones from editherbal.php
$sql = "UPDATE herbal SET name='$herbal_name', year='$year', bce_ad='$bce_ad', author='$author', description='$description' WHERE herbal_id = $herbal_id";

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

include 'footer.php';
?>