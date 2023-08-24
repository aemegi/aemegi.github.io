<?php

include 'header.php';

	
echo '<div style="padding:70px">';

//get herb id from url from previous link in herbs.php
$herb_id = $_GET["herbid"];
if (isset($_GET['herbalid'])) { $herbal_id = $_GET["herbalid"]; }



//sql statement to select info for specified herb 
/*need to add everything, family name, poison, etc.*/
    $herb_sql = "SELECT herb_id, common_name, common_names, scientific_name, family FROM herb WHERE herb_id = $herb_id";
    $herb_result = $mysqli->query($herb_sql);
//if it exists display it, otherwise echo "error"
if ($herb_result->num_rows > 0)  {
    // output data of each row
    while($row = $herb_result->fetch_assoc()) {

    		$i = 1;
    	echo '<br><h1 align=center>';
    	echo $row['common_name'];
    	echo '</h1>';
    	echo '<h4>Also known as: ';
    	echo $row['common_names'];
    	echo '</h4>';
    	echo '<h3>';
    	echo $row['scientific_name'];
    	echo '</h3>';
    	echo '<h4>';
    	echo $row['family'];
    	echo '</h4>';
    	
//title of herbal to link back to herbal
$herbalsql = '';
	if (isset($herbal_id)) {
$title_sql = "SELECT herbal_id, name FROM herbal WHERE herbal_id = $herbal_id";
$title_result = $mysqli->query($title_sql);
if ($title_result->num_rows > 0) {
    while($row = $title_result->fetch_assoc()) {
    $herbal_name = $row['name'];
    echo '<a href="anherbal.php?herbalid=' . $herbal_id . '">'  . $herbal_name . '</a>';
    }
}
echo " | <a href='herb.php?herbid=" . $herb_id . "'>View all</a>";
$herbalsql = " AND uses.herbal_id = $herbal_id ";
	} else {}
    
//sql statement to call for blurbs orders by editable data use_type.type_order
$uses_sql = "SELECT uses.uses_id, uses.use_type_id, uses.herb_id, uses.use_blurb, use_type.use_type_name, uses.herbal_id, herbal.name ".
			"FROM uses ".
			"INNER JOIN use_type ON uses.use_type_id = use_type.use_type_id ".
			"INNER JOIN herbal ON uses.herbal_id = herbal.herbal_id ".
			"WHERE uses.herb_id = $herb_id ". $herbalsql .
			"ORDER BY uses.herbal_id, use_type.type_order";
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
} else{
    	?><br> - <p>
				<form method='POST' action='savesearch.php'>
				save: <select name='type'>
				<option>--</option>
				<option value="con">Constituent</option>
				<option value="med">Medical Terms</option>
				<option value="ail">Ailment</option>
				</select>
				<input type="hidden" name="blurb_id" value="<?php echo $row['uses_id']; ?>">
				<input type="hidden" name="herb_id" value="<?php echo $row['herb_id']; ?>">
				 name: <input type="text" name="name"></input><input type="submit" name="submit" value="go">
				 </form><?php
				 
				 
    	displaylink ('editmode/edituseherb.php?blurb=' . $row['uses_id'] . '', 'Update Blurb');
		displaylink ('editmode/addrecipe.php?herb='.$row['herb_id'].'&blurb='.$row['uses_id'].'', 'Add to Recipes');
    	displaylink ('editmode/deleteblurb.php?blurbid=' . $row['uses_id'] . '', 'Delete Blurb');
}
    	/* if admin logged session isset update & delete blurb links here*/
    	//calls to database for herbal name and displays result with link to herbal page
    	    $count_sql = "SELECT COUNT(herbal_id) AS herbalCounter FROM uses WHERE herb_id= ".$herb_id." AND herbal_id = ".$row['herbal_id']."";
    	    $count_result = $mysqli->query($count_sql);
    			
    while($row2 = $count_result->fetch_assoc()) {
    			$j = $row2['herbalCounter'];
    			if ($j == $i) {
    			$herbal_name = $row['name'];
    			echo '<br> - <a href="anherbal.php?herbalid=' . $row['herbal_id'] . '">'  . $herbal_name . '</a><br>';
    			$i = 0;
    		} else {
    			//$herbal_name = $row['name'];
    			//echo '<br> - <a href="anherbal.php?herbalid=' . $row['herbal_id'] . '">'  . $herbal_name . '</a>';
    		}
    			$i++;
    }     
    		
    }
    	} else {
    		echo "error";
    	}
    	
 
    }
} else {
    echo '0 results';
}
 




$mysqli->close();
//admin links
displaylink ('adduseherb.php?herbid=' . $herb_id . '', 'Add a Blurb');
displaylink ('editherb.php?herbid=' . $herb_id . '', 'Update Herb');
displaylink ('deleteherb.php?herbid=' . $herb_id . '', 'Delete Herb');

echo '</div>';
include 'footer.php';
?>