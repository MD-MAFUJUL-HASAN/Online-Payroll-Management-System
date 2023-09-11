<?php
    include_once 'config/config.php';
    var_dump($_POST);
    $id = $_GET['id'];
    $q = "DELETE FROM holidays WHERE Holiday_id = '$id'";
    $status = mysqli_query($connection_obj, $q);
    if ($status) {
        header("location:./holiday_view.php");
    } else {
        header("location:./500.php");
    }
?>
