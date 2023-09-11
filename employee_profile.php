<?php
include_once 'header_h.php';
?>
<?php
include_once 'roles.php';
?>

<form action="#" method="post" id="Employee_profile">

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <b><?php echo $_SESSION['emp_name'] . "'s"; ?> PROFILE</b>
                            </h2>
                        </div>
                        <div class="body table-responsive">

                            <?php
                            include_once 'config/config.php';

                            $enm = $_SESSION['emp_name'];
                            $e = $_SESSION['employee_id'];

                            $q = "Select * from employee where Employee_id=" . $e . ";";

                            $status = mysqli_query($connection_obj, $q);

                            if ($status) {
                                while ($row = mysqli_fetch_assoc($status)) {
                                    echo "ID:<b>" . $row['Employee_id'] . "</b><br>";
                                    echo "NAME:" . $row['Employee_name'] . "<br>";
                                    echo "EMAIL:" . $row['Email'] . "<br>";
                                    echo "PASSWORD:" . $row['Password'] . "<br>";
                                    echo "JOINING DATE:" . $row['Joining_date'] . "<br>";
                                    echo "ROLE:" . $row['Roles'] . "<br>";
                                    echo "DEPARTMENT ID:" . $row['Department_id'] . "<br>";
                                    echo "BRANCH ID:" . $row['Branch_id'] . "<br>";
                                    echo "DESIGNATION ID:" . $row['Designation_id'] . "<br>";
                                    echo "SHIFT ID:" . $row['Shift_id'] . "<br>";
                                }
                            } else {
                                echo "error" . mysqli_error($connection_obj);
                            }

                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center>
            <input class="btn btn-primary waves-effect" name="close" type="SUBMIT" value="CLOSE"
                   formaction="./dashbord.php"></a></button>
        </center>
    </section>

</form>
<?php
include_once 'footer_h.php';
?>
