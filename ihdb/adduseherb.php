<?php
	include 'header.php';
?>
	<div style='padding:30px;'><center>
	<table>
	<form action="adduseherb.php?herbid=<?php echo $_GET['herbid']; ?>" method="post"><table align="center">

	<?php 
	
//checks to see if herbal id is present if not:
/*need to add unselectable select herb otion and if herbal id present then select that herbal*/
//	if (!isset($_GET['herbalid'])) {
		$herbalid = NULL;
			echo '<tr><td>Herbal: </td><td><select name="herbal">';
		$sqlherbalid = "SELECT herbal_id, name, author, year FROM herbal ORDER BY year";
		$resultherbalid = $mysqli->query($sqlherbalid);
		if ($resultherbalid->num_rows > 0) {
    // output data of each row
		while($row = $resultherbalid->fetch_assoc()) {
				echo "<option value='" . $row['herbal_id'] . "'";
				if (isset($_GET['herbalid']) && $row['herbal_id'] == $_GET['herbalid']) {
					echo " selected";
				} elseif (isset($_POST['herbal']) && $row['herbal_id'] == $_POST['herbal'])  {
					echo " selected";
				} else {}
				echo ">" . $row['name'] . "</option>";
		}
			echo "</select></td><td><input type='submit' name='choseherbal' value='go'></td></tr>";
		} else {
    echo '0 results';
}		
			echo '</form>';
	/*} else {
		//get herbal_id from previous pages
		$herbal_id = $_GET['herbalid'];
		$herbalid = '</td></tr><tr><td><input type="hidden" name="herbal" value="' . $herbal_id .'"></td></tr>';
		} */
		
	if (!isset($_POST['choseherbal'])) {
		} else {
			$herbal = $_POST['herbal'];
	?>
	<tr>	<form action="addeduseherb.php" method="post"><table align="center">
<td>
<input type="hidden" name="herbal" value="<?php echo $_POST['herbal']; ?>">
Blurb Type: </td><td>  

<select name="use_type">
  <?php
  //lists types of blurbs
$use_type = "SELECT use_type_id, use_type_name FROM use_type WHERE herbal_id=" . $herbal . " ORDER BY type_order";
$results = $mysqli->query($use_type);

if ($results->num_rows > 0) {
    // output data of each row
    while($row = $results->fetch_assoc()) {
    echo "<option value='" . $row['use_type_id'] . "'>" . $row['use_type_name'] . "</option>";
   }
} else {
    echo '0 results';
}
		
  /*needs an add blurb type link*/
$mysqli->close();
  ?>
    
    
    
  </select>
  
  
  </td>
	</tr><tr>
<td>
Blurb: </td><td><textarea name="blurb"></textarea></td>
	</tr>
		
	<tr>
	<td>
</td><td><?php echo $herbalid; ?></td></tr><tr><td><input type="hidden" name="herb_id" value="<?php echo $_GET['herbid']; ?>">
<input type="submit"></td></tr></table></form>
</center></div>
<?php } ?>
	