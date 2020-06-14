<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div>
                <div class="page-title mt-0">
                    <h2>Detail Berita</h2>
                </div>
                <div class="page-title-subheading">
                    Sistem Penerimaan Peserta Didik Baru
                </div>
            </div>
        </div>
        <div class="page-title-actions">
            <div id="addButton">
            </div>
        </div>
    </div>
</div>

<div class="berita-content">

    <div class="row">
        <div class="col-md-8 card">
            <div class="card-body">
                <h2> <?= $showDetail['judul_berita'];?> </h2>
                <p> <?= $showDetail['tgl_berita'];?> </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 card mt-3">
            <div class="card-body">
                <p class="isi-berita"><?= $showDetail['isi_berita'];?></p>
            </div>
        </div>
    </div>
</div>