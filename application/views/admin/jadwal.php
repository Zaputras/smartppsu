<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Upload Jadwal</h1>
    <hr>

    <!-- Main Content -->
    <div class="container row">
        <!-- Card Jadwal -->

        <div class="card col-lg-5 shadow border-bottom-success">
            <div class="card-body ">
                <div class="text-lg text-center font-weight-bold text-info text-uppercase mb-3">
                    FORM UPLOAD JADWAL
                </div>
                <hr>
                <?= form_open_multipart('admin/struktur') ?>
                <div class="form-group">
                    <select class="form-control control-select" name="jabatan" id="jabatan">
                        <option selected>------ Pilih jabatan ------</option>
                        <option value="4">PPSU</option>
                        <option value="5">Pengelola RPTRA</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control control-select" name="bulan" id="bulan">
                        <option selected>------ Pilih bulan ------</option>
                        <option value="Januari">Januari</option>
                        <option value="Februari">Februari</option>
                        <option value="Maret">Maret</option>
                        <option value="April">April</option>
                        <option value="Mei">Mei</option>
                        <option value="Juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="Agustus">Agustus</option>
                        <option value="September">September</option>
                        <option value="Oktober">Oktober</option>
                        <option value="November">November</option>
                        <option value="Desember">Desember</option>
                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Cari Jadwal</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="jadwal" name="jadwal">
                        <label class="custom-file-label" for="jadwal">Choose file</label>
                    </div>
                </div>
                <button class="btn btn-primary"> <i class="fas fa-fw fa-file-upload"></i>Upload</button>
                </form>
            </div>
        </div>

        <div class="col-lg">
            <div class="card border-left-warning mb-3">
                <span class="h5 text-warning m-3">Jadwal PPSU</span>
                <div class="table-responsive p-1">
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <td>No.</td>
                                <td>Jabatan</td>
                                <td>Bulan</td>
                                <td>Dokumen</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card border-left-primary">
                <span class="h5 text-primary m-3">Jadwal RPTRA</span>
                <div class="table-responsive p-1">
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <td>No.</td>
                                <td>Jabatan</td>
                                <td>Bulan</td>
                                <td>Dokumen</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->