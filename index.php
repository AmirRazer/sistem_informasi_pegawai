<?php 
include_once 'koneksi.php';
include_once 'header.php';
include_once 'home.php';
include_once 'navigation.php';

//area main di logic
//tangkap request medu di url (index.php?hal=......)
$hal =$_REQUEST['hal'];
//jika ada riquest dari menu di url tampilkan halaman sesuai request
if(!empty($hal)){
    include_once $hal.'.php';
}
else{ //jika tidak ada request dari menu di url tampilkan hal home.php
    include_once $hal.'home.php';
}

include_once 'footer.php';
