<?php
	include('conn.php');
	$id=$_GET['id_edit'];
	
	$name=$_POST['name'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
    $birthday=$_POST['birthday'];
    $gender=$_POST['gender'];
    $qua=$_POST['qua'];
    $tkhsos=$_POST['tkhsos'];
    $remarks=$_POST['remarks'];


	mysqli_query($conn,"update `user_emp` set name='$name',
    address='$address',phone='$phone',birthday='$birthday',
	gender='$gender',qua='$qua',tkhsos='$tkhsos',remarks='$remarks' where id='$id'");

	header('location:index.php');


	


	

	
?>