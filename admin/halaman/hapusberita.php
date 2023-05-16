<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_berita WHERE id_berita = '$id'";
    $q = mysqli_query($koneksi,$sql);
    echo "<script>alert('Data berhasil di hapus');location='.?hal=berita'</script>";

?>
