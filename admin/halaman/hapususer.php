<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_user WHERE id_user = '$id'";
    $q = mysqli_query($koneksi,$sql);
    echo "<script>alert('Data berhasil di hapus');location='.?hal=user'</script>";

?>
