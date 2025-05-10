<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> <?= $title; ?> </title>
    <!-- Javascript Bootstrap Datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js">
    </script>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets') ?> /vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets') ?> /css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Date Picker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>

<body onload="window.print()">

    <!-- Card Laporan -->
    <div class="card bg-gradient-white">
        <div class="card-body col-lg p-5">

            <div class="text-center text-gray-900 mb-2">
                <h4>LAPORAN HARIAN PELAKSANAAN PENANGANAN PRASARANA DAN SARANA UMUM TINGKAT KELURAHAN SECARA DIGITAL/ATAU MANUAL</h4>
            </div>
            <table class="table table-bordered-none">
                <tr>
                    <td width="10%">KELURAHAN</td>
                    <td width="2%">:</td>
                    <td class="text-left">KELURAHAN SENEN</td>
                </tr>
                <tr>
                    <td>BULAN</td>
                    <td>:</td>
                    <td>.........................</td>
                </tr>
            </table>
            <!-- <pre class="h6 mb-3">KELURAHAN        : KELURAHAN SENEN</pre>
            <pre class="h6">BULAN            : ...............</pre> -->


            <table class="fs-6 table table-bordered responsive text-gray-900">
                <thead>
                    <tr class="text-center">
                        <td>No</td>
                        <td>Tanggal</td>
                        <td width="10%">Sumber Informasi</td>
                        <td width="10%">Kondisi Lapangan</td>
                        <td width="20%">Penanganan (Pekerjaan PPSU Tingkat Kelurahan)</td>
                        <td>Lokasi</td>
                        <td width="10%">Proses Pekerjaan</td>
                        <td>Keterangan</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($laporan as $lp) : ?>
                        <tr>
                            <td class="text-center"><?= $i; ?></td>
                            <td class="text-center"><?= $lp['tgl']; ?></td>
                            <td><?= $lp['sumber']; ?></td>
                            <td><?= $lp['kondisi']; ?></td>
                            <td><?= $lp['uraian']; ?></td>
                            <td><?= $lp['lokasi']; ?></td>
                            <td class="text-center"><?= $lp['progress']; ?></td>
                            <td>

                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br>

            <table class="col-lg text-gray-900">
                <tr class="text-center">
                    <td width="50%">
                        Koordinator Lapangan
                    </td>
                    <td width="50%">
                        Ketua Kelompok
                    </td>
                </tr>
                <tr>
                    <td><br><br><br><br></td>
                    <td><br><br><br><br></td>
                </tr>
                <tr class="text-center">
                    <td>
                        .............................................
                    </td>
                    <td>
                        .............................................
                    </td>
                </tr>
                <tr class="text-center">
                    <td colspan="2"><br>Mengetahui,</td>
                </tr>
                <tr class="text-center">
                    <td colspan="2">Lurah Kelurahan Senen</td>
                </tr>
                <tr class="text-center">
                    <td colspan="2"><br><br><br><br></td>
                </tr>
                <tr class="text-center">
                    <td colspan="2">.............................................</td>
                </tr>
            </table>


            <!-- end Card Laporan -->
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>
    <script src="assets/js/loginform.js"></script>
</body>

</html>