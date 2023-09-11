<?php
include_once 'header_h.php';
?>
<?php
include_once 'roles.php';
?>
<script language="javascript" src="validation.js"></script>
<script language="javascript">

function role_check(event) {
    code = event.keyCode;
    if (!(code >= 1 && code <= 3)) {
        alert("Please Enter valid Role");
        event.keyCode = 0;
    }
}

</script>
<form action="#" method="post" onSubmit="return validate_form(this)">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>ROLE</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <h2 class="card-inside-title">Employee Email:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="ename" class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Role:</h2>
                            <br>1 for Admin<br>2 for HR Manager<br>3 for Normal Employee
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="rolen" class="form-control" onKeyPress="role_check(event)"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <center>
                            <input class="btn btn-primary waves-effect" name="add" type="submit" value="ADD" formaction="./role_update.php">
                            <input type="submit" name="close" class="btn btn-primary waves-effect" value="CLOSE" formaction="./home_page.php">
                            <input type="reset" name="reset" class="btn btn-primary waves-effect" value="RESET">
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