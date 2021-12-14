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
                        <div class="card-header"><h4 class="text-align-center">Categories Create</h4></div>
                        <div class="card-body">
                        <form action="" method="post">
                        <div class="form-group">
                        <label for="Categories">Category Name</label>
                        <input type="type" name="cat_name" class="form-control" id="category" aria-describedby="emailHelp" placeholder="Categories Name">
                    </div>
                    <br>
                    <div class="form-group">
                    <button name="add_cat" type="submit" class="btn btn-primary form-control">Submit</button>

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
       if (isset($_POST['add_cat'])) {
           $db = mysqli_select_db($connection, 'online_class_basic');
           $query = "INSERT INTO categories values ('', '$_POST[cat_name]')";
           $query_run = mysqli_query($connection, $query);
           header("Location: category_index.php");
           exit();
       }
       ?>