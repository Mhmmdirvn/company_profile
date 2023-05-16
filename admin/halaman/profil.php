<h3 class="mt-4">Data Profil</h3>
<hr>
<a href=".?hal=tambahprofil" class="btn btn-primary">Tambah Data</a>
<div class="card-body">
    <div class="table-responsive">
        <table id="datatablesSimple" class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Nama Perusahaan</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>Nama Pimpinan</th>
                    <th>Logo</th>
                    <th>Visi</th>
                    <th>Misi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nama Perusahaan</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>Nama Pimpinan</th>
                    <th>Logo</th>
                    <th>Visi</th>
                    <th>Misi</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                $sql = "SELECT * FROM tb_biodata";
                $q = mysqli_query($koneksi, $sql);
                while ($r = mysqli_fetch_assoc($q)) {
                ?>
                    <tr>
                        <td><?= $r['nama_perusahaan'] ?></td>
                        <td><?= $r['tlp'] ?></td>
                        <td><?= $r['alamat'] ?></td>
                        <td><?= $r['nama_pimpinan'] ?></td>
                        <td>
                            <img src="../gambar/<?= $r['logo'] ?>" alt="" width="70" height="70">
                        </td>
                        <td><?= $r['visi'] ?></td>
                        <td><?= $r['misi'] ?></td>
                        <td>
                            <a href=".?hal=ubahprofil&id=<?=$r['id_biodata']?>" class="btn btn-warning text-white mb-2">Ubah</a>

                            <a onclick="return confirm('Apakah anda yakin akan menghapus ?')" href=".?hal=hapusprofil&id=<?=$r['id_biodata']?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
