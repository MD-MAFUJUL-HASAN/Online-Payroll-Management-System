<form method="post" enctype="multipart/form-data">
    <input type="file" name="biofile">
    <input type="submit" name="submit" value="IMPORT">
</form>

<?php
include_once 'config/config.php';

if (isset($_POST['submit'])) {
    // Check if a file was uploaded and there are no errors
    if (isset($_FILES['biofile']) && $_FILES['biofile']['error'] === UPLOAD_ERR_OK) {
        $uploadedFilePath = $_FILES['biofile']['tmp_name'];
        $handle = fopen($uploadedFilePath, 'r');
        
        if (!$handle) {
            echo 'Failed to open uploaded file.';
            exit;
        }
        
        // Rest of your code to process the file data
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            // Your database insertion code
        }
        
        // Close the file handle
        fclose($handle);

        // Redirect or show a success message
        header("location:./Biosuccess.php");
    } else {
        echo 'Error uploading file.';
    }
}
?>
