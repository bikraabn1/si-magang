<?php namespace Bikra\Model;

use Bikra\Core\DB;

class Mahasiswa extends DB{
    public function __construct(){
        parent::__construct();
    }

    public function readMahasiswa(){
        $query = "SELECT * FROM mahasiswa INNER JOIN prodi ON mahasiswa.id_prodi = prodi.id_prodi";
        return $this->read($query);
    }

    public function insertMahasiswa($nama, $nim, $prodi, $alamat , $email){
        $query = "INSERT INTO mahasiswa(nama_mahasiswa, nim, id_prodi, alamat, email) VALUES ('$nama','$nim','$prodi','$alamat','$email')";
        return $this->insert($query);
    }

    public function deleteMahasiswa($id){
        $query = "DELETE FROM mahasiswa WHERE id_mahasiswa = $id";
        return $this->delete($query);
    }

    public function updateMahasiswa($id, $nama, $nim, $prodi, $alamat, $email){
        $query = "UPDATE mahasiswa SET nama_mahasiswa = '$nama', nim = '$nim', id_prodi = '$prodi', alamat = '$alamat', email = '$email' WHERE id_mahasiswa = $id";
        return $this->update($query);
    }

    public function getProdi(){
        $query = "SELECT prodi.* FROM mahasiswa RIGHT JOIN prodi ON mahasiswa.id_prodi = prodi.id_prodi";
        return $this->getData($query);
    }
}

$test = new Mahasiswa();