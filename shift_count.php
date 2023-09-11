<?php
include_once 'header_h.php';
?>
<?php
include_once 'roles.php';
?>
<form action="#" method="post" id="shift_count">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <center>
                                <?php
                                include_once 'config/config.php';

                                $q = "SELECT * FROM Shift";
                                $cnt = 0;

                                $status = mysqli_query($connection_obj, $q);

                                if ($status) {
                                    while ($row = mysqli_fetch_assoc($status)) {
                                        $cnt++;
                                    }
                                }
                                ?>
                                <div>
                                    <h1>
                                        <b><u><font face="Arial" color="red">Shift added successfully.</font></b></u>
                                    </h1> <br> <br> <br> <br>
                                </div>
                                <div>
                                    <h1>
                                        <b><u><font face="Arial" color="green">Shifts added till now are <?php echo $cnt; ?>.</font></b></u>
                                    </h1> <br> <br> <br> <br> <br> <br> <br> <br> <br>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center>
            <a href="<?= ADMIN_URL ?>dashbord.php">
                <input class="btn btn-primary waves-effect" name="close" type="button" value="CLOSE">
            </a>
        </center>
    </section>
</form>
<?php
include_once 'footer_h.php';
?>