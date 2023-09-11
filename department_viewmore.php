<?php
include_once 'header_h.php';
?>
<?php
include_once 'roles.php';
?>

<?php
include_once 'config/config.php';

$id = $_GET['id'];

$q = "SELECT * FROM department WHERE Department_id=" . $id . ";";
$status = mysqli_query($connection_obj, $q);

echo "   <form action=department_view.php method=post >
<section class=content>
    <div class=container-fluid>
        <div class=row clearfix>
            <div class=col-lg-12 col-md-12 col-sm-12 col-xs-12>
                <div class=card>

                    <div class=body>";

if ($status) {
    while ($row = mysqli_fetch_assoc($status)) {
        echo "<b>Department ID:</b>" . $row['Department_id'] . "<br>";
        echo "<b>Department Name:</b>" . $row['Department_name'] . "<br>";
        echo "<b>Created Date:</b>" . $row['Created_date'] . "<br>";
        echo "<b>Modified Date:</b>" . $row['Modified_date'] . "<br>";
        echo "<b>Status:</b>" . $row['Status'] . "<br>";
        echo "<br><br><br><br>";

    }
}
?>

<input class="btn btn-primary waves-effect" name="submit" align="center" type="submit" value="BACK" formaction="./department_view.php">
</section>
</form>

<?php
include_once 'footer_h.php';
?>
