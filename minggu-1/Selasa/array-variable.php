<?php 
echo "Belajar ARRAY di PHP YEAAAYYEE";
echo "\n";
echo "\n";

echo "Array numerik\n";
$skillSet = ["PHP", "JavaScript", "Python"];
echo "Skill pertama yang dipelajari adalah = " . $skillSet[0] . "\n";
echo "Skill kedua yang di pelajari adalah = " . $skillSet[1] . "\n";

echo "\n";
echo "Array asosiatif\n";
$hewan = [
    "namahewan" => "Kity",
    "jenishewan" => "Kambing",
    "makananhewan" => "Rumput" 
];

echo "Detail Hewan\n";
echo "\n";
echo "Nama Hewan yaitu = " . $hewan["namahewan"] . "\n";
echo "Jenis Hewan = " . $hewan["jenishewan"] . "\n";
echo "Makanan Hewan nya adalah = " . $hewan["makananhewan"] . "\n";


?>