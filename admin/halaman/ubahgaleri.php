<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_galery WHERE id_galery = '$id'";
    $q = mysqli_query($koneksi,$sql);
    $r = mysqli_fetch_assoc($q);
?>
<h3 class="mt-4">Form Galeri</h3>
<hr>
<form method="post" action="" enctype="multipart/form-data">
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="form-group">
                <label class="form-label">Judul</label>
                <input class="form-control py-2" type="text" value="<?= $r['judul_galery'] ?>" placeholder="Masukkan Judul" name="txtjudul"/>
            </div>
        </div>
    </div>

    <div class="form-group mb-3">
        <label class="form-label">Gambar</label>
        <input class="form-control py-2" type="file" value="<?= $r['gambar'] ?>"  name="txtgambar"/>
        <img src="../gambar/<?= $r['gambar'] ?>" alt="" width="100" height="100">
    </div>

    <div class="mt-4 mb-0 form-group">
      <div class="d-grid">
        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
      </div>
    </div>

    <?php
    if (@$_POST['simpan']) {
        $judul = $_POST['txtjudul'];
        $gambar = $_FILES['txtgambar']['name'];
        $tmp = $_FILES['txtgambar']['tmp_name'];
        $tgl = date("Y-m-d");
        $iduser = "1";

        if (empty($gambar)) {
            mysqli_query($koneksi,"UPDATE tb_galery SET judul_galery = '$judul', tanggal = '$tgl',id_user = '$iduser' WHERE id_galery = '$id'");
        } else {
            mysqli_query($koneksi,"UPDATE tb_galery SET judul_galery = '$judul',gambar = '$gambar',tanggal = '$tgl',id_user = '$iduser' WHERE id_galery = '$id'");
            copy($tmp, "../gambar/$gambar");
        }
        echo "<script>alert('Data berhasil di simpan');location='.?hal=galeri'</script>";
    }
    ?>
</form>
