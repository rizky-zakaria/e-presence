<div class="card">
    <div class="card-header">
        <h2 class="card-title">Data Dosen</h2>
        <a href="<?= base_url($controller . "/formInsert"); ?>" class="btn btn-primary float-right">Add Schedule</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Hari</th>
                    <th>Mata Kuliah</th>
                    <th>Kelas</th>
                    <th>Pengampuh</th>
                    <th>Waktu</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nomor</th>
                    <th>Hari</th>
                    <th>Mata Kuliah</th>
                    <th>Kelas</th>
                    <th>Pengampuh</th>
                    <th>Waktu</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                $no = 1;
                foreach ($jadwal as $jwl) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $jwl['hari']; ?></td>
                        <td><?= $jwl['matakuliah']; ?></td>
                        <td><?= $jwl['semester'] . " " . $jwl['kelas']; ?></td>
                        <td><?= $jwl['nama']; ?></td>
                        <td><?= $jwl['jam_masuk'] . "-" . $jwl['jam_keluar']; ?></td>
                        <th>
                            <a href="<?= base_url($controller . '/formEdit/' . $jwl['id']); ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                            <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </th>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Yakin Ingin Menghapus?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="<?= base_url($controller); ?>/hapus/<?= $jwl['id']; ?>" class="btn btn-danger">Yes</a>
                </div>
            </div>
        </div>
    </div>