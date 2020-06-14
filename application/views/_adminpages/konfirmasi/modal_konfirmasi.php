<!-- MODAL CHANGE STATUS -->
<div class="modal fade" id="changeJurusanPilihModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Ganti Jurusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="changeJurusanPilihForm" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id_pendaftaran" id="idPesertaPendaftaran" class="form-control">
                    <div class="form-group">
                        <label>Pilih Jurusan </label>
                        <select name="id_jurusan" class="form-control" id="idPilihJurusan">
                            <?php foreach ($getJurusan as $key => $getJur) : ?>
                                <?php if ($getJur['id_jurusan'] == $getDataPeserta['id_jurusan']) { ?>
                                    <option value="<?= $getJur['id_jurusan']; ?>" selected><?= $getJur['nm_jurusan']; ?></option>
                                <?php } else { ?>
                                    <option value="<?= $getJur['id_jurusan']; ?>"><?= $getJur['nm_jurusan']; ?></option>
                                <?php } ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="position-relative form-group float-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-info"><i class="fa fa-sync mr-2"></i> Ganti Jurusan </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>