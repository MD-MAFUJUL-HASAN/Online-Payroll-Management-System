<?php
include_once 'header_h.php';
include_once 'roles.php';
include_once 'config/config.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $q = "SELECT * from shift where Shift_id = $id;";
  $status = mysqli_query($connection_obj, $q);

  if ($status) {
    echo '<form action="shift_view.php" method="post">
          <section class="content">
            <div class="container-fluid">
              <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="card">
                    <div class="body">';
    while ($row = mysqli_fetch_assoc($status)) {
      echo "<b>Shift ID:</b> " . $row['Shift_id'] . "<br>";
      echo "<b>Shift Name:</b> " . $row['Shift_name'] . "<br>";
      echo "<b>Shift In Time:</b> " . $row['In_time'] . "<br>";
      echo "<b>Shift Out time:</b> " . $row['Out_time'] . "<br>";
      echo "<b>Created Date:</b> " . $row['Created_date'] . "<br>";
      echo "<b>Modified Date:</b> " . $row['Modified_date'] . "<br>";
      echo "<b>Status:</b> " . $row['Status'] . "<br>";
      echo "<br><br><br><br>";
    }
    echo '<input class="btn btn-primary waves-effect" name="submit" align="center" type="submit" value="BACK">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>';
  } else {
    echo "Error fetching shift information.";
  }
} else {
  echo "Invalid shift ID.";
}

include_once 'footer_h.php';
?>