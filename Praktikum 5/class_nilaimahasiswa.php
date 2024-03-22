<?php
class NilaiMahasiswa
{
    var $nama, $matkul, $nilai;

    function __construct($nama, $matkul, $nilai)
    {
        $this->nama = $nama;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
    }

    function kelulusan()
    {
        return $this->nilai <56 ? "TIDAK LULUS" : "LULUS";
    }

    function hasil()
    {
        if ($this->nilai > 0 && $this->nilai <= 35){
            return "E";
        } else if ($this->nilai <= 55){
            return "D";
        } else if ($this->nilai <= 69){
            return "C";
        } else if ($this->nilai <= 84){
            return "B";
        } else if ($this->nilai <= 100){
            return "A";
        } else{
            return "NILAI TIDAK VALID";
        }
    }
}