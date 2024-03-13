<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>hata Yakalama-3</title>
</head>
<body>
<?php
 function yasHesapla($yil) {
 if(is_string($yil)) {
 throw new Exception("Sadece yıl bilgisi giriniz."); 
 }
 $sonuc=2024-$yil;
 return $sonuc;
 } 
 try {
 $yas=yasHesapla(1970);
 echo "<b>Yaşınız=</b>".$yas."<br>";
 $yas=yasHesapla(2020);
 echo "<b>Yaşınız=</b>".$yas."<br>";
 $yas=yasHesapla("ikibin");
 echo "<b>Yaşınız=</b>".$yas; 
 } 
 catch(Exception $e) {
 echo "<b style='color:red'>Hata mesajı:</b> " .$e->getMessage();
 } 
 finally
 {
 echo "<br>";
 echo "<b style='background-color:orange'>
 		-Yaşamınızda mutluluklar dileriz.</b>";
 }
?>

</body>
</html>