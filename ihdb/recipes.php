<?php
include 'header.php';


echo '<div style="padding:70px">';
foreach (range('a', 'z') as $letter) {
$herbal_sql = "SELECT herb.herb_id, herb.common_name FROM herb " .
			  "LEFT JOIN herb_recipes ON herb_recipes.herb_id = herb.herb_id " .
			  "WHERE herb.common_name LIKE '" . $letter . "%' AND " .
			  "herb_recipes.recipe_id IS NOT NULL ".
			  "GROUP BY herb.herb_id ORDER BY herb.common_name";
$herbal_result = $mysqli->query($herbal_sql);





$numResults = mysqli_num_rows($herbal_result);
$counter = 0;






	if ($herbal_result->num_rows > 0)  {
		
echo '<h3>' . $letter. '</h3><br>';
    // output data of each row
    while($row = $herbal_result->fetch_assoc()) {
    $herb_id = $row['herb_id'];
  echo '<a href="herbrecipes.php?herbid=' . $row['herb_id'] . '">' . $row['common_name'] . '</a> ';

     if (++$counter == $numResults) {
        // last row
    } else {
        // not last row
        echo' | ';
    }
 
}    
} else {
    echo ' ';
}
}



$mysqli->close();
//echo '<br><br><a href="herbadd.php">Add an Herb</a>';
echo '</div>';
include 'footer.php';

?>
