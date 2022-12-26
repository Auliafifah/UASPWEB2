<?php
    //memanggil file pustaka fungsi
    require "fungsi.php";

    //memindahkan data kiriman dari form ke var biasa
    $id=$_GET['kode'];

    //membuat query hapus data
    $sql = "DELETE FROM matkul WHERE idmatkul='$id'";
    mysqli_query($koneksi,$sql);
    header("location:updateMatkul.php");
?>