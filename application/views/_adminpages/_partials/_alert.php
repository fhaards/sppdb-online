<?php if ($this->session->flashdata('successConf')) : ?>
    <div class="alert alert-success" role="alert">
        Success Updated.
    </div>
<?php endif; ?>

<?php if ($this->session->flashdata('failConf')) : ?>
    <div class="alert alert-danger" role="alert">
        Error Updated !!
    </div>
<?php endif; ?>

<?php if ($this->session->flashdata('failUpload')) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Ooops !</strong> gagal mengupload file, perhatikan ukuran maximum dan tipe file yang akan diupload.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<?php if ($this->session->flashdata('successUpload')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat !</strong> file yang ada kirim berhasil terkirim.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>