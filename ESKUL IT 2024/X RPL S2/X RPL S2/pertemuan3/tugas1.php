<?php
$namaLengkap = "GALANG AHMAD SYAHPUTRA";
$kelas = "X RPL 2";
$umur = "17 tahun";
$tempat_tanggalLahir = "Jakarta ,21 OKTOBER 2007";
$no = "087888669113";
$alamat = "Jalan soediro gang siaga 7 no 36";


function biodata( ){
    global $namaLengkap, $umur, $kelas, $tempat_tanggalLahir, $no, $alamat;
    echo "Nama Lengkap = $namaLengkap <br/>";
    echo "Umur = $umur <br/>";
    echo "Kelas = $kelas <br/>";
      echo "Tempat/Tanggal lahir = $tempat_tanggalLahir <br/>";
      echo "No WhatsApp = $no <br/>";
      echo "Alamat = $alamat <br/>";
}

echo biodata();


?>