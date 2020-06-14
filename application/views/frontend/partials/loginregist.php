<div class="login-regist" id="login-regist">
    <div class="login-regist-wrapper">
        <div class="container-fluid scrollbar-container">
            <div class="row pl-md-5 pt-md-3">
                <div class="col-md-6">
                    <div class="close-btn">
                        <a href="javascript:void(0);" class="closeLogin text-dark">
                            <i class="fa fa-times fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row p-md-5">
                <div class="col-md-5">
                    <?php $this->load->view('frontend/partials/alert'); ?>
                    <div class='error_msg'></div>
                    <div class="page-title mt-0 mb-3">
                        <h2>Login</h2>
                    </div>
                    <?php echo validation_errors(); ?>
                    <?php echo form_open('webapp/login'); ?>
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Email</label>
                        <input name="email" id="exampleEmail" placeholder="Email yang terdaftar" type="email" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="examplePassword" class="">Password</label>
                        <input name="password" id="examplePassword" placeholder="Masukan Password" type="password" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <button type="submit" class="btn btn-primary">Login </button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5">                    
                    <div class='error_msg'></div>
                    <div class="page-title mt-0 mb-3">
                        <h2>Registrasi</h2>
                    </div>
                    <?php echo validation_errors(); ?>
                    <?php echo form_open('webapp/registrasi'); ?>
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Nama</label>
                        <input name="email" id="exampleEmail" placeholder="Masukan Nama Lengkap" type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Email</label>
                        <input name="email" id="exampleEmail" placeholder="Email yang terdaftar" type="email" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="examplePassword" class="">Password</label>
                        <input name="password" id="examplePassword" placeholder="Masukan Password" type="password" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="examplePassword" class="">Re-type Password</label>
                        <input name="password" id="examplePassword" placeholder="Masukan Password" type="password" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <button type="submit" class="btn btn-success">Registrasi </button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>