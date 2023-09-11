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
                            <h2>
                                <b>EMPLOYEE LIST</b>
                            </h2>

                        </div>
                        <div class="body table-responsive">

                            <?php

                            include_once 'config/config.php';

                            $q = "Select * from employee"; // Here join entry from other tables will also come for various other id's

                            echo "<table class=table table-bordered border='0' align='center'>";
                            echo "<thead>";
                            echo " <tr>";
                            echo "  <th>EMPLOYEE NAME</th>";
                            echo "  <th>CHAT</th>";
                            echo " </tr>";
                            echo "</thead>";
                            echo "<tbody>";

                            $status = mysqli_query($connection_obj, $q);

                            if ($status) {
                                while ($row = mysqli_fetch_assoc($status)) {
                                    echo "<tr>";

                                    if ($_SESSION['employee_id'] != $row['Employee_id']) {
                                        $_SESSION['cid'] = $row['Employee_id'];

                                        echo "<td>" . $row['Employee_name'] . "</td>";
                                        echo "<td><a href=chat.php?id=" . $row['Employee_id'] . " ><button class='btn btn-info btn-circle-lg waves-effect waves-circle' waves-float name='chat' type='button'>
                                                <i class='material-icons'>question_answer</i>
                                            </button></a>";

                                        $cnt = 0;
                                        $fid = $row['Employee_id'];
                                        $q1 = "SELECT * from chat";
                                        $eid = $_SESSION['employee_id'];
                                        $status1 = mysqli_query($connection_obj, $q1);
                                        if ($status1) {
                                            while ($row1 = mysqli_fetch_assoc($status1)) {
                                                if ($row1['status'] == 2 && $row1['from_id'] == $row['Employee_id'] && $row1['to_id'] == $eid) {
                                                    $cnt++;
                                                }
                                            }
                                            if ($cnt > 0) {
                                                ?>
                                                <div style="background: lightgreen; border-radius: 80px 80px 80px 80px; height: 20px; width: 20px; margin-left: 60px; margin-top: -35px ">
                                                    <center><?php echo $cnt; ?></center>
                                                </div>
                                                <?php
                                            }
                                        }
                                        echo "</td>";
                                    }
                                    echo "</tr>";
                                }
                                echo "</tbody> </table>";
                            } else {
                                echo " error";
                            }

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center>
            <input class="btn btn-primary waves-effect" name="close" type="SUBMIT" value="CLOSE"
                   formaction="./home_page.php"></button>
        </center>
    </section>
</form>

<?php
include_once 'footer_h.php';
?>
