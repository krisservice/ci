<?php
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







$hasil = mysql_query("INSERT INTO penduduk VALUES(
'$nik',
'$nkk',
'$nama_lengkap',
'$alamat',
'$rt',
'$rw',
'$kelamin',
'$tempat_lahir',
'$tgl_lahir',
'$agama',
'$pendidikan',
'$pekerjaan',
'$status',
'$hub_dlm_keuarga',
'$warganegara',
'$no_paspor',
'$no_kitas_kitap',
'$ayah',
'$ibu',
'$status_kependudukan'
)");

if ($hasil){
echo "Sukses Berhasil Meng-input Data";
?>
<script>document.location.href="?kode_kunjungan=<?php echo $kode_kunjungan ?>"</script>
<?php
}
else{
echo "gagal 1:  ".mysql_error();//tapi jika gagal maka tampilkan kesalahan query
}
?>