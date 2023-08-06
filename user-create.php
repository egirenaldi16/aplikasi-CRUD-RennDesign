<!DOCTYPE html>
<html>
<head>
    <title>Form pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-4">
        <div class="card">
            <div align="center" class="card-header">
                <h5 >FORM PEMESANAN </h5>
                <img style="height: 150px; width: 150   px;" class="img-fluid" src="dist/img/rd - background.png" alt="" ><br>
            </div>
            <div class="card-body">
                <form action="api.php" method="post">
                    <div class="mb-3">
                        <label for="nama">Nama Pemesan :</label><br>
                        <input class="form-control" type="text" name="nama" placeholder="nama pemesan" /><br>
                    </div>
                    <div class="mb-3">
                        <label for="No_telp">No Telp :</label><br>
                        <input class="form-control" type="text" name="no_telp" placeholder="no telp" /><br>
                    </div>
                    <!-- select -->
                    <?php
                    include('config.php');

                    if (isset($_GET["no"])) {
                        $no = $_GET["no"];
                        $check_no = "SELECT * FROM tb_project WHERE no = '$no';"; // Use $no instead of $id
                        $query = mysqli_query($mysqli, $check_no);
                        $row = mysqli_fetch_array($query);
                    }

                    // Fetch data for the <select> element
                    $fetch_projects = "SELECT id, project FROM tb_project"; // Change the table and column names as needed
                    $result = mysqli_query($mysqli, $fetch_projects);

                    // Check if the query was successful
                    if (!$result) {
                        die("Query failed: " . mysqli_error($mysqli));
                    }
                    ?>

                    <label>Jenis</label>
                    <select name="jenis" class="form-select" aria-label="Default select example">
                        <option value="">Select Project</option>
                        <?php
                        if (mysqli_num_rows($result) > 0) {
                            while ($project = mysqli_fetch_assoc($result)) {
                                $selected = ($row && $row["jenis"] == $project["id"]) ? "selected" : "";
                                echo '<option value="' . $project['project'] . '" ' . $selected . '>' . $project['project'] . '</option>';
                            }
                        }
                        ?>
                    </select><br>
                    
                  <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
