<?php 
    include "Mahasiswa.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form tambah mahasiswa</title>
</head>
<body style="display: flex;justify-content: center;align-items:center; margin-block-start: 10rem;">
    <form method="post" style="display: flex; flex-direction: column;width: 800px; gap: 1rem;">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Mahasiswa" required>

        <label for="nim">NIM</label>
        <input type="text" inputmode="numeric" id="nim" name="nim" placeholder="Masukkan Nomor Induk Mahasiswa" required>

        <label for="prodi">Prodi</label>
        <select name="prodi" id="prodi" required>
            <option value="1">TI</option>
            <option value="2">TE</option>
            <option value="3">TRM</option>
            <option value="4">TPPL</option>
            <option value="5">RKS</option>
            <option value="6">TM</option>
        </select>

        <label for="alamat">Alamat</label>
        <input type="text" id="alamat" name="alamat" placeholder="Masukkan Alamat Mahasiswa" required>

        <label for="email">email</label>
        <input type="email" id="email" name="email" placeholder="Masukkan Email">

        <button type="submit" name="submit">Submit</button>
    </form>
    <a href="mahasiswa_field.php">Lihat List</a>
</body>
</html>
<?php 
if(isset($_POST['submit'])){
    $id= $_GET['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];

    switch($prodi){
        case 1:
            $prodi = "Teknik Informatika";
            break;
        case 2:
            $prodi = "Teknik Elektro";
            break;
        case 3:
            $prodi = "Teknik Rekayasa Multimedia";
            break;
        case 4:
            $prodi = "Teknik Pengelolan Pengetahuan Limbah";
            break;
        case 5:
            $prodi = "Rekayasa Keamanan Siber";
            break;
        case 6:
            $prodi = "Teknik Mesin";
            break;
    }

    $mahasiswa->updateMahasiswa($id,$nama,$nim,$prodi,$alamat, $email);
}
?>