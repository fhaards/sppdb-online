<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div>
                <div class="page-title mt-0">
                    <h2>Berita</h2>
                </div>
                <div class="page-title-subheading">
                    <strong class="ml-2"><?= $logo['nm_apl'];?></strong>
                </div>
            </div>
        </div>
        <div class="page-title-actions">
            <div id="addButton">
                <a href="javascript:void(0);" data-toggle="modal" class="btn btn-primary addBtnBerita">
                    <i class="fa fa-plus-circle mr-2"></i> Tambah Data
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table table-striped table-responsive-sm" id="beritaTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Berita</th>
                    <th>Tgl Berita</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="listBerita">

            </tbody>
        </table>
    </div>
</div>