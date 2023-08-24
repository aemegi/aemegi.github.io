<?php

include 'header.php';

	
echo '<div style="padding:70px">';
//gets variable info from url
$herbal_id = $_GET["herbalid"];
$herb_id = $_GET["herbid"];
 
//title of herbal to link back to herbal
$title_sql = "SELECT herbal_id, name FROM herbal WHERE herbal_id = $herbal_id";
$title_result = $mysqli->query($title_sql);
if ($title_result->num_rows > 0) {
    while($row = $title_result->fetch_assoc()) {
    $herbal_name = $row['name'];
    echo '<a href="anherbal.php?herbalid=' . $herbal_id . '">'  . $herbal_name . '</a>';
    }
    
} else {
	echo "error";
}

//link to view all of herb

echo " | <a href='herb.php?herbid=" . $herb_id . "'>View all</a>";

//display title for herb

    $herb_sql = "SELECT herb_id, common_name FROM herb WHERE herb_id = $herb_id";
$herb_result = $mysqli->query($herb_sql);

if ($herb_result->num_rows > 0)  {
    // output data of each row
    while($row = $herb_result->fetch_assoc()) {
   echo '<br><h1 align=center>';
   echo $row['common_name'];
   echo '</h1>';
//	echo $row['herb_id'];


//pulls all blurbs associated with this herb and orders by editable use_type.order
$uses_sql = "SELECT uses.uses_id, uses.use_type_id, uses.use_blurb, use_type.use_type_name FROM uses INNER JOIN use_type ON uses.use_type_id = use_type.use_type_id WHERE uses.herb_id = $herb_id AND uses.herbal_id = $herbal_id ORDER BY use_type.type_order";
$uses_result = $mysqli->query($uses_sql);

if ($uses_result->num_rows > 0)  {
    // output data of each row
    while($row = $uses_result->fetch_assoc()) {
   echo '<br>&nbsp;&nbsp;&nbsp;<b>';
    echo $row['use_type_name'];
   echo '</b><br>';
    echo $row['use_blurb'];
    	echo "<br> - <a href='edituseherb.php?blurb=" . $row['uses_id'] . "'>Update Blurb</a>";
    }
}else {
    echo '0 results';
}
 

	}
} 


//close connection
$mysqli->close();
//add edit delete links
/* if session set to admin here */
echo '<br><br><a href="adduseherb.php?herbalid=' . $herbal_id . '&herbid=' . $herb_id . '">Add a Blurb</a> | <a href="editherb.php?herbid=' . $herb_id . '"> Update Herb</a>';
echo '</div>';
include 'footer.php';
?>