<?php
require_once 'class_persegi_panjang.php'; 

$persegiPanjang1 = new PersegiPanjang(5, 3);
$luas = $persegiPanjang1->getLuas();
$keliling = $persegiPanjang1->getKeliling();

echo "Luas Persegi Panjang: $luas <br> Keliling Persegi Panjang: $keliling";
?>
