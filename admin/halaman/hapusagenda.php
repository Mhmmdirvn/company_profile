<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_agenda WHERE id_agenda = '$id'";
    $q = mysqli_query($koneksi,$sql);
    echo "<script>alert('Data berhasil di hapus');location='.?hal=agenda'</script>";

?>
