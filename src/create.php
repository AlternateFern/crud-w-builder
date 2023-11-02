<?php
    include 'koneksi.php';
    
	if(isset($_POST['submit'])) {
		$nis = $_POST["nis"];
        $nama = $_POST["nama"];
        $kelas = $_POST["kelas"];
        $jurusan = $_POST["jurusan"];

        DB('siswa')->insert([
            'nis' => $nis,
            'nama' => $nama,
            'kelas' => $kelas,
            'jurusan' => $jurusan
        ]);
    
        echo "Success";
    }
	?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container py-4">
	<form action="create.php" method="post" name="form1">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Student Identity</label>
                <input type="text" name="nis" class="form-control" required>
            </div>

			<div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="nama" class="form-control" required">
            </div>

			<div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Class</label>
                <input type="text" name="kelas" class="form-control" required>
            </div>

			<div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Major</label>
                <input type="text" name="jurusan" class="form-control" required>
            </div>

			<a href="read.php" class="btn btn-primary">Back</a>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>