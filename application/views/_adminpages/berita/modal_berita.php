<!-- MODAL INPUT Berita -->
<form id="inputFormBerita" method="post">
    <div class="modal fade" id="inputBeritaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id='messages'></div>
                    <div class="page-title mt-0 mb-3">
                        <h3>Input Berita</h3>
                    </div>
                    <div class="position-relative form-group">
                        <label for="judul_berita" class="">Judul Berita</label>
                        <input name="judul_berita" id="judulBerita" placeholder="Masukan Judul berita" type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="isi_berita" class="">Isi Berita</label>
                        <textarea name="isi_berita" id="isiBerita" placeholder="Masukan isi Berita" class="form-control"></textarea>
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



<!-- MODAL DELETE -->

<div class="modal fade" id="deleteBeritaModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete Berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure to delete this record?</p>
            </div>
            <div class="modal-footer">
                <form id="deleteFormBerita" method="post">
                    <input type="hidden" name="id_berita" id="deleteBeritaId" class="form-control">
                    <div class="position-relative form-group float-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-danger"><i class="fa fa-save mr-2"></i> Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>