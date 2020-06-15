<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-medal icon-gradient bg-mean-fruit"></i>
            </div>
            <div class="ml-0">
                Welcome Dashboard
                <div class="page-title-subheading pl-2 pt-2">
                    Selamat Datang di Aplikasi Penerimaan Mahasiswa Baru
                </div>
            </div>
        </div>
    </div>
</div>

<?php if (isUser()) : ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="display-5">Hello, <?= getPesertaData()['nm_lengkap'] ?></h1>
                    <hr>
                    <?php if (getPesertaData()['status'] == 'Invalid(Unpaid)') : ?>
                        <p class="lead mb-4">Anda Belum melengkapi formulir Pendaftaran</p>
                        <div class="alert alert-danger">
                            Silahkan lengkapi formulir Pendaftaran . <a href="<?= base_url() . "konfirmasi"; ?>"> disini</a>
                        </div>
                    <?php elseif (getPesertaData()['status'] == 'Valid(Unpaid)') : ?>
                        <p class="lead mb-4">Anda sudah melengkapi formulir Pendaftaran</p>
                        <div class="alert alert-warning">
                            Silahkan lakukan konfirmasi Pembayaran. <a href="<?= base_url() . "konfirmasi-pembayaran/create"; ?>"> disini</a>
                        </div>

                    <?php elseif (getPesertaData()['status'] == 'Valid(Waiting)') : ?>
                        <p class="lead mb-4">Anda sudah melengkapi formulir <strong>Pendaftaran & Pembayaran</strong> <br>
                            <small>Silahkan tunggu hingga panitia mengkonfirmasi data , lalu anda akan mendapatkan Kartu Ujian</small> </p>
                    <?php endif; ?>

                    <div class="alert alert-info mt-1">
                        Untuk melihat informasi lebih lanjut klik <a href="<?= base_url() . 'info-pendaftaran'; ?>"> disini </a>
                    </div>
                    <hr>
                    <div class="widget-content p-0">
                        <div class="widget-content-outer">
                            <div class="widget-content-left fsize-1">
                                <div class="text-muted opacity-6">Registration Progress</div>
                            </div>
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left pr-2 fsize-1">
                                    <div class="widget-numbers mt-0 fsize-3 text-info">85%</div>
                                </div>
                                <div class="widget-content-right w-100">
                                    <div class="progress-bar-xs progress">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>