<?php
$connect = mysql_connect("localhost", "username", "YES");
mysql_select_db("mydatabase", $connect);

if ($_FILES['csv']['size'] > 0) {

    $file = $_FILES['csv']['tmp_name'];
    $handle = fopen($file, "r");

    while ($data = fgetcsv($handle, 1000, ",", "'")) {
        if ($data[0]) {
            mysql_query("INSERT INTO contacts (contact_first, contact_last, contact_email) VALUES 
                ( 
                    '" . addslashes($data[0]) . "', 
                    '" . addslashes($data[1]) . "', 
                    '" . addslashes($data[2]) . "' 
                ) 
            ");
        }
    }
    fclose($handle);

    header('Location: import.php?success=1');
    die;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Import a CSV File with PHP & MySQL</title>
</head>

<body>

<?php if (!empty($_GET['success'])) { echo "<b>Your file has been imported.</b><br><br>"; } ?>

<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  Choose your file: <br />
  <input name="csv" type="file" id="csv" />
  <input type="submit" name="Submit" value="Submit" />
</form>

</body>
</html>