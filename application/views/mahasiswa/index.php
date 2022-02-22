<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar <?= $header; ?></h3> <a href="<?= base_url("MahasiswaController/formTambah"); ?>" class="btn btn-primary float-right">Tambah</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mahasiswa as $mhs) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $mhs['nim']; ?></td>
                        <td><?= $mhs['nama']; ?></td>
                        <td><?= $mhs['kelas']; ?></td>
                        <td>
                            <a href="<?= base_url($controller . '/formEdit/' . $mhs['nim']); ?>" class="btn btn-success"> <i class="fas fa-edit"></i> </a>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                <?php

                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Nomor</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->


    <!-- modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Yakin Ingin Menghapus?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a class="btn btn-danger" href="<?= base_url($controller . '/hapus/' . $mhs['nim']); ?>"> <i class="fas fa-trash"></i> </a>
                </div>
            </div>
        </div>
    </div>