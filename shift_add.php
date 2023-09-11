<?php
include_once 'config/config.php';
var_dump($_POST);

$shiftname = $_POST['shiftname'];
$shiftintime = $_POST['shiftintime'];
$shiftouttime = $_POST['shiftouttime'];
$createddate = $_POST['createddate'];
$modifieddate = $_POST['modifieddate'];
$status = $_POST['status'];

$q = "INSERT INTO shift (`Shift_name`, `In_time`, `Out_time`, `Created_date`, `Modified_date`, `Status`) 
      VALUES ('".$shiftname."','".$shiftintime."','".$shiftouttime."','".$createddate."','".$modifieddate."','".$status."')";

if (mysqli_affected_rows($connection_obj) > 0) {
    $shift_data = mysqli_fetch_assoc($q);
    header("location:./shift_count.php");
} else {
    header("location:./500.php");
}

$status = mysqli_query($connection_obj, $q);
if ($status) {
    header("location:./shift_count.php");
} else {
    echo "insert error";
}
?>