<?php
include 'header.php';


$sql = "INSERT INTO `herb_recipes`(herb_id, blurb_id) VALUES ('".$_GET['herb']."','".$_GET['blurb']."')";
 $result = $mysqli->query($sql);




















include 'footer.php';
?>
