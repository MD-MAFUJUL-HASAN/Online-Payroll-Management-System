<?php
include_once 'config/config.php';

if (isset($_POST['submit'])) {
    $departmentid = $_POST['departmentid'];
    $departmentname = $_POST['departmentname'];
    $createddate = $_POST['createddate'];
    $modifieddate = $_POST['modifieddate'];
    $status = $_POST['status'];

    $q = "UPDATE department SET Department_name='$departmentname', Created_date='$createddate', Modified_date='$modifieddate', Status='$status' WHERE Department_id='$departmentid'";

    echo $q;

    if (mysqli_affected_rows($connection_obj) > 0) {
        $employee_data = mysqli_fetch_assoc($connection_obj);
    } else {
        header("location: ./500.php");
    }

    $status = mysqli_query($connection_obj, $q);
    if ($status) {
        header("location: ./department_view.php");
    } else {
        header("location: ./500.php");
    }
}
?>
