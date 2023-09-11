<?php
include_once 'config/config.php';

$id = $_GET['id'];

$q = "DELETE FROM employee WHERE Employee_id = '$id'";
$status = mysqli_query($connection_obj, $q);

if ($status) {
    header("location:./employee_view.php");
} else {
    header("location:./500.php");
}
?>
