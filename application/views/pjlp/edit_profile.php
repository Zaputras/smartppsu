<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Profile</h1>
    <hr>

    <!-- Card Profile -->
    <div class="card">
        <div class="card-body">
            <!-- upload foto -->
            <form method="post" action="<?= base_url('pjlp/updateProfil') ?>" enctype="multipart/form-data">
                <div class="row mb-4 align-items-center">
                    <div class="col-lg-3">
                        <label for="nopeg" class="col-form-label">Nomor Pegawai</label>
                    </div>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" id="nopeg" name="nopeg" value="<?= $user['nopeg']; ?>" readonly>
                    </div>
                </div>

                <div class="row mb-4 align-items-center">
                    <div class="col-lg-3">
                        <label for="nopeg" class="col-form-label">Nama</label>
                    </div>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>">
                    </div>
                </div>

                <div class="row mb-4 align-items-center">
                    <div class="col-lg-3 mr-3">
                        <label for="nopeg" class="col-form-label">Tempat, Tanggal Lahir</label>
                    </div>
                    <div class="row col-lg-6">
                        <div class="row col-lg-4">
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $user['tempat_lahir']; ?>">
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $user['tgl_lahir']; ?>">
                        </div>
                    </div>
                </div>

                <div class="row mb-4 align-items-center">
                    <div class="col-lg-3">
                        <label for="nopeg" class="col-form-label">NIK</label>
                    </div>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" id="nik" name="nik" value="<?= $user['nik']; ?>">
                    </div>
                </div>

                <div class="row mb-4 align-items-center">
                    <div class="col-lg-3">
                        <label for="nopeg" class="col-form-label">Jenis Kelamin</label>
                    </div>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" id="jk" name="jk" value="<?= $user['jk']; ?>">
                    </div>
                </div>

                <div class="row mb-4 align-items-center">
                    <div class="col-lg-3">
                        <label for="nopeg" class="col-form-label">Alamat</label>
                    </div>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $user['alamat']; ?>">
                    </div>
                </div>

                <div class="row mb-4 align-items-center">
                    <div class="col-lg-3">
                        <label for="nopeg" class="col-form-label">Telepon</label>
                    </div>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" id="telp" name="telp" value="<?= $user['telp']; ?>">
                    </div>
                </div>

                <div class="row mb-4 align-items-center">
                    <div class="col-lg-3">
                        <label for="nopeg" class="col-form-label">Foto Profil</label>
                    </div>
                    <div class="col-sm-2">
                        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="foto_profile" class="img-thumbnail">
                    </div>
                    <div class="col-lg-4 ml-3">
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" placeholder="Cari File .....">
                        </div>
                    </div>
                </div>

                <div class="row mb-4 align-items-center">
                    <div class="col-lg-3">
                        <label for="nopeg" class="col-form-label">Email</label>
                    </div>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>">
                    </div>
                </div>

                <div class="form-group row justify-content-start">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-5">
                        <a class="btn btn-danger mr-2" href="<?= base_url('pjlp/profile'); ?>">kembali</a>
                        <button type="submit" class="btn btn-primary">simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- end card profile -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->