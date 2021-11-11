<?php

$name=$_POST['name'];
$ic=$_POST['ic'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$room=$_POST['room'];
$datestart=$_POST['datestart'];
$dateend=$_POST['dateend'];
if($room=="Deluxe"){
	$total+=210;
}
if($room=="Single"){
	$total+=120;
}
if($room=="Family"){
	$total+=340;
}
if($room=="Suite"){
	$total+=450;
}



$sql="INSERT INTO user(`id`,`name`,`ic`,`phone`,`email`,`room`,`datestart`,`dateend`,`total`) VALUES(NULL,'$name','$ic','$phone','$email','$room','$datestart','$dateend','$total')";
$result=mysqli_query($dbconn,$sql) or die(mysqli_error($dbconn));

if($sql) echo "<script>alert('Succesfully booked')</script>";
else echo "<script>alert('Failed to book')</script>";

?>