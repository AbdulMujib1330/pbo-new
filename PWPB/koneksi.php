<?php
class koneksi{//<-CLASS
public string $host;//<-ATRIBUT
public string $user;
public string $password;
public string $dbname;

public function getkoneksi(){//<-METHOD
    $this->host="localhost";
    $this->user="root";
    $this->password="";
    $this->dbname="sekolah";
    return new PDO("mysql:host=$this->host;dbname=$this->dbname","$this->user","$this->password");
}
$koneksi=new koneksi();//<-OBJECT
$koneksi->getkoneksi();
?>