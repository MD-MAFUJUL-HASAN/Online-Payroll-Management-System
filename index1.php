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
            Password='" . sha1($password) . "' AND 
            Roles=1
    ";

    $db_obj = mysqli_query($connection_obj, $check_query);

    if (mysqli_num_rows($db_obj) > 0) {
        $employee_data = mysqli_fetch_assoc($db_obj);
        if (!empty($employee_data) && is_array($employee_data) && count($employee_data) > 0) {
            $store_seesion = array(
                "employee_id" => $employee_data['Employee_id'],
                "admin_role" => $employee_data['Roles']
            );

            $_SESSION = $store_seesion;
            header("location:./home_page.php");
        } else {
            header("location:./index1.php");
        }
    } else {
        header("location:./index1.php");
    }
}
?>
<div class="login-box">
    <div class="logo">
        <a href="javascript:void(0);">Admin<b>BSB</b></a>
        <small>Admin BootStrap Based - Material Design</small>
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
                <div class="row">
                    <div class="col-xs-8 p-t-5">
                        <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                        <label for="rememberme">Remember Me</label>
                    </div>
                    <div class="col-xs-4">
                        <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                    </div>
                </div>
                <div class="row m-t-15 m-b--20">
                    <div class="col-xs-6">
                        <a href="sign-up.html">Register Now!</a>
                    </div>
                    <div class="col-xs-6 align-right">
                        <a href="forgot-password.html">Forgot Password?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include_once 'footer.php';
?>