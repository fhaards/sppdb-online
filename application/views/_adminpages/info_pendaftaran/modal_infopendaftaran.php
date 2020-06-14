<!-- MODAL UPDATE -->

<form id="editFormInfoPendaftaran" method="post">
    <div class="modal fade" id="editInfoPendaftaranModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body"> 
                    <input type="hidden" name="id_info" id="idInfoPendaftaran" class="form-control" required>
                    <div class="page-title mt-0 mb-5">
                        <h3>Edit Informasi Pendaftaran</h3>
                    </div>

                    <div class="scroll-area-lg">
                        <div class="position-relative form-group mb-5">
                            <label>Cara Mendaftar</label>
                            <textarea name="cara_mendaftar" id="caraMendaftarEdit" class="form-control">
                                <?= $infoPendaftaran['cara_mendaftar']; ?>
                            </textarea>
                        </div>

                        <div class="position-relative form-group mb-5">
                            <label>Informasi Pembayaran</label>
                            <textarea name="info_pembayaran" id="infoPembayaranEdit" class="form-control">
                                <?= $infoPendaftaran['info_pembayaran']; ?>
                            </textarea>
                        </div>

                        <div class="position-relative form-group mb-5">
                            <label>Dokumen</label>
                            <textarea name="dokumen" id="dokumenEdit" class="form-control">
                                <?= $infoPendaftaran['dokumen']; ?>
                            </textarea>
                        </div>

                        <div class="position-relative form-group mb-5">
                            <label>Welcome Messages</label>
                            <textarea name="welcome_msg" id="welcomeMessagesEdit" class="form-control tinymce" >
                                <?= $infoPendaftaran['welcome_msg']; ?>
                            </textarea>
                        </div>
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