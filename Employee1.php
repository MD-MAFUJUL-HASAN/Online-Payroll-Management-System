<?php
include_once 'header_h.php';
include_once 'roles.php';

include_once 'config/config.php';
$id = $_GET['id'];

$q = "SELECT * FROM employee WHERE Employee_id=" . $id . ";";
$status = mysqli_query($connection_obj, $q);

if ($status) {
    $data = mysqli_fetch_assoc($status);
}
?>

<form action="employee_update.php" method="post" id="Employee" name="form1" onSubmit="return validate_form(this)">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>EMPLOYEE</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <input type="hidden" name="employeeid" class="form-control" value="<?php echo $_GET['id']; ?>" />
                            <h2 class="card-inside-title">Employee Name:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="employeename" class="form-control" value="<?php echo $data['Employee_name'] ?>" />
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">E-mail(*username to be assigned to employee for login):</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="E-mail" name="email" class="form-control" value="<?php  echo $data['Email'] ?>"    />
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Role:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="role" class="form-control"  value="<?php  echo $data['Roles'] ?>"  />
                                        </div>
                                    </div>
                                
                            <h2 class="card-inside-title">Current Address:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name="currentaddress" ><?php  echo $data['Current_address'] ?></textarea>           </div>
                                        </div>

                            <h2 class="card-inside-title">Permanent Address:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name="permanentaddress" ><?php   echo $data['Permanent_address'] ?></textarea>           </div>
                                        </div>

                            <h2 class="card-inside-title">Mobile Number:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="mobilenumber" class="form-control"  value="<?php  echo $data['Mobile_number'] ?>" />
                                        </div>
                                    </div>

                            <div class="demo-radio-button">
                            <b>Gender</b><br>
                                <input name="group1" id="radio_1" type="radio"  value="Male" 
                                <?php if($data['Gender']=="Male"){
                                    echo "checked";
                                } ?> />
                                <label for="radio_1">Male</label>
                                <input name="group1" id="radio_2" type="radio" value="Female"<?php if($data['Gender']=="Female") {echo "checked";}?> />
                                <label for="radio_2">Female</label>
                            </div>

                            <h2 class="card-inside-title">DOB:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control date" name="dob" placeholder="Ex: 30/07/2016" value="<?php   echo $data['DOB'] ?>">                                       
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Qualification:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="qualification" class="form-control" value="<?php   echo $data['Qualification'] ?>"   />
                                        </div>
                                    </div>   

                            <h2 class="card-inside-title">Joining Date:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control date" name="joiningdate" placeholder="Ex: 30/07/2016" value="<?php  echo $data['Joining_date'] ?>"  >                                       
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Registration Date:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control date" name="registrationdate" placeholder="Ex: 30/07/2016" value="<?php  echo $data['Registration_date'] ?>">                                       
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Department Id:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="departmentid" class="form-control" value="<?php   echo $data['Department_id'] ?>"   />
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Branch Id:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="branchid" class="form-control" value="<?php  echo $data['Branch_id'] ?>"   />
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Designation Id:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="designationid" class="form-control" value="<?php  echo $data['Designation_id'] ?>"  />
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Shift Id:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="shiftid" class="form-control" value="<?php   echo $data['Shift_id'] ?>"   />
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Password:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" value="<?php   echo $data['Password'] ?>" />
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Confirm Passoword:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="confirmpassword" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" value="<?php  echo $data['Confirm_password'] ?>"  />
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Bank Account Number:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="bankaccountnumber" class="form-control" value="<?php   echo $data['Bank_account_number'] ?>"  />
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">CITY:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="city" class="form-control" value="<?php  echo $data['city'] ?>"  />
                                        </div>
                                    </div>
                                    
                            <h2 class="card-inside-title">Basic Salary:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="basicsalary" class="form-control" value="<?php  echo $data['Basic_salary'] ?>" onKeyPress="num_check(event)"/>
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Professional Tax(PT):</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="pt" class="form-control" value="<?php  echo $data['PT'] ?>"  />
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Created Date:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control date" name="createddate" placeholder="Ex: 30/07/2016" value="<?php   echo $data['Created_date'] ?>" >                                       
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Modified Date:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control date" name="modifieddate" placeholder="Ex: 30/07/2016" value="<?php  echo $data['Modified_date'] ?>"  >                                       
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Status:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="status" class="form-control"  value="<?php  echo $data['Status'] ?>"  />
                                        </div>
                                    </div>
                                </div>

                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group" style="text-align: center;">
                                        <button type="submit" class="btn btn-primary">Update Employee</button>
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
