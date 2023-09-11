<?php
	include_once 'header_h.php';
?>
<?php
	include_once 'roles.php';
?>

<script language="javascript" src="validation.js"></script>
<script language="javascript">
function str_check(event) {
    code = event.keyCode;
    if (!((code >= 65 && code <= 90) || (code >= 97 && code <= 122) || (code == 32))) {
        alert("Please Enter Only Characters");
        event.keyCode = 0;
    }
}

function num_check(event) {
    code = event.keyCode;
    if (!((code >= 48 && code <= 57))) {
        alert("Please Enter Only Numbers");
        event.keyCode = 0;
    }
}

function validate_form(f1) {
    if (isEmpty(f1.branchname.value, "Branch Name")) {
        alert(errMsg);
        f1.branchname.focus();
        return (false);
    }
    if (isEmpty(f1.branchaddress.value, "Branch Address")) {
        alert(errMsg);
        f1.branchaddress.focus();
        return (false);
    }
    if (isEmpty(f1.phonenumber.value, "Phone Number")) {
        alert(errMsg);
        f1.phonenumber.focus();
        return (false);
    }
    if (isEmpty(f1.email.value, "Email Address")) {
        alert(errMsg);
        f1.email.focus();
        return (false);
    }
    if (isEmpty(f1.establishmentdate.value, "Establishment Date")) {
        alert(errMsg);
        f1.establishmentdate.focus();
        return (false);
    }
    if (isEmpty(f1.createdby.value, "Created by")) {
        alert(errMsg);
        f1.createdby.focus();
        return (false);
    }
    if (isEmpty(f1.createddate.value, "Created Date")) {
        alert(errMsg);
        f1.createddate.focus();
        return (false);
    }
    if (isEmpty(f1.modifieddate.value, "Modified Date")) {
        alert(errMsg);
        f1.modifieddate.focus();
        return (false);
    }
    if (isEmpty(f1.status.value, "Status")) {
        alert(errMsg);
        f1.status.focus();
        return (false);
    }
}
</script>

<form action="branch_add.php" method="post" onSubmit="return validate_form(this)">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>BRANCH</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <input type="hidden" name="branchid" class="form-control" />
                            <h2 class="card-inside-title">Branch Name:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="branchname" class="form-control"
                                                onKeyPress="str_check(event)" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Branch Address:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name="branchaddress"></textarea>
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
                                                onKeyPress="num_check(event)" />
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
                                                pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" />
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
                                                placeholder="Ex: 30/08/2023">
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
                                                onKeyPress="str_check(event)" />
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
                                                placeholder="Ex: 30/08/2023">
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
                                                placeholder="Ex: 30/08/2023">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Status:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="status" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <center>
                            <input class="btn btn-primary waves-effect" name="submit" type="submit" value="SUBMIT">
                            <input type="reset" name="close" class="btn btn-primary waves-effect" value="RESET">
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>

<?php
	include_once 'footer_h.php';
?>
