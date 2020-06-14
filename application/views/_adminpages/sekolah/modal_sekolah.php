<!-- MODAL UPDATE -->
<form id="editFormSekolah" method="post" enctype="multipart/form-data">
    <div class="modal fade" id="editSekolahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <input type="hidden" name="idSekolah" id="idSekolahEdit" class="form-control" required>
                    <div class="page-title mt-0 mb-3">
                        <h3>Edit Data Sekolah</h3>
                    </div>
                    <div class="position-relative form-group">
                        <label>Nama Sekolah</label>
                        <input type="text" name="nm_sekolah" id="nmSekolahEdit" class="form-control" required>
                    </div>
                    <div class="position-relative form-group">
                        <label>Email</label>
                        <input type="text" name="email" id="emailSekolahEdit" class="form-control" required>
                    </div>
                    <div class="position-relative form-group">
                        <label>No. Telp</label>
                        <input type="text" name="no_telp" id="noTelpSekolahEdit" class="form-control" required>
                    </div>
                    <div class="position-relative form-group">
                        <label>Alamat</label>
                        <!-- id="alamatSekolahEdit"  -->
                        <input type="text" name="alamat" id="alamatSekolahEdit" class="form-control" required>
                    </div>
                    <div class="position-relative form-group">
                        <label>Nama Aplikasi</label>
                        <input type="text" name="nm_apl" id="nmAplEdit" class="form-control" required>
                    </div>
                    <div class="position-relative form-group">
                        <label>Initial</label>
                        <input type="text" name="initial_apl" id="initialAplEdit" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="position-relative form-group float-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save mr-2"></i> Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- MODAL UPDATE -->
<?php echo form_open_multipart('school/update-logo'); ?>
<div class="modal fade" id="editLogoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id_sekolah" id="idSekolahLogo" class="form-control" required>
                <div class="page-title mt-0 mb-3">
                    <h3>Edit Logo</h3>
                </div>
                <div class="position-relative form-group">
                    <label>Logo</label>
                    <input name="file" type="file" id="image_file" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <div class="position-relative form-group float-right">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save mr-2"></i> Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>