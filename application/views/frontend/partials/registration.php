<div class='error_msg'></div>
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


<?php
$stGel = $getGelStatus['status'];
$nmGel = $getGelStatus['nm_gel'];
if ($stGel == 'NonAktif') :
?>

<?php else : ?>

<?php endif; ?>