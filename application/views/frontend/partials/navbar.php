<div class="app-header nav-webapp fixed" id="navWebapps">

    <div class="app-header__logo">
        <div class="logo-src mb-2">
            <img src="<?php echo base_url('assets/images/school/' . $logo['logo']) ?>" height="30px">
            <strong class="ml-2"><?= $logo['initial_apl'];?></strong>
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

    <div class="app-header__content">
        <div class="app-header-right">
            <ul class="header-menu nav">

                <li class="btn-group nav-item">
                    <a class="nav-link navbar-link" href="#" data-scroll="home">
                        <!-- <i class="nav-link-icon fa fa-home"> </i> -->
                        Home
                    </a>
                </li>
                
                <li class="btn-group nav-item">
                    <a class="nav-link navbar-link" href="#" data-scroll="prosedur">
                        <!-- <i class="nav-link-icon fa fa-edit"></i> -->
                        Prosedur
                    </a>
                </li>

                <li class="btn-group nav-item">
                    <a class="nav-link navbar-link" href="#"  data-scroll="berita">
                        <!-- <i class="nav-link-icon fa fa-edit"></i> -->
                        Berita
                    </a>
                </li>

                <li class="btn-group  nav-item">
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#modalLogin" class="nav-link navbar-link">
                        <!-- <i class="nav-link-icon fa fa-user"></i> -->
                        Registrasi / Login
                    </a>
                </li>

                <!-- <li class="btn-group  nav-item">
                    <a href="javascript:void(0);" class="nav-link navbar-link openLogin">
                        <i class="nav-link-icon fa fa-user"></i>
                        Registrasi / Login
                    </a>
                </li> -->

                
            </ul>
        </div>
    </div>

</div>