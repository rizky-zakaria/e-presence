<div class="card bg-light mb-3" style="max-width: 100%;">
    <div class="card-header bg-dark">Header</div>
    <form action="<?= base_url($controller . "/insertData"); ?>" method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="nim">Nim</label>
                <input type="number" class="form-control" id="nim" placeholder="" name="nim" placeholder="000" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Nama Mahasiswa" name="nama" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" required>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <select class="form-control" id="kelas" name="kelas" required>
                    <?php
                    foreach ($kelas as $kls) {

                    ?>
                        <option value="<?= $kls['id']; ?>"><?= $kls['kelas']; ?></option>
                    <?php

                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="foto">Foto</label><br>
                <input type="file" id="foto" name="file" required>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" style="width: 100%;" id="foto" name="foto" value="Simpan">
            </div>
        </div>
    </form>
</div>