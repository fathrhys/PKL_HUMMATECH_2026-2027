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




?>