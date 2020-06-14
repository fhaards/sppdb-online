<?php if ($this->session->flashdata('successConf')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Updated Success.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php elseif ($this->session->flashdata('failConf')) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Oops ! Updated Error .
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php elseif ($this->session->flashdata('failUpload')) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Ooops !</strong> gagal mengupload file, perhatikan ukuran maximum dan tipe file yang akan diupload.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php elseif ($this->session->flashdata('successUpload')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat !</strong> file yang ada kirim berhasil terkirim.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>