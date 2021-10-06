<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ini Tugas Uas Coeg</title>
</head>
<body>
    <h2>Transaksi Pembukuan Toko Mr. F Store</h2>
    <form name="form1" method="post" action="">
        <table width="500" border="1">
            <tr>
                <td>Tanggal</td>
                <td><input type="date" name="tgl"></td>
            </tr>
            <tr>
                <td>Uraian</td>
                <td><input type="text" name="uraian"></td>
            </tr>
            <tr>
                <td>Jenis</td>
                <td>
                    <input type="radio" name="jenis" value="keluar">Keluar
                    <input type="radio" name="jenis" value="masuk">Masuk
                </td>
            </tr>
            <tr>
                <td>Nilai/Jumlah</td>
                <td><input type="number" name="nilai"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="SUBMIT"></td>
            </tr>
        </table>
    </form>



</body>
</html>
<br/>
<br/>
<?php
$connect=mysqli_connect("localhost","root","","uas_200220004");

if(isset($_POST['submit'])){

    $tgl=$_POST['tgl'];
    $uraian=$_POST['uraian'];
    $jenis=$_POST['jenis'];
    $nilai=$_POST['nilai'];
    
    $query=mysqli_query($connect, "INSERT INTO transaksi
    VALUES('','$tgl','$uraian','$jenis','$nilai')");
}  
echo "Inilah Data Transaksi"; 
include "trans2.php"; 
?>
