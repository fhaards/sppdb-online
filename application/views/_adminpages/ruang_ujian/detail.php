<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div>
                <div class="page-title mt-0">
                    <h2> Ruang Ujian </h2>
                </div>
                <div class="page-title-subheading">
                    <strong class="ml-2"><?= getSchoolData()['nm_apl']; ?></strong>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card mb-3">
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nama Ruangan : </label>
                    <br><?= $detailRuang['nm_ruang']; ?> <br>
                </div>
                <div class="form-group">
                    <label>Nama Pengawas :</label>
                    <br>Hermawan
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg13-0" class="nav-link show active"><i class="fa fa-list mr-2"></i>List View</a></li>
                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg13-1" class="nav-link show"><i class="fa fa-th mr-2"></i>Grid View</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane show active" id="tab-eg13-0" role="tabpanel">
                        <table class="table table-responsive-sm table-striped table-hover" id="detailRuangUjian">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Kode Peserta</th>
                                    <th>Nama Peserta</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; ?>
                                <?php foreach ($listDetailRuang as $Ldetail) : ?>
                                    <tr>
                                        <td><?= $no++;?></td>
                                        <td><?= $Ldetail['kd_peserta']; ?></td>
                                        <td><?= $Ldetail['nm_lengkap']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane show" id="tab-eg13-1" role="tabpanel">
                        <hr>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="card m-0">
                                    <div class="card-body m-0 p-1 text-center"> BOARD </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body p-2">
                                        <div class="row">
                                            <div class="col-2">
                                                <img class="rounded-circle" src="<?= base_url() . 'uploads/dokumen_peserta/_default_user.svg' ?>" alt="">
                                            </div>
                                            <div class="col-8">
                                                <span class="float-right">
                                                    Pengawas : <br>
                                                    Hermawan
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <?php foreach ($listDetailRuang as $Ldetail) : ?>
                                <div class="col-1 mb-2">
                                    <div class="card">
                                        <div class="card-body p-0">
                                            <img class="img-responsive fit-image" src="<?= base_url() . 'uploads/dokumen_peserta/' . $Ldetail['kd_peserta'] . '/' . $Ldetail['photo']; ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1"></div>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- 
<hr>
<?php
// $Max = $detailRuang['max'];
?>
<?php
// $maxPeserta = 5;
// $rowLength = 6;
// for ($i = 0; $i < $maxPeserta; $i++) {
//     for ($j = 0; $j < $rowLength; $j++) {
//         //echo "<i class='fa fa-chair'></i>"."";
//         foreach ($listDetailRuang as $Ldetail) :
//             echo $Ldetail['kd_peserta'];
//         endforeach;
//     }
//     echo ("</br>");
// }
?>


// $size = 7;
// for($i = 0; $i < $size; $i++){
//       for($j = 0; $j < $size; $j++){
//     if($i == 0 || $i == $size-1){
//       echo('@');
//     }elseif($j == 0 || $j == $size-1)
//       echo('@');
//     else
//       echo('*');
//   }
//   echo("</br>");

// }

?> -->