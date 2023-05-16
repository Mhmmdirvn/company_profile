<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_berita WHERE id_berita = '$id'";
    $q = mysqli_query($koneksi,$sql);
    $r = mysqli_fetch_assoc($q);
?>
<h3 class="mt-4">Form Berita</h3>
<hr>
<form method="post" action="" enctype="multipart/form-data">
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="form-group">
                <label class="form-label">Judul</label>
                <input class="form-control py-2" type="text" value="<?=$r['judul_berita']?>" placeholder="Masukkan Judul" name="txtjudul"/>
            </div>
        </div>
    </div>

    <div class="form-group mb-3">
        <label class="form-label">Tanggal</label>
        <input class="form-control py-2" type="date" value="<?=$r['tanggal']?>" name="txttgl"/>
    </div>

    <div class="form-group mb-3">
        <label class="form-label">Gambar</label>
        <input class="form-control py-2" type="file" value="<?=$r['gambar']?>" name="txtgambar"/>
        <img src="../gambar/<?=$r['gambar']?>" alt="" width="100" height="100">
    </div>

    <div class="form-group">
        <label class="form-label">Konten</label>
        <textarea name="txtkonten" cols="30" rows="10" class="form-control py-2"><?=$r['content_berita']?></textarea>
    </div>

    <div class="mt-4 mb-0 form-group">
      <div class="d-grid">
        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
      </div>
    </div>

    <?php
    if (@$_POST['simpan']) {
        $judul = $_POST['txtjudul'];
        $tgl = $_POST['txttgl'];
        $gambar = $_FILES['txtgambar']['name'];
        $tmp = $_FILES['txtgambar']['tmp_name'];
        $konten = $_POST['txtkonten'];
        $iduser = "1";


        if (empty($gambar)) {
            mysqli_query($koneksi,"UPDATE tb_berita SET judul_berita = '$judul', tanggal = '$tgl', content_berita = '$konten', id_user = '$iduser' WHERE id_berita = '$id'");
        } else {
            mysqli_query($koneksi,"UPDATE tb_berita SET judul_berita = '$judul', tanggal = '$tgl', content_berita = '$konten', gambar = '$gambar', id_user = '$iduser' WHERE id_berita = '$id'");
            copy($tmp, "../gambar/$gambar");
        }

        echo "<script>alert('Data berhasil di simpan');location='.?hal=berita'</script>";
    }
    ?>
</form>
