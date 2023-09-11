<?php
include_once 'header_h.php';
?>

<?php
include_once 'roles.php';
?>

<script language="javascript" src="validation.js"></script>
<script language="javascript">
    function validate_form(f1) {
        if (isEmpty(f1.eid.value, "Employee Id")) {
            alert(errMsg);
            f1.eid.focus();
            return false;
        }
        if (isEmpty(f1.opwd.value, "Old Password")) {
            alert(errMsg);
            f1.opwd.focus();
            return false;
        }
        if (isEmpty(f1.npwd.value, "New Password")) {
            alert(errMsg);
            f1.npwd.focus();
            return false;
        }
        if (isEmpty(f1.cpwd.value, "Confirm Password")) {
            alert(errMsg);
            f1.cpwd.focus();
            return false;
        }
        if (f1.npwd.value != f1.cpwd.value) {
            alert("Your password and confirmation password do not match.");
            f1.cpwd.focus();
            return false;
        }
    }
</script>

<form action="pwd.php" method="post" onSubmit="return validate_form(this)">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>CHANGE PASSWORD</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <h2 class="card-inside-title">Employee Id:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="eid" class="form-control"
                                                value="<?php echo $_SESSION['employee_id']; ?>" />
                                        </div>
                                    </div>
                                    <h2 class="card-inside-title">Old Password:</h2>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="password" name="opwd" class="form-control" />
                                                </div>
                                            </div>
                                            <h2 class="card-inside-title">New Password:</h2>
                                            <div class="row clearfix">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="password" name="npwd" class="form-control"
                                                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                                                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" />
                                                        </div>
                                                    </div>
                                                    <h2 class="card-inside-title">Confirm Password:</h2>
                                                    <div class="row clearfix">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="password" name="cpwd"
                                                                        class="form-control"
                                                                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                                                        title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <center>
                                                <input class="btn btn-primary waves-effect" name="add" type="submit"
                                                    value="SUBMIT">
                                            </center>
                                        </div>
                                    </div>
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
