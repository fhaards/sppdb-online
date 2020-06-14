<section class="row section section2" id="section2" data-anchor="prosedur">
    <div class="container-fluid section-main ml-md-5 mr-md-5">
        <div class="section-header">
            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-info closeProsedur"><i class="fa fa-times"></i></button>
                </div>
                <div class="col-md-12">
                    <div class="page-title">
                        <h1>Prosedur</h1>
                    </div>
                    <div class="page-sub-title">
                        <p class="lead">Berikut beberapa prosedur yang harus di ikuti calon Peserta PPDB</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-content section-prosedur mt-2 mb-5" id="section-prosedur">
            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                <li class="nav-item">
                    <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                        <span>Cara Mendaftar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                        <span>Informasi Pembayaran</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#tab-content-2">
                        <span>Dokumen</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-prosedur">
                                <div class="card-body">
                                    <?= $infoPendaftaran['cara_mendaftar']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-prosedur">
                                <div class="card-body">
                                    <?= $infoPendaftaran['info_pembayaran']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-prosedur">
                                <div class="card-body">
                                    <?= $infoPendaftaran['dokumen']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 text-center">
                <div class="col"></div>
                <div class="col-md-4">
                    <button class="btn btn-info openProsedur"><i class="fa fa-eye mr-2"></i> Selengkapnya </button>
                </div>
                <div class="col"></div>
            </div>
        </div>

    </div>
</section>