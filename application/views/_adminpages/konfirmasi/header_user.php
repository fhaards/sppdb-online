<input type="hidden" name="idPendaftaran" value="<?= getPesertaDataByUser()['id_pendaftaran']; ?>">
    <div class="form-group row mb-0">
        <label class="col-sm-2">No. Peserta</label>
        <div class="col-sm-10">
            <p class="m-0"> : <?= getPesertaDataByUser()['kd_peserta']; ?></p>
        </div>
    </div>

    <div class="form-group row mb-0">
        <label class="col-sm-2">Gelombang</label>
        <div class="col-sm-10">
            <p class="m-0"> : <?= getPesertaDataByUser()['nm_gel']; ?></p>
        </div>
    </div>

    <div class="form-group row mb-0">
        <label class="col-sm-2">Nama</label>
        <div class="col-sm-10">
            <p class="m-0"> : <?= getPesertaDataByUser()['nm_lengkap']; ?></p>
        </div>
    </div>

