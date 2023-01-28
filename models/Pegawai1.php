<?php
class Pegawai1{
    //member variabel
    private $koneksi;
    //member 2 konstruktor
    public function __construct(){
        global $dbh; //panggil instant objek
        $this->koneksi =$dbh;
    }
    //member 3 method2 CRUD
    public function dataPegawai(){
        $sql = "SELECT p.nip,p.nama,p.gender,d.nama AS bagian, j.nama AS 
        jab, p.alamat FROM pegawai p
        INNER JOIN divisi d ON d.id = p.divisi_id
        INNER JOIN jabatan j ON j.id = p.jabatan_id
        ORDER BY p.id DESC";
        // $data_pegawai = $dbh->query($sql);
        //mengunakan mekanisme prepare statment pdo
        $ps = $dbh->prepare($sql);
        $ps->execute();
        $data_pegawai =$ps->fetchALL();
    }
}

?>