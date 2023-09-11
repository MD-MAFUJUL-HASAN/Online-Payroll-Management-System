<?php
    include_once 'config/config.php';

    $departmentid = $_POST['departmentid'];
    $departmentname = $_POST['departmentname'];
    $createddate = $_POST['createddate'];
    $modifieddate = $_POST['modifieddate'];
    $status = $_POST['status'];

    $q = "INSERT INTO department(`Department_id`, `Department_name`, `Created_date`, `Modified_date`, `Status`)
            VALUES ('$departmentid', '$departmentname', '$createddate', '$modifieddate', '$status')";
    
    if (mysqli_query($connection_obj, $q)) {
        header("location:./department_count.php");
    } else {
        header("location:./500.php");
    }
?>
