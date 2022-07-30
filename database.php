<?php 

try{
  $conn = new PDO("mysql:host=localhost;dbname=deneme2","root","");
} catch (PDOException $e){
  die ("Could not connect to the database $dbname:" . $e->getMessage());
}



if (isset($_POST['gonder'])){

  $adi = $_POST['adi'];
  $soyadi = $_POST['soyadi'];
  $emaili = $_POST['emaili'];

  $conn->exec("INSERT INTO deneme2 (ad,soyad,email) VALUES ('$adi','$soyadi','$emaili')");
  echo "kaydedildi" ; 

}

   ?>