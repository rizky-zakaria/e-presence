<div class="card">
    <div class="card-header">
        <h2 class="card-title">Data Mata Kuliah</h2>
        <a href="<?= base_url($controller . '/formTambah/'); ?>" class="btn btn-primary float-right">Add Courses</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($matkul as $mk) {

                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $mk['matakuliah']; ?></td>
                        <td><?= $mk['sks']; ?></td>
                        <td>
                            <a href="<?= base_url($controller . '/formEdit/' . $mk['id']); ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Nomor</th>
                    <th>Mata Kuliah</th>
                    <th>SKS</th>
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
                    Apakah Anda Yakin Ingin Menghapus Data Ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="<?= base_url($controller . '/hapus/' . $mk['id']); ?>" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>