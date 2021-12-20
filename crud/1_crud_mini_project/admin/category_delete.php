<?php
    include("connection.php");
    $query = "delete from categories where cat_id = $_GET[cid]";
    $query_run = mysqli_query($connection, $query);
?>
<script type="text/javascript">
	alert("category Deleted...");
	window.location.href = "category_index.php";
</script>