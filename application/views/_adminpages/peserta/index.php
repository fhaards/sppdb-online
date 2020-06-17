<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div>
                <div class="page-title mt-0">
                    <h2>Peserta</h2>
                </div>
                <div class="page-title-subheading">
                    <strong class="ml-2"><?= getSchoolData()['nm_apl']; ?></strong>
                </div>
            </div>
        </div>
        <div class="page-title-actions">
            <!-- <div id="addButtonGel">
                <a href="javascript:void(0);" data-toggle="modal" class="btn btn-primary addPeserta">
                    <i class="fa fa-plus-circle mr-2"></i> Tambah Data
                </a>
            </div> -->
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table table-responsive-sm table-bordered table-striped" id="pesertaTable" style="width:100%">
            <thead>
                <tr>
                    <th></th>
                    <th class="search">KD Peserta</th>
                    <th class="search">Nama</th>
                    <th class="search">JK</th>
                    <th class="search">Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="listPeserta">

            </tbody>

        </table>
    </div>
</div>