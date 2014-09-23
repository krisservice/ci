<?php
include "../include/connect.php";//sambung ke mysql

//mengambil nilai dari FORM
$nik					=	$_POST['nik'];
$nkk					=	$_POST['nkk'];
$nama_lengkap			=	$_POST['nama_lengkap'];
$alamat					=	$_POST['alamat'];
$rt						=	$_POST['rt'];
$rw						=	$_POST['rw'];
$kelamin				=	$_POST['kelamin'];
$tempat_lahir			=	$_POST['tempat_lahir'];
$tgl_lahir				=	$_POST['tgl_lahir'];
$agama					=	$_POST['agama'];
$pendidikan				=	$_POST['pendidikan'];
$pekerjaan				=	$_POST['pekerjaan'];
$status					=	$_POST['status'];
$hub_dlm_keuarga		=	$_POST['hub_dlm_keuarga'];
$warganegara			=	$_POST['warganegara'];
$no_paspor				=	$_POST['no_paspor'];
$no_kitas_kitap			=	$_POST['no_kitas_kitap'];
$ayah					=	$_POST['ayah'];
$ibu					=	$_POST['ibu'];
$status_kependudukan	=	$_POST['status_kependudukan'];




//Query update data tabel pasien
$hasil = mysql_query("UPDATE pasien SET nama_pasien = '$nama_pasien', nama_belakang = '$nama_belakang', tahun_lahir = '$tahun_lahir', bulan_lahir = '$bulan_lahir', tgl_lahir = '$tgl_lahir', tempat_lahir = '$tempat_lahir', ortu = '$ortu', jenis_kelamin = '$jenis_kelamin', alamat_pasien = '$alamat', alamat_pasien2 = '$alamat2',telepon='$telepon', usia = '$usia' WHERE kode_pasien = '$kode_ps_lama' ");

if ($hasil ){
echo "Sukses Input Data Kunjungan";
?><script>document.location.href="?page=lihat_pasien.php"</script><?php
}
else{
echo "gagal :  ".mysql_error();
}
?>