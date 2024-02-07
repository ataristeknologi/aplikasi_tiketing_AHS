<?php   
    include "koneksi_db.php";

    ?>
    <table border="1">
        <thead>
            <th>ID Transaksi</th>
            <th>Tanggal Transaksi</th>
            <th>Jmlh Dewasa</th>
        </thead>
    <?php

    $data=mysqli_query($koneksi,"select * from tbl_transaksi");
        while($d=mysqli_fetch_array($data)){
            echo "<tr>
                <td>".$d['id_transaksi']."</td>
                <td>".$d['tgl_transaksi']."</td>
                <td>".$d['tiket_dewasa']."</td>
            </tr>";
        }
    ?>
    </table>