<?php
include "Mahasiswa.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $mahasiswa->deleteMahasiswa($id); 
    header("Location: mahasiswa_field.php");
    exit();
}

$selectedRows = $mahasiswa->readMahasiswa();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Ubah Data</th>
        </tr>
        <?php 
        $no = 1;
        foreach($selectedRows as $row){
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row["nama_mahasiswa"] ?></td>
            <td><?= $row['nim'] ?></td>
            <td><?= $row['nama_prodi'] ?></td>
            <td><?= $row['alamat'] ?></td>
            <td><?= $row['email'] ?></td>
            <td>
                <a href="update_form.php?id=<?=$row['id_mahasiswa']?>">Update</a>
                <a href="mahasiswa_field.php?id=<?=$row['id_mahasiswa']?>">Delete</a>
            </td>
        </tr>    
        <?php }; ?>
    </table>
    <a href="form_mahasiswa.php">Tambah Data Mahasiswa</a>
</body>
</html>
