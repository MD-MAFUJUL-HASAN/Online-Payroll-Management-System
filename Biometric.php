<?php
include_once "header_h.php";
?>
<?php
include_once "roles.php";
?>
<?php
include_once "config/config.php";
?>

<form action="bio_add.php" method="post" enctype="multipart/form-data">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>BIOMETRIC</h2>
            </div>
            <!-- Input -->
            <center>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="card-inside-title"><h3>Import Biomatric File</h3></div>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                        <input type="file" name="biofile">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input class="btn btn-primary waves-effect" name="submit" type="submit" value="IMPORT"><br><br><br>
                    </center>
                </div>
            </div>
        </div>
    </section>
</form>

<?php
include_once 'footer_h.php';
?>
