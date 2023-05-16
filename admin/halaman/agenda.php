<h3 class="mt-4">Data Agenda</h3>
<hr>
<a href=".?hal=tambahagenda" class="btn btn-primary">Tambah Data</a>
<div class="card-body">
    <div class="table-responsive">
        <table id="datatablesSimple" class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>User</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>User</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                $sql = "SELECT * FROM tb_agenda";
                $q = mysqli_query($koneksi, $sql);
                while ($r = mysqli_fetch_assoc($q)) {
                ?>
                    <tr>
                        <td><?= $r['judul_agenda']?></td>
                        <td><?= $r['tanggal']?></td>
                        <td><?= $r['id_user']?></td>
                        <td>
                        <a href=".?hal=ubahagenda&id=<?=$r['id_agenda']?>" class="btn btn-warning text-white">Ubah</a>

                            <a onclick="return confirm('Apakah anda yakin akan menghapus ?')" href=".?hal=hapusagenda&id=<?=$r['id_agenda']?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
