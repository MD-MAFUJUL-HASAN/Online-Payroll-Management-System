<?php
	include_once 'footer_h.php';
?>


<?php
include_once 'header_h.php';
?>
<?php
include_once 'roles.php';
?>
<script language="javascript" src="validation.js"></script>
<script language="javascript">
function str_check(event) {
    code = event.keyCode;
    if (!((code >= 65 && code <= 90) || (code >= 97 && code <= 122) || (code == 32))) {
        alert("Please Enter Only Characters");
        event.keyCode = 0;
    }
}

function num_check(event) {
    code = event.keyCode;
    if (!((code >= 48 && code <= 57))) {
        alert("Please Enter Only Numbers");
        event.keyCode = 0;
    }
}

function validate_form(f1) {
    if (isEmpty(f1.employeename.value, "Employee name")) {
        alert(errMsg);
        f1.employeename.focus();
        return (false);
    }
    if (isEmpty(f1.email.value, "Email")) {
        alert(errMsg);
        f1.email.focus();
        return (false);
    }
    if (isEmpty(f1.role.value, "Role")) {
        alert(errMsg);
        f1.role.focus();
        return (false);
    }
    if (isEmpty(f1.currentaddress.value, "Current Address")) {
    alert(errMsg);
    f1.currentaddress.focus();
    return (false);
    }
    if (isEmpty(f1.permanentaddress.value, "Permanent Address")) {
        alert(errMsg);
        f1.permanentaddress.focus();
        return (false);
    }
    if (isEmpty(f1.mobilenumber.value, "Mobile Number")) {
        alert(errMsg);
        f1.mobilenumber.focus();
        return (false);
    }
    /*   if(isEmpty(f1.group1.value,"Gender"))
      {
        alert(errMsg);
        //f1.group1.focus();
        return (false);
      }*/

    if (isEmpty(f1.dob.value, "DOB")) {
        alert(errMsg);
        f1.dob.focus();
        return (false);
    }
    if (isEmpty(f1.qualification.value, "Qualification")) {
        alert(errMsg);
        f1.qualification.focus();
        return (false);
    }
    if (isEmpty(f1.joiningdate.value, "Joining date")) {
        alert(errMsg);
        f1.joiningdate.focus();
        return (false);
    }
    if (isEmpty(f1.registrationdate.value, "Registration date")) {
        alert(errMsg);
        f1.registrationdate.focus();
        return (false);
    }
    if (isEmpty(f1.departmentid.value, "Department id")) {
        alert(errMsg);
        f1.departmentid.focus();
        return (false);
    }
    if (isEmpty(f1.branchid.value, "Branch id")) {
        alert(errMsg);
        f1.branchid.focus();
        return (false);
    }
    if (isEmpty(f1.designationid.value, "Designationid")) {
        alert(errMsg);
        f1.designationid.focus();
        return (false);
    }
    if (isEmpty(f1.shiftid.value, "Shiftid")) {
        alert(errMsg);
        f1.shiftid.focus();
        return (false);
    }
    if (isEmpty(f1.password.value, "Password")) {
        alert(errMsg);
        f1.password.focus();
        return (false);
    }
    if (isEmpty(f1.confirmpassword.value, "Confirm Password")) {
        alert(errMsg);
        f1.confirmpassword.focus();
        return (false);
    }
    if (f1.password.value != f1.confirmpassword.value) {
        alert("Your password and confirmation password do not match.");
        f1.confirmpassword.focus();
        return (false);
    }

    if (isEmpty(f1.bankaccountnumber.value, "Bank Account Number")) {
        alert(errMsg);
        f1.bankaccountnumber.focus();
        return (false);
    }
    if (isEmpty(f1.city.value, "City")) {
        alert(errMsg);
        f1.city.focus();
        return (false);
    }
    if (isEmpty(f1.basicsalary.value, "Basic salary")) {
        alert(errMsg);
        f1.basicsalary.focus();
        return (false);
    }
    if (isEmpty(f1.createddate.value, "Created Date")) {
        alert(errMsg);
        f1.createddate.focus();
        return (false);
    }
    if (isEmpty(f1.modifieddate.value, "Modified Date")) {
        alert(errMsg);
        f1.modifieddate.focus();
        return (false);
    }
    if (isEmpty(f1.status.value, "Status")) {
        alert(errMsg);
        f1.status.focus();
        return (false);
    }
    if (f1.mobilenumber.value.length != 10) {
        alert("Please enter a valid mobile number.");
        f1.mobilenumber.focus();
        return (false);
    }
}
</script>
<form action="employee_add.php" method="post" id="Employee" name="form1" onSubmit="return validate_form(this)">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>EMPLOYEE</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <input type="hidden" name="employeeid" class="form-control" />
                            <input type="hidden" name="pt" class="form-control" />

                            <h2 class="card-inside-title">Employee Name:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="employeename" class="form-control" onKeyPress="str_check(event)" />
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">E-mail(*username to be assigned to employee for login):</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="E-mail" name="email" class="form-control"     />
                                        </div>
                                    </div>
                                    
                            <h2 class="card-inside-title">Role:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="role" class="form-control"  onKeyPress="num_check(event)"  />
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Current Address:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name="currentaddress" ></textarea>           </div>
                                        </div>

                            <h2 class="card-inside-title">Permanent Address:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name="permanentaddress" ></textarea>           </div>
                                        </div>
                            <h2 class="card-inside-title">Mobile Number:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="mobilenumber" class="form-control" onKeyPress="num_check(event)"/>
                                        </div>
                                    </div>

                            <div class="demo-radio-button">
                            <h2 class="card-inside-title">Gender:</h2>
                                <input name="group1" id="radio_1" type="radio"  value="Male" />
                                <label for="radio_1">Male</label>
                                <input name="group1" id="radio_2" type="radio" value="Female" />
                                <label for="radio_2">Female</label>
                            </div>

                            <h2 class="card-inside-title">DOB:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control date" name="dob" placeholder="Ex: 30/07/2016" >                                       
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Qualification:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="qualification" class="form-control"    />
                                        </div>
                                    </div>   

                            <h2 class="card-inside-title">Joining Date:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control date" name="joiningdate" placeholder="Ex: 30/07/2016"  >                                       
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Registration Date:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control date" name="registrationdate" placeholder="Ex: 30/07/2016" >                                       
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Department Id:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="departmentid" class="form-control"   />
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Branch Id:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="branchid" class="form-control"    />
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Designation Id:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="designationid" class="form-control"  />
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Shift Id:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="shiftid" class="form-control"    />
                                        </div>
                                    </div>
                            <h2 class="card-inside-title">Password:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  />
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Confirm Passoword:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="confirmpassword" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"   />
                                        </div>
                                    </div>
                            <h2 class="card-inside-title">Bank Account Number:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="bankaccountnumber" class=" form-control" onKeyPress="num_check(event)" />
                                        </div>
                                    </div>
                            <h2 class="card-inside-title">CITY:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="city" class="form-control" onKeyPress="str_check(event)"   />
                                        </div>
                                    </div>
                            <h2 class="card-inside-title">Basic Salary:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="basicsalary" class="form-control" onKeyPress="num_check(event)"/>
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Created Date:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control date" name="createddate" placeholder="Ex: 30/07/2016"  >                                       
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Modified Date:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control date" name="modifieddate" placeholder="Ex: 30/07/2016"   >                                       
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Status:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="status" class="form-control"    />
                                        </div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <center>
              <input class="btn btn-primary waves-effect" name="submit" type="submit" value="SUBMIT">
              <input type="reset" name="close" class="btn btn-primary waves-effect" value="RESET">
          </center>
          
          </div>
      </div>
  </section>
</form>

<?php
    include_once 'footer_h.php';
?>
