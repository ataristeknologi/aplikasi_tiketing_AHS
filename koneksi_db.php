<?php
    $koneksi=mysqli_connect("localhost","root","","db_tiketing");

    // cek koneksi
    if(mysqli_connect_errno()){
        echo "koneksi_gagal";
    }else
    {
        echo "koneksi berhasil";
    }
?>