<?php

require_once("../baglanti.php");


$seansid = $_POST['seansid'];
$saatid = $_POST['seansaatid'];

$statement = $conn->query("select * FROM seans
inner JOIN seanssaatleri on seanssaatleri.seansid = seans.id 
WHERE  seanssaatleri.id <> $saatid 
AND seans.id = $seansid");
$i = 0;

while ($row = $statement->fetch(PDO::FETCH_NUM)) {
    $i = $i + 1;

    echo('<option id='.$i.'>'.$row[10].' ile '.$row[12].' </option>');
}

echo('<option style="display:none;" id="updatetoplam" value='.$i.'>'. $i.'</option>');





?>