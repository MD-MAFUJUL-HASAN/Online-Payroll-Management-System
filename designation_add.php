<?php
include_once 'config/config.php';
// var_dump($_POST);

$designationid = $_POST['designationid'];
$designationname = $_POST['designationname'];
$departmentname = $_POST['departmentname'];
$createddate = $_POST['createddate'];
$modifieddate = $_POST['modifieddate'];
$status = $_POST['status'];

$q = "INSERT INTO designation (`Designation_id`,`Designation_name`,`Department_name`,`Created_date`, `Modified_date`, `Status`) values('" . $designationid . "','" . $designationname . "','" . $departmentname . "','" . $createddate . "','" . $modifieddate . "','" . $status . "')";

if (mysqli_affected_rows($connection_obj) > 0) {
    $data = mysqli_fetch_assoc($q);
    header("location:./designation_count.php");
} else {
    header("location:./500.php");
}

$status = mysqli_query($connection_obj, $q);
if ($status) {
    header("location:./designation_count.php");
} else {
    header("location:./500.php");
}
?>
