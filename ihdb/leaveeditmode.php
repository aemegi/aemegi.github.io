<?php
session_start();
session_unset();
session_destroy();
header("Location: index.php"); /* Redirect browser */

/* Make sure that code below does not get executed when we redirect. */
exit;
?>