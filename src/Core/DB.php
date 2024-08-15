<?php namespace Bikra\Core;

use mysqli;

class DB{
    protected $conn;

    public function __construct(){
        $host = "localhost";
        $username = "root";
        $password = "";
        $servername = "db_si_magang";
        $this->conn = new mysqli($host, $username, $password, $servername);

        echo "Hello World";
    }

    public function create($query){
        if($this->conn->query($query) === TRUE){
            return "Recorded sucessfully";
        }else{
            return "Record Failed";
        }
    }

    public function read($query){
        $result = $this->conn->query($query);

        if($result->num_rows > 0){
            return $result->fetch_all(MYSQLI_ASSOC);
        }else{
            return [];
        }
    }

    public function insert($query){
        if ($this->conn->query($query) === TRUE) {
            return "Record created successfully";
        } else {
            return "Error: " . $query . "<br>" . $this->conn->error;
        }
    }

    public function update($query){
        if ($this->conn->query($query) === TRUE) {
            return "Record created successfully";
        } else {
            return "Error: " . $query . "<br>" . $this->conn->error;
        }
    }
    
    public function delete($query){
        if ($this->conn->query($query) === TRUE) {
            return "Record created successfully";
        } else {
            return "Error: " . $query . "<br>" . $this->conn->error;
        }
    }

    public function getData($query){
        return $this->conn->query($query);
    }

    public function setData($query){
        return $this->conn->query($query);
    }
    
}

$test = new DB();