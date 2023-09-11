<?php
    include_once 'config/config.php';
    //include_once 'Branch.php';
    var_dump($_POST);

    $branchid = $_POST['branchid'];
    $branchname = $_POST['branchname'];
    $branchaddress = $_POST['branchaddress'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $establishmentdate = $_POST['establishmentdate'];
    $createdby = $_POST['createdby'];
    $createddate = $_POST['createddate'];
    $modifieddate = $_POST['modifieddate'];
    $status = $_POST['status'];

    $q = "INSERT INTO Branch (`Branch_id`, `Name`, `Branch_Address`, `Phone_number`, `Email`, `Establishment_date`, `Created_by`, `Created_date`, `Modified_date`, `Status`)
          VALUES ('$branchid', '$branchname', '$branchaddress', '$phonenumber', '$email', '$establishmentdate', '$createdby', '$createddate', '$modifieddate', '$status')";

    if (mysqli_affected_rows($connection_obj) > 0) {
        $employee_data = mysqli_fetch_assoc($connection_obj);
        header("location:./branch_count.php");
    } else {
        header("location:./500.php");
    }

    $status = mysqli_query($connection_obj, $q);
    if ($status) {
        echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
        header("location:./branch_count.php");
    } else {
        echo "<script type='text/javascript'>alert('failed!')</script>";
        //echo "insert error".mysqli_error($connection_obj);
    }
?>
