<?php
    include("connection.php");
    $query = "delete from authors where author_id = $_GET[authorid]";
    $query_run = mysqli_query($connection, $query);
?>
<script type="text/javascript">
	alert("Author Deleted...");
	window.location.href = "author_index.php";
</script>