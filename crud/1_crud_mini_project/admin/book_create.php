<?php include("function.php");
check();
?>
<?php include("connection.php") ?>
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
                        <input type="text" name="book_name" class="form-control" placeholder="BookName" value="">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Book Author</label>
                        <!-- <input type="text" name="book_author" class="form-control" placeholder="Author" value=""> -->
                    <select name="book_author" id="" class="form-control">
                        <option value="">Select Author</option>
                        <?php
                            $sql = "SELECT author_name FROM authors";
                            $result = mysqli_query($connection, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                        <option value="<?php echo $row['author_name'] ?>"><?php echo $row['author_name'] ?></option>
                        <?php
                            } ?>
                    </select>
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Category Name</label>
                        <!-- <input type="text" name="book_cat" class="form-control" placeholder="Category name" value=""> -->
                    <select name="book_cat" class="form-control" id="">
                        <option value="">Select Category</option>

                        <?php
                            $sql = "SELECT cat_name FROM categories";
                            $result = mysqli_query($connection, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                        <option value="<?php echo $row['cat_name'] ?>"><?php echo $row['cat_name'] ?></option>
                        <?php
                            } ?>
                    </select>
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Book No</label>
                        <input type="text" name="book_no" class="form-control" placeholder="Book no" value="">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Book Price</label>
                        <input type="text" name="book_price" class="form-control" placeholder="Book Price" value="">
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <button name="create_book" class="btn btn-primary profile-button" type="submit">Book Create</button>
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
    if (isset($_POST['create_book'])) {
        $query = "insert into books values(null,'$_POST[book_name]','$_POST[book_author]','$_POST[book_cat]',$_POST[book_no],$_POST[book_price])";
        $query_run = mysqli_query($connection, $query);
        if ($query_run) {
            echo "<script>alert('Book Created Successfully')</script>";
            echo "<script>window.open('book_index.php','_self')</script>";
        }
    }
?>