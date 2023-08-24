<?php

//here is a file for functions to display all the options of edit mode

function displaylink ($link, $linkText) {
if (!isset($_SESSION['editmode']) || $_SESSION['editmode'] == 0) {
} else {
echo '<a href="'.$link.'">'.$linkText.'</a> ';
}
}





?>