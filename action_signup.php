<?php

$con=mysqli_connect("127.0.0.1","ata","password","Records")or
    die("Could not connect: " . mysql_error());
$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$id = $_POST['id'];
$age = $_POST['age'];
$password = $_POST['password'];
$admin = 0;



$qry2 = "SELECT * from `gn-users` WHERE id=$id";
$result = mysqli_num_rows(mysqli_query($con,$qry2));

if ($age<18){
	$_SESSION['message'] = "You're too young to register on our website!";
	header("location:index.php");
}

if($result==0){
	session_start();
	$qry = "INSERT INTO `gn-users` (`first-name`, `lastname`, `id`, `age`, `password`,`admin`) VALUES ('$firstName', '$lastName', '$id', '$age', '$password', '$admin');";
	$con->query($qry);
	$_SESSION['message'] = "Successfully Registered! Now you can login!";
	header("location:login.php");
	
}
else if($result!=0){
	session_start();
	$_SESSION['message'] = "<br>Sorry user ".$firstName." you will have to try again! The ID you have entered already exists.";
	header("location:signup.php");	
}

?>