<div class="container">

    <div class="card o-hidden border-0 shadow-lg col-lg-6 my-3 mx-auto">
        <div class="card-body p-0">

            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Tambah Pengumuman</h1>
                        </div>

                        <?= $this->session->flashdata('message'); ?>

                        <form action="<?= base_url('Admin/tambahberita'); ?>" method="GET">
                            <!-- Field tanggal -->
                            <div class="form-group">
                                <input type="date" class="form-control" id="tanggal" name="tanggal">
                                <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <br>
                            <!-- Field Isi Pengumuman -->
                            <div class="form-group">
                                <p>Isi Pengumuman :</p>
                                <textarea type="text" id="isi_berita" name="isi_berita" rows="4" cols="57"></textarea>
                                <?= form_error('isi_berita', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>

                            <div class="row col-sm justify-content-center ml-1">
                                <button type="submit" class="col-sm-4 btn btn-primary btn-block">
                                    Submit
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