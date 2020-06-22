<!-- MODAL INPUT RUANG UJIAN -->
<form id="inputFormRuangUjian" method="post">
    <div class="modal fade" id="inputRuangUjianModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="page-title mt-0 mb-3">
                        <h3>Input Ruang Ujian</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="position-relative form-group">
                                <label>Nama Ruang</label>
                                <input name="nm_gel" id="nmRuangUjian" placeholder="Masukan Nama Ruang" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="position-relative form-group">
                                <label>Pengawas</label>
                                <input name="nm_pengawas" id="nmPengawas" placeholder="Masukan Nama Pengawas" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">

                            <div class="position-relative form-group">
                                <label>Kapasitas</label>
                                <input name="max" id="maxCapacity" placeholder="" type="number" class="form-control" max="30" value="30">
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

<!-- MODAL DELETE -->
<div class="modal fade" id="deleteModalRuangUjian" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete Ruang Ujian </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure to delete this record?</p>
            </div>
            <div class="modal-footer">
                <form id="deleteFormRuangUjian" method="post">
                    <input type="hidden" name="id_ruang" id="deleteRuangUjianId" class="form-control">
                    <input type="hidden" id="deleteTotalRuangUjian" class="form-control">
                    <div class="position-relative form-group float-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-danger"><i class="fa fa-save mr-2"></i> Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- MODAL UPDATE -->
<form id="editFormRuangUjian" method="post">
    <div class="modal fade" id="editRuangUjianModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="idRuangUjianEdit" name="id_ruang">
                    <div class="page-title mt-0 mb-3">
                        <h3>Edit Ruang Ujian</h3>
                    </div>
                    <div class="position-relative form-group">
                        <label>Ruang Ujian</label>
                        <input name="nm_ruang" id="nmRuangUjianEdit" type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label>Pengawas</label>
                        <input name="nm_pengawas" id="nmPengawasEdit" type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label>Kapasitas Maksimum</label>
                        <input name="max" id="maxRuangEdit" type="number" class="form-control">
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