<?php
class NilaiSiswa
{
     public $nama;
     public $nilai;
}

$ns1 = new NilaiSiswa();
$ns1->nama= "Alvaro";
$ns1->nilai= 90;

echo $ns1->nama;
echo $ns1->nilai;
?>