<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into anggota(nama,alamat,no_tlpon)
values(
'".$_POST['nama']."',
'".$_POST['alamat']."',
'".$_POST['no_tlpon']."')");

if($query_input){
header('location:view_anggota.php');
}else{
	echo mysqli_error();
}
}
?>
<form method="POST">
<table class="table table-bordered" border="1">
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat"></td>
	</tr>
	<tr>
		<td>No Tlpon</td>
		<td><input type="text" name="no_tlpon"></td>
	</tr>
		<tr>
			<td><input type="submit" name="save"></td>
            <td><input type="reset" name="reset"></td>
		</tr>
</table>
</form>