<section class="row section section3" id="section3" data-anchor="berita">
    <div class="container-fluid section-main ml-md-5 mr-md-5 mt-md-5">
        <div class="section-header">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title">
                        <h1>Berita</h1>
                    </div>
                    <div class="page-sub-title">
                        <p class="lead">Beberapa berita seputar PPDB</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-content section-prosedur mt-2 mb-5">
            <div class="row mb-2">
                <div class="col-md-8">
                    <table id="beritaTable" class="table" border="0">
                        <thead>
                            <tr>
                                <th> Lastest News </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($getBerita as $gb) : ?>
                                <tr>
                                    <td class="m-0 pb-1 pl-0 pr-0">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="card-title row">
                                                    <div class="col-md-9">
                                                        <?= $gb['judul_berita'] ?>
                                                    </div>
                                                    <div class="col"></div>
                                                </div>
                                                <div class="pt-0"><?= $gb['tgl_berita'] ?></div>
                                                <div class="pt-3">
                                                    <?php
                                                    echo substr($gb['isi_berita'], 0, 350);

                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>