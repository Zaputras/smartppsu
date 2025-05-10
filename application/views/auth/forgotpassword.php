<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-5 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2">Melupakan password?</h1>
                                    <p class="mb-4">Kamu hanya perlu memasukan email
                                        dan kami akan mengirimkan link reset password!</p>
                                </div>
                                <form class="user row justify-content-center">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Alamat Email...">
                                    </div>

                                    <a href="login.html" class=" col-sm-4 btn btn-primary btn-user btn-block">
                                        Reset Password
                                    </a>
                                </form>
                                <hr>

                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth'); ?>">Kembali ke Halaman Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>