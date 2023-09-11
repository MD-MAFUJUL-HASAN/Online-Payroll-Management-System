<?php
include_once 'header.php';
?>

<section class="content">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);"><b>REGISTRATION FORM</b></a>
        </div>
        <div class="card">
            <div class="body">
                <form id="regis" method="POST" action='.'>
                    <div class="msg"></div>
                    <div class="input-group">
                        <div class="form-line">
                            <b>Name</b><input type="text" class="form-control" name="name" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="form-line">
                            <b>Current Address</b><br>
                            <textarea name="currentaddress" cols="50" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="form-line">
                            <b>Permanent Address</b><br>
                            <textarea name="permanentaddress" cols="50" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="form-line">
                            <b>Mobile Number</b><input type="Number" class="form-control" name="mobilenumber" required maxlength="10">
                        </div>
                    </div>
                    <div class="demo-radio-button">
                        <b>Gender</b><br>
                        <input name="group1" id="radio_1" type="radio" value="Male" checked="">
                        <label for="radio_1">Male</label>
                        <input name="group1" id="radio_2" type="radio" value="Female">
                        <label for="radio_2">Female</label>
                    </div>
                    <div class="input-group">
                        <div class="form-line">
                            <b>DOB</b><input type="date" class="form-control" name="dob" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="form-line">
                            <b>Qualification</b><input type="text" class="form-control" name="qualification" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="form-line">
                            <b>Registration Date</b><input type="date" class="form-control" name="registrationdate" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="form-line">
                            <b>Password</b><input type="Password" class="form-control" name="password" required>
                        </div>
                        <small>(Minimum 8-10 characters with a special symbol and at least one number)</small>
                    </div>
                    <div class="input-group">
                        <div class="form-line">
                            <b>Bank Account Number</b><input type="Number" class="form-control" name="bankaccountnumber" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="form-line">
                            <b>Confirm Password</b><input type="Password" class="form-control" name="confirmpassword" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="form-line">
                            <b>City</b><input type="text" class="form-control" name="city" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input name="terms" class="filled-in chk-col-pink" id="terms" type="checkbox">
                        <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
                        <br><br><br>
                        <div class="col-xs-4">
                            <input class="btn btn-block bg-pink waves-effect" type="submit" value="Register" name="register" formaction="./employee_add.php">
                        </div>
                        <div class="col-xs-4">
                            <input class="btn btn-block bg-pink waves-effect" type="reset" value="Reset">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
include_once 'footer.php';
?>