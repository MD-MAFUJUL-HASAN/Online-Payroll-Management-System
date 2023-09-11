<html>
<?php
ob_clean();
?>
<body>
<form action="saveimage.php" enctype="multipart/form-data" method="post">
    <table style="border-collapse: collapse; font: 12px Tahoma;" border="1" cellspacing="5" cellpadding="5">
        <tbody>
            <tr>
                <td>
                    <input name="uploadedimage" type="file">
                </td>
            </tr>
            <tr>
                <td>
                    <input name="Upload Now" type="submit" value="Upload Image">
                    <input name="remove" type="submit" value="Remove Image">
                </td>
            </tr>
            <?php
            include_once("mysqlconnect.php");
            $select_query = "SELECT * FROM  images_tbl ORDER by `images_id` DESC";
            $sql = mysql_query($select_query) or die(mysql_error());
            while ($row = mysql_fetch_array($sql, MYSQL_BOTH)) {
            ?>
            <tr>
                <td>
                    <img src="<?php echo $row['images_path']; ?>" height="200" width="200">
                </td>
            </tr>
            <?php
            }
            ?>
            <img src="\pic\images\22-03-2017-1490163699.jpg" name="file1" height="200" width="60">
            <?php
            include_once("mysqlconnect.php");
            if (isset($_POST['remove'])) {
                $res = mysql_query("SELECT images_path FROM images_tbl WHERE images_id=" . $_GET['images_id']);
                $row = mysql_fetch_array($res);
                mysql_query("DELETE FROM images_tbl WHERE images_id=" . $_GET['images_id']);
                unlink("imagess/" . $row['file']);
            }
            ?>
        </tbody>
    </table>
</form>
</body>
</html>