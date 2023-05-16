<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_agenda WHERE id_agenda = '$id'";
    $q = mysqli_query($koneksi,$sql);
    $r = mysqli_fetch_assoc($q);
?>
<h3 class="mt-4">Form Agenda</h3>
<hr>
<form method="post" action="">
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="form-group">
                <label class="form-label">Judul</label>
                <input class="form-control py-2" type="text" value="<?= $r['judul_agenda']?>" placeholder="Masukkan Judul" name="txtjudul"/>
            </div>
        </div>
    </div>

    <div class="form-group mb-3">
        <label class="form-label">Tanggal</label>
        <input class="form-control py-2" type="date" value="<?= $r['tanggal']?>" name="txttgl"/>
    </div>

    <div class="form-group">
        <label class="form-label">Konten</label>
        <textarea name="txtkonten" cols="30" rows="10" class="form-control py-2"><?= $r['content_agenda']?></textarea>
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
        $konten = $_POST['txtkonten'];
        $iduser = "1";

        mysqli_query($koneksi,"UPDATE tb_agenda SET judul_agenda = '$judul', tanggal = '$tgl', content_agenda = '$konten', id_user = '$iduser' WHERE id_agenda = '$id'");
        echo "<script>alert('Data berhasil di simpan');location='.?hal=agenda'</script>";
    }
    ?>
</form>
