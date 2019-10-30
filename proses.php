<?php

    class Keluarga
    {
        public $nma,$nik,$alamat,$usia;

        public function __construct($nma,$nik,$alamat,$usia){
            $this->nma =$nma;
            $this->nik =$nik; 
            $this->alamat =$alamat;
            $this->usia =$usia;
        }
        public function datakeluarga (){
           foreach ($this->nma as $data => $x) {
            //var_dump ($x);
            echo "- Nama : " .$this->nma[$data] .
                 "  - NIK : ". $this->nik[$data] . 
                 "  - Alamat : ".$this->alamat[$data] .
                 "  - Umur : ". $this->usia[$data] ."<hr>";
            } 
        }
    }
    
if (isset ($_POST['sbm'])) {
    
    $a = $_POST['nama'];
    $b = $_POST['nk'];
    $c = $_POST['almt'];
    $d =$_POST['umur'];
    // var_dump($nama);
    $kk = new Keluarga($a,$b,$c,$d);
    echo $kk->datakeluarga();
}

    
    


?>