<?php
$file = fopen("bio.csv", "r");
while (!feof($file)) {
    print_r(fgetcsv($file));
}
fclose($file);
?>