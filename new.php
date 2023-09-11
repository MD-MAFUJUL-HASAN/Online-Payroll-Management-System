<?php
include_once 'config/config.php';

$row = 1;
$i1 = 0;
$i2 = 0;
$i3 = 0;
$i4 = 0;
$i5 = 0;
$value = array(array());

if (($handle = fopen("bio.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        
        for ($c = 0; $c < $num; $c++) {
            echo  $c . " " . $data[$c] . "<br />\n";
            $row1 = $data[0];
            $row2 = $data[1];
            $row3 = $data[2];
            $row4 = $data[3];
            $row5 = $data[4];
        }
        
        $q = "INSERT INTO employee_attendance (`Employee_attendance_id`, `Date`, `Bio_metric_id`, `Checkin_time`, `Checkout_time`) values('" . $row1 . "','" . $row2 . "','" . $row3 . "','" . $row4 . "','" . $row5 . "')";
        $status = mysqli_query($connection_obj, $q);
        echo $q;
        
        if ($status) {
            header("location:./new.php");
        } else {
            echo "insert error" . mysqli_error($connection_obj);
        }
    }
    fclose($handle);
}
?>