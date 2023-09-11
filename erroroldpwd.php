<?php
include_once 'header_h.php';
include_once 'roles.php';
?>

<form action="#" method="post" id="errorpassword">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <center>
                                <div>
                                    <h1><b><u><font face="Arial" color="red">Old Password does not match.</font></b></u></h1>
                                </div>
                            </center>
                            <br> <br> <br> <br> <br> <br> <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center>
            <a href="<?= ADMIN_URL ?>home_page.php">
                <input class="btn btn-primary waves-effect" name="close" type="button" value="CLOSE">
            </a>
        </center>
    </section>
</form>

<?php
include_once 'footer_h.php';
?>
