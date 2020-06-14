<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div>
                <div class="page-title mt-0">
                    <h2>Konfirmasi Pendaftaran</h2>
                </div>
                <div class="page-title-subheading">
                    <strong class="ml-2"><?= $logo['nm_apl']; ?></strong>
                </div>
            </div>
        </div>
        <div class="page-title-actions">
        </div>
    </div>
</div>
<div class="row mb-5">
    <div class="col-md-12">
        <h6>
            Lengkapi Formulir Berikut : <br>
            <small> Data Harus Lengkap. Setelah konfirmasi , jika user masih invalid silahkan kirimkan notif kepada administrator</small>
        </h6>
    </div>
    <div class="col-md-12">
        <?php $this->load->view('_adminpages/_partials/_alert'); ?>
    </div>
    <div class="col-md-12 mt-3">
        <?php echo validation_errors(); ?>
        <?php echo form_open_multipart('konfirmasi/create'); ?>
        <div id="accordion" class="accordion-wrapper mb-3">
            <div class="card">
                <div id="headingOne" class="card-header">
                    <button type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne" class="text-left m-0 p-0 btn btn-link btn-block">
                        <h5 class="m-0 p-0"> Data Pribadi </h5>
                    </button>
                    <div class="float-right">
                        <div id="dataPribadiCheck"></div>
                    </div>
                </div>
                <div data-parent="#accordion" id="collapseOne1" aria-labelledby="headingOne" class="collapse show">
                    <div class="card-body">
                        <?php $this->load->view('_adminpages/konfirmasi/form_pribadi'); ?>
                    </div>
                </div>
            </div>

            <div class="card">
                <div id="headingTwo" class="b-radius-0 card-header">
                    <button type="button" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="false" aria-controls="collapseTwo" class="text-left m-0 p-0 btn btn-link btn-block">
                        <h5 class="m-0 p-0">Data Orang Tua</h5>
                    </button>
                    <div class="float-right">
                        <div id="dataOrtuCheck"></div>
                    </div>
                </div>
                <div data-parent="#accordion" id="collapseOne2" class="collapse">
                    <div class="card-body">
                        <?php $this->load->view('_adminpages/konfirmasi/form_orangtua'); ?>
                    </div>
                </div>
            </div>

            <div class="card">
                <div id="headingThree" class="b-radius-0 card-header">
                    <button type="button" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="false" aria-controls="collapseTwo" class="text-left m-0 p-0 btn btn-link btn-block">
                        <h5 class="m-0 p-0">Dokumen</h5>
                    </button>
                </div>
                <div data-parent="#accordion" id="collapseOne3" class="collapse">
                    <div class="card-body">
                        <?php $this->load->view('_adminpages/konfirmasi/form_dokumen'); ?>
                    </div>
                </div>
            </div>


        </div> <!-- End Accordion -->
        <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary"> <i class="fa fa-save mr-2"></i>Konfirmasi </button>
            </div>
        </div>

        <?php echo form_close(); ?>
    </div>
</div>