<?php

$con=mysqli_connect("127.0.0.1","ata","password","Records")or
    die("Could not connect: " . mysql_error());


#if ($_POST['ref'] == NULL){
	#$_SESSION['message'] =  "Ref doesnt exist";
#}

$id = $_POST['ref'];

$qry = "SELECT * FROM holders WHERE ref= '$id' ";
$result = mysqli_num_rows(mysqli_query($con,$qry));

if($result!=0){
	session_start();
	$del = "DELETE FROM holders WHERE ref='$id'";
	if(mysqli_query($con,$del)){
		$_SESSION['msg'] = "<br>Record deleted!";
		header("location:admin_client.php");
	}
	else{
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}
}
else if($result==0){
	session_start();
	$_SESSION['message'] = "Record not found. Try again.";
	header("location:delete_record.php");
}
?>
