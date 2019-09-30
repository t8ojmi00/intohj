<?php
session_start();
if(!isset($_SESSION['logged_in'])) {
	header('location:not_logged.php');
}
?>
 ?>
<?php include "menu.php"; ?>
<?php include "connection.php" ?>
	<h2>Database</h2>
	<p>
		This is the Database.
	</p>
	<h2>Customers</h2>
	<?php
  $customers=$db->query('SELECT * FROM customers');
	foreach ($customers as $row) {
		echo $row['fname'].' '.$row['lname'].'<br>';
	}
	?>

<?php include "footer.php"; ?>
