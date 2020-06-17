<div class="col-md-12 pl-0" id="inputPribadi">
    <?php $this->load->view('_adminpages/konfirmasi/header_user'); ?>
    <!-- aria-required="true" required data-msg-required="Please select any photo" -->
    <div class="form-group row mb-0">
        <label class="col-sm-2">Jurusan yang Dipilih</label>
        <div class="col-sm-10 d-flex">
            <p class="m-0"> : <?= getPesertaDataByUser()['nm_jurusan']; ?>
                <div id="buttonGantiJurusan">
                    <a href="javascript:void(0)" data-id-pendaftaran="<?= getPesertaDataByUser()['id_pendaftaran']; ?>" class="btn btn-info btn-sm pt-0 pb-0 ml-2 gantiJurusan">
                        <i class="fa fa-sync mr-2"></i> Ganti jurusan
                    </a>
                </div>
            </p>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Nisn</label>
                <input type="text" name="nisn" class="form-control inputKonfirmasi" value="<?= getPesertaDataByUser()['nisn']; ?>" required>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label>Jenis Kelamin</label>
                    <select name="jenisK" class="form-control" required>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label>Agama</label>
                    <select name="agama" class="form-control" required>
                        <option value="Islam">Islam</option>
                        <option value="Kristen Protestan">Kristen Protestan</option>
                        <option value="Kristen Katholik">Kristen Katholik</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label>Photo</label>
                    <br>
                    <div class="img-profile">
                        <?php if (getPesertaData()['photo'] == '') : ?>
                            <img width="100px" height="200px" class="" src="<?= base_url() . 'uploads/dokumen_peserta/_default_user.svg' ?>" alt="">
                        <?php else : ?>
                            <img class="" src="<?= base_url() . 'uploads/dokumen_peserta/' . getPesertaData()['kd_peserta'] . '/' . getPesertaData()['photo']; ?>" alt="">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <label>Upload Photo</label>
                    <input type="hidden" name="cekImgPhoto" value="<?= getPesertaData()['photo']; ?>">
                    <div class="custom-file">
                        <input type="file" name="photo" class="custom-file-input" id="customFile" value="">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-6">
                    <label>Tempat Lahir</label>
                    <input type="text" name="tempatLahir" class="form-control inputKonfirmasi" value="<?= getPesertaDataByUser()['tempat_lahir']; ?>" required>
                </div>
                <div class="col-md-6">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tglLahir" class="form-control inputKonfirmasi" value="<?= getPesertaDataByUser()['tgl_lahir']; ?>" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label>Alamat Provinsi</label>
                    <select id="getProvince" name="provinsi" class="form-control" data-id-province="<?= getPesertaDataByUser()['provinsi']; ?>">
                    </select>
                </div>
                <div class="col-md-6">
                    <label>Alamat Kota</label>
                    <select id="getCity" name="kota" class="form-control" data-id-city="<?= getPesertaDataByUser()['kota']; ?>" required>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label>Alamat Detail</label>
                <input type="text" name="alamat" class="form-control inputKonfirmasi" value="<?= getPesertaDataByUser()['alamat']; ?>" required>
            </div>
        </div>

    </div>
</div>