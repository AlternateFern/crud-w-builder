<?php

include './koneksi.php';
$datas = DB("siswa")->get();
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Read</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container py-4">
        <h2>Students</h2>

        <a href="create.php" class="btn btn-primary fw-bold">Create</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Student Identity</th>
                    <th scope="col">Name</th>
                    <th scope="col">Class</th>
                    <th scope="col">Major</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datas as $data) : ?>
                    <tr>
                        <th scope="row"><?= $data->id ?></th>
                        <td><?= $data->nis ?></td>
                        <td><?= $data->nama ?></td>
                        <td><?= $data->kelas ?></td>
                        <td><?= $data->jurusan ?></td>
                        <td><a class="btn btn-sm btn-warning" href="edit.php?id=<?= $data->id ?>">Edit</a>
                        <a class="btn btn-sm btn-danger" href="delete.php?id=<?= $data->id ?>">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>