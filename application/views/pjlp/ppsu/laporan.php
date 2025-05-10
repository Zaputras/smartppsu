<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row justify-content-start">
        <h1 class="h1 col-lg-5 text-gray-800">Laporan</h1>
    </div>
    <hr>

    <!-- Card Laporan -->
    <div class="card col-lg">

        <div class="card-body">
            <div class="col-lg ml-1">
                <a href="<?= base_url('ppsu/tambahlaporan'); ?>" class="col-lg-2 btn btn-primary">
                    <i class="fas fa-fw fa-plus mr-2"></i>Laporkan
                </a>
            </div>
            <br>

            <?= $this->session->flashdata('pesan_hapuslaporan'); ?>
            <div class="table-responsive">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead class="table-primary">
                        <tr class="text-center">
                            <td>No</td>
                            <td width="10%">Tanggal</td>
                            <td>Sumber Informasi</td>
                            <td>Kondisi Lapangan</td>
                            <td width="15%">Penanganan</td>
                            <td width="15%">Lokasi</td>
                            <td>Gambar</td>
                            <td>Proses Pekerjaan</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($laporan as $lp) : ?>
                            <tr>
                                <td class="text-center"><?= $i; ?></td>
                                <td class="text-center"><?= $lp['tgl']; ?></td>
                                <td><?= $lp['sumber']; ?></td>
                                <td><?= $lp['kondisi']; ?></td>
                                <td><?= $lp['uraian']; ?></td>
                                <td><?= $lp['lokasi']; ?></td>
                                <td><img src="<?= base_url('/assets/img/laporan/') . $lp['image']; ?>" alt="foto_laporan" width="70"></td>
                                <td class="text-center"><?= $lp['progress']; ?></td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-danger" href="<?= base_url('ppsu/deletelaporan/' . $lp['id_laporan']); ?>"> <i class="fas fa-fw fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- end Card Laporan -->
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Laporan Modal -->
<!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Masukan Laporan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="?= base_url('pjlp/laporan'); ?>" method="post">
                    <label for="nopeg">Nomor Pegawai</label>
                    <input type="text" id="nopeg" name="nopeg" class="form-control mb-3" placeholder="?= $user['nopeg']; ?>" readonly>

                    <label for="tgl_lapor">Tanggal Laporan</label>
                    <input class="form-control mb-3" type="date" id="tgl_lapor" name="tgl_lapor">

                    <select name="sumber" id="sumber" class="form-control form-select mb-3">
                        <option selected>--- pilih sumber ---</option>
                        <option value="CRM">CRM</option>
                        <option value="Kegiatan Rutin">Kegiatan Rutin</option>
                        <option value="Laporan Warga">Laporan Warga</option>
                        <option value="Instruksi Pimpinan">Instruksi Pimpinan</option>
                    </select>
                    <input type="text" id="uraian" name="uraian" class="form-control mb-3" placeholder="uraian kegiatan">
                    <input type="text" id="lokasi" name="lokasi" class="form-control mb-3" placeholder="lokasi">

                    <select name="sumber" id="sumber" class="form-control form-select mb-3">
                        <option selected>--- pilih progress ---</option>
                        <option value="Berlanjut">Berlanjut</option>
                        <option value="Selesai">Selesai</option>
                    </select>
                    <div class="input-group mb-3 bordered">
                        <label for="image">Upload Foto</label>
                        <input type="file" id="image" name="image" class="input-group" placeholder="Upload Foto">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div> -->