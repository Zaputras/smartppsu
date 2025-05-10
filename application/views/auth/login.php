<nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="<?= base_url('assets/img/icon/Logo Smart_PJLP.png'); ?>" alt="Logo_smart_pjlp" width="100" height="35"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('auth/about'); ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('auth/login_admin'); ?>">Administrator</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="bg-image d-flex align-items-center" style="
    background-image: url('assets/img/background/white_cream.png');
    height: 100vh;
  ">
    <div class="row col-lg m-2 d-flex justify-content-between">
        <div class="col-lg-5 mt-5 text-center">
            <img class="img" src="<?= base_url('assets/img/background/Kantor_Kelurahan_Senen1.png'); ?>" alt="kantor kelurahan senen" width="620" height="410">
        </div>

        <div class="col-lg-5 mr-4">
            <div class="col-lg mt-4 text-center">
                <img class="img" src="<?= base_url('assets/img/icon/Logo Smart_PJLP.png'); ?>" alt="Logo_smart_pjlp" width="290" height="95">
                <br>
                <p class="fs-6 text-center">
                    Selamat datang di Sistem Informasi PJLP. Silahkan pilih menu login berdasarkan jabatan.
                </p>
            </div>

            <div class="card col-lg border-bottom-warning">
                <div class="mt-3">
                    <p class="h5 text-center text-gray-900">Login Sebagai</p>
                </div>

                <small><?= $this->session->flashdata('massage'); ?></small>
                <div class="row justify-content-center">
                    <div class="card-body col-lg-5 text-center">
                        <a href="<?= base_url('auth/login_pjlp'); ?>">
                            <img class="img shadow-sm bg-gray-200" width="100" heigth="100" src="<?= base_url('assets/img/icon/builder.png'); ?>" alt="icon_pjlp">
                        </a>
                        <p class="h5 mt-2">PJLP</p>
                    </div>

                    <div class="card-body col-lg-5 m-1 text-center">
                        <a href="<?= base_url('auth/login_pptk'); ?>">
                            <img class="img-thumbnail shadow-sm bg-gray-200" width="100" heigth="100" src="<?= base_url('assets/img/icon/businessman.png'); ?>" alt="icon_pptk">
                        </a>
                        <p class="h5 mt-2">PPTK</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>