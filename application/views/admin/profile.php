<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Profile</h1>
    <hr>

    <!-- Card Profile -->
    <div class="card">
        <?= $this->session->flashdata('massage'); ?>
        <div class="row col-lg-12">

            <div class="col-lg-5 mt-4">
                <div class="column rounded text-center">
                    <img src="<?= base_url('/assets/img/profile/') . $user['image']; ?>" width="40%" class="img-thumbnail rounded-start justify-content-center" alt="foto_profil">
                    <hr>
                </div>
                <div class="column rounded text-center">
                    <h4><?= $user['nama']; ?></h4>
                </div>
            </div>

            <!-- <div class="col-lg-7">
                <div class="h5  m-4">
                    <span class="card-text">
                        <pre class="card-text">ID Admin                   : <?= $user['nopeg']; ?> </pre>
                    </span>
                    <hr class="mt-1">

                    <span class="card-text">
                        <pre class="card-text">Alamat                     : <?= $user['alamat']; ?> </pre>
                    </span>
                    <hr class="mt-1">

                    <span class="card-text">
                        <pre class="card-text">Email                      : <?= $user['email']; ?> </pre>
                    </span>
                    <hr class="mt-1">

                    <span class="card-text">
                        <pre class="card-text">Telp                       : <?= $user['telp']; ?> </pre>
                    </span>
                    <hr class="mt-1">
                </div>

                <div class="row col-lg justify-content-end mb-3 mt-0">
                    <a class="btn btn-primary col-lg-2 btn-small" href="<?= base_url('pjlp/updateProfil'); ?>">
                        edit
                    </a>
                </div>

            </div> -->


            <table class="table table-responsive col-lg mt-4">
                <tbody>
                    <tr>
                        <td width="45%">ID Admin</td>
                        <td>:</td>
                        <td width="50%"><?= $user['nopeg']; ?></td>
                    </tr>
                    <tr>
                        <td width="45%">Alamat</td>
                        <td>:</td>
                        <td width="50%"><?= $user['alamat']; ?></td>
                    </tr>
                    <tr>
                        <td width="45%">Email</td>
                        <td>:</td>
                        <td width="50%"><?= $user['email']; ?></td>
                    </tr>
                    <tr>
                        <td width="45%">Telepon</td>
                        <td>:</td>
                        <td width="50%"><?= $user['telp']; ?></td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>
    <!-- end card profile -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->