<div class="card">
    <div class="card-header">
        <h3 class="card-title">List of <?= $header; ?></h3>
        <!-- <a href="<?= base_url() . $controller . '/formData' ?>" class="btn btn-primary float-right">Add Data <i class="fas fa-plus"></i> </a> -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kelas</th>
                    <th>Semester</th>
                    <th>View</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($result as $data) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data['kelas'] ?></td>
                        <td><?= $data['semester'] ?></td>
                        <td><a class="btn btn-primary" href="<?= base_url($controller . "/view/" . $data['id']); ?>">view</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <!-- Modal -->