<html>

<head>
	<meta charset="UTF-8">

	<title>JSON CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
	
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center text-primary">JSON CRUD</h1>
            <div class="card">
                <div class="card-header">
                    <h3>Add New Student</h3>
                </div>
                <div class="card-body">
                    <form action="create.php" method="POST">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="branch">Branch</label>
                            <input type="text" class="form-control" id="email" placeholder="Enter Branch" name="branch">
                        </div>
                        <div class="form-group">
                            <label for="year">Year</label>
                            <input type="text" class="form-control" id="phone" placeholder="Enter Year" name="year">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>JSON CREATE WITH PHP</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Branch</th>
                                        <th>Year</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $json_data = file_get_contents('studentData.json');
                                    $data = json_decode($json_data);
                                    foreach ($data as $key => $value) {
                                        echo '<tr>';
                                        echo '<td>' . $value->name . '</td>';
                                        echo '<td>' . $value->branch . '</td>';
                                        echo '<td>' . $value->year . '</td>';
                                        echo '</tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
