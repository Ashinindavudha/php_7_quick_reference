<?php include("function.php") ?>
<?php include("connection.php") ?>
<?php check(); ?>
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
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Adress</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Adress</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                         <?php
                               $db = mysqli_select_db($connection, 'online_class_basic');
                               $query = "SELECT * FROM users";
                               $query_run = mysqli_query($connection, $query);
                               while ($row = mysqli_fetch_assoc($query_run)) {
                                   ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['mobile']; ?></td>
                                            <td><?php echo $row['address']; ?></td>
                                            <td>
                                                <a href="user_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                                                <a href="user_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                                            </td>
                                            <?php
                               } ?>
                                        </tr>
                                        
                                    </tbody>
                                </table>
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

</body>

</html>