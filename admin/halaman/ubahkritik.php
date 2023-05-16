<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_pesan WHERE id_pesan = '$id'";
    $q = mysqli_query($koneksi,$sql);
    $r = mysqli_fetch_assoc($q);
?>
<h3 class="mt-4">Form Kritik Dan Saran</h3>
<hr>
<form method="post" action="">
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="form-group">
                <label class="form-label">Email</label>
                <input class="form-control py-2" type="text" value="<?= $r['email']?>" placeholder="Masukkan Email" name="email"/>
            </div>
        </div>
    </div>

    <div class="form-group mb-3">
        <label class="form-label">Tanggal</label>
        <input class="form-control py-2" type="date" value="<?= $r['tanggal']?>" name="txttgl"/>
    </div>

    <div class="form-group">
        <label class="form-label">Pesan</label>
        <textarea name="pesan" cols="30" rows="10" class="form-control py-2"><?= $r['pesan']?></textarea>
    </div>

    <div class="mt-4 mb-0 form-group">
      <div class="d-grid">
        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
      </div>
    </div>

    <?php
    if (@$_POST['simpan']) {
        $email = $_POST['email'];
        $tgl = $_POST['txttgl'];
        $pesan = $_POST['pesan'];

        mysqli_query($koneksi,"UPDATE tb_pesan SET email = '$email', tanggal = '$tgl', pesan = '$pesan' WHERE id_pesan = '$id'");
        echo "<script>alert('Data berhasil di simpan');location='.?hal=kritik'</script>";
    }
    ?>
</form>
