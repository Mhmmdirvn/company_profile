<h3 class="mt-4">Data Galeri</h3>
<hr>
<a href=".?hal=tambahgaleri" class="btn btn-primary">Tambah Data</a>
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
                $sql = "SELECT * FROM tb_galery";
                $q = mysqli_query($koneksi, $sql);
                while ($r = mysqli_fetch_assoc($q)) {
                ?>
                    <tr>
                        <td><?= $r['judul_galery'] ?></td>
                        <td><?= $r['tanggal'] ?></td>
                        <td>
                            <img src="../gambar/<?= $r['gambar'] ?>" alt="" width="70" height="70">
                        </td>
                        <td>
                            <a href=".?hal=ubahgaleri&id=<?=$r['id_galery']?>" class="btn btn-warning text-white">Ubah</a>

                            <a onclick="return confirm('Apakah anda yakin akan menghapus ?')" href=".?hal=hapusgaleri&id=<?=$r['id_galery']?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
