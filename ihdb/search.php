<?php
	include 'header.php';
	/*check session isset for whole page else 'You don't have permission to be here'*/
?>
<?php
	$query = $_GET['query']; 
	// gets value sent over search form
	
	$min_length = 3;
	// you can set minimum length of the query if you want
	
	if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
		
		$query = htmlspecialchars($query); 
		// changes characters used in html to their equivalents, for example: < to &gt;
		
	//	$query = mysql_real_escape_string($query);
		// makes sure nobody uses SQL injection
		
		$raw_results = $mysqli->query("SELECT * FROM uses LEFT JOIN herb ON uses.herb_id = herb.herb_id
			WHERE (use_blurb LIKE '%".$query."%') OR (common_name LIKE '%".$query."%') OR (scientific_name LIKE '%".$query."%') OR (common_names LIKE '%".$query."%')") or die(mysql_error());
			
		// * means that it selects all fields, you can also write: `id`, `title`, `text`
		// articles is the name of our table
		
		// '%$query%' is what we're looking for, % means anything, for example if $query is Hello
		// it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
		// or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
		
		if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
			
			while($results = mysqli_fetch_array($raw_results)){
			// $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
			
				echo "<p><h3>".$results['common_name']."</h3> <h4>aka ".$results['scientific_name']."</h4>".$results['use_blurb']."</p>";
				// posts results gotten from database(title and text) you can also show id ($results['id'])
				if (!isset($_SESSION['editmode']) || $_SESSION['editmode'] == 0) {
} else {
				?><p>
				<form method='POST' action='savesearch.php'>
				save search: <select name='type'>
				<option>--</option>
				<option value="con">Constituent</option>
				<option value="med">Medical Terms</option>
				<option value="ail">Ailment</option>
				</select>
				<input type="hidden" name="blurb_id" value="<?php echo $results['uses_id']; ?>">
				<input type="hidden" name="herb_id" value="<?php echo $results['herb_id']; ?>">
				 name: <input type="text" name="name"></input><input type="submit" name="submit" value="go">
				 </form>
				<?php
}		
			}
			
		}
		else{ // if there is no matching rows do following
			echo "No results";
		}
		
	}
	else{ // if query length is less than minimum
		echo "Minimum length is ".$min_length;
	}
?>
</body>
</html>