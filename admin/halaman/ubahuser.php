<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_user WHERE id_user = '$id'";
    $q = mysqli_query($koneksi,$sql);
    $r = mysqli_fetch_assoc($q);
?>
<h3 class="mt-4">Form User</h3>
<hr>
<form method="post" action="">
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="form-group">
                <label class="form-label">Nama</label>
                <input class="form-control py-2" value="<?=$r['nama_user']?>" type="text" placeholder="Masukkan Nama" name="txtnama"/>
            </div>
        </div>
    </div>

    <div class="form-group mb-3">
        <label class="form-label">Telepon</label>
        <input class="form-control py-2" type="text"  value="<?=$r['tlp_user']?>" placeholder="Masukkan No Telepon" name="txttlp"/>
    </div>

    <div class="form-group">
        <label class="form-label">Alamat</label>
        <input class="form-control py-2" type="text"  value="<?=$r['alamat_user']?>" placeholder="Masukkan Alamat" name="txtalamat"/>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Username</label>
                <input class="form-control py-2" type="text"  value="<?=$r['username']?>" placeholder="Masukkan Username" name="txtuser"/>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Password</label>
                <input class="form-control py-2" type="password" placeholder="Masukkan Password" name="txtpassword"/>
            </div>
        </div>
    </div>
    <div class="mt-4 mb-0 form-group">
      <div class="d-grid">
        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
      </div>
    </div>

    <?php
    if (@$_POST['simpan']) {
        $nama = $_POST['txtnama'];
        $tlp = $_POST['txttlp'];
        $alamat = $_POST['txtalamat'];
        $user = $_POST['txtuser'];
        $pass = $_POST['txtpassword'];
        if (empty($pass)) {
            mysqli_query($koneksi,"UPDATE tb_user SET nama_user = '$nama',alamat_user = '$alamat',tlp_user = '$tlp',username = '$user' WHERE id_user = '$id'");
        } else {
            mysqli_query($koneksi,"UPDATE tb_user SET nama_user = '$nama',alamat_user = '$alamat',tlp_user = '$tlp',username = '$user',password = '$pass' WHERE id_user = '$id'");
        }
        echo "<script>alert('Data berhasil di simpan');location='.?hal=user'</script>";
    }
    ?>
</form>
