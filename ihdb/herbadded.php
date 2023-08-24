<?php

	include 'header.php';
	/*add auth.inc.php here when created */
	

//interprets into variables from form info
$common_name = $_POST['common_name'];
$scientific_name = $_POST['scientific_name'];
$family = $_POST['family'];
$common_names = $_POST['common_names'];

	//translates enter to <br>
	$common_name = str_replace(PHP_EOL, "<br>", "$common_name");
	$common_name = str_replace("'", "\'", "$common_name");
	$common_name = str_replace('"', '\"', "$common_name");
	
//checks to see if an herbal is associated with this herb
if (!isset($_GET['herbalid'])) {	
	$herbalid = NULL;
	$linkaddon = '';
} else {
	$herbalid = $_GET['herbalid'];
	$linkaddon = '&herbalid=' . $herbalid;
}
//checks to see if it is poison to fill enum in sql properly 
if (!isset($_POST['poison'])) {	
	$poison = '';
} else {
	$poison = 'POISON!'; 
}
//inserts new herb
$sql = "INSERT INTO `herb` (`herb_id`, `common_name`, `common_names`, `scientific_name`, `family`, `poison`) VALUES (NULL, '$common_name', '$common_names', '$scientific_name', '$family', '$poison')";
//run sql and give proper message
if ($mysqli->query($sql) === TRUE) {
    $last_id = $mysqli->insert_id;
    /*make something here to pull herbal id & herb id to create a new comma$common_name*/
    echo "New record created successfully. Last inserted ID is: " . $last_id . " Herbal ID: " . $herbalid . "<a href='adduseherb.php?herbid=" . $last_id . $linkaddon . "'> Add a comma$common_name to this new herb.</a>";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
$mysqli->close();
	include 'footer.php';
?>
