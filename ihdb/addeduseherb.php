<?php
	
	include 'header.php';
	/*need to check session for whole page else echo "you don't have permission to be here";*/
	

	
	
	//pulls info from previous page
	
	
	
$blurb = $_POST['blurb'];
$use_type_id = $_POST['use_type'];
$herbal_id = $_POST['herbal'];
$herb_id = $_POST['herb_id'];	
	$herbalid = $herbal_id;
	$linkaddon = '&herbalid=' . $herbalid;
	//translates enter to <br>
	$blurb = str_replace(PHP_EOL, "<br>", "$blurb");
	$blurb = str_replace("'", "\'", "$blurb");
	$blurb = str_replace('"', '\"', "$blurb");
	
/*here we will change any values of "'" to "\'" */
//creates sql statment to insert blurb 
$sql = "INSERT INTO `uses` (`uses_id`, `use_type_id`, `herb_id`, `herbal_id`, `use_blurb`) VALUES (NULL, '$use_type_id', '$herb_id', '$herbal_id', '$blurb')";

if ($mysqli->query($sql) === TRUE) {
    $last_id = $mysqli->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id . "<a href='adduseherb.php?herbid=" . $herb_id . $linkaddon . "'> Add a blurb to this new herb.</a>";
    
   $sql2 = "INSERT INTO `herbal_herb` (`herbal_id`, `herb_id`) VALUES ('$herbal_id', '$last_id')"; 
    if ($mysqli->query($sql2) === TRUE) {
    	echo "<br>Herb herbal association created successfully.";
    } else { 
    echo "error";
    }
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
} 

$mysqli->close();
include 'footer.php';
?>
