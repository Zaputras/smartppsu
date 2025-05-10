<div class="container">

    <div class="card o-hidden border-0 shadow-lg col-lg-6 my-3 mx-auto">
        <div class="card-body p-0">

            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Form Tambah Akun </h1>
                        </div>

                        <?= $this->session->flashdata('message'); ?>

                        <form action="<?= base_url('admin/daftarakun'); ?>" method="POST">
                            <!-- Field No Pegawai -->
                            <div class="form-group">
                                <input type="text" class="form-control" id="nopeg" name="nopeg" placeholder="Nomor Pegawai" value="<?= set_value('nopeg'); ?>">
                                <?= form_error('nopeg', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>

                            <!-- Field Nama -->
                            <div class="form-group">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>

                            <!-- Field Tempat Tanggal Lahir -->
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir">
                                    <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="col-sm-6 ">
                                    <input class="form-control" type="text" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir">
                                    <?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>

                            <!-- Field NIK -->
                            <div class="form-group">
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" value="<?= set_value('nik'); ?>">
                                <?= form_error('nik', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>

                            <!-- Field Jenis Kelamin -->
                            <div class="form-group">
                                <select type="text" id="jk" name="jk" class="form-select form-control">
                                    <option selected>--- pilih jenis kelamin ---</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <?= form_error('jk', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>

                            <!-- Field Alamat -->
                            <div class="form-group">
                                <input type="text" class="form-control " id="alamat" name="alamat" placeholder="Alamat" value="<?= set_value('alamat'); ?>">
                                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>

                            <!-- Field Telepon -->
                            <div class="form-group">
                                <input type="text" class="form-control" id="telp" name="telp" placeholder="Telepon" value="<?= set_value('telp'); ?>">
                                <?= form_error('telp', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>

                            <!-- Field Email -->
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>

                            <!-- Field Password -->
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat Password">
                                </div>
                            </div>

                            <!-- Field Jabatan/Role ID -->
                            <div class="form-group">
                                <select type="int" id="role_id" name="role_id" class="form-select form-control">
                                    <option selected>--- pilih jabatan ---</option>
                                    <option value="2">PPTK</option>
                                    <option value="3">PJLP</option>
                                </select>
                                <?= form_error('role_id', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>

                            <div class="row col-sm justify-content-center ml-1">
                                <button type="submit" class="col-sm-4 btn btn-primary btn-block">
                                    Tambah Akun
                                </button>
                            </div>
                        </form>

                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('admin') ?>">Back Dashboard</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>