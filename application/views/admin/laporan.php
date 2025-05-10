<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Laporan Kegiatan PJLP</h1>
    <hr>

    <!-- Select Tanggal -->
    <div class="card p-3">
        <form method="POST" action="<?php echo base_url('admin/laporan') ?>">

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
        <div class="card-body">
            <div class="row justify-content-between my-3">
                <div class="col-lg-3 ml-2">
                    <h3>Laporan</h3>
                </div>
                <div class="mr-3">
                    <a href="<?= base_url('admin/cetaklaporan'); ?>" class="btn btn-primary" target="_blank"><i class="fas fa-fw fa-print mr-2"></i>Cetak</a>
                </div>
            </div>
            <div class="table-responsive col-lg">
                <table id="datatable" class="table table-striped table-bordered align-middle">
                    <thead class="table-primary">
                        <tr class="text-center">
                            <td>No</td>
                            <td width="10%">Tanggal</td>
                            <td>Sumber Informasi</td>
                            <td>Kondisi Lapangan</td>
                            <td width="20%">Penanganan (Pekerjaan PPSU Tingkat Kelurahan)</td>
                            <td>Lokasi</td>
                            <td>Gambar</td>
                            <td>Proses Pekerjaan</td>
                            <!-- <td>Action</td> -->
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
                                <!-- <td>

                            </td> -->
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