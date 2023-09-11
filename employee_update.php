<?php
include_once 'config/config.php';

$employeeid = $_POST['employeeid'];
$employeename = $_POST['employeename'];
$email = $_POST['email'];
$role = $_POST['role'];
$currentaddress = $_POST['currentaddress'];
$permanentaddress = $_POST['permanentaddress'];
$mobilenumber = $_POST['mobilenumber'];
$group1 = $_POST['group1'];
$dob = $_POST['dob'];
$qualification = $_POST['qualification'];
$joiningdate = $_POST['joiningdate'];
$registrationdate = $_POST['registrationdate'];
$departmentid = $_POST['departmentid'];
$branchid = $_POST['branchid'];
$designationid = $_POST['designationid'];
$shiftid = $_POST['shiftid'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$bankaccountnumber = $_POST['bankaccountnumber'];
$city = $_POST['city'];
$basicsalary = $_POST['basicsalary'];
$createddate = $_POST['createddate'];
$modifieddate = $_POST['modifieddate'];
$status = $_POST['status'];

if ($basicsalary <= 5999) {
    $pt_amt = 0;
} else if ($basicsalary >= 6000 && $basicsalary <= 8999) {
    $pt_amt = 80;
} else if ($basicsalary >= 9000 && $basicsalary <= 11999) {
    $pt_amt = 150;
} else if ($basicsalary >= 12000) {
    $pt_amt = 200;
}

$q = "UPDATE employee SET 
        Employee_name='$employeename', 
        Current_address='$currentaddress', 
        Permanent_address='$permanentaddress', 
        Mobile_number='$mobilenumber', 
        Gender='$group1', 
        Email='$email', 
        DOB='$dob', 
        Qualification='$qualification', 
        Joining_date='$joiningdate', 
        Registration_date='$registrationdate', 
        Department_id='$departmentid', 
        Branch_id='$branchid', 
        Designation_id='$designationid', 
        Shift_id='$shiftid', 
        Password='$password', 
        Bank_account_number='$bankaccountnumber', 
        Created_date='$createddate', 
        Modified_date='$modifieddate', 
        Status='$status', 
        Confirm_password='$confirmpassword', 
        Roles='$role', 
        city='$city', 
        Basic_salary='$basicsalary', 
        PT='$pt_amt' 
        WHERE Employee_id='$employeeid'";

$status = mysqli_query($connection_obj, $q);

if ($status) {
    header("location:./employee_view.php");
} else {
    echo "insert error" . mysqli_error($connection_obj);
}
?>
