<div class="d-flex justify-content-center mt-3">


    <!-- card form login -->
    <div class="card col-sm-4 mt-3 mr-3 border-bottom-success">
        <card class="card-body mb-3">

            <div class="text-center">
                <img class="img" width="30%" src="<?= base_url('assets/img/icon/logo_jayaraya.png'); ?>" alt="logo_jayaraya">
                <h4 class="text-gray-900 mb-3">Selamat Datang</h4>
            </div>
            <hr>

            <small><?= $this->session->flashdata('massage'); ?></small>
            <form class="user" method="post" action="<?= base_url('auth/login_pptk'); ?>">
                <div class="form-group">
                    <input type="text" class="form-control form-control" id="nopeg" name="nopeg" placeholder="NRK" value="<?= set_value('id_pjlp'); ?>">
                    <?= form_error('nopeg', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="form-group">
                    <select type="text" class="form-select form-control" name="role_id" id="role_id">
                        <option selected> pilih jabatan </option>
                        <option value="2">PPTK</option>
                    </select>
                    <?= form_error('role_id', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control" id="password" name="password" placeholder="Password">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <input type="checkbox" class="ml-1" onclick="myFunction()"> <small> Show Password </small> </input>
                <br>
                <div class="row justify-content-center mt-2">
                    <button type="submit" class="btn btn-sm btn-primary col-lg-3">
                        <small>Login</small>
                    </button>
                </div>
            </form>
            <hr>
            <!-- <div class="text-center">
                    <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Lupa Password?</a>
                </div> -->
            <div class="text-center mb-2">
                <a class="small" href="<?= base_url('auth'); ?>">kembali</a>
            </div>
        </card>
    </div>


</div>