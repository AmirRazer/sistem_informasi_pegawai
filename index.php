<?php 
//----------sertaka koneksi db--------------
include_once 'koneksi.php';
//----------sertakan model-------------
include_once 'models/Pegawai.php';
include_once 'models/Divisi.php';
include_once 'models/Jabatan.php';

//-------Sertakan Potongan2 File Templet Web-------
include_once 'header.php';
// include_once 'home.php';
include_once 'navigation.php';

//area main di logic
//tangkap request menu di url (index.php?hal=......)
$hal =$_REQUEST['hal'];
//jika ada riquest dari menu di url tampilkan halaman sesuai request
if(!empty($hal)){
    include_once $hal.'.php';
}
else{ //jika tidak ada request dari menu di url tampilkan hal home.php
    include_once $hal.'home.php';
}

include_once 'footer.php';
