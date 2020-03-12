<?php
include_once("../baglanti.php");
$sql = $_POST['sql'];


try{
$conn->exec($sql);
echo "Record deleted successfully";
}
catch(PDOException $e)
{
echo $sql . "<br>" . $e->getMessage();
}







?>