<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Pengumuman Informasi</h1>
    <hr>

    <!-- Card Laporan -->
    <?= $this->session->flashdata('message'); ?>
    <div class="card col-lg">
        <div class="card-body">
            <div class="row justify-content-end">
                <a class="btn btn-primary btn-sm col-sm-2 mr-3" href="<?= base_url('admin/tambahberita'); ?>">Tambah Berita</a>
            </div>
            <hr>
            <div class="table-responsive col-lg">
                <table id="datatable" class="table table-striped table-bordered align-middle">
                    <thead class="table-primary">
                        <tr class="text-center">
                            <td width="5%">No</td>
                            <td width="10%">Tanggal</td>
                            <td width="50%">Isi Informasi</td>
                            <td width="10%">Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($berita as $br) : ?>
                            <tr>
                                <td class="text-center"><?= $i; ?></td>
                                <td class="text-center"><?= $br['tanggal']; ?></td>
                                <td><?= $br['isi_berita']; ?></td>
                                <td class="text-center">
                                    <button>edit</button>
                                    <button>delete</button>
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