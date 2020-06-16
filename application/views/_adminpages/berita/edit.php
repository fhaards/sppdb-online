<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div>
                <div class="page-title mt-0">
                    <h2>Edit Berita</h2>
                </div>
                <div class="page-title-subheading">
                <strong class="ml-2"><?= getSchoolData()['nm_apl'];?></strong>
                </div>
            </div>
        </div>
        <div class="page-title-actions">
            <div id="addButton">
            </div>
        </div>
    </div>
</div>

<?php echo validation_errors(); ?>
    <?php echo form_open('berita/update/' . $showDetail['id_berita']); ?>
        <div class="position-relative form-group">
            <label for="judul_berita" class="">Judul Berita</label>
            <input name="judul_berita" value="<?= $showDetail['judul_berita'];?>" type="text" class="form-control">
        </div>
        <div class="position-relative form-group">
            <label for="isi_berita" class="">Isi Berita</label>
            <textarea name="isi_berita" style="min-height:500px" class="form-control">
                <?= $showDetail['isi_berita'];?>
            </textarea>
        </div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="submit" class="btn btn-primary"><i class="fa fa-save mr-2"></i> Submit</button>
    <?php echo form_close(); ?>