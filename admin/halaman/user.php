<h3 class="mt-4">Data User</h3>
<hr>
<a href=".?hal=tambahuser" class="btn btn-primary">Tambah Data</a>
<div class="card-body">
    <div class="table-responsive">
        <table id="datatablesSimple" class="table table-striped table-sm" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Username</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Username</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                $sql = "SELECT * FROM tb_user";
                $q = mysqli_query($koneksi, $sql);
                while ($r = mysqli_fetch_assoc($q)) {
                ?>
                    <tr>
                        <td><?= $r['nama_user'] ?></td>
                        <td><?= $r['tlp_user'] ?></td>
                        <td><?= $r['username'] ?></td>
                        <td><?= $r['alamat_user'] ?></td>
                        <td>
                            <a href=".?hal=ubahuser&id=<?=$r['id_user']?>" class="btn btn-warning text-white">Ubah</a>

                            <a onclick="return confirm('Apakah anda yakin akan menghapus ?')" href=".?hal=hapususer&id=<?=$r['id_user']?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
