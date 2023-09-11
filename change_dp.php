<?php
include_once 'header_h.php';
?>

<?php
$eid = $_SESSION['employee_id'];
?>

<?php
if (isset($_POST['submit'])) {
    include_once 'config/config.php';
    $img = addslashes($_POST['img']);
    if (move_uploaded_file($_FILES['img']['tmp_name'], "./$img")) {
        //echo "copy success";
    }

    $q = "update employee set img='$img' where Employee_id='$eid'";

    $status = mysqli_query($connection_obj, $q);
    if ($status) {

        echo '<script language="javascript">';
        echo 'alert("DP updated")';
        echo "</script>";
        header("location:./dashbord.php");
    } else {
        echo "insert error" . mysqli_error($connection_obj);
        //header("location:./500.php");
    }
}
?>

<form method="post" enctype="multipart/form-data">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>EMPLOYEE</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <h2 class="card-inside-title">Image:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="file" name="img" class="form-control" />
                                        </div>
                                    </div>
                                    <center>
                                        <input class="btn btn-primary waves-effect" name="submit" type="submit"
                                            value="SUBMIT">
                                        <input type="reset" name="close" class="btn btn-primary waves-effect"
                                            value="RESET">
                                    </center>
                                </div>
                            </div>
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
