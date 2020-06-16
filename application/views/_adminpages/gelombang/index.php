<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div>
                <div class="page-title mt-0">
                    <h2>Gelombang</h2>
                </div>
                <div class="page-title-subheading">
                    <strong class="ml-2"><?= getSchoolData()['nm_apl'];?></strong>
                </div>
            </div>
        </div>
        <div class="page-title-actions">
            <div id="addButtonGel">
                <a href="javascript:void(0);" data-toggle="modal" class="btn btn-primary addGelombang">
                    <i class="fa fa-plus-circle mr-2"></i> Tambah Data
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table table-striped table-responsive-sm table-bordered" id="gelombangTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gelombang</th>
                    <th>Tgl Mulai</th>
                    <th>Tgl Berakhir</th>
                    <th>Total Peserta</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="listGelombang">

            </tbody>
        </table>
    </div>
</div>