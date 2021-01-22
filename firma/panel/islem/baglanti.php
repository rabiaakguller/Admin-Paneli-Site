<?php
try {
  $baglanti = new PDO('mysql:host=localhost;dbname=firma', 'root', '12345678');


} catch (PDOException $e) {
  print "Hata!: " . $e->getMessage() . "<br/>";
  die();
}
?>
