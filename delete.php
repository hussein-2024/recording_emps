<?php
	$id=$_GET['id_del'];
	include('conn.php');
	mysqli_query($conn,"delete from `user_emp` where id='$id'");
	header('location:index.php');
	
?>
