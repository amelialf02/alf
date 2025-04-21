<?php
if(isset($_POST['update'])) {
    $id =  $_POST['id'];
    $jurusan = $_POST['jurusan'];
    $kapasitas = $_POST['kapasitas'];
    $terisi = $_POST['terisi'];

    include_once "setting.php";
    $sql = "UPDATE jurusan SET jurusan='$jurusan', kapasitas='$kapasitas', terisi='$terisi' WHERE id='$id'";
    $result = mysqli_query($koneksi, $sql);
    if($result) {
        header('location: ?m=jurusan&s=tampil');
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
} else {
    echo "Jangan Akses Langsung ke file simpan.php";
}