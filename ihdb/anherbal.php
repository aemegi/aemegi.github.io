<?php
	include 'header.php';
	echo '<div style="padding:70px">';	
	
	
$herbal_id = $_GET["herbalid"];
$title_sql = "SELECT herbal_id, name FROM herbal WHERE herbal_id = $herbal_id";
$title_result = $mysqli->query($title_sql);
if ($title_result->num_rows > 0) {
    while($row = $title_result->fetch_assoc()) {
    $herbal_name = $row['name'];
    echo $herbal_name;
    }
    
} else {
	echo "error";
}
//****the following 100's of lines of codes displays results alphabetically by connecting to the database each time for each letter, as in a% on the line below
$herbal_sql = "SELECT DISTINCT herb.common_name, uses.herb_id FROM uses INNER JOIN herb ON uses.herb_id = herb.herb_id WHERE uses.herbal_id = $herbal_id AND herb.common_name LIKE 'a%' ORDER BY herb.common_name";
$herbal_result = $mysqli->query($herbal_sql);

$numResults = mysqli_num_rows($herbal_result);
$counter = 0;

if ($herbal_result->num_rows > 0)  {
echo '<h3>A</h3><br>';
    // output data of each row
    while($row = $herbal_result->fetch_assoc()) {
    $herb_id = $row['herb_id'];
  echo '<a href="herbalherb.php?herbalid=' . $herbal_id . '&herbid=' . $row['herb_id'] . '">' . $row['common_name'] . '</a> ';

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
$herbal_sql = "SELECT DISTINCT herb.common_name, uses.herb_id FROM uses INNER JOIN herb ON uses.herb_id = herb.herb_id WHERE uses.herbal_id = $herbal_id AND herb.common_name LIKE 'b%' ORDER BY herb.common_name";
$herbal_result = $mysqli->query($herbal_sql);

$numResults = mysqli_num_rows($herbal_result);
$counter = 0;

if ($herbal_result->num_rows > 0)  {
echo '<h3>B</h3><br>';
    // output data of each row
    while($row = $herbal_result->fetch_assoc()) {
    $herb_id = $row['herb_id'];
  echo '<a href="herbalherb.php?herbalid=' . $herbal_id . '&herbid=' . $row['herb_id'] . '">' . $row['common_name'] . '</a> ';

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


$herbal_sql = "SELECT DISTINCT herb.common_name, uses.herb_id FROM uses INNER JOIN herb ON uses.herb_id = herb.herb_id WHERE uses.herbal_id = $herbal_id AND herb.common_name LIKE 'c%' ORDER BY herb.common_name";
$herbal_result = $mysqli->query($herbal_sql);

$numResults = mysqli_num_rows($herbal_result);
$counter = 0;

if ($herbal_result->num_rows > 0)  {
echo '<h3>C</h3><br>';
    // output data of each row
    while($row = $herbal_result->fetch_assoc()) {
    $herb_id = $row['herb_id'];
  echo '<a href="herbalherb.php?herbalid=' . $herbal_id . '&herbid=' . $row['herb_id'] . '">' . $row['common_name'] . '</a> ';

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

$herbal_sql = "SELECT DISTINCT herb.common_name, uses.herb_id FROM herb INNER JOIN uses ON herb.herb_id = uses.herb_id WHERE uses.herbal_id = $herbal_id AND herb.common_name LIKE 'd%' ORDER BY herb.common_name";
$herbal_result = $mysqli->query($herbal_sql);

$numResults = mysqli_num_rows($herbal_result);
$counter = 0;

if ($herbal_result->num_rows > 0)  {
echo '<h3>D</h3><br>';
    // output data of each row
    while($row = $herbal_result->fetch_assoc()) {
    $herb_id = $row['herb_id'];
  echo '<a href="herbalherb.php?herbalid=' . $herbal_id . '&herbid=' . $row['herb_id'] . '">' . $row['common_name'] . '</a> ';

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

$herbal_sql = "SELECT DISTINCT herb.common_name, uses.herb_id FROM uses INNER JOIN herb ON uses.herb_id = herb.herb_id WHERE uses.herbal_id = $herbal_id AND herb.common_name LIKE 'e%' ORDER BY herb.common_name";
$herbal_result = $mysqli->query($herbal_sql);

$numResults = mysqli_num_rows($herbal_result);
$counter = 0;

if ($herbal_result->num_rows > 0)  {
echo '<h3>E</h3><br>';
    // output data of each row
    while($row = $herbal_result->fetch_assoc()) {
    $herb_id = $row['herb_id'];
  echo '<a href="herbalherb.php?herbalid=' . $herbal_id . '&herbid=' . $row['herb_id'] . '">' . $row['common_name'] . '</a> ';

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

$herbal_sql = "SELECT DISTINCT herb.common_name, uses.herb_id FROM uses INNER JOIN herb ON uses.herb_id = herb.herb_id WHERE uses.herbal_id = $herbal_id AND herb.common_name LIKE 'f%' ORDER BY herb.common_name";
$herbal_result = $mysqli->query($herbal_sql);

$numResults = mysqli_num_rows($herbal_result);
$counter = 0;

if ($herbal_result->num_rows > 0)  {
echo '<h3>F</h3><br>';
    // output data of each row
    while($row = $herbal_result->fetch_assoc()) {
    $herb_id = $row['herb_id'];
  echo '<a href="herbalherb.php?herbalid=' . $herbal_id . '&herbid=' . $row['herb_id'] . '">' . $row['common_name'] . '</a> ';

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

$herbal_sql = "SELECT DISTINCT herb.common_name, uses.herb_id FROM uses INNER JOIN herb ON uses.herb_id = herb.herb_id WHERE uses.herbal_id = $herbal_id AND herb.common_name LIKE 'g%' ORDER BY herb.common_name";
$herbal_result = $mysqli->query($herbal_sql);

$numResults = mysqli_num_rows($herbal_result);
$counter = 0;

if ($herbal_result->num_rows > 0)  {
echo '<h3>G</h3><br>';
    // output data of each row
    while($row = $herbal_result->fetch_assoc()) {
    $herb_id = $row['herb_id'];
  echo '<a href="herbalherb.php?herbalid=' . $herbal_id . '&herbid=' . $row['herb_id'] . '">' . $row['common_name'] . '</a> ';

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

$herbal_sql = "SELECT DISTINCT herb.common_name, uses.herb_id FROM uses INNER JOIN herb ON uses.herb_id = herb.herb_id WHERE uses.herbal_id = $herbal_id AND herb.common_name LIKE 'H%' ORDER BY herb.common_name";
$herbal_result = $mysqli->query($herbal_sql);

$numResults = mysqli_num_rows($herbal_result);
$counter = 0;

if ($herbal_result->num_rows > 0)  {
echo '<h3>H</h3><br>';
    // output data of each row
    while($row = $herbal_result->fetch_assoc()) {
    $herb_id = $row['herb_id'];
  echo '<a href="herbalherb.php?herbalid=' . $herbal_id . '&herbid=' . $row['herb_id'] . '">' . $row['common_name'] . '</a> ';

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
$herbal_sql = "SELECT DISTINCT herb.common_name, uses.herb_id FROM uses INNER JOIN herb ON uses.herb_id = herb.herb_id WHERE uses.herbal_id = $herbal_id AND herb.common_name LIKE 'I%' ORDER BY herb.common_name";
$herbal_result = $mysqli->query($herbal_sql);

$numResults = mysqli_num_rows($herbal_result);
$counter = 0;

if ($herbal_result->num_rows > 0)  {
echo '<h3>I</h3><br>';
    // output data of each row
    while($row = $herbal_result->fetch_assoc()) {
    $herb_id = $row['herb_id'];
  echo '<a href="herbalherb.php?herbalid=' . $herbal_id . '&herbid=' . $row['herb_id'] . '">' . $row['common_name'] . '</a> ';

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

$herbal_sql = "SELECT DISTINCT herb.common_name, uses.herb_id FROM uses INNER JOIN herb ON uses.herb_id = herb.herb_id WHERE uses.herbal_id = $herbal_id AND herb.common_name LIKE 'J%' ORDER BY herb.common_name";
$herbal_result = $mysqli->query($herbal_sql);

$numResults = mysqli_num_rows($herbal_result);
$counter = 0;

if ($herbal_result->num_rows > 0)  {
echo '<h3>J</h3><br>';
    // output data of each row
    while($row = $herbal_result->fetch_assoc()) {
    $herb_id = $row['herb_id'];
  echo '<a href="herbalherb.php?herbalid=' . $herbal_id . '&herbid=' . $row['herb_id'] . '">' . $row['common_name'] . '</a> ';

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

$herbal_sql = "SELECT DISTINCT herb.common_name, uses.herb_id FROM uses INNER JOIN herb ON uses.herb_id = herb.herb_id WHERE uses.herbal_id = $herbal_id AND herb.common_name LIKE 'k%' ORDER BY herb.common_name";
$herbal_result = $mysqli->query($herbal_sql);

$numResults = mysqli_num_rows($herbal_result);
$counter = 0;

if ($herbal_result->num_rows > 0)  {
echo '<h3>K</h3><br>';
    // output data of each row
    while($row = $herbal_result->fetch_assoc()) {
    $herb_id = $row['herb_id'];
  echo '<a href="herbalherb.php?herbalid=' . $herbal_id . '&herbid=' . $row['herb_id'] . '">' . $row['common_name'] . '</a> ';

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


$herbal_sql = "SELECT DISTINCT herb.common_name, uses.herb_id FROM uses INNER JOIN herb ON uses.herb_id = herb.herb_id WHERE uses.herbal_id = $herbal_id AND herb.common_name LIKE 'l%' ORDER BY herb.common_name";
$herbal_result = $mysqli->query($herbal_sql);

$numResults = mysqli_num_rows($herbal_result);
$counter = 0;

if ($herbal_result->num_rows > 0)  {
echo '<h3>L</h3><br>';
    // output data of each row
    while($row = $herbal_result->fetch_assoc()) {
    $herb_id = $row['herb_id'];
  echo '<a href="herbalherb.php?herbalid=' . $herbal_id . '&herbid=' . $row['herb_id'] . '">' . $row['common_name'] . '</a> ';

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


$herbal_sql = "SELECT DISTINCT herb.common_name, uses.herb_id FROM uses INNER JOIN herb ON uses.herb_id = herb.herb_id WHERE uses.herbal_id = $herbal_id AND herb.common_name LIKE 'm%' ORDER BY herb.common_name";
$herbal_result = $mysqli->query($herbal_sql);

$numResults = mysqli_num_rows($herbal_result);
$counter = 0;

if ($herbal_result->num_rows > 0)  {
echo '<h3>M</h3><br>';
    // output data of each row
    while($row = $herbal_result->fetch_assoc()) {
    $herb_id = $row['herb_id'];
  echo '<a href="herbalherb.php?herbalid=' . $herbal_id . '&herbid=' . $row['herb_id'] . '">' . $row['common_name'] . '</a> ';

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

$herbal_sql = "SELECT DISTINCT herb.common_name, uses.herb_id FROM uses INNER JOIN herb ON uses.herb_id = herb.herb_id WHERE uses.herbal_id = $herbal_id AND herb.common_name LIKE 'n%' ORDER BY herb.common_name";
$herbal_result = $mysqli->query($herbal_sql);

$numResults = mysqli_num_rows($herbal_result);
$counter = 0;

if ($herbal_result->num_rows > 0)  {
echo '<h3>N</h3><br>';
    // output data of each row
    while($row = $herbal_result->fetch_assoc()) {
    $herb_id = $row['herb_id'];
  echo '<a href="herbalherb.php?herbalid=' . $herbal_id . '&herbid=' . $row['herb_id'] . '">' . $row['common_name'] . '</a> ';

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

$herbal_sql = "SELECT DISTINCT herb.common_name, uses.herb_id FROM uses INNER JOIN herb ON uses.herb_id = herb.herb_id WHERE uses.herbal_id = $herbal_id AND herb.common_name LIKE 'o%' ORDER BY herb.common_name";
$herbal_result = $mysqli->query($herbal_sql);

$numResults = mysqli_num_rows($herbal_result);
$counter = 0;

if ($herbal_result->num_rows > 0)  {
echo '<h3>O</h3><br>';
    // output data of each row
    while($row = $herbal_result->fetch_assoc()) {
    $herb_id = $row['herb_id'];
  echo '<a href="herbalherb.php?herbalid=' . $herbal_id . '&herbid=' . $row['herb_id'] . '">' . $row['common_name'] . '</a> ';

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

$herbal_sql = "SELECT DISTINCT herb.common_name, uses.herb_id FROM uses INNER JOIN herb ON uses.herb_id = herb.herb_id WHERE uses.herbal_id = $herbal_id AND herb.common_name LIKE 'p%' ORDER BY herb.common_name";
$herbal_result = $mysqli->query($herbal_sql);

$numResults = mysqli_num_rows($herbal_result);
$counter = 0;

if ($herbal_result->num_rows > 0)  {
echo '<h3>P</h3><br>';
    // output data of each row
    while($row = $herbal_result->fetch_assoc()) {
    $herb_id = $row['herb_id'];
  echo '<a href="herbalherb.php?herbalid=' . $herbal_id . '&herbid=' . $row['herb_id'] . '">' . $row['common_name'] . '</a> ';

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


$herbal_sql = "SELECT DISTINCT herb.common_name, uses.herb_id FROM uses INNER JOIN herb ON uses.herb_id = herb.herb_id WHERE uses.herbal_id = $herbal_id AND herb.common_name LIKE 'q%' ORDER BY herb.common_name";
$herbal_result = $mysqli->query($herbal_sql);

$numResults = mysqli_num_rows($herbal_result);
$counter = 0;

if ($herbal_result->num_rows > 0)  {
echo '<h3>Q</h3><br>';
    // output data of each row
    while($row = $herbal_result->fetch_assoc()) {
    $herb_id = $row['herb_id'];
  echo '<a href="herbalherb.php?herbalid=' . $herbal_id . '&herbid=' . $row['herb_id'] . '">' . $row['common_name'] . '</a> ';

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

$herbal_sql = "SELECT DISTINCT herb.common_name, uses.herb_id FROM uses INNER JOIN herb ON uses.herb_id = herb.herb_id WHERE uses.herbal_id = $herbal_id AND herb.common_name LIKE 'r%' ORDER BY herb.common_name";
$herbal_result = $mysqli->query($herbal_sql);

$numResults = mysqli_num_rows($herbal_result);
$counter = 0;

if ($herbal_result->num_rows > 0)  {
echo '<h3>R</h3><br>';
    // output data of each row
    while($row = $herbal_result->fetch_assoc()) {
    $herb_id = $row['herb_id'];
  echo '<a href="herbalherb.php?herbalid=' . $herbal_id . '&herbid=' . $row['herb_id'] . '">' . $row['common_name'] . '</a> ';

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

$herbal_sql = "SELECT DISTINCT herb.common_name, uses.herb_id FROM uses INNER JOIN herb ON uses.herb_id = herb.herb_id WHERE uses.herbal_id = $herbal_id AND herb.common_name LIKE 's%' ORDER BY herb.common_name";
$herbal_result = $mysqli->query($herbal_sql);

$numResults = mysqli_num_rows($herbal_result);
$counter = 0;

if ($herbal_result->num_rows > 0)  {
echo '<h3>S</h3><br>';
    // output data of each row
    while($row = $herbal_result->fetch_assoc()) {
    $herb_id = $row['herb_id'];
  echo '<a href="herbalherb.php?herbalid=' . $herbal_id . '&herbid=' . $row['herb_id'] . '">' . $row['common_name'] . '</a> ';

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

$herbal_sql = "SELECT DISTINCT herb.common_name, uses.herb_id FROM uses INNER JOIN herb ON uses.herb_id = herb.herb_id WHERE uses.herbal_id = $herbal_id AND herb.common_name LIKE 't%' ORDER BY herb.common_name";
$herbal_result = $mysqli->query($herbal_sql);

$numResults = mysqli_num_rows($herbal_result);
$counter = 0;

if ($herbal_result->num_rows > 0)  {
echo '<h3>T</h3><br>';
    // output data of each row
    while($row = $herbal_result->fetch_assoc()) {
    $herb_id = $row['herb_id'];
  echo '<a href="herbalherb.php?herbalid=' . $herbal_id . '&herbid=' . $row['herb_id'] . '">' . $row['common_name'] . '</a> ';

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

$herbal_sql = "SELECT DISTINCT herb.common_name, uses.herb_id FROM uses INNER JOIN herb ON uses.herb_id = herb.herb_id WHERE uses.herbal_id = $herbal_id AND herb.common_name LIKE 'u%' ORDER BY herb.common_name";
$herbal_result = $mysqli->query($herbal_sql);

$numResults = mysqli_num_rows($herbal_result);
$counter = 0;

if ($herbal_result->num_rows > 0)  {
echo '<h3>U</h3><br>';
    // output data of each row
    while($row = $herbal_result->fetch_assoc()) {
    $herb_id = $row['herb_id'];
  echo '<a href="herbalherb.php?herbalid=' . $herbal_id . '&herbid=' . $row['herb_id'] . '">' . $row['common_name'] . '</a> ';

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

$herbal_sql = "SELECT DISTINCT herb.common_name, uses.herb_id FROM uses INNER JOIN herb ON uses.herb_id = herb.herb_id WHERE uses.herbal_id = $herbal_id AND herb.common_name LIKE 'v%' ORDER BY herb.common_name";
$herbal_result = $mysqli->query($herbal_sql);

$numResults = mysqli_num_rows($herbal_result);
$counter = 0;

if ($herbal_result->num_rows > 0)  {
echo '<h3>V</h3><br>';
    // output data of each row
    while($row = $herbal_result->fetch_assoc()) {
    $herb_id = $row['herb_id'];
  echo '<a href="herbalherb.php?herbalid=' . $herbal_id . '&herbid=' . $row['herb_id'] . '">' . $row['common_name'] . '</a> ';

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

$herbal_sql = "SELECT DISTINCT herb.common_name, uses.herb_id FROM uses INNER JOIN herb ON uses.herb_id = herb.herb_id WHERE uses.herbal_id = $herbal_id AND herb.common_name LIKE 'w%' ORDER BY herb.common_name";
$herbal_result = $mysqli->query($herbal_sql);

$numResults = mysqli_num_rows($herbal_result);
$counter = 0;

if ($herbal_result->num_rows > 0)  {
echo '<h3>W</h3><br>';
    // output data of each row
    while($row = $herbal_result->fetch_assoc()) {
    $herb_id = $row['herb_id'];
  echo '<a href="herbalherb.php?herbalid=' . $herbal_id . '&herbid=' . $row['herb_id'] . '">' . $row['common_name'] . '</a> ';

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

$herbal_sql = "SELECT DISTINCT herb.common_name, uses.herb_id FROM uses INNER JOIN herb ON uses.herb_id = herb.herb_id WHERE uses.herbal_id = $herbal_id AND herb.common_name LIKE 'x%' ORDER BY herb.common_name";
$herbal_result = $mysqli->query($herbal_sql);

$numResults = mysqli_num_rows($herbal_result);
$counter = 0;

if ($herbal_result->num_rows > 0)  {
echo '<h3>X</h3><br>';
    // output data of each row
    while($row = $herbal_result->fetch_assoc()) {
    $herb_id = $row['herb_id'];
  echo '<a href="herbalherb.php?herbalid=' . $herbal_id . '&herbid=' . $row['herb_id'] . '">' . $row['common_name'] . '</a> ';

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

$herbal_sql = "SELECT DISTINCT herb.common_name, uses.herb_id FROM uses INNER JOIN herb ON uses.herb_id = herb.herb_id WHERE uses.herbal_id = $herbal_id AND herb.common_name LIKE 'y%' ORDER BY herb.common_name";
$herbal_result = $mysqli->query($herbal_sql);

$numResults = mysqli_num_rows($herbal_result);
$counter = 0;

if ($herbal_result->num_rows > 0)  {
echo '<h3>Y</h3><br>';
    // output data of each row
    while($row = $herbal_result->fetch_assoc()) {
    $herb_id = $row['herb_id'];
  echo '<a href="herbalherb.php?herbalid=' . $herbal_id . '&herbid=' . $row['herb_id'] . '">' . $row['common_name'] . '</a> ';

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

$herbal_sql = "SELECT DISTINCT herb.common_name, uses.herb_id FROM uses INNER JOIN herb ON uses.herb_id = herb.herb_id WHERE uses.herbal_id = $herbal_id AND herb.common_name LIKE 'z%' ORDER BY herb.common_name";
$herbal_result = $mysqli->query($herbal_sql);

$numResults = mysqli_num_rows($herbal_result);
$counter = 0;

if ($herbal_result->num_rows > 0)  {
echo '<h3>Z</h3><br>';
    // output data of each row
    while($row = $herbal_result->fetch_assoc()) {
    $herb_id = $row['herb_id'];
  echo '<a href="herbalherb.php?herbalid=' . $herbal_id . '&herbid=' . $row['herb_id'] . '">' . $row['common_name'] . '</a> ';

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
//************whew! that was immense. glad you made it! **********/

$mysqli->close();

if (!isset($_SESSION['editmode']) || $_SESSION['editmode'] == 0) {
} else{
echo '<br><br><a href="editherbal.php?herbalid=' . $herbal_id . '">Update herbal</a> | ';

echo '<a href="deleteherbal.php?herbalid=' . $herbal_id . '">Delete herbal</a> | ';

echo '<a href="herbadd.php?herbalid=' . $herbal_id . '">Add an herb.</a>';
}
echo '</div>';
include 'footer.php';
?>