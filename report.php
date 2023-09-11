<?php
include_once 'header_h.php';
include_once 'roles.php';
?>
<?php

?>
<form method="post" action="#">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>GENERATE REPORT</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <h3>
                                <h2 class="card-inside-title" style="text-align: center;">Employee Id:</h2>
                                <div style="text-align: center;">
                                    <?php echo $_POST['employeeid']; ?>
                                </div>

                                <h2 class="card-inside-title" style="text-align: center;">Employee Name:</h2>
                                <div style="text-align: center;">
                                    <?php
                                    $eid = $_POST['employeeid'];
                                    $c = "SELECT * FROM employee WHERE Employee_id = $eid";
                                    $c1 = mysqli_query($connection_obj, $c);
                                    if ($c1) {
                                        $c2 = mysqli_fetch_assoc($c1);
                                        echo $c2['Employee_name'];
                                    }
                                    ?>
                                </div>

                                <h2 class="card-inside-title" style="text-align: center;"><u><strong>Report</strong></u></h2>
                                <table border="1" style="margin: 0 auto; width: 80%;">
                                    <tr>
                                        <th width="70px" style="text-align: center;"><b>Date</b></th>
                                        <th width="50px" style="text-align: center;"><b>P/A</b></th>
                                        <th width="120px" style="text-align: center;"><b>Arrival Time</b></th>
                                        <th width="120px" style="text-align: center;"><b>Departure Time</b></th>
                                    </tr>

                                    <?php
                                    $eid = $_POST['employeeid'];
                                    $t = "select * from employee_attendance where Employee_id = '$eid'";
                                    $t_status = mysqli_query($connection_obj, $t);
                                    if ($t_status) {
                                        while ($row = mysqli_fetch_assoc($t_status)) {
                                            echo "<tr>";
                                            echo "<td style='text-align: center;'>" . $row['Bio_date'] . "</td>";
                                            if (($row['Checkin_time'] != '') && ($row['Checkout_time'] != '')) {
                                                echo "<td style='text-align: center;'>P</td>";
                                            } else {
                                                echo "<td style='text-align: center;'>A</td>";
                                            }
                                            echo "<td style='text-align: center;'>" . $row['Checkin_time'] . "</td>";
                                            echo "<td style='text-align: center;'>" . $row['Checkout_time'] . "</td>";
                                            echo "</tr>";
                                        }

                                        echo "</table>";
                                    }
                                    ?>
                                </table>

                                <br>
                                <br>
                                <h2 class="card-inside-title"><b> P: PRESENT<br>A: ABSENT</b></h2>
                                <center>
                                    <input class="btn btn-primary waves-effect" name="submit" type="submit" value="CLOSE" formaction="./home_page.php">
                                </center>
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