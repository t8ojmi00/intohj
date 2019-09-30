<?php
session_start();
if(!isset($_session['logged_in'])) {
	header('Location:not_logged.php');
}
 ?>
<?php include "menu.php"; ?>
	<h2>Database</h2>
	<p>
		This is the Database.
	</p>
<?php include "footer.php"; ?>
