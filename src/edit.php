<?php

include 'koneksi.php';

$id = $_GET['id'];
$id = (int)$id;

$find = DB("siswa")->where('id', $id);
$data = $find->first();

if (isset($_POST['submit'])) {
    $update = $find->update([
        'nis'       => $_POST['nis'],
        'nama'      => $_POST['nama'],
        'kelas'     => $_POST['kelas'],
        'jurusan'   => $_POST['jurusan']
    ]);
    $data = $find->first();
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container py-4">
        <h2>Students Edit</h2>

        <?php if (isset($update) && $update) : ?>
            <div class="alert alert-success" role="alert">
                Success update student
            </div>
        <?php endif; ?>

        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Student Identity</label>
                <input type="text" name="nis" class="form-control" value="<?= $data->nis ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="nama" class="form-control" value="<?= $data->nama ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Class</label>
                <input type="text" name="kelas" class="form-control" value="<?= $data->kelas ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Major</label>
                <input type="text" name="jurusan" class="form-control" value="<?= $data->jurusan ?>">
            </div>

            <a href="read.php" class="btn btn-primary">Back</a>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>