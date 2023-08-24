


	<?php 
	include 'header.php';
	?>
	<div style='padding:30px;'>
	<!-- form action to push info from form to herbaladded.php -->
	<form action="herbaladded.php" method="post"><table align="center">
	<tr>
<td>Name: </td><td><input type="text" name="name"></td>
	</tr><tr>
<td>
Year: </td><td><input type="text" size="10" name="year">
	<select name="BCE_AD">
	<option value="AD">AD</option>
	<option value="BCE">BCE</option>
	</select>

</td>
	</tr><tr>
<td>
Author: </td><td><input type="text" name="author"></td>
	</tr><tr>
<td>
Description: </td><td><textarea name="description"></textarea></td>
	</tr>

	<tr>
	<td>
</td><td><input type="submit"></td></tr></table></form>
</div>

	<?php 
	include 'footer.php';
	?>