<?php
include_once 'config/config.php';
var_dump($_POST);

$from_id = $_SESSION['employeeid'];
$get_id = $_GET['id'];
$msg = 'leave accept';

$q = "INSERT INTO chat (`from_id`, `to_id`, `message`) VALUES ('" . $from_id . "','" . $get_id . "','" . $msg . "')";

echo $q;

$affected_rows = mysqli_query($connection_obj, $q);

if ($affected_rows > 0) {
    $shift_data = mysqli_fetch_assoc($q);
} else {
    echo "insert error" . mysqli_error($connection_obj);
}

$status = mysqli_query($connection_obj, $q);

if ($status) {
    header("location:./Accept_Reject.php");
} else {
    echo "insert error";
}
?>