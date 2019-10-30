<?php
echo "<fieldset>";
echo "<legend><h1>Form Penggajian</h1></legend>";
    class Gaji
    {
        public $nama,$nip,$alamat,$jml;
        public $pajak = 0.025;
        
        public function __construct($nama,$nip,$alamat,$jml){
            $this->nama = $nama;
            $this->nip = $nip;
            $this->alamat = $alamat;
            $this->jml = $jml;
        }
        public function datadiri(){
            return "Nama : $this->nama 
                   <br> NIP : $this->nip
                   <br> Alamat : $this->alamat
                   <br> Jumlah Hari Kerja : $this->jml";
        }
        public function gaji_kotor(){
            $kotor = $this->jml * 75000;
            return $kotor;
        }
        public function gaji_bersih(){
            $bersih =$this->gaji_kotor() - ($this->gaji_kotor() * $this->pajak);
            return $bersih;
        }
    }
if (isset ($_POST['Input'])) {
    $a =$_POST['nama'];
    $b=$_POST['nip'];
    $c =$_POST['alamat'];
    $d = $_POST['jmlh'];

    $gajian = new Gaji($a,$b,$c,$d);
    echo $gajian->datadiri()."<br>";
    echo "Gaji Kotor : ".$gajian->gaji_kotor()."<br>";
    echo "Gaji Bersih : ".$gajian->gaji_bersih();
         
}echo"</fieldset>";















?>