<?php
include_once 'header.php';

if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $user_name = $_POST['username'];
    $password = $_POST['password'];

    $check_query = "
        SELECT 
            *
        FROM " . TBL_EMPLOYEE . "
        WHERE
            Email='" . $user_name . "' AND 
            Password='" . $password . "'
    ";

    $db_obj = mysqli_query($connection_obj, $check_query);

    if (mysqli_num_rows($db_obj) > 0) {
        $employee_data = mysqli_fetch_assoc($db_obj);
        if (!empty($employee_data) && is_array($employee_data) && count($employee_data) > 0) {
            $store_seesion = array(
                "employee_email" => $employee_data['Email'],
                "employee_id" => $employee_data['Employee_id'],
                "rolecode" => $employee_data['Roles'],
                "emp_name" => $employee_data['Employee_name']
            );

            $_SESSION = $store_seesion;
            header("location:./dashbord.php");
        } else {
            header("location:./index.php");
        }
    } else {
        header("location:./index.php");
    }
}
?>
<div class="login-box">
    <div class="logo">
        <font color="#2196F3" size="5"><b><center>PAYROLL MANAGEMENT SYSTEM</b></font>
    </div>
    <div class="card">
        <div class="body">
            <form id="sign_in" method="POST" action='.'>
                <div class="msg">Sign in to start your session</div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">person</i>
                    </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock</i>
                    </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                </div>
                <br>
                <button class="btn btn-block bg-blue waves-effect" type="submit">SIGN IN</button>
            </form>
        </div>
    </div>
</div>

<?php
include_once 'footer.php';
?>