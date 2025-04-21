<div class="card">
    <div class="card-body row">
        <div class="card-tittle h3 col-8">Edit Data Jurusan</div>
        <div class="col-4 mb-3">  
            <a href="?m=jurusan&s=view" class="btn btn-md btn-primary float-end">Kembali</a>
        </div>

        <?php
        include_once "setting.php";
        $id = $_GET['id'];
        $sql = "SELECT * FROM jurusan WHERE id='$id'";
        $query = mysqli_query($koneksi, $sql);
        $r = mysqli_fetch_array($query);
        ?>
        <form action="?m=jurusan&s=update" method="post">
            <div class="mb-2">
                <input type="text" class="form-control" name="jurusan" value= "<?= $r['jurusan'];?>" placeholder="Nama Jurusan" autofocus required>
            </div>
            <div class="mb-2">
                <input type="text" class="form-control" name="kapasitas" value="<?= $r['kapasitas'];?>" >
            </div>
            <div class="mb-2">
                <input type="text" class="form-control" name="terisi" value="<?= $r['terisi'];?>" >
            </div>
            <div class="mb-2">
                <input type="hidden" name='id' value="<?= $r['id'];?>">
                <input type="reset" class="btn btn-sm btn-danger">
                <input type="submit" class="btn btn-sm btn-primary" name="update" value="Update">
            </div>
        </form>
    </div>
</div>