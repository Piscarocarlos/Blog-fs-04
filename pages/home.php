<?php

require_once "includes/database.php";

$query = $db->prepare("SELECT * FROM users");

$result = $query->execute([]);

$data = $query->fetchAll(PDO::FETCH_OBJ);


?>

<div class="container">
    <div class="row my-5">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Address</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $value) : ?>
                                <tr>
                                    <th><?= $value->id ?></th>
                                    <td><?= $value->name ?></td>
                                    <td><?= $value->email ?></td>
                                    <td><?= $value->gender ?></td>
                                    <td><?= $value->address ?></td>
                                    <td>
                                        <a href="pages/edit.php?id=<?= $value->id ?>" class="btn btn-success">Modifier</a>
                                        <button class="btn btn-danger">Supprimer</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>