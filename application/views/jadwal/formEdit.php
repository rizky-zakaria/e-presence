<div class="card bg-light mb-3" style="max-width: 100%;">
    <div class="card-header bg-dark">Header</div>
    <form action="<?= base_url($controller . "/editData"); ?>" method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="nip">NIP</label>
                <select class="form-control" id="nip" name="nip">
                    <?php
                    foreach ($dosen as $dsn) {
                    ?>
                        <option value="<?= $dsn['nip']; ?>"><?= $dsn['nama']; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="matakuliah">Mata Kuliah</label>
                <select class="form-control" id="matakuliah" name="id_matakuliah">
                    <?php
                    foreach ($matakuliah as $mk) {
                    ?>
                        <option value="<?= $mk['id']; ?>"><?= $mk['matakuliah']; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <select class="form-control" id="kelas" name="id_kelas">
                    <?php
                    foreach ($kelas as $kls) {
                    ?>
                        <option value="<?= $kls['id']; ?>"><?= $kls['semester'] . " " . $kls['kelas']; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="hari">hari</label>
                <select class="form-control" id="hari" name="hari">
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                </select>
            </div>
            <div class="form-group">
                <label for="mulai">Waktu Mulai</label>
                <input type="time" class="form-control" id="mulai" placeholder="waktu" name="jam_masuk" value="<?= $jadwal['jam_masuk']; ?>" required>
            </div>
            <div class="form-group">
                <label for="akhir">Waktu Berakhir</label>
                <input type="time" class="form-control" value="<?= $jadwal['jam_keluar']; ?>" id="akhir" placeholder="waktu" name="jam_keluar" required>
                <input type="text" class="form-control" value="<?= $jadwal['id']; ?>" id="id" placeholder="waktu" name="id" required>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" style="width: 100%;" id="foto" name="submit" value="Simpan">
            </div>
        </div>
    </form>
</div>