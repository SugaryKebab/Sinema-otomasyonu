<?php
include_once("../baglanti.php");

$statement = $conn->query("select * from anaysayfaslayt");



while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
   echo ($row['ad']);
   echo('      ');

  }





?>