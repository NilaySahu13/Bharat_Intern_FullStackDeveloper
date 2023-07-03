<?php

$uname = $_REQUEST["typeUserX"];
$upass = $_REQUEST["typePasswordX"];
$uemail = $_REQUEST["typeEmailX"];

include("dbconnect.php");
$sql = "insert into user(uname, upass, uemail)values('$uname','$upass', '$uemail')";
mysqli_query($con,"$sql") or die("Query Error");

header("location:login.php?mssg=1");

?>