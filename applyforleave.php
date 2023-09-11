<?php
include_once 'header_h.php';
?>
<?php
include_once 'roles.php';
?>

<form action="#" method="post" id="Applyforleave">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>APPLY FOR LEAVE</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                       
                        <div class="body">
                             
                            <h2 class="card-inside-title">Leave Day Type:</h2>
                            
                                   
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="leavedaytype" autofocus="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                               
                            <h2 class="card-inside-title">Leave Type:</h2>
                            
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="test" maxlength="2" class="form-control date" name="leavetype">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2 class="card-inside-title">Leave reason description:</h2>
                            
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name="leavereasondescription"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2 class="card-inside-title">Leave from date:</h2>
                            
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control date" name="leavefromdate" placeholder="Ex: 30/07/2016">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2 class="card-inside-title">Leave to Date:</h2>
                            
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control date" name="leavetodate" placeholder="Ex: 30/07/2016">
                                        </div>
                                    </div>
                                </div>
                            </div>
                             
                            </div>
                              
                            <center>
                                <input class="btn btn-primary waves-effect" name="submit" type="submit" formaction="./applyleave_add.php" value="SUBMIT">
                                <input class="btn btn-primary waves-effect" name="close" type="submit" formaction="./home_page.php" value="CLOSE">
                                <input class="btn btn-primary waves-effect" name="reset" type="reset" value="RESET">
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
