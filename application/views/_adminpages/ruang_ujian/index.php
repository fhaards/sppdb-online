<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div>
                <div class="page-title mt-0">
                    <h2>Ruang Ujian</h2>
                </div>
                <div class="page-title-subheading">
                    <strong class="ml-2"><?= getSchoolData()['nm_apl'];?></strong>
                </div>
            </div>
        </div>
        <div class="page-title-actions">
            <div id="addButtonRuang">
                <a href="javascript:void(0);" data-toggle="modal" class="btn btn-primary addRuangUjian">
                    <i class="fa fa-plus-circle mr-2"></i> Tambah Data
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table table-responsive-sm table-striped table-hover" id="ruangUjianTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Ruangan</th>
                    <th>Pengawas</th>
                    <th>Kapasitas Maksimum</th>
                    <th>Jumlah Peserta</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="listRuangUjian">

            </tbody>
        </table>
    </div>
</div>