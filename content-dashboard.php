<?php
require_once 'koneksi.php';

$queryMitra = mysqli_query($conn, "SELECT * FROM mitra");
$queryBarang = mysqli_query($conn, "SELECT * FROM barang");


$dataMitra = mysqli_num_rows($queryMitra);
$dataBarang = mysqli_num_rows($queryBarang);

?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-10">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Mitra</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?= $dataMitra ?> Perusahaan
                                    <span class="text-sm font-weight-bolder">
                                        <a href="" class="text-success" data-bs-toggle="modal" data-bs-target="#modalDetail">Detail</a>
                                    </span>

                                    <!-- Modal Detail -->
                                    <div class="modal fade" id="modalDetail">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Detail Mitra</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <?php

                                                    while ($data = mysqli_fetch_array($queryMitra)) { ?>
                                                        <ul class="list-group">
                                                            <li class="list-group-item h6"><?= $data['nama_mitra'] ?></li>
                                                        </ul>
                                                    <?php }

                                                    ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-10">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Jenis Barang</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?= $dataBarang ?> Barang
                                    <span class="text-sm font-weight-bolder">
                                        <a href="" class="text-success" data-bs-toggle="modal" data-bs-target="#modalBarang">Detail</a>
                                    </span>

                                    <!-- Modal Detail -->
                                    <div class="modal fade" id="modalBarang">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Detail Barang</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <?php

                                                    while ($data = mysqli_fetch_array($queryBarang)) { ?>
                                                        <ul class="list-group">
                                                            <li class="list-group-item h6"><?= $data['nama_barang'] ?></li>
                                                        </ul>
                                                    <?php }

                                                    ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>