<?php




	include 'header.php';

echo '<div style="padding:70px">';
foreach (range('a', 'z') as $letter) {
$herbal_sql = "SELECT constituents.constituent_id, constituents.constituent_name FROM constituents WHERE constituents.constituent_name LIKE '" . $letter . "%' ORDER BY constituents.constituent_name";
$herbal_result = $mysqli->query($herbal_sql);





$numResults = mysqli_num_rows($herbal_result);
$counter = 0;






	if ($herbal_result->num_rows > 0)  {
		
echo '<h3>' . $letter. '</h3><br>';
    // output data of each row
    while($row = $herbal_result->fetch_assoc()) {
    $herb_id = $row['constituent_id'];
  echo '<a href="constituent.php?conid=' . $row['constituent_id'] . '">' . $row['constituent_name'] . '</a> ';

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