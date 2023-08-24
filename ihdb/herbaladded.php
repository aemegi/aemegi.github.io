<?php

	include 'header.php';
	
//pull everything from herbaladd.php	
$name = $_POST['name'];
$year = $_POST['year'];
$bcead = $_POST['BCE_AD'];
$author = $_POST['author'];
$description = $_POST['description'];
/*needs something to allow single quotes or double quotes,
I believe there is a way to change the text to put '\' in */

//create sql statement to run
$sql = "INSERT INTO herbal (herbal_id, name, author, description, year, bce_ad, link) VALUES (NULL, '$name', '$author', '$description', '$year', '$bcead', '')";


//insert sql statement into database or reveal error
if ($mysqli->query($sql) === TRUE) {
    $herbalid = $mysqli->insert_id;
    echo "New record created successfully: <a href='herbadd.php?herbalid=" . $herbalid . "'>add an herb</a> or <a href='herbs.php'> select from list </a>.";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();

include 'footer.php';
?>
