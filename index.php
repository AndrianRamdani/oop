<?php
class Manusia{
    public $nama = 'Andrian';
    public $umur = 16;
    public $tinggi = 165.80;
    public $hobby = 'Hiking';
    public $ganteng= true;

    public function berangkat($var,$var2){
        return "Berangkat ke Sekolah SMK Assalaam Memakai ".$var." ".$var2;
    }
    public function belajar($var3,$var4){
        return "Belajar Ngoding ".$var3." dan ".$var4;
    }
    public function berimajinasi(){
        return "Berimajinasi";
    }
}
$man = new Manusia;
echo "Nama : ".$man -> nama . "<br>";
echo "Umur : ".$man -> umur ."<br>";
echo "Tinggi : ".$man -> tinggi ."<br>";
echo "Hobby : ".$man -> hobby ."<br>";
echo "Ganteng : ".$man -> ganteng. "<br>";
echo " ".$man -> berangkat('motor','tua') ."<br>";
echo " ".$man -> belajar('java', 'php') ."<br>";
echo " ".$man -> berimajinasi(). "....";

echo "<hr>";
$man1 = new Manusia;
echo "Nama : ".$man1 -> nama = "Ian". "<br>";
echo "Umur : ".$man1 -> umur = 15 ."<br>";
echo " ".$man1 -> berangkat('motor','tua') ."<br>";
echo " ".$man1 -> belajar('java', 'php') ."<br>";
echo " ".$man1 -> berimajinasi(). "....";
?>