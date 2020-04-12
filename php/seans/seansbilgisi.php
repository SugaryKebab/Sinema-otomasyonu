<?php

require_once("../baglanti.php");

$salonid = $_POST['salonid'];
$bugun = $_POST['bugun'];
$seansid = $_POST['seansid'];

$statement = $conn->query("select * FROM seans
inner JOIN seanssaatleri on seanssaatleri.seansid = seans.id 
WHERE seans.baslangicgunu  < '$bugun' and seans.bitisgunu > '$bugun' AND seans.salonid = $salonid  
AND seans.id = $seansid");
$i = 0;

while ($row = $statement->fetch(PDO::FETCH_NUM)) {
    $i = $i + 1;

    echo('<option id='.$i.'>'.$row[10].' ile '.$row[12].' </option>');
}

echo('<option style="display:none;" id="toplam" value='.$i.'>'. $i.'</option>');



$statement = $conn->query("select * FROM seans inner JOIN seanssaatleri on 
seanssaatleri.seansid = seans.id inner JOIN 
film on film.filmid = seans.filmid WHERE seans.id = $seansid LIMIT 1");
$i = 0;

while ($row = $statement->fetch(PDO::FETCH_NUM)) {
   
        echo('<option style="display:none;" id="filmsure" value='.$row[17].'>'.$row[17].'</option>');
}

?>