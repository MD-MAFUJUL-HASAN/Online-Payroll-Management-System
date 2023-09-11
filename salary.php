<?php
include_once 'header_h.php';
include_once 'roles.php';
?>

<form action="gen_pay_slip.php" method="post">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>SALARY CALCULATION</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <h3>
                                <?php
                                include_once 'config/config.php';
                                $id = $_GET['id'];
                                $basic = $_GET['basic'];
                                $net = $_GET['net'];
                                $bonus = $_GET['bonus'];
                                ?>
                                <input type="hidden" name="employeeid" class="form-control" value="<?php echo $_GET['id']; ?>"/>
                                <h2 class="card-inside-title">Employee Id:</h2>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="employeeid" class="form-control"
                                                       value="<?php echo $_GET['id']; ?>">
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">Basic Salary:</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="basicsalary" class="form-control"
                                                               value="<?php echo $_GET['basic']; ?>">
                                                    </div>
                                                </div>
                                                <h2 class="card-inside-title">Net Salary:</h2>
                                                <div class="row clearfix">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" name="netsalary" class="form-control"
                                                                       value="<?php echo $_GET['net']; ?>">
                                                            </div>
                                                        </div>
                                                        <h2 class="card-inside-title">Bonus:</h2>
                                                        <div class="row clearfix">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" name="bonus"
                                                                               class="form-control"
                                                                               value="<?php echo $_GET['bonus']; ?>">
                                                                    </div>
                                                                </div>
                                                                <center>
                                                                    <input class="btn btn-primary waves-effect"
                                                                           name="submit" type="submit"
                                                                           value="GENERATE PAYSLIP">
                                                                </center>
    </section>
</form>

<?php
include_once 'footer_h.php';
?>