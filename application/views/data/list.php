<!-- File products_view.php -->
<div id="templatemo_content" >
<p></p>

<?php
$jumlahPenduduk = $listPenduduk->num_rows(); //$listProduct berasal dari data yang dilempar dari controller, yaitu $data['listProducts']. num_rows() digunakan untuk menghitung jumlah baris yang dimiliki ketika kita melakukan select dari database

if($jumlahPenduduk== 0){
?>
<!-- Kalau datanya masih kosong, kita harus melakukan add product -->
<a href="<?= base_url() ?>index.php/penduduk/addPenduduk">Tambah Produk</a>
<?php
}
else {
?>
<p></p>
<!-- Kalau ada datanya, maka kita akan tampilkan dalam table -->
<h2 align="center">Penduduk List</h2>

<table width="100%" border="1" cellpadding="3" cellspacing="0" color="#cccccc">
<thead>
<tr>
 <th width="48" scope="col" bgcolor="#0f0">No</th> <!-- <th> = table header -->
      <th width="147" scope="col" bgcolor="#0f0">No KTP</th>
      <th width="202" scope="col" bgcolor="#0f0">Nama Lengkap</th>
      <th width="96" scope="col" bgcolor="#0f0">Alamat</th>
      <th width="50" scope="col" bgcolor="#0f0">RT</th>
      <th width="50" scope="col" bgcolor="#0f0">RW </th>
	  <th width="150" scope="col" bgcolor="#0f0">PEKERJAAN </th>
	  <th width="100" scope="col" bgcolor="#0f0">Jenis Kelamin</th>
      <th width="80" scope="col" bgcolor="#0f0">Tgl Lahir</th>
      <th  scope="col" colspan="3" bgcolor="#0f0">Opsi</th>
 </tr>
 </thead>
 <tbody>
 <?php

 //Kita akan melakukan looping sesuai dengan data yang dimiliki
 $i = 1; 
 $w =1;//nantinya akan digunakan untuk pengisian Nomor
 foreach ($listPenduduk->result() as $row) {
  if($w == 1){
    $warna = "#ebf6ff";
     $w = 0;
    }else{
    $warna = "#99ffff";
    $w = 1;
 }
 ?>
 <tr bgcolor=<?= $warna ?> >
 <td><?= $i++ ?></td>
 <td><?= $row->nik ?></td> 
 <td><?= $row->nama_lengkap ?></td>
<td><?= $row->alamat ?></td>
<td><?= $row->rt ?></td>
<td><?= $row->rw ?></td>
<td><?= $row->pekerjaan ?></td>
<td><?= $row->kelamin ?></td>
<td><?= $row->tgl_lahir ?></td><!-- karena berbentuk objek, maka kita menggunakan panah (->) untuk menunjuk field yang ada di database -->
 <td colspan="2">
 <!-- Akan melakukan update atau delete sesuai dengan id yang diberikan ke controller -->
 <a href="<?= base_url() ?>pencarian/rincian/<?= $row->nik ?>">RINCIAN</a>

 </td>
 </tr>
 <?php
 }
 ?>
 </tbody>
 </table>
 <?php
 }
 ?>
 <p></p>
</div>