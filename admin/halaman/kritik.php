<h3 class="mt-4">Data Kritik Dan Saran</h3>
<hr>
<div class="card-body">
    <div class="table-responsive">
        <table id="datatablesSimple" class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Pesan</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Email</th>
                    <th>Pesan</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                $sql = "SELECT * FROM tb_pesan";
                $q = mysqli_query($koneksi, $sql);
                while ($r = mysqli_fetch_assoc($q)) {
                ?>
                    <tr>
                        <td><?= $r['email'] ?></td>
                        <td><?= $r['pesan'] ?></td>
                        <td><?= $r['tanggal'] ?></td>
                        <td>
                            <a href=".?hal=ubahkritik&id=<?= $r['id_pesan'] ?>" class="btn btn-warning text-white">Ubah</a>

                            <a onclick="return confirm('Apakah anda yakin akan menghapus ?')" href=".?hal=hapuskritik&id=<?= $r['id_pesan'] ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
