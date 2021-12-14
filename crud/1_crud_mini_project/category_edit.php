<?php include_once("connection.php") ?>
<?php
    $db = mysqli_select_db($connection, "online_class_basic");
    $cat_name = "";
    $cat_id = "";
    $query = "select * from categories where cat_id = $_GET[cid]";
    $query_run = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($query_run)) {
        $cat_name = $row['cat_name'];
        $cat_id = $row['cat_id'];
    }
?>

<?php include("layouts/head.php"); ?>
    <body>
        <!-- Responsive navbar-->
        <?php include("layouts/nav.php"); ?>
        <!-- Page header with logo and tagline-->
        <?php include("layouts/header.php"); ?>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <div class="card-header"><h4 class="text-align-center">Categories Create</h4></div>
                        <div class="card-body">
                        <form action="" method="post">
                        <div class="form-group">
                        <label for="Categories">Category Name</label>
                        <!-- <input type="type" name="cat_name" class="form-control" id="category" value="<?php //echo $cat_name;?>" required=""> -->
                        <input type="text" name="cat_name" class="form-control" id="category" value="<?php echo $cat_name;?>" required="">
                    </div>
                    <br>
                    <div class="form-group">
                    <button name="update" type="submit" class="btn btn-primary">Update Categories</button>
                    <a href="category_index.php" class="btn btn-warning">Cancle</a>

                    </div>
                    </form>
                </div>
            </div>
                    <!-- Nested row for non-featured blog posts-->
                   
                    <!-- Pagination-->
                    
                </div>
                <!-- Side widgets-->
                <!-- <div class="col-lg-4">
                    
                </div> -->
            </div>
        </div>
        <!-- Footer-->
       <?php include("layouts/footer.php"); ?>

       <?php
       if (isset($_POST['update'])) {
           $db = mysqli_select_db($connection, 'online_class_basic');
           $query = "UPDATE categories SET cat_name = '$_POST[cat_name]' WHERE cat_id = '$_GET[cid]'";
           $query_run = mysqli_query($connection, $query);
           //header("location: category_index.php");
           //exit();
       }
       ?>