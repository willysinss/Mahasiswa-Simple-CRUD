<?php
    require_once('koneksi.php');

    $koneksiObj = new Koneksi();
    $koneksi = $koneksiObj->getKoneksi();

    if($koneksi->connect_error){
        echo "Gagal Koneksi : ". $koneksi->connect_error;
    }
    
    $nim  = $_POST['nim'];
    $nama = $_POST['nama'];
    $jl   = $_POST['jl'];
    $smt  = $_POST['smt'];
    $prodi= $_POST['prodi'];
    
    if($nim=='' || $nama=='' || $jl=='' || $smt=='' || $prodi==''){
        echo "Gagal Update, Pastikan Semua Kolom Telah Terisi <br>";
        echo '<a href="input.php">kembali</a>';
        return;
    }

    $query = "update data_mahasiswa set Nama='$nama', Jenis_Kelamin='$jl', Semester='$smt', Prodi='$prodi' where NIM='$nim'";

    if($koneksi->query($query)===true){
        echo "<br>Data ".$nama.'berhasil diupdate';
    } else{
        echo '<br>Data gagal diupdate';
    }

    echo "<br>";
    echo "<a href='index.php'>Kembali Ke Halaman Utama</a>";
    $koneksi->close();
    ?>