<?php
class manusia { //class induk
    // property class manusia
    public $nama_saya;
    //method pada class manusia
    function berinama($saya){
        $this->nama_saya=$saya;
    }
}

//class tutrunan atau sub class dari class manusia
//kita mengubungkan class dengan syntax exetends
class teman extends manusia{

    //public class teman
    public $nama_teman;
    //method pada class teman
    function berinamateman($teman){
        $this->nama_teman=$teman;
    }
}

//instansiaasi class teman
$Objectteman = new teman;

//method beri nama adalah method pada class manusia, tapi kita bisa mengkasesnya karena telah menghubungkan class teman dengan class manusia
$Objectteman->berinama("Dika");
$Objectteman->berinamateman("Andra");

//menampilkan isi property
echo "Nama Saya :".$Objectteman->nama_saya."<br/>";
echo "Nama Teman :".$Objectteman->nama_teman;
?> 