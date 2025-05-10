<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    <hr>

    <!-- Main Content Row -->
    <div class="row">

        <!-- Card ID PJLP -->
        <div class="col-xl-3 col-md-6 mb-2">
            <div class="card border-left-primary h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center m-1">
                        <div class="col mr-2">
                            <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                ID PJLP
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $user['nopeg']; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-id-card fa-3x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Jabatan -->
        <div class="col-xl-3 col-md-6 mb-2">
            <div class="card border-left-warning h-100 py-2">
                <div class="card-body p-2">
                    <div class="row no-gutters align-items-center m-1">
                        <div class="col mr-2">

                            <div class="text-sm font-weight-bold text-warning text-uppercase mb-2">
                                Jabatan
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                PPSU
                            </div>

                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-alt fa-3x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- card Informasi -->
    <div class="card col-lg border-left-info mt-3">
        <div class="card-body">
            <h5>Informasi</h5>

            <div class="table" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
                <table class="table">
                    <tbody>
                        <?php foreach ($berita as $br) : ?>
                            <tr>
                                <td width="15%"><?= $br['tanggal']; ?></td>
                                <td><i>"<?= $br['isi_berita']; ?>"</i></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>


    <!-- End Main Content -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->