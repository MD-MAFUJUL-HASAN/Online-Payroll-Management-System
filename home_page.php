<?php
include_once 'header_h.php';
?>
<?php
include_once 'roles.php';
?>
<form action="#" method="post" id="Employee_view">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <div>
                        </center></u>
                        </h1>
                        <hr>
                        <?php
                        include_once 'config/config.php';
                        $q = "SELECT * FROM employee WHERE MONTH(DOB) = MONTH(NOW()) AND DAY(DOB) = DAY(NOW())";
                        $status = mysqli_query($connection_obj, $q);

                        if ($status) {
                            while ($row = mysqli_fetch_assoc($status)) {
                                echo "<h1>";
                                //echo '<b><u><font face="Arial" color="green">EMPLOYEE BIRTHDAY LIST:</font> </b>';
                                // echo '<i class="material-icons">cake</i>';
                                // echo "<td><b>".$row['Employee_id']."</b></td>";
                                echo "<h1><center><marquee><font face='Lucida Console' color='FireBrick'><td>&nbsp;HAPPY BIRTHDAY TO<br></font><img src='cake.png' style='width:100px;height:80px;'><font color='DarkMagenta'> " . $row['Employee_name'] . "<img src='cake.png' style='width:100px;height:80px;'></h1></marquee></center></font></td>";
                            }
                        }
                        $q1 = "SELECT * FROM designation";
                        $cnt1 = 0;
                        $status1 = mysqli_query($connection_obj, $q1);

                        if ($status1) {
                            while ($row1 = mysqli_fetch_assoc($status1)) {
                                $cnt1++;
                            }
                        }
                        $q2 = "SELECT * FROM department";
                        $cnt2 = 0;
                        $status2 = mysqli_query($connection_obj, $q2);

                        if ($status2) {
                            while ($row2 = mysqli_fetch_assoc($status2)) {
                                $cnt2++;
                            }
                        }
                        $q3 = "SELECT * FROM branch";
                        $cnt3 = 0;
                        $status3 = mysqli_query($connection_obj, $q3);

                        if ($status3) {
                            while ($row3 = mysqli_fetch_assoc($status3)) {
                                $cnt3++;
                            }
                        }
                        $q4 = "SELECT * FROM shift";
                        $cnt4 = 0;
                        $status4 = mysqli_query($connection_obj, $q4);

                        if ($status4) {
                            while ($row4 = mysqli_fetch_assoc($status4)) {
                                $cnt4++;
                            }
                        }
                        $q5 = "SELECT * FROM holidays";
                        $cnt5 = 0;
                        $status5 = mysqli_query($connection_obj, $q5);

                        if ($status5) {
                            while ($row5 = mysqli_fetch_assoc($status5)) {
                                $cnt5++;
                            }
                        }
                        $q6 = "SELECT * FROM employee";
                        $cnt6 = 0;
                        $status6 = mysqli_query($connection_obj, $q6);

                        if ($status6) {
                            while ($row6 = mysqli_fetch_assoc($status6)) {
                                $cnt6++;
                            }
                        }
                        $abc = $_SESSION['employee_id'];
                        $q7 = "SELECT * FROM chat WHERE status='2' AND to_id='$abc'";
                        $cnt7 = 0;
                        $status7 = mysqli_query($connection_obj, $q7);

                        if ($status7) {
                            while ($row7 = mysqli_fetch_assoc($status7)) {
                                $cnt7++;
                            }
                        }
                        $q8 = "SELECT * FROM employee_leaves WHERE Status=0";
                        $cnt8 = 0;
                        $status8 = mysqli_query($connection_obj, $q8);

                        if ($status8) {
                            while ($row8 = mysqli_fetch_assoc($status8)) {
                                $cnt8++;
                            }
                        }
                        ?>
                        <hr>
                    </div>
                    <div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box bg-light-green hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons">business</i>
                                </div>
                                <div class="content">
                                    <div class="text">BRANCHES</div>
                                    <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"><?php echo $cnt3; ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box bg-orange hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons">event</i>
                                </div>
                                <div class="content">
                                    <div class="text">SHIFTS</div>
                                    <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"><?php echo $cnt4; ?></div>
                                </div>
                            </div>
                        </div>

                        <br><br><br><br><br><br>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box bg-cyan hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons">group_work</i>
                                </div>
                                <div class="content">
                                    <div class="text">DEPARTMENTS</div>
                                    <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"><?php echo $cnt2; ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box bg-pink hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons">group</i>
                                </div>
                                <div class="content">
                                    <div class="text">DESIGNATIONS</div>
                                    <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20" value=""><?php echo $cnt1; ?></div>
                                </div>
                            </div>
                        </div>

                        <br><br><br><br><br><br>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box bg-indigo">
                                <div class="icon">
                                    <i class="material-icons">face</i>
                                </div>
                                <div class="content">
                                    <div class="text">EMPLOYEES</div>
                                    <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"><?php echo $cnt6; ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box bg-purple">
                                <div class="icon">
                                    <i class="material-icons">beach_access</i>
                                </div>
                                <div class="content">
                                    <div class="text">HOLIDAYS</div>
                                    <div class="number count-to" data-from="0" data-to="117" data-speed="1000" data-fresh-interval="20"><?php echo $cnt5; ?></div>
                                </div>
                            </div>
                        </div>
                        <br><br><br><br><br><br>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box bg-red">
                                <div class="icon">
                                    <center><i class="material-icons">question_answer</i></center>
                                </div>
                                <div class="content">
                                    <div class="text">MESSAGES</div>
                                    <div class="number count-to" data-from="0" data-to="117" data-speed="1000" data-fresh-interval="20"><?php echo $cnt7; ?></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box bg-grey">
                                <div class="icon">
                                    <i class="material-icons">watch_later</i>
                                </div>
                                <div class="content">
                                    <div class="text">PENDING LEAVES</div>
                                    <div class="number count-to" data-from="0" data-to="117" data-speed="1000" data-fresh-interval="20"><?php echo $cnt8; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div style="margin-top:-330px ">
                        <center>
                            <canvas id="canvas" width="400" height="400" style="background-color:white"></canvas>
                        </center>
                        <script>
                            var canvas = document.getElementById("canvas");
                            var ctx = canvas.getContext("2d");
                            var radius = canvas.height / 2;
                            ctx.translate(radius, radius);
                            radius = radius * 0.90;
                            setInterval(drawClock, 1000);

                            function drawClock() {
                                drawFace(ctx, radius);
                                drawNumbers(ctx, radius);
                                drawTime(ctx, radius);
                            }

                            function drawFace(ctx, radius) {
                                var grad;
                                ctx.beginPath();
                                ctx.arc(0, 0, radius, 0, 2 * Math.PI);
                                ctx.fillStyle = 'white';
                                ctx.fill();
                                grad = ctx.createRadialGradient(0, 0, radius * 0.95, 0, 0, radius * 1.05);
                                grad.addColorStop(0, '#333');
                                grad.addColorStop(0.5, 'white');
                                grad.addColorStop(1, ' #333 ');
                                ctx.strokeStyle = grad;
                                ctx.lineWidth = radius * 0.1;
                                ctx.stroke();
                                ctx.beginPath();
                                ctx.arc(0, 0, radius * 0.1, 0, 2 * Math.PI);
                                ctx.fillStyle = '#333';
                                ctx.fill();
                            }

                            function drawNumbers(ctx, radius) {
                                var ang;
                                var num;
                                ctx.font = radius * 0.15 + "px arial";
                                ctx.textBaseline = "middle";
                                ctx.textAlign = "center";
                                for (num = 1; num < 13; num++) {
                                    ang = num * Math.PI / 6;
                                    ctx.rotate(ang);
                                    ctx.translate(0, -radius * 0.85);
                                    ctx.rotate(-ang);
                                    ctx.fillText(num.toString(), 0, 0);
                                    ctx.rotate(ang);
                                    ctx.translate(0, radius * 0.85);
                                    ctx.rotate(-ang);
                                }
                            }

                            function drawTime(ctx, radius) {
                                var now = new Date();
                                var hour = now.getHours();
                                var minute = now.getMinutes();
                                var second = now.getSeconds();
                                hour = hour % 12;
                                hour = (hour * Math.PI / 6) + (minute * Math.PI / (6 * 60)) + (second * Math.PI / (360 * 60));
                                drawHand(ctx, hour, radius * 0.5, radius * 0.07);
                                minute = (minute * Math.PI / 30) + (second * Math.PI / (30 * 60));
                                drawHand(ctx, minute, radius * 0.8, radius * 0.07);
                                second = (second * Math.PI / 30);
                                drawHand(ctx, second, radius * 0.9, radius * 0.02);
                            }

                            function drawHand(ctx, pos, length, width) {
                                ctx.beginPath();
                                ctx.lineWidth = width;
                                ctx.lineCap = "round";
                                ctx.moveTo(0, 0);
                                ctx.rotate(pos);
                                ctx.lineTo(0, -length);
                                ctx.stroke();
                                ctx.rotate(-pos);
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
<?php
include_once 'footer_h.php';
?>