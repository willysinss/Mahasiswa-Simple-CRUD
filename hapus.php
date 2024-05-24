<?php
    require_once('koneksi.php');

    $koneksiObj = new Koneksi();
    $koneksi = $koneksiObj->getKoneksi();

    if($koneksi->connect_error){
        echo "Gagal Koneksi : ". $koneksi->connect_error;
    }

    $nim = $_GET['nim'];

    if($nim==''){
        echo "Gagal Hapus Data! <br>";
        echo "<a  href'index.php'>kembali</a>";
        return;
    }

    $query = "delete from data_mahasiswa where NIM='$nim'";

    if($koneksi->query($query)===true){
        echo "<br>Data ".$nim.'berhasil dihapus';
    } else{
        echo "<br>Data gagal dihapus";
    }
    echo "<br>";
    echo "<a href='index.php'>Kembali Ke Halaman Utama</a>";
    $koneksi->close();
    ?>
