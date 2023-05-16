<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_pesan WHERE id_pesan = '$id'";
    $q = mysqli_query($koneksi,$sql);
    echo "<script>alert('Data berhasil di hapus');location='.?hal=kritik'</script>";

?>
