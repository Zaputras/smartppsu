<!-- Begin Page Content -->
<div class="row justify-content-center container-fluid bg-gradient-primary">

    <div class="card my-4 col-lg-5">
        <div class="card-body">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Tambah Laporan</h1>
                <hr>
            </div>

            <?= $this->session->flashdata('massage'); ?>

            <!-- <form class="user col-lg-12 m-2" method="post" action="<?= base_url('pjlp/tambahlaporan'); ?>"> -->
            <form action="<?= base_url('pjlp/tambahlaporan'); ?>" method="POST">
                <label for="nopeg">Nomor Pegawai</label>
                <input type="text" id="nopeg" name="nopeg" class="form-control mb-3" value="<?= $user['nopeg']; ?>" placeholder="<?= $user['nopeg']; ?>" readonly>

                <label for="tgl">Tanggal Laporan</label>
                <input type="date" id="tgl" name="tgl" class="form-control mb-3">

                <select name="kondisi" id="kondisi" class="form-control form-select mb-3">
                    <option selected>--- pilih kondisi ---</option>
                    <option value="Kotor">Kotor</option>
                    <option value="Tergenang">Tergenang</option>
                    <option value="Tanaman Rimbun">Tanaman Rimbun</option>
                    <option value="Rumput Lebat">Rumput Lebat</option>
                    <option value="Lainnya">Lainnya</option>
                </select>

                <select name="sumber" id="sumber" class="form-control form-select mb-3">
                    <option selected>--- pilih sumber ---</option>
                    <option value="CRM">CRM</option>
                    <option value="Kegiatan Rutin">Kegiatan Rutin</option>
                    <option value="Laporan Warga">Laporan Warga</option>
                    <option value="Instruksi Pimpinan">Instruksi Pimpinan</option>
                    <option value="Tugas Kedinasan Lainnya">Tugas Kedinasan Lainnya</option>
                    <option value="Kegiatan Lainnya">Kegiatan Lainnya</option>
                </select>

                <input type="text" id="uraian" name="uraian" class="form-control mb-3" placeholder="uraian">
                <input type="text" id="lokasi" name="lokasi" class="form-control mb-3" placeholder="lokasi">

                <select name="progress" id="progress" class="form-control form-select mb-3">
                    <option selected>--- pilih progress ---</option>
                    <option value="Berlanjut">Berlanjut</option>
                    <option value="Selesai">Selesai</option>
                </select>

                <div class="input-group">
                    <label class="btn btn-outline-secondary" for="image">Browse</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <div class="text-right mt-3">
                    <button type="submit" class="btn btn-primary btn-small">
                        <i class="fas fa-fw fa-save"></i>simpan
                    </button>
                </div>
            </form>


            <hr>
            <div class="text-center">
                <a href="<?= base_url('rptra/laporan'); ?>">Kembali</a>
            </div>
        </div>

    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->