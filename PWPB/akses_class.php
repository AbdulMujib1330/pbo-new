<?php
class siswa{//<-CLASS
var $nama;//<-ATRIBUT
var $kelas;
var $jurusan;

function tampil_siswa(){//<-METHOD
    return"siswa";
}
}
$a = new siswa();//<-OBJECT

$a->nama="<b><h1>anton</h1>";
$a->kelas="<b><h2>11</h2>";
$a->jurusan="<b><h3>RPL</h3>";
echo $a->nama;
echo "<br/>";
echo $a->kelas;
echo "<br/>";
echo $a->jurusan;
echo "<br/>";
?>