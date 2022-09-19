<div class="col-md-12 mb-lg-0 mb-4">
    <div class="card mt-4">
        <div class="card-header pb-0 p-3">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                    <h6 class="mb-0">Data Barang</h6>
                </div>
                <div class="col-6 text-end">
                    <a class="btn btn-primary" href="javascript:;"><i class="fas fa-plus"></i></a>
                </div>
            </div>

            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-header pb-0">
                                <h6>Data Barang</h6>
                            </div>
                            <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-0">

                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Barang</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga Jual</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Perusahaan</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                                            </tr>
                                        </thead>

                                        <?php

                                        require_once 'koneksi.php';

                                        $query = mysqli_query($conn, "SELECT * FROM mitra INNER JOIN barang ON barang.id_mitra = mitra.id_mitra");
                                        while ($data = mysqli_fetch_array($query)) {

                                        ?>

                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm"><?= $data["nama_barang"];  ?></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm"><?= $data["harga_jual"];  ?> </h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm"><?= $data["nama_mitra"];  ?> </h6>
                                                            </div>
                                                    </td>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-4 py-2 justify-content-center">
                                                            <div class="flex-column">
                                                                <a href="javascript:;" class="btn btn-success text-white font-weight-bold text-xs btn-sm mr-2">
                                                                    Edit
                                                                </a>
                                                                <a href="javascript:;" class="btn btn-danger text-white font-weight-bold text-xs btn-sm">
                                                                    Hapus
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>