<table border='1' class="table table-bordered table-responsive-sm table-striped" id="table">
    <thead>
        <tr>
            <td colspan="3" class="text-center p-3">
                <strong><?= getSchoolData()['nm_sekolah']; ?></strong><br>
                <?= getSchoolData()['alamat']; ?> <br>
                <?= getSchoolData()['email']; ?>
            </td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td rowspan="4" class=" p-3">
                <div class="text-center img-profile">
                    <img class="" src="<?= base_url() . 'uploads/dokumen_peserta/' . getPesertaData()['kd_peserta'] . '/' . getPesertaData()['photo']; ?>" alt="">
                </div>
            </td>
            <td class="p-2">Nama</td>
            <td class="p-2"><?= getPesertaDataByUser()['nm_lengkap']; ?></td>
        </tr>
        <tr>
            <td class="p-2">Jurusan</td>
            <td class="p-2"> <?= getPesertaDataByUser()['nm_jurusan']; ?></td>
        </tr>
        <tr>
            <td class="p-2">Kode Ujian/Peserta</td>
            <td class="p-2">
                <?= getPesertaData()['kd_peserta']; ?>
            </td>
        </tr>
        <tr>
            <td class="p-2">Gedung & Ruangan Ujian</td>
            <td class="p-2">
                <?= getPesertaRuang()['nm_ruang']; ?>
            </td>
        </tr>

    </tbody>
</table>