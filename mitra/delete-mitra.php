<?php

require_once '../koneksi.php';

$id = $_POST['id'];
$query = mysqli_query($conn, "DELETE FROM mitra WHERE id_mitra='$id'");
header("location: http://localhost/vsga/dashboard.php?page=Mitra");
