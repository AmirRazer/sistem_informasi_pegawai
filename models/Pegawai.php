<?php
class Pegawai{
    //member variabel
    private $koneksi;
    //member 2 konstruktor
    public function __construct(){
        global $dbh; //panggil instant objek
        $this->koneksi =$dbh;
    }
    //member 3 method2 CRUD
    public function dataPegawai(){
        $sql = "SELECT p.*,d.nama 
        AS bagian, j.nama AS 
        jab FROM pegawai p
        INNER JOIN divisi d ON d.id = p.divisi_id
        INNER JOIN jabatan j ON j.id = p.jabatan_id
        ORDER BY p.id DESC";
        // $data_pegawai = $dbh->query($sql);
        //mengunakan mekanisme prepare statment pdo
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs =$ps->fetchALL();
        return $rs;
    }
    public function getPegawai($id){
        $sql = "SELECT p.*,d.nama 
        AS bagian, j.nama AS 
        jab FROM pegawai p
        INNER JOIN divisi d ON d.id = p.divisi_id
        INNER JOIN jabatan j ON j.id = p.jabatan_id
        WHERE p.id = ?";
        // $data_pegawai = $dbh->query($sql);
        //mengunakan mekanisme prepare statment pdo
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs =$ps->fetch();
        return $rs;
    }
    public function simpan($data){
        $sql = "INSERT INTO pegawai (nip,nama,gender,foto,tmp_lahir,
                tgl_lahir,jabatan_id,divisi_id,alamat) VALUES
                (?,?,?,?,?,?,?,?,?)";
        // $data_pegawai = $dbh->query($sql);
        //mengunakan mekanisme prepare statment pdo
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}

?>