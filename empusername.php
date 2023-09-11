<?php
include_once 'header_h.php';
include_once 'roles.php';
?>

<form action="#" method="post" id="department_count">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <center>
                                <div>
                                    <h1><b><u><font face="Arial" color="red">Username already exists. Try another username. </font></b></u></h1>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center>
            <a href="<?= ADMIN_URL ?>employee.php">
                <input class="btn btn-primary waves-effect" name="close" type="button" value="CLOSE">
            </a>
        </center>
    </section>
</form>

<?php
include_once 'footer_h.php';
?>
