<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-medal icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Welcome Dashboard
                <div class="page-title-subheading">
                    Selamat Datang di Aplikasi Penerimaan Mahasiswa Baru
                </div>
            </div>
        </div>
    </div>
</div>

<?php if (isUser()) : ?>
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-warning">
                Silahkan lengkapi formulir pendaftaran .
            </div>
        </div>
    </div>
<?php endif; ?>