<?php   
    include "koneksi_db.php";
    include "menu.php";
    ?>
    <table border="1">
        <thead>
            <th>ID kasir</th>
            <th>Nama kasir</th>
            <th>No Handphone</th>
            <th>Foto</th>
        </thead>
    <?php

    $data=mysqli_query($koneksi,"select * from tbl_kasir");
        while($d=mysqli_fetch_array($data)){
            echo "<tr>
                <td>".$d['id_kasir']."</td>
                <td>".$d['nama_kasir']."</td>
                <td>".$d['no_handphone']."</td>";?>
                <td><img src="foto_kasir/<?php echo $d['foto']?>" width="200px"></td>
                <?php
            echo "</tr>";
        }
    ?>
    </table>