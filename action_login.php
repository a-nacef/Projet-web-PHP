<?php

$con= mysqli_connect("127.0.0.1","ata","password","Records")or
	die("Could not connect: " . mysql_error());

$id=$_POST['id'];
$password=$_POST['password'];

$sql="SELECT * FROM `gn-users` WHERE `id`='$id' and `password`='$password'";

$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

$temp = mysqli_fetch_array( $result );
$admin = $temp['admin'];

if($count == 0)
{
	 session_start();
	 $_SESSION["msg"]="Invalid  ID or Password";
	 header("location:login.php");
}
else
{
	if($admin == 0)
	{
		session_start();
		$_SESSION['user'] = $temp;
		header("location:client.php");
	}
	else if($admin == 1)
	{
		session_start();
		$_SESSION['user'] = $temp;
		header("location:admin_client.php");
	}
}

?>
