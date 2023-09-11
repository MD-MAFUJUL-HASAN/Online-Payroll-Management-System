<?php
include_once 'header_h.php';
include_once 'roles.php';

$id = $_GET['id'];

$q = "SELECT * FROM employee_leaves WHERE Employee_id=" . $id . ";";
$status = mysqli_query($connection_obj, $q);

if ($status) {
    $data = mysqli_fetch_assoc($status);
}
?>
<form action="#" method="post">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>LEAVE REASON</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <input type="hidden" name="employeeid" class="form-control" value="<?php echo $_GET['id']; ?>" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <h2 class="card-inside-title">Leave Reject Reason Description:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea type="text" rows="4" name="leavereason" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <center>
                                    <input class="btn btn-primary waves-effect" name="add" type="submit" value="ADD" formaction="./leave_add.php">
                                    <input type="submit" name="close" class="btn btn-primary waves-effect" value="CLOSE" formaction="./Accept_Reject.php">
                                    <input type="reset" name="reset" class="btn btn-primary waves-effect" value="RESET">
                                </center>
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