<?php
	include_once 'header_h.php';
?>
<?php
	include_once 'roles.php';
?>
<script language="javascript" src="validation.js"></script>
<script language="javascript">
function str_check(event)
    {
      code=event.keyCode;
        if(!((code>=65 && code<=90) || (code>=97 && code<=122) || (code==32)))
      {
        alert("Please Enter Only Characters");
        event.keyCode=0;
      }
    }
function validate_form(f1)
  {
      if(isEmpty(f1.holidayname.value,"Holiday Name"))
      {
        alert(errMsg);
        f1.holidayname.focus();
        return (false);
      }
      if(isEmpty(f1.holidaydate.value,"Holiday Date"))
      {
        alert(errMsg);
        f1.holidaydate.focus();
        return (false);
      }
     
      if(isEmpty(f1.createddate.value,"Created Date"))
      {
        alert(errMsg);
        f1.createddate.focus();
        return (false);
      }
      if(isEmpty(f1.modifieddate.value,"Modified Date"))
      {
        alert(errMsg);
        f1.modifieddate.focus();
        return (false);
      }
      if(isEmpty(f1.status.value,"Status"))
      {
        alert(errMsg);
        f1.status.focus();
        return (false);
      }   
  }
</script>
<form action="holiday_add.php" method="post" onSubmit="return validate_form(this)">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>HOLIDAYS</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <input type="hidden" name="holidayid" class="form-control" />
                            <h2 class="card-inside-title">Holiday Name:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="holidayname" class="form-control" onKeyPress="str_check(event)"	/>
                                        </div>
                                    </div>
                                    <h2 class="card-inside-title">Holiday Description:</h2>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <textarea rows="4" class="form-control no-resize" name="holidaydescription"></textarea>
                                                </div>
                                            </div>
                                            <h2 class="card-inside-title">Holiday Date:</h2>
                                            <div class="row clearfix">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="date" class="form-control date" name="holidaydate" placeholder="Ex: 30/07/2016">
                                                        </div>
                                                    </div>
                                                    <h2 class="card-inside-title">Created Date:</h2>
                                                    <div class="row clearfix">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="date" class="form-control date" name="createddate" placeholder="Ex: 30/07/2016">
                                                                </div>
                                                            </div>
                                                            <h2 class="card-inside-title">Modified Date:</h2>
                                                            <div class="row clearfix">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="date" class="form-control date" name="modifieddate" placeholder="Ex: 30/07/2016">
                                                                        </div>
                                                                    </div>
                                                                    <h2 class="card-inside-title">Status:</h2>
                                                                    <div class="row clearfix">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="text" name="status" class="form-control" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                                        <input type="reset" name="close" class="btn btn-primary waves-effect" value="RESET" formaction="./home_page.php">
                                    </center>
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