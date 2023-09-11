<?php
include_once 'header_h.php';
?>
<?php
include_once 'roles.php';
?>
<?php
include_once 'config/config.php';

$id = $_GET['id'];

$q = "SELECT * from branch where Branch_id=" . $id . ";";
$status = mysqli_query($connection_obj, $q);

if ($status) {
    $data = mysqli_fetch_assoc($status);
}
?>

<form action="branch_update.php" method="post">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>BRANCH</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <input type="hidden" name="branchid" class="form-control"
                                value="<?php echo $_GET['id']; ?>" />
                            <h2 class="card-inside-title">Branch Name:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type='text' name='branchname' class='form-control'
                                                value="<?php echo $data['Name']; ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Branch Address:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize"
                                                name="branchaddress"><?php echo $data['Branch_Address'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Phone number:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="phonenumber" class="form-control"
                                                value="<?php echo $data['Phone_number']; ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Email:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="email" class="form-control"
                                                pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$"
                                                value="<?php echo $data['Email']; ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Establishment Date:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control date" name="establishmentdate"
                                                placeholder="Ex: 30/08/2023"
                                                value="<?php echo $data['Establishment_date']; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Created By:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="createdby" class="form-control"
                                                value="<?php echo $data['Created_by']; ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Created Date:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control date" name="createddate"
                                                placeholder="Ex: 30/08/2023" value="<?php echo $data['Created_date']; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Modified Date:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control date" name="modifieddate"
                                                placeholder="Ex: 30/08/2023" value="<?php echo $data['Modified_date']; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Status:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="status" class="form-control"
                                                value="<?php echo $data['Status']; ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <center>
                                <input class="btn btn-primary waves-effect" name="submit" type="submit"
                                    value="SUBMIT">
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
