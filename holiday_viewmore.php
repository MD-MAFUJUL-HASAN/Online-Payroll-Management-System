<?php
    include_once 'header_h.php';
?>
<?php
    include_once 'roles.php';
?>

<?php
    include_once 'config/config.php';

    $id = $_GET['id'];

    $q = "SELECT * from holidays where Holiday_id=" . $id . ";";
    $status = mysqli_query($connection_obj, $q);

    echo '<form action="holiday_view.php" method="post">
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">';

    if ($status) {
        while ($row = mysqli_fetch_assoc($status)) {
            echo '<b>Holiday ID:</b>' . $row['Holiday_id'] . '<br>';
            echo '<b>Holiday Name:</b>' . $row['Holiday_name'] . '<br>';
            echo '<b>Holiday Description:</b>' . $row['Holiday_description'] . '<br>';
            echo '<b>Holiday Date:</b>' . $row['Holiday_date'] . '<br>';
            echo '<b>Created Date:</b>' . $row['Created_date'] . '<br>';
            echo '<b>Modified Date:</b>' . $row['Modified_date'] . '<br>';
            echo '<b>Status:</b>' . $row['Status'] . '<br><br><br><br>';
        }
    }
?>

<input class="btn btn-primary waves-effect" name="submit" align="center" type="submit" value="BACK" formaction="./holiday_view.php">
</section>
</form>

<?php
    include_once 'footer_h.php';
?>