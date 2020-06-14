<?php if ($this->session->flashdata('failLogin')) : ?>
    <div class="alert alert-danger" role="alert">
        Wrong Username or Password
    </div>
<?php endif; ?>

<?php if ($this->session->flashdata('failRegist')) : ?>
    <div class="alert alert-danger" role="alert">
        Something wrong when registration
    </div>
<?php endif; ?>

<?php if ($this->session->flashdata('successRegist')) : ?>
	<div class="alert alert-success" role="alert">
        Registration Success , Congratulation. Go Login for complete youre account information.
    </div>
<?php endif; ?>