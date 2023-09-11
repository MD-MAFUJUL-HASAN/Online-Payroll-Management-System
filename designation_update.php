<?php
include_once 'config/config.php';

$designationid = $_POST['designationid'];
$designationname = $_POST['designationname'];
$createddate = $_POST['createddate'];
$modifieddate = $_POST['modifieddate'];
$status = $_POST['status'];

$q = "UPDATE designation SET Designation_name='$designationname', Created_date='$createddate', Modified_date='$modifieddate', Status='$status' WHERE Designation_id=$designationid";

if (mysqli_affected_rows($connection_obj) > 0) {
    $employee_data = mysqli_fetch_assoc($connection_obj);
} else {
    header("location:./500.php");
}

$status = mysqli_query($connection_obj, $q);
if ($status) {
    echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
    header("location:./designation_view.php");
} else {
    header("location:./500.php");
}
?>
