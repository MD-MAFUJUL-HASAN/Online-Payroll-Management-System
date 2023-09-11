<?php
include_once 'config/config.php';
var_dump($_POST);

if (isset($_POST['add'])) {
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

    $a = $_GET["branchname"];
    $qrydel = "DELETE FROM branch WHERE Name='$a'";
    mysqli_query($qrydel) or die("Incorrect MySQL query: " . mysqli_error());
}
?>
