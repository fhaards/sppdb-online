<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div>
                <div class="page-title mt-0">
                    <h2>Konfirmasi Pembayaran</h2>
                </div>
                <div class="page-title-subheading">
                    <strong class="ml-2"><?= getSchoolData()['nm_apl']; ?></strong>
                </div>
            </div>
        </div>
        <div class="page-title-actions">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <?php $this->load->view('_adminpages/_partials/_alert'); ?>
    </div>
</div>

<?php echo validation_errors(); ?>
<?php echo form_open_multipart('konfirmasi-pembayaran/create'); ?>
<div class="row mb-5">
    <div class="col-md-12">
        <?php $this->load->view('_adminpages/konfirmasi/header_user'); ?>
    </div>
</div>


<div class="row mb-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <?php if (getPesertaData()['img_bukti'] != '') : ?>
                    <span class="badge badge-success"><small><i class="fa fa-check mr-2"></i> Bukti Pembayaran Sudah di Upload</small></span>
                <?php else : ?>
                    <span class="badge badge-danger"><small><i class="fa fa-times mr-2"></i> Bukti Pembayaran Belum di Upload </small> </span>
                <?php endif; ?>
            </div>
            <div class="card-body">
                <div class="form-group d-flex">
                    <span>
                        <label class="label">Maximum Size<br> Type</label>
                    </span>
                    <span class="ml-2"> : 5 mb <br> : jpg / png </span>
                </div>
                <hr>
                <?php if (getPesertaData()['img_bukti'] != '') : ?>
                    <img src="<?php echo base_url('uploads/dokumen_peserta/' . getPesertaData()['kd_peserta'] . '/bukti_pembayaran'.'/' .getPesertaData()['img_bukti']); ?>" height="150px" width="120px">
                    <hr>
                <?php endif; ?>

                <div class="form-group">
                    <input type="hidden" name="cekImgBukti" value="<?= getPesertaData()['img_bukti']; ?>">
                    <label>Upload Bukti Pembayaran</label>
                    <div class="custom-file">
                        <input type="file" name="bukti" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"> <i class="fa fa-save mr-2"></i>Kirim Bukti Pembayaran </button>
                </div>
            </div>
        </div>
    </div>
</div>


<?php echo form_close(); ?>