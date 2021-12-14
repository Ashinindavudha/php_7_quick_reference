<?php
    include("connection.php");
    $query = "delete from users where id = $_GET[id]";
    $query_run = mysqli_query($connection, $query);
?>
<script type="text/javascript">
	alert("User Deleted...");
	window.location.href = "user_index.php";
</script>