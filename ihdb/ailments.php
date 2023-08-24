<?php




	include 'header.php';

echo '<div style="padding:70px">';
foreach (range('a', 'z') as $letter) {
$herbal_sql = "SELECT ailments.ailment_id, ailments.name FROM ailments WHERE ailments.name LIKE '" . $letter . "%' ORDER BY ailments.name";
$herbal_result = $mysqli->query($herbal_sql);





$numResults = mysqli_num_rows($herbal_result);
$counter = 0;






	if ($herbal_result->num_rows > 0)  {
		
echo '<h3>' . $letter. '</h3><br>';
    // output data of each row
    while($row = $herbal_result->fetch_assoc()) {
    $herb_id = $row['ailment_id'];
  echo '<a href="ailment.php?ailid=' . $row['ailment_id'] . '">' . $row['name'] . '</a> ';

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