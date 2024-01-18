<?php
date_default_timezone_set("Asia/Jakarta");
$tanggal = date ("d-m-Y");
$waktu = date('H:i:s');
echo "Di Jakarta hari ini tanggal : $tanggal <br/>
Jam di jakarta : $waktu";

// user definedfunction
// fungsi yang kita buat sendir

function namasaya($nama, $umur){
    // $namalengkap = "nama saya adalah $nama";
    $umursaya ="umur saya adalah : $umur";
    return $umursaya;
}
echo namasaya ("rendi fadilah", 20);
function jumlahduabilangan($a, $b){
    $total = $a + $b;
    return $total;
}

// echo namasaya("rendi fadilah",20);
// echo jumlahduabilangan(5, 3)

// function pengulanaganbuku($nobuku, $kondisiterminasi, $kondisiterminasi1, $kondisiterminasi2){
//     for($nobuku; $nobuku <= $kondisiterminasi; $nobuku++){
//         if($nobuku <= $kondisiterminasi1){
//             echo "Buku no - $nobuku tersedia <br/>";
//         }else if($nobuku <= $kondisiterminasi2){
//             echo "buku no - $nobuku sedang dipinjam <br/>";
//         }else{
//             echo "buku no $nobuku tidak tersedia <br/>"
//         }
//     }
// }
// echo pengulanagan(1, 15, 6, 10)

?>