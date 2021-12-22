<?php
    include("connection.php");
    $query = "delete from books where book_id = $_GET[id]";
    $query_run = mysqli_query($connection, $query);
?>
<script type="text/javascript">
	alert("Book Deleted...");
	window.location.href = "book_index.php";
</script>