<div id="templatemo_content" >
<p></p>
<div align="center">
<h2>Cari Data Penduduk</h2>
<div align="center"  style="border:1px solid #bbbbbb; border-radius:10px; width:350px; background:#cccccc; border-shadow:10px 10px 10px;">
<p></p>
<?php echo form_open('penduduk/search_data',array('class' =>'Form-search')); ?>
<input type="text" class="span2 search-query" name="search">
<select name="jenis">
<option value="nik">No KTP</option>
<option value="nkk">No KK</option>
<option value="nama_lengkap">Nama</option>
</select>
<button type="submit" class="btn">Search</button>
<?php echo form_close(); ?>
<p></p>
</div>
</div>
<p></p>
</div>