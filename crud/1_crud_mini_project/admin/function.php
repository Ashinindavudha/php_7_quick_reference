<?php
function check()
{
    session_start();
    if (isset($_SESSION['name'])) {
        return $_SESSION['name'];
    } else {
        header('location:../../../index.php');
    }
}
