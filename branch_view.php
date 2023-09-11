<?php
	include_once 'header_h.php';
?>
<?php
	include_once 'roles.php';
?>
<form action="#" method="post" id="Branch_view">
 
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <b>BRANCH VIEW 
                                  <div style="margin-left: 90%"><input class="btn btn-primary waves-effect" name="add" type="submit" formaction="./branch.php" value="ADD BRANCH"></button></b>
                                  </div>
                            </h2>
                            
                        </div>
                      <div class="body">
                        <div class="dataTables_wrapper form-inline dt-bootstrap" id="DataTables_Table_0_wrapper">

                        <div class="row">
                        <div class="col-sm-6">
                        <div class="dataTables_length" id="DataTables_Table_0_length">
                        
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-sm-12">

                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">

                        <thead>
                         <tr role="row">
                          <th tabindex="0" class="sorting_asc" aria-controls="DataTables_Table_0" style="width: 191px;" aria-label="BRANCH ID: activate to sort column descending" aria-sort="ascending" rowspan="1" colspan="1">BRANCH ID</th>
                          <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" style="width: 309px;" aria-label="BRANCH NAME: activate to sort column ascending" rowspan="1" colspan="1">BRANCH NAME</th>
                          <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" style="width: 143px;" aria-label="PHONE NUMBER: activate to sort column ascending" rowspan="1" colspan="1">PHONE NUMBER</th>
                          <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" style="width: 135px;" aria-label="VIEW MORE: activate to sort column ascending" rowspan="1" colspan="1">VIEW MORE</th>
                          <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" style="width: 110px;" aria-label="UPDATE: activate to sort column ascending" rowspan="1" colspan="1">UPDATE</th>
                          <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" style="width: 110px;" aria-label="DELETE: activate to sort column ascending" rowspan="1" colspan="1">DELETE</th>
                          </tr>
                         </thead>

                         <?php 
                         include_once 'config/config.php';
                         $q="Select * from branch";
                         $status = mysqli_query($connection_obj, $q);
                         if($status) {
                             while ($row = mysqli_fetch_assoc($status)) {
                                 echo '<tr class="odd" role="row">';
                                 echo '<td>'.$row['Branch_id'].'</td>';
                                 echo '<td class="sorting_1">'.$row['Name'].'</td>';
                                 echo "<td>".$row['Phone_number']."</td>";
                                 echo "<td><center><a href=branch_viewmore.php?id=".$row['Branch_id']."><button class='btn btn-info btn-circle-lg waves-effect waves-circle waves-float' name=information type='button'><i class='material-icons'>information</i></button></a></td>"; 
                                 echo "<td><center><a href=Branch1.php?id=".$row['Branch_id']."><button class='btn btn-success btn-circle-lg waves-effect waves-circle waves-float' name='update' type='button'><i class='material-icons'>update</i></button></a></td>";
                                 echo "<td><center><a href=branch_delete.php?id=".$row['Branch_id']."><button class='btn btn-danger btn-circle-lg waves-effect waves-circle' waves-float name=delete type='button' ><i class='material-icons'>delete</i></button></a></td>";
                                 echo "</tr>";
                             }
                             echo "</table>"; 
                         } else {
                             echo " error";
                         }
                         ?>
                       <p id="demo"></p>
       </div></td>
                                        </div>
                    </div>
                </div>
                </div>
        </div>
       <center>
                        <a href="<?=ADMIN_URL?>home_page.php"><input class="btn btn-primary waves-effect" name="close" type="button"   value="CLOSE" ></a></button>
                      
                       </center>
                
    </section>
</form>
<?php
	include_once 'footer_h.php';
?>
