<?php




	include 'header.php';

if (isset($_GET['herbalid'])) { $herbal_id = $_GET["herbalid"]; }

echo '<div style="padding:70px">';
foreach (range('a', 'z') as $letter) {
if (isset($_GET['herbalid'])) { 
	$herbal_sql = "SELECT herb.herb_id, herb.common_name FROM herb LEFT JOIN uses ON herb.herb_id = uses.herb_id WHERE herb.common_name LIKE '" . $letter . "%' AND herbal_id = $herbal_id  GROUP BY herb.herb_id ORDER BY herb.common_name";
	$herballink = '&herbalid='.$herbal_id;
} else {  
	$herbal_sql = "SELECT herb.herb_id, herb.common_name FROM herb WHERE herb.common_name LIKE '" . $letter . "%' ORDER BY herb.common_name"; 
	$herballink = '';
}

$herbal_result = $mysqli->query($herbal_sql);





$numResults = mysqli_num_rows($herbal_result);
$counter = 0;






	if ($herbal_result->num_rows > 0)  {
		
echo '<h3>' . $letter. '</h3><br>';
    // output data of each row
    while($row = $herbal_result->fetch_assoc()) {
    $herb_id = $row['herb_id'];
  echo '<a href="herb.php?herbid=' . $row['herb_id'] . $herballink.'">' . $row['common_name'] . '</a> ';

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

echo displaylink('herbadd.php', 'Add an Herb');

echo '</div>';
include 'footer.php';
?>