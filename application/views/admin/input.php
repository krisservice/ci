<div id="kependudukan">

  <h2><?php echo $login_info; ?>  Desa Gelung</h2>
  <div align="center">
<div style="border:1px solid #cccccc;border-radius:10px;width:600px;background:#dddddd;">
<div align="center">
<form id="form1" name="postform" method="post" action="<?= base_url() ?>index.php/penduduk/addPendudukDb">
  <table width="" border="0" color="#cccccc" cellpadding="2" cellspacing="1">
    <tr>
      <th colspan="3" align="center">INPUT DATA PENDUDUK</th>
    </tr>
    <tr>
<td  width="200px"><div align="left">No KTP</div></td>
      <td>:</td>
      <td>	
<label><input type="text" name="nik" id="nik" /></label>*</td>
    </tr>
    <tr>
<td><div align="left">No KK</div></td>
      <td>:</td>
      <td>	<label><input type="text" name="nkk" id="nkk" /></label>*</td>
    </tr>
    <tr>
<td><div align="left">Nama Lengkap</div></td>
      <td>:</td>
      <td>	<label><input type="text" name="nama_lengkap" id="nama_lengkap" /></label></td>
    </tr>
    <tr>
<td><div align="left">Alamat</div></td>
      <td>:</td>
      <td>	<label><input type="text" name="alamat" id="alamat" /></label></td>
    </tr>
    <tr>
<td><div align="left">RT</div></td>
      <td>:</td>
      <td>	<label><select name="rt" id="rt">
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select></label></td>
    </tr>
    <tr>
<td><div align="left">RW</div></td>
      <td>:</td>
      <td>	<label><select name="rw" id="rw">
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select></label></td>
    </tr>
    <tr>
<td><div align="left">Jenis Kelamin</div></td>
      <td>:</td>
      <td>	<label><select name="kelamin" id="kelamin">
<option value="Pria">Pria</option>
<option value="Wanita">Wanita</option>
</select></label></td>
    </tr>
    <tr>
<td><div align="left">Tempat Lahir</div></td>
      <td>:</td>
      <td>	<label><input type="text" name="tempat_lahir" id="tempat_lahir" /></label></td>
    </tr>
    <tr>
<td><div align="left">Tanggal Lahir</div></td>
      <td>:</td>
      <td>	<label><input type="text" placeholder="yyyy-mm-dd" name="tgl_lahir" id="tgl_lahir" /><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tgl_lahir);return false;" ><img name="popcal" align="absmiddle" style="border:none" src="<?php echo base_url(); ?>asset/calender/calender.jpeg" width="34" height="29" border="0" alt=""></a></label></td>
    </tr>
    <tr>
<td><div align="left">Agama</div></td>
      <td>:</td>
      <td>	<label><input type="text" name="agama" id="agama" /></label></td>
    </tr>
    <tr>
<td><div align="left">Pendidikan Akhir</div></td>
      <td>:</td>
      <td>	<label><input type="text" name="pendidikan" id="pendidikan" /></label></td>
    </tr>
    <tr>
<td><div align="left">Pekerjaan</div></td>
      <td>:</td>
      <td>	<label><input type="text" name="pekerjaan" id="pekerjaan" /></label></td>
    </tr>
    <tr>
<td><div align="left">Status</div></td>
      <td>:</td>
      <td>	<label><select name="status" id="status">
<option value="Lajang">Lajang</option>
<option value="Sudah Menikah">Sudah Menikah</option>
</select></label></td>
    </tr>
    <tr>
<td><div align="left">Hub Keluarga</div></td>
      <td>:</td>
      <td>	<label><select name="hub_dlm_keluarga" id="hub_dlm_keuarga">
<option value="Kepala Keluarga">Kepala Keluarga</option>
<option value="Istri">Istri</option>
<option value="Anak">Anak</option>
<option value="Cucu">Cucu</option>
</select></label></td>
    </tr>
    <tr>
<td><div align="left">Kewarganegaraan</div></td>
      <td>:</td>
      <td>	<label><input type="text" name="warganegara" id="warganegara" /></label></td>
    </tr>
    <tr>
<td><div align="left">No Paspor</div></td>
      <td>:</td>
      <td>	<label><input type="text" name="no_paspor" id="no_paspor" /></label></td>
    </tr>
    <tr>
<td><div align="left">No Kitas - Kitap</div></td>
      <td>:</td>
      <td>	<label><input type="text" name="no_kitas_kitap" id="no_kitas_kitap" /></label></td>
    </tr>
    <tr>
<td><div align="left">Nama Ayah</div></td>
      <td>:</td>
      <td>	<label><input type="text" name="ayah" id="ayah" /></label></td>
    </tr>
    <tr>
<td><div align="left">Nama Ibu Kandung</div></td>
      <td>:</td>
      <td>	<label><input type="text" name="ibu" id="ibu" /></label></td>
    </tr>
    <tr>
<td><div align="left">Status Kependudukan</div></td>
      <td>:</td>
      <td>	<label><input type="text" placeholder="hidup/mati" name="status_kependudukan" id="status_kependudukan" /></label>* </td>
    </tr>
    <tr>
    <tr>
      <td colspan="3"  align="center"><label>
      <input type="submit" name="button" id="button" value="Simpan" />
      </label></td>
    </tr>
  </table>
  <iframe width="174" height="189" name="gToday:normal:<?php echo base_url(); ?>asset/calender/agenda.js" id="gToday:normal:<?php echo base_url(); ?>asset/calender/agenda.js" src="<?php echo base_url(); ?>asset/calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe></div></div>
</form>
</div></div>