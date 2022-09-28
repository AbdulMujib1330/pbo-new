<?php 

$nis = $_GET['nis'];

$database = new PDO("mysql:host=localhost;dbname=sekolah11",'root','');
$query = $database->query("DELETE FROM siswa where nis='$nis'");

if($query){
   header("Location:index.php");
}