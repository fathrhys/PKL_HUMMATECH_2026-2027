<?php 
echo "Belajar kontrol alur if else elseif di PHP YEYAAAYYEE";
echo "\n";
echo "\n";

$nilai = 99;
$namasiswa = "Rahesya";

echo "\n---------------------------------\n";

echo "Siswa : $namasiswa\n";
echo "Nilai : $nilai\n";
echo "ini hasil dari pengecekan sistem \n";

if ($nilai >= 90) {
    echo "Kamu lulus dengan nilai A";
}elseif ($nilai >= 80) {
    echo "Kamu lulus dengan nilai B";

}else {
    echo "Kamu belum lulus, Silahkan keluar kelas dan belajar lagi";
}

echo "\n---------------------------------\n";
echo "\n";

echo "Belajar kontrol alur Boolean di PHP YEYAAAYYEE\n";
echo "\n---------------------------------\n";
echo "Cek kondisi TRUE\n";
$serverMenyala = true;
$databaseKonek = false;

if ($serverMenyala) {
    echo "=> Status Server: Aktif. Siap menerima koneksi!";
} else {
    echo "=> Status Server: Mati. Segera periksa log server!";
}
echo "\n---------------------------------\n";

echo "Cek kondisi FALSE\n";
if ($databaseKonek) {
    echo "=> Status Database: Aktif. Siap menerima data!";
} else {
    echo "Status Database: Mati. Segera periksa Database!";
}
echo "\n---------------------------------\n";



?>