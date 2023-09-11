<?php
include_once 'header_h.php';
include_once 'roles.php';
?>

<form action="#" method="post">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>SHIFTS DETAILS</h2>
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
                                            <input type="text" name="employeeid" class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2 class="card-inside-title">Shift Id:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control time12" name="shiftid">
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">In Time:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input class="form-control" type="time" name="intime" placeholder="11:00 AM">
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Out Time:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="time" class="form-control time12" name="outtime" placeholder="08:00 PM">
                                        </div>

                            <h2 class="card-inside-title">Break In Time:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input class="form-control" type="time" name="bintime" placeholder="01:30 AM">
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Break Out Time:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="time" class="form-control time12" name="bouttime" placeholder="02:45 PM">
                                        </div>
                        
                            <h2 class="card-inside-title">Grace period(In minutes):</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="numbert" class="form-control time12" name="graceperiod" placeholder="60">
                                        </div>
                        
                            <h2 class="card-inside-title">Half day hours:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control time12" name="halfdayhours" placeholder="4-6 hours">
                                        </div>
                        
                            <h2 class="card-inside-title">Max Errors allows:</h2>
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="noUi-target noUi-ltr noUi-horizontal noUi-connect" id="nouislider_basic_example">
                                        <div class="noUi-base">
                                            <div class="noUi-origin noUi-background" style="left: 3;">
                                                <div class="noUi-handle noUi-handle-lower"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-t-20 font-12"><b>Value: </b>
                                        <span class="js-nouislider-value">3</span></div>

                            <h2 class="card-inside-title">Late In Time:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input class="form-control" type="time" name="lateintime">
                                        </div>
                                    </div>

                            <h2 class="card-inside-title">Early Out Time:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="time" class="form-control time12" name="earlyouttime">
                                        </div>

                            <h2 class="card-inside-title">Early Out Time:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="time" class="form-control time12" name="earlyouttime">
                                        </div>

                            <h2 class="card-inside-title">Week Days:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control time12" name="weekdays">
                                        </div>

                            <h2 class="card-inside-title">Total Hours:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control time12" name="totalhours">
                                        </div>

                            <h2 class="card-inside-title">Department:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control time12" name="department">
                                        </div>

                            <h2 class="card-inside-title">Remarks:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control time12" name="remarks">
                                        </div>

                            <h2 class="card-inside-title">Present:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control time12" name="present">
                                        </div>

                            <h2 class="card-inside-title">Absent:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control time12" name="Absent">
                                        </div>

                            <h2 class="card-inside-title">Basic Salary:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control time12" name="basicsalary">
                                        </div>   

                            <h2 class="card-inside-title">Net Salary:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control time12" name="netsalary">
                                        </div>  

                            <h2 class="card-inside-title">HRA:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control time12" name="hra">
                                        </div>       

                            <h2 class="card-inside-title">DA:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control time12" name="da">
                                        </div>       

                            <h2 class="card-inside-title">Bonus:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control time12" name="bonus">
                                        </div>  

                            <h2 class="card-inside-title">PT:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control time12" name="pt">
                                        </div>  

                            <h2 class="card-inside-title">TDS:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control time12" name="tds">
                                        </div>

                            <h2 class="card-inside-title">Employee Name:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control time12" name="empname">
                                        </div>                                    
                            
                            <h2 class="card-inside-title">Week of Days:</h2>        
                            <div class="demo-checkbox">
                                Monday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="chk-col-blue" id="md_checkbox_1" type="checkbox" checked="">
                                        <label for="md_checkbox_1">1st</label>
                                    <input class="chk-col-blue" id="md_checkbox_2" type="checkbox">
                                        <label for="md_checkbox_2">2nd</label>
                                    <input class="chk-col-blue" id="md_checkbox_3" type="checkbox">
                                        <label for="md_checkbox_3">3rd</label>
                                    <input class="chk-col-blue" id="md_checkbox_4" type="checkbox">
                                        <label for="md_checkbox_4">4th</label>
                                    <input class="chk-col-blue" id="md_checkbox_5" type="checkbox">
                                        <label for="md_checkbox_5">5th</label><br>
                                Tuesday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="chk-col-blue" id="md_checkbox_6" type="checkbox">
                                        <label for="md_checkbox_6">1st</label>
                                    <input class="chk-col-blue" id="md_checkbox_7" type="checkbox">
                                        <label for="md_checkbox_7">2nd</label>
                                    <input class="chk-col-blue" id="md_checkbox_8" type="checkbox">
                                        <label for="md_checkbox_8">3rd</label>
                                    <input class="chk-col-blue" id="md_checkbox_9" type="checkbox">
                                        <label for="md_checkbox_9">4th</label>
                                    <input class="chk-col-blue" id="md_checkbox_10" type="checkbox">
                                        <label for="md_checkbox_10">5th</label><br>
                                Wednessday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="chk-col-blue" id="md_checkbox_11" type="checkbox">
                                        <label for="md_checkbox_11">1st</label>
                                    <input class="chk-col-blue" id="md_checkbox_12" type="checkbox">
                                        <label for="md_checkbox_12">2nd</label>
                                    <input class="chk-col-blue" id="md_checkbox_13" type="checkbox">
                                        <label for="md_checkbox_13">3rd</label>
                                    <input class="chk-col-blue" id="md_checkbox_14" type="checkbox">
                                        <label for="md_checkbox_14">4th</label>
                                    <input class="chk-col-blue" id="md_checkbox_15" type="checkbox">
                                        <label for="md_checkbox_15">5th</label><br>
                                Thursday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="chk-col-blue" id="md_checkbox_16" type="checkbox">
                                        <label for="md_checkbox_16">1st</label>
                                    <input class="chk-col-blue" id="md_checkbox_17" type="checkbox">
                                        <label for="md_checkbox_17">2nd</label>
                                    <input class="chk-col-blue" id="md_checkbox_18" type="checkbox">
                                        <label for="md_checkbox_18">3rd</label>
                                    <input class="chk-col-blue" id="md_checkbox_19" type="checkbox">
                                        <label for="md_checkbox_19">4th</label>
                                    <input class="chk-col-blue" id="md_checkbox_20" type="checkbox">
                                        <label for="md_checkbox_20">5th</label><br>
                                Friday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="chk-col-blue" id="md_checkbox_21" type="checkbox">
                                        <label for="md_checkbox_21">1st</label>
                                    <input class="chk-col-blue" id="md_checkbox_22" type="checkbox">
                                        <label for="md_checkbox_22">2nd</label>
                                    <input class="chk-col-blue" id="md_checkbox_23" type="checkbox">
                                        <label for="md_checkbox_23">3rd</label>
                                    <input class="chk-col-blue" id="md_checkbox_24" type="checkbox">
                                        <label for="md_checkbox_24">4th</label>
                                    <input class="chk-col-blue" id="md_checkbox_25" type="checkbox">
                                        <label for="md_checkbox_25">5th</label><br>
                                Saturday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="chk-col-blue" id="md_checkbox_26" type="checkbox">
                                        <label for="md_checkbox_26">1st</label>
                                    <input class="chk-col-blue" id="md_checkbox_27" type="checkbox" checked="">
                                        <label for="md_checkbox_27">2nd</label>
                                    <input class="chk-col-blue" id="md_checkbox_28" type="checkbox">
                                        <label for="md_checkbox_28">3rd</label>
                                    <input class="chk-col-blue" id="md_checkbox_29" type="checkbox" checked="">
                                        <label for="md_checkbox_29">4th</label>
                                    <input class="chk-col-blue" id="md_checkbox_30" type="checkbox" checked="">
                                        <label for="md_checkbox_30">5th</label><br>
                                Sunday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="chk-col-blue" id="md_checkbox_31" type="checkbox" checked="">
                                        <label for="md_checkbox_31">1st</label>
                                    <input class="chk-col-blue" id="md_checkbox_32" type="checkbox" checked="">
                                        <label for="md_checkbox_32">2nd</label>
                                    <input class="chk-col-blue" id="md_checkbox_33" type="checkbox" checked="">
                                        <label for="md_checkbox_33">3rd</label>
                                    <input class="chk-col-blue" id="md_checkbox_34" type="checkbox" checked="">
                                        <label for="md_checkbox_34">4th</label>
                                    <input class="chk-col-blue" id="md_checkbox_35" type="checkbox" checked="">
                                        <label for="md_checkbox_35">5th</label>
                            </div>
                    
                            <h2 class="card-inside-title">Effective Date:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="Date" class="form-control time12" name="effecti">
                                        </div>
                                    </div>

                            <center>
                                <input class="btn btn-primary waves-effect" name="add" type="submit" value="ADD" formaction="./shiftdet_add.php">
                                <input type="submit" name="close" class="btn btn-primary waves-effect" value="CLOSE" formaction="./home_page.php">
                                <input type="reset" name="reset" class="btn btn-primary waves-effect" value="RESET">
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