<div class="card bg-light mb-3" style="max-width: 100%;">
    <div class="card-header bg-primary"><?= $judul; ?></div>
    <div class="card-body">
        <form action="<?= base_url($controller . "/insertData") ?>" method="post">
            <div class="form-group">
                <label for="nip">NIP</label>
                <select class="form-control" id="nip" name="nip">
                    <?php
                    foreach ($result as $data) {

                    ?>
                        <option value="<?= $data['nip']; ?>"><?= $data['nama']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" id="password" placeholder="password" name="password">
            </div>
            <div class="form-group">
                <label for="level">Role</label>
                <select class="form-control" id="level" name="level">
                    <option value="1">Admin</option>
                    <option value="2">Dosen</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="submit" class="btn btn-success" style="width: 100%;">
            </div>
        </form>
    </div>
</div>