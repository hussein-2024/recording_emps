<?php
include "conn.php";

$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$birthday=$_POST['birthday'];
$gender=$_POST['gender'];
$qua=$_POST['qua'];
$tkhsos=$_POST['tkhsos'];
$remarks=$_POST['remarks'];


mysqli_query($conn,"insert into `user_emp` (name,address,phone,birthday,gender,qua,tkhsos,remarks)
values ('$name','$address','$phone','$birthday','$gender','$qua','$tkhsos','$remarks')");

header ('location:index.php');





?>