<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_galery WHERE id_galery = '$id'";
    $q = mysqli_query($koneksi,$sql);
    echo "<script>alert('Data berhasil di hapus');location='.?hal=galeri'</script>";

?>
