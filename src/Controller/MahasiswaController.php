<?php namespace Bikra\Controller;

use Bikra\Model\Mahasiswa;

class MahasiswaController{
    private $mahasiswa;
    public function __construct(){
        $this->mahasiswa = new Mahasiswa();
    }

    public function create(){
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $prodi = $_POST['prodi'];
            $alamat = $_POST['alamat'];
            $email = $_POST['email'];

            $this->mahasiswa->insertMahasiswa($nama, $nim, $prodi, $alamat, $email);
            header("Location: index.php?action=list");
            exit();
        }

        $prodiList = $this->mahasiswa->getProdi();
        include "../View/html/form_mahasiswa.php";
        var_dump($prodiList);
    }
}