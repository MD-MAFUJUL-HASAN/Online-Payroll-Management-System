<?php
include_once 'header_h.php';
include_once 'roles.php';
include_once 'config/config.php';

$id = $_GET['id'];
$q = "SELECT * from shift where Shift_id=" . $id . ";";
$status = mysqli_query($connection_obj, $q);

if ($status) {
    $data = mysqli_fetch_assoc($status);
}
?>

<form action="shift_update.php" method="post">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>SHIFTS</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <input type="hidden" name="shiftid" class="form-control" value="<?php echo $_GET['id']; ?>" />
                        <div class="body">
                            <h2 class="card-inside-title">Shift Name:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="shiftname" class="form-control" value="<?php echo $data['Shift_name']; ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Shift In Time:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="time" class="form-control time12" placeholder="Ex: 00:00:00" name="shiftintime" value="<?php echo $data['In_time']; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Shift Out Time:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="time" class="form-control time12" placeholder="Ex: 00:00:00" name="shiftouttime" value="<?php echo $data['Out_time']; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Created Date:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control date" name="createddate" placeholder="Ex: 30/08/2023" value="<?php echo $data['Created_date']; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Modified Date:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control date" name="modifieddate" placeholder="Ex: 30/08/2023" value="<?php echo $data['Modified_date']; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Status:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="status" class="form-control" value="<?php echo $data['Status']; ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <center>
                                <input class="btn btn-primary waves-effect" name="submit" type="submit" value="SUBMIT">
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