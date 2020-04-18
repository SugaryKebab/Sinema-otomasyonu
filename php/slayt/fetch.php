<?php
include_once("../baglanti.php");


$ad = $_POST['ad'];
$soyad = $_POST['soyad'];
$cinsiyet = $_POST['cinsiyet'];
$tel = $_POST['tel'];
$eposta = $_POST['eposta'];
$sifre = $_POST['sifre'];
$sifre = $_POST['uye'];








$sql = "INSERT INTO `musteri` ( `ad`, `soyad`, `tel`, `epost`, `sifre`, `uye`) VALUES ( '?', '?', '?', '?', '?');";
$statement = $conn->prepare($sql);







?>