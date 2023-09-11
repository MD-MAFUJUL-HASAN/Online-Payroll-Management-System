<?php
include_once 'config/config.php';
var_dump($_POST);

$mymsg = $_POST['mymsg'];
$frm_id = $_SESSION['employee_id'];

$to_id = $_GET['id'];
$ctime = date("h:i:s");
$stts = "1";

$q = "INSERT INTO chat(from_id, to_id, message, chattime) values ('$frm_id', '$to_id', '$mymsg', '$ctime')";

echo $q;
if(mysqli_affected_rows($connection_obj) > 0)
	{
			$shift_data = mysqli_fetch_assoc($q);
	}
	else
	{
		header("location:./500.php");
	}

$status = mysqli_query($connection_obj, $q);
if ($status) {
    header("location:./chat.php?id=" . $to_id);
} else {
    header("location:./500.php");
}
?>

