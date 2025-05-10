<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar User PJLP</h1>
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
            <table id="datatable" class="table table-bordered ">
                <thead>
                    <tr class="text-center align-middle">
                        <th>No</th>
                        <th>No. Pegawai</th>
                        <th>Nama</th>
                        <th>Tempat Tgl Lahir</th>
                        <th>NIK</th>
                        <th>Jenis Kelamin</th>
                        <th width="40%">Alamat</th>
                        <th>Telepon</th>
                        <th>Email</th>
                        <th width="5%">Action</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    <?php $i = 1; ?>
                    <?php foreach ($userPegawai as $peg) : ?>
                        <tr>
                            <td class=" text-center"><?= $i; ?></td>
                            <td class="text-center"><?= $peg['nopeg']; ?></td>
                            <td><?= $peg['nama']; ?></td>
                            <td><?= $peg['tempat_lahir']; ?>, <?= $peg['tgl_lahir']; ?></td>
                            <td><?= $peg['nik']; ?></td>
                            <td><?= $peg['jk']; ?></td>
                            <td><?= $peg['alamat']; ?></td>
                            <td><?= $peg['telp']; ?></td>
                            <td><?= $peg['email']; ?></td>
                            <td class="text-center">
                                <a href="#" class="btn btn-primary btn-sm mb-2">
                                    <i class="fas fa-fw fa-edit"></i>
                                </a>
                                <a href="<?= base_url('admin/deletepjlp/' . $peg['nopeg']); ?>" onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-sm">
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