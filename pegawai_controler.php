<?php
include_once 'koneksi.php';
include_once 'models/pegawai.php';
//step 1 tangkap request form
$nip  = $_POST['nip'];
$nama = $_POST['nama'];
$gender= $_POST['gender']; 
$foto = $_POST['foto'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jabatan = $_POST['jabatan'];
$divisi = $_POST['divisi'];
$alamat = $_POST['alamat'];
//step ke 2 simpan ke array
$data = [
    $nip,
    $nama,
    $gender,
    $foto,
    $tmp_lahir,
    $tgl_lahir,
    $jabatan,
    $divisi,
    $alamat
];
//step ke 3 eksekusi tombol dengan mekanisme pdo
$model = new Pegawai();
$tombol = $_REQUEST['proses'];
switch ($tombol) {
    case 'simpan':
        $model->simpan($data);
        break;

        case 'ubah':
            //tangkap hiden field idx untuk klausa where id
            $data[] = $_POST['idx'];
            $model->ubah($data);
            break;

            case 'hapus':
                //hapus 9 data di atas
                //panggil method hapus data di sertai tangkap hidden field idx unyuk klausa wher id
                unset($data);               
                $model->hapus($_POST['idx']);
                break;
        
    
    default:
       header('Location:index.php?hal=pegawai');
        break;
}
//step ke 4 di arahkan ke suatu halaman, jika sudah selesai prosesnya
header('Location:index.php?hal=pegawai'); 
?>