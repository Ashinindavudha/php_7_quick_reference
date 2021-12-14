<?php include("function.php");
check();
?>
<?php include("connection.php") ?>
<?php
    $db = mysqli_select_db($connection, "online_class_basic");
    $user_name = "";
    $user_email = "";
    $user_password = "";
    $user_mobile = "";
    $user_address = "";
    $user_id = "";
    $query = "select * from users where id = $_GET[id]";
    $query_run = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($query_run)) {
        $user_name = $row['name'];
        $user_email = $row['email'];
        $user_password = $row['password'];
        $user_mobile = $row['mobile'];
        $user_address = $row['address'];
        $user_id = $row['id'];
    }
    ?>

<?php include("layouts/head.php") ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
      <?php include("layouts/sidebar.php") ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include("layouts/navbar.php") ?>
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
                                    <h6 class="m-0 font-weight-bold text-primary">User Edit</h6>
                                </div>
                                <div class="card-body">
                                   <form action="" class="user" method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="name" class="form-control form-control-user" placeholder="Name" value="<?php echo $user_name; ?>" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control form-control-user" name="email" value="<?php echo $user_email; ?>" placeholder="Email" required>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            name="password" placeholder="Password" value="<?php echo $user_password; ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user"
                                            name="mobile" placeholder="Mobile" value="<?php echo $user_mobile; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="address" value="<?php echo $user_address; ?>" placeholder="Address">
                                        
                                </div>
                                <button type="submit" name="update" class="btn btn-primary btn-user btn-block">
                                    Update Account
                                </button>
                            </form>
                                </div>
                            </div>

                        </div>
                        
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include("layouts/footer.php") ?>
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
    <?php include("layouts/Logout_Modal.php") ?>

    <!-- Bootstrap core JavaScript-->
    <?php include("layouts/script.php") ?>

    <?php
       if (isset($_POST['update'])) {
           $query = "UPDATE users SET name='$_POST[name]', email='$_POST[email]', password='$_POST[password]', mobile='$_POST[mobile]', address='$_POST[address]' WHERE id = '$_GET[id]'";
           $query_run = mysqli_query($connection, $query);
           header("location: user_index.php");
           //exit();
       }
?>
</body>

</html>