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

$pt_amt = 0;

if ($basicsalary <= 5999) {
    $pt_amt = 0;
} else if ($basicsalary >= 6000 && $basicsalary <= 8999) {
    $pt_amt = 80;
} else if ($basicsalary >= 9000 && $basicsalary <= 11999) {
    $pt_amt = 150;
} else if ($basicsalary >= 12000) {
    $pt_amt = 200;
}

$check_query = "
    SELECT 
        *
    FROM " . TBL_EMPLOYEE . "
    WHERE
        Email='" . $email . "'";

$db_obj = mysqli_query($connection_obj, $check_query);

if (mysqli_num_rows($db_obj) > 1) {
    header("location:./empusername.php");
} else {
    $newUser = "INSERT INTO employee (`Employee_id`,`Employee_name`, `Current_address`, `Permanent_address`, `Mobile_number`, `Gender`, `Email`,`DOB`,`Qualification`,`Joining_date`,`Registration_date`,`Department_id`,`Branch_id`,`Designation_id`,`Shift_id`,`Password`,`Bank_account_number`,`Created_date`,`Modified_date`,`Status`,`Confirm_password`,`Roles`,`city`,`Basic_salary`,`PT`) values('" . $employeeid . "','" . $employeename . "','" . $currentaddress . "','" . $permanentaddress . "','" . $mobilenumber . "','" . $group1 . "','" . $email . "','" . $dob . "','" . $qualification . "','" . $joiningdate . "','" . $registrationdate . "','" . $departmentid . "','" . $branchid . "','" . $designationid . "','" . $shiftid . "','" . $password . "','" . $bankaccountnumber . "','" . $createddate . "','" . $modifieddate . "','" . $status . "','" . $confirmpassword . "','" . $role . "','" . $city . "','" . $basicsalary . "','" . $pt_amt . "')";

    if (mysqli_query($connection_obj, $newUser)) {
        header("location:./employee_count.php");
    } else {
        echo "insert error" . mysqli_error($connection_obj);
    }
}
?>
