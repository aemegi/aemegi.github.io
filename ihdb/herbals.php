<?php
	include 'header.php';
	
	echo '<div style="padding:70px">';

	
// checks table for all existances of AD results (BCE results below) //AD DESC
$herbalsad = 'SELECT herbal_id, name, author, year, bce_ad, link ' .
         'FROM herbal ' .
//         'WHERE bce_ad = "AD" ' . 
         'ORDER BY year DESC';
$resultsad = $mysqli->query($herbalsad);

if ($resultsad->num_rows > 0) {
    // output data of each row
    while($row = $resultsad->fetch_assoc()) {
    echo $row['year'] . ' ' . $row['bce_ad'] . ' - <a href="herbs.php?herbalid=' . $row['herbal_id']. '">' . $row['name']. "</a> " . $row['author']. '<br><br>';
   }
} else {
    echo '';
}




/*/checks table for all BCE results //BCE_AD ASC
$herbalsbc = 'SELECT herbal_id, name, author, year, bce_ad, link, description ' .
         'FROM herbal ' .
//         'WHERE bce_ad = "BCE" ' . 
         'ORDER BY year ASC';
$resultsbc = $mysqli->query($herbalsbc);

//displays results if exists, if it doesn't echos '0 results'
if ($resultsbc->num_rows > 0) {
    // output data of each row
    while($row = $resultsbc->fetch_assoc()) {
    echo $row['year'] . ' ' . $row['bce_ad'] . ' - <a href="anherbal.php?herbalid=' . $row['herbal_id']. '">' . $row['name']. "</a> " . $row['author']. "<br> " . $row['description']. '<br><br>';
   }
} else {
    echo '';
}
*/
//close sql connection
$mysqli->close();

//administration section 
/* if isset session and session = 1*/
if (!isset($_SESSION['editmode']) || $_SESSION['editmode'] == 0) {
} else {
displaylink ("herbaladd.php", "Add an Herbal");
}
include 'footer.php';
?>