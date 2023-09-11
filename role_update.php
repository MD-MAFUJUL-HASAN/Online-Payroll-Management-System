<?php
include_once 'config/config.php';
var_dump($_POST);

if (isset($_POST['add'])) {
    $emp = $_POST['ename'];
    $role_no = $_POST['rolen'];

    $q = "UPDATE employee SET Roles = '$role_no' WHERE employee.Email='$emp'";
    
    echo $q;

    if (mysqli_affected_rows($db_obj) > 0) {
        $employee_data = mysqli_fetch_assoc($db_obj);
    } else {
        echo "update error";
    }

    $status = mysqli_query($connection_obj, $q);
    
    if ($status) {
        header("location:./role_add.php");
    } else {
        echo "update error";
    }
}
?>