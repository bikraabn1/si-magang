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
            <?php if (isset($prodiList) && is_array($prodiList)) : ?>
                <?php foreach ($prodiList as $row) : ?>
                    <option value="<?= $row['id_prodi'] ?>"><?= $row['nama_prodi'] ?></option>
                <?php endforeach ?>
            <?php else : ?>
                <option value="">Data Prodi Tidak Tersedia</option>
            <?php endif; ?>
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

var_dump($prodiList);

?>