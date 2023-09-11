<?php
    include_once 'config/config.php';
    
    // var_dump($_POST);
    $holidayid = $_POST['holidayid'];
    $holidayname = $_POST['holidayname'];
    $holidaydescription = $_POST['holidaydescription'];
    $holidaydate = $_POST['holidaydate'];
    
    $createddate = $_POST['createddate'];
    $modifieddate = $_POST['modifieddate'];
    $status = $_POST['status'];

    $q = "UPDATE holidays SET Holiday_id='$holidayid', Holiday_name='$holidayname', Holiday_description='$holidaydescription', Holiday_date='$holidaydate', Created_date='$createddate', Modified_date='$modifieddate', Status='$status' WHERE Holiday_id=$holidayid";
    
    if (mysqli_affected_rows($connection_obj) > 0) {
        $employee_data = mysqli_fetch_assoc($connection_obj);
    } else {
        header("location:./500.php");
    }        

    $status = mysqli_query($connection_obj, $q);
    if ($status) {
        header("location:./holiday_view.php");
    } else {
        header("location:./500.php");
    }
?>
