<?php
include_once 'header_h.php';
include_once 'roles.php';
?>
<?php
$id = $_POST['employeeid'];
$q2 = "SELECT * from employee where Employee_id=" . $id . ";";
$status2 = mysqli_query($connection_obj, $q2);
if ($status2) {
    while ($data2 = mysqli_fetch_assoc($status2)) {
        $ename = $data2['Employee_name'];
    }
}

?>
<form action="salary.php" method="post">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>EMPLOYEE PERFORMANCE</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h4>
                                <b>PERFORMANCE ANALYSIS OF <?php echo $ename; ?></b>
                            </h4>
                        </div>
                        <div class="body">
                            <h4>

                                <?php

                                $id = $_POST['employeeid'];
                                $_SESSION['sal_id'] = $id;
                                $enm = $_POST['employeename'];
                                $blank = 0;
                                $absent = 0;
                                $present = 0;
                                $bonus_cnt = 0;
                                $checkincnt = 0;
                                $checkoutcnt = 0;
                                $checkincnt1 = 0;
                                $checkoutcnt1 = 0;
                                $checkincnt2 = 0;
                                $checkoutcnt2 = 0;

                                $q2 = "SELECT * from employee where Employee_id=" . $id . ";";
                                $status2 = mysqli_query($connection_obj, $q2);
                                if ($status2) {
                                    while ($data2 = mysqli_fetch_assoc($status2)) {
                                        echo "Employee id - " . $data2['Employee_id'] . "<br>";
                                        echo "Employee name - " . $data2['Employee_name'] . "<br>";
                                        $sid = $data2['Shift_id'];
                                        $ename = $data2['Employee_name'];
                                    }
                                }

                                $q1 = "SELECT * from payroll where Employee_id=" . $id . ";";
                                $status1 = mysqli_query($connection_obj, $q1);

                                if ($status1) {
                                    $data1 = mysqli_fetch_assoc($status1);
                                }
                                $q3 = "SELECT * from employee_attendance where Employee_id='$id'";
                                $status3 = mysqli_query($connection_obj, $q3);
                                $cnt = mysqli_num_rows($status3);

                                $q4 = "SELECT * from shift where Shift_id='$sid'";
                                $status4 = mysqli_query($connection_obj, $q4);

                                if ($status4) {
                                    while ($data4 = mysqli_fetch_assoc($status4)) {
                                        echo "Shift id - "  . $data4['Shift_id'] . "<br>";
                                        echo "Shift timings : " . $data4['In_time'] . " to " . $data4['Out_time'] . "<br>";
                                        $sit = $data4['In_time'];
                                        $sot = $data4['Out_time'];
                                    }
                                }

                                if ($status3) {
                                    while ($check_data = mysqli_fetch_assoc($status3)) {
                                        $bio_id = $check_data['Employee_id'];
                                        if ($check_data['Checkin_time'] == '' OR $check_data['Checkout_time'] == '') {
                                            $blank++;
                                        }
                                        if ((($check_data['Checkin_time'] > $sit) && ($check_data['Checkin_time'] != '')) && ($check_data['Checkout_time'] != '')) {
                                            $checkincnt++;
                                        }
                                        if ((($check_data['Checkout_time'] < $sot) && ($check_data['Checkout_time'] != '')) && ($check_data['Checkin_time'] != '')) {
                                            $checkoutcnt++;
                                        }
                                        if ((($check_data['Checkin_time'] < $sit) && ($check_data['Checkin_time'] != '')) && ($check_data['Checkout_time'] != '')) {
                                            $checkincnt1++;
                                        }
                                        if ((($check_data['Checkout_time'] > $sot) && ($check_data['Checkout_time'] != '')) && ($check_data['Checkin_time'] != '')) {
                                            $checkoutcnt1++;
                                        }
                                        if ((($check_data['Checkin_time'] == $sit) && ($check_data['Checkin_time'] != '')) && ($check_data['Checkout_time'] != '')) {
                                            $checkincnt2++;
                                        }
                                        if ((($check_data['Checkout_time'] == $sot) && ($check_data['Checkout_time'] != '')) && ($check_data['Checkin_time'] != '')) {
                                            $checkoutcnt2++;
                                        }
                                    }
                                }

                                $present = 30 - $absent;
                                echo "Total blank entries - " . $blank . "<br>";
                                echo "Total absent - ". $absent . "<br>";
                                echo "Total present - " . $present . "<br>";

                                echo "sit is" . $sit;
                                echo "sot is" . $sot;
                                echo "<br><br>";

                                echo "<b><u>Mistakes</u></b><br><br>";
                                echo $enm . " came late for " . $checkincnt . " times.<br><br>";
                                echo $enm . " goes early for " . $checkoutcnt . " times.<br><br>";
                                echo "<b><u>Goodness</u></b><br><br>";
                                echo $enm . " came early for " . $checkincnt1 . " times.<br><br>";
                                echo $enm . " goes late for " . $checkoutcnt1 . " times.<br><br>";
                                ?>
                                <input class="btn btn-primary waves-effect" name="submit" align="center" type="submit" value="OK">
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
<?php
include_once 'footer_h.php';
?>