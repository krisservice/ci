<div id="templatemo_content" >
<p></p>
<?php
if($tampil==null)
{
?>
<div class="alert alert-error">
<button type="button" class="close" data-dismiss="alert">X</button>
<h4>Peringatan !</h4>
<p>Data Masih kosong</p>
</div>
<?php
}else 
{
echo "<div align='center'>";
echo "<h2>Data Penduduk</h2>";
echo "<table border='1' cellpadding=3 cellspacing=0 class='bordered' width=100%>";
echo "<tr>";
echo "<th bgcolor=#0f0>No</th>";
echo "<th bgcolor=#0f0>NIK</th>";
echo "<th bgcolor=#0f0>NKK</th>";
echo "<th bgcolor=#0f0>Nama Lengkap</th>";
echo "<th bgcolor=#0f0 >Alamat</th>";
echo "<th bgcolor=#0f0>RT</th>";
echo "<th bgcolor=#0f0>RW</th>";
echo "<th bgcolor=#0f0>Opsi</th>";
echo "</tr>";
$no=1;
$w=1;
foreach($tampil as $row)
{  if($w == 1){
    $warna = "#ebf6ff";
     $w = 0;
    }else{
    $warna = "#99ffff";
    $w = 1;
 }
echo "<tr bgcolor=$warna>";
echo "<td align=center>$no</td>";
echo "<td>$row->nik</td>";
echo "<td>$row->nkk</td>";
echo "<td>$row->nama_lengkap</td>";
echo "<td>$row->alamat</td>";
echo "<td>$row->rt</td>";
echo "<td>$row->rw</td>";
?>
<td>
<a href="<?= base_url() ?>pencarian/rincian/<?= $row->nik ?>">RINCIAN</a>
</td>
<?php
$no++;
}
}
echo "</table>";
echo "</div>";
?>
<p></p>
</div>