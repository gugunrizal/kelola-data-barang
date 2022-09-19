<div class="col-md-12 mb-lg-0 mb-4">
    <div class="card mt-4">
        <div class="card-header pb-0 p-3">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                    <h6 class="mb-0">Data Mitra</h6>
                </div>
                <div class="col-6 text-end">
                    <a class="btn btn-primary" href="http://localhost/vsga/mitra/add-list.php"><i class="fas fa-plus"></i></a>
                </div>
            </div>

            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-header pb-0">
                                <h6>Mitra Perusahaan</h6>
                            </div>
                            <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0" id="table-data">
                                        <thead>
                                            <tr>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Perusahaan</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Pimpinan</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No HP</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                                                <th colspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                                            </tr>
                                        </thead>

                                        <?php

                                        require_once 'koneksi.php';

                                        $query = mysqli_query($conn, "SELECT * FROM mitra");
                                        while ($data = mysqli_fetch_array($query)) {

                                        ?>

                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm"><?= $data["nama_mitra"];  ?></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm"><?= $data["nama_pimpinan"];  ?> </h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm"><?= $data["no_hp"];  ?> </h6>
                                                            </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm"><?= $data["alamat"];  ?> </h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <a href="http://localhost/vsga/mitra/update-mitra.php?id=<?= $data['id_mitra'] ?>" class=" text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                                    Edit
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-3 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <a href="http://localhost/vsga/mitra/delete-mitra.php?id=<?= $data['id_mitra'] ?>" data-bs-toggle="modal" data-bs-target="#hapusData" class="text-secondary font-weight-bold text-xs">
                                                                    Hapus
                                                                </a>

                                                                <form action="mitra/delete-mitra.php" method="POST" name="hapus">
                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="hapusData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <input type="hidden" name="id" id="id" value="<?= $data['id_mitra'] ?>">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Apakah Yakin?</h5>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                                    <button type="submit" class="btn btn-primary" onclick="">HAPUS</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
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
<script>
    function hapusData(id) {
        document.getElementById('id_mitra').value = id;
    }
</script>