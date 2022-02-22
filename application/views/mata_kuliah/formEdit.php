<div class="card bg-light mb-3" style="max-width: 100%;">
    <div class="card-header bg-dark">Header</div>
    <form action="<?= base_url($controller . "/editData"); ?>" method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="mata_kuliah">Mata Kuliah</label>
                <input type="text" class="form-control" id="mata_kuliah" name="mata_kuliah" placeholder="Mata Kuliah" required value="<?= $mk['matakuliah']; ?>">
            </div>
            <div class="form-group">
                <label for="sks">Sks</label>
                <input type="number" class="form-control" id="sks" value="<?= $mk['sks']; ?>" placeholder="Sks" name="sks" required>
                <input type="hidden" class="form-control" id="id" value="<?= $mk['id']; ?>" placeholder="id" name="id" required>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" style="width: 100%;" id="foto" name="foto" value="Simpan">
            </div>
        </div>
    </form>