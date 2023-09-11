<?php
include_once 'header_h.php';
?>
<?php
include_once 'roles.php';
?>

<?php
include_once 'config/config.php';

$id = $_GET['id'];

$q = "SELECT * from employee where Employee_id=" . $id . ";";
$status = mysqli_query($connection_obj, $q);

echo "<form action=employee_view.php method=post >
    <section class=content>
        <div class=container-fluid>
         <div class=row clearfix>
                <div class=col-lg-12 col-md-12 col-sm-12 col-xs-12>
                    <div class=card>
                       
                        <div class=body>";

if ($status) {
    while ($row = mysqli_fetch_assoc($status)) {
        echo "<b>Employee ID:</b>" . $row['Employee_id'] . "<br>";
        echo "<b>Employee Name:</b>" . $row['Employee_name'] . "<br>";
        echo "<b>Role:</b>" . $row['Roles'] . "<br>";
        echo "<b>Current Address:</b>" . $row['Current_address'] . "<br>";
        echo "<b>Permanent Address:</b>" . $row['Permanent_address'] . "<br>";
        echo "<b>Mobile Number:</b>" . $row['Mobile_number'] . "<br>";
        echo "<b>Gender:</b>" . $row['Gender'] . "<br>";
        echo "<b>Email</b>" . $row['Email'] . "<br>";
        echo "<b>DOB:</b>" . $row['DOB'] . "<br>";
        echo "<b>Qualification:</b>" . $row['Qualification'] . "<br>";
        echo "<b>Joining Date:</b>" . $row['Joining_date'] . "<br>";
        echo "<b>Registration Date:</b>" . $row['Registration_date'] . "<br>";
        echo "<b>Department ID:</b>" . $row['Department_id'] . "<br>";
        echo "<b>Branch ID:</b>" . $row['Branch_id'] . "<br>";
        echo "<b>Designation ID:</b>" . $row['Designation_id'] . "<br>";
        echo "<b>Shift ID:</b>" . $row['Shift_id'] . "<br>";
        echo "<b>Password:</b>" . $row['Password'] . "<br>";
        echo "<b>Confirm Password:</b>" . $row['Confirm_password'] . "<br>";
        echo "<b>Bank Account Number:</b>" . $row['Bank_account_number'] . "<br>";
        echo "<b>City</b>" . $row['city'] . "<br>";
        echo "<b>Basic Salary:</b>" . $row['Basic_salary'] . "<br>";
        echo "<b>Professional Tax(PT):</b>" . $row['PT'] . "<br>";
        echo "<b>Created Date:</b>" . $row['Created_date'] . "<br>";
        echo "<b>Modified Date:</b>" . $row['Modified_date'] . "<br>";
        echo "<b>Status:</b>" . $row['Status'] . "<br>";
        echo "<br><br><br><br>";
    }
}

echo "<input class=btn btn-primary waves-effect name=submit align=center type=submit value=BACK formaction=./employee_view.php>";
echo "</div></div></div></div></div></section></form>";

include_once 'footer_h.php';
?>
