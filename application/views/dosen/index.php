<div class="card">
    <div class="card-header">
        <h2 class="card-title">Data Dosen</h2>
        <a href="<?= base_url("DosenController/formInsert"); ?>" class="btn btn-primary float-right">Add Dosen</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jabatan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($dosen as $dsn) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $dsn['nip']; ?></td>
                        <td><?= $dsn['nama']; ?></td>
                        <td><?= $dsn['alamat']; ?></td>
                        <td><?= $dsn['jabatan']; ?></td>
                        <th>
                            <a href="<?= base_url($controller . '/formEdit/' . $dsn['nip']); ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                            <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </th>
                    </tr>
                <?php
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Nomor</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jabatan</th>
                    <th>Action</th>
                </tr>
            </tfoot>
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
                    <a href="<?= base_url(); ?>DosenController/hapus/<?= $dsn['nip']; ?>" class="btn btn-danger">Yes</a>
                </div>
            </div>
        </div>
    </div>