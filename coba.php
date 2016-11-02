<?php

$nilai = 90;
$nama = "Luki Putra ";
$matkul = "Mata Kuliah Kalkulus";
if ($nilai >= 80 ) {
	echo "$nama<br>";
	echo "Mendapat NIlai A <br>";
	echo "$matkul";
}
else if ($nilai > 70 ) {
	echo "$nama<br>";
	echo "Mendapat Nilai B <br>";
	echo "$matkul";
}
else if ($nilai > 60 ) {
	echo "$nama<br>";
	echo "Mendapat Nilai C <br>";
	echo "$matkul";
}
else if ($nilai >= 50){
	echo "$nama<br>";
	echo "Mendapat nilai D <br>";
	echo "$matkul";
}
else if ($nilai < 50 ) {
	echo "$nama<br>";
	echo "Mendapat Nilai E <br>";
	echo "$matkul";
}
?>