<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div>
                <div class="page-title mt-0">
                    <h2>Data Sekolah</h2>
                </div>
                <div class="page-title-subheading">
                    <strong class="ml-2"><?= getSchoolData()['nm_apl'];?></strong>
                </div>
            </div>
        </div>
        <div class="page-title-actions">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="main-card card">
            <div class="card-header">
                <div class="col p-0"> Logo </div>                
                <div id="editLogoBtn"></div>
            </div>
            <div class="card-body">
                <img src="<?php echo base_url('assets/images/school/' .getSchoolData()['logo']); ?>" width="50%">
            </div>
        </div>
    </div>

    <div class="col-md-6 ">
        <div class="main-card card">
            <div class="card-header">
                <div class="col p-0"> Identitas Sekolah </div>
                <div id="editButtons">
                    <div id="editSekolahBtn"></div>
                </div>
            </div>
            <div class="card-body">
                <div class="position-relative form-group">
                    <div class="card-title">Nama Sekolah</div>
                    <div class="card-subtitle" id="nmSekolah"></div>
                </div>
                <div class="position-relative form-group">
                    <div class="card-title">Alamat</div>
                    <div class="card-subtitle" id="alamatSekolah"></div>
                </div>
                <div class="position-relative form-group">
                    <div class="card-title">No. Telp</div>
                    <div class="card-subtitle" id="noTelpSekolah"></div>
                </div>
                <div class="position-relative form-group">
                    <div class="card-title">Email</div>
                    <div class="card-subtitle" id="emailSekolah"></div>
                </div>
                <div class="position-relative form-group">
                    <div class="card-title">Nama Aplikasi</div>
                    <div class="card-subtitle" id="nmApl"></div>
                </div>
                <div class="position-relative form-group">
                    <div class="card-title">Initial</div>
                    <div class="card-subtitle" id="initialApl"></div>
                </div>
            </div>
        </div>
    </div>
</div>