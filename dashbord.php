<?php
    include_once 'config/config.php';
?>

<?php
if ($_SESSION['rolecode'] == 1) {
    // include_once 'left-panel.php';
    include_once 'home_page.php';
} else if ($_SESSION['rolecode'] == 2) {
    // include_once 'left-panel_hr.php';
    include_once 'home_page_hr.php';
} else if ($_SESSION['rolecode'] == 3) {
    // include_once 'left-panel_emp.php';
    include_once 'home_page_emp.php';
} else {
    header("location:./index.php");
}
?>
