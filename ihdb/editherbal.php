
	<?php 
	include 'header.php';
	
	
	//get herbal id from previous clicked link
	$herbal_id = $_GET["herbalid"];
	
	//call to database to get info
	$title_sql = "SELECT herbal_id, name, year, bce_ad, author, description FROM herbal WHERE herbal_id = $herbal_id";
	$title_result = $mysqli->query($title_sql);
	
	//take database info to make variables for form
	if ($title_result->num_rows > 0) {
		while($row = $title_result->fetch_assoc()) {
			$herbal_name = $row['name'];
			$year = $row['year'];
			$bce_ad = $row['bce_ad'];
			$author = $row['author'];
			$description = $row['description'];
    
    }
    
} else {
	echo "error";
}
	//form with added variables
	?>
	<div style='padding:30px;'>
	<form action="updateherbal.php" method="post"><table align="center">
	<tr>
<td>Name: </td><td><input type="text" name="name" value="<?php echo $herbal_name; ?>"></td>
	</tr><tr>
<td>
Year: </td><td><input type="text" size="10" name="year" value="<?php echo $year; ?>">
	<select name="bce_ad">
	<option<?php if ($bce_ad == 'AD') { echo " SELECTED ";} else { echo " ";}  ?> value="AD">AD</option>
	<option<?php if ($bce_ad == 'BCE') { echo " SELECTED ";} else { echo " ";}  ?>value="BCE">BCE</option>
	</select>

</td>
	</tr><tr>
<td>
Author: </td><td><input type="text" name="author" value="<?php echo $author; ?>"></td>
	</tr><tr>
<td>
Description: </td><td><textarea name="description"><?php echo $description; ?></textarea></td>
	</tr>
<input type="hidden" name="herbal_id" value="<?php echo $herbal_id; ?>">
	<tr>
	<td>
</td><td><input type="submit"></td></tr></table></form>
</div>
<?php include 'footer.php'; ?>