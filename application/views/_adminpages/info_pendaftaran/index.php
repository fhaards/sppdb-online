<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div>
                <div class="page-title mt-0">
                    <h2>Informasi Pendaftaran</h2>
                </div>
                <div class="page-title-subheading">
                    <strong class="ml-2"><?= getSchoolData()['nm_apl'];?></strong>
                </div>
            </div>
        </div>
        <div class="page-title-actions">
        <?php if(isAdmin()) : ?>
            <div id="editButtonsInfo">
                <div id="editInfoPButton"></div>
            </div>
        <?php endif;?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div id="accordion" class="accordion-wrapper mb-3">

            <div class="card">
                <div id="headingOne" class="card-header">
                    <button type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne" class="text-left m-0 p-0 btn btn-link btn-block">
                        <h5 class="m-0 p-0"> Cara Mendaftar </h5>
                    </button>
                </div>
                <div data-parent="#accordion" id="collapseOne1" aria-labelledby="headingOne" class="collapse show">
                    <div class="card-body">
                       <div id="caraMendaftar"></div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div id="headingTwo" class="b-radius-0 card-header">
                    <button type="button" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="false" aria-controls="collapseTwo" class="text-left m-0 p-0 btn btn-link btn-block">
                        <h5 class="m-0 p-0">Informasi Pembayaran</h5>
                    </button>
                </div>
                <div data-parent="#accordion" id="collapseOne2" class="collapse">
                    <div class="card-body">  
                        <div id="informasiPembayaran"></div>
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
                        <div id="dokumen"></div>
                    </div>
                </div>
            </div>
            <?php if(isAdmin()) : ?>
            <div class="card">
                <div id="headingFourth" class="card-header">
                    <button type="button" data-toggle="collapse" data-target="#collapseOne4" aria-expanded="false" aria-controls="collapseThree" class="text-left m-0 p-0 btn btn-link btn-block">
                        <h5 class="m-0 p-0">Welcome Messages</h5>
                    </button>
                </div>
                <div data-parent="#accordion" id="collapseOne4" class="collapse">
                    <div class="card-body">
                        <div id="welcomeMessages"></div>
                    </div>
                </div>
            </div>
            <?php endif;?>

        </div>
    </div>
</div>