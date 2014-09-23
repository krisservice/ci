<?php// echo validation_errors(); ?>
<?php 
$row = $penduduk->row();
 ?>
<div id="templatemo_content" >
<p></p>
<div align="center">
<div style="border:1px solid #cccccc;border-radius:10px;border-sadow:10px 10px 10px;  width:90%;background:#dddddd;">
<div align="center">
<!-- url post -->

  <table width="60%" border="0" color="#cccccc" cellpadding="2" cellspacing="1">
    <tr>
      <th colspan="3" align="center"><u><font color="#00f">RINCIAN DATA PENDUDUK</font></u>
	  <p></p>
	  </th>
    </tr>
    <tr>
<td  width="50%"><div align="left">No KTP</div></td>
      <td>:</td>
      <td>
<label><?php echo $row->nik;?>


</label></td>
    </tr>
    <tr>
<td><div align="left">No KK</div></td>
      <td>:</td>
      <td>	<label><?php echo $row->nkk ?></label></td>
    </tr>
    <tr>
<td><div align="left">Nama Lengkap</div></td>
      <td>:</td>
      <td>	<label><?php echo $row->nama_lengkap ?></label></td>
    </tr>
    <tr>
<td><div align="left">Alamat</div></td>
      <td>:</td>
      <td>	<label><?php echo $row->alamat ?></label></td>
    </tr>
    <tr>
<td><div align="left">RT</div></td>
      <td>:</td>
      <td>	<label><?= $row->rt ?> 
</label></td>
    </tr>
    <tr>
<td><div align="left">RW</div></td>
      <td>:</td>
      <td>	<label> <?= $row->rw ?> 
	  </label></td>
    </tr>
    <tr>
<td><div align="left">Jenis Kelamin</div></td>
      <td>:</td>
      <td>	<label> <?= $row->kelamin ?>
</label></td>
    </tr>
    <tr>
<td><div align="left">Tempat Lahir</div></td>
      <td>:</td>
      <td>	<label> <?= $row->tempat_lahir ?> </label></td>
    </tr>
    <tr>
<td><div align="left">Tanggal Lahir</div></td>
      <td>:</td>
      <td>	<label> <?= $row->tgl_lahir ?> </label></td>
    </tr>
    <tr>
<td><div align="left">Agama</div></td>
      <td>:</td>
      <td>	<label> <?= $row->agama ?> </label></td>
    </tr>
    <tr>
<td><div align="left">Pendidikan Akhir</div></td>
      <td>:</td>
      <td>	<label> <?= $row->pendidikan ?> </label></td>
    </tr>
    <tr>
<td><div align="left">Pekerjaan</div></td>
      <td>:</td>
      <td>	<label> <?= $row->pekerjaan ?> </label></td>
    </tr>
    <tr>
<td><div align="left">Status</div></td>
      <td>:</td>
      <td>	<label> <?= $row->status ?> </label></td>
    </tr>
    <tr>
<td><div align="left">Hub Keluarga</div></td>
      <td>:</td>
      <td>	<label> <?= $row->hub_dlm_keluarga ?> </label></td>
    </tr>
    <tr>
<td><div align="left">Kewarganegaraan</div></td>
      <td>:</td>
      <td>	<label> <?= $row->warganegara ?> </label></td>
    </tr>
    <tr>
<td><div align="left">No Paspor</div></td>
      <td>:</td>
      <td>	<label> <?= $row->no_paspor ?> </label></td>
    </tr>
    <tr>
<td><div align="left">No Kitas - Kitap</div></td>
      <td>:</td>
      <td>	<label> <?= $row->no_kitas_kitap ?> </label></td>
    </tr>
    <tr>
<td><div align="left">Nama Ayah</div></td>
      <td>:</td>
      <td>	<label> <?= $row->ayah ?> </label></td>
    </tr>
    <tr>
<td><div align="left">Nama Ibu Kandung</div></td>
      <td>:</td>
      <td>	<label> <?= $row->ibu ?> </label></td>
    </tr>
    <tr>
<td><div align="left">Status Kependudukan</div></td>
      <td>:</td>
      <td>	<label> <?= $row->status_kependudukan ?> </label></td>
    </tr>
    <tr>
    <tr>
      <td colspan="3"  align="center"><label>
    
      </label></td>
    </tr>
  </table>
 </div></div>
</div>
<p></p>
</div>