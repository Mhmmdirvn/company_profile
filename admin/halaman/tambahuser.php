<h3 class="mt-4">Form User</h3>
<hr>
<form method="post" action="">
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="form-group">
                <label class="form-label">Nama</label>
                <input class="form-control py-2" type="text" placeholder="Masukkan Nama" name="txtnama"/>
            </div>
        </div>
    </div>

    <div class="form-group mb-3">
        <label class="form-label">Telepon</label>
        <input class="form-control py-2" type="text" placeholder="Masukkan No Telepon" name="txttlp"/>
    </div>

    <div class="form-group">
        <label class="form-label">Alamat</label>
        <input class="form-control py-2" type="text" placeholder="Masukkan Alamat" name="txtalamat"/>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Username</label>
                <input class="form-control py-2" type="text" placeholder="Masukkan Username" name="txtuser"/>
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
        $pass = md5($_POST['txtpassword']);
        mysqli_query($koneksi,"INSERT INTO tb_user(nama_user,tlp_user,alamat_user,username,password)VALUES('$nama','$tlp','$alamat','$user','$pass')");
        echo "<script>alert('Data berhasil di simpan');location='.?hal=user'</script>";
    }
    ?>
</form>
