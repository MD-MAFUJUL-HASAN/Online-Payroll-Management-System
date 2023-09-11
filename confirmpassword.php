<?php
    include_once 'header_h.php';
?>
<?php
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
                                    <h1>
                                        <b><u><font face="Arial" color="green">Password changed successfully.</font></b></u>
                                    </h1> <br> <br> <br> <br>
                                </div>
                                <br> <br> <br> <br> <br> <br> <br>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center>
            <a href="<?=ADMIN_URL?>home_page.php"><input class="btn btn-primary waves-effect" name="close" type="button" value="CLOSE" ></a></button>
        </center>
    </section>
</form>
<?php
    include_once 'footer_h.php';
?>
