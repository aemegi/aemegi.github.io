<?php
	require 'conn.inc.php';
	include 'editmodefunctions.php';
	session_start();
	
	echo '<!doctype html><HTML><HEAD><TITLE>IHDB</TITLE>';
	echo '<link rel="stylesheet" href="styles.css">';
	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
	echo '</HEAD><BODY>';
	echo '<div style="padding:20px; padding-top:10px; margin-top:0px;">';
	echo '<H1 align="left">Internet Herbal Database</h1>';
	echo '<H3 align="left"></H3>';
	echo '<H4 align="center">"Botany and medicine go down to the ages hand in hand..." -Hilda Leyel</H4>';
	?>
	    <h3>Search the Database</h3> 
	    <p></p> 
	    <form  method="get" action="search.php?go"  id="searchform"> 
	      <input  type="text" name="query"> 
	      <input  type="submit" name="submit" value="Search"> 
	    </form> 
<?php
	echo '<div align="center">';
	echo '<a href="herbals.php">Herbal Directory</a> | ';
	echo '<a href="herbs.php">Herbs A-Z</a> | ';
	echo '<a href="constituents.php">Plant Constituents A-Z</a> | ';
	echo '<a href="medterms.php">Medical Terms A-Z</a> | ';
	echo '<a href="ailments.php">Ailments A-Z</a> | ';
	echo '<a href="recipes.php">Recipes</a>';
	echo '</div>';
	echo '</div>';
?>