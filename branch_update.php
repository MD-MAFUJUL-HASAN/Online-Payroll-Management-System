<?php
	include_once 'config/config.php';
	
	var_dump($_POST);
	$branchid = $_POST['branchid'];
	$branchname = $_POST['branchname'];
	$branchaddress = $_POST['branchaddress'];
	$phonenumber = $_POST['phonenumber'];
	$email = $_POST['email'];
	$establishmentdate = $_POST['establishmentdate'];
	$createdby = $_POST['createdby'];
	$createddate = $_POST['createddate'];
	$modifieddate = $_POST['modifieddate'];
	$status = $_POST['status'];

	$q = "UPDATE branch SET Branch_id='$branchid',Name='$branchname',Branch_Address='$branchaddress',Phone_number='$phonenumber',Email='$email',Establishment_date='$establishmentdate',Created_by='$createdby',Created_date='$createddate',Modified_date='$modifieddate',Status='$status' WHERE Branch_id=$branchid";
	
	if (mysqli_affected_rows($connection_obj) > 0) {
		$employee_data = mysqli_fetch_assoc($connection_obj);
	} else {
		header("location:./500.php");
	}		

	$status = mysqli_query($connection_obj, $q);
	if ($status) {
		header("location:./branch_view.php");
	} else {
		header("location:./500.php");
		//echo "insert error".mysqli_error($connection_obj);
	}
?>
