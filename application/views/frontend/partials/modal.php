<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content modal-login">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <?php $this->load->view('frontend/partials/alert'); ?>
                        </div>
                        <div class="col-md-3">
                            <div class="page-title mt-0 mb-3">
                                <h2>Login</h2>
                            </div>
                            <div class="page-sub-title mt-0 mb-3">
                                <p>Login dengan Email dan Password yang telah terdaftar</p>
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
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Login </button>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <div class="page-title mt-0 mb-3">
                                <h2>Registrasi</h2>
                            </div>
                            <div class="page-sub-title mt-0 mb-3">
                                <p>Gelombang pendaftaran telah dibuka anda dapat melakukan pendaftaran</p>
                            </div>
                            <?php if ($num_row < 1) : ?>
                                <p>Belum ada gelombang yang tersedia, tidak dapat mendaftar</p>
                            <?php else : ?>
                                <?php
                                foreach ($getGelStatus as $getGel) :
                                    $idGel = $getGel->id_gel;
                                endforeach;
                                ?>
                                <?php echo validation_errors(); ?>
                                <?php echo form_open('webapp/registrasi'); ?>
                                <input type="hidden" name="idGel" value="<?= $idGel; ?>">
                                <div class="position-relative form-group">
                                    <label for="exampleEmail" class="">Nama</label>
                                    <input name="nama" id="exampleEmail" placeholder="Masukan Nama Lengkap" type="text" class="form-control">
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
                                    <input name="confirm_password" id="examplePassword" placeholder="Masukan Password" type="password" class="form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label for="examplePassword" class="">Jurusan</label>
                                    <select name="jurId" class="form-control">
                                        <?php foreach ($getJurusan as $getJur) : ?>
                                            <option value="<?= $getJur['id_jurusan'] ?>"><?= $getJur['nm_jurusan']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="position-relative form-group">
                                    <button type="submit" class="btn btn-success">Registrasi </button>
                                </div>
                                <?php echo form_close(); ?>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <h6>Untuk menanyakan informasi seputar pendaftaran<br>
                                <small>Informasi yang disediakan :</small>
                            </h6>
                            <ul class="list-unstyled mt-5">
                                <li class="pb-1"><i class="fa fa-envelope mr-2"></i> <?= $logo['email']; ?></li>
                                <li class="pb-1"><i class="fa fa-phone mr-2"></i> <?= $logo['no_telp']; ?> </li>
                                <li class="pb-1"><i class="fa fa-map-marker-alt mr-2"></i> <?= $logo['alamat']; ?> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>