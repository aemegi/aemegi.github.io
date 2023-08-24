<p align=center><small>
<?php
if (!isset($_SESSION['editmode']) || $_SESSION['editmode'] == 0) {
		echo '<a href="editmode.php">edit mode</a>';
} else {
		echo '<a href="leaveeditmode.php">leave edit mode</a>';
}
?>

| <a href="contact.php">contact</a></small></p>
<p align=center><small><small>DISCLAIMER: much of the information in these herbals is outdated. This site is not intended to diagnose or treat any illness and is intended for information.</small></small></p>
</BODY>
</HTML>