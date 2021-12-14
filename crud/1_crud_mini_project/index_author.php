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
                        <div class="card-header"><h4 class="text-align-center">Author List</h4></div>
                        <div class="card-title"><a href="create_author.php" class="btn btn-primary mt-2">Author Create</a></div>
                        <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Author Name</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php
                               $db = mysqli_select_db($connection, 'online_class_basic');
                               $query = "SELECT * FROM categories";
                               $query_run = mysqli_query($connection, $query);
                               while ($row = mysqli_fetch_assoc($query_run)) {
                                   ?>
                                <tr>
                                    <th scope="row"><?php echo $row['cat_id']; ?></th>
                                    <td><?php echo $row['cat_name']; ?></td>
                                    <td>
                                        <a href="category_edit.php?cid=<?php echo $row['cat_id']; ?>" class="btn btn-primary">Edit</a>
                                        <a href="category_delete.php?cid=<?php echo $row['cat_id']; ?>" class="btn btn-danger">Delete</a>
                               <?php
                               }
                               ?>
                                
                            </tr>
                            </tbody>
                            </table>
                </div>
            </div>
                    <!-- Nested row for non-featured blog posts-->
                   
                    <!-- Pagination-->
                    <?php include("layouts/pagination.php");?>

                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <?php include("layouts/search_widget.php"); ?>
                    <!-- Categories widget-->
                    <?php include("layouts/category_widget.php"); ?>
                    <!-- Side widget-->
                   <?php include("layouts/side_widget.php"); ?>
                </div>
            </div>
        </div>
        <!-- Footer-->
       <?php include("layouts/footer.php"); ?>

       <?php
       
       ?>