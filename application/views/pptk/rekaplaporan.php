<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h5 mb-4 text-gray-800">Rekap Laporan</h1>
    <hr>
    <div class="card p-3">
        <form method="POST" action="<?php echo base_url('pptk/rekaplaporan') ?>">

            <div class="form-group">
                <label>Dari Tanggal</label>
                <input type="date" name="dari" class="form-control"></input>
                <?php echo form_error('dari', '<span class="text-small text-danger">', '</span>')  ?>
            </div>

            <div class="form-group">
                <label>Sampai Tanggal</label>
                <input type="date" name="sampai" class="form-control"></input>
                <?php echo form_error('sampai', '<span class="text-small text-danger">', '</span>')  ?>
            </div>

            <button type="submit" class="btn btn-primary"><i class="fas fa-eye"></i> Tampilkan Data</button>

        </form>

    </div>
    <hr>

    <!-- Card Laporan -->
    <div class="card col-lg">
        <div class="row my-3">
            <div class="col-lg-3 ml-2">
                <h3>Laporan Kegiatan</h3>
            </div>
        </div>

        <div class="table-responsive">
            <table id="datatable" class="table table-triped table-bordered responsive">
                <thead class="table-primary">
                    <tr class="text-center">
                        <td>No</td>
                        <td>Tanggal</td>
                        <td>Nama</td>
                        <td>Kondisi Lapangan</td>
                        <td width="30%">Penanganan (Pekerjaan PPSU Tingkat Kelurahan)</td>
                        <td>Lokasi</td>
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
                            <td><?= $lp['nama']; ?></td>
                            <td><?= $lp['kondisi']; ?></td>
                            <td><?= $lp['uraian']; ?></td>
                            <td><?= $lp['lokasi']; ?></td>
                            <td class="text-center"><?= $lp['progress']; ?></td>
                            <td class="text-center">
                                <input type="checkbox" id="status_validasi" name="status_validasi" value="0">
                                <label for="">validasi</label>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="m-2 d-flex justify-content-end"><button class="btn btn-primary">Kirim</button></div>

        </div>

    </div>
    <!-- end Card Laporan -->
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Laporan Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Masukan Laporan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('pjlp/laporan'); ?>" method="post">
                    <input class="form-control mb-3" type="text" id="nopeg" name="nopeg" placeholder="<?= $user['nopeg']; ?>" readonly>
                    <select name="sumber" id="sumber" class="form-control form-select mb-3">
                        <option selected>pilih sumber</option>
                        <option value="Kegiatan Rutin">Kegitatan Rutin</option>
                        <option value="Laporan Warga">Laporan Warga</option>
                        <option value="Instruksi Pimpinan">Instruksi Pimpinan</option>
                        <option value="CRM">CRM</option>
                    </select>
                    <input class="form-control mb-3" type="text" id="uraian" name="uraian" placeholder="Uraian Kegiatan">
                    <input class="form-control mb-3" type="text" id="lokasi" name="lokasi" placeholder="Lokasi Kegiatan">
                    <input class="form-control mb-3" type="text" id="progress" name="progress" placeholder="Lokasi Kegiatan">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>