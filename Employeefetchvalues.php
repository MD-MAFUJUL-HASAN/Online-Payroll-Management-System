<?php
include_once 'header_h.php';
include_once 'roles.php';
include_once 'config/config.php';

if (isset($_POST['submit'])) {
    $q = "UPDATE `employee` SET `Bio_metric_id`=" . $_POST['biometricid'] . ",`Roles`=" . $_POST['role'] . ",`Login`=" . $_POST['login'] . ",`Joining_date`=" . $_POST['joiningdate'] . ",`Department_id`=" . $_POST['departmentid'] . ",`Branch_id`=" . $_POST['branchid'] . ",`Designation_id`=" . $_POST['designationid'] . ",`Shift_id`=" . $_POST['shiftid'] . ",`Created_date`=" . $_POST['createddate'] . ",`Modified_date`=" . $_POST['modifieddate'] . " WHERE `Employee_id`=" . $_POST['Employeeid'] . ";";

    $q = "UPDATE payrollmanage.employee SET Bio_metric_id=$biometricid,Email=$email,Roles=$role,Login=$login,Joining_date=$joiningdate,Department_id=$departmentid,Branch_id=$branchid,Designation_id=$designationid,Shift_id=$shiftid,Created_date=$createddate,Modified_date=$modifieddate WHERE Employee_id=$Employeeid";
}

if (isset($_POST['submit'])) {
    $id = $_GET['Employeeid'];

    $q = "SELECT * FROM employee WHERE Employee_id=" . $_POST['Employeeid'] . ";";
    $status = mysqli_query($connection_obj, $q);

    if ($status) {
        $data = mysqli_fetch_assoc($status);
    }
}
?>

<form action="#" method="post" id="Employee">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>EMPLOYEE</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <h2 class="card-inside-title">Employee Id:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="Employeeid" class="form-control" value="<?php if (isset($_POST['submit'])) echo $data['Employee_id'] ?>" />
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Biometric Id:(*required)</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="biometricid" class="form-control"  	/>
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Role:(*required)</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="role" class="form-control" value="<?php if (isset($_POST['submit']))   echo $data['Roles'] ?>"   />
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Login:(*required)</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="login" class="form-control"   />
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Employee Name:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="employeename" class="form-control" value="<?php if (isset($_POST['submit']))  echo $data['Employee_name'] ?>"  />
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Current Address:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name="currentaddress" value="<?php if (isset($_POST['submit']))  echo $data['Current_address'] ?>"></textarea>           </div>
                                        </div>

                            <h2 class="card-inside-title">Permanent Address:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name="permanentaddress" value="<?php if (isset($_POST['submit']))  echo $data['Permanent_Address'] ?>"></textarea>           </div>
                                        </div>

                            <h2 class="card-inside-title">Mobile Number:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="mobilenumber" class="form-control"  value="<?php if (isset($_POST['submit']))  echo $data['Mobile_number'] ?>" />
                                        </div>
                                    </div>

                            <div class="demo-radio-button">
                            <b>Gender</b><br>
                                <input name="group1" id="radio_1" type="radio" checked="" value="<?php echo $data['Gender'] ?>">
                                <label for="radio_1">Male</label>
                                <input name="group1" id="radio_2" type="radio" value="<?php if (isset($_POST['submit']))  echo $data['Gender'] ?>">
                                <label for="radio_2">Female</label>
                            </div>

                            <h2 class="card-inside-title">Email:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="email" class="form-control" value="<?php if (isset($_POST['submit']))  echo $data['Email'] ?>"   />
                                        </div>
                                    </div>                             

                            <h2 class="card-inside-title">DOB:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control date" name="dob" placeholder="Ex: 30/07/2016" value="<?php if (isset($_POST['submit']))  echo $data['DOB'] ?>">                                       
                                        </div>
                                    </div>
                                    
                            <h2 class="card-inside-title">Qualification:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="qualification" class="form-control"  value="<?php if (isset($_POST['submit']))  echo $data['Qualification'] ?>" />
                                        </div>
                                    </div>   

                            <h2 class="card-inside-title">Joining Date:(*required)</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control date" name="joiningdate" placeholder="Ex: 30/07/2016" >                                       
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Registration Date:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control date" name="registrationdate" placeholder="Ex: 30/07/2016" value="<?php if (isset($_POST['submit']))  echo $data['Registration_date'] ?>">                                       
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Department Id:(*required)</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="departmentid" class="form-control"   />
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Company Id:(*required)</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="companyid" class="form-control"   />
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Designation Id:(*required)</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="designationid" class="form-control"   />
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Shift Id:(*required)</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="shiftid" class="form-control"   />
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Password:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="password" class="form-control"  value="<?php if (isset($_POST['submit']))  echo $data['Password'] ?>" />
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Confirm Passoword:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="confirmpassword" class="form-control" value="<?php if (isset($_POST['submit']))  echo $data['Confirm_password'] ?>"  />
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Bank Account Number:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="bankaccountnumber" class="form-control" value="<?php if (isset($_POST['submit']))  echo $data['Bank_account_number'] ?>"  />
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">PAN Number:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="pannumber" class="form-control"  value="<?php if (isset($_POST['submit']))  echo $data['PAN_number'] ?>" />
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">CITY:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="city" class="form-control" value="<?php if (isset($_POST['submit']))  echo $data['City'] ?>"  />
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Created Date:(*required)</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control date" name="createddate" placeholder="Ex: 30/07/2016" >                                       
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Modified Date:(*required)</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control date" name="modifieddate" placeholder="Ex: 30/07/2016" >                                       
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Status:</h2>
                            <div class="row clearfix">
                                < class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="status" class="form-control"  />
                                        </div>
                                    </div>

                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group" style="text-align: center;">
                                        <input class="btn btn-primary waves-effect" name="submit" type="submit" value="SUBMIT">
                                        <input class="btn btn-primary waves-effect" name="add" type="submit" value="ADD" formaction="./employee_add2.php">
                                        <input class="btn btn-primary waves-effect" name="update" type="submit" value="UPDATE">
                                        <input class="btn btn-primary waves-effect" name="delete" type="submit" value="DELETE">
                                        <input class="btn btn-primary waves-effect" name="close" type="submit" formaction="./home_page.php" value="CLOSE">
                                        <input class="btn btn-primary waves-effect" name="reset" type="reset" value="RESET">
                                        <input class="btn btn-primary waves-effect" name="view" type="submit" formaction="./employee_view.php" value="VIEW">
                                    </div>
                                </div>
                            </div>
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