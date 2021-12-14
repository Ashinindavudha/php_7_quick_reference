<?php
// Access the $_FILES global variable for this specific file being uploaded
// and create local PHP variables from the $_FILES array of information
$fileName = $_FILES["uploaded_file"]["name"]; // The file name
$fileTmpLoc = $_FILES["uploaded_file"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["uploaded_file"]["type"]; // The type of file it is
$fileSize = $_FILES["uploaded_file"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["uploaded_file"]["error"]; // 0 for false... and 1 for true
$kaboom = explode(".", $fileName); // Split file name into an array using the dot
$fileExt = end($kaboom); // Now target the last array element to get the file extension
// START PHP Image Upload Error Handling --------------------------------------------------
if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
} elseif ($fileSize > 5242880) { // if file size is larger than 5 Megabytes
    echo "ERROR: Your file was larger than 5 Megabytes in size.";
    unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
    exit();
} elseif (!preg_match("/.(gif|jpg|png)$/i", $fileName)) {
    // This condition is only if you wish to allow uploading of specific file types
    echo "ERROR: Your image was not .gif, .jpg, or .png.";
    unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
    exit();
} elseif ($fileErrorMsg == 1) { // if file upload error key is equal to 1
    echo "ERROR: An error occured while processing the file. Try again.";
    exit();
}
// END PHP Image Upload Error Handling ---------------------------------
// Place it into your "uploads" folder mow using the move_uploaded_file() function
$moveResult = move_uploaded_file($fileTmpLoc, "uploads/$fileName");
// Check to make sure the move result is true before continuing
if ($moveResult != true) {
    echo "ERROR: File not uploaded. Try again.";
    unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
    exit();
}
unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
// ---------- Include Adams Universal Image Resizing Function --------
include_once("1_ak_php_img_lib_1.0.php");
$target_file = "uploads/$fileName";
$resized_file = "uploads/resized_$fileName";
$wmax = 300;
$hmax = 300;
ak_img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt);
// ----------- End Adams Universal Image Resizing Function ----------
// ------ Start Adams Universal Image Thumbnail(Crop) Function ------
$target_file = "uploads/resized_$fileName";
$thumbnail = "uploads/thumb_$fileName";
$wthumb = 150;
$hthumb = 150;
ak_img_thumb($target_file, $thumbnail, $wthumb, $hthumb, $fileExt);
// ------- End Adams Universal Image Thumbnail(Crop) Function -------
// Display things to the page so you can see what is happening for testing purposes
echo "The file named <strong>$fileName</strong> uploaded successfuly.<br /><br />";
echo "It is <strong>$fileSize</strong> bytes in size.<br /><br />";
echo "It is an <strong>$fileType</strong> type of file.<br /><br />";
echo "The file extension is <strong>$fileExt</strong><br /><br />";
echo "The Error Message output for this upload is: $fileErrorMsg";
