<?php
class PersegiPanjang{
    private $panjang;
    private $lebar;
    
    function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    function getLuas()
    {
        return $this->panjang * $this->lebar;
    }

    function getKeliling()
    {
        return 2 * ($this->panjang + $this->lebar);
    }
}

$persegiPanjang1 = new PersegiPanjang(5, 3);
echo "Luas Persegi Panjang: " . $persegiPanjang1->getLuas() . "<br>";
echo "Keliling Persegi Panjang: " . $persegiPanjang1->getKeliling();
?>