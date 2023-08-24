<?php 
	include 'header.php';
	
	//get the herb id so we know which one we are editing
	$herb_id = $_GET["herbid"];
	//call to DB to get info for our specific herb
    $herb_sql = "SELECT herb_id, common_name, scientific_name, common_names, family, poison FROM herb WHERE herb_id = $herb_id";
    $herb_result = $mysqli->query($herb_sql);
    //output the data and make variables for use in the form. we are just pulling up one result (herb id is unique)
    if ($herb_result->num_rows > 0)  {
    // output data of each row
    while($row = $herb_result->fetch_assoc()) {
   echo '<br><h1 align=center>';
   echo $row['common_name'];
   echo '</h1>';
   $herbid = $row['herb_id'];
   $common_name = $row['common_name'];
   $scientific_name = $row['scientific_name'];
   $common_names = $row['common_names'];
   $family = $row['family'];
   $poison =$row['poison'];
   //lets us know if something went wrong
    }} else {
	echo "error";
}
   //the following is a form with info filled for editing
	?>
	<div style='padding:30px;'>
	<form action="updateherb.php" method="post"><table align="center">
	<tr>
<td>Common Name: </td><td><input type="text" name="common_name" value="<?php echo $common_name; ?>"></td>
	</tr><tr>
<td>
Scientific Name: </td><td><input type="text" name="scientific_name" value="<?php echo $scientific_name; ?>"></td>
	</tr><tr>
<td>
Family: </td><td><input type="text" name="family" value="<?php echo $family; ?>"></td>
	</tr><tr>
<td>
Common Names: </td><td><textarea name="common_names" value="<?php echo $common_names; ?>"></textarea></td>
	</tr>
		<tr><td>POISON!</td><td><input type="checkbox" name="poison"<?php
		
		if (isset($poison) && $poison == 'POISON!') {
			echo " checked";
		}
		else {}
			
		
		
		?>></td></tr>
		
	<tr>
	<td>
</td><td><input type="hidden" name="herb_id" value="<?php echo $herbid; ?>">
<input type="submit"></td></tr></table></form>
</div>

<?php 
 include 'footer.php';
?>