<?php
    //memanggil file pustaka fungsi
    require "fungsi.php";

    //memindahkan data kiriman dari form ke var biasa
    $id=$_GET['id'];
    $nimhs = $_GET['nim'];

    //membuat query hapus data
    $sql = "DELETE FROM krs WHERE idKrs='$id'";
    mysqli_query($koneksi,$sql);
    header("location:tampilKrs.php?nim=$nimhs");
?>