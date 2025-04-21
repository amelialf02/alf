<div class="card">
    <div class="card-body row">
        <div class="card-tittle h3 col-8">Data Jurusan</div>
        <div class="col-4 mb-2">  
            <a href="?m=jurusan&s=tambah" class="btn btn-md btn-primary float-end">Tambah</a>
        </div>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Jurusan</th>
                    <th>Kapasitas</th>
                    <th>Terisi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once "setting.php";
                $sql = "SELECT * FROM jurusan";
                $result = mysqli_query(mysql: $koneksi, query:$sql);
                if ($r = mysqli_num_rows($result) > 0) {
                    $no = 1;
                    while ($r = mysqli_fetch_assoc(result:$result)) {
                        echo '<tr> 
                <td>' . $no . '</td>
                <td>' . $r['jurusan'] . '</td>
                <td>' . $r['kapasitas'] . '</td>
                <td>' . $r['terisi'] . '</td>
                <td>
                <a href="?m=jurusan&s=edit&id=' . $r['id'] . '" class="btn btn-sm btn-warning">Edit</a>
                <a href="?m=jurusan&s=hapus&id=' .$r['id'] . '" class="btn btn-sm btn-danger" onclick="return confirm 
                (\'Apakah anda yakin?\')">Hapus</a>
                </td>
                </tr>';
                        $no++;
                    }
                } else {
                    echo '<tr>
                <td colspan="5" align"center">Data Kosong</td>
        </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>