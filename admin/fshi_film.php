<?php include('session.php'); ?>

<?php include ('dbcon.php');
$id=$_GET['id'];
 mysql_query("delete from filma where film_id='$id'")or die (mysql_error());
?>
 <script>
	 window.location='shiko_film.php';
 </script>
 