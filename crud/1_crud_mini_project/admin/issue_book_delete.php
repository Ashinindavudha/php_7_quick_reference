<?php
    include("connection.php");
    $query = "delete from issued_books where s_no = $_GET[id]";
    $query_run = mysqli_query($connection, $query);
?>
<script type="text/javascript">
	alert("Issued Book Deleted...");
	window.location.href = "issue_book_list.php";
</script>