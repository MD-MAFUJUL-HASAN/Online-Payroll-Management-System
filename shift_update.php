<?php
include_once 'config/config.php';

var_dump($_POST);
$shiftid = $_POST['shiftid'];
$shiftname = $_POST['shiftname'];
$shiftintime = $_POST['shiftintime'];
$shiftouttime = $_POST['shiftouttime'];
$createddate = $_POST['createddate'];
$modifieddate = $_POST['modifieddate'];
$status = $_POST['status'];

$q = "UPDATE `shift` SET `Shift_name`='$shiftname',`In_time`='$shiftintime',`Out_time`='$shiftouttime',`Created_date`='$createddate',`Modified_date`='$modifieddate',`Status`='$status' WHERE Shift_id='$shiftid'";

if (mysqli_affected_rows($connection_obj) > 0) {
    $employee_data = mysqli_fetch_assoc($connection_obj);
} else {
    header("location:./500.php");
}

$status = mysqli_query($connection_obj, $q);
if ($status) {
    header("location:./shift_view.php");
} else {
    header("location:./500.php");
}
?>