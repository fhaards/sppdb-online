<script src="<?php echo base_url() . 'assets/js/operations/opAdmin.js'; ?>"></script>

<?php if ($jsloader == 'opjurusan') : ?>
    <script src="<?php echo base_url() . 'assets/js/operations/opJurusan.js'; ?>"></script>

<?php elseif ($jsloader == 'opSekolah') : ?>
    <script src="<?php echo base_url() . 'assets/js/operations/opSekolah.js'; ?>"></script>

<?php elseif ($jsloader == 'opGelombang') : ?>
    <script src="<?php echo base_url() . 'assets/js/operations/opGelombang.js'; ?>"></script>

<?php elseif ($jsloader == 'opRuangUjian') : ?>
    <script src="<?php echo base_url() . 'assets/js/operations/opRuangUjian.js'; ?>"></script>

<?php elseif ($jsloader == 'opInfoPendaftaran') : ?>
    <script src="<?php echo base_url() . 'assets/js/operations/opInfoPendaftaran.js'; ?>"></script>

<?php elseif ($jsloader == 'opBerita') : ?>
    <script src="<?php echo base_url() . 'assets/js/operations/opBerita.js'; ?>"></script>

<?php elseif ($jsloader == 'opPeserta') : ?>
    <script src="<?php echo base_url() . 'assets/js/operations/opPeserta.js'; ?>"></script>

<?php elseif ($jsloader == 'opKonfirmasi') : ?>
    <script src="<?php echo base_url() . 'assets/js/operations/opKonfirmasi.js'; ?>"></script>
<?php endif; ?>