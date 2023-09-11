<?php
session_start();

define("ADMIN_URL","http://localhost/admin_panel/");

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_database_name = "payrollmanage";

$connection_obj = mysqli_connect($db_host, $db_username, $db_password, $db_database_name) or die("Database not connected: " . mysqli_error($connection_obj));

define("TBL_EMPLOYEE","employee");
define("TBL_BRANCH","branch");
?>