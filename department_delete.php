<?php
include_once 'config/config.php';

$id = $_GET['id'];
$q = "DELETE FROM department WHERE Department_id = '$id'";
$status = mysqli_query($connection_obj, $q);

if ($status) {
    header("location: ./department_view.php");
} else {
    header("location: ./500.php");
}
?>
