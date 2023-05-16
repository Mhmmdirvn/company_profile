<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_biodata WHERE id_biodata = '$id'";
    $q = mysqli_query($koneksi,$sql);
    $r = mysqli_fetch_assoc($q);
?>
<h3 class="mt-4">Form Profil</h3>
<hr>
<form method="post" action="" enctype="multipart/form-data">
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="form-group">
                <label class="form-label">Nama Perusahaan</label>
                <input class="form-control py-2" type="text" value="<?=$r['nama_perusahaan']?>" placeholder="Masukkan Nama Perusahaan" name="txtnamaperusahaan"/>
            </div>
        </div>
    </div>

    <div class="form-group mb-3">
        <label class="form-label">Telepon</label>
        <input class="form-control py-2" type="text" value="<?=$r['tlp']?>" name="txttlp" placeholder="Masukkan Telepon"/>
    </div>

    <div class="form-group mb-3">
        <label class="form-label">Alamat</label>
        <input class="form-control py-2" type="text" value="<?=$r['alamat']?>" name="txtalamat" placeholder="Masukkan Alamat"/>
    </div>

    <div class="form-group mb-3">
        <label class="form-label">Nama Pimpinan</label>
        <input class="form-control py-2" type="text" name="txtnamapimpinan" value="<?=$r['nama_pimpinan']?>" placeholder="Masukkan Nama Pimpinan"/>
    </div>


    <div class="form-group mb-3">
        <label class="form-label">Logo</label>
        <input class="form-control py-2" type="file" value="<?=$r['logo']?>" name="txtgambar"/>
        <img src="../gambar/<?=$r['logo']?>" alt="" width="100" height="100">
    </div>

    <div class="form-group">
        <label class="form-label">Visi</label>
        <textarea name="txtvisi" cols="30" rows="10"  class="form-control py-2" placeholder="Masukkan Visi"><?=$r['visi']?></textarea>
    </div>

    <div class="form-group">
        <label class="form-label">Misi</label>
        <textarea name="txtmisi" cols="30" rows="10"  class="form-control py-2" placeholder="Masukkan Misi"><?=$r['misi']?></textarea>
    </div>

    <div class="mt-4 mb-0 form-group">
      <div class="d-grid">
        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
      </div>
    </div>

    <?php
    if (@$_POST['simpan']) {
        $nama_perusahaan = $_POST['txtnamaperusahaan'];
        $tlp = $_POST['txttlp'];
        $alamat = $_POST['txtalamat'];
        $nama_pimpinan = $_POST['txtnamapimpinan'];
        $logo = $_FILES['txtgambar']['name'];
        $tmp = $_FILES['txtgambar']['tmp_name'];
        $visi = $_POST['txtvisi'];
        $misi = $_POST['txtmisi'];

        if (empty($logo)) {
            mysqli_query($koneksi,"UPDATE tb_biodata SET nama_perusahaan = '$nama_perusahaan', tlp = '$tlp', alamat = '$alamat', nama_pimpinan = '$nama_pimpinan', visi = '$visi', misi = '$misi' WHERE id_biodata = '$id'");
        } else {
            mysqli_query($koneksi,"UPDATE tb_biodata SET nama_perusahaan = '$nama_perusahaan', tlp = '$tlp', alamat = '$alamat', nama_pimpinan = '$nama_pimpinan', logo = '$logo', visi = '$visi', misi = '$misi' WHERE id_biodata = '$id'");
            copy($tmp, "../gambar/$logo");
        }
        echo "<script>alert('Data berhasil di simpan');location='.?hal=profil'</script>";
    }
    ?>
</form>
