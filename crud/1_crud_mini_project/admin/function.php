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

function get_book_count()
{
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "lms");
    $book_count = "";
    $query = "select count(*) as book_count from books";
    $query_run = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($query_run)) {
        $book_count = $row['book_count'];
    }
    return($book_count);
}
