<?php

$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$lokasi = $_POST['lokasi'];
$keterangan = $_POST['keterangan'];

echo $judul; 
echo $kategori;
echo $lokasi;
echo $keterangan;

$koneksi = mysqli_connect("localhost", "root", "", "fasera");

mysqli_query($koneksi, "INSERT INTO `laporan`(`id_user`, `judul`, `kategori`, `lokasi`, `keterangan`) VALUES ('1','$judul','$kategori','$lokasi','$keterangan')");

?>
