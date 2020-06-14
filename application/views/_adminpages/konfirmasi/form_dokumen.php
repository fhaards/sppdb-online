<?php
$getImgIjasah = $getAllDataPeserta['img_ijasah'];
$getImgSkhun = $getAllDataPeserta['img_skhun'];
$getImgR4 = $getAllDataPeserta['img_raport_s4'];
$getImgR5 = $getAllDataPeserta['img_raport_s5'];
?>
<div class="row">
    <div class="col-md-6">
        <h5>Upload Dokumen , Ijasah , SKHUN, Rapor Semester 4 dan 5</h5>
        <input type="hidden" name="imgIjasahCek" class="form-control" value="<?= $getImgIjasah; ?>">
        <input type="hidden" name="imgSkhunCek" class="form-control" value="<?= $getImgSkhun; ?>">
        <input type="hidden" name="imgR4Cek" class="form-control" value="<?= $getImgR4; ?>">
        <input type="hidden" name="imgR5Cek" class="form-control" value="<?= $getImgR5; ?>">
    </div>
</div>

<?php if ($getImgIjasah != '' && $getImgSkhun != '' && $getImgR4 != '' && $getImgR5 != '') : ?>
    <div class="row mb-3 mt-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <img src="<?php echo base_url('uploads/dokumen_peserta/' . $getAllDataPeserta['img_ijasah']) ?>" height="150px" width="120px">
                    <img src="<?php echo base_url('uploads/dokumen_peserta/' . $getAllDataPeserta['img_skhun']) ?>" height="150px" width="120px">
                    <img src="<?php echo base_url('uploads/dokumen_peserta/' . $getAllDataPeserta['img_raport_s4']) ?>" height="150px" width="120px">
                    <img src="<?php echo base_url('uploads/dokumen_peserta/' . $getAllDataPeserta['img_raport_s5']) ?>" height="150px" width="120px">
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label>Ijasah</label>
                    <div class="custom-file">
                        <input type="file" name="ijasah" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label>SKHUN</label>
                    <div class="custom-file">
                        <input type="file" name="skhun" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row mt-3">

    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label>Raport Semester 4</label>
                    <div class="custom-file">
                        <input type="file" name="rsem4" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label>Raport Semester 5</label>
                    <div class="custom-file">
                        <input type="file" name="rsem5" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>