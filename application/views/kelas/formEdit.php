<div class="card bg-light mb-3" style="max-width: 100%;">
    <div class="card-header bg-dark">Header</div>
    <form action="<?= base_url($controller . "/editData"); ?>" method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="kelas">kelas</label>
                <input type="text" class="form-control" value="<?= $edit['kelas']; ?>" id="kelas" name="kelas" placeholder="Kelas" required>
            </div>
            <div class="form-group">
                <label for="semester">Semester</label>
                <input type="number" class="form-control" id="semester" value="<?= $edit['semester']; ?>" placeholder="semester" name="semester" required>
                <input type="hidden" class="form-control" id="semester" value="<?= $edit['id']; ?>" placeholder="semester" name="id" required>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" style="width: 100%;" id="foto" name="foto" value="Simpan">
            </div>
        </div>
    </form>