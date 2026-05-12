<?php
$nama = "nashwan";
$name = "rahesya";
$namatengah = "fathi";
$sintaks = "variable di php";
$barang = "table";
$kota = "malang";
$industri = "Hummatech";
$angkaaaaa = 20262027;
$kalimat = sprintf("2. Penggunaan sprintf di kota %s langsung hari ini dan berada di PT %s YEEAAAYYY dan pada tahun %d ", $kota, $industri, $angkaaaaa);


echo "\n";

echo "ini menggunakan titik Concatenation Operator\n";
echo "nama saya adalah " . $nama . " " . $namatengah . " " . $name;

echo "\n";
echo "\nini menggunakan interpolitan\n";
echo "1. Perkenalkan nama saya $nama dan saya baru saja belajar menggunakan $sintaks";

echo "\n";
echo "\n";
echo "ini menggunakan kurung kurawal\n";
echo "saya punya 5 {$barang}s di pasar.";

echo "\n";
echo "\n";
echo "menggunakan sprintf\n";
echo $kalimat;
?>