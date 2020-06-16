<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'vendor/twbs/bootstrap/dist/css/bootstrap.min.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/main.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/custom-main.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/custom-admin.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/custom-fonts.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'vendor/datatables/datatables/media/css/dataTables.bootstrap4.min.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'vendor/components/font-awesome/css/all.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/modules/pe-icon-7-stroke/css/pe-icon.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/modules/pe-icon-7-stroke/css/pe-icon-helper.css'; ?>">
    <script src="<?php echo base_url() . 'assets/modules/sweetalert/sweetalert.min.js'; ?>" language="javascript"></script>
    <script src="<?php echo base_url() . 'vendor/tinymce/tinymce/tinymce.min.js'; ?>"></script>
    <script>
        tinymce.remove();
        tinymce.init({
            selector: 'textarea'
        });
    </script>

</head>

<body id="grand-parent">

    <?php $this->load->view($modal); ?>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <?php $this->load->view('_adminpages/_partials/_navbar'); ?>
        <div class="app-main">
            <?php $this->load->view('_adminpages/_partials/_sidebar'); ?>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <?php $this->load->view($content); ?>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url() . 'assets/js/main.js'; ?>"></script>
    <script src="<?php echo base_url() . 'vendor/components/jquery/jquery.min.js'; ?>"></script>
    <script src="<?php echo base_url() . 'vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js'; ?>"></script>
    <script src="<?php echo base_url() . 'vendor/twbs/bootstrap/dist/js/bootstrap.min.js'; ?>"></script>
    <script src="<?php echo base_url() . 'vendor/datatables/datatables/media/js/jquery.dataTables.min.js'; ?>"></script>
    <script src="<?php echo base_url() . 'vendor/datatables/datatables/media/js/dataTables.bootstrap4.min.js'; ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/operations/opAdmin.js'; ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/operations/opJurusan.js'; ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/operations/opSekolah.js'; ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/operations/opInfoPendaftaran.js'; ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/operations/opBerita.js'; ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/operations/opGelombang.js'; ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/operations/opKonfirmasi.js'; ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/operations/opPeserta.js'; ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/operations/opRuangUjian.js'; ?>"></script>

</body>

</html>