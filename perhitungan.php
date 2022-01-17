<?php
function luas_persegi($sisi1, $sisi2)
{
	$luas=$sisi1 * $sisi2;
	return $luas;
}
$luas_persegi = 0;

echo "nilai luas persegi :". $luas_persegi ."<br>";
$luas_persegi =luas_persegi(3,4);

echo "nilai luas_persegi setelah memanggil fungtion : " $luas_persegi ."<br>";
?>