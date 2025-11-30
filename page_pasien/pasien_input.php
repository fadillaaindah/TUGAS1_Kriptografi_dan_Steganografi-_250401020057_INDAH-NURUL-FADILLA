<?php
include '../page_hf/header.php';
include '../koneksi.php';

?>

<div class="az-content az-content-dashboard">
    <div class="container">
        <div class="az-content-body">
            <div class="az-dashboard-one-title">
                <div>
                    <h2 class="az-dashboard-title">Data Pasien</h2>
                    <p class="az-dashboard-text">Silahkan isi data pasien dengan benar!</p>
                </div>
            </div><!-- az-dashboard-one-title -->

            <div class="az-content-body">
                <div class="row row-sm mg-b-20">
                    <div class="col-lg-5 ht-lg-100p">
                        <div class="card card-table-one">

                            <!--Form input data pasien-->
                            <form action="../page_pasien/pasien_aksi.php" method="POST">
                                <div class="az-content-label mg-b-5">Nama Lengkap</div>
                                <div class="row row-sm mg-t-20">
                                    <div class="col-lg-7 mg-t-10 mg-lg-t-0">
                                        <input class="form-control" placeholder="Nama Lengkap" type="text" name="nm_pasien">
                                    </div>
                                </div>

                                <div class="az-content-label mg-b-5 mg-t-20">Tempat Lahir</div>
                                <div class="row row-sm mg-t-20">
                                    <div class="col-lg-7 mg-t-10 mg-lg-t-0">
                                        <input class="form-control" placeholder="Tempat Lahir" type="text" name="tmp_lhr">
                                    </div>
                                </div>

                                <div class="az-content-label mg-b-5  mg-t-20">Tanggal Lahir</div>
                                <div class="row row-sm mg-t-20">
                                    <div class="col-lg-7 mg-t-10 mg-lg-t-0">
                                        <input class="form-control" placeholder="Tanggal Lahir" type="date" name="tgl_lhr">
                                    </div>
                                </div>

                                <div class="az-content-label mg-b-5  mg-t-20">Jenis Kelamin</div>
                                <div class="row mg-t-10">
                                    <div class="col-lg-3">
                                        <label class="rdiobox">
                                            <input name="jnskel" type="radio" value="L">
                                            <span>Pria</span>
                                        </label>
                                    </div><!-- col-3 -->
                                    <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                                        <label class="rdiobox">
                                            <input name="jnskel" type="radio" value="P">
                                            <span>Wanita</span>
                                        </label>
                                    </div><!-- col-3 -->
                                </div>

                                <div class="az-content-label mg-b-5 mg-t-20">NIK</div>
                                <div class="row row-sm mg-t-20">
                                    <div class="col-lg-7 mg-t-10 mg-lg-t-0">
                                        <input class="form-control" placeholder="Nomor Induk Kependudukan" type="text" name="nik">
                                    </div>
                                </div>

                                <div class="az-content-label mg-b-5 mg-t-20">No. HP</div>
                                <div class="row row-sm mg-t-20">
                                    <div class="col-lg-7 mg-t-10 mg-lg-t-0">
                                        <input class="form-control" placeholder="No. HP" type="text" name="nohp">
                                    </div>
                                </div>

                                <div class="az-content-label mg-b-5 mg-t-20">Alamat</div>
                                <div class="row row-sm mg-t-20">
                                    <div class="col-lg-7 mg-t-10 mg-lg-t-0">
                                        <input class="form-control" placeholder="Alamat" type="textarea" name="alamat">
                                    </div>
                                </div>
                                <div class="row row-sm mg-t-20">
                                    <div class="col-lg-7 col-md-3 mg-t-10 mg-sm-t-0"><button class="btn btn-az-secondary btn-block" type="submit">Kirim Data</button></div>
                                </div>
                            </form>
                        </div><!-- col -->
                    </div><!-- row -->
                    <div class="col-lg-7 mg-t-20 mg-lg-t-0">

                        <!--Table untuk menampilkan data yang telah diinput sebelumnya-->
                        <div class="card card-table-one">
                            <div class="az-content-label mg-b-5">Data Pasien</div>
                            <p class="mg-b-20">Data pasien yang telah dimasukkan sebelum nya.</p>

                            <div class="table-responsive">
                                <table class="table table-bordered mg-b-0">
                                    <thead>
                                        <tr align="center">
                                            <th colspan="2">Aksi</th>
                                            <th>Medrec</th>
                                            <th>Nama Pasien</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Gender</th>
                                            <th>NIK</th>
                                            <th>No. HP</th>
                                            <th>Alamat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $data = mysqli_query($connectdb, "select * from tbl_pasien");
                                        while ($d = mysqli_fetch_array($data)) { ?>
                                            <tr>
                                                <!--Update / ubah data pasien-->
                                                <td>
                                                    <a href="pasien_update.php?id=<?= $d['medrec']; ?>"><i class="typcn typcn-edit"></i>Update</a>
                                                </td>
                                                <!--Delete / hapus data pasien-->
                                                <td>
                                                    <a href="delete_aksi.php?id=<?= $d['medrec']; ?>"><i class="typcn typcn-trash"></i>Delete</a>
                                                </td>
                                                <!--Menampilkan data dari tbl_pasien-->
                                                <th scope="row"><?php echo $d['medrec']; ?></th>
                                                <td><?php echo $d['nm_pasien']; ?></td>
                                                <td><?php echo $d['tmp_lhr']; ?></td>
                                                <td><?php echo $d['tgl_lhr']; ?></td>
                                                <td><?php
                                                    if ($d['jnskel'] == 'L') echo 'Pria';
                                                    else echo 'Wanita'; ?></td>
                                                <!--Menampilkan NIK yang telah di dekripsi-->
                                                <td><?php
                                                    $kunci = 'aZ7mQ24tHk9RjP1sVb6XwE3nFy8Ld0B';
                                                    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));

                                                    // Enkripsi
                                                    $ciphertext = $d['ctext'];

                                                    list($ciphertext, $iv) = explode('::', base64_decode($d['nik']), 2);
                                                    $dekripsi = openssl_decrypt($ciphertext, 'aes-256-cbc', $kunci, 0, $iv);
                                                    echo $dekripsi; ?></td>

                                                <td><?php echo $d['nohp']; ?></td>
                                                <td><?php echo $d['alamat']; ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div><!-- table-responsive -->
                        </div><!-- col -->
                    </div>
                </div>
                <!-- row -->
            </div><!-- az-content-body -->
        </div>
    </div><!-- az-content -->

    <?php include '../page_hf/footer.php' ?>