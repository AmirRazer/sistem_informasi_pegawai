<?php
class Divisi{
    //member variabel
    private $koneksi;
    //member 2 konstruktor
    public function __construct(){
        global $dbh; //panggil instant objek
        $this->koneksi =$dbh;
    }
    //member 3 method2 CRUD
    public function dataDivisi(){
        $sql = "SELECT * FROM divisi" ;
        //   $data_pegawai = $dbh->query($sql);
        //  mengunakan mekanisme prepare statment pdo
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs =$ps->fetchALL();
        return $rs;
    }
}

?>