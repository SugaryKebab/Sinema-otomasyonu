<?php

require_once("../baglanti.php");


$islem = $_POST['islem'];


if ($islem == 1) {

  yazdir($conn);
} else if ($islem == 2) {
  $id = $_POST['id'];


  try {
    require_once("../baglanti.php");
    $conn->exec('DELETE FROM `salon` WHERE `salon`.`id`= ' . $id);
  } catch (PDOException $e) {
  }


  yazdir($conn);
} else if ($islem == 3) {
  $id = $_POST['id'];
  $sayi = $_POST['sayi'];
  $harf = $_POST['harf'];




  try {
    require_once("../baglanti.php");
    $conn->exec('INSERT INTO koltuk (salonid,satirharfi,toplamkoltuk) VALUES( '.$id.' , "'.$harf.'" , '.$sayi.')');
  } catch (PDOException $e) {
    echo ($e);
  }
  yazdir($conn);
} else if ($islem == 4) {
  $ad = $_POST['ad'];
  $id = $_POST['id'];
  try {
    require_once("../baglanti.php");
    $sql = "UPDATE salon SET ad='$ad' WHERE id=$id";

    $stmt = $conn->prepare($sql);


    $stmt->execute();

    echo $stmt->rowCount() . " records UPDATED successfully";
  } catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  yazdir($conn);
} else if ($islem == 5) {
  $id = $_POST['id'];


  $statement = $conn->query("select satirharfi from koltuk where id = ". $id);

  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

    $salonlarad[] = $row['ad'];
    $salonlarid[] = $row['id'];
  }

}






function yazdir($conn)
{

  $statement = $conn->query("select * FROM salon s INNER JOIN koltuk k on s.id = k.salonid");

  echo ('<div> <h2>Kategorileri Düzenle</h2>
   <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#insertkategori">Salon Ekle</button></div> ');

  echo (' 
    
    <div class="container tablolar">

<table id="example" class="table table-hover" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Salon Adı</th>
            <th>Koltuk Harfi</th>
            <th>Toplam Koltuk Sayısı</th>
            <th>İşlemler</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
        <th>Salon Adı</th>
        <th>Koltuk Harfi</th>
        <th>Toplam Koltuk Sayısı</th>
        <th>İşlemler</th>
        </tr>
    </tfoot>
    <tbody>
  


');




  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {





    echo ('    <tr>   
    
    
    <td>' . $row['ad'] . '</td>
    <td>' . $row['satirharfi'] . '</td>
    <td>' . $row['toplamkoltuk'] . '</td>
    <td><button  type="button" id="salonupdate"  data-toggle="modal" data-target="#updatekategori" value="' . $row['salonid'] . "," .  $row['koltukid'] . '" class="btn btn-warning update">Güncelle</button>
     <button type="button" id="salondelete" value="' . $row['salonid'] . "," .  $row['koltukid'] . '" class="btn btn-danger delete">Sil</buttonbutton> </td>
    </tr>
    ');
  }


  echo ('</tbody>
</table>




</div>');

  $statement = $conn->query("select id,ad from salon");

  $salonlarad = array();
  $salonlarid = array();
  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

    $salonlarad[] = $row['ad'];
    $salonlarid[] = $row['id'];
  }


  modal($salonlarad, $salonlarid);
}



function modal(array $array, array $array2)
{
  echo ('<div class="modal " id="insertkategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Kategori Ekle</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>	
    <div class="modal-body">
      <form>
        <div class="form-group">
          <label for="kategori">Salon Adı</label>
          
          <select id="select" class="form-control selectpicker" data-live-search="true">
          ');


       echo(" <option> </option>");

  for ($i = 0; $i < count($array); ++$i) {

    echo ('
    
          <option value="'.$array2[$i].'">' . $array[$i] . '</option>
    
     ');


    
  }


  echo ('   </select>


  <label for="kategori">Koltuk Harfi</label>
  <select id="selectkoltuk" class="form-control selectpicker" data-live-search="true">
  <option></option>
  <option>A</option>
  <option>B</option>
  <option>C</option>
  <option>D</option>
  <option>E</option>
  <option>F</option>
  <option>G</option>
  <option>H</option>
  <option>I</option>
  <option>J</option>
  <option>K</option>
  <option>L</option>
  <option>M</option>
  <option>N</option>
  <option>O</option>
  <option>P</option>
  <option>Q</option>
  <option>R</option>
  <option>S</option>
  <option>T</option>
  <option>U</option>
  <option>V</option>
  <option>W</option>
  <option>X</option>
  <option>Y</option>
  <option>Z</option>
</select>
<label for="kategori">Koltuk Harfi</label>
<input  type="number" class="form-control" id="salonkoltuknumara" aria-describedby="emailHelp" placeholder="Koltuk Sayısı Giriniz">


        </div>



        


      
    
        <button type="submit" id="koltukinsert" data-dismiss="modal" class="btn btn-primary insert">Ekle</button>
      </form>
    </div>

  </div>
</div>
</div>');




echo ('<div class="modal " id="updatekategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Kategori Ekle</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>	
    <div class="modal-body">
      <form>
        <div class="form-group">
          <label for="kategori">Salon Adı</label>
          
          <select id="select" class="form-control selectpicker" data-live-search="true">
          ');


       echo(" <option> </option>");

  for ($i = 0; $i < count($array); ++$i) {

    echo ('
    
          <option value="'.$array2[$i].'">' . $array[$i] . '</option>
    
     ');


    
  }


  echo ('   </select>


  <label for="kategori">Koltuk Harfi</label>
  <select id="selectkoltuk" class="form-control selectpicker" data-live-search="true">
  <option></option>
  <option>A</option>
  <option>B</option>
  <option>C</option>
  <option>D</option>
  <option>E</option>
  <option>F</option>
  <option>G</option>
  <option>H</option>
  <option>I</option>
  <option>J</option>
  <option>K</option>
  <option>L</option>
  <option>M</option>
  <option>N</option>
  <option>O</option>
  <option>P</option>
  <option>Q</option>
  <option>R</option>
  <option>S</option>
  <option>T</option>
  <option>U</option>
  <option>V</option>
  <option>W</option>
  <option>X</option>
  <option>Y</option>
  <option>Z</option>
</select>
<label for="kategori">Koltuk Harfi</label>
<input  type="number" class="form-control" id="salonkoltuknumara" aria-describedby="emailHelp" placeholder="Koltuk Sayısı Giriniz">


        </div>



        


      
    
        <button type="submit" id="koltukupdate" data-dismiss="modal" class="btn btn-primary insert">Ekle</button>
      </form>
    </div>

  </div>
</div>
</div>');


  
}
