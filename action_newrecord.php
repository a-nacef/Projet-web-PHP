<?php

$con=mysqli_connect("127.0.0.1","ata","password","Records")or
    die("Could not connect: " . mysql_error());
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$ref = $_POST['ref'];
$record = $_POST['record'];
$year = $_POST['year'];


$qry2 = "SELECT * from `holders` WHERE ref=$ref";
$result = mysqli_num_rows(mysqli_query($con,$qry2));

if($result==0){
	session_start();
	$qry = "INSERT INTO `holders` (`name`, `lastname`, `record`, `year`, `ref`) VALUES ('$name', '$lastname', '$record', $year, '$ref');";
if (mysqli_query($con, $qry)) {
    $_SESSION['msg'] = "<br>Record added.";
	header("location:admin_client.php");	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
else if($result!=0){
	session_start();
	$_SESSION['message'] = "<br>The Ref you have entered already exists.";
	header("location:new_record.php");	
}
?>
