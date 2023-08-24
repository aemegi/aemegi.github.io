


	<?php 
	include 'header.php';
	//take out this if statement after checking a few things
		//
	if (!isset($_GET['herbalid'])) {
	$link = 'herbadded.php';
	} else {
	$herbalid = $_GET['herbalid'];
	$link = 'herbadded.php?herbalid=' . $herbalid;
	}
	?>
	<div style='padding:30px;'>
<!-- form action herbadded.php will inteperet data-->
	<form action="<?php echo $link; ?>" method="post"><table align="center">
	<tr>
<td>Common Name: </td><td><input type="text" name="common_name"></td>
	</tr><tr>
<td>
Scientific Name: </td><td><input type="text" name="scientific_name"></td>
	</tr><tr>
<td>
Family: </td><td><input type="text" name="family"></td>
	</tr><tr>
<td>
Common Names: </td><td><textarea name="common_names"></textarea></td>
	</tr>
		<tr><td>POISON!</td><td><input type="checkbox" name="poison"></td></tr>
		
	<tr>
	<td>
</td><td>
<input type="submit"></td></tr></table></form>
</div>
<?php
include 'footer.php';
?>