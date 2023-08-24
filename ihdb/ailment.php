<?php 
include 'header.php';


$sql = "SELECT * FROM ailments LEFT JOIN herb_ailments ON ailments.ailment_id = herb_ailments.ailment_id WHERE ailments.ailment_id = " . $_GET['ailid']." LIMIT 1";
$result = $mysqli->query($sql);

    while($row = $result->fetch_assoc()) {
    echo '<h1 align="center">' . $row['name'] . "</h1>";
    if (!isset($_SESSION['editmode']) || $_SESSION['editmode'] == 0) {
} else {
    	echo "<a href='deleteailment.php?ailid=" . $_GET['ailid'] . "'>Delete</a>";
}
    $sql = "SELECT * FROM herb LEFT JOIN herb_ailments ON herb.herb_id = herb_ailments.herb_id WHERE herb_ailments.ailment_id = ".$_GET['ailid']." GROUP BY herb.herb_id ORDER BY common_name ASC";
    $result = $mysqli->query($sql);

    while($row = $result->fetch_assoc()) {
    echo '<h2 align="center"><a href="herb.php?herbid='.$row['herb_id'].'">' . $row['common_name'] . '</a></h2>';	
    $sql2 = "SELECT * FROM uses LEFT JOIN herb_ailments ON herb_ailments.blurb_id = uses.uses_id WHERE uses.herb_id = ".$row['herb_id']." AND herb_ailments.ailment_id = ".$_GET['ailid'];
    $result2 = $mysqli->query($sql2);

    while($row2 = $result2->fetch_assoc()) {
    echo '<p>' . $row2['use_blurb'] . "</p>";	
        $sql3 = "SELECT * FROM herbal LEFT JOIN uses ON uses.herbal_id = herbal.herbal_id WHERE uses.uses_id = ".$row2['uses_id'];
    $result3 = $mysqli->query($sql3);

    while($row3 = $result3->fetch_assoc()) {
    echo '<p>--<a href="anherbal.php?herbalid='.$row3['herbal_id'].'">' . $row3['name'] . '</a></p>';	
    
    if (!isset($_SESSION['editmode']) || $_SESSION['editmode'] == 0) {
    } else {
    	echo "<br> -<a href='deleteailments.php?herb=".$row['herb_id']."&blurb=".$row['blurb_id']."'>Delete From Ailments</a>";
    }
    } 
    }   
    }
    
	
    }   
    
   
include 'footer.php'; 
?>
