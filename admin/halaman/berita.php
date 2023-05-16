<h3 class="mt-4">Data Berita</h3>
<hr>
<a href=".?hal=tambahberita" class="btn btn-primary">Tambah Data</a>
<div class="card-body">
    <div class="table-responsive">
        <table id="datatablesSimple" class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                $sql = "SELECT * FROM tb_berita";
                $q = mysqli_query($koneksi, $sql);
                while ($r = mysqli_fetch_assoc($q)) {
                ?>
                    <tr>
                        <td><?= $r['judul_berita'] ?></td>
                        <td><?= $r['tanggal'] ?></td>
                        <td>
                            <img src="../gambar/<?= $r['gambar'] ?>" alt="" width="70" height="70">
                        </td>
                        <td>
                            <a href=".?hal=ubahberita&id=<?=$r['id_berita']?>" class="btn btn-warning text-white">Ubah</a>

                            <a onclick="return confirm('Apakah anda yakin akan menghapus ?')" href=".?hal=hapusberita&id=<?=$r['id_berita']?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
