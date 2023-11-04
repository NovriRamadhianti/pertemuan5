<?php
// Membuat array dengan elemen string
$warna = array("hijau", "kuning", "kelabu", "merah muda", "biru");

// Membuat kalimat dengan mengambil kata-kata dari array
$kalimat = "Balonku ada lima. </br>Rupa-rupa warna-nya</br> ";
$kalimat .= "<span style='color: yellow'>".$warna[0]."</span>, ";
$kalimat .= "<span style='color: yellow'>".$warna[1]."</span>, ";
$kalimat .= "<span style='color: yellow'>".$warna[2]."</span>, ";
$kalimat .= "<span style='color: yellow'>".$warna[3]."</span>, dan ";
$kalimat .= "<span style='color: yellow'>".$warna[4]."</span> ";
$kalimat .= "</br>Meletus balon $warna[0] DOR!!!</br> Hatiku sangat kacau..</br>";

// Menampilkan kalimat
echo $kalimat;
?>