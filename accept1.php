<?php
include_once 'config/config.php';
var_dump($_POST);

$superid = $_SESSION['employee_id'];
$eid = $_POST['employeeid'];
$mymsg = 'Leave reject reason is ';
$ctime = date("h:i:s");
$cstts = "2";

$m = "INSERT INTO chat (from_id, to_id, message, chattime, status) VALUES ('$superid', '$eid', '$mymsg', '$ctime', '$cstts')";

$status = mysqli_query($connection_obj, $m);
if ($status) {
    header("location:./Accept_Reject.php");
} else {
    echo "insert error";
}
?>
