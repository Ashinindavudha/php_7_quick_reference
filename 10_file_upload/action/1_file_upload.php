<?php
if ($our_file != "") {
    copy($our_file, "upload/$our_file_name") or die("Could not copy file");
} else {
    //echo "No file selected";
    die("No file selected");
}
