<?php
    include 'koneksi.php';

    $id = $_GET['id'];
    $id = (int)$id;
    
    $find = DB("siswa")->where('id', $id);
    $data = $find->first();
    
    DB('siswa')->where('id', $id)->delete();
    
    echo "Record deleted <a href='read.php'>Back</a>";


?>