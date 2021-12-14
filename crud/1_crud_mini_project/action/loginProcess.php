<?php
                session_start();
                if (isset($_POST['login'])) {
                    echo "<pre>";
                    print_r($_POST);
                    echo "</pre>";
                    $connection = mysqli_connect("localhost", "root", "");
                    $db = mysqli_select_db($connection, "online_class_basic");
                    $query = "select * from users where email = '$_POST[email]'";
                    $query_run = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($query_run)) {
                        if ($row['email'] == $_POST['email']) {
                            if ($row['password'] == $_POST['password']) {
                                $_SESSION['name'] = $row['name'];
                                $_SESSION['email'] = $row['email'];
                                $_SESSION['id'] = $row['id'];
                                header("Location: ../../../admin/index.php");
                            } else {
                                ?>
								<br><br><center><span class="alert-danger">Wrong Password</span></center>
								<?php
                            }
                        }
                    }
                }
            ?>