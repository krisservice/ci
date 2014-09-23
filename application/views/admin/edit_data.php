
<?php 
$row = $penduduk->row();
 ?>
<div id="templatemo_content" >
<p></p>
<div align="center">

<div style="border:1px solid #cccccc;border-radius:10px;border-sadow:10px 10px 10px;  width:600px;background:#dddddd;">
<div align="center">
<!-- url post -->
<form method="post" action="<?= base_url()?>index.php/penduduk/updatePendudukDb/<?= ($row->nik) ?> "> 
  <table width="579" border="0" color="#cccccc" cellpadding="2" cellspacing="1">
    <tr>
      <th colspan="3" align="center">Edit DATA PENDUDUK</th>
    </tr>
    <tr>
<td  width="200px"><div align="left">No KTP</div></td>
      <td>:</td>
      <td>
<label><?php echo form_input('nik',$row->nik);?>


</label></td>
    </tr>
    <tr>
<td><div align="left">No KK</div></td>
      <td>:</td>
      <td>	<label><?php echo form_input('nkk',$row->nkk);?></label></td>
    </tr>
    <tr>
<td><div align="left">Nama Lengkap</div></td>
      <td>:</td>
      <td>	<label><?php echo form_input('nama_lengkap',$row->nama_lengkap);?></label></td>
    </tr>
    <tr>
<td><div align="left">Alamat</div></td>
      <td>:</td>
      <td>	<label><?php echo form_input('alamat',$row->alamat);?></label></td>
    </tr>
    <tr>
<td><div align="left">RT</div></td>
      <td>:</td>
      <td>	<label><select name="rt">
	  <option selected="selected"><?= $row->rt ?></option>
	  <?php for($i=1;$i<=12;$i++){
	  echo "<option>$i</option>";
	  } ?> 
</label></td>
    </tr>
    <tr>
<td><div align="left">RW</div></td>
      <td>:</td>
      <td>	<label><select name="rw">
	  <option selected="selected"><?= $row->rw ?></option>
	  <?php for($i=1;$i<=12;$i++){
	  echo "<option>$i</option>";
	  } ?>
	  </label></td>
    </tr>
    <tr>
<td><div align="left">Jenis Kelamin</div></td>
      <td>:</td>
      <td>	<label><select name="kelamin">
	  <option selected="selected"><?= $row->kelamin ?></option>
	  <?php for($i=1;$i<=12;$i++){
	  echo "<option>$i</option>";
	  } ?>
	  
</label></td>
    </tr>
    <tr>
<td><div align="left">Tempat Lahir</div></td>
      <td>:</td>
      <td>	<label><input type="text" name="tempat_lahir" id="tempat_lahir" value="<?= $row->tempat_lahir ?>" /></label></td>
    </tr>
    <tr>
<td><div align="left">Tanggal Lahir</div></td>
      <td>:</td>
      <td>	<label><input type="text" placeholder="yyyy-mm-dd"  name="tgl_lahir" id="tgl_lahir" value="<?= $row->tgl_lahir ?>" /></label></td>
    </tr>
    <tr>
<td><div align="left">Agama</div></td>
      <td>:</td>
      <td>	<label><input type="text" name="agama" id="agama" value="<?= $row->agama ?>" /></label></td>
    </tr>
    <tr>
<td><div align="left">Pendidikan Akhir</div></td>
      <td>:</td>
      <td>	<label><input type="text" name="pendidikan" id="pendidikan" value="<?= $row->pendidikan ?>" /></label></td>
    </tr>
    <tr>
<td><div align="left">Pekerjaan</div></td>
      <td>:</td>
      <td>	<label><input type="text" name="pekerjaan" id="pekerjaan" value="<?= $row->pekerjaan ?>" /></label></td>
    </tr>
    <tr>
<td><div align="left">Status</div></td>
      <td>:</td>
      <td>	<label><select name="status" id="status">
<option selected="selected"><?= $row->status ?></option>	  
<option value="Lajang">Lajang</option>
<option value="Sudah Menikah">Sudah Menikah</option>
</select></label></td>
    </tr>
    <tr>
<td><div align="left">Hub Keluarga</div></td>
      <td>:</td>
      <td>	<label><select name="hub_dlm_keluarga" id="hub_dlm_keuarga">
<option selected="selected"><?= $row->hub_dlm_keluarga ?></option>
<option value="Kepala Keluarga">Kepala Keluarga</option>
<option value="Istri">Istri</option>
<option value="Anak">Anak</option>
<option value="Cucu">Cucu</option>
</select></label></td>
    </tr>
    <tr>
<td><div align="left">Kewarganegaraan</div></td>
      <td>:</td>
      <td>	<label><input type="text" name="warganegara" id="warganegara" value="<?= $row->warganegara ?>" /></label></td>
    </tr>
    <tr>
<td><div align="left">No Paspor</div></td>
      <td>:</td>
      <td>	<label><input type="text" name="no_paspor" id="no_paspor" value="<?= $row->no_paspor ?>" /></label></td>
    </tr>
    <tr>
<td><div align="left">No Kitas - Kitap</div></td>
      <td>:</td>
      <td>	<label><input type="text" name="no_kitas_kitap" id="no_kitas_kitap" value="<?= $row->no_kitas_kitap ?>" /></label></td>
    </tr>
    <tr>
<td><div align="left">Nama Ayah</div></td>
      <td>:</td>
      <td>	<label><input type="text" name="ayah" id="ayah" value="<?= $row->ayah ?>" /></label></td>
    </tr>
    <tr>
<td><div align="left">Nama Ibu Kandung</div></td>
      <td>:</td>
      <td>	<label><input type="text" name="ibu" id="ibu" value="<?= $row->ibu ?>" /></label></td>
    </tr>
    <tr>
<td><div align="left">Status Kependudukan</div></td>
      <td>:</td>
      <td>	<label><input type="text" placeholder="hidup/mati"  name="status_kependudukan" id="status_kependudukan" value="<?= $row->status_kependudukan ?>" /></label></td>
    </tr>
    <tr>
    <tr>
      <td colspan="3"  align="center"><label>
      <input type="submit" name="button" id="button" value="Simpan" />
      </label></td>
    </tr>
  </table>
  <iframe width=174 height=189 name="gToday:normal:./calender/agenda.js" id="gToday:normal:./calender/agenda.js" src="./calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe></div></div>
</form>
<p></p>
</div>
</div>