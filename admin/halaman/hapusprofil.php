<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_biodata WHERE id_biodata = '$id'";
    $q = mysqli_query($koneksi,$sql);
    echo "<script>alert('Data berhasil di hapus');location='.?hal=profil'</script>";

?>
