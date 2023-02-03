<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
</head>

<body>

    <?php

    require_once "../includes/database.php";
    $query = $db->prepare("SELECT * FROM users WHERE id=?");
    $result = $query->execute([$_GET['id']]);
    $data = $query->fetch(PDO::FETCH_OBJ);
    ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 mt-5">
                    <div class="card shadow rounded">
                        <div class="card-body">
                            <h5>Modifier</h5>
                            <form action="../controllers/r_traitement.php" method="POST">
                                <div class="form-group mb-3">
                                    <label for="name">Name:</label>
                                    <input type="text" name="name" id="name" value="<?= $data->name ?>"
                                        class="form-control">

                                </div>
                                <div class=" form-group mb-3">
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" id="email" value="<?= $data->email ?>"
                                        class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="gender">Gender</label>
                                    <select name="gender" id="" class="form-select">
                                        <option value="Male" <?= $data->gender == "Male" ? "selected" : "" ?>>Male
                                        </option>
                                        <option value="Female" <?= $data->gender == "Female" ? "selected" : "" ?>>Female
                                        </option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="address">Address:</label>
                                    <input type="text" name="address" id="address" value="<?= $data->address ?>"
                                        class="form-control">

                                </div>

                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary w-100">Edit account</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>