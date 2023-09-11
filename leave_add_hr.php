<?php
include_once 'config/config.php';
var_dump($_POST);

$lreason = $_POST['leavereason'];
$superid = $_SESSION['employee_id'];
$lr = $_SESSION['lr'];
$stts = "2";
$eid = $_POST['employeeid'];
$mymsg = "Leave reject reason is " . $lreason;
$ctime = date("h:i:s");
$cstts = "2";

$q = "UPDATE employee_leaves SET Action_taken_by_id='$superid' , Leave_reject_reason_description='$lreason' , Status='$stts' WHERE Employee_id='$eid'";
$m = "INSERT INTO chat(from_id,to_id,message,chattime,Status) values('$superid','$eid','$lreason','$ctime','$cstts')";

if (mysqli_affected_rows($connection_obj) > 0) {
    $employee_data = mysqli_fetch_assoc($connection_obj);
} else {
    echo "update error";
}

$status = mysqli_query($connection_obj, $q);
if ($status) {
    header("location:./Accept_Reject.php");
} else {
    echo "update error";
}
$status = mysqli_query($connection_obj, $m);
if ($status) {
    header("location:./Accept_Reject.php");
} else {
    echo "insert error";
}
?>