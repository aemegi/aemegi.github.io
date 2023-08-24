<?php

include 'header.php';

	
echo '<div style="padding:70px">';

//get herb id from url from previous link in herbs.php
$herb_id = $_GET["herbid"];




//sql statement to select info for specified herb 
/*need to add everything, family name, poison, etc.*/
    $herb_sql = "SELECT herb_id, common_name, common_names, scientific_name, family FROM herb WHERE herb_id = $herb_id";
    $herb_result = $mysqli->query($herb_sql);
//if it exists display it, otherwise echo "error"
if ($herb_result->num_rows > 0)  {
    // output data of each row
    while($row = $herb_result->fetch_assoc()) {
    	echo '<br><h1 align=center>';
    	echo $row['common_name'];
    	echo ' Recipes</h1>';
    	echo '<h4>Also known as: ';
    	echo $row['common_names'];
    	echo '</h4>';
    	echo '<h3>';
    	echo $row['scientific_name'];
    	echo '</h3>';
    	echo '<h4>';
    	echo $row['family'];
    	echo '</h4>';
//delete:	echo $row['herb_id'];
//sql statement to call for blurbs orders by editable data use_type.type_order
$uses_sql = "SELECT uses.uses_id, uses.use_type_id, uses.herb_id, uses.use_blurb, use_type.use_type_name, uses.herbal_id FROM uses ".
			"INNER JOIN use_type ON uses.use_type_id = use_type.use_type_id ".
			"INNER JOIN herb_recipes on uses.uses_id = herb_recipes.blurb_id ".
			"WHERE uses.herb_id = $herb_id  AND " .
			 "herb_recipes.recipe_id IS NOT NULL ORDER BY use_type.type_order";
$uses_result = $mysqli->query($uses_sql);
//if it has results displays them, otherwise displays '0 results'
if ($uses_result->num_rows > 0)  {
    // output data of each row
    while($row = $uses_result->fetch_assoc()) {
    	echo '<br>&nbsp;&nbsp;&nbsp;<b>';
    	echo $row['use_type_name'];
    	echo '</b><br>';
    	echo $row['use_blurb'];    	
    	
    	if (!isset($_SESSION['editmode']) || $_SESSION['editmode'] == 0) {
} else {
    	echo "<br> - <a href='edituseherb.php?blurb=" . $row['uses_id'] . "'>Update Blurb</a> - <a href='deleterecipe.php?herb=".$row['herb_id']."&blurb=".$row['uses_id']."'>Delete From Recipes</a> - <a href='deleteblurb.php?blurbid=" . $row['uses_id'] . "'>Delete Blurb</a>";
}
    	/* if admin logged session isset update & delete blurb links here*/
    	//calls to database for herbal name and displays result with link to herbal page
    	$title_sql = "SELECT herbal_id, name FROM herbal WHERE herbal_id = " . $row['herbal_id'] . "";
    	$title_result = $mysqli->query($title_sql);
    	if ($title_result->num_rows > 0) {
    		while($row = $title_result->fetch_assoc()) {
    			$herbal_name = $row['name'];
    			echo '<br> - <a href="anherbal.php?herbalid=' . $row['herbal_id'] . '">'  . $herbal_name . '</a>';
    		}
    
    	} else {
    		echo "error";
    	}
    	
 
    }
}else {
    echo '0 results';
}
 

	}
} 



$mysqli->close();
//admin links
/*add if session isset to view*/
echo '</div>';
include 'footer.php';
?>