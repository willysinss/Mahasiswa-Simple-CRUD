<?php 
    include_once('template/head.php');
?>

<body>
    <div class="row">
        <div class="container">
            <h2><i class="fa fa-users"></i>Aplikasi Data Mahasiswa</h2>
            <hr>
            <a href="input.php" class="btn btn-success"><i class="fa fa-plus"></i></a>
            <br><br>
            <table class="table table-striped table-bordered table-hover" id="tb-mahasiswa">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Semester</th>
                        <th>Prodi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    require_once('koneksi.php');
                    $no = 1;

                    $koneksiObj = new koneksi();
                    $koneksi = $koneksiObj->getKoneksi();

                    if($koneksi->connect_error){
                        echo "gagal koneksi : ". $koneksi->connect_error;
                        echo "</td></tr>";
                    }

                    $query = "select * from data_mahasiswa";
                    $data = $koneksi->query($query);
                    if($data->num_rows<=0){
                        echo "<tr>";
                        echo "<td clospan='7' class='text-center'><i>Tidak ada data</i></td>";
                        echo "</tr>";
                    } else{
                        while($row = $data->fetch_assoc()){
                            echo "<tr>";
                            echo "<td >".$no++."</td>";
                            echo "<td class='center'>".$row['NIM']."</td>";
                            echo "<td>".$row['Nama']."</td>";
                            echo "<td>".$row['Jenis_Kelamin']."</td>";
                            echo "<td class ='center'>".$row['Semester']."</td>";
                            echo "<td>".$row['Prodi']."</td>";
                            echo '<td class="center"><a href="formEdit.php?nim='.$row['NIM'].'" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a>';
                            echo ' <a href="hapus.php?nim='.$row['NIM'].'" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a><td>';
                            echo "</tr>";
                        }
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<?php
   include_once('template/script.php');
?>
