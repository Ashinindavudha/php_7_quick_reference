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
               <div class="col-md-8" id="main_content">
        <center><h3>User Registration Form</h3></center>
        <form action="action/userCreate.php" method="post">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Email ID:</label>
                <input type="text" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Password:</label>
                <input type="text" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Mobile Number:</label>
                <input type="text" name="mobile" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Address:</label>
                <textarea rows="3" cols="40" class="form-control" name="address"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
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