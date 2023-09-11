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

    $q = "INSERT INTO holidays (`Holiday_id`, `Holiday_name`, `Holiday_description`, `Holiday_date`, `Created_date`, `Modified_date`, `Status`)
    VALUES ('$holidayid', '$holidayname', '$holidaydescription', '$holidaydate', '$createddate', '$modifieddate', '$status')";

    if (mysqli_affected_rows($connection_obj) > 0) {
        $data = mysqli_fetch_assoc($q);
    } else {
        echo "error" . mysqli_error($connection_obj);
        // header("location:./500.php");
    }

    $status = mysqli_query($connection_obj, $q);
    if ($status) {
        header("location:./holiday_count.php");
    } else {
        echo "error" . mysqli_error($connection_obj);
        // header("location:./500.php");
    }
?>
