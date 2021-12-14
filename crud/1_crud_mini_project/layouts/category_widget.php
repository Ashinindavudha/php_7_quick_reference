
<?php include("connection.php"); ?>
<div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <?php
                                        $db = mysqli_select_db($connection, 'online_class_basic');
                                        $query = "SELECT * FROM categories";
                                        $result = mysqli_query($connection, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $category_id = $row['cat_id'];
                                            $category_name = $row['cat_name'];
                                            echo "<li><a href='../category_details.php?category_id=$category_id'>$category_name</a></li>";
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <!-- <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">JavaScript</a></li>
                                        <li><a href="#!">CSS</a></li>
                                        <li><a href="#!">Tutorials</a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>