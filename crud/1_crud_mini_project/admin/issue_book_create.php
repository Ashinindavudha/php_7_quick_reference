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
                    <h4 class="text-right">Library Issue Book Create</h4>
                </div>
               <form action="" method="POST">
                <div class="row mt-3">
                     <div class="col-md-12">
                        <label class="labels">Book Name</label>
                    <select name="book_name" class="form-control" id="">
                        <option value="">Select Book</option>
                        <?php
                            $sql = "SELECT book_name FROM books";
                            $result = mysqli_query($connection, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                        <option value="<?php echo $row['book_name'] ?>"><?php echo $row['book_name'] ?></option>
                        <?php
                            } ?>
                    </select>
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
                        <label class="labels">Book Number</label>
                    <select name="book_no" id="" class="form-control">
                        <option value="">Select Book Number</option>
                        <?php
                            $sql = "SELECT book_no FROM books";
                            $result = mysqli_query($connection, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                        <option value="<?php echo $row['book_no'] ?>"><?php echo $row['book_no'] ?></option>
                        <?php
                            } ?>
                    </select>
                    </div>
                  <div class="col-md-12">
                        <label class="labels">User Name</label>
                    <select name="user_id" id="" class="form-control">
                        <option value="">Select User Name</option>
                        <?php
                            $sql = "SELECT name FROM users";
                            $result = mysqli_query($connection, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                        <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>
                        <?php
                            } ?>
                    </select>
                    </div>
                    <div class="col-md-12">
                    <label>Issue Date:</label>
					<input type="text" name="issue_date" class="form-control" value="<?php echo date("yy-m-d");?>" required="">
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <button name="issue_book" class="btn btn-primary profile-button" type="submit">Issue Book Create</button>
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
    if (isset($_POST['issue_book'])) {
        $query = "insert into issued_books values(null,'$_POST[book_name]','$_POST[book_author]','$_POST[book_no]','$_POST[user_id]',1,'$_POST[issue_date]')";
        $query_run = mysqli_query($connection, $query);
    }
