<?php include_once("connection.php") ?>
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
                        <div class="card-header"><h4 class="text-align-center">Author Create</h4></div>
                        <div class="card-body">
                        <form action="" method="post">
                        <div class="form-group">
                        <label for="Author">Author Name</label>
                        <input type="type" name="author_name" class="form-control" id="author_name" placeholder="Author Name">
                    </div>
                    <br>
                    <div class="form-group">
                    <button name="add_author" type="submit" class="btn btn-primary form-control">Add Author</button>

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
    if (isset($_POST['add_author'])) {
        $db = mysqli_select_db($connection, "online_class_basic");
        $query = "INSERT INTO authors values ('', '$_POST[author_name]')";
        $query_run = mysqli_query($connection, $query);
        header("Location: index_author.php");
        exit();
    }
