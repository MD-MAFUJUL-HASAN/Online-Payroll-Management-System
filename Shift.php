<?php
include_once 'header_h.php';
include_once 'roles.php';
?>

<script language="javascript" src="validation.js"></script>
<script language="javascript">
  function validate_form(f1)
  {
    if(isEmpty(f1.shiftname.value,"Shift Name"))
    {
      alert(errMsg);
      f1.shiftname.focus();
      return (false);
    }
    if(isEmpty(f1.shiftintime.value,"Shift In Time"))
    {
      alert(errMsg);
      f1.shiftintime.focus();
      return (false);
    }
    if(isEmpty(f1.shiftouttime.value,"Shift Out Time"))
    {
      alert(errMsg);
      f1.shiftouttime.focus();
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

<form action="shift_add.php" method="post" onSubmit="return validate_form(this)">
  <section class="content">
    <div class="container-fluid">
      <div class="block-header">
        <h2>SHIFTS</h2>
      </div>
      <!-- Input -->
      <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="card">
            <input type="hidden" name="shiftid" class="form-control" />
            <div class="body">
              <h2 class="card-inside-title">Shift Name:</h2>
              <div class="row clearfix">
                <div class="col-sm-12">
                  <div class="form-group">
                    <div class="form-line">
                      <input type="text" name="shiftname" class="form-control" />
                    </div>
                  </div>
                </div>
              </div>
              <h2 class="card-inside-title">Shift In Time:</h2>
              <div class="row clearfix">
                <div class="col-sm-12">
                  <div class="form-group">
                    <div class="form-line">
                      <input type="time" class="form-control time12" placeholder="Ex: 00:00:00" name="shiftintime">
                    </div>
                  </div>
                </div>
              </div>
              <h2 class="card-inside-title">Shift Out Time:</h2>
              <div class="row clearfix">
                <div class="col-sm-12">
                  <div class="form-group">
                    <div class="form-line">
                      <input type="time" class="form-control time12" placeholder="Ex: 00:00:00" name="shiftouttime">
                    </div>
                  </div>
                </div>
              </div>
              <h2 class="card-inside-title">Created Date:</h2>
              <div class="row clearfix">
                <div class="col-sm-12">
                  <div class="form-group">
                    <div class="form-line">
                      <input type="date" class="form-control date" name="createddate" placeholder="Ex: 30/08/2023">
                    </div>
                  </div>
                </div>
              </div>
              <h2 class="card-inside-title">Modified Date:</h2>
              <div class="row clearfix">
                <div class="col-sm-12">
                  <div class="form-group">
                    <div class="form-line">
                      <input type="date" class="form-control date" name="modifieddate" placeholder="Ex: 30/08/2023">
                    </div>
                  </div>
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
              <center>
                <input class="btn btn-primary waves-effect" name="submit" type="submit" value="SUBMIT">
                <input type="reset" name="close" class="btn btn-primary waves-effect" value="RESET">
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