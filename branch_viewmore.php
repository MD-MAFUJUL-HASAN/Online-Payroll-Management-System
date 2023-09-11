<?php
	include_once 'header_h.php';
?>
<?php
	include_once 'roles.php';
?>

<?php
include_once 'config/config.php';

$id = $_GET['id'];

$q = "SELECT * FROM branch WHERE Branch_id=" . $id . ";";
$status = mysqli_query($connection_obj, $q);

echo "<form action=branch_view.php method=post>
    <section class=content>
        <div class=container-fluid>
         <div class=row clearfix>
                <div class=col-lg-12 col-md-12 col-sm-12 col-xs-12>
                    <div class=card>
                       
                        <div class=body>";

if ($status) {
    while ($row = mysqli_fetch_assoc($status)) {
        echo "<b>Branch ID:</b>" . $row['Branch_id'] . "<br>";
        echo "<b>Branch Name:</b>" . $row['Name'] . "<br>";
        echo "<b>Branch Address:</b>" . $row['Branch_Address'] . "<br>";
        echo "<b>Phone number:</b>" . $row['Phone_number'] . "<br>";
        echo "<b>Email:</b>" . $row['Email'] . "<br>";
        echo "<b>Establishment Date:</b>" . $row['Establishment_date'] . "<br>";
        echo "<b>Created BY:</b>" . $row['Created_by'] . "<br>";
        echo "<b>Created Date:</b>" . $row['Created_date'] . "<br>";
        echo "<b>Modified Date:</b>" . $row['Modified_date'] . "<br>";
        echo "<b>Status:</b>" . $row['Status'] . "<br>";
        echo "<br><br><br><br>";
    }
}

echo '<input class="btn btn-primary waves-effect" name="submit" align="center" type="submit" value="BACK" formaction="./branch_view.php">
</section>
</form>';

include_once 'footer_h.php';
?>
