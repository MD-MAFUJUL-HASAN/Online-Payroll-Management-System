<?php
include_once 'config/config.php';
var_dump($_POST);

if (isset($_POST['submit'])) {
    $eid = $_SESSION['employee_id'];
    $enm = $_SESSION['emp_name'];
    $ldt = $_POST['leavedaytype'];
    $lt = $_POST['leavetype'];
    $lrd = $_POST['leavereasondescription'];
    $lfd = $_POST['leavefromdate'];
    $ltd = $_POST['leavetodate'];
    //$hdl=$_POST['halfdayleave'];
    $cd = date("d-m-y");
    $md = date("d-m-y");

    //$superid=$_SESSION['employee_id'];
    $q = "INSERT INTO employee_leaves(Leaveday_type,Leave_type,Leave_from_date,Leave_to_date,Employee_id,Employee_name,Leave_reason_description,Created_date,Modified_date) VALUES ('$ldt','$lt','$lfd','$ltd','$eid','$enm','$lrd','$cd','$md')";
    echo $q;
    if (mysqli_affected_rows($connection_obj) > 0) {
        $employee_data = mysqli_fetch_assoc($connection_obj);
    } else {
        header("location:./500.php");
    }

    $status = mysqli_query($connection_obj, $q);
    if ($status) {
        header("location:./applyforleave.php");
    } else {
        echo "insert error";
    }
}
?>
