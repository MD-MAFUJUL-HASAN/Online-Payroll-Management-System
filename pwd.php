<?php
include_once 'config/config.php';

var_dump($_POST);
$opwd = $_POST['opwd'];
$npwd = $_POST['npwd'];
$cpwd = $_POST['cpwd'];
$eid = $_POST['eid'];
$check = "SELECT * FROM employee WHERE `Employee_id`=" . $eid . ";";
$check_status = mysqli_query($connection_obj, $check);
$data = mysqli_fetch_assoc($check_status);
$cnt = 0;

if ($opwd == $data['Password']) {
    $cnt = 1;
} else {
    echo "<script type='text/javascript'>alert('Old Password does not match')</script>";
    header("location: erroroldpwd.php");
}

if ($cnt == 1) {
    $q = "UPDATE employee SET Password='$npwd', Confirm_password='$cpwd' WHERE Employee_id='$eid'";
    echo $q;
    
    $status = mysqli_query($connection_obj, $q);
    if ($status) {
        echo "<script type='text/javascript'>alert('Password changed successfully!')</script>";
        header("location: confirmpassword.php");
    } else {
        echo "<script type='text/javascript'>alert('Failed to change password')</script>";
    }
}
?>