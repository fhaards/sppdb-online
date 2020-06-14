<div class="app-header header-shadow">
    <div class="app-header__logo">
        <div class="logo-src mb-2">
            <img src="<?php echo base_url('assets/images/school/' . $logo['logo']) ?>" height="30px">
            <strong class="ml-2"><?= $logo['initial_apl']; ?></strong>
        </div>
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
    <div class="app-header__content">
        <div class="app-header-left">
            <ul class="header-menu nav">
                <?php if (getPesertaData()['status'] == 'Valid(Waiting)') : ?>
                    <li class="nav-item">
                        <span class="" title="Menunggu Konfirmasi Panitia untuk Mendapatkan ruangan ujian">
                            Status : <strong class="text-info"><?= getPesertaData()['status']; ?></strong>
                        </span>
                    </li>
                <?php elseif(getPesertaData()['status'] == 'Valid(Unpaid)') :?>
                    <li class="nav-item">
                        <span class="" title="Silahkan lakukan konfirmasi pembayaran">
                            Status : <strong class="text-warning"> <?= getPesertaData()['status']; ?> </strong>
                        </span>
                    </li>
                <?php elseif(getPesertaData()['status'] == 'Invalid(Unpaid)') :?>
                    <li class="nav-item">
                        <span class="" title="Silahkan lengkapi data pendaftaran">
                            Status : <strong class="text-danger"> <?= getPesertaData()['status']; ?> </strong>
                        </span>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="app-header-right">
            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="btn-group drop-nav" id="btn-dropdown-nav">
                                <a data-toggle="dropdown" aria-haspopup="true" id="dropdownMenuButton" aria-expanded="false" class="p-0 btn">
                                    <img width="30" class="rounded-circle" src="assets/images/user.svg" alt="">
                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true" aria-labelledby="dropdownMenuButton" class="dropdown-menu dropdown-menu-right">
                                    <h6 tabindex="-1" class="dropdown-header"> <?= getUserData()['nama']; ?></h6>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <a href="<?= base_url() . 'webapp/logout'; ?>" tabindex="0" class="dropdown-item">
                                        <i class="fa fa-sign-out-alt mr-2"></i>
                                        Logout
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-left  ml-3 header-user-info">
                            <div class="widget-heading">
                                <?= getUserData()['nama']; ?>
                            </div>
                            <div class="widget-subheading">
                                <?= getUserData()['email']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>