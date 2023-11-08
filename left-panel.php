<?php
include 'header.php';
$enm = $_SESSION['emp_name'];
$e = $_SESSION['employee_email'];
$employeeid = $_SESSION['employee_id'];
?>

<?php
include_once 'config/config.php';

$q = "SELECT * from employee where Employee_id='$employeeid'";
$status = mysqli_query($connection_obj, $q);

if ($status) {
    $data = mysqli_fetch_assoc($status);
}
?>

<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader pl-size-xl">
            <div class="spinner-layer pl-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
<nav class="navbar" style="background-color: #02083d">
    <div class="container-fluid" style="display: flex; justify-content: center;">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="<?= ADMIN_URL ?>dashbord.php">Employee Payroll Management System</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">

            </ul>

        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->

        <div class="user-info">


            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <h3><?php print "$enm"; ?></h3>
                </div>
                <div class="email">
                    <input type="hidden" name="employeeid" class="form-control" value="<?php print "$e"; ?>" />
                    <?php print "$e"; ?>
                </div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="<?= ADMIN_URL ?>employee_profile.php"><i class="material-icons">person</i>Watch Your Profile</a></li>
                        <li><a href="<?= ADMIN_URL ?>change_pwd.php"><i class="material-icons">create</i>Change Your Password</a></li>
                        <li><a href="<?= ADMIN_URL ?>logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>

            </div>
        </div>


        <!-- #User Info -->
        <!-- Menu -->

        <div class="menu">
            <ul class="list">
                <li class="header" style="text-align: center;">MAIN NAVIGATION</li>
                <li style="transition: background-color 0.5s;">
                    <a href="<?= ADMIN_URL ?>home_page.php">
                        <img src='home.jpg' style='width:25px;height:25px;'>
                        <span>HOME</span>
                    </a>
                </li>
                <li style="transition: background-color 0.5s;">
                    <a href="<?= ADMIN_URL ?>branch_view.php" onmouseover="this.parentNode.style.backgroundColor = '#f0f0f0';" onmouseout="this.parentNode.style.backgroundColor = '';">
                        <img src='branchicon.png' style='width:30px;height:30px;'>
                        <span>BRANCH</span>
                    </a>
                </li>
                <li style="transition: background-color 0.5s;">
                    <a href="<?= ADMIN_URL ?>shift_view.php" onmouseover="this.parentNode.style.backgroundColor = '#f0f0f0';" onmouseout="this.parentNode.style.backgroundColor = '';">
                        <img src='shift.jpeg' style='width:35px;height:35px;'>
                        <span>SHIFT</span>
                    </a>
                </li>
                <li style="transition: background-color 0.5s;">
                    <a href="<?= ADMIN_URL ?>department_view.php" onmouseover="this.parentNode.style.backgroundColor = '#f0f0f0';" onmouseout="this.parentNode.style.backgroundColor = '';">
                        <img src='departmenticon.png' style='width:30px;height:30px;'>
                        <span>DEPARTMENT</span>
                    </a>
                </li>
                <li style="transition: background-color 0.5s;">
                    <a href="<?= ADMIN_URL ?>designation_view.php" onmouseover="this.parentNode.style.backgroundColor = '#f0f0f0';" onmouseout="this.parentNode.style.backgroundColor = '';">
                        <img src='designationicon.jpg' style='width:35px;height:35px;'>
                        <span>DESIGNATION</span>
                    </a>
                </li>
                <li style="transition: background-color 0.5s;">
                    <a href="<?= ADMIN_URL ?>employee_view.php" onmouseover="this.parentNode.style.backgroundColor = '#f0f0f0';" onmouseout="this.parentNode.style.backgroundColor = '';">
                        <img src='employeeicon.jpg' style='width:30px;height:30px;'>
                        <span>EMPLOYEE</span>
                    </a>
                </li>
                <li style="transition: background-color 0.5s;">
                    <a href="<?= ADMIN_URL ?>holiday_view.php" onmouseover="this.parentNode.style.backgroundColor = '#f0f0f0';" onmouseout="this.parentNode.style.backgroundColor = '';">
                        <img src='holidayicon.png' style='width:30px;height:30px;'>
                        <span>HOLIDAY</span>
                    </a>
                </li>
                <li style="transition: background-color 0.5s;">
                    <a href="<?= ADMIN_URL ?>Accept_Reject.php" onmouseover="this.parentNode.style.backgroundColor = '#f0f0f0';" onmouseout="this.parentNode.style.backgroundColor = '';">
                        <img src='approverejecticon.png' style='width:30px;height:30px;'>
                        <span>APPROVE/REJECT LEAVES</span>
                    </a>
                </li>
                <li style="transition: background-color 0.5s;">
                    <a href="<?= ADMIN_URL ?>cal_sal.php" onmouseover="this.parentNode.style.backgroundColor = '#f0f0f0';" onmouseout="this.parentNode.style.backgroundColor = '';">
                        <img src='calsal.jpg' style='width:35px;height:35px;'>
                        <span>CALCULATE SALARY</span>
                    </a>
                </li>
                <li style="transition: background-color 0.5s;">
                    <a href="<?= ADMIN_URL ?>gen_report.php" onmouseover="this.parentNode.style.backgroundColor = '#f0f0f0';" onmouseout="this.parentNode.style.backgroundColor = '';">
                        <img src='report.jpg' style='width:25px;height:25px;'>
                        <span>GENERATE REPORT</span>
                    </a>
                </li>
                <li style="transition: background-color 0.5s;">
                    <a href="<?= ADMIN_URL ?>Biometric.php" onmouseover="this.parentNode.style.backgroundColor = '#f0f0f0';" onmouseout="this.parentNode.style.backgroundColor = '';">
                        <img src='bio.png' style='width:40px;height:40px;'>
                        <span>BIOMETRIC</span>
                    </a>
                </li>

            </ul>
        </div>
        <div class="legal">
            <div class="copyright">
                © 2023 <br><a href="<?= ADMIN_URL ?>dashbord.php">Employee Payroll management System<br>
                </a>.
            </div>
        </div>
    </aside>
</section>