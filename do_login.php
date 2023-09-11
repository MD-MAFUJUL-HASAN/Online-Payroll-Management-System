<?php
include_once 'config/config.php';

if (empty($_POST['username']) || empty($_POST['password'])) {
    header("location: ./index.php");
}

$user_name = $_POST['username'];
$password = $_POST['password'];

$check_query = "
	SELECT 
		*
	FROM " . TBL_EMPLOYEE . "
	WHERE
		Email='" . $user_name . "' AND 
		Password='" . sha1($password) . "' AND 
		Status=1
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
        header("location: ./dashboard.php");
    } else {
        header("location: ./index.php");
    }
} else {
    header("location: ./index.php");
}
?>
