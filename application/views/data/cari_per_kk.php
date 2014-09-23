<div id="templatemo_content" >
<p></p>
<h2 align="center">Data kependudukan Desa Gelung Kecamatan Paron</h2>
<div id="menu" align="center" > 
</div>
<h3 align="center">Cari Data Per-KK</h3>
<div align="center">
<div align="center"  style="border:1px solid #bbbbbb; border-radius:10px; width:350px; height:100; background:#cccccc; border-shadow:10px 10px 10px;">
<p></p>
<?php echo form_open('pencarian/search_data',array('class' =>'Form-search')); ?>
<input type="text" class="span2 search-query" name="search" />
<select name="rw">
	  <option selected="selected">01</option>
	  <?php for($i=1;$i<=5;$i++){
	  echo "<option>$i</option>";
	  } ?>

</select>
<button type="submit" class="btn">Search</button>
<?php echo form_close(); ?>
<p></p>
</div>

</div>
<p></p>

</div>