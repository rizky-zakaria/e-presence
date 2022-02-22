<div class="card bg-light mb-3" style="max-width: 100%;">
    <div class="card-header bg-dark">Header</div>
    <form action="<?= base_url($controller . "/insertData"); ?>" method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="kelas">kelas</label>
                <input type="text" class="form-control" id="kelas" placeholder="Kelas" name="kelas" placeholder="Kelas" required>
            </div>
            <div class="form-group">
                <label for="semester">Semester</label>
                <input type="number" class="form-control" id="semester" placeholder="semester" name="semester" required>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" style="width: 100%;" id="foto" name="foto" value="Simpan">
            </div>
        </div>
    </form>
</div>