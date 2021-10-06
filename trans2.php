<html>
    <head> 
        <title> Transaksi 2 </title>
    </head>
    <body> 
        <table width="600" border="1">
            <tr>
                <td> id </td>
                <td> Tanggal </td>
                <td> Uraian </td>
                <td> Masuk </td>
                <td> Keluar </td>
            </tr>
            <?php
            $sql=mysqli_query($connect,"SELECT * FROM transaksi
            ORDER BY id");
            $id=1;
            while($data=mysqli_fetch_array($sql)){
                $tgl=$data['tanggal'];
                $uraian=$data['uraian'];
                $keluar=$data['keluar'];
                $masuk=$data['masuk'];

                echo" 
                <tr>
                <td> ".$id++."</td>
                <td> ".$tgl." </td>
                <td> ".$uraian." </td>
                <td> ".$masuk." </td>
                <td> ".$keluar." </td>
                </tr>";
            }
            ?>
        </table>
</body>
</html>