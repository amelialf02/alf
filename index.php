<?php
$submodule = (isset($_GET['s'])) ? $_GET['s'] : "home";
switch ($submodule) {
    case 'tampil' : default:
        include "jurusan/tampil.php";
        break;
    case 'tambah' : 
        include "jurusan/tambah.php";
        break;
    case 'simpan' : 
        include "jurusan/simpan.php";
        break;
    case 'edit' : 
        include "jurusan/edit.php";
        break;
    case 'update' :
        include "jurusan/update.php";
        break;
    case 'hapus' : 
        include "jurusan/hapus.php";
        break;
}
