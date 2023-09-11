<?php
//$employeeid=$_SESSION['employee_id'];
?>
<?php
include_once 'header_h.php';
?>
<?php
include_once 'roles.php';
?>

<form action="#" method="post" id="Employee_view">
 
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>EMPLOYEE VIEW
                            <div style="margin-left: 70%"><input class="btn btn-primary waves-effect" name="add" type="submit" formaction="./employee_viewall.php" value="VIEW ALL EMPLOYEE"></button> </b><input class="btn btn-primary waves-effect" name="add" type="submit" formaction="./employee.php" value="ADD EMPLOYEE"></button> </b></div>
                        </h2>
                    </div>
                    <div class="body">
                        <div class="dataTables_wrapper form-inline dt-bootstrap" id="DataTables_Table_0_wrapper">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="dataTables_length" id="DataTables_Table_0_length">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="dataTables_filter" id="DataTables_Table_0_filter">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <thead>
                                            <tr role="row">
                                                <th tabindex="0" class="sorting_asc" aria-controls="DataTables_Table_0" style="width: 191px;" aria-label="SHIFT ID: activate to sort column descending" aria-sort="ascending" rowspan="1" colspan="1">EMPLOYEE ID</th>
                                                <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" style="width: 309px;" aria-label="SHIFT NAME: activate to sort column ascending" rowspan="1" colspan="1">EMPLOYEE NAME</th>
                                                <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" style="width: 143px;" aria-label="SHIFT IN TIME: activate to sort column ascending" rowspan="1" colspan="1">ROLE</th>
                                                <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" style="width: 71px;" aria-label="SHIFT OUT TIME: activate to sort column ascending" rowspan="1" colspan="1">BRANCH</th>
                                                <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" style="width: 71px;" aria-label="SHIFT OUT TIME: activate to sort column ascending" rowspan="1" colspan="1">SHIFT</th>
                                                <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" style="width: 71px;" aria-label="SHIFT OUT TIME: activate to sort column ascending" rowspan="1" colspan="1">DEPARTMENT</th>
                                                <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" style="width: 71px;" aria-label="SHIFT OUT TIME: activate to sort column ascending" rowspan="1" colspan="1">DESIGNATION</th>
                                                <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" style="width: 135px;" aria-label="VIEW MORE: activate to sort column ascending" rowspan="1" colspan="1">VIEW MORE</th>
                                                <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" style="width: 110px;" aria-label="UPDATE: activate to sort column ascending" rowspan="1" colspan="1">UPDATE</th>
                                                <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" style="width: 110px;" aria-label="DELETE: activate to sort column ascending" rowspan="1" colspan="1">DELETE</th>
                                            </tr>
                                        </thead>
                                        <div class="body table-responsive">
                                            <?php 
                                            include_once 'config/config.php';
                                            $i = 0;
                                            $cnt = array();
                                            $q = "Select * from employee";
                                            $status = mysqli_query($connection_obj, $q);
                                            if ($status) {
                                                while ($row = mysqli_fetch_assoc($status)) {
                                                    $bid = $row['Branch_id'];
                                                    $q1 = "select Name from branch where Branch_id=$bid";
                                                    $b1 = mysqli_query($connection_obj, $q1);
                                                    $bran = mysqli_fetch_assoc($b1);

                                                    $sid = $row['Shift_id'];
                                                    $q2 = "select Shift_name from shift where Shift_id=$sid";
                                                    $b2 = mysqli_query($connection_obj, $q2);
                                                    $sh = mysqli_fetch_assoc($b2);

                                                    $did = $row['Department_id'];
                                                    $q3 = "select Department_name from department where Department_id=$did";
                                                    $b3 = mysqli_query($connection_obj, $q3);
                                                    $dep = mysqli_fetch_assoc($b3);

                                                    $deid = $row['Designation_id'];
                                                    $q4 = "select Designation_name from designation where Designation_id=$deid";
                                                    $b4 = mysqli_query($connection_obj, $q4);
                                                    $des = mysqli_fetch_assoc($b4);

                                                    $ro = $row['Roles'];
                                                    if ($ro == 1) {
                                                        $r = "Admin";
                                                    } elseif ($ro == 2) {
                                                        $r = "Manager";
                                                    } else {
                                                        $r = "Others";
                                                    }
                                                    echo '<tr class="odd" role="row">';
                                                    echo "<td><b>" . $row['Employee_id'] . "</b></td>";
                                                    echo "<td>" . $row['Employee_name'] . "</td>";
                                                    echo "<td>" . $r . "</td>";
                                                    echo "<td>" . $bran['Name'] . "</td>";
                                                    echo "<td>" . $sh['Shift_name'] . "</td>";
                                                    echo "<td>" . $dep['Department_name'] . "</td>";
                                                    echo "<td>" . $des['Designation_name'] . "</td>";
                                                    echo "<td><center><a href=employee_viewmore.php?id=" . $row['Employee_id'] . "><button class='btn btn-info btn-circle-lg waves-effect waves-circle waves-float' name=information type='button'><i class='material-icons'>information</i></button></a></td>";
                                                    echo "<td><a href=Employee1.php?id=" . $row['Employee_id'] . "><button class='btn btn-success btn-circle-lg waves-effect waves-circle waves-float' name='update' type='button'><i class='material-icons'>update</i></button></a></td>";
                                                    echo "<td><a href=employee_delete.php?id=" . $row['Employee_id'] . " ><button class='btn btn-danger btn-circle-lg waves-effect waves-circle' waves-float name=delete type='button'><i class='material-icons'>delete</i></button></a></td>";
                                                    $i++;
                                                    echo "</tr>";
                                                }
                                                echo "</tbody> </table>"; 
                                            } else {
                                                echo " error";
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <center>
                        <input class="btn btn-primary waves-effect" name="close" type="SUBMIT" value="CLOSE" formaction="./home_page.php"></a></button>
                    </center>
                </div>
            </div>
        </div>
    </div>
</section>
</form>
<?php
include_once 'footer_h.php';
?>
