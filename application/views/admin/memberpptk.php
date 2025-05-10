<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar User PPTK</h1>
    <hr>

    <!-- Card Laporan -->
    <div class="card col-lg">
        <div class="row my-3">
            <div class="col-lg-3 ml-2">
                <h3></h3>
            </div>
            <div class="row justify-content-end mr-2">
                <a class="col-sm-2 btn btn-primary btn-sm" href="<?= base_url('admin/daftarakun'); ?>">
                    <i class="fas fa-fw fa-plus mr-2"></i>
                    Tambah User
                </a>
            </div>
        </div>

        <?= $this->session->flashdata('message'); ?>

        <div class="table-responsive">
            <table id="datatable" class="table table-bordered">
                <thead class="text-center">
                    <td>No</td>
                    <td>Nopeg</td>
                    <td>Nama</td>
                    <td>Tempat Tgl Lahir</td>
                    <td>NIK</td>
                    <td>Jenis Kelamin</td>
                    <td width="15%">Alamat</td>
                    <td>Telepon</td>
                    <td>Email</td>
                    <td width="9%">Action</td>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($userPegawai as $peg) : ?>
                        <tr>
                            <td class="text-center"><?= $i; ?></td>
                            <td class="text-center"><?= $peg['nopeg']; ?></td>
                            <td><?= $peg['nama']; ?></td>
                            <td><?= $peg['tempat_lahir']; ?>, <?= $peg['tgl_lahir']; ?></td>
                            <td><?= $peg['nik']; ?></td>
                            <td><?= $peg['jk']; ?></td>
                            <td><?= $peg['alamat']; ?></td>
                            <td><?= $peg['telp']; ?></td>
                            <td><?= $peg['email']; ?></td>
                            <td class="text-center">
                                <a href="#" class="btn btn-primary btn-sm">
                                    <i class="fas fa-fw fa-edit"></i>
                                </a>
                                <a href="<?= base_url('admin/deletepptk/' . $peg['nopeg']); ?>" onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-sm">
                                    <i class="fas fa-fw fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>

    </div>
    <!-- end Card Laporan -->
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->