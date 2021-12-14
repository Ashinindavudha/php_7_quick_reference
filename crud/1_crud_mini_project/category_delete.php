<?php
    include("connection.php");
    //$connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "online_class_basic");
    $query = "delete from categories where cat_id = $_GET[cid]";
    $query_run = mysqli_query($connection, $query);
?>
<script type="text/javascript">
	alert("category Deleted...");
	window.location.href = "category_index.php";
</script>