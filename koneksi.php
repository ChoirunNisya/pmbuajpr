<?php

$koneksi = mysqli_connect("localhost","root","","pmb-uajpr");

$no_pendaftaran = $_POST['no_pendaftaran'];
$jurusan = $_POST['jurusan'];
$nama = $_POST['nama'];
$tempatlahir = $_POST['tempatlahir'];
$tanggallahir = $_POST['tanggallahir'];
$hp = $_POST['hp'];
$asal_sekolah = $_POST['asal_sekolah'];
$ayah = $_POST['ayah '];
$ibu = $_POST['ibu '];
$hp_ortu = $_POST['hp_ortu'];
$jeniskelamin = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];
$dokumen = $_POST['dokumen'];
$submit= $_POST['submit'];


$query = "INSERT INTO pmb-uajpr VALUE ('$no_pendaftaran','$jurusan','$nama',
'$tempatlahir','$tanggallahir','$hp','$asal_sekolah','$ayah','$ibu','$hp_ortu',
'$jeniskelamin','$alamat','$dokumen','$submit')";

mysqli_query($koneksi,$query);

?>