<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>

    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>

    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">

            <?php $hal = $this->uri->segment(1); ?>
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboards</li>
                <li>
                    <a href="<?= base_url() . 'dashboard'; ?>" class="<?= ($hal == 'dashboard') ? 'mm-active' : ''; ?>">
                        <i class="metismenu-icon fa fa-home"></i>
                        Homepage
                    </a>
                </li>

                <?php if (isAdmin()) : ?>
                    <li class="app-sidebar__heading">Data Sekolah</li>
                    <li>
                        <a href="<?= base_url() . 'school'; ?>" class="<?= ($hal == 'school') ? 'mm-active' : ''; ?>">
                            <i class="metismenu-icon fa fa-school"></i>
                            Identitas Sekolah
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url() . 'jurusan'; ?>" class="<?= ($hal == 'jurusan') ? 'mm-active' : ''; ?>">
                            <i class="metismenu-icon fa fa-building"></i>
                            Jurusan
                        </a>
                    </li>
                    <li class="app-sidebar__heading">Pendaftaran</li>
                    <li>
                        <a href="<?= base_url() . 'gelombang'; ?>" class="<?= ($hal == 'gelombang') ? 'mm-active' : ''; ?>">
                            <i class="metismenu-icon fa fa-layer-group"></i>
                            Gelombang
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url() . 'ruang-ujian'; ?>" class="<?= ($hal == 'ruang-ujian') ? 'mm-active' : ''; ?>">
                            <i class="metismenu-icon fa fa-chalkboard"></i>
                            Ruang Ujian
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url() . 'info-pendaftaran'; ?>" class="<?= ($hal == 'info-pendaftaran') ? 'mm-active' : ''; ?>">
                            <i class="metismenu-icon fa fa-info"></i>
                            Informasi Pendaftaran
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url() . 'berita'; ?>" class="<?= ($hal == 'berita') ? 'mm-active' : ''; ?>">
                            <i class="metismenu-icon fa fa-newspaper"></i>
                            Berita
                        </a>
                    </li>
                    <li class="app-sidebar__heading">Peserta</li>
                    <li>
                        <a href="<?= base_url() . 'peserta'; ?>" class="<?= ($hal == 'peserta') ? 'mm-active' : ''; ?>">
                            <i class="metismenu-icon fa fa-users"></i>
                            List Peserta
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (isUser()) : ?>

                    <li>
                        <a href="<?= base_url() . 'info-pendaftaran'; ?>" class="<?= ($hal == 'info-pendaftaran') ? 'mm-active' : ''; ?>">
                            <i class="metismenu-icon fa fa-info"></i>
                            Informasi Pendaftaran
                        </a>
                    </li>
                    <?php if (getPesertaData()['status'] == 'Invalid(Unpaid)' || getPesertaData()['status'] == 'Valid(Unpaid)' || getPesertaData()['status'] == 'Valid(Waiting)') : ?>
                    <li class="app-sidebar__heading">Pendaftaran</li>
                    <li>
                        <a href="<?= base_url() . 'konfirmasi'; ?>" class="<?= ($hal == 'konfirmasi') ? 'mm-active' : ''; ?>">
                            <i class="metismenu-icon fa fa-pen"></i>
                            Konfirmasi Pendaftaran
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if (getPesertaData()['status'] == 'Valid(Unpaid)' || getPesertaData()['status'] == 'Valid(Waiting)') : ?>
                        <li>
                            <a href="<?= base_url() . 'konfirmasi-pembayaran'; ?>" class="<?= ($hal == 'konfirmasi-pembayaran') ? 'mm-active' : ''; ?>">
                                <i class="metismenu-icon fa fa-file-invoice"></i>
                                Konfirmasi Pembayaran
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>

            </ul>

        </div>
    </div>
</div>