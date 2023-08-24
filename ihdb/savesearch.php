<?php
	include 'header.php';
	/*check session isset for whole page else 'You don't have permission to be here'*/
	
	if (isset($_POST['submit'])) {
	 
		if (isset($_POST['type']) && $_POST['type'] == 'ail') {
			$result = $mysqli->query("SELECT * FROM ailments
			WHERE (name LIKE '".$_POST['name']."')") or die(mysql_error());
			if ($result->num_rows > 0) {
			//sql query if name exists
			while($row = $result->fetch_assoc()) {
			$ailmentid = $row['ailment_id'];
			}
			} else {
			//if name doesn't exist create
				//insert into ailment name and id
			$result = ("INSERT INTO ailments (name) VALUES ('".$_POST['name']."')") or die(mysql_error());
			    if ($mysqli->query($result) === TRUE) {
			    	$ailmentid = $mysqli->insert_id;
			    } else {
			    	echo "Error: " . $result . "<br>" . $mysqli->error;
			    }
			}
			echo $ailmentid;
			
			//insert into herb_ailments blurb_id, ailment_id, and herb_id
			$result = $mysqli->query("INSERT INTO herb_ailments (herb_id, ailment_id, blurb_id) VALUES ('".$_POST['herb_id']."', '".$ailmentid."', '".$_POST['blurb_id']."')") or die(mysql_error());
		
		} elseif (isset($_POST['type']) && $_POST['type'] == 'con') {
			$result = $mysqli->query("SELECT * FROM constituents
			WHERE (constituent_name LIKE '".$_POST['name']."')") or die(mysql_error());
			if ($result->num_rows > 0) {
			//sql query if name exists
			while($row = $result->fetch_assoc()) {
			$constituentid = $row['constituent_id'];
			}
			} else {
			//if name doesn't exist create
				//insert into ailment name and id
			$result1 = ("INSERT INTO constituents (constituent_name) VALUES ('".$_POST['name']."')") or die(mysql_error());
			    if ($mysqli->query($result1) === TRUE) {
			    	$constituentid = $mysqli->insert_id;
			    } else {
			    	echo "Error: " . $query . "<br>" . $conn->error;
			    }
			}
			echo $constituentid;
			
			//insert into herb_ailments blurb_id, ailment_id, and herb_id
			$result = $mysqli->query("INSERT INTO herb_constituent (herb_id, constituent_id, blurb_id) VALUES ('".$_POST['herb_id']."', '".$constituentid."', '".$_POST['blurb_id']."')") or die(mysql_error());
		
		} elseif (isset($_POST['type']) && $_POST['type'] == 'med') {
			$result = $mysqli->query("SELECT * FROM medical_terms
			WHERE (word LIKE '".$_POST['name']."')") or die(mysql_error());
			if ($result->num_rows > 0) {
			//sql query if name exists
			while($row = $result->fetch_assoc()) {
			$medtermid = $row['medterms_id'];
			}
			} else {
			//if name doesn't exist create
				//insert into ailment name and id
			$result = ("INSERT INTO medical_terms (word) VALUES ('".$_POST['name']."')") or die(mysql_error());
			    if ($mysqli->query($result) === TRUE) {
			    	$medtermid = $mysqli->insert_id;
			    } else {
			    	echo "Error: " . $query . "<br>" . $conn->error;
			    }
			}
			echo $medtermid;
			
			//insert into herb_ailments blurb_id, ailment_id, and herb_id
			$result = ("INSERT INTO herb_medical_terms (herb_id, medterm_id, blurb_id) VALUES ('".$_POST['herb_id']."', '".$medtermid."', '".$_POST['blurb_id']."')") or die(mysql_error());
				$go=$mysqli->prepare($result);
				$go->execute();
		} else {
			echo 'please hit your browsers back button and try again';
		}
		
		
		
		
	}
	
	
	
	
?>