<?php
    require('function.php');
   check();
    // $connection = mysqli_connect("localhost", "root", "");
    // $db = mysqli_select_db($connection, "lms");
    include('connection.php');
    $book_no = "";
    $book_name = "";
    $author_id = "";
    $cat_id = "";
    $book_price = "";
    $query = "select * from books where book_id = $_GET[id]";
    $query_run = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($query_run)) {
        $book_name = $row['book_name'];
        $book_no = $row['book_no'];
        $author_id = $row['author_id'];
        $cat_id = $row['cat_id'];
        $book_price = $row['book_price'];
    }
?>
<?php //include("connection.php")?>
<link rel="stylesheet" href="includes/profile.css">


<?php include("includes/head.php") ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
      <?php include("includes/sidebar.php") ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include("includes/navbar.php") ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
      
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Library Book Create</h4>
                </div>
               <form action="" method="POST">
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">BookName</label>
                        <input type="text" name="book_name" class="form-control" placeholder="BookName" value="<?php echo $book_name; ?>">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Book Author</label>
                        <input type="text" name="author_id" class="form-control" placeholder="Author" value="<?php echo $author_id; ?>">
                    
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Category Name</label>
                        <input type="text" name="cat_id" class="form-control" placeholder="Category name" value="<?php echo $cat_id; ?>">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Book No</label>
                        <input type="text" name="book_no" class="form-control" placeholder="Book no" value="<?php echo $book_no; ?>">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Book Price</label>
                        <input type="text" name="book_price" class="form-control" placeholder="Book Price" value="<?php echo $book_price ?>">
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <button name="update_book" class="btn btn-primary profile-button" type="submit">Book Create</button>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
           
        </div>
    </div>
</div>
</div>
</div>
                   

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include("includes/footer.php") ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php include("includes/Logout_Modal.php") ?>

    <!-- Bootstrap core JavaScript-->
    <?php include("includes/script.php") ?>

</body>

</html>
<?php
    if (isset($_POST['update_book'])) {
        //$connection = mysqli_connect("localhost", "root", "");
        //$db = mysqli_select_db($connection, "lms");
        $query = "update books set book_name = '$_POST[book_name]',author_id='$_POST[author_id]',cat_id='$_POST[cat_id]', book_no = '$_POST[book_no]', book_price = '$_POST[book_price]' where book_id = $_GET[id]";
        $query_run = mysqli_query($connection, $query);
        //header("location:book_index.php");
        if ($query_run) {
            echo "<script>alert('Book Updated Successfully')</script>";
            echo "<script>window.open('book_index.php','_self')</script>";
        }
    }
