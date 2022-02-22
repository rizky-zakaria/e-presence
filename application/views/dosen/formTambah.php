<div class="card bg-light mb-3" style="max-width: 100%;">
    <div class="card-header bg-dark">Header</div>
    <form action="<?= base_url($controller . "/insertData"); ?>" method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="nip">NIP</label>
                <input type="text" class="form-control" id="nip" name="nip" placeholder="NIP" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" required>
            </div>
            <div class="form-group">
                <label for="jabatan">jabatan</label>
                <input type="text" class="form-control" id="jabatan" placeholder="jabatan" name="jabatan" required>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" style="width: 100%;" id="foto" name="foto" value="Simpan">
            </div>
        </div>
    </form>
</div>