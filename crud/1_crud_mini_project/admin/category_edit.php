<?php include("function.php");
check();
?>
<?php include("connection.php") ?>
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

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                         <div class="col-lg-6">
                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Categories Edit</h6>
                                </div>
                                <div class="card-body">
                                   <form action="" class="user" method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="cat_name" class="form-control form-control-user" placeholder="Name" value="<?php echo $cat_name; ?>" required>
                                    </div>
                                    <br><br>
                                <div class="form-group row mr-5">
                                    <button type="submit" name="update" class="btn btn-primary btn-user btn-block">
                                    Update Category
                                </button>
                                </div>
                            </form>
                                </div>
                                <a href="category_index.php" class="btn btn-primary">Cancel</a>
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

    <?php
       if (isset($_POST['update'])) {
           $query = "UPDATE categories SET cat_name ='$_POST[cat_name]' WHERE cat_id = '$_GET[cid]'";
           $query_run = mysqli_query($connection, $query);
           //header("location: user_index.php");
           //exit();
       }
?>
</body>

</html>