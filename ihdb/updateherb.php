<?php
	include 'header.php';

//pulls info from editherb.php
$herbid = $_POST['herb_id'];
$common_name = $_POST['common_name'];
$scientific_name = $_POST['scientific_name'];
$family = $_POST['family'];
$common_names = $_POST['common_names'];
//delete this: $herbal_id = $_POST['herbal_id'];
//checks to see if poison wasn't checked, else sets variable to 'POISON! '
if (!isset($_POST['poison'])) {	
	$poison = '';
} else {
	$poison = 'POISON!'; 
}
//creates a sql statement that replaces fields with new ones from editherb.php
$sql = "UPDATE herb SET common_name='$common_name', common_names='$common_names', scientific_name='$scientific_name', family='$family', poison='$poison' WHERE herb_id = $herbid";

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