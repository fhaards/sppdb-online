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
                    <?php if (getPesertaData()['status'] == 'Invalid(Unpaid)') : ?>
                        <p class="lead mb-4">Anda Belum melengkapi formulir pendaftaran</p>
                        <div class="alert alert-danger">
                            Silahkan lengkapi formulir pendaftaran . <a href="<?= base_url() . "konfirmasi"; ?>"> disini</a>
                        </div>
                    <?php  elseif(getPesertaData()['status'] == 'Valid(Unpaid)') : ?>
                        <p class="lead mb-4">Anda sudah melengkapi formulir pendaftaran</p>
                        <div class="alert alert-warning">
                            Silahkan lakukan konfirmasi pembayaran. <a href="<?= base_url() . "konfirmasi-pembayaran/create"; ?>"> disini</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
<?php endif; ?>