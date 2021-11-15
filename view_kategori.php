<?php 
include("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from kategori");

?>
<br/>
<a href="input_kategori.php""btn btn-danger"> Tambahkan Kategori Lain </a>
<table class="table table-bordered" border="1">
	<tr>
		<td>Id Kategori</td>
		<td>Nama</td>
		<td colspan="4"> Ralat </td>
	</tr>
<?php 
$no=1;
while($tampil=mysqli_fetch_array($query_view)){?>
	<tr>
		<td><?php echo $tampil['id_kategori'];?></td>
		<td><?php echo $tampil['nama'];?></td>
		<td><a href="edit_kategori.php?id_kategori=<?php echo $tampil['id_kategori'];?>"> Rubah </a></td>
		<td><a href="hapus_kategori.php?id_kategori=<?php echo $tampil['id_kategori'];?>"> Deleted </a></td>
	</tr>
<?php }?>
</table>