<h3 class="mt-4">Form Berita</h3>
<hr>
<form method="post" action="" enctype="multipart/form-data">
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="form-group">
                <label class="form-label">Judul</label>
                <input class="form-control py-2" type="text" placeholder="Masukkan Judul" name="txtjudul"/>
            </div>
        </div>
    </div>

    <div class="form-group mb-3">
        <label class="form-label">Tanggal</label>
        <input class="form-control py-2" type="date" name="txttgl"/>
    </div>

    <div class="form-group mb-3">
        <label class="form-label">Gambar</label>
        <input class="form-control py-2" type="file" name="txtgambar"/>
    </div>

    <div class="form-group">
        <label class="form-label">Konten</label>
        <textarea name="txtkonten" cols="30" rows="10" class="form-control py-2"></textarea>
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

        mysqli_query($koneksi,"INSERT INTO tb_berita(judul_berita,tanggal,gambar,content_berita,id_user)VALUES('$judul','$tgl','$gambar','$konten','$iduser')");
        copy($tmp, "../gambar/$gambar");
        echo "<script>alert('Data berhasil di simpan');location='.?hal=berita'</script>";
    }
    ?>
</form>
