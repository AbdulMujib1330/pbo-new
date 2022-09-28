<?php
class siswa{//<-class
    public $nama ="daffa";//<-atribut  //PUBLIC,PRIVATE DAN PROTECTED <-ENCAPSULATION
    function tampilkan_nama(){//<-method
        $nama ="dappa";
        echo "namanya adalah $this->nama";//<-This (memanggil atribut di luar method)
    }
}
class siswa_rpl extends siswa{//<-Inheritance(Pewarisan [data/class])
public $nama ="abdul";
}
$siswa_rpl = new siswa_rpl();
$siswa =new siswa();//<-objek





echo "<h1>";
echo $siswa->tampilkan_nama();//<-Memanggil objek dalam method
echo "</br>";//<-objek
echo $siswa_rpl->tampilkan_nama();//<-Memanggil objek dalam method
// echo $siswa->nama;//<-Memanggil Objek
//Terdapat 4 Pilar OOP Yaitu :
//1.Inheritance
//2.Encapsulation
//3.Abstraction
//4.Polymorphism

?>