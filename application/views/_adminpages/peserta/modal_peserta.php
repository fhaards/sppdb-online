<!-- MODAL CHANGE STATUS -->
<form id="editFormPeserta" method="post">
    <div class="modal fade" id="changeStatusPesertaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="idPeserta" name="id_pendaftaran">
                    <div class="page-title mt-0 mb-3">
                        <h3>Ganti Status Peserta</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6" id="buktiPembayaran">
                            <div class="position-relative form-group">
                                <label>Bukti pembayaran</label><br>
                                <span id="cekStatusPeserta"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label>Nama Peserta</label>
                                <h6 id="nmPeserta"></h6>
                            </div>
                            <div class="position-relative form-group">
                                <label>Ganti Status Ke </label>
                                <select name="status" id="statusPeserta" class="form-control">
                                    <option value="Invalid(Unpaid)">Invalid(Unpaid)</option>
                                    <option value="Valid(Unpaid)">Valid(Unpaid)</option>
                                    <option value="Valid(Waiting)">Valid(Waiting)</option>
                                    <option value="Valid(Complete)">Valid(Complete)</option>
                                </select>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <div class="position-relative form-group float-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save mr-2"></i> Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>