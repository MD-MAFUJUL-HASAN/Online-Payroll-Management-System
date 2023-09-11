<?php include_once 'header.php'; ?>
<div class="fp-box">
    <div class="logo">
        <font color="#2196F3" size="5"><b><center>PAYROLL MANAGEMENT SYSTEM</b></font>
    </div>
    <div class="card">
        <div class="body">
            <form id="forgot_password" method="POST">
                <div class="msg">
                    Enter your email address that you used to register. We'll send you an email with your username and a
                    link to reset your password.
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">email</i>
                    </span>
                    <div class="form-line">
                        <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                    </div>
                </div>

                <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit" name="submitemail">RESET MY PASSWORD</button>

                <div class="row m-t-20 m-b--5 align-center">
                    <a href="<?= ADMIN_URL ?>index.php">Sign In!</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php //include_once 'fp.php'; ?>
<?php include_once 'footer.php'; ?>
