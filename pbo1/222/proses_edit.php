<?php
 $nama = $_POST['nama'];
 $kelas = $_POST['kelas'];
 $nis = $_POST['nis'];

 $database = new PDO("mysql:host=localhost;dbname=sekolah11",'root','');
 $query = $database->query("UPDATE `siswa` SET nama='$nama',kelas='$kelas' WHERE nis='$nis'");

 if($query){
    header("Location:index.php");
 }