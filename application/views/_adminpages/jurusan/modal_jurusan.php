<!-- MODAL INPUT JURUSAN -->

<div class="modal fade" id="inputJurusan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="inputFormJurusan" method="post">
                    <div id='messages'></div>
                    <div class="page-title mt-0 mb-3">
                        <h3>Input Jurusan</h3>
                    </div>
                    <div class="position-relative form-group">
                        <label for="kd_jurusan" class="">Kode Jurusan</label>
                        <input name="kd_jurusan" id="kdJurusan" placeholder="Masukan Kode Jurusan" type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="nm_jurusan" class="">Nama Jurusan</label>
                        <input name="nm_jurusan" id="nmJurusan" placeholder="Masukan Nama Jurusan" type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group float-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save mr-2"></i> Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- MODAL DELETE -->

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
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
                <form id="deleteForm" method="post">
                    <input type="hidden" name="deleteId" id="deleteId" class="form-control">
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

<div class="modal fade" id="editJurusanModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editFormJurusan" method="post">
                <div class="modal-body">

                    <input type="hidden" name="id_jurusan" id="idJurusanEdit" class="form-control" required>
                    <div class="page-title mt-0 mb-3">
                        <h3>Edit Jurusan</h3>
                    </div>
                    <div class="position-relative form-group">
                        <label for="kd_jurusan" class="">Kode Jurusan</label>
                        <input type="text" name="kd_jurusan" id="kdJurusanEdit" class="form-control" required>
                    </div>
                    <div class="position-relative form-group">
                        <label for="nm_jurusan" class="">Nama Jurusan</label>
                        <input type="text" name="nm_jurusan" id="nmJurusanEdit" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL CHANGE STATUS -->
<div class="modal fade" id="changeStatusJurusanModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
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
                <form id="changeStatusJurusanForm" method="post">
                    <input type="hidden" name="id_jurusan" id="idJurusanStatus" class="form-control">
                    <div class="position-relative form-group float-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-success"><i class="fa fa-sync mr-2"></i> Change Status</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>