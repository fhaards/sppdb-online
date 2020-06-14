<!-- MODAL INPUT JURUSAN -->
<form id="inputFormGelombang" method="post">
    <div class="modal fade" id="inputGelombangModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="page-title mt-0 mb-3">
                        <h3>Input Gelombang</h3>
                    </div>
                    <div class="position-relative form-group">
                        <label>Gelombang</label>
                        <input name="nm_gel" id="nmGelombang" placeholder="Masukan Nama Gelombang" type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label>Tanggal Mulai</label>
                        <input name="tgl_mulai" id="tglMulaiGel" placeholder="Masukan Tgl Mulai" type="date" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label>Tanggal Berakhir</label>
                        <input name="tgl_akhir" id="tglBerakhirGel" placeholder="Masukan Tgl Berakhir" type="date" class="form-control">
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

<div class="modal fade" id="deleteModalGelombang" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete Jurusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure to delete this record?</p>
            </div>
            <div class="modal-footer">
                <form id="deleteFormGelombang" method="post">
                    <input type="hidden" name="id_gel" id="deleteGelombangId" class="form-control">
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
<form id="editFormGelombang" method="post">
    <div class="modal fade" id="editGelombangModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" id="idGelombangEdit" name="id_gel">
                    <div class="page-title mt-0 mb-3">
                        <h3>Input Gelombang</h3>
                    </div>
                    <div class="position-relative form-group">
                        <label>Gelombang</label>
                        <input name="nm_gel" id="nmGelombangEdit" placeholder="Masukan Nama Gelombang" type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label>Tanggal Mulai</label>
                        <input name="tgl_mulai" id="tglMulaiGelEdit" placeholder="Masukan Tgl Mulai" type="date" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label>Tanggal Berakhir</label>
                        <input name="tgl_akhir" id="tglBerakhirGelEdit" placeholder="Masukan Tgl Berakhir" type="date" class="form-control">
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

<!-- MODAL CHANGE STATUS -->
<div class="modal fade" id="changeStatusGelombangModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Change Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure to change status gelombang ?</p>
            </div>
            <div class="modal-footer">
                <form id="changeStatusGelombangForm" method="post">
                    <input type="hidden" name="id_gel" id="idgelombangStat" class="form-control">
                    <div class="position-relative form-group float-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-success"><i class="fa fa-sync mr-2"></i> Change Status</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>