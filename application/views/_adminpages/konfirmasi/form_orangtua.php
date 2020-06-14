<div class="row">
    <div class="col-md-6">
        <h5>Informasi Ayah</h5>
        <hr>
        <div class="form-group">
            <label>Nama Ayah</label>
            <input type="text" name="nm_ayah" class="form-control inputKonfirmasiOrtu" value="<?= getPesertaData()['nm_ayah']; ?>" required>
        </div>
        <div class="form-group">
            <label>Pekerjaan Ayah</label>
            <select name="pekerjaan_ayah" class="form-control">
                <?php if (getPesertaData()['pekerjaan_ayah'] != ' ') { ?>
                    <option value="<?= getPesertaData()['pekerjaan_ayah']; ?>" selected><?= getPesertaData()['pekerjaan_ayah']; ?></option>
                <?php } ?>
                <option value="Wiraswasta">Wiraswasta</option>
                <option value="Pegawai Negri">Pegawai Negri</option>
                <option value="Guru">Guru</option>
                <option value="Dll">Dll</option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <h5>Informasi Ibu</h5>
        <hr>
        <div class="form-group">
            <label>Nama Ibu</label>
            <input type="text" name="nm_ibu" class="form-control inputKonfirmasiOrtu" value="<?= getPesertaData()['nm_ibu']; ?>" required>
        </div>
        <div class="form-group">
            <label>Pekerjaan Ibu</label>
            <select name="pekerjaan_ibu" class="form-control">
                <?php if (getPesertaData()['pekerjaan_ibu'] != ' ') { ?>
                    <option value="<?= getPesertaData()['pekerjaan_ibu']; ?>" selected><?= getPesertaData()['pekerjaan_ibu']; ?></option>
                <?php } ?>
                <option value="Wiraswasta">Wiraswasta</option>
                <option value="Pegawai Negri">Pegawai Negri</option>
                <option value="Guru">Guru</option>
                <option value="Dll">Dll</option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Gaji Orangtua</label>
            <select name="gaji_orangtua" class="form-control">
                <?php if ($getAllDataPeserta['gaji_orangtua'] != ' ') { ?>
                    <option value="<?= getPesertaData()['gaji_orangtua']; ?>" selected><?= getPesertaData()['gaji_orangtua']; ?></option>
                <?php } ?>
                <option value="1jt - 2jt">1jt - 2jt</option>
                <option value="2jt - 4jt">2jt - 4jt</option>
                <option vlue="4jt - 6jt">4jt - 6jt</option>
                <option value="> 6jt">> 6jt </option>
            </select>
        </div>
    </div>
</div>