<?php
include_once 'config/config.php';
var_dump($_POST);

$id = $_GET['id'];
$q = "DELETE FROM shift WHERE Shift_id = '$id'";
$status = mysqli_query($connection_obj, $q);

if ($status) {
    header("location:./Shift_view.php");
} else {
    header("location:./500.php");
}
?>